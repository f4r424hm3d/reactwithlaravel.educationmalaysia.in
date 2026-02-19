<?php $__env->startPush('seo_meta_tag'); ?>
  <?php echo $__env->make('front.layouts.static_page_meta_tag', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('main-section'); ?>
  <!-- Breadcrumb -->
  <div class="image-cover ed_detail_head lg" style="background:url(<?php echo e(storage_cdn('front/')); ?>/assets/img/ub.jpg);"
    data-overlay="8">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-12 col-md-12">
          <div class="ed_detail_wrap light">
            <ul class="cources_facts_list">
              <li class="facts-1"><a href="<?php echo e(url('/')); ?>">Home</a></li>
              <li class="facts-1"><?php echo e($author->name); ?></li>
            </ul>
            <div class="ed_header_caption mb-0">
              <h1 class="ed_title mb-0"><?php echo e($author->name); ?></h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumb -->

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
                    <div class="col-md-3"><img data-src="<?php echo e(userIcon($author->profile_picture)); ?>"
                        class="rounded img-fluid mb-4"></div>
                    <div class="col-md-9">
                      <h4 class="b-b pb-2 theme-cl">Highlights</h4>
                      <?php echo $author->highlights; ?>

                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12">

                      <h4 class="b-b pb-2 theme-cl">Education</h4>
                      <?php echo $author->education; ?>


                      <h4 class="b-b pb-2 theme-cl mt-4">Experience</h4>
                      <?php echo $author->experiance; ?>


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

  <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($blogs->count() > 0): ?>
    <section class="bg-light pt-0">
      <div class="container">

        <div class="row justify-content-center">
          <div class="col-lg-12 col-md-12">
            <div class="sec-heading">
              <h2>Recent Blog</h2>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 p-0">

            <div class="container">

              <div class="custom-tab customize-tab tabs_creative mb-0">

                <div class="tab-content" id="myTabContent" style="margin:0px -10px">
                  <div class="tab-pane fade active show pb-0" id="artical1" role="tabpanel"
                    aria-labelledby="artical1-tab" aria-expanded="true">
                    <div class="arrow_slide three_slide arrow_middle">

                      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 mb-4">
                          <div class="singles_items p-0">
                            <div class="education_block_grid style_2">
                              <div class="education_block_thumb n-shadow">
                                <a
                                  href="<?php echo e(route('blog.detail', ['category_slug' => $row->category->category_slug, 'slug' => $row->slug . '-' . $row->id])); ?>">
                                  <img data-src="<?php echo e(storage_url($row->thumbnail_path)); ?>" class="blogimags"
                                    alt="<?php echo e($row->headline); ?>">
                                </a>
                                <div class="cources_price"><a
                                    href="<?php echo e(route('blog.category', ['category_slug' => $row->category->category_slug])); ?>"><?php echo e($row->category->category_name); ?></a>
                                </div>
                              </div>
                              <div class="education_block_body">
                                <h4 class="bl-title">
                                  <a
                                    href="<?php echo e(route('blog.detail', ['category_slug' => $row->category->category_slug, 'slug' => $row->slug . '-' . $row->id])); ?>"><?php echo e($row->headline); ?></a>
                                </h4>
                              </div>
                              <div class="cources_info_style3">
                                <ul>
                                  <li><i class="ti-calendar mr-2"></i><?php echo e(getFormattedDate($row->updated_at, 'd M, Y')); ?>

                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>

                    </div>
                  </div>

                </div>
              </div>

            </div>

          </div>
        </div>

        <div class="row justify-content-center">
          <a href="<?php echo e(url('blog')); ?>" class="btn btn-modern float-none">View all Blog<span><i
                class="fa fa-angle-right"></i></span></a>
        </div>

      </div>
    </section>
  <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
  <!-- Content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\reactwithlaravel.educationmalaysia.in\resources\views\front\author.blade.php ENDPATH**/ ?>