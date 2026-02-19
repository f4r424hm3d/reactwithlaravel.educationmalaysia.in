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
            <h4 class="mb-sm-0 font-size-18">
              <?php echo e($page_title); ?>

            </h4>
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
            <div class="card-body <?php echo e($ft == 'edit' ? '' : 'hide-thi'); ?>" id="tblCDiv">
              <form id="<?php echo e($ft == 'add' ? 'dataForm' : 'editForm'); ?>" <?php echo e($ft == 'edit' ? 'action=' . $url : ''); ?>

                class="needs-validation" method="post" enctype="multipart/form-data" novalidate>
                <?php echo csrf_field(); ?>
                <div class="row">
                  <div class="col-md-3 col-sm-12 mb-3">
                    <?php if (isset($component)) { $__componentOriginala008283e8f20dea3344bce3b9046bb19 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala008283e8f20dea3344bce3b9046bb19 = $attributes; } ?>
<?php $component = App\View\Components\StaticselectField::resolve(['label' => 'Select Page','name' => 'page','id' => 'page','ft' => $ft,'sd' => $sd,'list' => $pages,'savev' => 'id','showv' => 'name'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('Staticselect-field'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\StaticselectField::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala008283e8f20dea3344bce3b9046bb19)): ?>
<?php $attributes = $__attributesOriginala008283e8f20dea3344bce3b9046bb19; ?>
<?php unset($__attributesOriginala008283e8f20dea3344bce3b9046bb19); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala008283e8f20dea3344bce3b9046bb19)): ?>
<?php $component = $__componentOriginala008283e8f20dea3344bce3b9046bb19; ?>
<?php unset($__componentOriginala008283e8f20dea3344bce3b9046bb19); ?>
<?php endif; ?>
                  </div>
                  <div class="col-md-3 col-sm-12 mb-3">
                    <?php if (isset($component)) { $__componentOriginal767b2fe2f313e877004be11b5e91bb94 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal767b2fe2f313e877004be11b5e91bb94 = $attributes; } ?>
<?php $component = App\View\Components\InputField::resolve(['type' => 'text','label' => 'Name','name' => 'name','id' => 'name','ft' => $ft,'sd' => $sd] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
<?php $component = App\View\Components\InputField::resolve(['type' => 'text','label' => 'Country','name' => 'country','id' => 'country','ft' => $ft,'sd' => $sd] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                  <div class="col-md-3 col-sm-12 mb-3 hide-this">
                    <?php if (isset($component)) { $__componentOriginal767b2fe2f313e877004be11b5e91bb94 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal767b2fe2f313e877004be11b5e91bb94 = $attributes; } ?>
<?php $component = App\View\Components\InputField::resolve(['type' => 'email','label' => 'Email','name' => 'email','id' => 'email','ft' => $ft,'sd' => $sd] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                  <div class="col-md-3 col-sm-12 mb-3 hide-this">
                    <?php if (isset($component)) { $__componentOriginal767b2fe2f313e877004be11b5e91bb94 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal767b2fe2f313e877004be11b5e91bb94 = $attributes; } ?>
<?php $component = App\View\Components\InputField::resolve(['type' => 'text','label' => 'Mobile','name' => 'mobile','id' => 'mobile','ft' => $ft,'sd' => $sd] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
<?php $component = App\View\Components\TextareaField::resolve(['label' => 'Review','name' => 'review','id' => 'review','ft' => $ft,'sd' => $sd] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
            <div class="card-header">
              <h4 class="card-title"><?php echo e($page_title); ?> List </h4>
            </div>
            <div class="card-body" id="trdata">

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });


    $(document).ready(function() {
      $(document).on('click', '.pagination a', function(event) {
        event.preventDefault();
        var page = $(this).attr('href').split('page=')[1];
        getData(page);
      });

      $('#dataForm').on('submit', function(event) {
        event.preventDefault();
        $(".errSpan").text('');
        $.ajax({
          url: "<?php echo e(aurl($page_route . '/store-ajax/')); ?>",
          method: "POST",
          data: new FormData(this),
          contentType: false,
          cache: false,
          processData: false,
          success: function(data) {
            //alert(data);
            if ($.isEmptyObject(data.error)) {
              //alert(data.success);
              if (data.hasOwnProperty('success')) {
                var h = 'Success';
                var msg = data.success;
                var type = 'success';
                getData();
              } else {
                var h = 'Failed';
                var msg = data.failed;
                var type = 'danger';
              }
              $('#dataForm')[0].reset();
            } else {
              //alert(data.error);
              printErrorMsg(data.error);
              var h = 'Failed';
              var msg = 'Some error occured.';
              var type = 'danger';
            }
            showToastr(h, msg, type);
          }
        })
      });

    });

    function printErrorMsg(msg) {
      $.each(msg, function(key, value) {
        $("#" + key + "-err").text(value);
      });
    }

    getData();

    function getData(page) {
      if (page) {
        page = page;
      } else {
        var page = '<?php echo e($page_no); ?>';
      }
      //alert(page+exam_id);
      return new Promise(function(resolve, reject) {
        //$("#migrateBtn").text('Migrating...');
        setTimeout(() => {
          $.ajax({
            url: "<?php echo e(aurl($page_route . '/get-data')); ?>",
            method: "GET",
            data: {
              page: page,
            },
            success: function(data) {
              $("#trdata").html(data);
            }
          }).fail(err => {
            // $("#migrateBtn").attr('class','btn btn-danger');
            // $("#migrateBtn").text('Migration Failed');
          });
        });
      });
    }

    function DeleteAjax(id) {
      //alert(id);
      var cd = confirm("Are you sure ?");
      if (cd == true) {
        $.ajax({
          url: "<?php echo e(url('admin/' . $page_route . '/delete')); ?>" + "/" + id,
          success: function(data) {
            if (data == '1') {
              getData();
              var h = 'Success';
              var msg = 'Record deleted successfully';
              var type = 'success';
              //$('#row' + id).remove();
              $('#toastMsg').text(msg);
              $('#liveToast').show();
              showToastr(h, msg, type);
            }
          }
        });
      }
    }

    $(function() {
      var $highlights = ClassicEditor.create(document.querySelector('#highlights'));
      $highlights.on('change', function() {
        $highlights.updateElement();
      });

      var $experiance = ClassicEditor.create(document.querySelector('#experiance'));
      $experiance.on('change', function() {
        $experiance.updateElement();
      });

      var $education = ClassicEditor.create(document.querySelector('#education'));
      $education.on('change', function() {
        $education.updateElement();
      });

    });
  </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\reactwithlaravel.educationmalaysia.in\resources\views\admin\testimonials.blade.php ENDPATH**/ ?>