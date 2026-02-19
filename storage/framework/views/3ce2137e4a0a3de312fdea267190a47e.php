<div class="row">
  <div class="col-xl-12">
    <div class="card">
      <div class="card-header">
        <span style="float:left;">
          <a href="<?php echo e(aurl('client/profile/'.$sd->id)); ?>"
            class="btn btn-xs btn<?php echo e($currentMenu=='profile'?'':'-outline'); ?>-primary">Profile</a>
          <a href="<?php echo e(aurl('client/invoices/'.$sd->id)); ?>"
            class="btn btn-xs btn<?php echo e($currentMenu=='invoices'?'':'-outline'); ?>-primary">Invoices</a>
        </span>
      </div>
    </div>
  </div>
</div>
<?php /**PATH C:\laragon\www\reactwithlaravel.educationmalaysia.in\resources\views\admin\student\profile-menu.blade.php ENDPATH**/ ?>