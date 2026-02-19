<?php $__env->startPush('seo_meta_tag'); ?>
  <?php echo $__env->make('front.layouts.static_page_meta_tag', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<?php $__env->stopPush(); ?>
<?php $__env->startSection('main-section'); ?>
  <section class="bannerfixed">
    <div class="container">
      <div class="banner-fix">
        <img src="<?php echo e(storage_cdn('assets/images/new-banner2.png')); ?>" class="fix-banners" alt="">
      </div>
    </div>
  </section>
  <section class="institutes">
    <div class="container">
      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $universities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
        <div class="row-institutes">
          <div class="row">
            <div class="col-2 col-sm-12 col-md-2 mb-4">
              <div class="institues-img">
                <img src="<?php echo e(storage_url($row->university->logo_path)); ?>" class="img-fluid"
                  alt="<?php echo e($row->university->name); ?>">
              </div>

            </div>
            <div class="col-12 col-sm-12 col-md-10 mb-4 ">
              <div class="universitynames">
                <h2><?php echo e($row->university->name); ?></h2>
                <p> <span>Location:</span> <?php echo e($row->university->city); ?></p>
              </div>
            </div>
            <div class="col-12">
              <p class=" parargraph-more">
                <?php echo $row->university->shortnote; ?>

              </p>
              <a class="showbx" href="#">Show More <i class="fa fa-angle-down" aria-hidden="true"></i>
              </a>
              <a class="showbx" href="#">Show Less <i class="fa fa-angle-up" aria-hidden="true"></i>
              </a>
            </div>
          </div>
          <button class="featuresoption"> <span></span> Featured </button>
        </div>
      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
    </div>
  </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\reactwithlaravel.educationmalaysia.in\resources\views\front\libya-institutions.blade.php ENDPATH**/ ?>