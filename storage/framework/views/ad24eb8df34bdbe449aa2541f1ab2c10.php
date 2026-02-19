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
              <h4 class="card-title"><?php echo e($title); ?> Record</h4>
            </div>
            <div class="card-body">
              <form id="<?php echo e($ft == 'add' ? 'dataForm' : 'editForm'); ?>" <?php echo e($ft == 'edit' ? 'action=' . $url : ''); ?>

                class="needs-validation" method="post" enctype="multipart/form-data" novalidate>
                <?php echo csrf_field(); ?>
                <div class="row">
                  <div class="col-md-3">
                    <div class="mb-3">
                      <label class="form-label" for="title">Enter Title</label>
                      <input type="text" class="form-control" id="title" name="title"
                        <?php echo e($ft == 'edit' ? '' : 'requir'); ?>>
                      <span class="text-danger">
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                          <?php echo e($message); ?>

                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                      </span>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="mb-3">
                      <label class="form-label" for="file">Upload Image</label>
                      <input type="file" class="form-control" id="file" name="file"
                        <?php echo e($ft == 'edit' ? '' : 'requir'); ?>>
                      <span class="text-danger">
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['file'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                          <?php echo e($message); ?>

                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                      </span>
                      <span id="audExtError" class="text-danger"></span>
                    </div>
                  </div>
                </div>
                <button class="btn btn-primary" type="submit">Submit</button>
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
      //alert(page+university_id);
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

    function copyFunc(id) {
      //alert(id);
      var copyText = document.getElementById("url" + id);
      copyText.select();
      copyText.setSelectionRange(0, 99999);
      document.execCommand("copy");

      var tooltip = document.getElementById("myTooltip");
      tooltip.innerHTML = "Copied: " + copyText.value;
    }
  </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\reactwithlaravel.educationmalaysia.in\resources\views\admin\upload-files.blade.php ENDPATH**/ ?>