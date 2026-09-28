<?php $__env->startSection('main'); ?>
  <main class="app-main">
    
    <?php if (isset($component)) { $__componentOriginala552fe74d4c2eb76289a0a6d8ec560f3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala552fe74d4c2eb76289a0a6d8ec560f3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.title','data' => ['title' => 'Dashboard']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.title'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Dashboard']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala552fe74d4c2eb76289a0a6d8ec560f3)): ?>
<?php $attributes = $__attributesOriginala552fe74d4c2eb76289a0a6d8ec560f3; ?>
<?php unset($__attributesOriginala552fe74d4c2eb76289a0a6d8ec560f3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala552fe74d4c2eb76289a0a6d8ec560f3)): ?>
<?php $component = $__componentOriginala552fe74d4c2eb76289a0a6d8ec560f3; ?>
<?php unset($__componentOriginala552fe74d4c2eb76289a0a6d8ec560f3); ?>
<?php endif; ?>

    
    <div class="app-content">
      
      <div class="container-fluid">
        
        <div class="row">

          
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
                href="<?php echo e(route('reviews')); ?>"
                class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover"
              >
                Ver 
                <i class="bi bi-link-45deg"></i>
              </a>
            </div>
          </div>
          

          
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
          
          
        </div>
        
      </div>
      
    </div>
    
  </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\mike3\Documents\GitHub\Agencia-de-Viajes\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>