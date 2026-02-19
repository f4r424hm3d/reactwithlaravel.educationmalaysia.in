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
        "position": 3,
        "name": "Exams",
        "item": "<?php echo e(route('exams')); ?>"
      }, {
        "@type": "ListItem",
        "position": 4,
        "name": "<?php echo e($exam->page_name); ?>",
        "item": "<?php echo e(url()->current()); ?>"
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
              <li class="facts-1">Resources</li>
              <li class="facts-1"><a href="<?php echo e(route('exams')); ?>">Exams</a></li>
              <li class="facts-1"><a href="<?php echo e(url($exam->uri)); ?>"><?php echo e($exam->page_name); ?></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumb -->

  <!-- Content -->
  <section class="bg-light pt-5 pb-5">
    <div class="container">
      <div class="row">

        <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 mb-4">
          <div class="new-exam-page  pages-examss">

            <!-- <div class="sec-headline"> -->
            <h3><?php echo e($exam->headline); ?></h3>
            <!-- </div> -->

            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($exam->imgpath != null): ?>
              <img data-src="<?php echo e(storage_url($exam->imgpath)); ?>" alt="<?php echo e($exam->headline); ?>">
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            <div class="edu_wraper">

              <?php echo $exam->description; ?>


              <a href="#enquiry-now" class="big-center-btn btn-theme text-white rounded">
                Enquiry Now
              </a>

            </div>
          </div>
        </div>

        <!-- Sidebar -->
        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 ">
          <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($exams->count() > 0): ?>
            <div class="single_widgets widget_category">
              <h5 class="title">Important Exams</h5>
              <ul>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $exams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                  <li>
                    <a href="<?php echo e(route('exam.detail', ['uri' => $row->uri])); ?>">
                      <?php echo e($row->page_name); ?><span><i class="fa fa-angle-right"></i></span>
                    </a>
                  </li>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
              </ul>
            </div>
          <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
          <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($specializations->count() > 0): ?>
            <div class="single_widgets widget_category">
              <h5 class="title">Trending Course</h5>
              <ul>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $specializations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                  <li>
                    <a href="<?php echo e(route('specialization.detail', ['slug' => $row->slug])); ?>">
                      <?php echo e($row->name); ?><span><i class="fa fa-angle-right"></i></span>
                    </a>
                  </li>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
              </ul>
            </div>
          <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
          <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($featuredUniversities->count() > 0): ?>
            <div class="card">
              <div class="ed_author">
                <div class="ed_author_box">
                  <h4>Featured Universities</h4>
                </div>
              </div>
              <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $featuredUniversities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
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
          <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
          <?php echo $__env->make('front.forms.exam-page-form', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        </div>

      </div>

    </div>
  </section>
  <!-- Content -->

  <script>
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

  <script>
  $(document).ready(function() {
    $("table").each(function() {
      if (!$(this).parent().hasClass("table-responsive")) {
        $(this).wrap("<div class='table-responsive'></div>");
      }
    });
  });
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\reactwithlaravel.educationmalaysia.in\resources\views\front\exam-detail.blade.php ENDPATH**/ ?>