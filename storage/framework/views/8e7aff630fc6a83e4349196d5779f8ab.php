<?php $__env->startPush('title'); ?>
  <title><?php echo e($page_title); ?></title>
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
                  <button class="btn btn-xs btn-info tglBtn hide-this">+</button>
                  <button class="btn btn-xs btn-info tglBtn">-</button>
                </span>
              </h4>
            </div>
            <div class="card-body <?php echo e($ft == 'edit' ? '' : 'hide-thi'); ?>" id="tblCDiv">
              <!-- IMPORT FORM START -->
              <?php if (isset($component)) { $__componentOriginal65d8bfec4e7aaacac42ec6c24eace073 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal65d8bfec4e7aaacac42ec6c24eace073 = $attributes; } ?>
<?php $component = App\View\Components\ImportForm::resolve(['pageRoute' => $page_route,'fileName' => 'university'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('import-form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\ImportForm::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal65d8bfec4e7aaacac42ec6c24eace073)): ?>
<?php $attributes = $__attributesOriginal65d8bfec4e7aaacac42ec6c24eace073; ?>
<?php unset($__attributesOriginal65d8bfec4e7aaacac42ec6c24eace073); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal65d8bfec4e7aaacac42ec6c24eace073)): ?>
<?php $component = $__componentOriginal65d8bfec4e7aaacac42ec6c24eace073; ?>
<?php unset($__componentOriginal65d8bfec4e7aaacac42ec6c24eace073); ?>
<?php endif; ?>
              <hr>
              <!-- IMPORT FORM END -->
              <form action="<?php echo e($url); ?>" class="needs-validation" method="post" enctype="multipart/form-data"
                novalidate>
                <?php echo csrf_field(); ?>
                <div class="row">
                  <div class="col-md-6 col-sm-12 mb-3">
                    <?php if (isset($component)) { $__componentOriginal767b2fe2f313e877004be11b5e91bb94 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal767b2fe2f313e877004be11b5e91bb94 = $attributes; } ?>
<?php $component = App\View\Components\InputField::resolve(['type' => 'text','label' => 'Name','name' => 'name','id' => 'name','ft' => $ft,'sd' => $sd,'required' => 'required'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
<?php $component = App\View\Components\InputField::resolve(['type' => 'text','label' => 'Slug','name' => 'uname','id' => 'uname','ft' => $ft,'sd' => $sd,'required' => 'required'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
<?php $component = App\View\Components\InputField::resolve(['type' => 'text','label' => 'Views','name' => 'views','id' => 'views','ft' => $ft,'sd' => $sd] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
<?php $component = App\View\Components\InputField::resolve(['type' => 'text','label' => 'City','name' => 'city','id' => 'city','ft' => $ft,'sd' => $sd] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                    <?php if (isset($component)) { $__componentOriginalc0e10029e0cead835d6a0589325d0ce1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc0e10029e0cead835d6a0589325d0ce1 = $attributes; } ?>
<?php $component = App\View\Components\DatalistField::resolve(['type' => 'text','label' => 'State','name' => 'state','id' => 'state','savev' => 'nicename','showv' => 'state_name','list' => $states,'ft' => $ft,'sd' => $sd] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('DatalistField'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\DatalistField::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc0e10029e0cead835d6a0589325d0ce1)): ?>
<?php $attributes = $__attributesOriginalc0e10029e0cead835d6a0589325d0ce1; ?>
<?php unset($__attributesOriginalc0e10029e0cead835d6a0589325d0ce1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc0e10029e0cead835d6a0589325d0ce1)): ?>
<?php $component = $__componentOriginalc0e10029e0cead835d6a0589325d0ce1; ?>
<?php unset($__componentOriginalc0e10029e0cead835d6a0589325d0ce1); ?>
<?php endif; ?>
                  </div>
                  <div class="col-md-3 col-sm-12 mb-3">
                    <?php if (isset($component)) { $__componentOriginal1756e8456e85cbbb0f86dfa3aa019f6b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1756e8456e85cbbb0f86dfa3aa019f6b = $attributes; } ?>
<?php $component = App\View\Components\SelectField::resolve(['label' => 'Institute Type','name' => 'institute_type','id' => 'institute_type','savev' => 'id','showv' => 'type','list' => $instType,'ft' => $ft,'sd' => $sd] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('select-field'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\SelectField::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1756e8456e85cbbb0f86dfa3aa019f6b)): ?>
<?php $attributes = $__attributesOriginal1756e8456e85cbbb0f86dfa3aa019f6b; ?>
<?php unset($__attributesOriginal1756e8456e85cbbb0f86dfa3aa019f6b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1756e8456e85cbbb0f86dfa3aa019f6b)): ?>
<?php $component = $__componentOriginal1756e8456e85cbbb0f86dfa3aa019f6b; ?>
<?php unset($__componentOriginal1756e8456e85cbbb0f86dfa3aa019f6b); ?>
<?php endif; ?>
                  </div>
                  <div class="col-md-3 col-sm-12 mb-3">
                    <?php if (isset($component)) { $__componentOriginalcbb0a66e887ce3d929a9a9ea38f0e120 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcbb0a66e887ce3d929a9a9ea38f0e120 = $attributes; } ?>
<?php $component = App\View\Components\NumberInput::resolve(['type' => 'number','label' => 'SETARA Rating','name' => 'rating','id' => 'rating','ft' => $ft,'sd' => $sd,'max' => '5','min' => '1','step' => '.1'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('number-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\NumberInput::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalcbb0a66e887ce3d929a9a9ea38f0e120)): ?>
<?php $attributes = $__attributesOriginalcbb0a66e887ce3d929a9a9ea38f0e120; ?>
<?php unset($__attributesOriginalcbb0a66e887ce3d929a9a9ea38f0e120); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcbb0a66e887ce3d929a9a9ea38f0e120)): ?>
<?php $component = $__componentOriginalcbb0a66e887ce3d929a9a9ea38f0e120; ?>
<?php unset($__componentOriginalcbb0a66e887ce3d929a9a9ea38f0e120); ?>
<?php endif; ?>
                  </div>
                  
                  <div class="col-md-3 col-sm-12 mb-3">
                    <?php if (isset($component)) { $__componentOriginal767b2fe2f313e877004be11b5e91bb94 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal767b2fe2f313e877004be11b5e91bb94 = $attributes; } ?>
<?php $component = App\View\Components\InputField::resolve(['type' => 'text','label' => 'QS Wrold Ranking','name' => 'qs_rank','id' => 'qs_rank','ft' => $ft,'sd' => $sd] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
<?php $component = App\View\Components\InputField::resolve(['type' => 'text','label' => 'QS Asia Ranking','name' => 'qs_asia_rank','id' => 'qs_asia_rank','ft' => $ft,'sd' => $sd] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
<?php $component = App\View\Components\InputField::resolve(['type' => 'text','label' => 'The Times','name' => 'times_rank','id' => 'times_rank','ft' => $ft,'sd' => $sd] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                    <?php if (isset($component)) { $__componentOriginal1756e8456e85cbbb0f86dfa3aa019f6b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1756e8456e85cbbb0f86dfa3aa019f6b = $attributes; } ?>
<?php $component = App\View\Components\SelectField::resolve(['label' => 'Author','name' => 'author_id','id' => 'author_id','savev' => 'id','showv' => 'name','list' => $authors,'ft' => $ft,'sd' => $sd] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('select-field'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\SelectField::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1756e8456e85cbbb0f86dfa3aa019f6b)): ?>
<?php $attributes = $__attributesOriginal1756e8456e85cbbb0f86dfa3aa019f6b; ?>
<?php unset($__attributesOriginal1756e8456e85cbbb0f86dfa3aa019f6b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1756e8456e85cbbb0f86dfa3aa019f6b)): ?>
<?php $component = $__componentOriginal1756e8456e85cbbb0f86dfa3aa019f6b; ?>
<?php unset($__componentOriginal1756e8456e85cbbb0f86dfa3aa019f6b); ?>
<?php endif; ?>
                  </div>
                  <div class="col-md-3 col-sm-12 mb-3">
                    <?php if (isset($component)) { $__componentOriginal767b2fe2f313e877004be11b5e91bb94 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal767b2fe2f313e877004be11b5e91bb94 = $attributes; } ?>
<?php $component = App\View\Components\InputField::resolve(['type' => 'file','label' => 'Logo','name' => 'logo','id' => 'logo','ft' => $ft,'sd' => $sd] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
<?php $component = App\View\Components\InputField::resolve(['type' => 'file','label' => 'Banner','name' => 'banner','id' => 'banner','ft' => $ft,'sd' => $sd] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
<?php $component = App\View\Components\InputField::resolve(['type' => 'text','label' => 'Latitude Longitude','name' => 'latitude_longitude','id' => 'latitude_longitude','ft' => $ft,'sd' => $sd] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
<?php $component = App\View\Components\InputField::resolve(['type' => 'number','label' => 'Local Students','name' => 'local_students','id' => 'local_students','ft' => $ft,'sd' => $sd] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
<?php $component = App\View\Components\InputField::resolve(['type' => 'number','label' => 'International Students','name' => 'international_students','id' => 'international_students','ft' => $ft,'sd' => $sd] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
<?php $component = App\View\Components\InputField::resolve(['type' => 'number','label' => 'Contact Number 1','name' => 'contact_number1','id' => 'contact_number1','ft' => $ft,'sd' => $sd] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
<?php $component = App\View\Components\InputField::resolve(['type' => 'number','label' => 'Contact Number 2','name' => 'contact_number2','id' => 'contact_number2','ft' => $ft,'sd' => $sd] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                  <div class="col-md-4 col-sm-12 mb-3">
                    <?php if (isset($component)) { $__componentOriginal767b2fe2f313e877004be11b5e91bb94 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal767b2fe2f313e877004be11b5e91bb94 = $attributes; } ?>
<?php $component = App\View\Components\InputField::resolve(['type' => 'email','label' => 'Contact Email','name' => 'email','id' => 'email','ft' => $ft,'sd' => $sd] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                  <div class="col-md-4 col-sm-12 mb-3">
                    <?php if (isset($component)) { $__componentOriginal767b2fe2f313e877004be11b5e91bb94 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal767b2fe2f313e877004be11b5e91bb94 = $attributes; } ?>
<?php $component = App\View\Components\InputField::resolve(['type' => 'email','label' => 'Email CC','name' => 'cc','id' => 'cc','ft' => $ft,'sd' => $sd] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                  <div class="col-md-2 col-sm-12 mb-3">
                    <?php if (isset($component)) { $__componentOriginal767b2fe2f313e877004be11b5e91bb94 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal767b2fe2f313e877004be11b5e91bb94 = $attributes; } ?>
<?php $component = App\View\Components\InputField::resolve(['type' => 'number','label' => 'Established Year','name' => 'established_year','id' => 'established_year','ft' => $ft,'sd' => $sd] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                  <div class="col-md-2 col-sm-12 mb-3 set-checkbox">
                    <?php if (isset($component)) { $__componentOriginal29f3e5beab852ff66871181e8857b9b3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal29f3e5beab852ff66871181e8857b9b3 = $attributes; } ?>
<?php $component = App\View\Components\Checkbox::resolve(['label' => 'Featured','name' => 'featured','id' => 'featured','ft' => $ft,'sd' => $sd] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Checkbox::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal29f3e5beab852ff66871181e8857b9b3)): ?>
<?php $attributes = $__attributesOriginal29f3e5beab852ff66871181e8857b9b3; ?>
<?php unset($__attributesOriginal29f3e5beab852ff66871181e8857b9b3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal29f3e5beab852ff66871181e8857b9b3)): ?>
<?php $component = $__componentOriginal29f3e5beab852ff66871181e8857b9b3; ?>
<?php unset($__componentOriginal29f3e5beab852ff66871181e8857b9b3); ?>
<?php endif; ?>
                  </div>
                  <div class="col-md-2 col-sm-12 mb-3 set-checkbox">
                    <?php if (isset($component)) { $__componentOriginal29f3e5beab852ff66871181e8857b9b3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal29f3e5beab852ff66871181e8857b9b3 = $attributes; } ?>
<?php $component = App\View\Components\Checkbox::resolve(['label' => 'Is Local','name' => 'is_local','id' => 'is_local','ft' => $ft,'sd' => $sd] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Checkbox::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal29f3e5beab852ff66871181e8857b9b3)): ?>
<?php $attributes = $__attributesOriginal29f3e5beab852ff66871181e8857b9b3; ?>
<?php unset($__attributesOriginal29f3e5beab852ff66871181e8857b9b3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal29f3e5beab852ff66871181e8857b9b3)): ?>
<?php $component = $__componentOriginal29f3e5beab852ff66871181e8857b9b3; ?>
<?php unset($__componentOriginal29f3e5beab852ff66871181e8857b9b3); ?>
<?php endif; ?>
                  </div>
                  <div class="col-md-2 col-sm-12 mb-3 set-checkbox">
                    <?php if (isset($component)) { $__componentOriginal29f3e5beab852ff66871181e8857b9b3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal29f3e5beab852ff66871181e8857b9b3 = $attributes; } ?>
<?php $component = App\View\Components\Checkbox::resolve(['label' => 'Is International','name' => 'is_international','id' => 'is_international','ft' => $ft,'sd' => $sd] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Checkbox::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal29f3e5beab852ff66871181e8857b9b3)): ?>
<?php $attributes = $__attributesOriginal29f3e5beab852ff66871181e8857b9b3; ?>
<?php unset($__attributesOriginal29f3e5beab852ff66871181e8857b9b3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal29f3e5beab852ff66871181e8857b9b3)): ?>
<?php $component = $__componentOriginal29f3e5beab852ff66871181e8857b9b3; ?>
<?php unset($__componentOriginal29f3e5beab852ff66871181e8857b9b3); ?>
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
                  <div class="col-md-12 col-sm-12 mb-3">
                    <?php if (isset($component)) { $__componentOriginal767b2fe2f313e877004be11b5e91bb94 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal767b2fe2f313e877004be11b5e91bb94 = $attributes; } ?>
<?php $component = App\View\Components\InputField::resolve(['type' => 'text','label' => 'Approved By (Separated by |)','name' => 'approved_by','id' => 'approved_by','ft' => $ft,'sd' => $sd] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                    <?php if (isset($component)) { $__componentOriginald6f594a9b5edb891e4d76b5c13a95b5d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald6f594a9b5edb891e4d76b5c13a95b5d = $attributes; } ?>
<?php $component = App\View\Components\TextareaField::resolve(['label' => 'Accredited by (Separated by |)','name' => 'accredited_by','id' => 'accredited_by','ft' => $ft,'sd' => $sd] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                  <div class="col-md-6 col-sm-12 mb-3">
                    <?php if (isset($component)) { $__componentOriginald6f594a9b5edb891e4d76b5c13a95b5d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald6f594a9b5edb891e4d76b5c13a95b5d = $attributes; } ?>
<?php $component = App\View\Components\TextareaField::resolve(['label' => 'Hostel Facility (Separated by |)','name' => 'hostel_facility','id' => 'hostel_facility','ft' => $ft,'sd' => $sd] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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

                <!--  SEO INPUT FIELD COMPONENT START -->
                <?php if (isset($component)) { $__componentOriginalfa3f68dcbfb0452b249581e3170d01a2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfa3f68dcbfb0452b249581e3170d01a2 = $attributes; } ?>
<?php $component = App\View\Components\SeoField::resolve(['ft' => $ft,'sd' => $sd] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('seo-field'); ?>
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
                <!--  SEO INPUT FIELD COMPONENT END  -->

                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($ft == 'add'): ?>
                  <button type="reset" class="btn btn-sm btn-warning  mr-1"><i class="ti-trash"></i> Reset</button>
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
    </div>
  </div>

  <script>
    ClassicEditor
      .create(document.querySelector('#description'))
      .catch(error => {
        console.error(error);
      });
  </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\reactwithlaravel.educationmalaysia.in\resources\views\admin\add-university.blade.php ENDPATH**/ ?>