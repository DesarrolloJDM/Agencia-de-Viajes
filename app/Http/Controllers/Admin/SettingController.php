<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class SettingController extends Controller
{
    // Mostrar la pagina
    public function index(): View 
    {
        $settings = $this->getSettings();
        return view('admin.settings', compact('settings'));
    }

    // Actualizar Datos Generales
    public function updateGeneral(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'email' => ['nullable', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:30'],
            'street' => ['nullable', 'string', 'max:255'],
            'street_number' => ['nullable', 'string', 'max:20'],
            'postal_code' => ['nullable', 'string', 'max:10'],
            'city' => ['nullable', 'string', 'max:100'],
            'state' => ['nullable', 'string', 'max:100'],
        ]);

        $this->getSettings()->update($validated);

        return back()->with(
            'success',
            'Los datos generales se actualizaron correctamente'
        );
    }

    // Actualizar Redes Sociales
    public function updateSocialMedia(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'facebook_url' => ['nullable', 'url', 'max:2048'],
            'instagram_url' => ['nullable', 'url', 'max:2048'],
            'tiktok_url' => ['nullable', 'url', 'max:2048'],
            'whatsapp_url' => ['nullable', 'url', 'max:2048'],
            'google_maps_url' => ['nullable', 'url', 'max:2048'],
        ]);

        $this->getSettings()->update($validated);

        return back()->with(
            'success',
            'Las redes sociales se actualizaron correctamente'
        );
    }

    // Actualizar logotipo
    public function updateLogo(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'logo' => [
                'required',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:4096'
            ],
        ]);

        $settings = $this->getSettings();

        // Guardar imagen nueva
        $newLogoPath = $validated['logo']->store(
            'company',
            'public'
        );

        // Eliminar imagen anterior
        if($settings->logo_path){
            Storage::disk('public')->delete($settings->logo_path);
        }

        $settings->update([
            'logo_path' => $newLogoPath,
        ]);

        return back()->with(
            'success',
            'El logotipo se actualizó correctamente'
        );
    }

    private function getSettings(): Setting
    {
        return Setting::query()->firstOrCreate([]);
    }
}
