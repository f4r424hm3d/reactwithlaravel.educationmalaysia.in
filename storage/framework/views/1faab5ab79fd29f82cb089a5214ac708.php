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
              <li class="facts-1"><a href="index.html">Home</a></li>
              <li class="facts-1"><a href="#">Team</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section class="edu_cat_2 cat-3 pb-0 mb-0">
    <div class="container">
      <div class="row ">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="custom-tab customize-tab tabs_creative">
            <ul class="nav nav-tabs pb-2 b-0 mt-4 mb-4" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                  aria-controls="home" aria-selected="true">All</a>
              </li>
              <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                <li class="nav-item">
                  <a class="nav-link" id="<?php echo e(slugify($row->department)); ?>-tab" data-toggle="tab"
                    href="#<?php echo e(slugify($row->department)); ?>" role="tab" aria-controls="<?php echo e(slugify($row->department)); ?>"
                    aria-selected="false"><?php echo e($row->department); ?></a>
                </li>
              <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
            </ul>
            <div class="tab-content" id="myTabContent">

              <!-- Classess -->
              <div class="tab-pane fade show active p-2" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="row">
                  <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $all; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                    <div class="col-lg-3 col-md-4">
                      <!-- Single Slide -->
                      <div class="singles_items">
                        <div class="instructor_wrap">
                          <div class="instructor_thumb">
                            <img src="<?php echo e(storage_url($row->profile_picture)); ?>" class="img-fluid"
                              alt="<?php echo e($row->name); ?> education counsellor">
                          </div>
                          <div class="instructor_caption">
                            <h4><?php echo e($row->name); ?></h4>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($row->working_status != null): ?>
                              <span class="badge bg-<?php echo e($row->ws->class); ?>"><?php echo e($row->ws->status); ?></span>
                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            <ul class="instructor_info">
                              <li><i class="ti-tag"></i> <?php echo e($row->designation); ?></li>
                              <li><i class="ti-user"></i> <?php echo e($row->experience_short); ?></li>
                            </ul>
                            <a href="<?php echo e(url('team/' . $row->slug . '-' . $row->id)); ?>" class="btn btn-outline-theme">View
                              Details <i class="fa fa-angle-right"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                </div>
              </div>

              <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                <!-- Education -->
                <div class="tab-pane fade" id="<?php echo e(slugify($dr->department)); ?>" role="tabpanel"
                  aria-labelledby="<?php echo e(slugify($dr->department)); ?>-tab">
                  <div class="row">
                    <!-- Single Video -->
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $dr->empByDepartment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                      <div class="col-lg-3 col-md-4">
                        <!-- Single Slide -->
                        <div class="singles_items">
                          <div class="instructor_wrap">
                            <div class="instructor_thumb">
                              <img src="<?php echo e(storage_url($row->profile_picture)); ?>" class="img-fluid"
                                alt="<?php echo e($row->name); ?> education counsellor">
                            </div>
                            <div class="instructor_caption">
                              <h4><?php echo e($row->name); ?></h4>
                              <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($row->working_status != null): ?>
                                <span class="badge bg-<?php echo e($row->ws->class); ?>"><?php echo e($row->ws->status); ?></span>
                              <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                              <ul class="instructor_info">
                                <li><i class="ti-tag"></i> <?php echo e($row->designation); ?></li>
                                <li><i class="ti-user"></i> <?php echo e($row->experience_short); ?></li>
                              </ul>
                              <a href="<?php echo e(url('team/' . $row->slug . '-' . $row->id)); ?>"
                                class="btn btn-outline-theme">View
                                Details <i class="fa fa-angle-right"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                  </div>
                </div>
              <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>

            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\reactwithlaravel.educationmalaysia.in\resources\views\front\team.blade.php ENDPATH**/ ?>