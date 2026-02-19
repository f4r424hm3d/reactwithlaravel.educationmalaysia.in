<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Admin Login | <?php echo e(config('app.name')); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta content="<?php echo e(config('app.name')); ?>" name="description" />
  <!-- App favicon -->
  <link rel="shortcut icon" href="<?php echo e(storage_url('backend/')); ?>/assets/images/favicon.ico" />

  <!-- preloader css -->
  <link rel="stylesheet" href="<?php echo e(storage_url('backend/')); ?>/assets/css/preloader.min.css" type="text/css" />

  <!-- Bootstrap Css -->
  <link href="<?php echo e(storage_url('backend/')); ?>/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet"
    type="text/css" />
  <!-- Icons Css -->
  <link href="<?php echo e(storage_url('backend/')); ?>/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
  <!-- App Css-->
  <link href="<?php echo e(storage_url('backend/')); ?>/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
</head>

<body>
  <!-- <body data-layout="horizontal"> -->
  <div class="auth-page">
    <div class="container-fluid p-0">
      <div class="row g-0">
        <div class="col-xxl-4 col-lg-4 col-md-12"></div>
        <div class="col-xxl-4 col-lg-4 col-md-12">
          <div class="auth-full-page-content d-flex p-sm-5 p-4">
            <div class="w-100">
              <div class="d-flex flex-column h-100">
                <div class="mb-4 mb-md-5 text-center">
                  <a href="<?php echo e(url('/')); ?>" class="d-block auth-logo">
                    <img src="<?php echo e(storage_url('backend/')); ?>/assets/images/logo-sm.svg" alt="" height="28" />
                    <span class="logo-txt"><?php echo e(config('app.name')); ?></span>
                  </a>
                </div>
                <p>
                  <b>Password Requirements:</b> Minimum 8 characters, including both uppercase and lowercase letters, at
                  least
                  one number, and one special character (e.g., @, #, $).
                </p>
                <!-- NOTIFICATION FIELD START -->
                <?php if (isset($component)) { $__componentOriginal0c88f9f5840aabf224e26a6100d8e4ae = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0c88f9f5840aabf224e26a6100d8e4ae = $attributes; } ?>
<?php $component = App\View\Components\ResultNotificationField::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('result-notification-field'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\ResultNotificationField::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0c88f9f5840aabf224e26a6100d8e4ae)): ?>
<?php $attributes = $__attributesOriginal0c88f9f5840aabf224e26a6100d8e4ae; ?>
<?php unset($__attributesOriginal0c88f9f5840aabf224e26a6100d8e4ae); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0c88f9f5840aabf224e26a6100d8e4ae)): ?>
<?php $component = $__componentOriginal0c88f9f5840aabf224e26a6100d8e4ae; ?>
<?php unset($__componentOriginal0c88f9f5840aabf224e26a6100d8e4ae); ?>
<?php endif; ?>
                <!-- NOTIFICATION FIELD END -->
                <div class="auth-content my-auto">
                  <form method="post" action="<?php echo e(aurl('reset-password')); ?>" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="id" value="<?php echo e($_GET['uid']); ?>">
                    <input type="hidden" name="remember_token" value="<?php echo e($_GET['token']); ?>">
                    <div class="mb-3">
                      <div class="d-flex align-items-start">
                        <div class="flex-grow-1">
                          <label class="form-label">New Password</label>
                        </div>
                      </div>
                      <div class="input-group auth-pass-inputgroup">
                        <input type="password" name="new_password" class="form-control" placeholder="Enter New Password"
                          aria-label="Password" aria-describedby="password-addon" />
                      </div>
                      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['new_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <small class="text-danger"><?php echo e($message); ?></small>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </div>
                    <div class="mb-3">
                      <div class="d-flex align-items-start">
                        <label class="form-label">Confirm New Password</label>
                      </div>
                      <div class="input-group auth-pass-inputgroup">
                        <input type="password" name="confirm_new_password" class="form-control"
                          placeholder="Enter New Password" aria-label="Password" aria-describedby="password-addon" />
                      </div>
                      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['confirm_new_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <small class="text-danger"><?php echo e($message); ?></small>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </div>
                    <div class="mb-3">
                      <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">
                        Update Password
                      </button>
                    </div>
                  </form>

                  <div class="mt-5 text-center">
                    <p class="text-muted mb-0">
                      <a href="<?php echo e(aurl('login')); ?>/" class="text-primary fw-semibold">
                        Login
                      </a>
                    </p>
                  </div>
                </div>
                <div class="mt-4 mt-md-5 text-center">
                  <p class="mb-0">
                    ©
                    <script>
                      document.write(new Date().getFullYear());
                    </script>
                    <?php echo e(config('app.name')); ?>

                  </p>
                </div>
              </div>
            </div>
          </div>
          <!-- end auth full page content -->
        </div>
      </div>
    </div>
  </div>

  <!-- JAVASCRIPT -->
  <script src="<?php echo e(storage_url('backend/')); ?>/assets/libs/jquery/jquery.min.js"></script>
  <script src="<?php echo e(storage_url('backend/')); ?>/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo e(storage_url('backend/')); ?>/assets/libs/metismenu/metisMenu.min.js"></script>
  <script src="<?php echo e(storage_url('backend/')); ?>/assets/libs/simplebar/simplebar.min.js"></script>
  <script src="<?php echo e(storage_url('backend/')); ?>/assets/libs/node-waves/waves.min.js"></script>
  <script src="<?php echo e(storage_url('backend/')); ?>/assets/libs/feather-icons/feather.min.js"></script>
  <!-- pace js -->
  <script src="<?php echo e(storage_url('backend/')); ?>/assets/libs/pace-js/pace.min.js"></script>
  <!-- password addon init -->
  <script src="<?php echo e(storage_url('backend/')); ?>/assets/js/pages/pass-addon.init.js"></script>
</body>

<!-- Mirrored from themesbrand.com/minia/layouts/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Jan 2022 11:42:20 GMT -->

</html>
<?php /**PATH C:\laragon\www\reactwithlaravel.educationmalaysia.in\resources\views\admin\auth\reset-password.blade.php ENDPATH**/ ?>