

<?php $__env->startSection('title', 'User Login - Amazing E-Book'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="row mb-10">
                  <div class="col mb-10" style="margin-top: 12pt; font-family: Arial, Helvetica, sans-serif; font-size: 20pt"><u><?php echo e(__('Log In')); ?></u></div>

                      <form method="POST, HEAD" action="<?php echo e(LaravelLocalization::localizeUrl('userlogin')); ?>">
                          <?php echo csrf_field(); ?>
                          <div class="row mb-10" style="margin-right: 281pt">
                              <label for="email" class="col-md-5 col-form-label"><?php echo app('translator')->get('E-mail Address: '); ?></label>
  
                              <div class="col mt-10">
                                  <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" required autocomplete="email">

                                  <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                      <span class="invalid-feedback" role="alert">
                                          <strong><?php echo e($message); ?></strong>
                                      </span>
                                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                              </div>
                          </div>  
                          <br>
                          <div class="row mb-10" style="margin-right: 281pt">
                              <label for="password" class="col-md-5 col-form-label"><?php echo app('translator')->get('Password: '); ?></label>
                              <div class="col mt-10">
                              <input id="password" type="password" style="margin-top: 1%" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="password">
  
                                  <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                      <span class="invalid-feedback" role="alert">
                                          <strong><?php echo e($message); ?></strong>
                                      </span>
                                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                              </div>
                          </div>
                          <br>
                          <div class="row mb-10">
                              <div class="col-md-6 offset-md-4">
                                  <button type="submit" class="btn btn-primary" style="background-color: " onclick="">
                                      <?php echo e(__('Login')); ?>

                                  </button>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('design.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UjianAkhirWebProgramming\resources\views/userlogin.blade.php ENDPATH**/ ?>