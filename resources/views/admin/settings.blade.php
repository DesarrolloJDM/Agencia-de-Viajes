@extends('layouts.admin')

@section('main')
<main class="app-main">
    
    <x-admin.title 
        title="Configuración" 
    />
        
    <div class="app-content">
        <div class="container-fluid">
            {{-- Inicio Widgeth --}}
            <div class="row g-3">
                {{-- Sidebar Inicio --}}
                <div class="col-md-3">
                    <div
                        class="list-group list-group-flush nav nav-pills flex-column"
                        id="settings-nav"
                        role="tablist"
                    >
                        <a
                            href="#general"
                            class="list-group-item list-group-item-action active"
                            data-bs-toggle="pill"
                            role="tab"
                            aria-selected="true"
                        >
                            <i class="bi bi-sliders me-2" aria-hidden="true"></i>
                            General
                        </a>
                        <a
                            href="#social_media"
                            class="list-group-item list-group-item-action"
                            data-bs-toggle="pill"
                            role="tab"
                        >
                            <i class="bi bi-chat-left-dots me-2" aria-hidden="true"></i>
                            Redes Sociales
                        </a>
                        <a
                            href="#logo"
                            class="list-group-item list-group-item-action"
                            data-bs-toggle="pill"
                            role="tab"
                        >
                            <i class="bi bi-images me-2" aria-hidden="true"></i>
                            Logotipos
                        </a>
                    </div>
                </div>
                {{-- Sidebar Fin --}}

                {{-- Tabla Inicio --}}
                <div class="col-md-9">
                    <div class="tab-content">
                        <!-- Datos Generales -->
                        <div class="tab-pane fade show active" id="general" role="tabpanel">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        Datos Generales
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <form 
                                        class="row g-3" 
                                        method="POST" 
                                        action="{{ route('admin.settings.general.update') }}"
                                    >
                                        @csrf
                                        @method('PUT')
                                        <div class="col-md-6">
                                            <label class="form-label" for="settings-email"> 
                                                Correo Electronico 
                                            </label>
                                            <input
                                                type="email"
                                                name="email"
                                                id="settings-email"
                                                class="form-control @error('email') is-invalid @enderror"
                                                value="{{ old('email', $settings->email) }}"
                                            />

                                            @error('email')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label" for="settings-phone"> 
                                                Teléfono
                                            </label>
                                            <input
                                                type="text"
                                                name="phone"
                                                id="settings-phone"
                                                class="form-control"
                                                value="{{ old('phone', $settings->phone) }}"
                                            />
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label" for="settings-street"> 
                                                Calle
                                            </label>
                                            <input
                                                type="text"
                                                name="street"
                                                id="settings-street"
                                                class="form-control"
                                                value="{{ old('street', $settings->street) }}"
                                            />
                                        </div>
                                        <div class="col-md-3">
                                            <label class="form-label" for="settings-number"> 
                                                Número
                                            </label>
                                            <input
                                                type="text"
                                                name="street_number"
                                                id="settings-number"
                                                class="form-control"
                                                value="{{ old('street_number', $settings->street_number) }}"
                                            />
                                        </div>
                                        <div class="col-md-3">
                                            <label class="form-label" for="settings-postal-code"> 
                                                Código Postal
                                            </label>
                                            <input
                                                type="text"
                                                name="postal_code"
                                                id="settings-postal-code"
                                                class="form-control"
                                                value="{{ old('postal_code', $settings->postal_code) }}"
                                            />
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label" for="settings-city"> 
                                                Ciudad
                                            </label>
                                            <input
                                                type="text"
                                                name="city"
                                                id="settings-city"
                                                class="form-control"
                                                value="{{ old('city', $settings->city) }}"
                                            />
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label" for="settings-state"> 
                                                Estado
                                            </label>
                                            <input
                                                type="text"
                                                name="state"
                                                id="settings-state"
                                                class="form-control"
                                                value="{{ old('state', $settings->state) }}"
                                            />
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary">
                                                Guardar Cambios
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Redes Sociales -->
                        <div class="tab-pane fade" id="social_media" role="tabpanel">
                            @csrf
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        Redes Sociales
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <form class="row g-3" method="POST" action="#">
                                        @csrf
                                        <div class="col-md-12">
                                            <label class="form-label" for="facebook_url"> 
                                                Facebook
                                            </label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="facebook_url"
                                                name="facebook_url"
                                                value="https://facebook.com"
                                            />
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label" for="instagram_url"> 
                                                Instagram
                                            </label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="instagram_url"
                                                name="instagram_url"
                                                value="https://instagram.com"
                                            />
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label" for="tiktok_url"> 
                                                TikTok
                                            </label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="tiktok_url"
                                                name="tiktok_url"
                                                value="https://tiktok.com"
                                            />
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label" for="whatsapp_url"> 
                                                Whatsapp
                                            </label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="whatsapp_url"
                                                name="whatsapp_url"
                                                value="https://Whatsapp.com"
                                            />
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label" for="google_maps_url"> 
                                                Google Maps
                                            </label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="google_maps_url"
                                                name="google_maps_url"
                                                value="https://googlemaps.com"
                                            />
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary">
                                                Guardar Cambios
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Logotipos -->
                        <div class="tab-pane fade" id="logo" role="tabpanel">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        Logotipos
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <form class="row g-3" method="POST" action="#">
                                        @csrf
                                        <div class="col-md-12">
                                            <label 
                                                class="form-label" 
                                                for="pwd-current"
                                            > 
                                                Imagen Actual
                                            </label>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary">
                                                Actualizar
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                {{-- Tabla Fin --}}
            </div>
        </div>
    </div>
</main>
@endsection