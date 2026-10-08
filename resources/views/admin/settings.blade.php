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
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
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
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        Redes Sociales
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <form 
                                        class="row g-3" 
                                        method="POST" 
                                        action="{{ route('admin.settings.social.update') }}"
                                    >
                                        @csrf
                                        @method('PUT')

                                        @php
                                            $socialNetworks = [
                                                'facebook_url' => 'Facebook',
                                                'instagram_url' => 'Instagram',
                                                'tiktok_url' => 'Tiktok',
                                                'whatsapp_url' => 'Whatsapp',
                                                'google_maps_url' => 'Google Maps',
                                            ];
                                        @endphp

                                        @foreach ($socialNetworks as $field => $label)
                                            <div class="col-md-12">
                                                <label class="form-label" for="{{ $field }}"> 
                                                    {{ $label }}
                                                </label>
                                                <input
                                                    type="url"
                                                    name="{{ $field }}"
                                                    id="{{ $field }}"
                                                    class="form-control @error($field) is-invalid @enderror"
                                                    value="{{ old($field, $settings->{$field}) }}"
                                                />
                                            </div>

                                            @error($field)
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        @endforeach

                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary">
                                                Guardar Cambios
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Logotipo -->
                        <div class="tab-pane fade" id="logo" role="tabpanel">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        Logotipo
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <form 
                                        class="row g-3" 
                                        method="POST" 
                                        action="{{ route('admin.settings.logo.update') }}"
                                        enctype="multipart/form-data"
                                    >
                                        @csrf
                                        @method('PUT')
                                        <div class="col-md-12">
                                            <label class="form-label"> 
                                                Imagen Actual
                                            </label>

                                            @if($settings->logo_path)
                                                <div class="mb-3">
                                                    <img 
                                                        src="{{ asset('storage/' . $settings->logo_path) }}" 
                                                        alt="Logotipo de Viaja tus Sueños"
                                                        style="max-width: 220px; max-height: 120px;"
                                                    >
                                                </div>
                                            @else
                                                <p class="text-muted">Aún no hay un logotipo</p>
                                            @endif
                                        </div>

                                        <div class="col-md-12">
                                            <label class="form-label" for="logo">
                                                Nuevo logotipo
                                            </label>

                                            <input 
                                                type="file"
                                                name="logo"
                                                id="logo"
                                                accept=".jpg,.jpeg,.png,.webp"
                                                class="form-control @error('logo') is-invalid @enderror"
                                            >

                                            @error('logo')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
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