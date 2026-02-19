<?php $__env->startPush('title'); ?>
<title>404</title>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('main-section'); ?>
<div class="page-content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <div class="text-center mb-5">
              <h1 class="display-1 fw-semibold">4<span class="text-primary mx-2">0</span>4</h1>
              <h4 class="text-uppercase">Sorry, page not found</h4>
              <div class="mt-5 text-center">
                <a class="btn btn-primary waves-effect waves-light" href="<?php echo e(aurl('/')); ?>">Back to Dashboard</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\reactwithlaravel.educationmalaysia.in\resources\views\admin\errors\404.blade.php ENDPATH**/ ?>