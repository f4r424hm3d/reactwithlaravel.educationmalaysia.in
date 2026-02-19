<?php $__env->startPush('title'); ?>
  <title>Admin Profile - Study Abroad</title>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('main-section'); ?>
  <div class="page-content">
    <div class="container-fluid">
      <!-- start page title -->
      <div class="row">
        <div class="col-12">
          <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Profile</h4>

            <div class="page-title-right">
              <ol class="breadcrumb m-0">
                <li class="breadcrumb-item">
                  <a href="javascript: void(0);">Home</a>
                </li>
                <li class="breadcrumb-item active">Profile</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <!-- end page title -->

      <div class="row">

        
        <div class="col-xl-12 col-lg-12">
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
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-sm order-2 order-sm-1">
                  <div class="d-flex align-items-start mt-3 mt-sm-0">
                    <div class="flex-shrink-0">
                      <div class="avatar-xl me-3">
                        <img src="<?php echo e(storage_url('backend/')); ?>/assets/images/users/avatar-2.jpg" alt=""
                          class="img-fluid rounded-circle d-block" />
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <div>
                        <h5 class="font-size-16 mb-1"><?php echo e($profile->name); ?></h5>
                        <p class="text-muted font-size-13">
                          <?php echo e($profile->role); ?>

                        </p>

                        <div class="d-flex flex-wrap align-items-start gap-2 gap-lg-3 text-muted font-size-13">
                          <div>
                            <i class="mdi mdi-circle-medium me-1 text-success align-middle"></i><?php echo e($profile->username); ?>

                          </div>
                          <div>
                            <i class="mdi mdi-circle-medium me-1 text-success align-middle"></i>
                            <?php echo e($profile->email); ?>

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-auto order-1 order-sm-2">
                  <div class="d-flex align-items-start justify-content-end gap-2">
                    <div>
                      <button onclick="migrate()" type="button" class="btn btn-soft-light"
                        id="migrateBtn">Migrate</button>
                      <button onclick="optimize()" type="button" class="btn btn-soft-light"
                        id="optimizeBtn">Optimize</button>
                    </div>
                    <div>
                      <div class="dropdown">
                        <button class="btn btn-link font-size-16 shadow-none text-muted dropdown-toggle" type="button"
                          data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="bx bx-dots-horizontal-rounded"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                          <li>
                            <a class="dropdown-item" href="#">Action</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">Another action</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">Something else here</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <ul class="nav nav-tabs-custom card-header-tabs border-top mt-4" id="pills-tab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link px-3 active" data-bs-toggle="tab" href="#cp" role="tab">Change Password</a>
                </li>
              </ul>
            </div>
            <!-- end card body -->
          </div>
          <!-- end card -->

          <div class="tab-content">
            <div class="tab-pane active" id="cp" role="tabpanel">
              <div class="card">
                <div class="card-header">
                  <h5 class="card-title mb-0">Change Password</h5>
                </div>
                <div class="card-body">
                  <div>
                    <form id="validation-form" method="post" enctype="multipart/form-data"
                      action="<?php echo e(url('admin/update-profile')); ?>/">
                      <?php echo csrf_field(); ?>
                      <input type="hidden" name="id" value="<?php echo e(session()->get('adminLoggedIn')['user_id']); ?>">
                      <div class="row">
                        <div class="form-group col-md-4">
                          <label class="form-label" for="password">Password</label>
                          <input type="password" class="form-control mb-2 mr-sm-2" id="password" name="password"
                            placeholder="Enter Password" value="<?php echo e(old('password')); ?>" required>
                          <span class="text-danger">
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['password'];
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
                        <div class="form-group col-md-12 updbtn">
                          <button type="submit" name="update" class="btn btn-primary mb-2">Update</button>
                        </div>
                        
                      </div>
                    </form>
                  </div>
                </div>
                <!-- end card body -->
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
  <script>
    function migrate() {
      return new Promise(function(resolve, reject) {
        $("#migrateBtn").text('Migrating...');
        setTimeout(() => {
          $.get("<?php echo e(url('/f/migrate')); ?>/", function(data) {
            $("#migrateBtn").attr('class', 'btn btn-success');
            $("#migrateBtn").text('Migrated');
          }).fail(err => {
            $("#migrateBtn").attr('class', 'btn btn-danger');
            $("#migrateBtn").text('Migration Failed');
          });
        }, 2000);
      });
    }

    function optimize() {
      return new Promise(function(resolve, reject) {
        $("#optimizeBtn").text('Optimizing...');
        setTimeout(() => {
          $.get("<?php echo e(url('/f/optimize')); ?>/", function(data) {
            $("#optimizeBtn").attr('class', 'btn btn-success');
            $("#optimizeBtn").text('Optimized');
          }).fail(err => {
            $("#optimizeBtn").attr('class', 'btn btn-danger');
            $("#optimizeBtn").text('Optimization Failed');
          });
        }, 2000);
      });
    }

    function viewUpdate() {
      $('.updbtn').show();
      $('.editbtn').hide();
      $("#name,#email,#loginid,#password").removeAttr('readonly');
    }
  </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\reactwithlaravel.educationmalaysia.in\resources\views\admin\profile.blade.php ENDPATH**/ ?>