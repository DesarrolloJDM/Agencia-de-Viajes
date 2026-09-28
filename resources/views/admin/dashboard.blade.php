@extends('layouts.admin')

@section('main')
  <main class="app-main">
    
    <x-admin.title title="Dashboard" />

    {{-- Inicio App Content --}}
    <div class="app-content">
      {{-- Inicio Contenedor --}}
      <div class="container-fluid">
        {{-- Inicio Panel Widget --}}
        <div class="row">

          {{-- Inicio Widget 1 --}}
          <div class="col-lg-3 col-6">
            <div class="small-box text-bg-primary">
              <div class="inner">
                <h3>150</h3>
                <p>Ofertas Publicadas</p>
              </div>
              <svg
                class="small-box-icon"
                fill="currentColor"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
                aria-hidden="true"
              >
                <path  
                  d="M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z" 
                ></path>
              </svg>
              <a
                href="#"
                class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover"
              >
                Ver 
                <i class="bi bi-link-45deg"></i>
              </a>
            </div>
          </div>
          {{-- Fin Widget 1 --}}

          {{-- Inicio Widget 2 --}}
          <div class="col-lg-3 col-6">
            <div class="small-box text-bg-success">
              <div class="inner">
                <h3>53</h3>
                <p>Ofertas Próximas a Vencer</p>
              </div>
              <svg
                class="small-box-icon"
                fill="currentColor"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
                aria-hidden="true"
              >
                <path 
                  d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"
                ></path>
              </svg>
              <a
                href="#"
                class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover"
              >
                Ver 
                <i class="bi bi-link-45deg"></i>
              </a>
            </div>
          </div>
          {{-- Fin Widget 2 --}}

          {{-- Inicio Widget 3 --}}
          <div class="col-lg-3 col-6">
            <div class="small-box text-bg-danger">
              <div class="inner">
                <h3>65</h3>
                <p>Reseñas</p>
              </div>
              <svg
                class="small-box-icon"
                fill="currentColor"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
                aria-hidden="true"
              >
                <path 
                  d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" 
                ></path>
              </svg>
              <a
                href="{{ route('reviews') }}"
                class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover"
              >
                Ver 
                <i class="bi bi-link-45deg"></i>
              </a>
            </div>
          </div>
          {{-- Fin Widget 3 --}}

          {{-- Inicio Widget 4 --}}
          <div class="col-lg-3 col-6">
            <div class="small-box text-bg-warning">
              <div class="inner">
                <h3>20</h3>
                <p>Destinos</p>
              </div>
              <svg
                class="small-box-icon"
                fill="currentColor"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
                aria-hidden="true"
              >
                <path d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"
                ></path>
                <path 
                  d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z"
                ></path>
              </svg>
              <a
                href="#"
                class="small-box-footer link-dark link-underline-opacity-0 link-underline-opacity-50-hover"
              >
                Ver 
                <i class="bi bi-link-45deg"></i>
              </a>
            </div>
          </div>
          {{-- Fin Widget 4 --}}
          
        </div>
        {{-- Fin Panel Widget --}}
      </div>
      {{-- Fin Contenedor --}}
    </div>
    {{-- Fin App Content --}}
  </main>
@endsection