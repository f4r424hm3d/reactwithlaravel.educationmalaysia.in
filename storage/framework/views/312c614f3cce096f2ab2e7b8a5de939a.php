<!DOCTYPE html>
<html lang="en">

<head>
  <!--Meta Tag Seo-->
  <?php echo $__env->yieldPushContent('seo_meta_tag'); ?>
  <?php echo $__env->yieldPushContent('pagination_tag'); ?>

  <!-- CSS -->
  <!-- slick slider  -->
  <link rel="stylesheet" href= "<?php echo e(storage_cdn('front/assets/css/slick.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(storage_cdn('front/assets/css/slick-theme.css')); ?>">
  <!-- slick slider end  -->

  <!-- Owl Carousel CSS -->
  <link rel="stylesheet" href="<?php echo e(storage_cdn('front/assets/css/owl.carousel.min.css')); ?>" media="print"
    onload="this.media='all'">

  <!-- font-awesome  -->
  <link href="<?php echo e(storage_cdn('front/assets/css/font-awesome.min.css')); ?>" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo e(storage_cdn('front/assets/css/styles.css')); ?>">

  <link rel="preload" href="<?php echo e(storage_cdn('front/assets/css/colors.css')); ?>" as="style"
    onload="this.onload=null;this.rel='stylesheet'">
  <!-- In your <head> -->
  <link rel="preload" as="image" href="<?php echo e(storage_cdn('uploads/files/banner1_1741674968.webp')); ?>"
    type="image/webp">
  <link rel="preload" as="image" href="<?php echo e(storage_cdn('assets/web/images/em-menu2.webp')); ?>" type="image/webp">
  <link rel="preload" as="image" href="<?php echo e(storage_cdn('front/assets/img/logo.png')); ?>" type="image/png">

  <script src="<?php echo e(storage_cdn('front/assets/js/jquery.min.js')); ?>"></script>
  <script src="<?php echo e(storage_cdn('front/assets/js/sweetalert2@11.js')); ?>" defer></script>
  <style>
    .hide-this {
      display: none;
    }

    .sItems ul li a,
    .sItems ul li.active {
      padding: 8px 15px;
      display: block
    }

    .sItems {
      width: 100%;
      height: 118px;
      overflow: auto;
      top: 0
    }

    .sItems ul li {
      border-bottom: 1px solid #eee
    }

    .submit-more {
      text-transform: uppercase;
      font-size: 13px;
      font-family: sans-serif;
      color: #000000;
    }

    .sItems ul li.active {
      font-size: 15px;
      text-align: left;
      background: #ff57221c;
      color: #000000;
      text-transform: uppercase;
      font-weight: 600
    }

    .sItems ul li a:hover {
      background: #000000;
      color: #ffffff
    }

    .sidepanelv {
      width: 0;
      position: fixed;
      z-index: 1;
      height: 100%;
      top: 0;
      right: 0;
      background-color: #ffffff;
      overflow-x: hidden;
      transition: 0.5s;
      padding-top: 60px;
    }

    .sidepanelv .closebtnd:hover {
      color: #f1f1f1;
    }

    .sidepanelv .closebtnd {
      position: absolute;
      top: 0;
      right: 0px;
      width: 100%;
      font-size: 36px;
    }

    .openbtnv {
      cursor: pointer;
      background-color: #ffffff;
      color: white;
      padding: 6px 12px;
      border-radius: 3px;
      float: right;
      border: 1px solid #dedede;
    }

    .more-div {
      padding: 12px;
    }

    .more-div .nav-item .nav-link {
      border-bottom: 1px solid #00000040;
      margin-bottom: 4px;
      margin-top: 4px;
      border-radius: 0px;
      padding: 6px 12px;
      display: flex;
      gap: 12px;
      align-items: center;
    }

    .more-div .all-dropdowns .dropdown-menu.show {
      max-height: 135px;
    }

    .main-heddd .set-gap a {
      width: 100%;
    }

    .all-closes-flex {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 5px 11px;
    }

    .closeNAV {
      color: #252525b8;
      margin-right: 3px;
      position: absolute;
      top: 15px;
      right: 13px;
      border: 1px solid #252525b8;
      width: 32px;
      height: 32px;
      display: flex;
      justify-content: center;
      border-radius: 3px;
      font-weight: 300;
      align-items: center;
      font-size: 30px;
    }

    .closeNAV:hover {
      background-color: #004291;
      border-color: #fff;
      color: #fff !important;
    }

    .more-div .nav-item .nav-link i {
      color: #004291;
      margin-right: 3px;
    }
  </style>
  <?php echo $__env->yieldPushContent('breadcrumb_schema'); ?>
  <script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": "EducationMalaysia",
        "url": "https://www.educationmalaysia.in/",
        "logo": "https://www.educationmalaysia.in/assets/web/images/education-malaysia-new-logo.png",
        "image": "https://www.educationmalaysia.in/assets/web/images/education-malaysia-new-logo.png",
        "sameAs": ["https://www.facebook.com/educationmalaysia.in", "https://www.pinterest.com/educationmalaysiain/",
            "https://twitter.com/educatemalaysia/", "https://www.instagram.com/educationmalaysia.in/", "https://www.quora.com/profile/Education-Malaysia-3", "https://www.linkedin.com/company/educationmalaysia/", "https://www.youtube.com/channel/UCK7S9yvQnx08CgcDMMfYAyg"
        ],
        "contactPoint": [{
            "@type": "ContactPoint",
            "telephone": "+91 9818560331",
            "contactType": "customer support"
        }]
    }
  </script>
  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-WP578P4K');
  </script>
  <!-- End Google Tag Manager -->
</head>

<body class="red-skin">
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WP578P4K" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <div id="main-wrapper">
    <!-- Top header-->

    <nav class="navbar navbar-expand-lg navbar-light main-heddd">
      <div class="container">
        <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
          <img src="<?php echo e(storage_cdn('front/assets/img/malysia-logo.png')); ?>" class="logo-max"
            alt="Education Malaysia Education Logo">
        </a>
        <!-- desktop  html start -->
        <button class="navbar-toggler mobile-off" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse mobile-off navbar-collapse justify-content-end" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo e(url('/')); ?>">Home <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item dropdown all-dropdowns">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Resources

              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <div class="row mx-auto ">
                  <div class=" col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 mb-3 ">
                    <div class="b-font"><a href="<?php echo e(route('exams')); ?>">Exams</a></div>
                    <ul class="li_dd">
                      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $exams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exam): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                        <li><a
                            href="<?php echo e(route('exam.detail', ['uri' => $exam->uri])); ?>"><?php echo e(ucfirst($exam->page_name)); ?></a>
                        </li>
                      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>

                    </ul>
                  </div>
                  <div class=" col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 mb-3 ">
                    <div class="b-font"><a href="<?php echo e(route('services')); ?>">Services</a></div>
                    <ul class="li_dd">
                      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $sitePages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                        <li><a
                            href="<?php echo e(route('service.detail', ['uri' => $page->uri])); ?>"><?php echo e(ucfirst($page->page_name)); ?></a>
                        </li>
                      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                    </ul>
                  </div>
                  <div class=" col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 mb-3 ">
                    <div class="b-font">About Us</div>
                    <ul class="li_dd">
                      <li><a href="<?php echo e(route('wwa')); ?>">Who we are</a></li>
                      <li><a href="<?php echo e(route('wps')); ?>" target="_blank">What Students Say</a></li>
                      <li><a href="<?php echo e(route('select.level')); ?>" target="_blank">Study Malaysia</a></li>
                      <li><a href="<?php echo e(url('why-study-in-malaysia')); ?>">Why Study In Malaysia?</a></li>
                      <li><a href="<?php echo e(route('blog')); ?>">Blog</a></li>
                    </ul>
                  </div>
                  <!-- <div class=" col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 mb-3 ">
                    <img src="<?php echo e(storage_cdn('assets/web/images/em-menu2.webp')); ?>" class="img-fluid" alt="About us Image"
                      width="300" height="200">
                  </div> -->
                </div>
              </div>
            </li>
            <li class="nav-item"><a href="<?php echo e(url('courses-in-malaysia')); ?>" class="nav-link">Courses</a></li>
            <li class="nav-item"><a href="<?php echo e(route('select.university')); ?>" class="nav-link">Universities</a></li>
            <li class="nav-item"><a href="<?php echo e(route('specializations')); ?>" class="nav-link">Specialization</a></li>
            <li class="nav-item"><a href="<?php echo e(url('scholarships')); ?>" class="nav-link">Scholarship</a></li>
          </ul>
          <form class="d-flex align-items-center set-gap">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(session()->has('studentLoggedIn')): ?>
              <a href="<?php echo e(url('/student/profile/')); ?>" class="btn btn-outline-dark my-2 my-sm-0"
                type="submit">Profile</a>
            <?php else: ?>
              <a class="btn btn-primary" href="<?php echo e(url('sign-up')); ?>">Sign Up</a>
              <a class="btn btn-outline-dark my-2 my-sm-0" href="<?php echo e(url('sign-in')); ?>">Login</a>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
          </form>
        </div>
        <!-- desktop  html end -->
        <!-- Mobile  html start -->
        <button class=" desktop-off openbtnv" onclick="openNavd()">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class=" desktop-off  justify-content-end sidepanelv" id="mySidepanelvd">
          <div class="more-div">
            <div class="all-closes-flex closebtnd">
              <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                <img src="<?php echo e(storage_cdn('front/assets/img/malysia-logo.png')); ?>" class="logo-max"
                  alt="Education Malaysia Education Logo">
              </a> <a href="javascript:void(0)" class="closeNAV" onclick="closeNavd()">×</a>
            </div>
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="<?php echo e(url('/')); ?>"><i class="fa fa-home"></i>Home <span
                    class="sr-only">(current)</span></a>
              </li>

              <li class="nav-item dropdown all-dropdowns">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-cog" aria-hidden="true"></i> Resources

                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <div class="row mx-auto ">
                    <div class=" col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-3 ">
                      <div class="b-font"><a href="<?php echo e(route('exams')); ?>">Exams</a></div>
                      <ul class="li_dd">
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $exams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exam): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                          <li><a
                              href="<?php echo e(route('exam.detail', ['uri' => $exam->uri])); ?>"><?php echo e(ucfirst($exam->page_name)); ?></a>
                          </li>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>

                      </ul>
                    </div>
                    <div class=" col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-3 ">
                      <div class="b-font"><a href="<?php echo e(route('services')); ?>">Services</a></div>
                      <ul class="li_dd">
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $sitePages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                          <li><a
                              href="<?php echo e(route('service.detail', ['uri' => $page->uri])); ?>"><?php echo e(ucfirst($page->page_name)); ?></a>
                          </li>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                      </ul>
                    </div>
                    <div class=" col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-3 ">
                      <div class="b-font">About Us</div>
                      <ul class="li_dd">
                        <li><a href="<?php echo e(route('wwa')); ?>">Who we are</a></li>
                        <li><a href="<?php echo e(route('wps')); ?>" target="_blank">What Students Say</a></li>
                        <li><a href="<?php echo e(route('select.level')); ?>" target="_blank">Study Malaysia</a></li>
                        <li><a href="<?php echo e(url('why-study-in-malaysia')); ?>">Why Study In Malaysia?</a></li>
                      </ul>
                    </div>
                    <!-- <div class=" col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 mb-3 ">
                    <img src="<?php echo e(storage_cdn('assets/web/images/em-menu2.webp')); ?>" class="img-fluid" alt="About us Image"
                      width="300" height="200">
                  </div> -->
                  </div>
                </div>
              </li>
              <li class="nav-item"><a href="<?php echo e(url('courses-in-malaysia')); ?>" class="nav-link"><i
                    class="fa fa-book" aria-hidden="true"></i>Courses</a></li>
              <li class="nav-item"><a href="<?php echo e(route('select.university')); ?>" class="nav-link"><i
                    class="fa fa-university"></i>Universities</a></li>
              <li class="nav-item"><a href="<?php echo e(route('specializations')); ?>" class="nav-link"><i
                    class="fa fa-cogs"></i>Specialization</a></li>
              <li class="nav-item"><a href="<?php echo e(url('scholarships')); ?>" class="nav-link"><i
                    class="fa fa-graduation-cap"></i> Scholarship</a></li>
            </ul>
            <form class="d-flex align-items-center set-gap">
              <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(session()->has('studentLoggedIn')): ?>
                <a href="<?php echo e(url('/student/profile/')); ?>" class="btn btn-outline-dark my-2 my-sm-0"
                  type="submit">Profile</a>
              <?php else: ?>
                <a class="btn btn-primary" href="<?php echo e(url('sign-up')); ?>">Sign Up</a>
                <a class="btn btn-outline-dark my-2 my-sm-0" href="<?php echo e(url('sign-in')); ?>">Login</a>
              <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </form>
          </div>
        </div>
        <!-- Mobile  html start -->
      </div>
    </nav>

    <!-- Modal -->
    <div class="modal all-malaysia fade" id="modalSignupForm" tabindex="-1" role="dialog"
      aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <img src="<?php echo e(storage_cdn('front/assets/img/malysia-logo.png')); ?>" class="logo-max"
            alt="Education Malaysia Education Logo">
          <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>

            <div class="row">

              <div class="col-12 col-sm-12 col-md-12">
                <div class="all-fieldss">
                  <h2 class="malaysiastudys">Malaysia Calling – Up to 100% Scholarships! <span>( Limited Time Only!
                      )</span></h2>
                  <form class="row" id="counsellingForm">
                    <input type="hidden" name="source_path" value="<?php echo e(url()->current()); ?>">
                    <input type="hidden" name="return_to" value="<?php echo e($_GET['return_to'] ?? null); ?>">
                    <!-- Input Fields -->
                    <div class="col-12 col-sm-6 col-md-6">
                      <div class="form-group">
                        <!-- <label for="fullName">Full Name</label> -->
                        <div>
                          <input type="text" class="form-control" id="fullName" name="name"
                            placeholder="Full Name">
                          <span class="text-danger error-name span-bs"></span>
                        </div>
                      </div>
                    </div>

                    <div class="col-12 col-sm-6 col-md-6">
                      <div class="form-group">
                        <!-- <label for="email">Email Address</label> -->
                        <div>
                          <input type="email" class="form-control" id="email" name="email"
                            placeholder="Email Address">
                          <span class="text-danger error-email span-bs"></span>
                        </div>
                      </div>
                    </div>

                    <div class="col-12 col-sm-6 col-md-6">
                      <div class="form-group">
                        <!-- <label for="phone">Phone Number</label> -->
                        <select name="country_code" id="country_code" class="form-control">
                          <option value="">Country Code</option>
                          <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $phonecodesSF; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                            <option value="<?php echo e($item->phonecode); ?>"><?php echo e($item->phonecode); ?> (<?php echo e($item->name); ?>)
                            </option>
                          <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                        </select>
                        <span class="text-danger error-country_code span-bs"></span>
                      </div>
                    </div>

                    <div class="col-12 col-sm-6 col-md-6">
                      <div class="form-group">
                        <!-- <label for="city" class="number-ss">City</label> -->
                        <input type="text" class="form-control" id="city" name="city"
                          placeholder="City">
                        <span class="text-danger error-city span-bs"></span>
                      </div>
                    </div>

                    <div class="col-12 col-sm-12 col-md-12">
                      <div class="form-group">
                        <!-- <label for="phone" class="number-ss">Phone Number</label> -->
                        <input type="tel" class="form-control" id="phone" name="mobile"
                          placeholder="Mobile Number">
                        <span class="text-danger error-mobile span-bs"></span>
                      </div>
                    </div>

                    <!-- Select Fields -->
                    <div class="col-12 col-sm-12 col-md-12">
                      <div class="form-group">
                        <!-- <label for="rcountry">Country of Residence</label> -->
                        <div>
                          <select class="form-control" id="rcountry" name="country">
                            <option value="">Select Country</option>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $countriesSF; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                              <option value="<?php echo e($item->name); ?>"><?php echo e($item->name); ?></option>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                          </select>
                          <span class="text-danger error-country span-bs"></span>
                        </div>
                      </div>
                    </div>

                    <div class="col-12 col-sm-12 col-md-12">
                      <div class="form-group">
                        <!-- <label for="highest_qualification">Highest Qualification</label> -->
                        <div>
                          <select class="form-control" id="highest_qualification" name="highest_qualification">
                            <option value="">Select your qualification</option>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $levels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                              <option value="<?php echo e($row->level); ?>"><?php echo e($row->level); ?></option>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                          </select>
                          <span class="text-danger error-highest_qualification span-bs"></span>
                        </div>
                      </div>
                    </div>

                    <div class="col-12 col-sm-12 col-md-12">
                      <div class="form-group">
                        <!-- <label for="program">Interested Program</label> -->
                        <div>
                          <select class="form-control" id="program" name="interested_program">
                            <option value="">Select a program</option>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $course_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                              <option value="<?php echo e($row->name); ?>"><?php echo e($row->name); ?></option>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                          </select>
                          <span class="text-danger error-interested_program span-bs"></span>
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-label"
                          id="math-label"><?php echo e($mathQuestion['label'] ?? 'Solve the math:'); ?></label>
                        <input type="text" name="captcha" class="form-control" inputmode="numeric">
                        <input type="hidden" name="captcha_key" id="captcha_key"
                          value="<?php echo e($mathCaptchaKey ?? ''); ?>">
                        <span class="text-danger error-captcha span-bs"></span>
                      </div>
                    </div>

                    <div class="col-12">
                      <button type="submit" class="btn btn-primary w-100" id="submitBtn">Submit</button>
                    </div>
                  </form>
                  <p class="submit-more text-center mt-2 mb-0">( Submit once – no more popups after that! )</p>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <script>
      async function refreshModalCaptcha() {
        try {
          const res = await fetch("<?php echo e(route('captcha.math')); ?>", {
            method: 'POST',
            headers: {
              'X-CSRF-TOKEN': "<?php echo e(csrf_token()); ?>",
              'Accept': 'application/json',
              'Content-Type': 'application/json'
            },
            body: JSON.stringify({
              context: 'header_modal'
            })
          });

          const data = await res.json();
          document.getElementById('math-label').textContent = data.label;
          document.getElementById('captcha_key').value = data.key;
        } catch (err) {
          console.error('Captcha refresh failed', err);
        }
      }

      // manual refresh click
      document.getElementById('refresh-math')?.addEventListener('click', refreshModalCaptcha);
    </script>
    <script>
      function openModal() {
        $('#modalSignupForm').modal('show');
      }

      const studentLoggedIn = <?php echo e(session()->has('studentLoggedIn') ? 'true' : 'false'); ?>;
      const excludedPaths = [
        '/sign-in',
        '/sign-up',
      ];

      $(document).ready(function() {
        const modalKey = 'enquiry_modal_status';
        const closeCountKey = 'enquiry_modal_close_count';
        const neverShowKey = 'enquiry_modal_never_show';
        const currentPath = window.location.pathname;

        if (excludedPaths.includes(currentPath)) return;

        const modalStatus = localStorage.getItem(modalKey);
        const neverShow = localStorage.getItem(neverShowKey) === 'true';
        let closeCount = parseInt(localStorage.getItem(closeCountKey) || '0');

        // Show modal only if user is not logged in, not marked "never show" and not submitted
        if (!studentLoggedIn && !neverShow && modalStatus !== 'submitted' && closeCount < 3) {
          if (modalStatus !== 'closed') {
            // Show modal after 5 seconds delay
            setTimeout(openModal, 5000);
          } else {
            const lastClosed = localStorage.getItem('enquiry_modal_closed_time');
            if (lastClosed) {
              const diff = Date.now() - parseInt(lastClosed);
              if (diff > 5000) {
                setTimeout(openModal, 5000);
              }
            }
          }
        }

        // When modal is closed, track close count
        $('#modalSignupForm').on('hidden.bs.modal', function() {
          if (localStorage.getItem(modalKey) !== 'submitted') {
            localStorage.setItem(modalKey, 'closed');
            localStorage.setItem('enquiry_modal_closed_time', Date.now().toString());

            let closeCount = parseInt(localStorage.getItem(closeCountKey) || '0') + 1;
            localStorage.setItem(closeCountKey, closeCount.toString());

            // After 3 closes, never show modal again
            if (closeCount >= 3) {
              localStorage.setItem(neverShowKey, 'true');
            }
          }
        });

        // Form submission via AJAX
        $('#counsellingForm').on('submit', function(e) {
          e.preventDefault();

          let submitBtn = $('#submitBtn');
          submitBtn.prop('disabled', true).html('Submitting...');
          $('.text-danger').text('');

          $.ajax({
            url: "<?php echo e(route('modal.submit')); ?>",
            method: 'POST',
            data: $(this).serialize(),
            headers: {
              'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>'
            },
            success: function(res) {
              if (res.success) {
                localStorage.setItem(modalKey, 'submitted');
                window.location.href = "<?php echo e(url('confirmed-email')); ?>" + "?" + res.seg;
              }
            },
            error: function(xhr) {
              submitBtn.prop('disabled', false).html('Submit');

              if (xhr.status === 422) {
                let errors = xhr.responseJSON.errors;
                $.each(errors, function(key, val) {
                  $('.error-' + key).text(val[0]);
                });
                // 🔄 Always refresh captcha after any error
                refreshModalCaptcha();
              } else {
                alert('Something went wrong. Please try again.');
              }
            }
          });
        });
      });
    </script>

    <script>
      function openNavd() {
        var panel = document.getElementById("mySidepanelvd");
        panel.style.width = "100%";
        panel.style.maxWidth = "100%";
      }

      function closeNavd() {
        document.getElementById("mySidepanelvd").style.width = "0";
      }
    </script>
<?php /**PATH C:\laragon\www\reactwithlaravel.educationmalaysia.in\resources\views\front\layouts\header.blade.php ENDPATH**/ ?>