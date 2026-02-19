<?php $__env->startPush('title'); ?>
  <title>Add Student</title>
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<?php $__env->stopPush(); ?>
<?php $__env->startSection('main-section'); ?>
  <div class="page-content">
    <div class="container-fluid">

      <!-- start page title -->
      <div class="row">
        <div class="col-12">
          <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Add Student</h4>

            <div class="page-title-right">
              <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="<?php echo e(url('/admin/')); ?>"><i class="mdi mdi-home-outline"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Student</li>
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
      <!-- end page title -->
      <div class="row">
        <div class="col-xl-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Add Record</h4>
            </div>
            <div class="card-body">
              <form method="post" id="editInfoForm">

                <div class="alert alert-danger print-error-msg" style="display:none">
                  <ul></ul>
                </div>

                <div class="col-md-3">
                  <label for="name" class="form-label">Name:</label>
                  <input type="text" id="name" name="name" class="form-control" placeholder="Name">
                  <span id="name-err" class="text-danger errSpan"></span>
                </div>
                <div class="col-md-3">
                  <label for="email" class="form-label">Email:</label>
                  <input type="text" id="email" name="email" class="form-control" placeholder="Email">
                  <span id="email-err" class="text-danger errSpan"></span>
                </div>
                <div class="col-md-3">
                  <label for="mobile" class="form-label">Mobile:</label>
                  <input type="text" id="mobile" name="mobile" class="form-control" placeholder="Mobile">
                  <span id="mobile-err" class="text-danger errSpan"></span>
                </div>

                <div class="mb-3 text-center">
                  <button class="btn btn-success btn-submit btn-sm" type="submit">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript">
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });


    $(document).ready(function() {

      $('#editInfoForm').on('submit', function(event) {
        event.preventDefault();
        $(".errSpan").text('');
        $.ajax({
          url: "<?php echo e(aurl('leads/store-ajax/')); ?>",
          method: "POST",
          data: new FormData(this),
          contentType: false,
          cache: false,
          processData: false,
          success: function(data) {
            //alert(data);
            if ($.isEmptyObject(data.error)) {
              //alert(data.success);
              $('#editInfoForm')[0].reset();
              var h = 'Success';
              var msg = 'Record added successfully';
              var type = 'success';
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
      // $(".print-error-msg").find("ul").html('');
      // $(".print-error-msg").css('display','block');
      // $.each( msg, function( key, value ) {
      //   $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
      // });
      $.each(msg, function(key, value) {
        $("#" + key + "-err").text(value);
      });
    }
  </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\reactwithlaravel.educationmalaysia.in\resources\views\admin\add-leads2.blade.php ENDPATH**/ ?>