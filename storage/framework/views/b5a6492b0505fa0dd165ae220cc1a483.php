<table>
  <thead>
    <tr>
      <th>id</th>
      <th>specialization_id</th>
      <th>specialization_name</th>
      <th>level</th>
      <th>duration</th>
      <th>tuition_fees</th>
      <th>intake</th>
      <th>accreditation</th>
    </tr>
  </thead>
  <tbody>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
      <tr>
        <td><?php echo e($row->id); ?></td>
        <td><?php echo e($row->specialization_id); ?></td>
        <td><?php echo e($row->specialization->name); ?></td>
        <td><?php echo e($row->level); ?></td>
        <td><?php echo e($row->duration); ?></td>
        <td><?php echo e($row->tuition_fees); ?></td>
        <td><?php echo e($row->intake); ?></td>
        <td><?php echo e($row->accreditation); ?></td>
      </tr>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
  </tbody>
</table>
<?php /**PATH C:\laragon\www\reactwithlaravel.educationmalaysia.in\resources\views\admin\exports\course-specialization-levels.blade.php ENDPATH**/ ?>