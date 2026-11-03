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
                <form 
                    class="row g-3"
                    method="POST"
                    action="{{ route('admin.destinos.store') }}"
                    enctype="multipart/form-data"
                >
                    @csrf
                    <div class="col-4">
                        <label class="form-label" for="name">
                            Destino
                        </label>
                        <input
                            type="text"
                            id="name"
                            name="name"
                            class="form-control @error('name') is-invalid @enderror"
                            value="{{ old('name') }}"
                            placeholder="Ej. Italia"
                        />

                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="col-md-4">
                        <label class="form-label" for="type">
                            Tipo
                        </label>
                        <select
                            id="type"
                            name="type"
                            class="form-select @error('type') is-invalid @enderror"
                        >
                            <option value="">-- Seleccionar --</option>
                            <option 
                                value="continente"
                                @selected(old('type') === 'continente')
                            >
                                Continente
                            </option>
                            <option 
                                value="pais"
                                @selected(old('type') === 'pais')
                            >
                                Pais
                            </option>
                            <option 
                                value="region"
                                @selected(old('type') === 'region')
                            >
                                Región
                            </option>
                            <option 
                                value="estado"
                                @selected(old('type') === 'estado')
                            >
                                Estado
                            </option>
                            <option 
                                value="ciudad"
                                @selected(old('type') === 'ciudad')
                            >
                                Ciudad
                            </option>
                        </select>

                        @error('type')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="col-md-4">
                        <label class="form-label" for="parent_id">
                            Pertenece a
                        </label>

                        <select 
                            id="parent_id"
                            name="parent_id"
                            class="form-select @error('parent_id') is-invalid @enderror" 
                        >
                            <option value="">Ninguno</option>

                            @foreach ($possibleParent as $parent)
                                <option 
                                    value="{{ $parent->id }}"
                                    @selected(old('parent_id') == $parent->id)
                                >
                                    {{ $parent->name }} - {{ ucfirst($parent->type) }}
                                </option>
                            @endforeach
                        </select>

                        @error('parent_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        
                    </div>

                    <div class="col-12">
                        <label class="form-label" for="description">
                            Descripción
                        </label>
                        <textarea
                            id="description"
                            name="description"
                            class="form-control @error('description') is-invalid @enderror"
                            rows="12"
                            placeholder="Descubre Italia, un destino fascinante donde..."
                            style="min-height: 16rem"
                        >
                            {{ old('description') }}
                        </textarea>
                    </div>
                    <div class="form-check form-switch">
                        <input
                            class="form-check-input"
                            type="checkbox"
                            role="switch"
                            id="is_featured"
                            name="is_featured"
                            value="1"
                            @checked(old('is_featured'))
                        />
                        <label class="form-label" for="is_featured">
                            Destino destacado
                        </label>
                    </div>
                    <div class="col-6">
                        <label class="form-label" for="image">
                            Imagen (Recomendado: 581x660 px)
                        </label>
                        <input 
                            type="file"
                            name="image"
                            id="image"
                            accept=".jpg,.jpeg,.png,.webp" 
                            class="form-control @error('image') is-invalid @enderror"  
                        />
                    </div>
                    <div class="col-6">
                        <label class="form-label" for="pdf">
                            PDF
                        </label>
                        <input 
                            type="file"
                            name="pdf"
                            id="pdf"
                            accept=".pdf" 
                            class="form-control @error('pdf') is-invalid @enderror" 
                        />
                    </div>
                    <div class="col-3">
                        <button class="btn btn-primary" type="submit">
                            <i class="bi bi-plus me-1" aria-hidden="true"></i>
                            Crear
                        </button>
                    </div>
                </form>
                {{-- Formulario Fin  --}}
            </div>
            <div class="card-footer d-flex gap-2">
                <a 
                    href="{{ route('admin.destinos.index') }}"
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