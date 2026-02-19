<?php $__env->startPush('seo_meta_tag'); ?>
  <?php echo $__env->make('front.layouts.static_page_meta_tag', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('main-section'); ?>
  <!-- Content -->
  <section class="bg-light">
    <div class="log-space">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 col-md-6 col-12">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(session()->has('smsg')): ?>
              <div class="alert alert-success alert-dismissable">
                <?php echo e(session()->get('smsg')); ?>

              </div>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(session()->has('emsg')): ?>
              <div class="alert alert-danger alert-dismissable">
                <?php echo e(session()->get('emsg')); ?>

              </div>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            <div class="no-gutters position-relative log_rads">
              <div class="log_wraps">
                <form method="post" action="<?php echo e(url('submit-email-otp')); ?>" enctype="multipart/form-data">
                  <?php echo csrf_field(); ?>
                  <input type="hidden" name="return_to" value="<?php echo e($_GET['return_to'] ?? null); ?>">
                  <input type="hidden" name="program_id" value="<?php echo e($_GET['program_id'] ?? null); ?>">
                  <input type="hidden" name="id" value="<?php echo e(session()->get('last_id')); ?>">
                  <div class="log__heads text-center">
                    <h4 class="mb-0">An OTP has been send to<br><span class="theme-cl">your registerd email
                        address</span>
                    </h4>
                  </div>
                  <div class="form-group text-center">
                    <label>OTP will expire in 5 minutes</label>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <input name="otp" type="text" class="form-control" placeholder="Enter otp"
                            value="<?php echo e(old('otp')); ?>" required>
                          <span class="text-danger">
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['otp'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                              <?php echo e($message); ?>

                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                          </span>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                  <center>
                    <div class="form-group">
                      <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                    </div>
                  </center>
                  <div class="form-group text-center mb-0">
                    Are you a already member?&nbsp;&nbsp; <a href="<?php echo e(url('sign-in')); ?>" class="theme-cl">Sign In</a>
                  </div>
                </form>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\reactwithlaravel.educationmalaysia.in\resources\views\front\student\confirmed-email-form.blade.php ENDPATH**/ ?>