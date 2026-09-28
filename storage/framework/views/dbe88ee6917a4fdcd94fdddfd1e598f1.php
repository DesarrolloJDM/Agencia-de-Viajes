<?php $__env->startSection('main'); ?>
<main class="app-main">
    
    <?php if (isset($component)) { $__componentOriginala552fe74d4c2eb76289a0a6d8ec560f3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala552fe74d4c2eb76289a0a6d8ec560f3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.title','data' => ['title' => 'Configuración']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.title'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Configuración']); ?>
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
            
            <div class="row g-3">
                
                <div class="col-md-3">
                    <div
                        class="list-group list-group-flush nav nav-pills flex-column"
                        id="settings-nav"
                        role="tablist"
                    >
                        <a
                            href="#account"
                            class="list-group-item list-group-item-action active"
                            data-bs-toggle="pill"
                            role="tab"
                            aria-selected="true"
                        >
                            <i class="bi bi-person me-2" aria-hidden="true"></i>
                            General
                        </a>
                        <a
                            href="#notifications"
                            class="list-group-item list-group-item-action"
                            data-bs-toggle="pill"
                            role="tab"
                        >
                            <i class="bi bi-chat-left-dots me-2" aria-hidden="true"></i>
                            Redes Sociales
                        </a>
                        <a
                            href="#security"
                            class="list-group-item list-group-item-action"
                            data-bs-toggle="pill"
                            role="tab"
                        >
                            <i class="bi bi-images me-2" aria-hidden="true"></i>
                            Logotipos
                        </a>
                    </div>
                </div>
                

                
                <div class="col-md-9">
                    <div class="tab-content">
                        <!-- Datos Generales -->
                        <div class="tab-pane fade show active" id="account" role="tabpanel">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        Datos Generales
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <form class="row g-3">
                                        <div class="col-md-6">
                                            <label class="form-label" for="settings-name"> 
                                                Correo Electronico 
                                            </label>
                                            <input
                                                type="email"
                                                class="form-control"
                                                id="settings-email"
                                                value="correo@correo.com"
                                            />
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label" for="settings-email"> 
                                                Teléfono
                                            </label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="settings-email"
                                                value="(656) 123-4567"
                                            />
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label" for="settings-email"> 
                                                Calle
                                            </label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="settings-email"
                                                value="Av. Principal"
                                            />
                                        </div>
                                        <div class="col-md-3">
                                            <label class="form-label" for="settings-email"> 
                                                Número
                                            </label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="settings-email"
                                                value="1234"
                                            />
                                        </div>
                                        <div class="col-md-3">
                                            <label class="form-label" for="settings-email"> 
                                                Código Postal
                                            </label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="settings-email"
                                                value="12345"
                                            />
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label" for="settings-email"> 
                                                Ciudad
                                            </label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="settings-email"
                                                value="Ciudad Juárez"
                                            />
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label" for="settings-email"> 
                                                Estado
                                            </label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="settings-email"
                                                value="Chihuahua"
                                            />
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary">
                                                Guardar Cambios
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Redes Sociales -->
                        <div class="tab-pane fade" id="notifications" role="tabpanel">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        Redes Sociales
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <form class="row g-3">
                                        <div class="col-md-12">
                                            <label class="form-label" for="settings-name"> 
                                                Facebook
                                            </label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="settings-email"
                                                value="https://facebook.com"
                                            />
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label" for="settings-name"> 
                                                Instagram
                                            </label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="settings-email"
                                                value="https://instagram.com"
                                            />
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label" for="settings-name"> 
                                                TikTok
                                            </label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="settings-email"
                                                value="https://tiktok.com"
                                            />
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label" for="settings-name"> 
                                                Whatsapp
                                            </label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="settings-email"
                                                value="https://Whatsapp.com"
                                            />
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary">
                                                Guardar Cambios
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Logotipos -->
                        <div class="tab-pane fade" id="security" role="tabpanel">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        Logotipos
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <form class="row g-3">
                                        <div class="col-md-12">
                                            <label 
                                                class="form-label" 
                                                for="pwd-current"
                                            > 
                                                Imagen Actual
                                            </label>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary">
                                                Actualizar
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\mike3\Documents\GitHub\Agencia-de-Viajes\resources\views/admin/settings.blade.php ENDPATH**/ ?>