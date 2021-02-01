<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link rel="icon" href="/assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="/assets/images/favicon.png" type="image/x-icon">
    <title>Oryon Imobiliare</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="/backend/assets/css/fontawesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="/backend/assets/css/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="/backend/assets/css/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="/backend/assets/css/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="/backend/assets/css/feather-icon.css">
    <!-- Plugins css start-->
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="/backend/assets/css/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="/backend/assets/css/style.css">
    <link id="color" rel="stylesheet" href="/backend/assets/css/light-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="/backend/assets/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="/backend/assets/css/selectize.css">
    

    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

  </head>
  <body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
      <div class="loader bg-white">
        <div class="whirly-loader"> </div>
      </div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper">
      <!-- Page Header Start-->
      <div class="page-main-header">
        <div class="main-header-right row">
          <div class="main-header-left d-lg-none">
            <div class="logo-wrapper"><a href=""><img src="" alt=""></a></div>
          </div>
          <div class="mobile-sidebar d-block">
            <div class="media-body text-right switch-sm">
              <label class="switch"><a href="#"><i id="sidebar-toggle" data-feather="align-left"></i></a></label>
            </div>
          </div>
          <div class="nav-right col p-0">
            <div class="d-lg-none mobile-toggle pull-right"><i data-feather="more-horizontal"></i></div>
          </div>
          <script id="result-template" type="text/x-handlebars-template">
            <div class="ProfileCard u-cf">                        
            <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
            <div class="ProfileCard-details">
            <div class="ProfileCard-realName"></div>
            </div>
            </div>
          </script>
         
        </div>
      </div>
      <!-- Page Header Ends                              -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        <div class="page-sidebar">
          <div class="main-header-left d-none d-lg-block">
            <div class="logo-wrapper"><a href="index.html"><img src="../assets/images/logo.png" alt=""></a></div>
          </div>
          <div class="sidebar custom-scrollbar">
            <div class="sidebar-user text-center">
              <div><img class="img-60 rounded-circle" src="/storage/<?php echo e(Auth::user()->avatar); ?>" alt="#">
              </div>
              <h6 class="mt-3 f-14"><?php echo e(Auth::user()->name); ?></h6>
            </div>
            <ul class="sidebar-menu">
              <li><a class="sidebar-header" href="/admin/anunturi"><i data-feather="anchor"></i><span> Anunturi</span></a></li>
              <li><a class="sidebar-header" href="/admin/users"><i data-feather="anchor"></i><span> Users</span></a></li>
              
              
              </ul>
          </div>
        </div>
        <!-- Page Sidebar Ends-->

        <div id="right">

          <div id="snackbar">Some text some message..</div>

      </div>
        <div class="page-body">
          
            <?php echo $__env->yieldContent('content'); ?>
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 footer-copyright">
                <p class="mb-0">Copyright 2020 </p>
              </div>
              <div class="col-md-6">
                <p class="pull-right mb-0"> <span style="color:#9ed196">Oryon Imobiliare</span></p>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>



    <!-- latest jquery-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap js-->
    <script src="/backend/assets/js/bootstrap/popper.min.js"></script>
    <script src="/backend/assets/js/bootstrap/bootstrap.js"></script>
    <!-- feather icon js-->
    <script src="/backend/assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="/backend/assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- Sidebar jquery-->
    <script src="/backend/assets/js/sidebar-menu.js"></script>
 
    <script src="/backend/assets/js/script.js"></script>
    <script src="/backend/assets/js/selectize.js"></script>
  <script src="/backend/assets/js/userbk.js" defer></script>

    <?php echo $__env->yieldPushContent('js'); ?>

    <script>
      function inchide_modal(elem)
      {
        $(elem).modal('hide');
      }

      function mesaj(response)
{
    $('#snackbar').text("");

    $('#snackbar').text(response);

    $("#snackbar").addClass('show');

    setTimeout(function(){

    $('#snackbar').removeClass('show');

    },5000);
}
    
    </script>

    
    <!-- Plugin used-->
  </body>
</html><?php /**PATH C:\laragon\www\imobix\resources\views/layouts/backend/app.blade.php ENDPATH**/ ?>