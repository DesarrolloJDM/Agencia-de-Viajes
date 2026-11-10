<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SaveTravelPackageRequest;
use App\Models\Destination;
use App\Models\Supplier;
use App\Models\TravelPackage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\View\View;
use Throwable;

class TravelPackageController extends Controller
{
    public function index(Request $request): View
    {
        $packages = TravelPackage::query()
            ->with([
                'supplier:id,name',
                'creator:id,name,lastname',
                'originCity:id,name',
            ])
            ->withCount('visitedDestinations')
            ->when(
                $request->filled('search'),
                function ($query) use ($request) {
                    $search = $request->string('search')->toString();

                    $query->where(function ($query) use ($search) {
                        $query
                            ->where('name', 'like', "%{$search}%")
                            ->orWhere('code', 'like', "%{$search}%");
                    });
                }
            )
            ->when(
                $request->filled('travel_type'),
                fn ($query) => $query->where(
                    'travel_type',
                    $request->string('travel_type')->toString()
                )
            )
            ->when(
                $request->filled('status'),
                fn ($query) => $query->where(
                    'status',
                    $request->string('status')->toString()
                )
            )
            ->latest()
            ->paginate(10)
            ->withQueryString();

        return view('admin.packages', compact('packages'));
    }

    public function create(): View
    {
        $suppliers = Supplier::query()
            ->where('is_active', true)
            ->orderBy('name')
            ->get(['id', 'name']);

        $destinations = Destination::query()
            ->where('is_active', true)
            ->orderBy('name')
            ->get([
                'id',
                'name',
                'type',
                'parent_id',
            ]);

        return view(
            'admin.packages-add',
            compact('suppliers', 'destinations')
        );
    }

    public function store(
        SaveTravelPackageRequest $request
    ): RedirectResponse {
        $data = $request->validated();

        $visitedDestinationIds = Arr::pull(
            $data,
            'visited_destination_ids'
        );

        unset($data['image'], $data['pdf']);

        $imagePath = $request->file('image')
            ?->store('packages/images', 'public');

        $pdfPath = $request->file('pdf')
            ?->store('packages/pdfs', 'public');

        $data['image_path'] = $imagePath;
        $data['pdf_path'] = $pdfPath;
        $data['created_by'] = $request->user()->id;
        $data['slug'] = $this->uniqueSlug($data['name']);

        if ($data['status'] === 'published') {
            $data['published_at'] = now();
        }

        try {
            DB::transaction(function () use (
                $data,
                $visitedDestinationIds
            ) {
                $package = TravelPackage::create($data);

                $package->visitedDestinations()->sync(
                    $this->destinationSyncData(
                        $visitedDestinationIds
                    )
                );
            });
        } catch (Throwable $exception) {
            Storage::disk('public')->delete(
                array_filter([$imagePath, $pdfPath])
            );

            throw $exception;
        }

        return to_route('admin.paquetes.index')
            ->with(
                'success',
                'El paquete fue creado correctamente.'
            );
    }

    public function destroy(
        TravelPackage $travelPackage
    ): RedirectResponse {
        $files = [
            $travelPackage->image_path,
            $travelPackage->pdf_path,
        ];

        DB::transaction(function () use ($travelPackage) {
            $travelPackage
                ->visitedDestinations()
                ->detach();

            $travelPackage->delete();
        });

        Storage::disk('public')->delete(
            array_filter($files)
        );

        return to_route('admin.paquetes.index')
            ->with(
                'success',
                'El paquete fue eliminado correctamente.'
            );
    }

    private function destinationSyncData(array $destinationIds): array
    {
        return collect($destinationIds)
            ->values()
            ->mapWithKeys(
                fn ($destinationId, $index) => [
                    $destinationId => [
                        'sort_order' => $index + 1,
                    ],
                ]
            )
            ->all();
    }

    private function uniqueSlug(string $name): string
    {
        $baseSlug = Str::slug($name);
        $slug = $baseSlug;
        $number = 2;

        while (
            TravelPackage::where('slug', $slug)->exists()
        ) {
            $slug = "{$baseSlug}-{$number}";
            $number++;
        }

        return $slug;
    }
}