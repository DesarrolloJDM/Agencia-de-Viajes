@extends('layouts.admin')

@section('main')
<main class="app-main">
    
<x-admin.title 
    title="Crear Destino" 
/>

{{-- App Content Inicio --}}
<div class="app-content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    Nuevo Destino
                </h3>
            </div>
            <div class="card-body">
                {{-- Formulario Inicio --}}
                <form class="row g-3">
                    <div class="col-4">
                        <label class="form-label" for="name">
                            Destino
                        </label>
                        <input
                            type="text"
                            id="name"
                            name="name"
                            class="form-control"
                            placeholder="Ej. Italia"
                        />
                    </div>
                    <div class="col-md-4">
                        <label class="form-label" for="type">
                            Tipo
                        </label>
                        <select
                            id="type"
                            class=" form-select"
                        >
                            <option selected>-- Seleccionar --</option>
                            <option value="continent">Continente</option>
                            <option value="country">Pais</option>
                            <option value="region">Región</option>
                            <option value="state">Estado</option>
                            <option value="city">Ciudad</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label" for="belongs">
                            Pertenece a
                        </label>
                        <input 
                            type="text"
                            name="belongs" 
                            id="belongs" 
                            class="form-control" 
                            placeholder="Ej. Europa"
                        />
                    </div>
                    <div class="col-12">
                        <label class="form-label" for="description">
                            Descripción
                        </label>
                        <textarea
                            id="description"
                            name="description"
                            class="form-control"
                            rows="12"
                            placeholder="Descubre Italia, un destino fascinante donde..."
                            style="min-height: 16rem"
                        ></textarea>
                    </div>
                    <div class="form-check form-switch">
                        <input
                            class="form-check-input"
                            type="checkbox"
                            role="switch"
                            id="featured-destination"
                            name="featured-destination"
                        />
                        <label class="form-label" for="featured-destination">
                            Destino destacado
                        </label>
                    </div>
                    <div class="col-6">
                        <label class="form-label" for="image-destination">
                            Imagen (Recomendado: 581x660 px)
                        </label>
                        <input 
                            type="file" 
                            class="form-control" 
                            id="image-destination" 
                        />
                    </div>
                    <div class="col-6">
                        <label class="form-label" for="pdf-destination">
                            PDF
                        </label>
                        <input 
                            type="file" 
                            class="form-control" 
                            id="pdf-destination" 
                        />
                    </div>
                    <div class="col-3">
                        <button class="btn btn-primary" type="button">
                            <i class="bi bi-plus me-1" aria-hidden="true"></i>
                            Crear
                        </button>
                    </div>
                </form>
                {{-- Formulario Fin  --}}
            </div>
            <div class="card-footer d-flex gap-2">
                <a 
                    href="{{ route('destinations') }}"
                    class="btn btn-outline-danger ms-auto"
                >
                    <i class="bi bi-x-lg me-1" aria-hidden="true"></i>
                    Cancelar
                </a>
            </div>
        </div>
    </div>
</div>
{{-- App Content Fin --}}
       
</main>

{{-- 

Formulario
- nombre (destino)
- tipo: continente, pais, region, estado, ciudad
- pertenece a
- descripcion
- cover image
- destino destacado


Tabla
- Destino
- Tipo
- Pertenece a 
- Paquetes #
- Estado
- Creado por
- Acciones

--}}
@endsection