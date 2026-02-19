<?php $__env->startPush('seo_meta_tag'); ?>
  <?php echo $__env->make('front.layouts.static_page_meta_tag', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('main-section'); ?>
  <!-- Breadcrumb -->
  <div class="image-cover ed_detail_head lg" style="background:url(<?php echo e(storage_cdn('front/')); ?>/assets/img/ub.jpg);"
    data-overlay="8">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-12 col-md-12">
          <div class="ed_detail_wrap light">
            <ul class="cources_facts_list">
              <li class="facts-1"><a href="<?php echo e(url('/')); ?>">Home</a></li>
              <li class="facts-1">Scholarships</li>
            </ul>
            <div class="ed_header_caption mb-0">
              <h1 class="ed_title mb-0">Scholarships</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumb -->
  <!-- Content -->
  <section class="bg-light examslead">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12 col-md-12 mb-3">
          <div class="sec-heading">
            <h2>Study <span class="theme-cl1">Abroad Exams</span> with Education Malaysia</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $scholarships; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
          <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-4">
            <div class="education_block_grid style_2 all-cards">
              <div class="education_block_thumb n-shadow fix-sizes">
                <img data-src="<?php echo e(storage_url($row->thumbnail_path)); ?>" class="fix-sizes" alt="<?php echo e($row->title); ?>">
                <div class="ul-offers">
                  <div class=" live-offer"><?php echo e($row->active_status); ?></div>
                  <div class=" live-exculsive"><?php echo e($row->type); ?></div>
                </div>

              </div>
              <div class="education_block_body title-size">
                <h4 class="bl-title card-title"><?php echo e($row->title); ?></h4>
              </div>
              <div class="education_block_footer align-items-center p">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($row->page_type == 'landing_page'): ?>
                  <a target="_blank" href="<?php echo e($row->landing_page_link); ?>" class="btn-regi">Explore More</a>
                  
                <?php else: ?>
                  <a href="<?php echo e(url('scholarship/' . $row->slug)); ?>" class="btn-regi">Explore More</a>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
              </div>
            </div>
          </div>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
      </div>
    </div>
  </section>
  <!-- Content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\reactwithlaravel.educationmalaysia.in\resources\views\front\scholarships.blade.php ENDPATH**/ ?>