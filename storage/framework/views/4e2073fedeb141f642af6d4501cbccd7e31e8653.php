

<?php $__env->startSection('navbar-brand'); ?>

    <?php echo $__env->make('navbar-brand', ['title' => 'Новости'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <div class="card mb-3">

        <div class="card-body">
            <h5 class="card-title"><?php echo e($new->name); ?></h5>
            <p class="card-text"><?php echo $new->body; ?></p>
            <p class="card-text"><small class="text-muted"><?php echo e($new->created_at); ?></small></p>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('breadcrumbs'); ?>
    <?php echo $__env->make('breadcrumbs', ['breadcrumbs' => [
    [
         'name' => 'Главная',
         'active' => true,
         'route' => 'home'
    ],
    [
         'name' => 'Новости',
         'active' => true,
         'route' => 'news'
    ],
    [
         'name' => $new->name,
         'active' => false,
         'route' => 'new'
    ]
    ]], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.one-column', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/laravel.dev/resources/views/new.blade.php ENDPATH**/ ?>