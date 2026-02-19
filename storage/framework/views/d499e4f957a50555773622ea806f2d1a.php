<div class="form-group">
  <label>
    <?php echo e($label); ?>

    <?php echo $required ? '<span class="text-danger">*</span>' : ''; ?>

  </label>

  <input name="<?php echo e($name); ?>" id="<?php echo e($id); ?>" type="<?php echo e($type); ?>" class="form-control"
    placeholder="<?php echo e($placeholder ?? $label); ?>" value="<?php echo e($ft == 'edit' ? $sd->$name : old($name)); ?>" <?php echo e($required); ?>>

  <span class="text-danger" id="<?php echo e($name); ?>-err">
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = [$name];
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
<?php /**PATH C:\laragon\www\reactwithlaravel.educationmalaysia.in\resources\views\components\input-field.blade.php ENDPATH**/ ?>