<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(data_get($row, $field) != null): ?>
  <button type="button" class="btn btn-xs btn-outline-info waves-effect waves-light" data-bs-toggle="modal"
    data-bs-target="#<?php echo e($field); ?>ModalScrollable<?php echo e($row->id); ?>">View</button>
  <div class="modal fade" id="<?php echo e($field); ?>ModalScrollable<?php echo e($row->id); ?>" tabindex="-1" role="dialog"
    aria-labelledby="<?php echo e($field); ?>ModalScrollableTitle<?php echo e($row->id); ?>" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="<?php echo e($field); ?>ModalScrollableTitle<?php echo e($row->id); ?>">
            <?php echo e($title); ?>

          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <?php echo data_get($row, $field); ?>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
<?php else: ?>
  Null
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php /**PATH C:\laragon\www\reactwithlaravel.educationmalaysia.in\resources\views\components\content-view-modal.blade.php ENDPATH**/ ?>