<?php $__env->startPush('seo_meta_tag'); ?>
  <?php echo $__env->make('front.layouts.static_page_meta_tag', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('breadcrumb_schema'); ?>
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
              <li class="facts-1"><a href="<?php echo e(url('select-level')); ?>">Courses</a></li>
              <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($pageContent): ?>
                <li class="facts-1"><?php echo e(strtoupper($pageContent->page_name)); ?></li>
              <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumb -->
  <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($pageContent): ?>
    <!-- === Hero Banner End ===-->
    <section class="bg-light new-home-box">
      <div class="container">
        <div class="graduate_bx">
          <div class="show-more-box-country">

            <div class="text show-more-height">
              <div class="author">
                <div class="new-uers">
                  <div class="img-div">
                    <img src="<?php echo e(userIcon($pageContent->author->profile_picture ?? null)); ?>"
                      alt="<?php echo e($pageContent->author->name ?? 'Author'); ?>"><i class="fa fa-check-circle"></i>
                  </div>
                </div>
                <div class="cont-div">
                  <a
                    href="<?php echo e($pageContent->author_id != null ? url('author/' . $pageContent->author->id . '-' . $pageContent->author->slug) : '#'); ?>"><?php echo e($pageContent->author->name ?? 'Author'); ?>

                  </a><span> Updated on - <?php echo e(getFormattedDate($pageContent->updated_at, 'M d, Y')); ?></span>
                </div>
              </div>
              <div class="study-bx mb-2">
                <h3>Study in <?php echo e($pageContent->heading); ?></h3>
              </div>
              <?php echo $pageContent->description; ?>

            </div>
            <div class="show-more">Show More...</div>
          </div>
        </div>
      </div>
    </section>
  <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

  <section class="pop-cour">
    <div class="container com-sp">
      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
        <div class="home-top-cour">
          <div class="row">
            <div class="col-12 col-sm-12 col-md-3 text-center mb-3">
              <img data-src="<?php echo e(storage_url($row->thumbnail_path)); ?>" alt="<?php echo e($row->name); ?>"
                class="img-responsive initial loaded">
            </div>
            <div class="col-12 col-sm-12 col-md-9 mb-3 ">
              <div class="home-top-cour-desc">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($row->contents->count() > 0): ?>
                  <a href="<?php echo e(route('category.detail', ['slug' => $row->slug])); ?>">
                    <h3><?php echo e($row->name); ?></h3>
                  </a>
                <?php else: ?>
                  <h3><?php echo e($row->name); ?></h3>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                <p><?php echo e($row->shortnote); ?></p>
                <div class="event-head-sub">
                  <ul>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $row->specializations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $spc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                      <li>
                        <a href="javascript:void()"
                          onclick="goToCourses('<?php echo e($level); ?>','<?php echo e($row->id); ?>','<?php echo e($spc->slug); ?>')"><?php echo $spc->name; ?></a>
                      </li>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                  </ul>
                </div>
              </div>

            </div>
          </div>
        </div>
      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
    </div>
  </section>
  <script>
    $(document).ready(function() {
      // Wrap the table in a div with class 'table-responsive'
      $('table').before('<div class="table-responsive"></div>');

      // Move the table inside the newly created div
      $('table').prev('.table-responsive').append($('table'));
    });

    function goToCourses(CFilterLevel, CFilterCategory, CFilterSpecialization) {
      //alert(CFilterLevel + ' , ' + CFilterSpecialization);
      $.ajax({
        url: "<?php echo e(route('cl.apply.custom.filter')); ?>",
        method: "GET",
        data: {
          CFilterLevel: CFilterLevel,
          CFilterCategory: CFilterCategory,
          CFilterSpecialization: CFilterSpecialization
        },
        success: function(data) {
          window.open("<?php echo e(url('/')); ?>/" + CFilterSpecialization + "-courses", '_blank');
        }
      });
    }
  </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\reactwithlaravel.educationmalaysia.in\resources\views\front\courses.blade.php ENDPATH**/ ?>