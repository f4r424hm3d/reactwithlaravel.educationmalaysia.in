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
        "name": "Resources",
        "item": "<?php echo e(url('/')); ?>"
      },{
        "@type": "ListItem",
        "position": 3,
        "name": "Services",
        "item": "<?php echo e(url('services')); ?>"
      }, {
        "@type": "ListItem",
        "position": 4,
        "name": "<?php echo e($service->page_name); ?>",
        "item": "<?php echo e(url()->current()); ?>"
      }]
    }
  </script>
  <!-- breadcrumb schema Code End -->
<?php $__env->stopPush(); ?>
<?php $__env->startSection('main-section'); ?>
  <!-- Breadcrumb -->
  <div class="head-imags" style="background:url(<?php echo e(storage_cdn('front/')); ?>/assets/img/banner-head.jpg);"></div>
  <div class="image-cover ed_detail_head lg" public data-overlay="8">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-12 col-md-12">
          <div class="ed_detail_wrap light">
            <ul class="cources_facts_list">
              <li class="facts-1"><a href="<?php echo e(url('/')); ?>">Home</a></li>
              <li class="facts-1">Resources</li>
              <li class="facts-1"><a href="<?php echo e(url('/services/')); ?>">Services</a></li>
              <li class="facts-1"><?php echo e($service->page_name); ?></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumb -->
  <!-- nav-bar   -->
  
  <!-- Content -->
  <section class="bg-light pt-5 pb-5">
    <div class="container">
      <div class="row">

        <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 mb-4">
          <div class="new-exam-page">
            <div class="sec-heading">
              <h3><?php echo e($service->headline); ?></h3>
            </div>
            <hr>
            <img data-src="<?php echo e(storage_cdn($service->thumbnail_path)); ?>" class="img-fluid w-100 mb-3"
              alt="<?php echo e($service->headline); ?>">
            <div class="edu_wraper">
              <?php
                $pgcont = 1;
              ?>
              <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $service->contents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                <h3><?php echo e($row->tab_title); ?></h3>
                <div class="new-box mb-5" id="<?php echo e(slugify($row->tab_title)); ?>">
                  <?php echo $row->tab_content; ?>

                </div>
                <?php
                  $pgcont++;
                ?>
              <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>

            </div>
          </div>
        </div>

        <!-- Sidebar -->
        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 ">
          <div class="single_widgets widget_category">
            <h4 class="title">Other Services</h4>
            <ul>
              <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                <li><a href="<?php echo e(route('service.detail', ['uri' => $row->uri])); ?>"><?php echo e($row->page_name); ?><span><i
                        class="fa fa-angle-right"></i></span></a>
                </li>
              <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
            </ul>
          </div>
          <?php echo $__env->make('front.forms.simple-form', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
          <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($specializations->count() > 0): ?>
            <div class="single_widgets widget_category">
              <h5 class="title">Trending Course</h5>
              <ul>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $specializations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                  <li>
                    <a href="<?php echo e(url('specialization/' . $row->slug)); ?>">
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
        </div>

      </div>

    </div>
  </section>
  <!-- Content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\reactwithlaravel.educationmalaysia.in\resources\views\front\service-detail.blade.php ENDPATH**/ ?>