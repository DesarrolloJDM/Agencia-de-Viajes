<?php $__env->startSection('main'); ?>
<main class="login-box">
    <div class="card">
        <div class="card-body login-card-body">
            <h3 class="login-box-msg">
                <a href="<?php echo e(route('home')); ?>">Viaja tus Sueños</a>
            </h3>

            <?php if($errors->any()): ?>
            <div class="alert alert-danger text-center" role="alert">
                <div class="mb-0 ps-3">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <p>
                        <?php echo e($error); ?>

                    </p>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <?php endif; ?>
            
            
            <form 
                action="<?php echo e(route('login.store')); ?>" 
                method="POST"
            >
                <?php echo csrf_field(); ?>
                <label class="visually-hidden" for="loginEmail">
                    Correo electrónico
                </label>
                <div class="input-group mb-3">
                    <input 
                        id="loginEmail"
                        name="email" 
                        type="email"
                        value="<?php echo e(old('email')); ?>" 
                        class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                        placeholder="Correo electrónico" 
                        autocomplete="email"
                        required
                        autofocus
                    />
                    <div class="input-group-text">
                        <span class="bi bi-envelope"></span>
                    </div>
                </div>

                
        
                <label class="visually-hidden" for="loginPassword">
                    Contraseña
                </label>
                <div class="input-group mb-3">
                    <input
                        id="loginPassword"
                        name="password"
                        type="password"
                        class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                        placeholder="Contraseña"
                        autocomplete="current-password"
                        required
                    />
                    <div class="input-group-text">
                        <span class="bi bi-lock-fill"></span>
                    </div>
                </div>

                
            
                <div class="row">
                    <div class="col-6">
                        <div class="form-check">
                            <input 
                                id="remember"
                                name="remember"
                                class="form-check-input" 
                                type="checkbox" 
                                value="1" 
                                <?php if(old('remember')): echo 'checked'; endif; ?> 
                            />
                            <label class="form-check-label" for="flexCheckDefault"> 
                                Recuérdame
                            </label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">
                                Iniciar Sesión
                            </button>
                        </div>
                    </div>
                </div>
            </form>
            

            <p class="mb-1">
                <a href="#">
                    Olvidé mi contraseña
                </a>
            </p>
        </div>
    </div>
</main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\mike3\Documents\GitHub\Agencia-de-Viajes\resources\views/auth/login.blade.php ENDPATH**/ ?>