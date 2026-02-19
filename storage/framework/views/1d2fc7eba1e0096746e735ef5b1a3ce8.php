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
        "name": "Universities in Malaysia",
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
              <li class="facts-1">Universities</li>
              <li class="facts-1"><?php echo e(unslugify(Request::segment(2))); ?></li>
            </ul>
            <div class="ed_header_caption mb-0">
              <h4 class="ed_title mb-2 mt-3"><span><?php echo $total; ?></span> <?php echo $currentInstituteType; ?> In <span>Malaysia</span>
              </h4>
              <p class="mb-0">Find a list of top <?php echo $currentInstituteType; ?> in malaysia. Get details such as institution type,
                campus
                location, courses offered, World rating and other pertinent information about all the top
                <?php echo $currentInstituteType; ?> in malaysia. Fill out an online request form to get the complete information about any
                top <?php echo $currentInstituteType; ?> in malaysia you're interested in.</p>
            </div>
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
        <div class="col-xl-3 col-lg-3 col-md-12 col-12">

          <div id="accordionExample" class="  accordion shadow circullum hide-23 full-width accord-mobile">
            <?php echo $__env->make('front.filter-universities', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
          </div>
        </div>
        <div class="col-xl-9 col-lg-9 col-md-12 col-12">

          <div class="row align-items-center mb-3">
            <div class="col-lg-12 col-md-12 col-sm-12">
              Found <strong><?php echo e($total); ?></strong> Universities
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
              <div>
                <form class="form" method="get">
                  <input class="form-control form-group" name="search" type="text" placeholder="Search Universities"
                    value="<?php echo e(request('search', '')); ?>">
                  <button class="btn btn-sm btn-primary">Search</button>
                  <a class="btn btn-sm btn-warning" href="<?php echo e(route('uim')); ?>">Reset</a>
                </form>
              </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 ordering">
              <div class="filter_wraps">
                <div class="dn db-991 mt30 mb0 show-23">
                  <div id="main2"><a href="javascript:void(0)" class="btn btn-theme filter_open" onClick="openNav()"
                      id="open2">Show Filter<span class="ml-2"><i class="fa fa-angle-right"></i></span></a></div>
                </div>
              </div>
              <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(session()->has('FilterInstituteType') || session()->has('FilterState')): ?>
                <div class="portal-filter">
                  <ul>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(session()->has('FilterInstituteType')): ?>
                      <li><a onclick="removeFilter('FilterInstituteType')"
                          href="javascript:void(0)"><?php echo e($currentInstituteType); ?><span class="cross">×</span></a>
                      </li>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(session()->has('FilterState')): ?>
                      <li><a onclick="removeFilter('FilterState')"
                          href="javascript:void(0)"><?php echo e(unslugify(session()->get('FilterState'))); ?><span
                            class="cross">×</span></a>
                      </li>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                  </ul>
                  <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(session()->has('FilterInstituteType') || session()->has('FilterState')): ?>
                    <a onclick="removeAllFilter()" href="javascript:void(0)" class="clearAll">Clear All</a>
                  <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </div>
              <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </div>
            <div class="text-right desktop-hide ml-auto px-3">
              <button type="button" class="btn btn-modern2 univ-btn reviews-btn rounded" data-toggle="modal"
                data-target="#exampleModal">
                Filter show
              </button>
            </div>
          </div>
          <!-- all universities -->
          <div class="dashboard_container">
            <div class="dashboard_container_body">
              <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($rows->count() > 0): ?>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                  <div class="dashboard_single_course align-items-center d-block">
                    <div class="row">
                      <div class="col-lg-10 pr-md-0">
                        <div class="row">
                          <div class="col-lg-2 col-md-3 col-sm-4 col-12 mb-4">
                            <div class="divimg">
                              <img data-src="<?php echo e(storage_url($row->logo_path)); ?>" class="img-fluid"
                                alt="<?php echo e($row->name); ?> Logo">
                            </div>
                          </div>
                          <div class="col-lg-10 col-md-9 col-sm-8 col-12 mb-4">
                            <div class="dashboard_single_course_caption ">
                              <div class="dashboard_single_course_head">
                                <div class="dashboard_single_course_head_flex mt-0">
                                  <h6 class="dashboard_course_title mb-1" style="font-size:20px">
                                    <a href="<?php echo e(route('university.overview', ['university_slug' => $row->uname])); ?>">
                                      <?php echo e($row->name); ?>

                                    </a>
                                  </h6>
                                  <div class="d-flex align-items-center justify-content-start set-ratings ">
                                    <div class="locationss">
                                      <i class="ti-location-pin"></i>
                                      <?php echo e(formatLocation($row->city, $row->state, $row->country)); ?>

                                    </div>
                                    <div class="locationssd">
                                      <div class="loc-rating">
                                        <span class="loc mobile">
                                          Rating:
                                          <div class="star-ratings">
                                            <?php echo universityRating($row->rating); ?>

                                          </div>
                                        </span>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                              </div>
                            </div>
                          </div>

                        </div>
                      </div>

                      <div class="col-lg-2 mb-4">
                        <div class="dc_head_right">
                          <div class="dropdown">
                            <a href="<?php echo e(route('university.overview', ['university_slug' => $row->uname])); ?>"
                              class="btn btn-modern2 univ-btn reviews-btn">View
                              Details</a>
                          </div>
                        </div>
                      </div>

                    </div>
                    <div class="row ">
                      <div class="col-md-4 col-lg-3 col-12">
                        <div class="flex-wrap align-items-center setgap2 block-desktop">
                          <span class="theme-cl">Institute Type:</span>
                          <span class="duratinss"> <?php echo e($row->instituteType->type); ?></span>
                        </div>
                      </div>
                      <div class="col-md-4 col-lg-3 col-12">
                        <div class="flex-wrap align-items-center setgap2 block-desktop">
                          <span class="theme-cl">Course:</span>
                          <span class="duratinss"> <?php echo e($row->programs->count() ?? 'N/A'); ?> </span>
                        </div>
                      </div>
                      <div class="col-md-4 col-lg-3 col-12">
                        <div class="flex-wrap align-items-center setgap2 block-desktop">
                          <span class="theme-cl">World Ranking:</span>
                          <span class="duratinss"> <?php echo e($row->rank ?? 'N/A'); ?> </span>
                        </div>
                      </div>

                    </div>
                  </div>
                  <br>
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

  <!-- Modal -->
  <div class="modal modal-filter-set fade " id="exampleModal" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Filter Title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body study-filters">
          <div id="accordionExample" class="accordion shadow circullum hide-23 full-width ">
            <?php echo $__env->make('front.filter-universities', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
          </div>
        </div>
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
    $(document).ready(function() {
      $('#filter_country').change(function() {
        //alert('hello');
        var selectedCountry = $(this).val();
        var baseUrl = "<?php echo e(url('/')); ?>";
        if (selectedCountry) {
          $.ajax({
            url: "<?php echo e(url('course-list/remove-all-filter')); ?>",
            method: "GET",
            success: function(b) {
              var redirectUrl = baseUrl + '/' + selectedCountry + '/' + selectedCountry + '-universities';
              window.location.href = redirectUrl;
            }
          });
        }
      });
      $('#mbl_filter_country').change(function() {
        //alert('hello');
        var selectedCountry = $(this).val();
        var baseUrl = "<?php echo e(url('/')); ?>";
        if (selectedCountry) {
          $.ajax({
            url: "<?php echo e(url('course-list/remove-all-filter')); ?>",
            method: "GET",
            success: function(b) {
              var redirectUrl = baseUrl + '/' + selectedCountry + '/' + selectedCountry + '-universities';
              window.location.href = redirectUrl;
            }
          });
        }
      });
    });

    function applyFilter(col, val) {
      //alert(col+' '+val);
      if (val != '') {
        $.ajax({
          url: "<?php echo e(route('university.list.apply.filter')); ?>",
          method: "GET",
          data: {
            col: col,
            val: val
          },
          success: function(data) {
            //alert(data);
            window.location.replace(data);
          }
        });
      }
    }

    function removeFilter(value) {
      //alert(value);
      if (value != "") {
        $.ajax({
          url: "<?php echo e(route('university.list.remove.filter')); ?>",
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
        url: "<?php echo e(route('university.list.remove.all.filter')); ?>",
        method: "GET",
        success: function(b) {
          window.open("<?php echo e(url('universities/universities-in-malaysia')); ?>", '_SELF');
        }
      })
    }
  </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\reactwithlaravel.educationmalaysia.in\resources\views\front\universities.blade.php ENDPATH**/ ?>