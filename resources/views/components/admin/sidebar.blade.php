<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
  
  {{-- Inicio Marca --}}
  <div class="sidebar-brand">
    <a href="./index.html" class="brand-link">
      <img
        src="{{ asset('images/admin/logo.png') }}"
        alt="Viaja tus Suenos Logo"
        class="brand-image opacity-75 shadow"
      />
      <span class="brand-text fw-light">
        Viaja tus Sueños
      </span>
    </a>
  </div>
  {{-- Fin Marca --}}
        
  {{-- Incio Sidebar Wrapper --}}
  <div class="sidebar-wrapper">
    <nav class="mt-2" aria-label="Main navigation">
      {{-- Inicio Menu --}}
      <ul
        class="nav sidebar-menu flex-column"
        data-lte-toggle="treeview"
        data-accordion="false"
        id="navigation"
      >
        {{-- Seccion Dashboard Inicio --}}
        <li class="nav-item">
          <a 
            href="{{ route('admin.dashboard') }}" 
            class="nav-link active"
          >
            <i class="nav-icon bi bi-speedometer"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        {{-- Seccion Dashboard Fin --}}

        {{-- Seccion Ofertas Inicio --}}
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon bi bi-tags-fill"></i>
            <p>
              Ofertas
            </p>
          </a>
        </li>
        {{-- Seccion Ofertas Fin --}}

        {{-- Seccion Destinos Inicio --}}
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon bi bi-globe-americas"></i>
            <p>
              Destinos
            </p>
          </a>
        </li>
        {{-- Seccion Destinos Fin --}}

        {{-- Seccion Proveedores Inicio --}}
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon bi bi-airplane-fill"></i>
            <p>
              Proveedores
            </p>
          </a>
        </li>
        {{-- Seccion Proveedores Fin --}}

        {{-- Seccion Reseñas Inicio --}}
        <li class="nav-item">
          <a 
            href="{{ route('reviews') }}" 
            class="nav-link"
          >
            <i class="nav-icon bi bi-star-fill"></i>
            <p>
              Reseñas
            </p>
          </a>
        </li>
        {{-- Seccion Reseñas Fin --}}

        {{-- Seccion Configuración Inicio --}}
        <li class="nav-item">
          <a 
            href="{{ route('settings') }}" 
            class="nav-link">
            <i class="nav-icon bi bi-wrench-adjustable"></i>
            <p>
              Configuración
            </p>
          </a>
        </li>
        {{-- Seccion Configuración Fin --}}

        {{-- Seccion Usuarios Inicio --}}
        <li class="nav-item">
          <a 
            href="{{ route('users') }}" 
            class="nav-link"
          >
            <i class="nav-icon bi bi-people-fill"></i>
            <p>
              Usuarios
            </p>
          </a>
        </li>
        {{-- Seccion Usuarios Fin --}}

      </ul>
      {{-- Fin Menu --}}

      {{-- Inicio Ver Pagina --}}
      <div class="p-3 mt-3 border-top border-secondary border-opacity-25">
        <a
          href="#"
          class="btn btn-sm btn-outline-light w-100 d-flex align-items-center justify-content-center gap-2"
        >
          <i class="bi bi-eye-fill" aria-hidden="true"></i>
          Ver Página Web
        </a>
      </div>
      {{-- Fin Ver Pagina --}}
    </nav>
  </div>
  {{-- Fin Sidebar Wrapper --}}
  
</aside>