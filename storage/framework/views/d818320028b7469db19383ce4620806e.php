<table>
  <thead>
    <tr>
      <th>id</th>
      <th>name</th>
      <th>icon_class</th>
      <th>courses_description</th>
      <th>shortnote</th>
    </tr>
  </thead>
  <tbody>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
      <tr>
        <td><?php echo e($row->id); ?></td>
        <td><?php echo e($row->name); ?></td>
        <td><?php echo e($row->icon_class); ?></td>
        <td><?php echo e($row->courses_description); ?></td>
        <td><?php echo e($row->shortnote); ?></td>
      </tr>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
  </tbody>
</table>
<?php /**PATH C:\laragon\www\reactwithlaravel.educationmalaysia.in\resources\views\admin\exports\course-categories-list.blade.php ENDPATH**/ ?>