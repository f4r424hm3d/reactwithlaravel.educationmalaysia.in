<?php $__env->startPush('seo_meta_tag'); ?>
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
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
        <div class="col-xl-8 col-lg-8 col-md-12">

          <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($university->overviews->count() > 0): ?>
            <!-- Overview -->
            <div class="edu_wraper all-overviews show-overs">
              <div class="show-more-box">
                <div class="text show-more-heigh">
                  <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $university->overviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($row->title): ?>
                      <h2 class="edu_title"><?php echo e($row->title); ?></h2>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($row->thumbnail_path != null && Storage::disk("public")->exists($row->thumbnail_path)): ?>
                      <div class="cor-mid-img">
                        <img data-src="<?php echo e(storage_url($row->thumbnail_path)); ?>" alt="<?php echo e($university->name); ?>">
                      </div>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    <?php echo $row->description; ?>

                  <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                </div>
                
                <!-- <div class="show-more mt-2">Show Less</div> -->
              </div>
            </div>
          <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

          <div id="accordionExample" class="accordion shadow circullum">
            <!-- Call to action -->
            <div class="d-flex justify-content-center align-items-center flex-wrap set-gap my-3">
              <h3 class="intake_fee mb-0"> GET DETAILS ON FEE, ADMISSION, INTAKE</h3>
              <a href="<?php echo e(url('/sign-up/?return_to=')); ?>" class="btn btn-primary">Apply Now</a>
            </div>
            <div class="card">
              <div id="headingTwo" class="card-header bg-white shadow-sm border-0 pl-4 pr-4">
                <h6 class="mb-0 accordion_title">
                  <a href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
                    aria-controls="collapseTwo"
                    class="d-block position-relative collapsed text-dark collapsible-link py-2">
                    Find <?php echo e($university->name); ?> Courses
                  </a>
                </h6>
              </div>
              <div id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordionExample" class="collapse show">
                <div class="card-body pl-4 pr-4">
                  <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-3">
                      <div class="courses b-all">
                        <a target="_blank"
                          href="<?php echo e(url('university/' . $university->uname . '/pre-university-courses')); ?>">
                          <img data-src="<?php echo e(storage_cdn('assets/web/images/fuc-icons/certificate.png')); ?>" alt="icon"
                            height="40" width="40">
                          <span>Certificate</span>
                        </a>
                      </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-3">
                      <div class="courses b-all">
                        <a target="_blank"
                          href="<?php echo e(url('university/' . $university->uname . '/pre-university-courses')); ?>">
                          <img data-src="<?php echo e(storage_cdn('assets/web/images/fuc-icons/pre-university.png')); ?>"
                            alt="icon" height="40" width="40">
                          <span>Pre University</span>
                        </a>
                      </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-3">
                      <div class="courses b-all">
                        <a target="_blank" href="<?php echo e(url('university/' . $university->uname . '/diploma-courses')); ?>">
                          <img data-src="<?php echo e(storage_cdn('assets/web/images/fuc-icons/diploma.png')); ?>" alt="icon"
                            height="40" width="40">
                          <span>Diploma</span>
                        </a>
                      </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-3">
                      <div class="courses b-all">
                        <a target="_blank"
                          href="<?php echo e(url('university/' . $university->uname . '/under-graduate-courses')); ?>">
                          <img data-src="<?php echo e(storage_cdn('assets/web/images/fuc-icons/under-graduate.png')); ?>"
                            alt="icon" height="40" width="40">
                          <span>Under Graduate</span>
                        </a>
                      </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-3">
                      <div class="courses b-all">
                        <a target="_blank"
                          href="<?php echo e(url('university/' . $university->uname . '/post-graduate-courses')); ?>">
                          <img data-src="<?php echo e(storage_cdn('assets/web/images/fuc-icons/post-graduate.png')); ?>"
                            alt="icon" height="40" width="40">
                          <span>Post Graduate</span>
                        </a>
                      </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-3">
                      <div class="courses b-all">
                        <a target="_blank" href="<?php echo e(url('university/' . $university->uname . '/phd-courses')); ?>">
                          <img data-src="<?php echo e(storage_cdn('assets/web/images/fuc-icons/phd.png')); ?>" alt="icon"
                            height="40" width="40">
                          <span>Phd</span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="multi-streams">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($universtySpecializationsForCourses->count() > 0): ?>
              <div class="card">
                <div class="card-header">
                  <h3><?php echo e($university->name); ?> Popular Courses</h3>
                </div>
                <div class="card-body">
                  <div class="row ">
                    <div class="col-12 col-sm-12 col-md-2 mb-4 ">
                      <h2 class="top-streams">
                        Top Streams:
                      </h2>
                    </div>
                    <div class=" col-12 col-sm-12 col-md-10 mb-4">
                      <div class="multi-options">
                        <ul>

                          <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $universtySpecializationsForCourses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                            <li><span class="spanstream"
                                onclick="goToUniPrograms('<?php echo e($university->uname); ?>', '<?php echo e($row->id); ?>')">
                                <?php echo e($row->name); ?>

                              </span></li>
                          <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                          <li> <a target="_blank" href="<?php echo e(url('university/' . $university->uname . '/courses')); ?>"
                              class="btn btn-sm btn-primary span-linames">View All</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            <div class="card">
              <div class="card-header">
                <h3>Malaysia Popular Courses</h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-12 col-sm-12 col-md-2 mb-4 ">
                    <h2 class="top-streams">
                      Top Streams:
                    </h2>
                  </div>
                  <div class=" col-12 col-sm-12 col-md-10 mb-4">
                    <div class="multi-options">
                      <ul>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $randomSpecializations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                          <li>
                            <a class="spanstream" target="_blank"
                              href="<?php echo e(url($row->slug . '-courses')); ?>"><?php echo e($row->name); ?></a>
                          </li>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                        <li>
                          <a target="_blank" href="<?php echo e(url('courses-in-malaysia')); ?>"
                            class="btn btn-sm btn-primary span-linames">View
                            All</a>
                        </li>
                      </ul>

                    </div>

                  </div>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header">
                <h3>Top Courses to Study in Malaysia</h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-12 col-sm-12 col-md-2 mb-4 ">
                    <h2 class="top-streams">
                      Top Streams:
                    </h2>
                  </div>
                  <div class="col-md-10 mb-4">
                    <div class="multi-options">
                      <ul>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $specializationsWithContents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                          <li>
                            <a class="spanstream" target="_blank"
                              href="<?php echo e(route('specialization.detail', ['slug' => $row->slug])); ?>"><?php echo e($row->name); ?></a>
                          </li>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                        <li>

                          <a target="_blank" href="<?php echo e(url('specialization')); ?>"
                            class="btn btn-sm btn-primary span-linames">View
                            All</a>
                        </li>
                      </ul>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!-- Sidebar -->
        <div class="col-xl-4 col-lg-4 col-md-12">
          <?php echo $__env->make('front.forms.university-side-form', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
          <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($trendingUniversity->count() > 0): ?>
            <div class="ed_view_box style_2 hide-thi">
              <div class="ed_author">
                <div class="ed_author_box">
                  <h4>Featured Universities</h4>
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
          <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

          <div class="ed_view_box style_2">
            <div class="ed_author">
              <div class="ed_author_box">
                <h4>Find Universities Courses</h4>
              </div>
            </div>

            <a class="learnup-list" href="<?php echo e(url('courses/pre-university')); ?>">
              <div class="learnup-list-thumb">

                <img data-src="<?php echo e(storage_cdn('assets')); ?>/web/images/fuc-icons/pre-university.png" class="img-fluid"
                  alt="Pre University">

              </div>
              <div class="learnup-list-caption">
                <h6>
                  <p>Certificate Course in Malaysia </p>
                </h6>
              </div>
            </a>
            <a href="<?php echo e(url('courses/diploma')); ?>" class="learnup-list">
              <div class="learnup-list-thumb">

                <img data-src="<?php echo e(storage_cdn('assets')); ?>/web/images/fuc-icons/diploma.png" class="img-fluid"
                  alt="Pre University">

              </div>
              <div class="learnup-list-caption">
                <h6>
                  <p>Diploma Course in Malaysia </p>
                </h6>
              </div>
            </a>
            <a class="learnup-list" href="<?php echo e(url('courses/under-graduate')); ?>">
              <div class="learnup-list-thumb">

                <img data-src="<?php echo e(storage_cdn('assets')); ?>/web/images/fuc-icons/under-graduate.png" class="img-fluid"
                  alt="Pre University">

              </div>
              <div class="learnup-list-caption">
                <h6>
                  <p>Bachelor Course in Malaysia </p>
                </h6>
              </div>
            </a>
            <a class="learnup-list" href="<?php echo e(url('courses/post-graduate')); ?>">
              <div class="learnup-list-thumb">

                <img data-src="<?php echo e(storage_cdn('assets')); ?>/web/images/fuc-icons/post-graduate.png" class="img-fluid"
                  alt="Pre University">

              </div>
              <div class="learnup-list-caption">
                <h6>
                  <p>Master Degree in Malaysia </p>
                </h6>
              </div>
            </a>
            <a class="learnup-list" href="<?php echo e(url('courses/phd')); ?>">
              <div class="learnup-list-thumb">

                <img data-src="<?php echo e(storage_cdn('assets')); ?>/web/images/fuc-icons/phd.png" class="img-fluid"
                  alt="Pre University">

              </div>
              <div class="learnup-list-caption">
                <h6>
                  <p>PHD Courses in Malaysia </p>
                </h6>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Content -->
  <script>
    function goToUniPrograms(uname, specializationId) {
      if (specializationId != '') {
        $.ajax({
          url: "<?php echo e(url('university-course-list/specialization')); ?>",
          method: "GET",
          data: {
            specialization_id: specializationId
          },
          success: function(data) {
            window.open("<?php echo e(url('university/')); ?>/" + uname + "/courses", "_blank");
          }
        });
      }
    }

    $(document).ready(function() {
      $("table").each(function() {
        if (!$(this).parent().hasClass("table-responsive")) {
          $(this).wrap("<div class='table-responsive'></div>");
        }
      });
    });
  </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\reactwithlaravel.educationmalaysia.in\resources\views\front\university-overview.blade.php ENDPATH**/ ?>