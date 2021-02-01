<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Oryon  Login Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="/css/bootstrap.min.css">
    

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPlayfair+Display:400,700%7CRoboto:100,300,400,400i,500,700">

>
    <link type="text/css" rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="/css/skins/default.css">

</head>
<body >



<div class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="login-inner-form">
                    <div class="details">
                        <a href="index.html">
                            <img src="https://oryon-imobiliare.ro/wp-content/uploads/2018/02/1-1.png" alt="logo">
                        </a>
                        <h3>Login</h3>
                        <form method="POST" action="<?php echo e(route('login')); ?>">
                          <?php echo csrf_field(); ?>
                          <?php if(Session::has('message')): ?>
    
                          <p class="alert alert-danger"><?php echo e(Session::get('message')); ?></p>
    
                          <?php endif; ?>
                            <div class="form-group">
                                <input type="email" name="email" class="input-text" placeholder="Email Address">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="input-text" placeholder="Password">
                            </div>
                            
                            <div class="form-group mb-0">
                                <button type="submit" class="btn-md btn-theme ">Login</button>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html><?php /**PATH C:\laragon\www\imobix\resources\views/auth/login.blade.php ENDPATH**/ ?>