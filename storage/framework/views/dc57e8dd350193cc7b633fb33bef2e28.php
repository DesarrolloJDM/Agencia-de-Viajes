<?php $__env->startSection('main'); ?>
  <main class="app-main">
    <?php if (isset($component)) { $__componentOriginala552fe74d4c2eb76289a0a6d8ec560f3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala552fe74d4c2eb76289a0a6d8ec560f3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.title','data' => ['title' => 'Reseñas']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.title'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Reseñas']); ?>
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

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon text-bg-warning shadow-sm">
                            <i class="bi bi-clock"></i>
                        </span>
                        <div class="info-box-content">
                            <span class="info-box-text">
                                Pendientes
                            </span>
                            <span class="info-box-number">
                                10
                            </span>
                        </div>
                    </div>
                </div>
        
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon text-bg-success shadow-sm">
                            <i class="bi bi-check-circle"></i>
                        </span>
                        <div class="info-box-content">
                            <span class="info-box-text">
                                Aprobadas
                            </span>
                            <span class="info-box-number">
                                10
                            </span>
                        </div>
                    </div>
                </div>
                
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon text-bg-danger shadow-sm">
                            <i class="bi bi-x-circle"></i>
                        </span>
                        <div class="info-box-content">
                            <span class="info-box-text">
                                No Aprobadas
                            </span>
                            <span class="info-box-number">
                                10
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon text-bg-primary shadow-sm">
                            <i class="bi bi-bar-chart"></i>
                        </span>
                        <div class="info-box-content">
                            <span class="info-box-text">
                                Total
                            </span>
                            <span class="info-box-number">
                                30
                            </span>
                        </div>
                    </div>    
                </div>

            </div>
            

            <div class="row g-4">
                <?php if (isset($component)) { $__componentOriginalc022b9de7c188d8e61c0a9cc1ac97ab1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc022b9de7c188d8e61c0a9cc1ac97ab1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.review','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.review'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc022b9de7c188d8e61c0a9cc1ac97ab1)): ?>
<?php $attributes = $__attributesOriginalc022b9de7c188d8e61c0a9cc1ac97ab1; ?>
<?php unset($__attributesOriginalc022b9de7c188d8e61c0a9cc1ac97ab1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc022b9de7c188d8e61c0a9cc1ac97ab1)): ?>
<?php $component = $__componentOriginalc022b9de7c188d8e61c0a9cc1ac97ab1; ?>
<?php unset($__componentOriginalc022b9de7c188d8e61c0a9cc1ac97ab1); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginalc022b9de7c188d8e61c0a9cc1ac97ab1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc022b9de7c188d8e61c0a9cc1ac97ab1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.review','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.review'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc022b9de7c188d8e61c0a9cc1ac97ab1)): ?>
<?php $attributes = $__attributesOriginalc022b9de7c188d8e61c0a9cc1ac97ab1; ?>
<?php unset($__attributesOriginalc022b9de7c188d8e61c0a9cc1ac97ab1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc022b9de7c188d8e61c0a9cc1ac97ab1)): ?>
<?php $component = $__componentOriginalc022b9de7c188d8e61c0a9cc1ac97ab1; ?>
<?php unset($__componentOriginalc022b9de7c188d8e61c0a9cc1ac97ab1); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginalc022b9de7c188d8e61c0a9cc1ac97ab1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc022b9de7c188d8e61c0a9cc1ac97ab1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.review','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.review'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc022b9de7c188d8e61c0a9cc1ac97ab1)): ?>
<?php $attributes = $__attributesOriginalc022b9de7c188d8e61c0a9cc1ac97ab1; ?>
<?php unset($__attributesOriginalc022b9de7c188d8e61c0a9cc1ac97ab1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc022b9de7c188d8e61c0a9cc1ac97ab1)): ?>
<?php $component = $__componentOriginalc022b9de7c188d8e61c0a9cc1ac97ab1; ?>
<?php unset($__componentOriginalc022b9de7c188d8e61c0a9cc1ac97ab1); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginalc022b9de7c188d8e61c0a9cc1ac97ab1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc022b9de7c188d8e61c0a9cc1ac97ab1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.review','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.review'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc022b9de7c188d8e61c0a9cc1ac97ab1)): ?>
<?php $attributes = $__attributesOriginalc022b9de7c188d8e61c0a9cc1ac97ab1; ?>
<?php unset($__attributesOriginalc022b9de7c188d8e61c0a9cc1ac97ab1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc022b9de7c188d8e61c0a9cc1ac97ab1)): ?>
<?php $component = $__componentOriginalc022b9de7c188d8e61c0a9cc1ac97ab1; ?>
<?php unset($__componentOriginalc022b9de7c188d8e61c0a9cc1ac97ab1); ?>
<?php endif; ?>
            </div>

      </div>
      
    </div>
    
  </main>    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\mike3\Documents\GitHub\Agencia-de-Viajes\resources\views/admin/reviews.blade.php ENDPATH**/ ?>