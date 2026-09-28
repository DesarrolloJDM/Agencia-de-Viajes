<?php $__env->startSection('main'); ?>
  <main class="app-main">
    <?php if (isset($component)) { $__componentOriginala552fe74d4c2eb76289a0a6d8ec560f3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala552fe74d4c2eb76289a0a6d8ec560f3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.title','data' => ['title' => 'Usuarios']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.title'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Usuarios']); ?>
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
          <div class="col-12">
            
            <div class="card mb-4">
              
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

                      
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <img
                              src="<?php echo e(asset('images/admin/usuario.png')); ?>"
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
                      

                      
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <img
                              src="<?php echo e(asset('images/admin/usuario.png')); ?>"
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
                      

                      
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <img
                              src="<?php echo e(asset('images/admin/usuario.png')); ?>"
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
                      
                      
                    </tbody>
                  </table>
                </div>
              </div>
              

              
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
              
            </div>
            
          </div>
        </div>
        

        <?php if (isset($component)) { $__componentOriginal661592f3f22ffc235521dec62f57242c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal661592f3f22ffc235521dec62f57242c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.adduser-modal','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.adduser-modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal661592f3f22ffc235521dec62f57242c)): ?>
<?php $attributes = $__attributesOriginal661592f3f22ffc235521dec62f57242c; ?>
<?php unset($__attributesOriginal661592f3f22ffc235521dec62f57242c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal661592f3f22ffc235521dec62f57242c)): ?>
<?php $component = $__componentOriginal661592f3f22ffc235521dec62f57242c; ?>
<?php unset($__componentOriginal661592f3f22ffc235521dec62f57242c); ?>
<?php endif; ?>

        <?php if (isset($component)) { $__componentOriginal3056baca7d399386b8b4aa10b3b95b0e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3056baca7d399386b8b4aa10b3b95b0e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.deleteuser-modal','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.deleteuser-modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3056baca7d399386b8b4aa10b3b95b0e)): ?>
<?php $attributes = $__attributesOriginal3056baca7d399386b8b4aa10b3b95b0e; ?>
<?php unset($__attributesOriginal3056baca7d399386b8b4aa10b3b95b0e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3056baca7d399386b8b4aa10b3b95b0e)): ?>
<?php $component = $__componentOriginal3056baca7d399386b8b4aa10b3b95b0e; ?>
<?php unset($__componentOriginal3056baca7d399386b8b4aa10b3b95b0e); ?>
<?php endif; ?>    
        
      </div>
      
    </div>
    
  </main>    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\mike3\Documents\GitHub\Agencia-de-Viajes\resources\views/admin/users.blade.php ENDPATH**/ ?>