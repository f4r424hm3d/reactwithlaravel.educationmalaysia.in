<span id="astatus<?php echo e($row->id); ?>" class="badge bg-success <?php echo e($row->status == 1 ? '' : 'hide-this'); ?>"
  onclick="changeStatus('<?php echo e($row->id); ?>','status','0')">Active</span>
<span id="istatus<?php echo e($row->id); ?>" class="badge bg-danger <?php echo e($row->status == 0 ? '' : 'hide-this'); ?>"
  onclick="changeStatus('<?php echo e($row->id); ?>','status','1')">Inactive</span><?php /**PATH C:\laragon\www\reactwithlaravel.educationmalaysia.in\resources\views\components\status-field.blade.php ENDPATH**/ ?>