<?php
  $hva = ['Yes' => '1', 'No' => '0'];
?>

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
            <h4 class="mb-sm-0 font-size-18"><?php echo e($page_title); ?> <span
                class="text-danger">(<?php echo e($jobpage->page_name); ?>)</span>
            </h4>
            <div class="page-title-right">
              <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="<?php echo e(url('/admin/')); ?>"><i class="mdi mdi-home-outline"></i></a></li>
                <li class="breadcrumb-item"><a href="<?php echo e(url('/admin/job-pages/')); ?>">Job Pages</a></li>
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
              <div class="card-body <?php echo e($ft == 'edit' ? '' : 'hide-thi'); ?>" id="tblCDiv">
                <form id="<?php echo e($ft == 'add' ? 'dataForm' : 'editForm'); ?>" action="<?php echo e($ft == 'edit' ? $url : '#'); ?>"
                  class="needs-validation" method="post" enctype="multipart/form-data" novalidate>
                  <?php echo csrf_field(); ?>
                  <input type="hidden" name="page_id" id="page_id" value="<?php echo e($jobpage->id); ?>" />
                  <div class="row">
                    <div class="col-md-4 col-sm-12 mb-3">
                      <?php if (isset($component)) { $__componentOriginal767b2fe2f313e877004be11b5e91bb94 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal767b2fe2f313e877004be11b5e91bb94 = $attributes; } ?>
<?php $component = App\View\Components\InputField::resolve(['type' => 'text','label' => 'Tab Name','name' => 'tab_name','id' => 'tab_name','ft' => $ft,'sd' => $sd] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                      <button class="btn btn-sm btn-primary setBtn" type="submit">Submit</button>
                    </div>
                  </div>
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
          'X-CSRF-TOKEN': $('meta[name="csrf-token" ]').attr('content')
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
                  getTabs();
                } else {
                  var h = 'Failed';
                  var msg = data.failed;
                  var type = 'danger';
                }
                $('#dataForm')[0].reset();
                CKEDITOR.instances.description.setData('');
                CKEDITOR.instances.description2.setData('');
              } else {
                //alert(data.error);
                printErrorMsg(data.error);
                var h = 'Failed';
                var msg = 'Some error occured.';
                var type = 'danger';
              }
              showToastr(h, msg, type);
            }
          });
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
        var page_id = '<?php echo e($jobpage->id); ?>';
        //alert(page+page_id);
        return new Promise(function(resolve, reject) {
          $.ajax({
            url: "<?php echo e(aurl($page_route . '/get-data')); ?>",
            method: "GET",
            data: {
              page: page,
              page_id: page_id,
            },
            success: function(data) {
              $("#trdata").html(data);
            }
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
                getTabs();
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

      function changeStatus(id, col, val) {
        //alert(id);
        var tbl = 'job_page_tabs';
        $.ajax({
          url: "<?php echo e(url('common/update-field')); ?>",
          method: "GET",
          data: {
            id: id,
            tbl: tbl,
            col: col,
            val: val
          },
          success: function(data) {
            if (data == '1') {
              //alert('status changed of ' + id + ' to ' + val);
              if (val == '1') {
                $('#a' + col + id).toggle();
                $('#i' + col + id).toggle();
              }
              if (val == '0') {
                $('#a' + col + id).toggle();
                $('#i' + col + id).toggle();
              }
            }
          }
        });
      }

      $(function() {
        var $description = CKEDITOR.replace('description');
        $description.on('change', function() {
          $description.updateElement();
        });

        var $description2 = ClassicEditor.create(document.querySelector('#description2'));
        $description2.on('change', function() {
          $description2.updateElement();
        });
      });

      function getTabs() {
        var page_id = '<?php echo e($jobpage->id); ?>';
        //alert(page_id);
        return new Promise(function(resolve, reject) {
          setTimeout(() => {
            $.ajax({
              url: "<?php echo e(aurl($page_route . '/get-tabs')); ?>",
              method: "GET",
              data: {
                page_id: page_id,
              },
              success: function(data) {
                //alert(data);
                $("#parent_id").html(data);
              }
            }).fail(err => {
              // $("#migrateBtn").attr('class','btn btn-danger');
              // $("#migrateBtn").text('Migration Failed');
            });
          });
        });
      }

      $(document).ready(function() {
        $(document).on('keypress', '.position-update', function(event) {
          if (event.keyCode === 13) { // Check if the pressed key is 'Enter'
            event.preventDefault();
            var newValue = $(this).val(); // Get the updated value
            var rowId = $(this).data('id'); // Get the ID of the row
            // AJAX request to update the position value
            $.ajax({
              url: "<?php echo e(url('common/update-field')); ?>", // Replace with your Laravel route
              method: 'GET',
              data: {
                id: rowId,
                val: newValue,
                col: 'position',
                tbl: 'job_page_tabs',
              },
              success: function(response) {
                getData();
              },
            });
          }
        });
      });
    </script>
  <?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\reactwithlaravel.educationmalaysia.in\resources\views\admin\job-page-tabs.blade.php ENDPATH**/ ?>