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
                  <button class="btn btn-xs btn-info tglBtn">+</button>
                  <button class="btn btn-xs btn-info tglBtn hide-this">-</button>
                </span>
              </h4>
            </div>
            <div class="card-body" id="tblCDiv">

              <form action="<?php echo e($url); ?>" class="needs-validation" method="post" enctype="multipart/form-data"
                novalidate>
                <?php echo csrf_field(); ?>
                <div class="row">
                  <div class="col-md-3 col-sm-12 mb-3">
                    <?php if (isset($component)) { $__componentOriginal767b2fe2f313e877004be11b5e91bb94 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal767b2fe2f313e877004be11b5e91bb94 = $attributes; } ?>
<?php $component = App\View\Components\InputField::resolve(['type' => 'text','label' => 'Enter Level','name' => 'level','id' => 'level','ft' => $ft,'sd' => $sd] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
<?php $component = App\View\Components\InputField::resolve(['type' => 'text','label' => 'Enter Level Short Name','name' => 'short_name','id' => 'short_name','ft' => $ft,'sd' => $sd] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
<?php $component = App\View\Components\InputField::resolve(['type' => 'text','label' => 'Enter Level Seo Name','name' => 'seo_name','id' => 'seo_name','ft' => $ft,'sd' => $sd] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
<?php $component = App\View\Components\TextareaField::resolve(['label' => 'Enter Courses Description','name' => 'courses_description','id' => 'courses_description','ft' => $ft,'sd' => $sd] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('textarea-field'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\TextareaField::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'text']); ?>
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
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <table id="datatable" class="table table-bordered dt-responsive nowrap w-100">
                <thead>
                  <tr>
                    <th>Sr. No.</th>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Short Name</th>
                    <th>SEO Name</th>
                    <th>Courses Description</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $i = 1;
                  ?>
                  <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                    <tr id="row<?php echo e($row->id); ?>">
                      <td><?php echo e($i); ?></td>
                      <td><?php echo e($row->id); ?></td>
                      <td><?php echo e($row->level); ?></td>
                      <td><?php echo e($row->short_name); ?></td>
                      <td><?php echo e($row->seo_name); ?></td>
                      <td><?php if (isset($component)) { $__componentOriginalac995f9789c85d269719e6566ddaf104 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalac995f9789c85d269719e6566ddaf104 = $attributes; } ?>
<?php $component = App\View\Components\ContentViewModal::resolve(['row' => $row,'field' => 'courses_description','title' => 'Courses Description'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('content-view-modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\ContentViewModal::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalac995f9789c85d269719e6566ddaf104)): ?>
<?php $attributes = $__attributesOriginalac995f9789c85d269719e6566ddaf104; ?>
<?php unset($__attributesOriginalac995f9789c85d269719e6566ddaf104); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalac995f9789c85d269719e6566ddaf104)): ?>
<?php $component = $__componentOriginalac995f9789c85d269719e6566ddaf104; ?>
<?php unset($__componentOriginalac995f9789c85d269719e6566ddaf104); ?>
<?php endif; ?></td>
                      <td>
                        <a href="javascript:void()" onclick="DeleteAjax('<?php echo e($row->id); ?>')"
                          class="waves-effect waves-light btn btn-xs btn-outline btn-danger">
                          <i class="fa fa-trash" aria-hidden="true"></i>
                        </a>
                        <a href="<?php echo e(url('admin/' . $page_route . '/update/' . $row->id)); ?>"
                          class="waves-effect waves-light btn btn-xs btn-outline btn-info">
                          <i class="fa fa-edit" aria-hidden="true"></i>
                        </a>
                      </td>
                    </tr>
                    <?php
                      $i++;
                    ?>
                  <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    function DeleteAjax(id) {
      //alert(id);
      var cd = confirm("Are you sure ?");
      if (cd == true) {
        $.ajax({
          url: "<?php echo e(url('admin/' . $page_route . '/delete')); ?>" + "/" + id,
          success: function(data) {
            if (data == '1') {
              var h = 'Success';
              var msg = 'Record deleted successfully';
              var type = 'success';
              $('#row' + id).remove();
              $('#toastMsg').text(msg);
              $('#liveToast').show();
              showToastr(h, msg, type);
            }
          }
        });
      }
    }
  </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\reactwithlaravel.educationmalaysia.in\resources\views\admin\level.blade.php ENDPATH**/ ?>