<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php echo $__env->yieldContent('title'); ?></title>
  <!-- Scripts  -->
  <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

  <!-- Styles  -->
  <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light" style=" background-color: #77badf !important">
    <a class="navbar-brand" style="font-family: Stencil; text-align: center; display: block; font-size: 32pt; color: black;margin-left: 39%">Amazing E-Book</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto" style="font-family: Arial; text-align: center;	min-width: 1%; list-style: none; margin-left : 20%;">
          <?php if(auth()->guard()->guest()): ?>
          <?php if(Route::has('usersignup')): ?>
            <li class="nav-item">
                <button style="background-color: rgb(255, 255, 101); margin-left : 350%; color:black; font-family: Arial, Helvetica, sans-serif" class="nav-link" onclick="window.location.href='<?php echo e(LaravelLocalization::localizeUrl('usersignup')); ?>'" ><?php echo app('translator')->get('Sign Up'); ?></button>
            </li>
            <?php endif; ?>

            <?php if(Route::has('userlogin')): ?>
            <li class="nav-item">
                <button style="background-color: rgb(255, 255, 101); margin-left : 410%; color:black; font-family: Arial, Helvetica, sans-serif" class="nav-link" onclick="window.location.href='<?php echo e(LaravelLocalization::localizeUrl('userlogin')); ?>'"><?php echo app('translator')->get('Log In'); ?></button>
            </li>
            <?php endif; ?>

          <?php else: ?>
          <li class="nav-item">
                <?php echo e(Auth::user()->name); ?>

            </a>
            <div class="nav-item">
                <button style="background-color: rgb(255, 255, 101); margin-left : 306%; color:black; font-family: Arial, Helvetica, sans-serif" class="nav-link" href="<?php echo e(LaravelLocalization::localizeUrl('logout')); ?>"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    <?php echo e(__('Logout')); ?>

                </a>

                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                    <?php echo csrf_field(); ?>
                </form>
            </div>
        </li>            
          <?php endif; ?>
        </ul>
      </div>
    </nav>

  <?php echo $__env->yieldContent('content'); ?>

     <!-- Footer Section Begin -->
  <footer class="footer-section">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style=" background-color: #77badf !important">
    <div class="copyright-reserved">
      <div class="container">
              <div class="row">
                      <div class="copyright-text" style="font-family: Arial; text-align: center; display: block; font-size: 16pt; color: black; margin-left: 217%">
                          &copy;  Amazing E-Book <script>document.write(new Date().getFullYear());</script>
                      </div>
              </div>
          </div>
      </div>
  </footer>
  <!-- Footer Section End -->
</body>
</html><?php /**PATH C:\xampp\htdocs\UjianAkhirWebProgramming\resources\views/design/master.blade.php ENDPATH**/ ?>