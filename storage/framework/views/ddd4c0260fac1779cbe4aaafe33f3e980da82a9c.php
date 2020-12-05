


<?php $bread = app('App\News\GetNews'); ?>

<?php $__env->startSection('navbar-brand'); ?>

    <?php echo $__env->make('navbar-brand', ['title' => 'Новости'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>

    <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <div class="jumbotron jumbotron-fluid">
           <div class="container">
                <h1 class="display-4"><?php echo e($new->name); ?></h1>
                <p class="lead"><?php echo $new->description; ?></p>
                <p class="card-text"><small class="text-muted"><?php echo e($new->created_at); ?></small></p>
                <a href="<?php echo e(route('new', $new->slug)); ?>" class="btn btn-primary">Подробнее</a>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php echo e($news->links()); ?>

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
         'active' => false,
         'route' => 'news'
    ]
    ]], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.one-column', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/laravel.dev/resources/views/news.blade.php ENDPATH**/ ?>