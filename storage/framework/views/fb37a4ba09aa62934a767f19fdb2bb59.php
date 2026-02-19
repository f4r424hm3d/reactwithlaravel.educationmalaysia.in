<?php
  use App\Models\UniversityProgram;
?>

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
        "name": "Specializations",
        "item": "<?php echo e(url('specialization')); ?>"
      }, {
        "@type": "ListItem",
        "position": 3,
        "name": "<?php echo e($specialization->name); ?>",
        "item": "<?php echo e(url('specialization/' . $specialization->slug)); ?>"
      }]
    }
  </script>
  <!-- breadcrumb schema Code End -->
<?php $__env->stopPush(); ?>
<?php $__env->startSection('main-section'); ?>
  <!-- Breadcrumb -->
  <div class="new-top-header">
    <div class="container">
      <div class="row align-items-center flex-column-reverse flex-md-row">
        <div class="col-12 col-sm-12 col-md-6 col-lg-8 mb-4 mb-md-0  ">
          <h2 class="malaysia-student"><?php echo e($specialization->name); ?> Course in Malaysia : Complete Guide for International
            Students
          </h2>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-4 mb-4 mb-md-0  ">
          <div class="specilaizationbx">
            <img src="<?php echo e(storage_cdn('assets/web/images/em-cource-img-lite.webp')); ?>" alt="accounting finance in Malaysia"
              class="initial loading" data-was-processed="true">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="image-cover ed_detail_head" data-overlay="8">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-12 col-md-12">
          <div class="ed_detail_wrap light">
            <ul class="cources_facts_list">
              <li class="facts-1"><a href="<?php echo e(url('/')); ?>">Home</a></li>
              <li class="facts-1"><a href="<?php echo e(url('specialization')); ?>">Specialization</a></li>
              <li class="facts-1"><?php echo e($specialization->name); ?></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumb -->
  <!-- nav-bar   -->
  <div class="new-scoll-links scroll-bar scroll-sticky new-stickyadd  ">
    <div class="container">
      <ul class="links scrollTo vertically-scrollbar">
        <?php
          $i = 1;
        ?>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $specialization->contents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
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
          <div class="new-exam-page set-exam-pages li-pages ">
            <?php
              $pgcont = 1;
            ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $specialization->contents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
              <div class="new-box mb-4" id="<?php echo e(slugify($row->tab)); ?>">
                <?php echo $row->description; ?>

              </div>
              <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($pgcont == 1): ?>
                <img data-src="<?php echo e(storage_url($og_image_path)); ?>" loading="lazy" alt="<?php echo e($specialization->name); ?>"
                  class="img-responsive loading" data-was-processed="true">

                <div class="text-center mt-4 acn-gap ">
                  <a onclick="window.location.href='<?php echo e(url('sign-up')); ?>'" href="javascript:void()" target="blank"
                    class="new-btn-sms" rel="nofollow" title="Click to direct apply">Apply Here <svg
                      xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                      class="bi bi-arrow-right" viewBox="0 0 16 16">
                      <path fill-rule="evenodd"
                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z">
                      </path>
                    </svg> </a>
                  <a href="#enquiry-form" class="new-btn-sms" data-toggle="tooltip" title="View All Courses">Enquire
                    Now<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                      class="bi bi-arrow-right" viewBox="0 0 16 16">
                      <path fill-rule="evenodd"
                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z">
                      </path>
                    </svg>
                  </a>
                </div>
                <br>
                <div>
                  <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($relatedUniversities->count() > 0): ?>
                    <div>
                      <h2>List of <?php echo e($specialization->name); ?> Universities in Malaysia with courses</h2>
                      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $relatedUniversities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                        <?php
                          $allspcprograms = UniversityProgram::where([
                              'specialization_id' => $specialization->id,
                              'university_id' => $row->id,
                          ])->count();
                        ?>
                        <div class="card card-body">
                          <div class="row align-items-center">
                            <div class="col-md-2 col-xs-12 mb-3">
                              <div class="details-img">
                                <img data-src="<?php echo e(storage_url($row->logo_path)); ?>" class="img-fluid"
                                  alt="<?php echo e($row->name); ?> Logo">
                              </div>
                            </div>
                            <div class="col-md-10 col-xs-12 mb-3">
                              <div class="detail-rating">
                                <a target="_blank" href="<?php echo e(url('university/' . $row->uname)); ?>"><?php echo e($row->name); ?></a>
                                <div class="loc-rating">
                                  <span><i class="fa fa-map-marker"></i> <?php echo e($row->state); ?></span>
                                  <span style="padding-left:12px"><i class="fa fa-graduation-cap"></i>
                                    <?php echo e($row->inst_type); ?></span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-7 col-xs-12">
                              <div class="d-flex cor-gaps">
                                <div class="d-flex courcs-gap ">
                                  <h6> Courses:</h6> <span><?php echo e($row->programs->count()); ?></span>
                                </div>
                                <div class="d-flex courcs-gap">
                                  <h6> World Rank:</h6> <span><?php echo e($row->qs_rank); ?></span>
                                </div>

                                <div class="d-flex courcs-gap">
                                  <h6> Scholarship: <em>Yes</em></h6>
                                </div>
                              </div>

                              <em></em>

                            </div>
                            <div class="col-md-5 col-xs-12">
                              <div class="btn-mobile">
                                <button class="set-bx"
                                  onclick="goToUniPrograms('<?php echo e($row->uname); ?>', '<?php echo e($specialization->id); ?>')">
                                  <?php echo e($allspcprograms); ?> <?php echo e($specialization->name); ?> Courses Available
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>
                      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                    </div>
                    <div class="text-center mb-4">
                      <a href="<?php echo e(url($specialization->slug . '-courses')); ?>" class="btn btn-primary" rel="nofollow">
                        Browse All Courses
                      </a>
                    </div>
                  <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </div>
              <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
              <?php
                $pgcont++;
              ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($specialization->faqs->count() > 0): ?>
              <div class="boxfaq">
                <h2>FAQs : <?php echo e($specialization->name); ?></h2>
                <div id="accordion">
                  <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $specialization->faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                    <div class="card">
                      <div class="card-header" id="headdingbx<?php echo e($row->id); ?>">
                        <h5 class="mb-0">
                          <button class="btn btn-link" data-toggle="collapse" data-target="#onebx<?php echo e($row->id); ?>"
                            aria-expanded="true" aria-controls="onebx<?php echo e($row->id); ?>">
                            <?php echo e($row->question); ?>

                          </button>
                        </h5>
                      </div>

                      <div id="onebx<?php echo e($row->id); ?>" class="collapse "
                        aria-labelledby="headdingbx<?php echo e($row->id); ?>" data-parent="#accordion">
                        <div class="card-body">
                          <?php echo $row->answer; ?>

                        </div>
                      </div>
                    </div>
                  <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                </div>
              </div>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
          </div>

        </div>

        <!-- Sidebar -->
        <div class="col-lg-4 col-md-4">
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
          <?php echo $__env->make('front.forms.category-specialization-form', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
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

<?php echo $__env->make('front.layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\reactwithlaravel.educationmalaysia.in\resources\views\front\specialization-details.blade.php ENDPATH**/ ?>