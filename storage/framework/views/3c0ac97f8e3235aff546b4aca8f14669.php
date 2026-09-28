<!doctype html>
<html lang="en">

<?php if (isset($component)) { $__componentOriginal04ff187ce76dc0035b6a1e73390a6e15 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal04ff187ce76dc0035b6a1e73390a6e15 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.auth.head','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('auth.head'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal04ff187ce76dc0035b6a1e73390a6e15)): ?>
<?php $attributes = $__attributesOriginal04ff187ce76dc0035b6a1e73390a6e15; ?>
<?php unset($__attributesOriginal04ff187ce76dc0035b6a1e73390a6e15); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal04ff187ce76dc0035b6a1e73390a6e15)): ?>
<?php $component = $__componentOriginal04ff187ce76dc0035b6a1e73390a6e15; ?>
<?php unset($__componentOriginal04ff187ce76dc0035b6a1e73390a6e15); ?>
<?php endif; ?>
    <body class="login-page bg-body-secondary">
        <?php echo $__env->yieldContent('main'); ?>
        <?php if (isset($component)) { $__componentOriginal6e07f6b4c80ace87eb13eb7793aacfbc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6e07f6b4c80ace87eb13eb7793aacfbc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.auth.footer','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('auth.footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6e07f6b4c80ace87eb13eb7793aacfbc)): ?>
<?php $attributes = $__attributesOriginal6e07f6b4c80ace87eb13eb7793aacfbc; ?>
<?php unset($__attributesOriginal6e07f6b4c80ace87eb13eb7793aacfbc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6e07f6b4c80ace87eb13eb7793aacfbc)): ?>
<?php $component = $__componentOriginal6e07f6b4c80ace87eb13eb7793aacfbc; ?>
<?php unset($__componentOriginal6e07f6b4c80ace87eb13eb7793aacfbc); ?>
<?php endif; ?>
    </body>
</html>
<?php /**PATH C:\Users\mike3\Documents\GitHub\Agencia-de-Viajes\resources\views/layouts/auth.blade.php ENDPATH**/ ?>