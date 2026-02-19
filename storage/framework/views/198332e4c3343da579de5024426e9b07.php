<?php $__env->startPush('seo_meta_tag'); ?>
  <?php echo $__env->make('front.layouts.static_page_meta_tag', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('main-section'); ?>
  <!-- Content -->
  <section class="bg-light">
    <div class="log-space">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12 col-md-12">

            <div class="row no-gutters position-relative log_rads">
              <!-- <div class="d-none d-md-block col-lg-6 col-md-5 bg-cover"
                    style="background:#1f2431 url(<?php echo e(storage_cdn('front/')); ?>/assets/img/log.png)no-repeat;">
                    <div class="lui_9okt6">
                      <div class="_loh_revu97">
                        <div id="reviews-login">

                          <div class="_loh_r96">
                            <div class="_bloi_quote"><i class="fa fa-quote-left"></i></div>
                            <div class="_loh_r92">
                              <h4>Good Services</h4>
                            </div>
                            <div class="_loh_r93">
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua.</p>
                            </div>
                            <div class="_loh_foot_r93">
                              <h4>Shilpa D. Setty</h4>
                              <span>Team Leader</span>
                            </div>
                          </div>

                          <div class="_loh_r96">
                            <div class="_bloi_quote"><i class="fa fa-quote-left"></i></div>
                            <div class="_loh_r92">
                              <h4>Good Services</h4>
                            </div>
                            <div class="_loh_r93">
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua.</p>
                            </div>
                            <div class="_loh_foot_r93">
                              <h4>Adam Wilsom</h4>
                              <span>Mak Founder</span>
                            </div>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div> -->

              <div class="d-none d-lg-block col-lg-6 col-xl-6 col-md-5 bg-cover">
                <img src="<?php echo e(storage_cdn('assets')); ?>/images/forgot.jpg" class="forgots" alt="">

              </div>
              <div class="col-lg-6 col-xl-6 col-md-12 position-static p-2 sign-froms">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(session()->has('smsg')): ?>
                  <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <?php echo e(session()->get('smsg')); ?>

                  </div>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(session()->has('emsg')): ?>
                  <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <?php echo e(session()->get('emsg')); ?>

                  </div>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                <form method="post" action="<?php echo e(url('forget-password')); ?>" enctype="multipart/form-data">
                  <?php echo csrf_field(); ?>
                  <div class="log_wraps">
                    <div class="log__heads">
                      <h4 class="mt-0 logs_title">Forgot <span class="theme-cl1">Password</span></h4>
                    </div>

                    <div class="form-group">
                      <label>Enter your email we'll send you a link to reset your password.</label>
                      <div class="input-group">
                        <div class="input-icon"><span class="ti-email"></span></div>
                        <input name="email" type="email" class="form-control bg-white b-0 b-l"
                          placeholder="Enter your registered email address" value="<?php echo e(old('email')); ?>" required>
                        <span class="text-danger">
                          <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['email'];
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

                    <div class="form-group">
                      <button type="submit" class="btn btn-theme-2 rounded w-100">Reset Password</button>
                    </div>

                    <div class="form-group text-center mb-0">
                      Are you a already member?&nbsp;&nbsp; <a href="<?php echo e(url('sign-in')); ?>" class="theme-cl1">Sign In</a>
                    </div>

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

<?php echo $__env->make('front.layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\reactwithlaravel.educationmalaysia.in\resources\views\front\student\forget-password.blade.php ENDPATH**/ ?>