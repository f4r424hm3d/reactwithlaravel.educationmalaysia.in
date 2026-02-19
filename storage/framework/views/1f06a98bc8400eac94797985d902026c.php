<?php $__env->startPush('seo_meta_tag'); ?>
  <?php echo $__env->make('front.layouts.static_page_meta_tag', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('main-section'); ?>
  <!-- Breadcrumb -->
  <div class="new-top-header">
    <div class="container">
      <div class="row align-items-center flex-column-reverse flex-md-row">
        <div class="col-12 col-sm-12 col-md-6 col-lg-8  mb-4 mb-md-0">
          <h2 class="malaysia-student">Accounting Finance Course in Malaysia : Complete Guide for International Students
          </h2>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-4  mb-4 mb-md-0">
          <div class="specilaizationbx">
            <img src="<?php echo e(storage_cdn('assets/web/images/em-cource-img-lite.webp')); ?>" alt="accounting finance in Malaysia"
              class="initial loading" data-was-processed="true">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- style="background:url(<?php echo e(storage_cdn('front/')); ?>/assets/img/ub.jpg);" -->
  <div class="image-cover ed_detail_head lg" data-overlay="8">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-12 col-md-12">
          <div class="ed_detail_wrap light">
            <ul class="cources_facts_list">
              <li class="facts-1"><a href="<?php echo e(url('/')); ?>">Home</a></li>
              <li class="facts-1">Specialization</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumb -->
  <!-- Content -->
  <section class="main-specialization examslead ">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12 col-md-12 mb-3">
          <div class="sec-heading">
            <h2>Study <span class="theme-cl1">Abroad Exams</span> with Education Malaysia</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $specializations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-4 col-12">
            <div class="exaams">
              <a href="<?php echo e(route('specialization.detail', ['slug' => $row->slug])); ?>" target="_blank">
                <div class="fuc-box">
                  <p class="card-body"><?php echo e($row->name); ?> <i class="fa fa-angle-right"></i>
                  </p>
                </div>
              </a>
            </div>
          </div>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
      </div>
    </div>
  </section>
  <!-- Content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\reactwithlaravel.educationmalaysia.in\resources\views\front\specialization.blade.php ENDPATH**/ ?>