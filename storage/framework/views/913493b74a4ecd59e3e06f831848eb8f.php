<?php $__env->startPush('seo_meta_tag'); ?>
  <?php echo $__env->make('front.layouts.static_page_meta_tag', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('main-section'); ?>
  <section class="p-0">
    <div class="log-space">
      <div>
        <div class="row no-gutters position-relative log_rads">
          <div class="col-lg-4 col-md-4 position-static p-2"></div>
          <div class="col-lg-4 col-md-4 position-static p-2">
            <div class="log_wraps booking">
              <div class="row  align-items-center">
                <div class="col-lg-12">
                  <div class="mcod">Thank You for contact us. We will contact you very soon.</div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group"><a href="<?php echo e(url('/')); ?>" class="btn btn-sm btn-danger">OK</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\reactwithlaravel.educationmalaysia.in\resources\views\front\thank-you-career.blade.php ENDPATH**/ ?>