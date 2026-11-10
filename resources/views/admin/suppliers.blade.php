@extends('layouts.admin')

@section('main')
<main class="app-main">
    
<x-admin.title 
    title="Proveedores" 
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
                                    Nuestros Proveedores
                                </h3>
                            </div>
                            <div class="col-12 col-md-8">
                                <div class="d-flex flex-wrap justify-content-md-end gap-2">
                                    <button
                                        type="button"
                                        class="btn btn-sm btn-primary"
                                        data-bs-toggle="modal"
                                        data-bs-target="#modal-add-supplier"
                                    >
                                        <i class="bi bi-plus me-1" aria-hidden="true"> </i>
                                        Añadir Proveedor
                                    </button>
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
                                        <th>Página Web</th>
                                        <th>Teléfono</th>
                                        <th>E-mail</th>
                                        <th>Creado por</th>
                                        <th>Creado fecha</th>
                                        <th>Estado</th>
                                        <th class="text-end">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($suppliers as $supplier) 
                                        <tr>
                                            <td>
                                                {{ $supplier->name }}
                                            </td>
                                            <td>
                                                {{ $supplier->website ?? '-' }}
                                            </td>
                                            <td>
                                                {{ $supplier->phone ?? '-' }}
                                            </td>
                                            <td>
                                                {{ $supplier->email ?? '-' }}
                                            </td>
                                            <td>
                                                @if($supplier->creator)
                                                    {{ $supplier->creator->name }}
                                                    {{ $supplier->creator->last_name }}
                                                @else
                                                    Usuario Eliminado
                                                @endif    
                                            </td>
                                            <td>
                                                {{ $supplier->created_at->format('d/m/Y') }}                                          
                                            </td>
                                            <td>
                                                @if ($supplier->is_active)
                                                    <span class="badge text-bg-success">
                                                        Activo            
                                                    </span>
                                                @else
                                                    <span class="badge text-bg-secondary">
                                                        Inactivo            
                                                    </span>
                                                @endif
                                            </td>
                                            <td class="text-end">
                                                <div class="btn-group btn-group-sm">
                                                    <button
                                                        type="button"
                                                        class="btn btn-outline-secondary"
                                                        aria-label="#"
                                                    >
                                                        <i class="bi bi-pencil" aria-hidden="true"> </i>
                                                    </button>
                                                    
                                                    <button
                                                        type="button"
                                                        class="btn btn-outline-danger"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#modal-delete"
                                                        aria-label="#"
                                                    >
                                                        <i class="bi bi-trash" aria-hidden="true"> </i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="8" class="text-center py-4">
                                                No hay proveedores registrados.
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
                        {{ $suppliers->links() }}
                    </div>
                    {{-- FIn Tabla Footer --}}
                </div>
            </div>
        </div>
        {{-- Fin Widget --}}

        <x-admin.addsupplier-modal />

    </div>
</div>
{{-- Fin App Content --}}
       
</main>

@if ($errors->supplier->any())
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const modalElement = document.getElementById(
                'modal-add-supplier'
            );

            bootstrap.Modal
                .getOrCreateInstance(modalElement)
                .show();
        });
    </script>
@endif
@endsection

{{-- 

Formulario
- name
- website
- phone
- email
- is_active
- created_by

Tabla
- Nombre
- Página Web
- Teléfono 
- E-mail
- Estatus
- Creado por
- Acciones

--}}