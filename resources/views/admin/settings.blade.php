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
                                    <form class="row g-3" method="POST" action="#">
                                        @csrf
                                        <div class="col-md-6">
                                            <label class="form-label" for="email"> 
                                                Correo Electronico 
                                            </label>
                                            <input
                                                type="email"
                                                class="form-control"
                                                id="email"
                                                name="email"
                                                value="correo@correo.com"
                                            />
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label" for="phone"> 
                                                Teléfono
                                            </label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="phone"
                                                name="phone"
                                                value="(656) 123-4567"
                                            />
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label" for="street"> 
                                                Calle
                                            </label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="street"
                                                name="street"
                                                value="Av. Principal"
                                            />
                                        </div>
                                        <div class="col-md-3">
                                            <label class="form-label" for="street_number"> 
                                                Número
                                            </label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="street_number"
                                                value="1234"
                                            />
                                        </div>
                                        <div class="col-md-3">
                                            <label class="form-label" for="postal_code"> 
                                                Código Postal
                                            </label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="postal_code"
                                                value="12345"
                                            />
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label" for="city"> 
                                                Ciudad
                                            </label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="city"
                                                value="Ciudad Juárez"
                                            />
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label" for="state"> 
                                                Estado
                                            </label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="state"
                                                value="Chihuahua"
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
                                            <label class="form-label" for="facebook"> 
                                                Facebook
                                            </label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="settings-email"
                                                value="https://facebook.com"
                                            />
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label" for="instagram"> 
                                                Instagram
                                            </label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="settings-email"
                                                value="https://instagram.com"
                                            />
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label" for="tiktok"> 
                                                TikTok
                                            </label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="settings-email"
                                                value="https://tiktok.com"
                                            />
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label" for="whatsapp"> 
                                                Whatsapp
                                            </label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="settings-email"
                                                value="https://Whatsapp.com"
                                            />
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label" for="maps"> 
                                                Google Maps
                                            </label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="settings-email"
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