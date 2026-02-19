<?php $__env->startPush('seo_meta_tag'); ?>
  <?php echo $__env->make('front.layouts.dynamic_page_meta_tag', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('main-section'); ?>
  <!-- Breadcrumb -->
  <?php echo $__env->make('front.university-profile', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
  <!-- Breadcrumb -->
  <!-- Menu -->
  <?php echo $__env->make('front.university-profile-menu', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
  <!-- Menu -->

  <!-- Content -->
  <section class="bg-light pt-4 pb-4">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="rating-overvie">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-12">
                <div class="rating-overview-box w-100 mr-0">
                  <h2 class="text-center revewiws"> Rating and Reviews</h2>
                  <div class="d-flex align-items-center ratingss ">
                    <div class="star-rating" data-rating="5">
                      <i class="ti-star"></i>
                      <i class="ti-star"></i>
                      <i class="ti-star"></i>
                      <i class="ti-star"></i>
                      <i class="ti-star"></i>
                    </div>
                    <div class="ratingreview">
                      <span class="rating-overview-box-total"><?php echo e($avrgRating); ?> out of 5</span>
                      <span class="rating-overview-box-percent">Based on <?php echo e($total); ?> Review</span>
                    </div>
                  </div>

                </div>
              </div>

              <div class="col-lg-12 col-md-12 col-12">
                <span class="rating-overview-box-percent text-center mt-3">
                  <strong>100% Reviewer</strong><br>Recommends this college
                </span>
              </div>

            </div>

          </div>
        </div>
      </div>

      <div class="row align-items-center mt-4">
        <div class="col-lg-6 col-md-6 col-sm-6 col-8">Showing <?php echo e($total); ?> Reviews</div>

      </div>

      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
        <div class="edu_wraper mt-3">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="show-more-box-country">
                <div class="text show-more-heigh">
                  <div class="author pt-0">
                    <div class="img-div"><img data-src="<?php echo e(storage_cdn('front/assets/img/user.jpg')); ?>"
                        alt="<?php echo e($row->name); ?>"><i class="fa fa-check-circle"></i>
                    </div>
                    <div class="cont-div">
                      <h5 class="mb-0"><?php echo e($row->name); ?></h5>
                      <div data-rating="5">
                        <?php
                      $br = 5-$row->rating;
                      for ($i=1;$i<=$row->rating;$i++){
                    ?>
                        <i class="ti-star green"></i>
                        <?php } ?>
                        <?php
                      for ($i=1;$i<=$br;$i++){
                    ?>
                        <i class="ti-star yellow"></i>
                        <?php } ?>
                        <span class="d-inline-block"><i class="ti-check-box theme-cl ml-2"></i> Verified
                          Review</span><br>
                        <span class="d-inline-block">Post on - <?php echo e(getFormattedDate($row->created_at, 'M d, Y')); ?>

                          &nbsp;<b class="d-inline-block fw-600">by <?php echo e($row->name); ?></b></span>
                      </div>
                    </div>

                    <div class="rating-right"><?php echo e($row->rating / 2); ?></div>

                  </div>

                  <h5 class="mt-4 mb-0"><?php echo e($row->review_title); ?></h5>
                  <p><?php echo e($row->description); ?></p>

                  
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>

    </div>
  </section>
  <!-- Content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\reactwithlaravel.educationmalaysia.in\resources\views\front\university-reviews.blade.php ENDPATH**/ ?>