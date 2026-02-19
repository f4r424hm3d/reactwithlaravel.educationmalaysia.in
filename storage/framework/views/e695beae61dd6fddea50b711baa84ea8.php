<?php $__env->startPush('seo_meta_tag'); ?>
  <?php echo $__env->make('front.layouts.dynamic_page_meta_tag', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('breadcrumb_schema'); ?>
  <!-- breadcrumb schema Code -->
  <script type="application/ld+json">
    {
      "@context": "https://schema.org/",
      "@type": "BreadcrumbList",
      "name": "<?php echo e(ucwords($meta_title)); ?>",
      "description": "<?php echo e($meta_description); ?>",
      "itemListElement": [{
        "@type": "ListItem",
        "position": 1,
        "name": "Home",
        "item": "<?php echo e(url('/')); ?>"
      }, {
        "@type": "ListItem",
        "position": 2,
        "name": "University",
        "item": "<?php echo e(url('select-university')); ?>"
      }, {
        "@type": "ListItem",
        "position": 3,
        "name": "<?php echo e($university->name); ?>",
        "item": "<?php echo e(url()->current()); ?>"
      }]
    }
  </script>
  <!-- breadcrumb schema Code End -->
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
        <div class="col-lg-8 col-md-12">
          <div class="card">
            <div class="card-body p-4">
              <div class="row">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $university->videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <iframe width="100%" height="200" src="<?php echo e($row->video_link); ?>" title="YouTube video player"
                      frameborder="0"
                      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                      allowfullscreen></iframe>
                  </div>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
              </div>
            </div>
          </div>
          <!-- Call to action -->
          <div class="justify-content-center align-content-center text-center mb-4 font-weight-bold">
            GET DETAILS ON FEE, ADMISSION, INTAKE <a href="<?php echo e(url('/sign-up/?return_to=')); ?>"
              class="btn btn-theme-2 ml-2 rounded rounded-circle">Apply Now</a>
          </div>
        </div>
        <div class="col-lg-4 col-md-12">
          <div class="ed_view_box style_2">
            <div class="ed_author">
              <div class="ed_author_box">
                <h4>Affilated Colleges</h4>
              </div>
            </div>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $trendingUniversity; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
              <div class="learnup-list">
                <div class="learnup-list-thumb">
                  <a href="<?php echo e(route('university.overview', ['university_slug' => $row->uname])); ?>">
                    <img data-src="<?php echo e(storage_url($row->logo_path)); ?>" class="img-fluid" alt="<?php echo e($row->name); ?>">
                  </a>
                </div>
                <div class="learnup-list-caption">
                  <h6><a
                      href="<?php echo e(route('university.overview', ['university_slug' => $row->uname])); ?>"><?php echo e($row->name); ?></a>
                  </h6>
                  <p class="mb-0"><i class="ti-location-pin"></i> <?php echo e($row->city); ?>, <?php echo e($row->state); ?></p>
                  <div class="learnup-info">
                    <span>
                      <a href="<?php echo e(route('university.courses', ['university_slug' => $row->uname])); ?>"><i
                          class="fa fa-graduation-cap"></i> Programme</a>
                    </span>
                  </div>
                </div>
              </div>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>

          </div>
          <?php echo $__env->make('front.forms.university-side-form', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        </div>
      </div>
    </div>
  </section>
  <!-- Content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\reactwithlaravel.educationmalaysia.in\resources\views\front\university-videos.blade.php ENDPATH**/ ?>