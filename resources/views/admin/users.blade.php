@extends('layouts.admin')

@section('main')
  <main class="app-main">
    <x-admin.title title="Usuarios" />
        
    {{-- Inicio App Content--> --}}
    <div class="app-content">
      {{-- Inicio Contenedor --}}
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
                      Usuarios Registrados
                    </h3>
                  </div>
                  <div class="col-12 col-md-8">
                    <div class="d-flex flex-wrap justify-content-md-end gap-2">
                      <button
                        type="button"
                        class="btn btn-sm btn-primary"
                        data-bs-toggle="modal"
                        data-bs-target="#modal-add-user"
                      >
                        <i class="bi bi-person-plus-fill me-1" aria-hidden="true"> </i>
                        Nuevo Usuario
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
                        <th>Usuario</th>
                        <th>Email</th>
                        <th>Rol</th>
                        <th>Estatus</th>
                        <th>Creación</th>
                        <th class="text-end">Acciones</th>
                      </tr>
                    </thead>
                    <tbody>

                      {{-- Inicio Usuario 1 --}}
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <img
                              src="{{ asset('images/admin/usuario.png') }}"
                              alt=""
                              class="img-size-32 rounded-circle me-2"
                            />
                            <span class="fw-medium">
                              Tony Stark
                            </span>
                          </div>
                        </td>
                        <td>
                          correo@correo.com
                        </td>
                        <td>
                          <span class="badge text-bg-primary"> 
                            Admin
                          </span>
                        </td>
                        <td>
                          <span class="badge text-bg-success">
                            Activo
                          </span>
                        </td>
                        <td>Mar 12, 2025</td>
                        <td class="text-end">
                          <div class="btn-group btn-group-sm">
                            <button
                              type="button"
                              class="btn btn-outline-secondary"
                              aria-label="Edit Alexander Pierce"
                            >
                              <i class="bi bi-pencil" aria-hidden="true"> </i>
                            </button>
                            <button
                              type="button"
                              class="btn btn-outline-danger"
                              data-bs-toggle="modal"
                              data-bs-target="#modal-delete-user"
                              aria-label="Delete Alexander Pierce"
                            >
                              <i class="bi bi-trash" aria-hidden="true"> </i>
                            </button>
                          </div>
                        </td>
                      </tr>
                      {{-- Fin Usuario 1 --}}

                      {{-- Inicio Usuario 2 --}}
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <img
                              src="{{ asset('images/admin/usuario.png') }}"
                              alt=""
                              class="img-size-32 rounded-circle me-2"
                            />
                            <span class="fw-medium">
                              Amy Lee
                            </span>
                          </div>
                        </td>
                        <td>
                          correo@correo.com
                        </td>
                        <td>
                          <span class="badge text-bg-info">Usuario</span>
                        </td>
                        <td>
                          <span class="badge text-bg-success">Activo</span>
                        </td>
                        <td>Abr 3, 2025</td>
                        <td class="text-end">
                          <div class="btn-group btn-group-sm">
                            <button
                              type="button"
                              class="btn btn-outline-secondary"
                              aria-label="Edit Sarah Bullock"
                            >
                              <i class="bi bi-pencil" aria-hidden="true"> </i>
                            </button>
                            <button
                              type="button"
                              class="btn btn-outline-danger"
                              data-bs-toggle="modal"
                              data-bs-target="#modal-delete-user"
                              aria-label="Delete Sarah Bullock"
                            >
                              <i class="bi bi-trash" aria-hidden="true"> </i>
                            </button>
                          </div>
                        </td>
                      </tr>
                      {{-- Fin Usuario 2 --}}

                      {{-- Inicio Usuario 3 --}}
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <img
                              src="{{ asset('images/admin/usuario.png') }}"
                              alt=""
                              class="img-size-32 rounded-circle me-2"
                            />
                            <span class="fw-medium">
                              Alice Cooper
                            </span>
                          </div>
                        </td>
                        <td>
                          correo@correo.com
                        </td>
                        <td>
                          <span class="badge text-bg-info">
                            Usuario
                          </span>
                        </td>
                        <td>
                          <span class="badge text-bg-warning">Suspendido</span>
                        </td>
                        <td>Abr 28, 2025</td>
                        <td class="text-end">
                          <div class="btn-group btn-group-sm">
                            <button
                              type="button"
                              class="btn btn-outline-secondary"
                              aria-label="Edit Daniel Cooper"
                            >
                              <i class="bi bi-pencil" aria-hidden="true"> </i>
                            </button>
                            <button
                              type="button"
                              class="btn btn-outline-danger"
                              data-bs-toggle="modal"
                              data-bs-target="#modal-delete-user"
                              aria-label="Delete Daniel Cooper"
                            >
                              <i class="bi bi-trash" aria-hidden="true"> </i>
                            </button>
                          </div>
                        </td>
                      </tr>
                      {{-- Fin Usuario 3 --}}
                      
                    </tbody>
                  </table>
                </div>
              </div>
              {{-- Fin Tabla Body --}}

              {{-- Inicio Tabla Footer --}}
              <div class="card-footer clearfix">
                <div class="float-start pt-1 fs-7 text-body-secondary">
                  Mostrando 1 de 3 de 6 usuarios
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
                    <a class="page-link" href="#" aria-label="Next"> &raquo; </a>
                  </li>
                </ul>
              </div>
              {{-- Fin Tabla Footer --}}
            </div>
            {{-- Fin Tabla --}}
          </div>
        </div>
        {{-- Fin Widget --}}

        <x-admin.adduser-modal />

        <x-admin.deleteuser-modal />    
        
      </div>
      {{-- Fin Contenedor --}}
    </div>
    {{-- Fin App Content --}}
  </main>    
@endsection