<a href="<?php echo e($url); ?>" class="waves-effect waves-light btn <?php echo e($btnSize); ?> <?php echo e($btnColor); ?>" target="_blank">
  <?php echo e($label); ?>

  <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($count > 0): ?>
    <span class="badge <?php echo e($badgeClass); ?>"><?php echo e($count); ?></span>
  <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
</a>
<?php /**PATH C:\laragon\www\reactwithlaravel.educationmalaysia.in\resources\views\components\custom-button.blade.php ENDPATH**/ ?>