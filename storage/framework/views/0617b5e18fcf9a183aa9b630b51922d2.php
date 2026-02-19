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
        <div class="col-xl-6 col-sm-12 ">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">
                <?php echo e($title); ?> Record
              </h4>
            </div>
            <div class="card-body" id="tblCDiv">
              <!-- IMPORT FORM START -->
              <?php if (isset($component)) { $__componentOriginal65d8bfec4e7aaacac42ec6c24eace073 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal65d8bfec4e7aaacac42ec6c24eace073 = $attributes; } ?>
<?php $component = App\View\Components\ImportForm::resolve(['pageRoute' => $page_route,'fileName' => 'course-specialization-level-template'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
              <!-- IMPORT FORM END -->
            </div>
          </div>
          <!-- end card -->
        </div>
        <div class="col-xl-6 col-sm-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Bulk Update</h4>
            </div>
            <div class="card-body" id="tblCDiv">
              <form method="post" action="<?php echo e(url('admin/' . $page_route . '/bulk-update-import')); ?>" id="import_csv"
                enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="row">
                  <div class="form-group col-md-6 col-sm-12 mb-3">
                    <label>Select Excel File</label>
                    <input type="file" name="file" id="file" required class="form-control mb-2 mr-sm-2" />
                  </div>
                  <div class="form-group col-md-4 col-sm-12 mb-3">
                    <label>&nbsp;&nbsp;</label>
                    <button style="margin-top:28px" type="submit" name="import_csv" class="btn btn-sm btn-info"
                      id="import_csv_btn">Import</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <form class="needs-validation" method="get" enctype="multipart/form-data" novalidate>
                <div class="row">
                  <div class="col-md-5 col-sm-12 mb-3">
                    <div class="form-group">
                      <label for="">Search By Specialization Name, Specialization Id or Level</label>
                      <input type="text" name="keyword" class="form-control"
                        value="<?php echo e(isset($_GET['keyword']) ? $_GET['keyword'] : ''); ?>"
                        placeholder="Search By Specialization Name, Specialization Id or Level">
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-12 mb-3">
                    <button class="btn btn-sm btn-primary setBtn" type="submit">Search</button>
                    <a href="<?php echo e(aurl($page_route)); ?>" class="btn btn-sm btn-danger setBtn"><i class="ti-trash"></i>
                      Clear</a>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">
                <?php echo e($page_title); ?> List
                <span style="float:right;">
                  <a href="<?php echo e(aurl($page_route . '/export/')); ?>" class="btn btn-xs btn-success">Export</a>
                </span>
              </h4>
            </div>
            <div class="card-body">
              <table id="datatabl" class="table table-bordered dt-responsive nowrap w-100">
                <thead>
                  <tr>
                    <th>Sr. No.</th>
                    <th>Specialization</th>
                    <th>Level</th>
                    <th>Duration</th>
                    <th>Tuition Fees</th>
                    <th>Intake</th>
                    <th>Accreditation</th>
                    
                  </tr>
                </thead>
                <tbody>
                  <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                    <tr id="row<?php echo e($row->id); ?>">
                      <td><?php echo e($i); ?></td>
                      <td><?php echo e($row->specialization->name); ?></td>
                      <td><?php echo e($row->level); ?></td>
                      <td><?php echo e($row->duration); ?></td>
                      <td><?php echo e($row->tuition_fees); ?></td>
                      <td><?php echo e($row->intake); ?></td>
                      <td><?php echo e($row->accreditation); ?></td>
                      
                    </tr>
                    <?php
                      $i++;
                    ?>
                  <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                </tbody>
              </table>
              <?php echo $rows->links('pagination::bootstrap-5'); ?>

            </div>
          </div>
        </div>
      </div>
      <div class="row">
      </div>
    </div>
  </div>
  <script>
    CKEDITOR.replace('description');

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

<?php echo $__env->make('admin.layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\reactwithlaravel.educationmalaysia.in\resources\views\admin\course-specialization-levels.blade.php ENDPATH**/ ?>