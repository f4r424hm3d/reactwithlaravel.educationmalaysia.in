<table>
  <thead>
    <tr>
      <th>id</th>
      <th>course_name</th>
      <th>course_category_id</th>
      <th>specialization_id</th>
      <th>level</th>
      <th>duration</th>
      <th>study_mode</th>
      <th>intake</th>
      <th>application_deadline</th>
      <th>campus</th>
      <th>tution_fee</th>
      <th>overview</th>
      <th>entry_requirement</th>
      <th>exam_required</th>
      <th>mode_of_instruction</th>
      <th>scholarship_info</th>
      <th>is_local</th>
      <th>is_international</th>
      <th>accreditations</th>

      
      <th>total_fee</th>
      <th>total_tuition_fee</th>
      <th>annual_tuition_fee</th>
      <th>year1_tuition_fee</th>
      <th>year2_tuition_fee</th>
      <th>year3_tuition_fee</th>
      <th>year4_tuition_fee</th>
      <th>registration_fee</th>
      <th>laboratory_fee</th>
      <th>library_fee</th>
      <th>technology_fee</th>
      <th>student_activity_fee</th>
      <th>insurance_fee</th>
      <th>examination_fee</th>
      <th>application_fee</th>
      <th>emgs_processing_fee</th>
      <th>international_student_fee</th>
      <th>international_security_deposit</th>
      <th>international_student_charge</th>
      <th>international_administration_fee</th>
      <th>personal_bond_fee</th>
      <th>resources_fee</th>
      <th>commitment_fee</th>
      <th>facilities_fee</th>
      <th>accommodation_fee</th>
      <th>airport_pickup_fee</th>
      <th>other_fee</th>
      <th>scholarship_amount</th>
      <th>tution_fee_after_scholarship</th>
      <th>currency</th>
      <th>additional_note</th>
      <th>anual_tuition_fee_local</th>
      <th>year1_tuition_fee_local</th>
      <th>year2_tuition_fee_local</th>
      <th>year3_tuition_fee_local</th>
      <th>year4_tuition_fee_local</th>
      <th>total_tuition_fee_local</th>
      <th>table_of_content</th>
    </tr>
  </thead>
  <tbody>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
      <tr>
        <td><?php echo e($row->id); ?></td>
        <td><?php echo e($row->course_name); ?></td>
        <td><?php echo e($row->course_category_id); ?></td>
        <td><?php echo e($row->specialization_id); ?></td>
        <td><?php echo e($row->level); ?></td>
        <td><?php echo e($row->duration); ?></td>
        <td><?php echo e($row->study_mode); ?></td>
        <td><?php echo e($row->intake); ?></td>
        <td><?php echo e($row->application_deadline); ?></td>
        <td><?php echo e($row->campus); ?></td>
        <td><?php echo e($row->tution_fee); ?></td>
        <td><?php echo e($row->overview); ?></td>
        <td><?php echo e($row->entry_requirement); ?></td>
        <td><?php echo e($row->exam_required); ?></td>
        <td><?php echo e($row->mode_of_instruction); ?></td>
        <td><?php echo e($row->scholarship_info); ?></td>
        <td><?php echo e($row->is_local); ?></td>
        <td><?php echo e($row->is_international); ?></td>
        <td><?php echo e(jsonToPipe($row->accreditations)); ?></td>

        
        <td><?php echo e($row->total_fee); ?></td>
        <td><?php echo e($row->total_tuition_fee); ?></td>
        <td><?php echo e($row->annual_tuition_fee); ?></td>
        <td><?php echo e($row->year1_tuition_fee); ?></td>
        <td><?php echo e($row->year2_tuition_fee); ?></td>
        <td><?php echo e($row->year3_tuition_fee); ?></td>
        <td><?php echo e($row->year4_tuition_fee); ?></td>
        <td><?php echo e($row->registration_fee); ?></td>
        <td><?php echo e($row->laboratory_fee); ?></td>
        <td><?php echo e($row->library_fee); ?></td>
        <td><?php echo e($row->technology_fee); ?></td>
        <td><?php echo e($row->student_activity_fee); ?></td>
        <td><?php echo e($row->insurance_fee); ?></td>
        <td><?php echo e($row->examination_fee); ?></td>
        <td><?php echo e($row->application_fee); ?></td>
        <td><?php echo e($row->emgs_processing_fee); ?></td>
        <td><?php echo e($row->international_student_fee); ?></td>
        <td><?php echo e($row->international_security_deposit); ?></td>
        <td><?php echo e($row->international_student_charge); ?></td>
        <td><?php echo e($row->international_administration_fee); ?></td>
        <td><?php echo e($row->personal_bond_fee); ?></td>
        <td><?php echo e($row->resources_fee); ?></td>
        <td><?php echo e($row->commitment_fee); ?></td>
        <td><?php echo e($row->facilities_fee); ?></td>
        <td><?php echo e($row->accommodation_fee); ?></td>
        <td><?php echo e($row->airport_pickup_fee); ?></td>
        <td><?php echo e($row->other_fee); ?></td>
        <td><?php echo e($row->scholarship_amount); ?></td>
        <td><?php echo e($row->tution_fee_after_scholarship); ?></td>
        <td><?php echo e($row->currency); ?></td>
        <td><?php echo e($row->additional_note); ?></td>
        <td><?php echo e($row->anual_tuition_fee_local); ?></td>
        <td><?php echo e($row->year1_tuition_fee_local); ?></td>
        <td><?php echo e($row->year2_tuition_fee_local); ?></td>
        <td><?php echo e($row->year3_tuition_fee_local); ?></td>
        <td><?php echo e($row->year4_tuition_fee_local); ?></td>
        <td><?php echo e($row->total_tuition_fee_local); ?></td>
        <td><?php echo e($row->contents->count() > 0 ? 'Yes' : 'No'); ?></td>
      </tr>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
  </tbody>
</table>
<?php /**PATH C:\laragon\www\reactwithlaravel.educationmalaysia.in\resources\views\admin\exports\university-programs-list.blade.php ENDPATH**/ ?>