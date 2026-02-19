<?php $__env->startPush('seo_meta_tag'); ?>
  <?php echo $__env->make('front.layouts.static_page_meta_tag', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('main-section'); ?>
  <section class="p-0">
    <div class="log-space">
      <div>
        <div class="row no-gutters position-relative log_rads">
          <div class="d-none d-md-block col-lg-6 col-md-5 bg-cover"
            style="background:#1f2431 url(<?php echo e(storage_cdn('front')); ?>/assets/img/log.png)no-repeat;">
            <div class="lui_9okt6">
              <div class="_loh_revu97">
                <div id="reviews-login">

                  <!-- Single Reviews -->
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
          </div>

          <div class="col-lg-6 col-md-7 position-static p-2">
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
            <div class="log_wraps booking">
              <form action="<?php echo e(url('book-demo/verify-email')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div class="row  align-items-center">

                  <div class="col-lg-12">
                    <a href="#" class="bck-arrow"><span class="ti-arrow-left"></span></a>
                    <h4 class="mt-3 mb-1">Email Verification</h4>
                    <div class="mcod">We've sent a code to <?php echo e($student->email); ?></div>
                    <div class="mcod">Please check your email for OTP. Please check your spam folder also.</div>
                  </div>

                  <div class="col-lg-12">
                    <div class="form-group">
                      <div class="enter-resend mt-4 mb-2">Enter Code</div>
                      <div class="input-group">
                        <input name="otp" type="text" class="form-control b-0" placeholder="Enter OTP"
                          value="" required="">
                      </div>
                      
                    </div>
                  </div>

                  <div class="col-lg-12">
                    <div class="form-group"><button class="slot-btn" type="submit">Verify and Proceed</button></div>
                  </div>

                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\reactwithlaravel.educationmalaysia.in\resources\views\front\book-demo-verify-email.blade.php ENDPATH**/ ?>