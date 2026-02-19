<table>
  <thead>
    <tr>
      <th>id</th>
      <th>name</th>
      <th>views</th>
      <th>click</th>
      <th>city</th>
      <th>state</th>
      <th>institute_type</th>
      <th>rating</th>
      
      <th>qs_rank</th>
      <th>times_rank</th>
      <th>qs_asia_rank</th>
      <th>latitude_longitude</th>
      <th>featured</th>
      <th>shortnote</th>
      <th>established_year</th>
      <th>local_students</th>
      <th>international_students</th>
      <th>contact_number1</th>
      <th>contact_number2</th>
      <th>hostel_facility</th>
      <th>accredited_by</th>
      <th>approved_by</th>
    </tr>
  </thead>
  <tbody>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
      <tr>
        <td><?php echo e($row->id); ?></td>
        <td><?php echo e($row->name); ?></td>
        <td><?php echo e($row->views); ?></td>
        <td><?php echo e($row->click); ?></td>
        <td><?php echo e($row->city); ?></td>
        <td><?php echo e($row->state); ?></td>
        <td><?php echo e($row->institute_type); ?></td>
        <td><?php echo e($row->rating); ?></td>
        
        <td><?php echo e($row->qs_rank); ?></td>
        <td><?php echo e($row->times_rank); ?></td>
        <td><?php echo e($row->qs_asia_rank); ?></td>
        <td><?php echo e($row->latitude_longitude); ?></td>
        <td><?php echo e($row->featured); ?></td>
        <td><?php echo e($row->shortnote); ?></td>
        <td><?php echo e($row->established_year); ?></td>
        <td><?php echo e($row->local_students); ?></td>
        <td><?php echo e($row->international_students); ?></td>
        <td><?php echo e($row->contact_number1); ?></td>
        <td><?php echo e($row->contact_number2); ?></td>
        <td><?php echo e(jsonToPipe($row->hostel_facility)); ?></td>
        <td><?php echo e(jsonToPipe($row->accredited_by)); ?></td>
        <td><?php echo e(jsonToPipe($row->approved_by)); ?></td>
      </tr>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
  </tbody>
</table>
<?php /**PATH C:\laragon\www\reactwithlaravel.educationmalaysia.in\resources\views\admin\exports\university-list.blade.php ENDPATH**/ ?>