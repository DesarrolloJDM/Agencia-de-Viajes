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
                      @forelse ($users as $user)
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <img
                              src="{{ asset('images/admin/usuario.png') }}"
                              alt=""
                              class="img-size-32 rounded-circle me-2"
                            />
                            <span class="fw-medium text-capitalize">
                              {{ $user->full_name }}
                            </span>
                          </div>
                        </td>
                        <td>
                          {{ $user->email }}
                        </td>
                        <td>
                          <span
                            class="badge text-capitalize {{
                              $user->role === \App\Enums\UserRole::Admin
                              ? 'text-bg-primary'
                              : 'text-bg-info'
                            }}"
                          >
                            {{
                              $user->role === \App\Enums\UserRole::Admin
                              ? 'admin'
                              : 'usuario'
                            }}
                          </span>
                        </td>
                        <td>
                          <span
                            class="badge {{
                              $user->status === \App\Enums\UserStatus::Active
                              ? 'text-bg-success'
                              : 'text-bg-warning'
                            }}"
                          >
                            {{
                              $user->status === \App\Enums\UserStatus::Active
                              ? 'Activo'
                              : 'Suspendido'
                            }}
                          </span>
                        </td>
                        <td>
                          {{ $user->created_at->format('d/m/Y') }}
                        </td>
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
                      
                      @empty
                      <tr>
                        <td colspan="6" class="text-center py-4 text-secondary">
                          No hay usuarios registrados.
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