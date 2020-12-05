

<?php $__env->startSection('navbar-brand'); ?>

    <?php echo $__env->make('navbar-brand', ['title' => 'Контакты'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>



<?php $__env->startSection('body'); ?>
    <div id="map-container-google-1" class="z-depth-1-half map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2747.434606816479!2d30.74577191555545!3d46.47970607912608!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c6319f49eaaaab%3A0xa6467105eed9b98c!2z0JrQvtC80L_RjNGO0YLQtdGA0L3QsNGPINGI0LrQvtC70LAgSGlsbGVs!5e0!3m2!1sru!2sua!4v1549734283472" frameborder="0"
                style="border:0" allowfullscreen></iframe>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('sidebar'); ?>
    <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contack): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <p><i class="fa fa-location-arrow"></i><a href="https://t.me/<?php echo e($contack->telegram); ?>">  <?php echo e($contack->telegram); ?></a> </p>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contack): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <p><i class="fa fa-phone"></i>  <?php echo e($contack->phone); ?>  </p>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contack): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <p><i class="fa fa fa-envelope"></i>  <?php echo e($contack->mail); ?></p>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contack): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <p><i class="fab fa-facebook"></i><a href="http://facebook.com/profile.php?id=<?php echo e($contack->facebook); ?>">  <?php echo e($contack->facebook); ?></a></p>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contack): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <p><i class="fab fa-twitter"></i><a href="https://twitter.com/<?php echo e($contack->twitter); ?>">  <?php echo e($contack->twitter); ?></a></p>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contack): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <p><i class="fab fa-linkedin"></i><a href=" www.linkedin.com/in/<?php echo e($contack->linked_in); ?>">  <?php echo e($contack->linked_in); ?></a></p>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contack): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <p><i class="fab fa-instagram"></i><a href="https://www.instagram.com/<?php echo e($contack->instagram); ?>">  <?php echo e($contack->instagram); ?></a></p>
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
         'name' => 'Контакты',
         'active' => false,
         'route' => 'contacts'
    ]
    ]], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.two-column', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/laravel.dev/resources/views/contacts.blade.php ENDPATH**/ ?>