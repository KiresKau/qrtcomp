

<?php $__env->startSection('navbar-brand'); ?>

    <?php echo $__env->make('navbar-brand', ['title' => 'Новости'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <ul class="list-group">
        <li class="list-group-item"><?php echo e($carg->what); ?></li>
        <li class="list-group-item"><?php echo e($carg->weight); ?></li>
        <li class="list-group-item"><?php echo e($carg->dimension); ?></li>
    </ul>
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
         'active' => true,
         'route' => 'drivers'
    ],
    [
         'name' =>  $car->last_name,
         'active' => false,
         'route' => 'new'
    ]
    ]], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.one-column', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/laravel.dev/resources/views/cargo.blade.php ENDPATH**/ ?>