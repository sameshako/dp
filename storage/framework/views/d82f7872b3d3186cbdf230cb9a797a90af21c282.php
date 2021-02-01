<!DOCTYPE html>

<html lang="zxx">



<head>

    <title>Direct proprietar - Anunturi direct de la proprietari</title>

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

    <link type="text/css" rel="stylesheet" href="/css/styledp.css">

    <link type="text/css" rel="stylesheet" href="/css/font/flaticon.css">

    <link type="text/css" rel="stylesheet" href="/css/rangeslider.css">

    <link type="text/css" rel="stylesheet" href="/css/font/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="/css/plugins.css">
</head>



<body>

    <!-- main header start -->


    <div class="header  header-dark-transparent">

        <nav class="headnavbar core-nav">
            <div class="nav-container">
                <div class="nav-header right">
                    <a href="https://www.dp.getbrandedwork.ro" class="brand normal-logo"><img src="https://www.directproprietar.getbrandedwork.ro/assets/frontend/img/logodirectproprietar.png" alt=""></a>
                    <a href="https://www.dp.getbrandedwork.ro" class="brand brand-overlay"><img src="https://www.directproprietar.getbrandedwork.ro/assets/frontend/img/logodirectproprietaralb.png" alt=""></a>
                    <button class="toggle-bar core-nav-toggle"><span class="ti-align-justify"></span></button>
                </div>
                <div class="wrap-core-nav-list right">
                    <ul class="attributes">
                        <!-- <li class="perma-attribute"><a class="add-property-main" href="#" data-toggle="modal" data-target="#create-property">
                            <i class="fas fa-plus"></i> Adauga cerere anunturi de la proprietari</a>
                        </li> -->
                        <li class="perma-attribute"><a class="add-property-main" href="/adauga-anunt">
                                <i class="fas fa-plus"></i> Adauga cerere anunturi de la proprietari</a>
                        </li>
                    </ul>
                    <ul class="menu core-nav-list">
                        <li>
                            <a href="#" data-toggle="modal" data-target="#login">
                                <span class="imob-text">De ce DP?</span>
                            </a>
                        </li>
                        <?php if(auth()->guard()->guest()): ?>
                        <li>
                            <a href="#" data-toggle="modal" data-target="#login">
                                <span class="imob-icon"><i class="ti-lock"></i></span>
                                <span class="imob-text">Autentificare</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-toggle="modal" data-target="#signup-modal">
                                <span class="imob-icon"><i class="ti-user"></i></span>
                                <span class="imob-text">Creare cont</span>
                            </a>
                        </li>
                        <?php else: ?>
                        <li>
                            <a href="/logout" >
                                <span class="imob-icon"><i class="ti-user"></i></span>
                                <span class="imob-text">Logout</span>
                            </a>
                        </li>
                        <?php endif; ?>
                        <li class="imob-attri">
                            <a class="nav-image " data-toggle="dropdown">Ajutor</a>
                            <div class="dropdown-menu help-menu profile-dropdown">
                                <a class="dropdown-item" href="/">Servicii si Preturi DirectProprietar.ro</a>
                                <a class="dropdown-item" href="my-property.html"> Consiliere Pret</a>
                                <a class="dropdown-item" href="bookmark-list.html"> Siteurile pe care se publica anunturile</a>
                                <a class="dropdown-item" href="bookmark-list.html"> Setari</a>

                                <a class="dropdown-item" href="bookmark-list.html"> Consilier imobiliar</a>
                                <a class="dropdown-item" href="bookmark-list.html"> Calculator taxe notariale + impozite + taxe ANCPI ptr vanzator/cumparator</a>
                                <a class="dropdown-item" href="bookmark-list.html"> Calculator impozite pentru veniturile din chirii</a>
                                <a class="dropdown-item" href="bookmark-list.html"> Legislatie din domeniul imobiliar si fiscal</a>
                                <a class="dropdown-item profile-last-item" href="/"> Intrebari frecvente</a>
                            </div>

                        </li>

                    </ul>
                </div>






            </div>
        </nav>
        <div class="dropdown-overlay"></div>





    </div>

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

                                <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i> Romania, Bucuresti

                            </li>

                            <li>

                                <i class="fa fa-envelope"></i><a href="mailto:sales@hotelempire.com">contact@directproprietar.ro</a>

                            </li>

                            <li>

                                <i class="fa fa-phone"></i><a href="tel:0762111133">+0253 240 999</a>

                            </li>

                            <li>

                                <i class="fa fa-fax"></i>+0253240999

                            </li>

                            <li>

                                <i class="fa fa-skype"></i><a href="mailto:office@directproprietar.ro">directproprietar</a>

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

                                <a href=""><i class="fa fa-angle-right"></i>Despre noi</a>

                            </li>

                            <li>

                                <a href="#"><i class="fa fa-angle-right"></i>Blog</a>

                            </li>

                            <li>

                                <a href=""><i class="fa fa-angle-right"></i>Cariere</a>

                            </li>

                            <li>

                                <a href=""><i class="fa fa-angle-right"></i>Termeni si Conditii</a>

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

                        <p class="copy">© 2021 <a href="#">directproprietar.ro</a> Toate drepturile rezervate.</p>

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
    <!-- ============================ Footer Start ================================== -->
    <footer class="dark-footer skin-dark-footer">
        <div>
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h4 class="widget-title">Lorem ipsum</h4>
                            <p>Lorem ipsum dolor</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h4 class="widget-title">Lorem ipsum</h4>
                            <ul class="footer-menu">
                                <li><a href="#">Lorem ipsum</a></li>
                                <li><a href="#">Lorem ipsum</a></li>
                                <li><a href="#">Lorem ipsum</a></li>
                                <li><a href="#">Lorem ipsum</a></li>
                                <li><a href="#">Lorem ipsum</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h4 class="widget-title">Lorem ipsum</h4>
                            <div class="fw-address-wrap">
                                <div class="fw fw-location">
                                    Lorem ipsum
                                </div>
                                <div class="fw fw-mail">
                                    Lorem ipsum
                                </div>
                                <div class="fw fw-call">
                                    Lorem ipsum
                                </div>
                                <div class="fw fw-skype">
                                    Lorem ipsum
                                </div>
                                <div class="fw fw-web">
                                    Lorem ipsum
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h4 class="widget-title">Lorem ipsum</h4>
                            <p>Lorem ipsum</p>
                            <ul class="footer-bottom-social">
                                <li><a href="#"><i class="ti-facebook"></i></a></li>
                                <li><a href="#"><i class="ti-twitter"></i></a></li>
                                <li><a href="#"><i class="ti-instagram"></i></a></li>
                                <li><a href="#"><i class="ti-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-12 col-md-12 text-center">
                        <p class="mb-0">© 2009 directproprietar.ro</p>
                    </div>

                </div>
            </div>
        </div>
    </footer>
    <!-- ============================ Footer End ================================== -->

    <!-- Log In Modal -->
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="registermodal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
            <div class="modal-content" id="registermodal">
                <span class="mod-close" data-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></span>
                <div class="modal-body">
                    <h4 class="modal-header-title">Intra in cont</h4>
                    <div class="login-form">
                        <form method="POST" action="<?php echo e(route('login')); ?>">
                            <?php echo csrf_field(); ?>
                            <?php if(Session::has('message')): ?>
                                                        
                                <p class="alert alert-danger"><?php echo e(Session::get('message')); ?></p>

                            <?php endif; ?>
                            <div class="form-group">
                                <label>Adresa email</label>
                                <div class="input-with-icon">
                                    <input type="email" name="email" class="input-text" placeholder="Email Address">
                                    <i class="ti-email"></i>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Parola</label>
                                <div class="input-with-icon">
                                    <input type="password" name="password" class="input-text" placeholder="Password">
                                    <i class="ti-unlock"></i>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-md full-width pop-login">Intra in cont</button>
                            </div>

                        </form>
                    </div>
                    <div class="modal-divider"><span></span></div>

                    <div class="text-center">
                        <p class="mt-1">
                            Nu ai cont inca ?
                            <a href="#" class="close-login" data-toggle="modal" data-target="#signup-modal">
                                <span class="imob-icon"><i class="ti-user"></i></span>
                                <span class="imob-text"> Fa-ti cont acum</span>
                            </a>
                        </p>
                        <p class="mt-1">
                            Ai uitat parola ?
                            <a href="#" class="close-login">
                                <span class="imob-icon"><i class="ti-lock"></i></span>
                                <span class="imob-text">Reseteaza parola</span>
                            </a>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->

    <!-- Create Property Modal -->
    <div class="modal fade" id="create-property" tabindex="-1" role="dialog" aria-labelledby="createproperty" aria-hidden="true">
        <div class="modal-dialog modal-dialog-lg modal-dialog-centered login-pop-form" role="document">
            <div class="modal-content" id="createproperty">
                <span class="mod-close" data-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></span>
                <div class="modal-body">
                    <h4 class="modal-header-title">Alege tipul imobilului</h4>

                    <div class="imob-property-type-group btn-group btn-group-toggle" data-toggle="buttons">
                        <div class="imob-property-wrapper">
                            <div class="row">
                                
                    </div>
                </div>
            </div>



            <div class="modal-divider"><span></span></div>
        </div>
    </div>
    </div>
    </div>
    <!-- End Modal -->

    <!-- Map Modal -->
    <div class="modal fade" id="map-modal" tabindex="-1" role="dialog" aria-labelledby="mapmodal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-lg modal-dialog-centered login-pop-form" role="document">
            <div class="modal-content" id="mapmodal">
                <span class="mod-close" data-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></span>
                <div class="modal-body">
                    <h4 class="modal-header-title">
                        <span class="imob-icon"><i class="ti-location-pin"></i></span>
                        <span class="imob-text">Alege locatia</span>
                    </h4>
                    <div class="row">
                        <div class="col-lg-7 col-md-12 b-r">
                            <div class="home-map" id="home-map">
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-12">
                            <div class="map-wrapper">

                                <div id="controls" class="w-100 text-left">
                                    <div class="row">
                                        <div class="col-6 text-left">
                                            <a id="back" class="btn back-btn">
                                                <span class="imob-icon"><i class="ti-arrow-left"></i></span>
                                                <span class="imob-text">Inapoi</span>
                                            </a>
                                        </div>
                                        <div class="col-6 text-right">
                                            <a id="all" class="btn all-btn">
                                                <span class="imob-text">Tot judetul (<span id="current-county"></span>)
                                                </span>
                                                <span class="imob-icon"><i class="ti-arrow-right"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <ul class="map-list">

                                </ul>
                                <li class="map-list-item" id="list-item-template" style="display:none;"></li>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->

    <!-- Sign Up Modal -->
    <div class="modal fade signup" id="signup-modal" tabindex="-1" role="dialog" aria-labelledby="sign-up" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
            <div class="modal-content" id="sign-up">
                <span class="mod-close" data-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></span>
                <div class="modal-body">
                    <h4 class="modal-header-title">Creare cont</h4>
                    <div class="login-form">
                        <form method="POST" action="<?php echo e(route('register')); ?>">
                            <?php echo csrf_field(); ?>
                            <?php if(Session::has('message')): ?>
                                                        
                                <p class="alert alert-danger"><?php echo e(Session::get('message')); ?></p>
        
                            <?php endif; ?>
        
                            <?php if($errors->any()): ?>
        
                            <div class="notifications">
            
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
                                <h5 class="danger"><?php echo e($error); ?></h5>
            
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
                            </div>
            
                            <?php endif; ?>
                            <div class="form-group">
                                <label>Nume </label>
                                <div class="input-with-icon">
                                    <input type="text" name="nume" class="input-text" placeholder="Nume">
                                    <i class="ti-email"></i>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Prenume</label>
                                <div class="input-with-icon">
                                    <input type="text" name="prenume" class="input-text" placeholder="Prenume">
                                    <i class="ti-email"></i>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Adresa email</label>
                                <div class="input-with-icon">
                                    <input type="email" name="email" class="input-text" placeholder="Email Address">
                                    <i class="ti-email"></i>
                                </div>
                            </div>
        
                            <div class="form-group">
                                <label>Parola</label>
                                <div class="input-with-icon">
                                    <input type="password" name="password" class="input-text" placeholder="Password">
                                    <i class="ti-unlock"></i>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Parola</label>
                                <div class="input-with-icon">
                                    <input type="password" name="password_confirmation" class="input-text" placeholder="Password">
                                    <i class="ti-unlock"></i>
                                </div>
                            </div>
        
                            <div class="form-group">
                                <button type="submit" class="btn btn-md full-width pop-login">Creaza Cont</button>
                            </div>
        
                        </form>
                    </div>
                    <div class="modal-divider"><span></span></div>

                    <div class="text-center">
                        <p class="mt-5"><a href="#" class="close-signup" data-toggle="modal" data-target="#login">
                                <span class="imob-icon"><i class="ti-lock"></i></span>
                                <span class="imob-text">Ai deja cont ?</span>
                            </a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->



    <!-- <a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/rangeslider.js"></script>
    <script src="/js/jquery.magnific-popup.min.js"></script>-->
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
    <script src="/js/maps.js"></script>
    <script src="/js/jquery.mCustomScrollbar.concat.min.js"></script>


    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
    <script src="/js/ie-emulation-modes-warning.js"></script>
    <script src="/js/jquery.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/rangeslider.js"></script>
    <script src="/js/select2.min.js"></script>
    <script src="/js/aos.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/jquery.magnific-popup.min.js"></script>
    <script src="/js/slick.js"></script>
    <script src="/js/slider-bg.js"></script>
    <script src="/js/lightbox.js"></script>
    <script src="/js/imagesloaded.js"></script>
    <script src="/js/isotope.min.js"></script>
    <script src="/js/coreNavigation.js"></script>
    <script src="/js/custom.js"></script>
    <script src="/shared/vendor/sweetalert2/dist/sweetalert2.min.js" type="text/javascript">
    </script>
    <script src="/shared/vendor/sweetalert2/init.js" type="text/javascript">
    </script>

    <script>
        $(document).ready(function() {
          
        });
    </script>

    <?php echo $__env->yieldPushContent('js'); ?>

</body>



</html><?php /**PATH /home/getbrand/dp.getbrandedwork.ro/resources/views/layouts/front/app.blade.php ENDPATH**/ ?>