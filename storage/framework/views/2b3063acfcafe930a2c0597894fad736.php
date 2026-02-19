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
        "name": "Scholarships",
        "item": "<?php echo e(route('exams')); ?>"
      }, {
        "@type": "ListItem",
        "position": 3,
        "name": "<?php echo e($scholarship->title); ?>",
        "item": "<?php echo e(url('scholarship/' . $scholarship->slug)); ?>"
      }]
    }
  </script>
  <!-- breadcrumb schema Code End -->
<?php $__env->stopPush(); ?>
<?php $__env->startSection('main-section'); ?>
  <!-- Breadcrumb -->
  <!-- Breadcrumb -->
  <div class="ed_detail_head lg" data-overlay="8">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-12 col-md-12">
          <div class="ed_detail_wrap light">
            <ul class="cources_facts_list">
              <li class="facts-1"><a href="<?php echo e(url('/')); ?>">Home</a></li>
              <li class="facts-1"><a href="<?php echo e(url('scholarships')); ?>">Scholarships</a></li>
              <li class="facts-1"><a href="<?php echo e(url('scholarship/' . $scholarship->slug)); ?>"><?php echo e($scholarship->title); ?></a>
              </li>
            </ul>
            <div class="ed_header_caption mb-0">
              <h1 class="ed_title mb-0"><?php echo e($scholarship->heading); ?></h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumb -->
  <!-- nav-bar   -->
  <div class="new-scoll-links scroll-bar scroll-sticky new-stickyadd">
    <div class="container">
      <ul class="links scrollTo vertically-scrollbar">
        <?php
          $i = 1;
        ?>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $scholarship->contents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
          <li class="<?php echo e($i == 1 ? 'active' : ''); ?>"><a href="#<?php echo e(slugify($row->tab)); ?>"><?php echo e(ucwords($row->tab)); ?></a></li>
          <?php
            $i++;
          ?>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
      </ul>
    </div>
  </div>
  <!-- Content -->
  <section class="bg-light pt-5 pb-5">
    <div class="container">
      <div class="row">

        <div class="col-lg-8 col-md-8">
          <div class="new-exam-page">

            <div class="edu_wraper">
              <?php
                $pgcont = 1;
              ?>
              <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $scholarship->contents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                <div class="new-box mb-5" id="<?php echo e(slugify($row->tab)); ?>">
                  <?php echo $row->description; ?>

                </div>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($pgcont == 1): ?>
                  <img data-src="<?php echo e(storage_url($scholarship->og_image_path)); ?>" loading="lazy"
                    alt="<?php echo e($scholarship->title); ?>" class="img-responsive loading" data-was-processed="true">
                  <div class="text-center mt-4">
                    <a onclick="window.location.href='<?php echo e(url('sign-up?return_to=' . Request::path())); ?>'"
                      href="javascript:void()" target="blank" class="new-btn-sm" rel="nofollow"
                      title="Click to direct apply">Apply Here</a>
                    <a href="#enquire" class="new-btn-sm" data-toggle="tooltip" title="View All Courses">Enquire Now</a>
                  </div>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                <?php
                  $pgcont++;
                ?>
              <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>

            </div>
          </div>
        </div>

        <!-- Sidebar -->
        <div class="col-lg-4 col-md-4">

          <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($scholarships->count() > 0): ?>
            <div class="single_widgets widget_category">
              <h5 class="title">Other Scholarships</h5>
              <ul>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $scholarships; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                  <li>
                    <a href="<?php echo e(url('scholarship/' . $row->slug)); ?>">
                      <?php echo e($row->title); ?><span><i class="fa fa-angle-right"></i></span>
                    </a>
                  </li>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
              </ul>
            </div>
          <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

          <?php echo $__env->make('front.forms.simple-form', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        </div>

      </div>

    </div>
  </section>
  <!-- Content -->
  <script>
    $(document).ready(function() {
      // Wrap the table in a div with class 'table-responsive'
      $('table').before('<div class="table-responsive"></div>');

      // Move the table inside the newly created div
      $('table').prev('.table-responsive').append($('table'));
    });

    $('a[href*="#"]')
      .not('[href="#"]')
      .not('[href="#0"]')
      .click(function(event) {
        if (
          location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
          location.hostname == this.hostname
        ) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
          if (target.length) {
            event.preventDefault();
            $('html, body').animate({
              scrollTop: target.offset().top - 80
            }, 500, function() {});
          }
        }
      });
  </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\reactwithlaravel.educationmalaysia.in\resources\views\front\scholarship-detail.blade.php ENDPATH**/ ?>