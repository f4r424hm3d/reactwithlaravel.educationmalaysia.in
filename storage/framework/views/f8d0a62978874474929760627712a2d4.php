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
              <li class="facts-1"><a href="<?php echo e(url('faqs')); ?>">Faqs</a></li>
              <li class="facts-1"><?php echo e(ucwords($category->category_name)); ?></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumb -->
  <!-- Content -->
  <section class="min-sec">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 p-0">
          <h4 class="faqusrs"><?php echo e(ucwords($category->category_name)); ?> Frequently Asked Questions</h4>
          <div class="container">
            <div class="custom-tab customize-tab tabs_creative">
              <ul class="nav nav-tabs pb-2 b-0 vertically-scrollbar mb-2" id="myTab" role="tablist">

                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                  <li class="nav-item">
                    <a class="nav-link <?php echo e($cat->category_slug == $category->category_slug ? 'active' : ''); ?>"
                      id="<?php echo e($cat->category_slug); ?>-tab"
                      href="<?php echo e(route('faq.category', ['category_slug' => $cat->category_slug])); ?>"><?php echo e($cat->category_name); ?></a>
                  </li>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>

              </ul>

              <div class="tab-content" id="myTabContent">
                <div class="tab-pane  active" id="faq" role="tabpanel" aria-labelledby="faq-tab"
                  aria-expanded="true">

                  <div id="accordionExample" class="accordion circullum">

                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $category->faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                      <div class="card">
                        <div id="heading<?php echo e($faq->id); ?>" class="card-header">
                          <div class="mb-0 accordion_title"><a href="#" data-toggle="collapse"
                              data-target="#collapse<?php echo e($faq->id); ?>" aria-expanded="false"
                              aria-controls="collapse<?php echo e($faq->id); ?>"
                              class="d-block position-relative collapsible-link py-1">
                              <?php echo e($faq->question); ?>

                            </a></div>
                        </div>
                        <div id="collapse<?php echo e($faq->id); ?>" aria-labelledby="heading<?php echo e($faq->id); ?>"
                          data-parent="#accordionExample" class="collapse">
                          <div class="card-body">
                            <?php echo $faq->answer; ?>

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
    </div>
  </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\reactwithlaravel.educationmalaysia.in\resources\views\front\faq-by-category.blade.php ENDPATH**/ ?>