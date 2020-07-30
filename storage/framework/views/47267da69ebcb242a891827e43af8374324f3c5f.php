<!doctype html>
<html lang="en">

  <head>
    <title>Jajji Bilimdonlar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700|Indie+Flower" rel="stylesheet">
    

    <link rel="stylesheet" href="<?php echo e(asset ('public/fonts/icomoon/style.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset ('public/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset ('public/css/bootstrap-datepicker.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset ('public/css/jquery.fancybox.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset ('public/css/owl.carousel.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset ('public/css/owl.theme.default.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset ('public/fonts/flaticon/font/flaticon.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset ('public/css/aos.css')); ?>">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('public/css/style.css')); ?>">

  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    
    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>



      <header class="site-navbar site-navbar-target" role="banner">

        <div class="container mb-3">
          <div class="d-flex align-items-center">
            <div class="site-logo mr-auto">
              <a href="<?php echo e(url('/')); ?>">Jajji Bilimdonlar<span class="text-primary">.</span></a>
            </div>
            <div class="site-quick-contact d-none d-lg-flex ml-auto ">
              <div class="d-flex site-info align-items-center mr-5">
                <span class="block-icon mr-3"><span class="icon-map-marker text-yellow"></span></span>
                <span>Sag'bon ko'chasi - 212<br> Toshkent shahri</span>
              </div>
              <div class="d-flex site-info align-items-center">
                <span class="block-icon mr-3"><span class="icon-clock-o"></span></span>
                <span>Dushanbadan - Jumagacha bilimdoningiz bilan<br>8:00 - 17:00PM <br> Shanba va Yakshanba dam olish</span>
              </div>
              
            </div>
          </div>
        </div>


        <div class="container">
          <div class="menu-wrap d-flex align-items-center">
            <span class="d-inline-block d-lg-none"><a href="#" class="text-black site-menu-toggle js-menu-toggle py-5"><span class="icon-menu h3 text-black"></span></a></span>

              

              <nav class="site-navigation text-left mr-auto d-none d-lg-block" role="navigation">
                <ul class="site-menu main-menu js-clone-nav mr-auto ">
                  <li><a href="<?php echo e(url('/')); ?>" class="nav-link">Asosiy</a></li>
                  <li><a href="<?php echo e(route('about')); ?>" class="nav-link">Biz haqimizda</a></li>
                  <!-- <li><a href="<?php echo e(route('packages')); ?>" class="nav-link">Yangiliklar</a></li> -->
                  <li><a href="<?php echo e(route('galleryfront')); ?>" class="nav-link">Galeriya</a></li>
                  <!-- <li><a href="<?php echo e(route('pricing')); ?>" class="nav-link">Pricing</a></li> -->
                  <li><a href="<?php echo e(route('contact')); ?>" class="nav-link">Aloqa</a></li>
                  <?php if(auth()->guard()->guest()): ?>
                     <li class="nav-item">
                         <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                     </li>
                     
                   <?php else: ?>
                   <li class="nav-item dropdown">
                       <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                           <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                       </a>

                       <div class="dropdown-menu dropdown-menu-right size" aria-labelledby="navbarDropdown">
                           @admin
                              <a class="dropdown-item" href="<?php echo e(route('dashboard')); ?>">Dashboard</a>
                           @endadmin
                           <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                              onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                               <?php echo e(__('Logout')); ?>

                           </a>
                           <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                               <?php echo csrf_field(); ?>
                           </form>
                       </div>
                   </li>
                   <?php endif; ?>
                </ul>
              </nav>

              <!-- <div class="top-social ml-auto">
                <a href="#"><span class="icon-facebook text-teal"></span></a>
                <a href="#"><span class="icon-telegram text-success"></span></a>
                <a href="#"><span class="icon-instagram text-yellow"></span></a>
              </div> -->
          </div>
        </div>

       

      </header>

        <?php echo $__env->yieldContent('main'); ?>
             
<footer class="site-footer">
      <div class="container">
        <div class="row">
          <!-- <div class="col-lg-4"> -->
            <!-- <h2 class="footer-heading mb-3">About Us</h2>
                <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
 -->
                <!-- <h2 class="footer-heading mb-4">Newsletter</h2>
                <form action="#" class="d-flex" class="subscribe">
                  <input type="text" class="form-control mr-3" placeholder="Email">
                  <input type="submit" value="Send" class="btn btn-primary">
                </form> -->
          <!-- </div> -->
          <div class="col-lg-8 ml-auto">
            <div class="row">

              <!-- <div class="col-lg-4 ml-auto"> -->
              <!--   <h2 class="footer-heading mb-4">Navigation</h2>
                <ul class="list-unstyled">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Testimonials</a></li>
                  <li><a href="#">Terms of Service</a></li>
                  <li><a href="#">Privacy</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul> -->
              <!-- </div> -->
              <div class="col-lg-4">
                <h2 class="footer-heading mb-4">Ma'lumotlar</h2>
                <ul class="list-unstyled">
                  <!-- <li><a href="#">Contact Info</a></li> -->
                  <li><a href="#">Manzil:</a></li>
                  <li><a href="#"><span>Sag'bon ko'chasi - 212<br> Toshkent shahri</span></a></li>
                  <li><a href="#">Telefon:</a></li>
                  <li><a href="#">(71)-246-64-02</a></li>
                  <!-- <li><a href="#">Email:</a></li> -->
                  <!-- <li><a href="#">info@yourdomain.com</a></li> -->
                </ul>
                
              </div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2995.3479154903075!2d69.22802831542447!3d41.34479097926808!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDHCsDIwJzQxLjMiTiA2OcKwMTMnNDguOCJF!5e0!3m2!1sen!2s!4v1594156027873!5m2!1sen!2s" width="500" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
              
              
            </div>
          </div>
        </div>
        <!--  -->
      </div>
    </footer>

    </div>

    <script src="<?php echo e(asset('public/js/jquery-3.3.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/js/jquery-migrate-3.0.0.js')); ?>"></script>
    <script src="<?php echo e(asset('public/js/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/js/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/js/jquery.sticky.js')); ?>"></script>
    <script src="<?php echo e(asset('public/js/jquery.waypoints.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/js/jquery.animateNumber.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/js/jquery.fancybox.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/js/jquery.stellar.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/js/jquery.easing.1.3.js')); ?>"></script>
    <script src="<?php echo e(asset('public/js/bootstrap-datepicker.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/js/aos.js')); ?>"></script>

    <script src="<?php echo e(asset('public/js/main.js')); ?>"></script>

  </body>

</html>

<?php /**PATH /var/www/html/laravel-test/resources/views/front/layout.blade.php ENDPATH**/ ?>