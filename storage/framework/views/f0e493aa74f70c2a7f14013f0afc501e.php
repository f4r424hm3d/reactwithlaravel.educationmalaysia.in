<?php $__env->startPush('seo_meta_tag'); ?>
  <?php echo $__env->make('front.layouts.static_page_meta_tag', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('main-section'); ?>
  <div class="image-cover ed_detail_head lg" style="background:url(assets/img/ub.jpg);" data-overlay="8">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-12 col-md-12">
          <div class="ed_detail_wrap light">
            <ul class="cources_facts_list">
              <li class="facts-1"><a href="<?php echo e(url('/')); ?>">Home</a></li>
              <li class="facts-1"><a href="<?php echo e(url('team')); ?>">Team</a></li>
              <li class="facts-1"><?php echo e($user->name); ?></li>
            </ul>
            <div class="ed_header_caption mb-0">
              <h1 class="ed_title mb-0"><?php echo e($user->name); ?></h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Content -->
  <section class="bg-light pb-3">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
          <!-- all universities -->
          <div class="dashboard_container bg-transparent shadow-0">
            <div class="dashboard_container_body">
              <div id="accordionExample" class="accordion shadow circullum">
                <div class="card mb-3 p-4">
                  <div class="row align-items-center">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <div>
                        <div class="dashboard_container_body p-4 bg-light">
                          <div class="viewer_detail_wraps">
                            <div class="viewer_detail_thumb">
                              <img src="<?php echo e(storage_url($user->profile_picture)); ?>" class="img-fluid w-100 circle"
                                alt="">
                              <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($user->working_status != null): ?>
                                <div class="viewer_status badge bg-<?php echo e($user->ws->class); ?>"><?php echo e($user->ws->status); ?></div>
                              <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            </div>
                            <div class="caption">
                              <div class="viewer_package_status"><strong>Experience :
                                  <?php echo e($user->experience_short); ?></strong></div>
                              <div class="viewer_header">
                                <h4><?php echo e($user->name); ?></h4>
                                <span class="viewer_location"><strong>Designation :</strong>
                                  <?php echo e($user->designation); ?></span>
                                <span class="viewer_location"><strong>Branch Name : </strong> <?php echo e($user->branch); ?></span>
                              </div>

                              <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($user->ws->status != null): ?>
                                <div class="alert alert-<?php echo e($user->ws->class); ?> alert-dismissible fade show"
                                  role="alert">
                                  <?php echo e($user->ws->status); ?> : <span id="smsg"><?php echo e($user->ws->shortnote); ?></span>
                                </div>
                              <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12">
                      <h4 class="b-b pb-2 pt-4 theme-cl1">About <?php echo e($user->name); ?></h4>
                      <p class="font-size-16">
                        <?php echo $user->shortnote; ?>

                      </p>
                    </div>
                    <div class="col-lg-6 mt-3 mb-3">
                      <h4 class="b-b pb-2 theme-cl1">Highlights</h4>
                      <?php echo $user->highlights; ?>

                    </div>
                    <div class="col-lg-6 mt-3 mb-3">
                      <h4 class="b-b pb-2 theme-cl1">Education</h4>
                      <?php echo $user->education; ?>

                    </div>
                    <div class="col-md-12">
                      
                      <h4 class="b-b pb-2 theme-cl1 mt-4">Experience</h4>
                      <?php echo $user->experience_description; ?>

                      <h4 class="b-b pb-2 theme-cl1 mt-4">Language</h4>
                      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($user->languages != null): ?>
                        <ul class="list-btn">
                          <?php
                            $lang = explode(',', $user->languages);
                          ?>
                          <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $lang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                            <li><span><?php echo e($l); ?></span></li>
                          <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                        </ul>
                      <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    </div>
  </section>

  <style type="text/css">
    .list-btn {
      padding: 0px;
    }

    .list-btn li {
      padding: 0px 10px 0px;
      margin: 15px 0px 15px;
      display: inline-flex;
    }

    .list-btn li span {
      padding: 13px 18px 13px;
      background: #f4f8fa;
      border-radius: 18px;
      font-weight: 600;
    }

    .list-btn li :hover {
      background: rgba(218, 11, 78, 0.2);
    }

    .btn.btn_apply.w-100 {
      background: #0a4191;
      height: 48px;
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 4px;
      color: #ffffff;
    }

    .viewer_location {
      display: block;
    }

    .customize-tab.tabs_creative .nav-link {
      font-weight: 600;
      display: block;
      background: #edf0f5;
      border-radius: 4px;
      border: 1px solid #edf0f5 !important;
      margin-right: 0.5rem;
      padding: 8px 30px 8px;
    }

    .viewer_detail_thumb {
      width: 170px;
      height: 170px;
      border-radius: 50%;
      position: relative;
      margin-right: 1rem;
      display: flex;
    }
  </style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\reactwithlaravel.educationmalaysia.in\resources\views\front\team-member-detail.blade.php ENDPATH**/ ?>