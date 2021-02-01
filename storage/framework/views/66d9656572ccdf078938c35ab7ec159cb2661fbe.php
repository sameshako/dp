<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Oryon Imobiliare - Agentie imobiliare Gorj</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="/css/bootstrap.min.css">


    <!-- Favicon icon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPlayfair+Display:400,700%7CRoboto:100,300,400,400i,500,700">

    <!-- leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />

    <!-- leaflet JS -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>

    <link type="text/css" rel="stylesheet" href="/css/slick.css">
    <link type="text/css" rel="stylesheet" href="/css/slick-theme.css">
    <!-- Custom Stylesheet -->
    <!-- <link type="text/css" rel="stylesheet" href="/css/style.css"> -->
    <link rel="stylesheet" type="text/css" id="style_sheet" href="/css/default.css">
    <link type="text/css" rel="stylesheet" href="/css/urban.css">
    <link type="text/css" rel="stylesheet" href="/css/styleoryon.css">
    <link type="text/css" rel="stylesheet" href="/css/font/flaticon.css">
    <link type="text/css" rel="stylesheet" href="/css/rangeslider.css">
    <link type="text/css" rel="stylesheet" href="/css/font/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>
    <!-- main header start -->
    <header class="main-header sticky-header" id="main-header-2">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg navbar-light rounded">
                        <a class="navbar-brand logo navbar-brand d-flex w-50 mr-auto" href="/">
                            <!-- <img class="x" src="https://oryon-imobiliare.ro/wp-content/uploads/2018/02/1-1.png" alt="logo"> -->
                            <picture>
                                <source media="(min-width:650px)" srcset="https://oryon-imobiliare.ro/wp-content/uploads/2018/02/1-1.png">
                                <source media="(min-width:465px)" srcset="https://oryon-imobiliare.ro/wp-content/uploads/2018/02/1-1.png">
                                <img src="https://oryon-imobiliare.ro/wp-content/uploads/2018/02/1-1.png" alt="Agentie imobiliara Gorj" style="width:auto;">
                            </picture>
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="fa fa-bars"></span>
                        </button>
                        <div class="navbar-collapse collapse w-100" id="navbar">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item dropdown">
                                    <a class="nav-link " href="/">
                                        Acasa
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="<?php echo e(route('get_trans_type', 1)); ?>">
                                        Vanzari
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="<?php echo e(route('get_trans_type', 2)); ?>" >
                                        Inchirieri
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="<?php echo e(route('despre')); ?>">
                                        Despre noi
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="/informatii-utile" >
                                        Informatii utile
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <li class="dropdown-submenu"><a class="dropdown-item" href="<?php echo e(route('termeni-si-conditii')); ?>">Termeni si Conditii</a>
                                        </li>
                                        <li class="dropdown-submenu"><a class="dropdown-item" href="<?php echo e(route('termeni-si-conditii')); ?>">Politica cookie</a>
                                        </li>
                                        <li><a class="dropdown-item" href="<?php echo e(route('cariere')); ?>">Cariere Oryon</a></li>
                                        <li><a class="dropdown-item" href="<?php echo e(route('curs')); ?>">Calculator taxe</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="<?php echo e(route('blog')); ?>">
                                        Blog
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="<?php echo e(route('contact')); ?>">Contact</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="<?php echo e(route('contact')); ?>"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="<?php echo e(route('contact')); ?>"><i class="fa fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <?php if($_SERVER['REQUEST_URI']=='/'): ?>
    <?php echo $__env->make('layouts.front.home-app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>



    <?php echo $__env->yieldContent('content'); ?>
    <!-- Footer start -->
    <footer class="footer">
        <div class="container footer-inner">
            <div class="row">
                <div class="col-xl-4 col-lg-3 col-md-6 col-sm-6 wow fadeInLeft delay-04s">
                    <div class="footer-item">
                        <h4>Contactati-ne</h4>
                        <ul class="contact-info">
                            <li>
                                <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i> Strada Victoriei, Bloc 194, parter, biroul numarul 3
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i><a href="mailto:sales@hotelempire.com">contact@oryon.ro</a>
                            </li>
                            <li>
                                <i class="fa fa-phone"></i><a href="tel:0762111133">+0253 240 999</a>
                            </li>
                            <li>
                                <i class="fa fa-fax"></i>+0253240999
                            </li>
                            <li>
                                <i class="fa fa-skype"></i><a href="mailto:office@oryon.ro">Oryon Imobiliare</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 wow fadeInLeft delay-04s">
                    <div class="footer-item">
                        <h4>
                            Linkuri utile
                        </h4>
                        <ul class="links">
                            <li>
                                <a href="/"><i class="fa fa-angle-right"></i>Acasa</a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('despre')); ?>"><i class="fa fa-angle-right"></i>Despre noi</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-angle-right"></i>Blog</a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('contact')); ?>"><i class="fa fa-angle-right"></i>Cariere</a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('termeni-si-conditii')); ?>"><i class="fa fa-angle-right"></i>Termeni si Conditii</a>
                            </li>
                            <li>
                                <a href="https://anpc.ro/"><i class="fa fa-angle-right"></i>ANPC</a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 wow fadeInRight delay-04s">
                    <div class="footer-item recent-posts">
                        <h4>Proprietati recente</h4>
                        <?php $__currentLoopData = $last_properties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $last_property): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="media mb-4">
                            <a href="<?php echo e(route('show_one_property', $slug=$last_property->slug )); ?>">
                                <img src="<?php echo get_images1($last_property->images, $last_property->slug); ?>" alt="sub-property" style="height: 60px; width:60px">
                            </a>
                            <div class="media-body align-self-center">
                                <h5>
                                    <a href="<?php echo e(route('show_one_property', $slug=$last_property->slug )); ?>"><?php echo e($last_property->title); ?></a>
                                </h5>
                                <p><?php echo e($last_property->created_at->format('d/m/Y')); ?> | <?php echo e($last_property->pret); ?>€</p>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 wow fadeInRight delay-04s">
                    <div class="footer-item clearfix">
                        <h4>Fii la curent</h4>
                        <!-- <div class="Subscribe-box">
                            <p>Pentru a putea primi ofertele noastre cat mai usor, inscrie-te la newsletter</p>
                            <form action="#" method="GET">
                                <p>
                                    <input type="text" class="form-contact" name="email" placeholder="Adresa de e-mail">
                                </p>
                                <p>
                                    <button type="submit" name="submitNewsletter" class="btn btn-block btn-color">
                                        Inscrie-te
                                    </button>
                                </p>
                            </form>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="sub-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <p class="copy">© 2021 <a href="#">Oryon Imobiliare.</a> Toate drepturile rezervate.</p>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <ul class="social-list clearfix">
                            <li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="google-bg"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#" class="linkedin-bg"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- <script src="/js/jquery-2.2.0.min.js"></script> -->
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <!-- <script src="/js/jquery.selectBox.js"></script> -->
    <script src="/js/rangeslider.js"></script>
    <script src="/js/jquery.magnific-popup.min.js"></script>
    <script src="/js/jquery.filterizr.js"></script>
    <script src="/js/wow.min.js"></script>
    <script src="/js/backstretch.js"></script>
    <script src="/js/jquery.countdown.js"></script>
    <script src="/js/jquery.scrollUp.js"></script>
    <script src="/js/particles.min.js"></script>
    <script src="/js/typed.min.js"></script>
    <script src="/js/dropzone.js"></script>
    <script src="/js/jquery.mb.YTPlayer.js"></script>
    <script src="/js/leaflet.js"></script>
    <script src="/js/leaflet-providers.js"></script>
    <script src="/js/leaflet.markercluster.js"></script>
    <script src="/js/slick.min.js"></script>
    <script src="/js/maps.js"></script>
    <script src="/js/jquery.mCustomScrollbar.concat.min.js"></script>
    
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
    <script src="/js/ie-emulation-modes-warning.js"></script>

    <!-- <script src="/js/bootstrap.min.js"></script>
    <script src="/js/slick.min.js"></script> -->
    <!-- Custom JS Script -->
    <script src="/js/app.js"></script>
    <?php echo $__env->yieldPushContent('js'); ?>
</body>

</html><?php /**PATH C:\laragon\www\imobix\resources\views/layouts/front/app.blade.php ENDPATH**/ ?>