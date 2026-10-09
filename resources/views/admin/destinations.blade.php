@extends('layouts.admin')

@section('main')
<main class="app-main">
    
<x-admin.title 
    title="Destinos" 
/>

{{-- Inicio App Content --}}
<div class="app-content">
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
                                    Destinos Registrados
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
                                            placeholder="Search users"
                                            aria-label="Search users"
                                            style="width: 180px"
                                        />
                                    </div>
                                    <select
                                        id="user-role-filter"
                                        class="form-select form-select-sm w-auto"
                                        aria-label="Filter by role"
                                    >
                                        <option value="all" selected>Todos los Tipos</option>
                                        <option value="continent">Continente</option>
                                        <option value="country">Pais</option>
                                        <option value="region">Región</option>
                                        <option value="state">Estado</option>
                                        <option value="city">Ciudad</option>
                                    </select>
                                    <a
                                        href="{{ route('destination-add') }}"
                                        class="btn btn-sm btn-primary"
                                    >
                                        <i class="bi bi-plus me-1" aria-hidden="true"> </i>
                                            Añadir Destino
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
                                        <th>Destino</th>
                                        <th>Tipo</th>
                                        <th>Pertenece a</th>
                                        <th>Paquetes</th>
                                        <th>Creado por</th>
                                        <th>Creado fecha</th>
                                        <th>Estado</th>
                                        <th class="text-end">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            Italia    
                                        </td>
                                        <td>
                                            Pais
                                        </td>
                                        <td>
                                            Europa
                                        </td>
                                        <td>
                                            7
                                        </td>
                                        <td>
                                            User Test
                                        </td>
                                        <td>
                                            Mar 12, 2025
                                        </td>
                                        <td>
                                            <span class="badge text-bg-success">
                                                Activo
                                            </span>
                                        </td>
                                        <td class="text-end">
                                            <div class="btn-group btn-group-sm">
                                                <button
                                                    type="button"
                                                    class="btn btn-outline-secondary"
                                                    aria-label="#"
                                                >
                                                    <i class="bi bi-eye" aria-hidden="true"> </i>
                                                </button>

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
                                    <tr>
                                        <td>
                                            Ontario    
                                        </td>
                                        <td>
                                            Ciudad
                                        </td>
                                        <td>
                                            Canadá
                                        </td>
                                        <td>
                                            3
                                        </td>
                                        <td>
                                            User Test
                                        </td>
                                        <td>
                                            Mar 12, 2025
                                        </td>
                                        <td>
                                            <span class="badge text-bg-success">
                                                Activo
                                            </span>
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
                                </tbody>
                            </table>
                        </div>
                    </div>
                    {{-- Fin Tabla Body --}}

                    {{-- Inicio Tabla Footer --}}
                    <div class="card-footer clearfix">
                        <div class="float-start pt-1 fs-7 text-body-secondary">
                            Mostrando 1 de 9 de 42 destinos
                        </div>
                        <ul class="pagination pagination-sm m-0 float-end">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" aria-label="Previous"> &laquo; </a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">4</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">5</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next"> &raquo; </a>
                            </li>
                        </ul>
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