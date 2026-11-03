<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Destination;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;

class DestinationController extends Controller
{
    /**
     * Mostrar todos los destinos
     */
    public function index(): View
    {
        $destinations = Destination::query()->with([
            'parent:id,name',
            'creator:id,name,last_name'
        ])->latest()->paginate(10);

        return view('admin.destinations', compact('destinations'));
    }

    /**
     * Mostrar el formulario para crear el destino
     */
    public function create(): View
    {
        $possibleParent = Destination::query()->where('is_active', true)->orderBy('name')
            ->get(['id', 'name', 'type']);

        return view('admin.destination-add',
            compact('possibleParent')
        );
    }

    /**
     * Guardar un destino
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => [
                'required',
                'string',
                'max:150',
                'unique:destinations,name',
            ],
            'type' => [
                'required',
                'in:continente,pais,region,estado,ciudad',
            ],
            'parent_id' => [
                'nullable',
                'exists:destinations,id',
            ],
            'description' => [
                'nullable',
                'string',
            ],
            'is_featured' => [
                'nullable',
                'boolean',
            ],
            'image' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:4096',
            ],
            'pdf' => [
                'nullable',
                'file',
                'mimes:pdf',
                'max:10240',
            ],
        ]);

        $imagePath = null;
        $pdfPath = null;

        if($request->hasFile('image')){
            $imagePath = $request->file('image')->store('destinations/images', 'public');
        }

        if($request->hasFile('pdf')){
            $pdfPath = $request->file('pdf')->store('destinations/pdfs', 'public');
        }

        Destination::create([
            'parent_id' => $validated['parent_id'] ?? null,
            'created_by' => $request->user()->id,
            'name' => $validated['name'],
            'slug' => Str::slug($validated['name']),
            'type' => $validated['type'],
            'description' => $validated['description'] ?? null,
            'image_path' => $imagePath,
            'pdf_path' => $pdfPath,
            'is_featured' => $request->boolean('is_featured'),
            'is_active' => true,
        ]);

        return redirect()->route('admin.destinos.index')->with('success', 'El destino se creó correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Destination $destination)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Destination $destination)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Destination $destination)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Destination $destination)
    {
        //
    }
}
