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
        <div class="col-lg-8 col-md-8">

          <!-- Overview -->
          <div class="edu_wraper">
            <div class="show-more-box">
              <div class="text show-more-height">
                <?php echo $universityTabContent->description; ?>

              </div>
              <div class="show-more">(Show More)</div>
            </div>
          </div>
        </div>
        <!-- Sidebar -->
        <div class="col-lg-4 col-md-4">
          <div class="ed_view_box style_2">
            <div class="ed_author">
              <div class="ed_author_box">
                <h4>Affilated Colleges</h4>
              </div>
            </div>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $trendingUniversity; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $uni): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
              <div class="learnup-list">
                <div class="learnup-list-thumb">
                  <a href="<?php echo e(url($uni->slug)); ?>">
                    <img data-src="<?php echo e(storage_url($uni->logo_path)); ?>" class="img-fluid" alt="<?php echo e($uni->name); ?>">
                  </a>
                </div>
                <div class="learnup-list-caption">
                  <h6><a href="<?php echo e(url($uni->slug)); ?>"><?php echo e($uni->name); ?></a></h6>
                  <p class="mb-0"><i class="ti-location-pin"></i> <?php echo e($uni->city); ?>, <?php echo e($uni->state); ?></p>
                  <div class="learnup-info">
                    <span class="mr-3">
                      <a href="<?php echo e(url($uni->slug)); ?>"><i class="fa fa-edit"></i> Admission</a>
                    </span>
                    <span>
                      <a href="<?php echo e(url($uni->slug . '/courses')); ?>"><i class="fa fa-graduation-cap"></i> Programme</a>
                    </span>
                  </div>
                </div>
              </div>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\reactwithlaravel.educationmalaysia.in\resources\views\front\university-other-content.blade.php ENDPATH**/ ?>