<div class="card mb-2">
  <div id="headingOne" class="card-header bg-white shadow-sm border-0 pt-2 pb-2 pl-4 pr-4">
    <h6 class="mb-0 accordion_title size-xs"><a rel="nofollow" href="#" data-toggle="collapse"
        data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"
        class="d-block position-relative text-dark collapsible-link py-2" role="region">Institute Type</a></h6>
  </div>
  <div id="collapseOne" aria-labelledby="headingOne" data-parent="#accordionExample" class="collapse show"
    role="region">
    <div class="scrlbar">
      <div class="card-body pl-4 pr-4 pb-2 ">
        <ul class="no-ul-list mb-3">
          <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $instituteTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
            <?php
              $onClickFunction =
                  session()->get('FilterInstituteType') == $row->instituteType->seo_title_slug
                      ? "removeFilter('FilterInstituteType')"
                      : "applyFilter('FilterInstituteType','" . $row->instituteType->seo_title_slug . "')";
              $checked = session()->get('FilterInstituteType') == $row->instituteType->seo_title_slug ? 'checked' : '';
            ?>
            <li>
              <input id="inst<?php echo e($row->instituteType->id); ?>" class="checkbox-custom" name="institute_type"
                type="checkbox" onclick="<?php echo e($onClickFunction); ?>" <?php echo e($checked); ?>>
              <label for="inst<?php echo e($row->instituteType->id); ?>" class="checkbox-custom-label">

                <div class="check-texts"> <?php echo e($row->instituteType->type); ?></div>
              </label>
            </li>
          <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="card mb-2">
  <div id="headingTwo" class="card-header bg-white shadow-sm border-0 pt-2 pb-2 pl-4 pr-4">
    <h6 class="mb-0 accordion_title size-xs"><a rel="nofollow" href="#" data-toggle="collapse"
        data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo"
        class="d-block position-relative text-dark collapsible-link py-2" role="region">State</a></h6>
  </div>
  <div id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordionExample" class="collapse show"
    role="region">
    <div class="scrlbar">
      <div class="card-body pl-4 pr-4 pb-2">
        <ul class="no-ul-list mb-3">
          <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
            <?php
              $onClickFunctionState =
                  session()->get('FilterState') == $row->state
                      ? "removeFilter('FilterState')"
                      : "applyFilter('FilterState','" . $row->state . "')";
              $checkedState = session()->get('FilterState') == $row->state ? 'checked' : '';
            ?>
            <li>
              <input id="state<?php echo e(slugify($row->state)); ?>" class="checkbox-custom" name="state_filter" type="checkbox"
                onclick="<?php echo e($onClickFunctionState); ?>" <?php echo e($checkedState); ?>>
              <label for="state<?php echo e(slugify($row->state)); ?>" class="checkbox-custom-label">
                <div class="check-texts"><?php echo e($row->state); ?></div>

              </label>
            </li>
          <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
        </ul>
      </div>
    </div>
  </div>
</div>
<?php /**PATH C:\laragon\www\reactwithlaravel.educationmalaysia.in\resources\views\front\filter-universities.blade.php ENDPATH**/ ?>