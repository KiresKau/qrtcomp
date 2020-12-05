<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="shortcut icon" href="<?php echo e(asset('favicon.ico')); ?>" >

    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }
        .map-container{
            overflow:hidden;
            padding-bottom:56.25%;
            position:relative;
            height:0;
        }
        .map-container iframe{
            left:0;
            top:0;
            height:100%;
            width:100%;
            position:absolute;
        }
        #cardhome {
            position: fixed;
        }
        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
        .topbutton {
            width:100px;
            border:2px solid #ccc;
            background:#f7f7f7;
            text-align:center;
            padding:10px;
            position:fixed;
            bottom:50px;
            right:50px;
            cursor:pointer;
            color:#333;
            font-family:verdana;
            font-size:12px;
            border-radius: 5px;
            -moz-border-radius: 5px;
            -webkit-border-radius: 5px;
            -khtml-border-radius: 5px;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
        /*footer*/
        .col_white_amrc { color:#FFF;}
        footer { width:100%; background-color:#263238; min-height:250px; padding:10px 0px 25px 0px ;}
        .pt2 { padding-top:40px ; margin-bottom:20px ;}
        footer p { font-size:13px; color:#CCC; padding-bottom:0px; margin-bottom:8px;}
        .mb10 { padding-bottom:15px ;}
        .footer_ul_amrc { margin:0px ; list-style-type:none ; font-size:14px; padding:0px 0px 10px 0px ; }
        .footer_ul_amrc li {padding:0px 0px 5px 0px;}
        .footer_ul_amrc li a{ color:#CCC;}
        .footer_ul_amrc li a:hover{ color:#fff; text-decoration:none;}
        .fleft { float:left;}
        .padding-right { padding-right:10px; }

        .footer_ul2_amrc {margin:0px; list-style-type:none; padding:0px;}
        .footer_ul2_amrc li p { display:table; }
        .footer_ul2_amrc li a:hover { text-decoration:none;}
        .footer_ul2_amrc li i { margin-top:5px;}

        .bottom_border { border-bottom:1px solid #323f45; padding-bottom:20px;}
        .foote_bottom_ul_amrc {
            list-style-type:none;
            padding:0px;
            display:table;
            margin-top: 10px;
            margin-right: auto;
            margin-bottom: 10px;
            margin-left: auto;
        }
        .foote_bottom_ul_amrc li { display:inline;}
        .foote_bottom_ul_amrc li a { color:#999; margin:0 12px;}

        .social_footer_ul { display:table; margin:15px auto 0 auto; list-style-type:none;  }
        .social_footer_ul li { padding-left:20px; padding-top:10px; float:left; }
        .social_footer_ul li a { color:#CCC; border:1px solid #CCC; padding:8px;border-radius:50%;}
        .social_footer_ul li i {  width:20px; height:20px; text-align:center;}
    </style>
    <title>QRT</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12">
            <nav class="navbar navbar-expand-lg navbar-light bg-light rounded" id="navbar">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
                        aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item ">
                            <a class="nav-link" href="<?php echo e(route('home')); ?>">Главная <span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="<?php echo e(route('news')); ?>">Новости</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="<?php echo e(route('drivers')); ?>">Водители</a>
                        </li>
                        <li class="nav-item" id="navitem">
                            <a class="nav-link" href="<?php echo e(route('contacts')); ?>">Контакты</a>
                        </li>

                    </ul>
                    <span class="navbar-text">
    </span>
                </div>
            </nav>
        </div>
    </div>
</div>

<?php echo $__env->yieldContent('breadcrumbs'); ?>

<?php echo $__env->yieldContent('content'); ?>


  <br>
    <h1><center>QRT</center></h1>

    <!--footer starts from here-->
    <footer class="footer">
        <div class="container bottom_border">
            <div class="row">
                <div class=" col-sm-4 col-md col-sm-4  col-12 col">
                    <h5 class="headin5_amrc col_white_amrc pt2">Связатся с нами</h5>
                    <!--headin5_amrc-->
                    <p class="mb10">Нас можно найти на такой-то улице</p>
                    <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contack): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <p><i class="fa fa-location-arrow"></i><a href="https://t.me/<?php echo e($contack->telegram); ?>"> <?php echo e($contack->telegram); ?></a> </p>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contack): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <p><i class="fa fa-phone"></i>  <?php echo e($contack->phone); ?>  </p>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contack): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <p><i class="fa fa fa-envelope"></i><?php echo e($contack->mail); ?></p>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                </div>
                <div class=" col-sm-4 col-md  col-6 col">
                    <h5 class="headin5_amrc col_white_amrc pt2">Наши друзья</h5>
                    <!--headin5_amrc-->
                    <ul class="footer_ul_amrc">
                        <?php $__currentLoopData = $company; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><a href="<?php echo e($comp->link); ?>"><?php echo e($comp->name); ?></a></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                    <!--footer_ul_amrc ends here-->
                </div>
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPAAAADwCAYAAAA+VemSAAAACXBIWXMAAAsTAAALEwEAmpwYAAAGmGlUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS42LWMxNDUgNzkuMTYzNDk5LCAyMDE4LzA4LzEzLTE2OjQwOjIyICAgICAgICAiPiA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdEV2dD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlRXZlbnQjIiB4bWxuczpwaG90b3Nob3A9Imh0dHA6Ly9ucy5hZG9iZS5jb20vcGhvdG9zaG9wLzEuMC8iIHhtbG5zOmRjPSJodHRwOi8vcHVybC5vcmcvZGMvZWxlbWVudHMvMS4xLyIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ0MgMjAxOSAoV2luZG93cykiIHhtcDpDcmVhdGVEYXRlPSIyMDE5LTA2LTA0VDEyOjIxOjA4KzAzOjAwIiB4bXA6TWV0YWRhdGFEYXRlPSIyMDE5LTA2LTA0VDEyOjIxOjA4KzAzOjAwIiB4bXA6TW9kaWZ5RGF0ZT0iMjAxOS0wNi0wNFQxMjoyMTowOCswMzowMCIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDpiMGI2YWFiMC1mMTNiLTMwNDUtYTFlNC1lYWU0NThjMDdjY2UiIHhtcE1NOkRvY3VtZW50SUQ9ImFkb2JlOmRvY2lkOnBob3Rvc2hvcDphNTYwYmYzNS01MWQ1LWVlNDktYWU5Yy1kYzE1NTQ4OTEwNjMiIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDo5ZjEzYmQ5ZC1kNGQwLWU3NDctOTk2ZS03NWQ3ZWYyOTMyNGIiIHBob3Rvc2hvcDpDb2xvck1vZGU9IjMiIHBob3Rvc2hvcDpJQ0NQcm9maWxlPSJzUkdCIElFQzYxOTY2LTIuMSIgZGM6Zm9ybWF0PSJpbWFnZS9wbmciPiA8eG1wTU06SGlzdG9yeT4gPHJkZjpTZXE+IDxyZGY6bGkgc3RFdnQ6YWN0aW9uPSJjcmVhdGVkIiBzdEV2dDppbnN0YW5jZUlEPSJ4bXAuaWlkOjlmMTNiZDlkLWQ0ZDAtZTc0Ny05OTZlLTc1ZDdlZjI5MzI0YiIgc3RFdnQ6d2hlbj0iMjAxOS0wNi0wNFQxMjoyMTowOCswMzowMCIgc3RFdnQ6c29mdHdhcmVBZ2VudD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTkgKFdpbmRvd3MpIi8+IDxyZGY6bGkgc3RFdnQ6YWN0aW9uPSJzYXZlZCIgc3RFdnQ6aW5zdGFuY2VJRD0ieG1wLmlpZDpiMGI2YWFiMC1mMTNiLTMwNDUtYTFlNC1lYWU0NThjMDdjY2UiIHN0RXZ0OndoZW49IjIwMTktMDYtMDRUMTI6MjE6MDgrMDM6MDAiIHN0RXZ0OnNvZnR3YXJlQWdlbnQ9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE5IChXaW5kb3dzKSIgc3RFdnQ6Y2hhbmdlZD0iLyIvPiA8L3JkZjpTZXE+IDwveG1wTU06SGlzdG9yeT4gPHBob3Rvc2hvcDpEb2N1bWVudEFuY2VzdG9ycz4gPHJkZjpCYWc+IDxyZGY6bGk+YWRvYmU6ZG9jaWQ6cGhvdG9zaG9wOjllZjgwZDk3LTFkNmEtOWI0Yy04MmYzLTE5MzZhMGY0ZDU3ODwvcmRmOmxpPiA8L3JkZjpCYWc+IDwvcGhvdG9zaG9wOkRvY3VtZW50QW5jZXN0b3JzPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PpY2uEoAACPXSURBVHic7d1neBSF1sDxM217Nr2ShE0nbQmEllADUpXmFbn2Xq9i79he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"  alt="base64 test">


                <div class=" col-sm-4 col-md  col-6 col">
                    <h5 class="headin5_amrc col_white_amrc pt2">В каком мы городе</h5>
                    <!--headin5_amrc-->
                    <ul class="footer_ul_amrc">
                        <li><a href="">Киев</a></li>
                        <li><a href="">Одесса</a></li>
                        <li><a href="">Львов</a></li>
                    </ul>
                    <!--footer_ul_amrc ends here-->
                </div>


                <div class=" col-sm-4 col-md  col-12 col">
                    <h5 class="headin5_amrc col_white_amrc pt2">Подпишись на нас</h5>
                    <!--headin5_amrc ends here-->

                    <ul class="footer_ul2_amrc">
                        <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contack): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><a href="http://facebook.com/profile.php?id=<?php echo e($contack->group_face); ?>"><i class="fab fa-facebook fleft padding-right"></i> </a><p>Группа в facebook ...<a href="http://facebook.com/profile.php?id=<?php echo e($contack->group_face); ?>">http://facebook.com/profile.php?id=<?php echo e($contack->group_face); ?></a></p></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contack): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><a href="https://twitter.com/<?php echo e($contack->group_tw); ?>"><i class="fab fa-twitter fleft padding-right"></i> </a><p>Группа в twitter ...<a href="https://twitter.com/<?php echo e($contack->group_tw); ?>">https://twitter.com/<?php echo e($contack->group_tw); ?></a></p></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contack): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><a href="https://t.me/<?php echo e($contack->group_tel); ?>"><i class="fab fa-location-arrow fleft padding-right"></i> </a><p>Группа в telegram ...<a href="https://t.me/<?php echo e($contack->group_tel); ?>">https://t.me/<?php echo e($contack->group_tel); ?></a></p></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                    <!--footer_ul2_amrc ends here-->
                </div>
            </div>
        </div>


        <div class="container">
            <ul class="foote_bottom_ul_amrc">
                <li><a href="<?php echo e(route('home')); ?>">Главня</a></li>
                <li><a href="<?php echo e(route('news')); ?>">Новости</a></li>
                <li><a href="<?php echo e(route('contacts')); ?>">Контакты</a></li>
            </ul>
            <!--foote_bottom_ul_amrc ends here-->
            <p class="text-center">Company @2018  | QRT <a href="<?php echo e(route('welcome')); ?>">Компания перевозки зерна</a></p>

            <ul class="social_footer_ul">
                <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contack): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><a href="http://facebook.com/profile.php?id=<?php echo e($contack->facebook); ?>"><i class="fab fa-facebook-f"></i></a></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contack): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><a href="https://twitter.com/<?php echo e($contack->twitter); ?>"><i class="fab fa-twitter"></i></a></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contack): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><a href=" www.linkedin.com/in/<?php echo e($contack->linked_in); ?>"><i class="fab fa-linkedin"></i></a></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contack): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><a href="https://www.instagram.com/<?php echo e($contack->instagram); ?>"><i class="fab fa-instagram"></i></a></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
            <!--social_footer_ul ends here-->
        </div>

    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
</body>
</html><?php /**PATH /home/vagrant/laravel.dev/resources/views/layouts/base.blade.php ENDPATH**/ ?>