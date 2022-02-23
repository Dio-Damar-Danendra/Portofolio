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
    <a class="navbar-brand" href="<?php echo e(LaravelLocalization::localizeURL('index')); ?>" style="font-family: Stencil; text-align: center; display: block; font-size: 32pt; color: black;margin-left: 39%">Amazing E-Book</a>
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
</html><?php /**PATH C:\xampp\htdocs\UjianAkhirWebProgramming\resources\views/design/layout.blade.php ENDPATH**/ ?>