<?php $__env->startSection('content'); ?>
<section class="space">
    <div class="container">
        <div class="row align-items-center">
            <h2 class="sec-title h1 text-center">
                Reseñas de nuestros clientes
            </h2>

            <div class="container">
                <div class="row">
                    <?php $__empty_1 = true; $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="col-xl-3 col-lg-6 col-sm-6">
                        <div class="package-style1 shadow-lg">
                            <div class="package-img">
                                
                                <img class="w-100" src=<?php echo e(asset($review->image_path)); ?> alt="Package Image">
                            </div>
                            <div class="card border-0 p-2">
                                <div class="card-title d-flex">
                                    
                                    <img class="rounded-circle review-profile-img" src=<?php echo e(asset($review->user_image_path)); ?> alt="image2">
                                    <div class="ps-2">
                                        
                                        <h3 class="package-title"><?php echo e($review->user_id); ?></h3>
                                        <span>Visitó: Cancún</span><br>
                                        <span>Nivel de Satisfacción: <?php echo e($review->rate); ?></span>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="sec-text">
                                        
                                        <?php echo e($review->message); ?>

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                         <h2 class="sec-title h2">
                            No hay reseñas aún...
                        </h2>
                    <?php endif; ?>
                </div>
            </div>
        </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.public', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\mike3\Documents\GitHub\Agencia-de-Viajes\resources\views/components/public/reviews.blade.php ENDPATH**/ ?>