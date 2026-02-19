<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($link): ?>
  <a href="<?php echo e($link); ?>" target="_blank"><?php echo e($viewText); ?></a>
<?php else: ?>
  <span><?php echo e($nullText); ?></span>
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php /**PATH C:\laragon\www\reactwithlaravel.educationmalaysia.in\resources\views\components\storage-file-link.blade.php ENDPATH**/ ?>