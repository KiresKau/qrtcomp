<div class="container mt-3 mb-1">
    <nav aria-label="breadcrumb" class="rounded">
        <ol class="breadcrumb">
            <?php $__currentLoopData = $breadcrumbs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $breadcrumb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="breadcrumb-item <?php if($breadcrumb['active']): ?> active <?php endif; ?>" aria-current="page">
                <?php if($breadcrumb['active']): ?>
                    <a href="<?php echo e(route($breadcrumb['route'])); ?>"><?php echo e($breadcrumb['name']); ?></a>
                <?php else: ?>
                    <?php echo e($breadcrumb['name']); ?>

                <?php endif; ?>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ol>
    </nav>
</div><?php /**PATH /home/vagrant/laravel.dev/resources/views/breadcrumbs.blade.php ENDPATH**/ ?>