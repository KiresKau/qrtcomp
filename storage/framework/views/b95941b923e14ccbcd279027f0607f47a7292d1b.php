


<?php $bread = app('App\News\GetNews'); ?>

<?php $__env->startSection('navbar-brand'); ?>

    <?php echo $__env->make('navbar-brand', ['title' => 'Водители'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <?php $__currentLoopData = $drivers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $driver): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div  role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <strong class="mr-auto"><?php echo e($driver->last_name); ?> <?php echo e($driver->first_name); ?><p></p>
                    Номер машины - <b><?php echo e($driver->number); ?></b><p></p>
                <?php if($driver->status): ?> <a href="<?php echo e(route('cargo', $driver->slug)); ?>" class="btn btn-primary">Узнать какой груг везет</a> <?php endif; ?></strong>
                <small class="text-muted"><?php if($driver->status): ?> В пути от точки: <b><?php echo e($driver->from); ?></b>, до конечной точки: <b><?php echo e($driver->to); ?></b> <?php else: ?> Водитель не занят <?php endif; ?></small>
            </div>
        </div>
        <br>











    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>



<?php $__env->startSection('breadcrumbs'); ?>
    <?php echo $__env->make('breadcrumbs', ['breadcrumbs' => [
    [
         'name' => 'Главная',
         'active' => true,
         'route' => 'home'
    ],
    [
         'name' => 'Водители',
         'active' => false,
         'route' => 'drivers'
    ]
    ]], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.one-column', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/laravel.dev/resources/views/drivers.blade.php ENDPATH**/ ?>