<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        
        <title><?php echo e(config('app.name', 'Viaja Tus Sueños')); ?></title>

        
        <meta 
            name="description" 
            content="Agencia de viajes especializada en paquetes nacionales e internacionales. En Viaja Tus Sueños te ayudamos a planear vacaciones, escapadas y experiencias inolvidables."
        >
        <meta 
            name="keywords" 
            content="agencia de viajes, paquetes de viaje, viajes nacionales, viajes internacionales, vacaciones familiares, viajes a la playa, viajes a Canadá, viajes a Europa, destinos turísticos, paquetes vacacionales, viajes personalizados, asesoría de viajes, Viaja Tus Sueños, reservar viajes, viajes para parejas, viajes todo incluido"
        >      
        <meta name="author" content="Viaja tus Suenos">
        <meta name="robots" content="index, follow">

        
        <link rel="canonical" href="https://viajatussuenos.com/">

        
        <meta property="og:type" content="website">
        <meta property="og:title" content="Viaja Tus Sueños | Agencia de viajes">
        <meta 
            property="og:description" 
            content="Planea tus próximas vacaciones con Viaja Tus Sueños. Encuentra paquetes nacionales e internacionales, asesoría personalizada y destinos inolvidables."
        >
        <meta property="og:url" content="https://viajatussuenos.com/">
        <meta property="og:site_name" content="Viaja tus Suenos">
        
        <meta property="og:image:alt" content="Viaja Tus Sueños - Agencia de viajes y paquetes vacacionales">

        <?php echo app('Illuminate\Foundation\Vite')->fonts(); ?>

        <!-- Styles / Scripts -->
        <?php echo app('Illuminate\Foundation\Vite')(['resources/public/css/app.css']); ?>
       
    </head>
    <body>
        <?php if (isset($component)) { $__componentOriginalb146cbf8306c95b172d2591af732a390 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb146cbf8306c95b172d2591af732a390 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.public.header','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('public.header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb146cbf8306c95b172d2591af732a390)): ?>
<?php $attributes = $__attributesOriginalb146cbf8306c95b172d2591af732a390; ?>
<?php unset($__attributesOriginalb146cbf8306c95b172d2591af732a390); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb146cbf8306c95b172d2591af732a390)): ?>
<?php $component = $__componentOriginalb146cbf8306c95b172d2591af732a390; ?>
<?php unset($__componentOriginalb146cbf8306c95b172d2591af732a390); ?>
<?php endif; ?>

            <?php echo $__env->yieldContent('content'); ?>
            
        <?php if (isset($component)) { $__componentOriginalbb84be681bbe94cc31d6257779433433 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbb84be681bbe94cc31d6257779433433 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.public.footer','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('public.footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbb84be681bbe94cc31d6257779433433)): ?>
<?php $attributes = $__attributesOriginalbb84be681bbe94cc31d6257779433433; ?>
<?php unset($__attributesOriginalbb84be681bbe94cc31d6257779433433); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbb84be681bbe94cc31d6257779433433)): ?>
<?php $component = $__componentOriginalbb84be681bbe94cc31d6257779433433; ?>
<?php unset($__componentOriginalbb84be681bbe94cc31d6257779433433); ?>
<?php endif; ?>
    </body>
</html>
<?php /**PATH C:\Users\mike3\Documents\GitHub\Agencia-de-Viajes\resources\views/layouts/public.blade.php ENDPATH**/ ?>