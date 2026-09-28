<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
  
  
  <div class="sidebar-brand">
    <a href="<?php echo e(route('home')); ?>" class="brand-link">
      <img
        src="<?php echo e(asset('images/admin/logo.png')); ?>"
        alt="Viaja tus Suenos Logo"
        class="brand-image opacity-75 shadow"
      />
      <span class="brand-text fw-light">
        Viaja tus Sueños
      </span>
    </a>
  </div>
  
        
  
  <div class="sidebar-wrapper">
    <nav class="mt-2" aria-label="Main navigation">
      
      <ul
        class="nav sidebar-menu flex-column"
        data-lte-toggle="treeview"
        data-accordion="false"
        id="navigation"
      >
        
        <li class="nav-item">
          <a 
            href="<?php echo e(route('admin.dashboard')); ?>" 
            class="nav-link active"
          >
            <i class="nav-icon bi bi-speedometer"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        

        
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon bi bi-tags-fill"></i>
            <p>
              Ofertas
            </p>
          </a>
        </li>
        

        
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon bi bi-globe-americas"></i>
            <p>
              Destinos
            </p>
          </a>
        </li>
        

        
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon bi bi-airplane-fill"></i>
            <p>
              Proveedores
            </p>
          </a>
        </li>
        

        
        <li class="nav-item">
          <a 
            href="<?php echo e(route('reviews')); ?>" 
            class="nav-link"
          >
            <i class="nav-icon bi bi-star-fill"></i>
            <p>
              Reseñas
            </p>
          </a>
        </li>
        

        
        <li class="nav-item">
          <a 
            href="<?php echo e(route('settings')); ?>" 
            class="nav-link">
            <i class="nav-icon bi bi-wrench-adjustable"></i>
            <p>
              Configuración
            </p>
          </a>
        </li>
        

        
        <li class="nav-item">
          <a 
            href="<?php echo e(route('users')); ?>" 
            class="nav-link"
          >
            <i class="nav-icon bi bi-people-fill"></i>
            <p>
              Usuarios
            </p>
          </a>
        </li>
        

      </ul>
      

      
      <div class="p-3 mt-3 border-top border-secondary border-opacity-25">
        <a
          href="<?php echo e(route('home')); ?>"
          class="btn btn-sm btn-outline-light w-100 d-flex align-items-center justify-content-center gap-2"
        >
          <i class="bi bi-eye-fill" aria-hidden="true"></i>
          Ver Página Web
        </a>
      </div>
      
    </nav>
  </div>
  
  
</aside><?php /**PATH C:\Users\mike3\Documents\GitHub\Agencia-de-Viajes\resources\views/components/admin/sidebar.blade.php ENDPATH**/ ?>