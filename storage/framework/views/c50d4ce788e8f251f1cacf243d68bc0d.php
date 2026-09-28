
<div class="app-wrapper">

<nav class="app-header navbar navbar-expand bg-body">
  
  <div class="container-fluid">
    
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button" aria-label="Toggle sidebar">
          <i class="bi bi-list"></i>
        </a>
      </li>
    </ul>
    

    <ul class="navbar-nav ms-auto">
      
      <li class="nav-item">
        <a class="nav-link" href="#" data-lte-toggle="fullscreen" aria-label="Toggle fullscreen">
          <i data-lte-icon="maximize" class="bi bi-arrows-fullscreen"></i>
          <i data-lte-icon="minimize" class="bi bi-fullscreen-exit d-none"></i>
        </a>
      </li>
      

      
      <li class="nav-item dropdown">
        <a
          class="nav-link"
          href="#"
          id="bd-theme"
          aria-label="Toggle color scheme"
          data-bs-toggle="dropdown"
          aria-expanded="false"
        >
          <i class="bi bi-sun-fill" data-lte-theme-icon="light"></i>
          <i class="bi bi-moon-fill d-none" data-lte-theme-icon="dark"></i>
        </a>
        <ul
          class="dropdown-menu dropdown-menu-end"
          aria-labelledby="bd-theme"
          style="--bs-dropdown-min-width: 8rem"
        >
          <li>
            <button
              type="button"
              class="dropdown-item d-flex align-items-center"
              data-bs-theme-value="light"
              aria-pressed="true"
            >
              <i class="bi bi-sun-fill me-2"></i>
              Light
              <i class="bi bi-check-lg ms-auto d-none"></i>
            </button>
          </li>
          <li>
            <button
              type="button"
              class="dropdown-item d-flex align-items-center"
              data-bs-theme-value="dark"
              aria-pressed="false"
            >
              <i class="bi bi-moon-fill me-2"></i>
              Dark
              <i class="bi bi-check-lg ms-auto d-none"></i>
            </button>
          </li>
        </ul>
      </li>
      

      
      <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
          <img
            src="<?php echo e(asset('images/admin/usuario.png')); ?>"
            class="user-image rounded-circle shadow"
            alt="Imagen Usuario"
          />
          <span class="d-none d-md-inline text-capitalize">
            <?php if(auth()->guard()->check()): ?>
              <?php echo e(auth()->user()->full_name); ?>

            <?php endif; ?>
          </span>
        </a>
      </li>
      


      
      <li class="nav-item">
        <form action="<?php echo e(route('logout')); ?>" method="POST">
          <?php echo csrf_field(); ?>
          <button type="submit" class="btn btn-link">
            <i data-lte-icon="maximize" class="bi bi-power"></i>
          </button>
        </form>
      </li>
      
    </ul>
  </div>
  
</nav>
<?php /**PATH C:\Users\mike3\Documents\GitHub\Agencia-de-Viajes\resources\views/components/admin/header.blade.php ENDPATH**/ ?>