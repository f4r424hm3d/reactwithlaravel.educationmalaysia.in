<div class="all-cardbx">
  <h3 class="filter-title">Filter by <span><a href="javascript:void(0)" onclick="removeAllFilter()" class="clearAll"
        rel="nofollow">Clear
        All</a></span> </h3>
  <div class="card mb-2 p-2 ">
    <div id="headingLevel" class="card-header secondarybxa shadow-sm border-0 ">
      <h6 class="mb-0 accordion_title size-xs">
        <a rel="nofollow" href="#" data-toggle="collapse" data-target="#collapseLevel" aria-expanded="true"
          aria-controls="collapseLevel" class="d-block position-relative text-dark collapsible-link "
          role="region">Study Level By Name</a>
      </h6>
    </div>
    <div id="collapseLevel" aria-labelledby="headingLevel" data-parent="#accordionExample" class="collapse show"
      role="region">
      <div class="scrlbar mt-2 mr-0 ">
        <div class="card-body p-0">
          <ul class="no-ul-list mb-3">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $levelListForFilter; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $level): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
              <li>
                <input id="level<?php echo e($level->level); ?>" class="checkbox-custom" name="filter_level" type="checkbox"
                  onclick="<?php echo e(session()->get('CFilterLevel') == $level->level
                      ? "removeFilter('CFilterLevel')"
                      : "ApplyFilter('" . slugify($level->level) . "')"); ?>"
                  <?php echo e(session()->get('CFilterLevel') == $level->level ? 'checked' : ''); ?>>
                <label for="level<?php echo e($level->level); ?>" class="checkbox-custom-label">
                  <div class="check-texts"> <?php echo e($level->level); ?></div>
                </label>
              </li>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="card mb-2 p-2 ">
    <div id="headingCat" class="card-header secondarybxa shadow-sm border-0 ">
      <h6 class="mb-0 accordion_title size-xs">
        <a rel="nofollow" href="#" data-toggle="collapse" data-target="#collapseCat" aria-expanded="true"
          aria-controls="collapseCat" class="d-block position-relative text-dark collapsible-link "
          role="region">Select Course By Name</a>
      </h6>
    </div>
    <div id="collapseCat" aria-labelledby="headingCat" data-parent="#accordionExample" class="collapse show"
      role="region">
      <div class="scrlbar mt-2 mr-0 ">
        <div class="card-body p-0">
          <ul class="no-ul-list mb-3">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $categoryListForFilter; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
              <li>
                <input id="cat<?php echo e($cat->id); ?>" class="checkbox-custom" name="filter_category" type="checkbox"
                  onclick="<?php echo e(session()->get('CFilterCategory') == $cat->id
                      ? "removeFilter('CFilterCategory')"
                      : "ApplyFilter('" . $cat->slug . "')"); ?>"
                  <?php echo e(session()->get('CFilterCategory') == $cat->id ? 'checked' : ''); ?>>
                <label for="cat<?php echo e($cat->id); ?>" class="checkbox-custom-label">
                  <div class="check-texts"><?php echo e($cat->name); ?></div>
                </label>
              </li>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="card mb-2 p-2 ">
    <div id="headingSpc" class="card-header secondarybxa shadow-sm border-0 ">
      <h6 class="mb-0 accordion_title size-xs">
        <a rel="nofollow" href="#" data-toggle="collapse" data-target="#collapseSpc" aria-expanded="true"
          aria-controls="collapseSpc" class="d-block position-relative text-dark collapsible-link "
          role="region">Select Stream By Name</a>
      </h6>
    </div>
    <div id="collapseSpc" aria-labelledby="headingSpc" data-parent="#accordionExample" class="collapse show"
      role="region">
      <div class="scrlbar mt-2 mr-0 ">
        <div class="card-body p-0">
          <ul class="no-ul-list mb-3">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $spcListForFilter; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $spc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
              <li>
                <input id="spc<?php echo e($spc->id); ?>" class="checkbox-custom" name="filter_specialization" type="checkbox"
                  onclick="<?php echo e(session()->get('CFilterSpecialization') == $spc->id
                      ? "removeFilter('CFilterSpecialization')"
                      : "ApplyFilter('" . $spc->slug . "')"); ?>"
                  <?php echo e(session()->get('CFilterSpecialization') == $spc->id ? 'checked' : ''); ?>>
                <label for="spc<?php echo e($spc->id); ?>" class="checkbox-custom-label">
                  <div class="check-texts"> <?php echo e($spc->name); ?></div>
                </label>
              </li>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="card mb-2 p-2 ">
    <div id="headingIntake" class="card-header secondarybxa shadow-sm border-0 ">
      <h6 class="mb-0 accordion_title size-xs">
        <a rel="nofollow" href="#" data-toggle="collapse" data-target="#collapseIntake" aria-expanded="true"
          aria-controls="collapseIntake" class="d-block position-relative text-dark collapsible-link " role="region">
          Select Intake By Month
        </a>
      </h6>
    </div>
    <div id="collapseIntake" aria-labelledby="headingIntake" data-parent="#accordionExample" class="collapse show"
      role="region">
      <div class="scrlbar mt-2 mr-0 ">
        <div class="card-body p-0">
          <ul class="no-ul-list mb-3">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $intakes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $intake): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
              <li>
                <input id="intake<?php echo e($intake->month_short_name); ?>" class="checkbox-custom" name="filter_study_mode"
                  type="checkbox"
                  onclick="<?php echo e(isset($_GET['intake']) && $_GET['intake'] == $intake->month_short_name
                      ? "removeStaticFilter('intake')"
                      : "ApplyStaticFilter('intake','" . $intake->month_short_name . "')"); ?>"
                  <?php echo e(isset($_GET['intake']) && $_GET['intake'] == $intake->month_short_name ? 'checked' : ''); ?>>
                <label for="intake<?php echo e($intake->month_short_name); ?>" class="checkbox-custom-label">
                  <div class="check-texts"><?php echo e($intake->month_short_name); ?></div>
                </label>
              </li>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="card mb-2 p-2 ">
    <div id="headingStudyModes" class="card-header secondarybxa shadow-sm border-0 ">
      <h6 class="mb-0 accordion_title size-xs">
        <a rel="nofollow" href="#" data-toggle="collapse" data-target="#collapseStudyModes"
          aria-expanded="true" aria-controls="collapseStudyModes"
          class="d-block position-relative text-dark collapsible-link " role="region">
          Course Delivery Mode
        </a>
      </h6>
    </div>
    <div id="collapseStudyModes" aria-labelledby="headingStudyModes" data-parent="#accordionExample"
      class="collapse show" role="region">
      <div class="scrlbar mt-2 mr-0 ">
        <div class="card-body p-0">
          <ul class="no-ul-list mb-3">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $studyModes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
              <li>
                <input id="sm<?php echo e($sm->study_mode); ?>" class="checkbox-custom" name="filter_study_mode"
                  type="checkbox"
                  onclick="<?php echo e(isset($_GET['study_mode']) && $_GET['study_mode'] == $sm->study_mode
                      ? "removeStaticFilter('study_mode')"
                      : "ApplyStaticFilter('study_mode','" . $sm->study_mode . "')"); ?>"
                  <?php echo e(isset($_GET['study_mode']) && $_GET['study_mode'] == $sm->study_mode ? 'checked' : ''); ?>>
                <label for="sm<?php echo e($sm->study_mode); ?>" class="checkbox-custom-label">
                  <div class="check-texts"><?php echo e($sm->study_mode); ?></div>
                </label>
              </li>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<?php /**PATH C:\laragon\www\reactwithlaravel.educationmalaysia.in\resources\views\front\filter-courses-in-malaysia.blade.php ENDPATH**/ ?>