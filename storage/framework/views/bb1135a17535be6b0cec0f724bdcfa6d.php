<?php $__env->startPush('title'); ?>
  <title><?php echo e($page_title); ?></title>
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<?php $__env->stopPush(); ?>
<?php $__env->startSection('main-section'); ?>
  <div class="page-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18"><?php echo e($page_title); ?></h4>

            <div class="page-title-right">
              <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="<?php echo e(url('/admin/')); ?>"><i class="mdi mdi-home-outline"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo e($page_title); ?></li>
              </ol>
            </div>

          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-12">
          <!-- NOTIFICATION FIELD START -->
          <?php if (isset($component)) { $__componentOriginal0c88f9f5840aabf224e26a6100d8e4ae = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0c88f9f5840aabf224e26a6100d8e4ae = $attributes; } ?>
<?php $component = App\View\Components\ResultNotificationField::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('result-notification-field'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\ResultNotificationField::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0c88f9f5840aabf224e26a6100d8e4ae)): ?>
<?php $attributes = $__attributesOriginal0c88f9f5840aabf224e26a6100d8e4ae; ?>
<?php unset($__attributesOriginal0c88f9f5840aabf224e26a6100d8e4ae); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0c88f9f5840aabf224e26a6100d8e4ae)): ?>
<?php $component = $__componentOriginal0c88f9f5840aabf224e26a6100d8e4ae; ?>
<?php unset($__componentOriginal0c88f9f5840aabf224e26a6100d8e4ae); ?>
<?php endif; ?>
          <!-- NOTIFICATION FIELD END -->
        </div>
      </div>
      <div class="row">
        <div class="col-xl-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">
                <?php echo e($title); ?> Record
                <span style="float:right;">
                  <button class="btn btn-xs btn-info tglBtn">+</button>
                  <button class="btn btn-xs btn-info tglBtn hide-this">-</button>
                </span>
              </h4>
            </div>
            <div class="card-body" id="tblCDiv">
              <form id="<?php echo e($ft == 'add' ? 'dataForm' : 'editForm'); ?>" <?php echo e($ft == 'edit' ? 'action=' . $url : ''); ?>

                class="needs-validation" method="post" enctype="multipart/form-data" novalidate>
                <?php echo csrf_field(); ?>
                <div class="row">
                  <div class="col-md-6 col-sm-12 mb-3">
                    <?php if (isset($component)) { $__componentOriginal767b2fe2f313e877004be11b5e91bb94 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal767b2fe2f313e877004be11b5e91bb94 = $attributes; } ?>
<?php $component = App\View\Components\InputField::resolve(['type' => 'text','label' => 'Enter Title','name' => 'title','id' => 'title','ft' => $ft,'sd' => $sd] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input-field'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\InputField::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal767b2fe2f313e877004be11b5e91bb94)): ?>
<?php $attributes = $__attributesOriginal767b2fe2f313e877004be11b5e91bb94; ?>
<?php unset($__attributesOriginal767b2fe2f313e877004be11b5e91bb94); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal767b2fe2f313e877004be11b5e91bb94)): ?>
<?php $component = $__componentOriginal767b2fe2f313e877004be11b5e91bb94; ?>
<?php unset($__componentOriginal767b2fe2f313e877004be11b5e91bb94); ?>
<?php endif; ?>
                  </div>
                  <div class="col-md-6 col-sm-12 mb-3">
                    <?php if (isset($component)) { $__componentOriginal767b2fe2f313e877004be11b5e91bb94 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal767b2fe2f313e877004be11b5e91bb94 = $attributes; } ?>
<?php $component = App\View\Components\InputField::resolve(['type' => 'text','label' => 'Enter Slug','name' => 'slug','id' => 'slug','ft' => $ft,'sd' => $sd] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input-field'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\InputField::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal767b2fe2f313e877004be11b5e91bb94)): ?>
<?php $attributes = $__attributesOriginal767b2fe2f313e877004be11b5e91bb94; ?>
<?php unset($__attributesOriginal767b2fe2f313e877004be11b5e91bb94); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal767b2fe2f313e877004be11b5e91bb94)): ?>
<?php $component = $__componentOriginal767b2fe2f313e877004be11b5e91bb94; ?>
<?php unset($__componentOriginal767b2fe2f313e877004be11b5e91bb94); ?>
<?php endif; ?>
                  </div>
                  <div class="col-md-3 col-sm-12 mb-3">
                    <?php if (isset($component)) { $__componentOriginal767b2fe2f313e877004be11b5e91bb94 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal767b2fe2f313e877004be11b5e91bb94 = $attributes; } ?>
<?php $component = App\View\Components\InputField::resolve(['type' => 'text','label' => 'Enter Active Status','name' => 'active_status','id' => 'active_status','ft' => $ft,'sd' => $sd] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input-field'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\InputField::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal767b2fe2f313e877004be11b5e91bb94)): ?>
<?php $attributes = $__attributesOriginal767b2fe2f313e877004be11b5e91bb94; ?>
<?php unset($__attributesOriginal767b2fe2f313e877004be11b5e91bb94); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal767b2fe2f313e877004be11b5e91bb94)): ?>
<?php $component = $__componentOriginal767b2fe2f313e877004be11b5e91bb94; ?>
<?php unset($__componentOriginal767b2fe2f313e877004be11b5e91bb94); ?>
<?php endif; ?>
                  </div>
                  <div class="col-md-3 col-sm-12 mb-3">
                    <?php if (isset($component)) { $__componentOriginal767b2fe2f313e877004be11b5e91bb94 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal767b2fe2f313e877004be11b5e91bb94 = $attributes; } ?>
<?php $component = App\View\Components\InputField::resolve(['type' => 'text','label' => 'Enter Type','name' => 'type','id' => 'type','ft' => $ft,'sd' => $sd] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input-field'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\InputField::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal767b2fe2f313e877004be11b5e91bb94)): ?>
<?php $attributes = $__attributesOriginal767b2fe2f313e877004be11b5e91bb94; ?>
<?php unset($__attributesOriginal767b2fe2f313e877004be11b5e91bb94); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal767b2fe2f313e877004be11b5e91bb94)): ?>
<?php $component = $__componentOriginal767b2fe2f313e877004be11b5e91bb94; ?>
<?php unset($__componentOriginal767b2fe2f313e877004be11b5e91bb94); ?>
<?php endif; ?>
                  </div>
                  <div class="col-md-3 col-sm-12 mb-3">
                    <?php if (isset($component)) { $__componentOriginal767b2fe2f313e877004be11b5e91bb94 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal767b2fe2f313e877004be11b5e91bb94 = $attributes; } ?>
<?php $component = App\View\Components\InputField::resolve(['type' => 'file','label' => 'Upload thumbnail','name' => 'thumbnail','id' => 'thumbnail','ft' => $ft,'sd' => $sd] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input-field'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\InputField::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal767b2fe2f313e877004be11b5e91bb94)): ?>
<?php $attributes = $__attributesOriginal767b2fe2f313e877004be11b5e91bb94; ?>
<?php unset($__attributesOriginal767b2fe2f313e877004be11b5e91bb94); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal767b2fe2f313e877004be11b5e91bb94)): ?>
<?php $component = $__componentOriginal767b2fe2f313e877004be11b5e91bb94; ?>
<?php unset($__componentOriginal767b2fe2f313e877004be11b5e91bb94); ?>
<?php endif; ?>
                  </div>
                  <div class="form-group col-md-3">
                    <label class="form-label sr-onl" for="page_type">Page Type</label>
                    <select name="page_type" id="page_type" class="form-control">
                      <option value="">Select</option>
                      <option value="landing_page" <?php echo $ft == 'edit' && $sd->page_type == 'landing_page' ? 'Selected' : ''; ?>>Landing Page</option>
                      <option value="scholarship_page" <?php echo $ft == 'edit' && $sd->page_type == 'scholarship_page' ? 'Selected' : ''; ?>>Scholarship Page</option>
                    </select>
                  </div>
                  <div class="col-md-4 col-sm-12 mb-3 hide-this">
                    <?php if (isset($component)) { $__componentOriginal767b2fe2f313e877004be11b5e91bb94 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal767b2fe2f313e877004be11b5e91bb94 = $attributes; } ?>
<?php $component = App\View\Components\InputField::resolve(['type' => 'text','label' => 'Enter Landing Page Link','name' => 'landing_page_link','id' => 'landing_page_link','ft' => $ft,'sd' => $sd] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input-field'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\InputField::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal767b2fe2f313e877004be11b5e91bb94)): ?>
<?php $attributes = $__attributesOriginal767b2fe2f313e877004be11b5e91bb94; ?>
<?php unset($__attributesOriginal767b2fe2f313e877004be11b5e91bb94); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal767b2fe2f313e877004be11b5e91bb94)): ?>
<?php $component = $__componentOriginal767b2fe2f313e877004be11b5e91bb94; ?>
<?php unset($__componentOriginal767b2fe2f313e877004be11b5e91bb94); ?>
<?php endif; ?>
                  </div>
                  <div class="col-md-12 col-sm-12 mb-3">
                    <?php if (isset($component)) { $__componentOriginald6f594a9b5edb891e4d76b5c13a95b5d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald6f594a9b5edb891e4d76b5c13a95b5d = $attributes; } ?>
<?php $component = App\View\Components\TextareaField::resolve(['label' => 'Shortnote','name' => 'shortnote','id' => 'shortnote','ft' => $ft,'sd' => $sd] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('textarea-field'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\TextareaField::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald6f594a9b5edb891e4d76b5c13a95b5d)): ?>
<?php $attributes = $__attributesOriginald6f594a9b5edb891e4d76b5c13a95b5d; ?>
<?php unset($__attributesOriginald6f594a9b5edb891e4d76b5c13a95b5d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald6f594a9b5edb891e4d76b5c13a95b5d)): ?>
<?php $component = $__componentOriginald6f594a9b5edb891e4d76b5c13a95b5d; ?>
<?php unset($__componentOriginald6f594a9b5edb891e4d76b5c13a95b5d); ?>
<?php endif; ?>
                  </div>
                </div>
                <hr>
                <!--  SEO INPUT FILED COMPONENT  -->
                <?php if (isset($component)) { $__componentOriginalfa3f68dcbfb0452b249581e3170d01a2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfa3f68dcbfb0452b249581e3170d01a2 = $attributes; } ?>
<?php $component = App\View\Components\SeoField::resolve(['ft' => $ft,'sd' => $sd] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('SeoField'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\SeoField::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfa3f68dcbfb0452b249581e3170d01a2)): ?>
<?php $attributes = $__attributesOriginalfa3f68dcbfb0452b249581e3170d01a2; ?>
<?php unset($__attributesOriginalfa3f68dcbfb0452b249581e3170d01a2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfa3f68dcbfb0452b249581e3170d01a2)): ?>
<?php $component = $__componentOriginalfa3f68dcbfb0452b249581e3170d01a2; ?>
<?php unset($__componentOriginalfa3f68dcbfb0452b249581e3170d01a2); ?>
<?php endif; ?>
                <!--  SEO INPUT FILED COMPONENT END  -->
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($ft == 'add'): ?>
                  <button type="reset" class="btn btn-sm btn-warning  mr-1"><i class="ti-trash"></i>
                    Reset</button>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($ft == 'edit'): ?>
                  <a href="<?php echo e(aurl($page_route)); ?>" class="btn btn-sm btn-info "><i class="ti-trash"></i> Cancel</a>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                <button class="btn btn-sm btn-primary" type="submit">Submit</button>
              </form>
            </div>
          </div>
          <!-- end card -->
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body" id="trdata">

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    $(document).ready(function() {
      // Function to toggle visibility based on the selected option
      function toggleLandingPageField() {
        const selectedValue = $('#page_type').val();
        if (selectedValue === 'landing_page') {
          $('.hide-this').show(); // Show the field if 'landing_page' is selected
        } else {
          $('.hide-this').hide(); // Hide the field otherwise
        }
      }

      // Initial check on page load
      toggleLandingPageField();

      // Event listener for change event on page_type dropdown
      $('#page_type').on('change', function() {
        toggleLandingPageField();
      });
    });
  </script>
  <?php echo $__env->make('admin.js.common-ajax-page', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\reactwithlaravel.educationmalaysia.in\resources\views\admin\scholarships.blade.php ENDPATH**/ ?>