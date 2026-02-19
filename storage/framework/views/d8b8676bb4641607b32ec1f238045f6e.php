<?php $__env->startPush('seo_meta_tag'); ?>
  <?php echo $__env->make('front.layouts.dynamic_page_meta_tag', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('main-section'); ?>
  <!-- Top header-->
  <!-- Breadcrumb -->
  <div class="image-cover ed_detail_head lg" style="background:url(<?php echo e(storage_cdn('front/')); ?>/assets/img/ub.jpg);"
    data-overlay="8">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-12 col-md-12">
          <div class="ed_detail_wrap light">
            <ul class="cources_facts_list">
              <li class="facts-1"><a href="<?php echo e(url('/')); ?>">Home</a></li>
              <li class="facts-1"><a href="<?php echo e(route('blog')); ?>">Blog</a></li>
              <li class="facts-1"><?php echo e($category->category_name); ?></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumb -->
  <!-- Content -->
  <section class="mbbs-sectins">
    <div class="container">
      <div class="row">
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
          <div class="col-12 col-sm-6 col-md-4 col-lg-4 mb-4">
            <div class="singles_items p-0 h-100">
              <div class="education_block_grid style_2">
                <div class="education_block_thumb n-shadow">
                  <a class="image-ancors"
                    href="<?php echo e(route('blog.detail', ['category_slug' => $row->category->category_slug, 'slug' => $row->slug . '-' . $row->id])); ?>">
                    <img data-src="<?php echo e(storage_url($row->thumbnail_path)); ?>" class="img-fluid" alt="<?php echo e($row->headline); ?>">
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
                    <li><i class="ti-calendar mr-2"></i><?php echo e(getFormattedDate($row->updated_at, 'd M, Y')); ?></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>

      </div>
      <?php echo $blogs->links('pagination::bootstrap-4'); ?>

    </div>
  </section>
  <!-- Content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\reactwithlaravel.educationmalaysia.in\resources\views\front\blog-by-category.blade.php ENDPATH**/ ?>