<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'label' => '',
    'name',
    'id' => null,
    'checked' => false,
]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter(([
    'label' => '',
    'name',
    'id' => null,
    'checked' => false,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<div class="form-check">
  <input type="checkbox" name="<?php echo e($name); ?>" id="<?php echo e($id ?? $name); ?>" class="form-check-input" value="1"
    <?php echo e(old($name, $sd[$name] ?? null) ? 'checked' : ''); ?> <?php echo e($checked ? 'checked' : ''); ?>>

  <label class="form-check-label" for="<?php echo e($id ?? $name); ?>">
    <?php echo e($label); ?>

  </label>
</div>
<?php /**PATH C:\laragon\www\reactwithlaravel.educationmalaysia.in\resources\views\components\checkbox.blade.php ENDPATH**/ ?>