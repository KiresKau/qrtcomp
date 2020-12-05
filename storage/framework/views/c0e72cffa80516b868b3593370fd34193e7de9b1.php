

<?php $__env->startSection('navbar-brand'); ?>

    <?php echo $__env->make('navbar-brand', ['title' => 'Главная'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('body'); ?>
    <h4 class="card-title"><u>События нашей компании</u></h4>
    <?php $__currentLoopData = $homes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $home): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card" style="width: 18rem;">
            <?php if($home->image): ?><img src="<?php echo e($home->image); ?>" class="card-img-top" alt="..." height="300" width="550"><?php endif; ?>
            <div class="card-body">
                <h5 class="card-title"><?php echo e($home->name); ?></h5>
                <p class="card-text"><?php echo e($home->body); ?></p>
            </div>
        </div>
        <br>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <a href="#" title="Вернуться к началу" class="topbutton ">^<br>Наверх</a>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('center'); ?>

    <div id="centerhome">
       <h4><i> Комнания <b><u>QRT</u></b> предоставляет водителей с грузовиками и необходимым оборудованием для перевозки зерна.
       У нас много дружественных компаний с которыми мы работаем. Это и элеваторы, и заводы по переработке зерна, и склады хранения.
           <br>
               Ответственность за качество транспорта, работоспособность персонала МЫ берем на себя.
           </i></h4>
        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPAAAADwCAMAAAAJixmgAAADAFBMVEXq1tnlzdGbKzuqTFqYIzT38fGUHS6SGCn8/PzBfIXQnaS0YWy+eIKeMkLm0dPZsLXewcX48PGtU2Hv3uHYrrOVHjDu4ePo0dW8c338+vqOEiPhxcnKkZmXIjTcub3VqK6MChusUF3evcG1ZHDIjJX6/fy4a3bOmaHRoajs2tzFhY7x5ujatLmxXGnkyc3x5eamRFLWrLLGiZHiyM3MlZ2SGSyUGSqfNkTWqrDgvcKWIDKUGi37+Pj59vi5bXm3aHT69vawWWbZub3BgInq2NrctrzEhpDp1NbUpqzu3N6RFSby6Onq2tz8/v3Zsrj+/v3Rpa3cusCRFiiSFiihOUiWIzLw4OH16uypRlTlzM/WrrTKlZzOoanHjZX49vbMl57Rn6aQEiX6+/q4ZXHctbrgwMSTHS307O3w4uTOnqapSFfZtryiPUz17vD+/f749PT69PSvVmPChY327e7+/PymQk/iw8bCg4yWHzD39fb7/Pv07e/r2NrevsSXJDXnztGZJjf27u758vOkP02QFibFgoz9/f3KlJuSGCbgwcb07e3ix8r06euuWGTRpKr07u/GipP59PfjxcqSFCbNnKLIj5iUFimQFCThxMeiPEqQFCiPESKkPUrJk5z38O+SFiaUHCvn0NKnT12SFyr8/Pr38/OWJDKVIC75+fjo1tiSFCjEgIrChYqTFSacMD/z6uyODR+hN0fjxsyaKDfVpKv5+Pf7+PrhwsbjwMaUHzCjP1DWsbn17u3IkJfbvMGUIDLSo6uSFST6+fn5+vr27OykOUnMlJrHjJORFCPhw8iQFiPgwsXEiI/Uo6r7+/z59PPMlp/kx8ySGyvdvL+RFinXsLWVITKYKDmYIjG4a3eXHTD+///+/v7+/v////7+//7//v/9/v7//v79///9/v/8/v79//78///8/v/8+/v69fXTqrD8//6UEyimR1T3+PjMkprw3t/NkZzHho7myMvHh5H59vXhwcT07OuUITLozNDbuLvbvL/cuLrKm6X///8fLJiUAAAACXBIWXMAAAsTAAALEwEAmpwYAAAF+mlUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS42LWMxNDUgNzkuMTYzNDk5LCAyMDE4LzA4LzEzLTE2OjQwOjIyICAgICAgICAiPiA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtbG5zOmRjPSJodHRwOi8vcHVybC5vcmcvZGMvZWxlbWVudHMvMS4xLyIgeG1sbnM6cGhvdG9zaG9wPSJodHRwOi8vbnMuYWRvYmUuY29tL3Bob3Rvc2hvcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ0MgMjAxOSAoV2luZG93cykiIHhtcDpDcmVhdGVEYXRlPSIyMDE5LTA2LTA0VDEyOjAxOjM0KzAzOjAwIiB4bXA6TW9kaWZ5RGF0ZT0iMjAxOS0wNi0wNFQxMjowNzowNiswMzowMCIgeG1wOk1ldGFkYXRhRGF0ZT0iMjAxOS0wNi0wNFQxMjowNzowNiswMzowMCIgZGM6Zm9ybWF0PSJpbWFnZS9wbmciIHBob3Rvc2hvcDpDb2xvck1vZGU9IjIiIHBob3Rvc2hvcDpJQ0NQcm9maWxlPSJzUkdCIElFQzYxOTY2LTIuMSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDozZWJlYzgyNS1lNThiLTljNDUtOGNjMC0zN2JjMTZiNjE4NjkiIHhtcE1NOkRvY3VtZW50SUQ9ImFkb2JlOmRvY2lkOnBob3Rvc2hvcDo5ZWY4MGQ5Ny0xZDZhLTliNGMtODJmMy0xOTM2YTBmNGQ1NzgiIHhtcE1NOk9yaWdpbmFsRG9j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" width="400" height="300" alt="base64 test">
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('sidebar'); ?>
    <div class="card" id="cardhome" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Самые последние и свежие вости</h5>
            <p class="card-text"><?php echo e($homess->body); ?></p>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumbs'); ?>
    <?php echo $__env->make('breadcrumbs', ['breadcrumbs' => [
    [
         'name' => 'Главная',
         'active' => false,
         'route' => 'home'
    ]
    ]], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.three-column', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/laravel.dev/resources/views/home.blade.php ENDPATH**/ ?>