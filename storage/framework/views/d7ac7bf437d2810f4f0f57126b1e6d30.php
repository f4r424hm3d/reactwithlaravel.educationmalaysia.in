<?php
  use App\Models\StudentApplication;
  use App\Helpers\UniversityProgramListButton;
?>

<?php $__env->startPush('seo_meta_tag'); ?>
  <?php echo $__env->make('front.layouts.dynamic_page_meta_tag', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('pagination_tag'); ?>
  <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($npu): ?>
    <link rel="next" href="<?php echo e($npu); ?>" />
  <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
  <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($ppu): ?>
    <link rel="prev" href="<?php echo e($ppu); ?>" />
  <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
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
      "name": "Courses in Malaysia",
      "item": "<?php echo e(url()->current()); ?>"
      }
      ]
    }
  </script>
  <!-- breadcrumb schema Code End -->
<?php $__env->stopPush(); ?>
<?php $__env->startSection('main-section'); ?>
  <!-- Breadcrumb -->
  <div class="ed_detail_head" data-overlay="10">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-12 col-md-12">
          <div class="ed_detail_wrap light">
            <ul class="cources_facts_list">
              <li class="facts-1"><a href="<?php echo e(url('/')); ?>">Home</a></li>
              <li class="facts-1"><span><?php echo e(ucwords(str_replace('-', ' ', Request::segment(1)))); ?></span></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumb -->

  <!-- Content -->
  <section class="bg-light pt-4 pb-4">

    <div class="container">
      <div class="row">
        <div class="col-xl-3 col-lg-3 col-md-12 col-12 mb-4">
          <div id="accordionExample" class=" accordion shadow circullum hide-23 full-width accord-mobile">
            <?php echo $__env->make('front.filter-courses-in-malaysia', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
          </div>
        </div>
        <div class="col-xl-9 col-lg-9 col-md-12 col-12 ">
          <div class="row align-items-center">
            <div class="col-lg-12 col-md-12 col-sm-12  mb-3">
              <div class="forms-found ">
                Found <strong><?php echo e($total); ?></strong> programs
                <p><?php echo $page_contents; ?></p>
              </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
              <div>
                <form class="form" method="get">
                  <input class="form-control form-group" name="search" type="text" placeholder="Search Universities"
                    value="<?php echo e(request('search', '')); ?>">
                  <button class="btn btn-sm btn-primary">Search</button>
                  <a class="btn btn-sm btn-warning" href="<?php echo e(url()->current()); ?>">Reset</a>
                </form>
              </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 ordering  mb-3">
              <div class="filter_wraps">
                <div class="dn db-991 mt30 mb0 show-23">
                  <div id="main2"><a href="javascript:void(0)" class="btn btn-theme filter_open" onClick="openNav()"
                      id="open2">Show Filter<span class="ml-2"><i class="fa fa-angle-right"></i></span></a></div>
                </div>
              </div>
              <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(session()->has('CFilterLevel') ||
                      session()->has('CFilterCategory') ||
                      session()->has('CFilterSpecialization') ||
                      isset($_GET['study_mode']) ||
                      isset($_GET['intake'])): ?>
                <div class="portal-filter">
                  <ul>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(session()->has('CFilterLevel')): ?>
                      <li><a onclick="removeFilter('CFilterLevel')" href="javascript:void(0)"><?php echo e($curLevel->level); ?><span
                            class="cross">×</span></a>
                      </li>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(session()->has('CFilterCategory')): ?>
                      <li><a onclick="removeFilter('CFilterCategory')" href="javascript:void(0)"><?php echo e($curCat->name); ?><span
                            class="cross">×</span></a>
                      </li>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(session()->has('CFilterSpecialization')): ?>
                      <li><a onclick="removeFilter('CFilterSpecialization')"
                          href="javascript:void(0)"><?php echo e($curSpc->name); ?><span class="cross">×</span></a>
                      </li>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($_GET['study_mode'])): ?>
                      <li><a onclick="removeStaticFilter('study_mode')"
                          href="javascript:void(0)"><?php echo e($_GET['study_mode']); ?><span class="cross">×</span></a>
                      </li>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($_GET['intake'])): ?>
                      <li><a onclick="removeStaticFilter('intake')" href="javascript:void(0)"><?php echo e($_GET['intake']); ?><span
                            class="cross">×</span></a>
                      </li>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                  </ul>
                  <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(session()->has('CFilterLevel') ||
                          session()->has('CFilterCategory') ||
                          session()->has('CFilterSpecialization') ||
                          isset($_GET['study_mode']) ||
                          isset($_GET['intake'])): ?>
                    <a onclick="removeAllFilter()" href="javascript:void(0)" class="clearAll">Clear All</a>
                  <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </div>
              <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </div>
            <div class="text-right desktop-hide ml-auto px-3 mb-3">
              <button type="button" class="btn btn-modern2 univ-btn reviews-btn rounded" data-toggle="modal"
                data-target="#exampleModalCenter">
                Filter show
              </button>
            </div>
          </div>
          <!-- all universities -->
          <div class="dashboard_container">
            <div class="dashboard_container_body">
              <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($rows->count() > 0): ?>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                  <!-- Single University -->

                  <!-- duplicate new design start   -->
                  <div class="dashboard_single_course align-items-center d-block mb-4">
                    <div class="row align-items-center">
                      <div class="col-lg-12 pr-md-0 mb-3">
                        <div class="row align-items-center ">
                          <div class="col-lg-3 col-md-3 col-sm-12 col-12 ">
                            <div class="divimg">
                              <img data-src="<?php echo e(storage_url($row->university->logo_path)); ?>" class="img-fluid"
                                alt="<?php echo e($row->university->name); ?> Logo">
                            </div>
                          </div>

                          <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                            <div class="dashboard_single_course_caption ">
                              <div class="dashboard_single_course_head">
                                <div class="dashboard_single_course_head_flex mt-0">
                                  <h4 class="dashboard_course_title mb-2">
                                    <a
                                      href="<?php echo e(route('university.overview', ['university_slug' => $row->university->uname])); ?>">
                                      <?php echo e($row->university->name); ?>

                                    </a>
                                  </h4>
                                  <div class="d-flex setgap2 align-items-center locationsloc mb-2">
                                    <i class="ti-location-pin"></i>
                                    <?php echo e($row->university->city); ?>

                                  </div>
                                </div>

                              </div>
                            </div>
                            <div class="main-top-malysia">

                              <div class="top-malysia">
                                <div class="flex-wrap align-items-center setgap2 block-desktop">
                                  <span class="theme-cl ">Institute Type : </span>
                                  <span class="duratinss"><?php echo e($row->university->instituteType->type); ?> </span>
                                </div>
                              </div>
                              <div class="top-malysia">
                                <div class="flex-wrap align-items-center setgap2 block-desktop">
                                  <span class="theme-cl">Course : </span>
                                  <span class="duratinss"> <?php echo e($row->university->programs->count() ?? 'N/A'); ?></span>

                                  <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($row->university->programs->count() > 0): ?>
                                    <a href="<?php echo e(route('university.courses', ['university_slug' => $row->university->uname])); ?>"
                                      class="new-rbtn">
                                      <i class="fa fa-graduation-cap"></i> All Programs
                                    </a>
                                  <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                </div>
                              </div>
                              <div class="top-malysia">
                                <div class="flex-wrap align-items-center setgap2 block-desktop">
                                  <span class="theme-cl">World Ranking : </span>

                                  <span class="duratinss"><?php echo e($row->university->rank ?? 'N/A'); ?></span>
                                </div>
                              </div>
                              <div class="top-malysia">
                                <div class="flex-wrap align-items-center setgap2 block-desktop">
                                  <span class="theme-cl">Rating : </span>

                                  <span class="ratingstar">★★★★★</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>

                    <div class="row align-items-center ">
                      <div class="col-lg-8 col-md-8 col-sm-4  col-12 mb-3">
                        <h6 class="bachlors">
                          <a class="d-flex align-items-center "
                            href="<?php echo e(route('university.course.details', ['university_slug' => $row->university->uname, 'course_slug' => $row->slug])); ?>"
                            contenteditable="false" style="cursor: pointer;">
                            <!-- <i class="fa fa-hand-point-right mr-1 theme-cl"></i> -->
                            <?php echo e($row->course_name); ?>

                          </a>
                        </h6>
                        <div class="main-maalysia">
                          <div class="list-malysia">
                            <div class="flex-wrap align-items-center setgap2 block-desktop">
                              <span class="theme-cl">
                                Mode:
                              </span>
                              <span class="duratinss"> <?php echo e($row->study_mode); ?></span>
                            </div>

                          </div>
                          <div class="list-malysia">
                            <div class="flex-wrap align-items-center setgap2 block-desktop">
                              <span class="theme-cl">Duration:</span>
                              <span class="duratinss">
                                <?php echo e($row->duration); ?>

                              </span>
                            </div>

                          </div>
                          <div class="list-malysia">
                            <div class="flex-wrap align-items-center setgap2 block-desktop">
                              <span class="theme-cl">Intakes:</span>

                              <span class="duratinss">
                                <?php echo e($row->intake); ?>

                              </span>
                            </div>

                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-4 col-sm-4 col-12 mb-3 ">

                        <div class="d-flex flex-malysias">
                          <div class="dc_head_right">
                            <div class="dropdown ">
                              <?php echo UniversityProgramListButton::getApplyButton($row->id); ?>

                            </div>
                          </div>

                          <a href="<?php echo e(route('university.course.details', ['university_slug' => $row->university->uname, 'course_slug' => $row->slug])); ?>"
                            class="btn btn-outline-primary">View Detail</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- duplicate new design End -->

                  <!-- old design comment  end -->
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
              <?php else: ?>
                <center>No Data Found with your match</center>
              <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </div>
          </div>
          <?php echo $rows->links('pagination::bootstrap-4'); ?>

        </div>
      </div>
    </div>

  </section>
  <!-- Content -->
  <section class="top-trending-courses">
    <div class="container">
      <div class="show-more-box-trending">
        <div class="text show-more-height-trending">
          <div class="row">
            <div class="col-lg-12 text-center">
              <h2>Top <span>Trending</span> Courses</h2>
            </div>
          </div>
          <div class="row">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $specializations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <a href="<?php echo e(url('specialization/' . $row->slug)); ?>" target="_blank">
                  <div class="fuc-box">
                    <p><?php echo e($row->name); ?> <i class="fa fa-angle-right"></i></p>
                  </div>
                </a>
              </div>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
          </div>
        </div>
      </div>
      <div class="text-center mt-4">
        <a href="<?php echo e(url('specialization')); ?>" class="new-btn">
          Browse All Courses
        </a>
      </div>
    </div>

    <br>
    </br>
  </section>
  <!-- Mobile Filter -->
  <div id="filter-sidebar" class="filter-sidebar">
    <div class="filt-head">
      <h4 class="filt-first">Filter</h4>
      <a href="javascript:void(0)" class="closebtn" onClick="closeNav()">Close <i class="ti-close ml-1"></i></a>
    </div>
    <div class="show-hide-sidebar">
      <div class="sidebar-widgets">
        <!-- Search Form -->

      </div>
    </div>
  </div>

  <!-- study level filter modal   -->
  <!-- Button trigger modal -->

  <!-- Modal -->
  <div class="modal modal-filter-set fade " id="exampleModalCenter" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Filter Title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body study-filters">
          <div id="accordionExample1" class="accordion shadow circullum hide-23 full-width  ">
            <?php echo $__env->make('front.filter-courses-in-malaysia', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
          </div>
        </div>
        <!-- <div class="modal-footer">
                                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                      <button type="button" class="btn btn-primary">Save changes</button>
                                                    </div> -->
      </div>
    </div>
  </div>
  <!-- Show more -->
  <script>
    $(".show-more").click(function() {
      if ($(".text").hasClass("show-more-height")) {
        $(this).text("(Show Less)");
      } else {
        $(this).text("(Show More)");
      }
      $(".text").toggleClass("show-more-height");
    });
  </script>

  <script>
    function openNav() {
      document.getElementById("filter-sidebar").style.width = "320px";
    }

    function closeNav() {
      document.getElementById("filter-sidebar").style.width = "0";
    }
  </script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    function ApplyFilter(slug) {
      var baseUrl = "<?php echo e(url('/')); ?>";
      if (slug) {
        var redirectUrl = baseUrl + '/' + slug + '-courses';
        window.location.href = redirectUrl;
      }
    }

    // function applyFilter(col, val) {
    //   if (val != '') {
    //     $.ajax({
    //       url: "<?php echo e(route('university.list.apply.filter')); ?>",
    //       method: "GET",
    //       data: {
    //         col: col,
    //         val: val
    //       },
    //       success: function(data) {
    //         window.location.replace(data);
    //       }
    //     });
    //   }
    // }

    function removeFilter(value) {
      //alert(value);
      if (value != "") {
        $.ajax({
          url: "<?php echo e(route('cl.remove.filter')); ?>",
          method: "GET",
          data: {
            value: value,
          },
          success: function(b) {
            window.location.replace(b);
          }
        })
      }
    }

    function removeAllFilter() {
      $.ajax({
        url: "<?php echo e(route('cl.remove.all.filter')); ?>",
        method: "GET",
        success: function(b) {
          window.open("<?php echo e(url('courses-in-malaysia')); ?>", '_SELF');
        }
      })
    }

    function ApplyStaticFilter(key, value) {
      let currentUrl = window.location.href;
      let url = new URL(currentUrl);

      // Replace spaces with '+' symbol manually
      value = value.replace(/ /g, '+');

      url.searchParams.set(key, value);
      window.location.href = decodeURIComponent(url);
    }

    function removeStaticFilter(key) {
      let currentUrl = window.location.href;
      let url = new URL(currentUrl);

      // Remove the specified query parameter
      url.searchParams.delete(key);
      window.location.href = decodeURIComponent(url); // Redirect to the modified URL
    }
  </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\reactwithlaravel.educationmalaysia.in\resources\views\front\courses-in-malaysia.blade.php ENDPATH**/ ?>