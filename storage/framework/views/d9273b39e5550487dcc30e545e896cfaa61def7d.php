

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-5">
                <?php echo $__env->yieldContent('body'); ?>
            </div>
            <div class="col-4">
                <?php echo $__env->yieldContent('center'); ?>
            </div>
            <div class="col-3">
                <?php echo $__env->yieldContent('sidebar'); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/laravel.dev/resources/views/layouts/three-column.blade.php ENDPATH**/ ?>