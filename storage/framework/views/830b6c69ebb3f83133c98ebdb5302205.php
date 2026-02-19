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
              <?php echo e($page_title); ?> <span class="text-danger">(<?php echo e($university->name); ?>)</span>
            </h4>
            <div class="page-title-right">
              <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="<?php echo e(url('/admin/')); ?>"><i class="mdi mdi-home-outline"></i></a></li>
                <li class="breadcrumb-item"><a href="<?php echo e(url('/admin/university/')); ?>">University</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo e($page_title); ?></li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <?php echo $__env->make('admin.university-profile-header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
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
                  <input type="hidden" name="university_id" id="university_id" value="<?php echo e($university->id); ?>">
                  <div class="col-md-4 col-sm-12 mb-3">
                    <?php if (isset($component)) { $__componentOriginal767b2fe2f313e877004be11b5e91bb94 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal767b2fe2f313e877004be11b5e91bb94 = $attributes; } ?>
<?php $component = App\View\Components\InputField::resolve(['type' => 'text','label' => 'Scholarship Name','name' => 'scholarship_name','id' => 'scholarship_name','ft' => $ft,'sd' => $sd,'required' => 'required'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
<?php $component = App\View\Components\InputField::resolve(['type' => 'text','label' => 'URL','name' => 'scholarship_slug','id' => 'scholarship_slug','ft' => $ft,'sd' => $sd,'required' => 'required'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                    <?php if (isset($component)) { $__componentOriginal1756e8456e85cbbb0f86dfa3aa019f6b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1756e8456e85cbbb0f86dfa3aa019f6b = $attributes; } ?>
<?php $component = App\View\Components\SelectField::resolve(['label' => 'Select Level','name' => 'level_id','id' => 'level_id','ft' => $ft,'sd' => $sd,'list' => $levels,'showv' => 'level','savev' => 'id','required' => 'required'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                    <div class="form-group">
                      <label>International Student Eligible</label>
                      <select name="international_student_eligible" id="international_student_eligible"
                        class="form-control" data-trigger>
                        <option value="">Select</option>
                        <option value="Yes"
                          <?php echo e(($ft == ' edit' && $sd->international_student_eligible == 'Yes') ||
                          old('international_student_eligible') == 'Yes'
                              ? 'selected'
                              : ''); ?>>
                          Yes</option>
                        <option value="No"
                          <?php echo e(($ft == 'edit' && $sd->international_student_eligible == 'No') ||
                          old('international_student_eligible') == 'No'
                              ? 'selected'
                              : ''); ?>>
                          No</option>
                      </select>
                      <span class="text-danger">
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['international_student_eligible'];
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
                  <div class="col-md-3 col-sm-12 mb-3">
                    <?php if (isset($component)) { $__componentOriginal767b2fe2f313e877004be11b5e91bb94 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal767b2fe2f313e877004be11b5e91bb94 = $attributes; } ?>
<?php $component = App\View\Components\InputField::resolve(['type' => 'number','label' => 'Amount','name' => 'amount','id' => 'amount','ft' => $ft,'sd' => $sd] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
<?php $component = App\View\Components\InputField::resolve(['type' => 'number','label' => 'Number of Scholarship','name' => 'number_of_scholarship','id' => 'number_of_scholarship','ft' => $ft,'sd' => $sd] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                </div>
                <hr>
                <!--  SEO INPUT FIELD COMPONENT  -->
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
                <!--  SEO INPUT FIELD COMPONENT END  -->
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($ft == 'add'): ?>
                  <button type="reset" class="btn btn-sm btn-warning  mr-1"><i class="ti-trash"></i> Reset</button>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($ft == 'edit'): ?>
                  <a href="<?php echo e(aurl($page_route . '/' . $university->id)); ?>" class="btn btn-sm btn-info "><i
                      class="ti-trash"></i>
                    Cancel</a>
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
    function clearFilter() {
      var h = 'Success';
      var msg = 'Filter cleared';
      var type = 'success';
      showToastr(h, msg, type);
      getData();
    }
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

      $('#filterForm').on('submit', function(event) {
        event.preventDefault();
        $("#filterSubmitBtn").text('Filtering...');
        setTimeout(() => {
          $(".errSpan").text('');
          var university_id = $("#f_hospital_id").val();
          //alert(university_id);
          getData('1', university_id);
          $("#filterSubmitBtn").text('Submit');
        }, 1000);
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

    getData();

    function getData(page) {
      if (page) {
        page = page;
      } else {
        var page = '<?php echo e($page_no); ?>';
      }
      var university_id = '<?php echo e($university->id); ?>';
      //alert(page+university_id);
      return new Promise(function(resolve, reject) {
        //$("#migrateBtn").text('Migrating...');
        setTimeout(() => {
          $.ajax({
            url: "<?php echo e(aurl($page_route . '/get-data')); ?>",
            method: "GET",
            data: {
              page: page,
              university_id: university_id,
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

    function changeStatus(id, val) {
      //alert(id);
      var tbl = 'hospitals';
      $.ajax({
        url: "<?php echo e(url('common/change-status')); ?>",
        method: "GET",
        data: {
          id: id,
          tbl: tbl,
          val: val
        },
        success: function(data) {
          if (data == '1') {
            //alert('status changed of ' + id + ' to ' + val);
            if (val == '1') {
              $('#asts' + id).toggle();
              $('#ists' + id).toggle();
            }
            if (val == '0') {
              $('#asts' + id).toggle();
              $('#ists' + id).toggle();
            }
          }
        }
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

    $(document).ready(function() {
      $(document).on('change', '#scholarship_name', function(event) {
        event.preventDefault();
        var scholarship_name = $('#scholarship_name').val();
        $.ajax({
          url: "<?php echo e(url('common/slugify')); ?>",
          method: "GET",
          data: {
            text: scholarship_name
          },
          success: function(data) {
            $('#scholarship_slug').val(data);
          }
        });
      });
    });
  </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\reactwithlaravel.educationmalaysia.in\resources\views\admin\university-scholarships.blade.php ENDPATH**/ ?>