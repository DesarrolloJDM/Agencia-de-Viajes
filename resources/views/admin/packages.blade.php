@extends('layouts.admin')

@section('main')
<main class="app-main">
    
<x-admin.title 
    title="Paquetes" 
/>

{{-- Inicio App Content --}}
<div class="app-content">

    <x-admin.alerta />

    <div class="container-fluid">
        {{-- Inicio Widget --}}
        <div class="row">
            <div class="col-12">
                {{-- Inicio Tabla --}}
                <div class="card mb-4">
                    {{-- Inicio Tabla Header --}}
                    <div class="card-header">
                        <div class="row g-2 align-items-center">
                            <div class="col-12 col-md-4">
                                <h3 class="card-title">
                                    Paquetes Disponibles
                                </h3>
                            </div>
                            <div class="col-12 col-md-8">
                                <div class="d-flex flex-wrap justify-content-md-end gap-2">
                                    <div class="input-group input-group-sm w-auto">
                                        <span class="input-group-text">
                                            <i class="bi bi-search" aria-hidden="true"></i>
                                        </span>
                                        <input
                                            type="search"
                                            id="user-search"
                                            class="form-control"
                                            placeholder="Buscar Paquetes"
                                            aria-label="Buscar Paquetes"
                                            style="width: 180px"
                                        />
                                    </div>
                                    <select
                                        id="user-role-filter"
                                        class="form-select form-select-sm w-auto"
                                        aria-label="Filter by role"
                                    >
                                        <option value="all" selected>Todos los Tipos</option>
                                        <option value="continente">Continente</option>
                                        <option value="pais">Pais</option>
                                        <option value="region">Región</option>
                                        <option value="estado">Estado</option>
                                        <option value="ciudad">Ciudad</option>
                                    </select>
                                    <a
                                        href="{{ route('admin.paquetes.create') }}"
                                        class="btn btn-sm btn-primary"
                                    >
                                        <i class="bi bi-plus me-1" aria-hidden="true"> </i>
                                            Añadir Paquete
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Fin Tabla Header --}}

                    {{-- Inicio Tabla Body --}}
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover align-middle m-0">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Código</th>
                                        <th>Proveedor</th>
                                        <th>Precio</th>
                                        <th>Vuelo</th>
                                        <th>Vigencia</th>
                                        <th>Creado por</th>
                                        <th>Creado fecha</th>
                                        <th>Estado</th>
                                        <th class="text-end">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($packages as $package)
                                        <tr>
                                            <td>{{ $package->name }}</td>

                                            <td>{{ $package->code }}</td>

                                            <td>
                                                {{ $package->supplier->name }}
                                            </td>

                                            <td>
                                                {{ number_format($package->price_from, 2) }}
                                                {{ $package->currency }}
                                            </td>

                                            <td>
                                                {{ $package->includes_flight ? 'Incluido' : 'No incluido' }}
                                            </td>

                                            <td>
                                                {{ $package->valid_until->format('d/m/Y') }}
                                            </td>

                                            <td>
                                                {{ $package->creator?->name }}
                                                {{ $package->creator?->lastname }}
                                            </td>

                                            <td>
                                                {{ $package->created_at->format('d/m/Y') }}
                                            </td>

                                            <td>
                                                @switch($package->status)
                                                    @case('published')
                                                        <span class="badge text-bg-success">
                                                            Publicado
                                                        </span>
                                                        @break

                                                    @case('archived')
                                                        <span class="badge text-bg-secondary">
                                                            Archivado
                                                        </span>
                                                        @break

                                                    @default
                                                        <span class="badge text-bg-warning">
                                                            Borrador
                                                        </span>
                                                @endswitch
                                            </td>

                                            <td class="text-end">
                                                <form
                                                    method="POST"
                                                    action="{{ route('admin.paquetes.destroy', $package) }}"
                                                    class="d-inline"
                                                    onsubmit="return confirm('¿Eliminar este paquete?')"
                                                >
                                                    @csrf
                                                    @method('DELETE')

                                                    <button
                                                        type="submit"
                                                        class="btn btn-sm btn-outline-danger"
                                                        aria-label="Eliminar {{ $package->name }}"
                                                    >
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="10" class="text-center py-4">
                                                No hay paquetes registrados.
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                    {{-- Fin Tabla Body --}}

                    {{-- Inicio Tabla Footer --}}
                    <div class="card-footer clearfix">
                       {{ $packages->links() }}
                    </div>
                    {{-- FIn Tabla Footer --}}
                </div>
            </div>
        </div>
        {{-- Fin Widget --}}
    </div>
</div>
{{-- Fin App Content --}}
       
</main>
@endsection

{{-- 
== Información General ==
Código
Nombre del paquete
Proveedor
Nacional / Internacional
Tipo de viaje
Días
Noches
Ciudad de salida
Descripción breve

== Recorrido ==
Destinos visitados
Primer destino
Ultimo destino

== Información comercial ==
Precio desde
Moneda
Impuestos
Tipo de habitación
Incluye vuelo
Vigencia

== Archivos ==
Imagen de portada
Pdf informativo

== Publicación ==
Borrador
Publicado
Archivado

--}}