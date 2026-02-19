<!-- <form class="form-inline addons hide-23 mb-2 set-onlines">
  <input class="form-control img-fluid" type="search" placeholder="Search Courses" aria-label="Search">
  <button class="btn my-2 my-sm-0" type="submit"><i class="ti-search"></i></button>
</form> -->
<div id="accordionExample" class="accordion shadow circullum hide-23 full-width">
  <div class="card mb-2">
    <div id="heading<?php echo e($type); ?>One" class="card-header bg-white shadow-sm border-0 pt-2 pb-2 pl-4 pr-4">
      <h6 class="mb-0 accordion_title size-xs"><a href="#" data-toggle="collapse"
          data-target="#collapse<?php echo e($type); ?>One" aria-expanded="true"
          aria-controls="collapse<?php echo e($type); ?>One"
          class="d-block position-relative text-dark collapsible-link py-2">Study Level</a></h6>
    </div>
    <div id="collapse<?php echo e($type); ?>One" aria-labelledby="heading<?php echo e($type); ?>One"
      data-parent="#accordionExample" class="collapse show">
      <div class="scrlbar">
        <div class="card-body pl-4 pr-4 pb-2">
          <ul class="no-ul-list mb-3">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $levels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
              <li>
                <input id="level<?php echo e($row->level); ?>" class="checkbox-custom" name="institute_type" type="checkbox"
                  onclick="<?php echo e(session()->get('UCF_level') == $row->level ? 'removeFilter(`UCF_level`)' : 'ApplyLevelFilter(`' . $row->level . '`)'); ?>"
                  <?php echo e(session()->get('UCF_level') == $row->level ? 'checked' : ''); ?>>
                <label for="level<?php echo e($row->level); ?>" class="checkbox-custom-label">
                  <div class="check-texts"><?php echo e($row->level); ?></div>
                </label>
              </li>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="card mb-2">
    <div id="heading<?php echo e($type); ?>Two" class="card-header bg-white shadow-sm border-0 pt-2 pb-2 pl-4 pr-4">
      <h6 class="mb-0 accordion_title size-xs"><a href="#" data-toggle="collapse"
          data-target="#collapse<?php echo e($type); ?>Two" aria-expanded="true"
          aria-controls="collapse<?php echo e($type); ?>Two"
          class="d-block position-relative text-dark collapsible-link py-2">Course Category</a></h6>
    </div>
    <div id="collapse<?php echo e($type); ?>Two" aria-labelledby="heading<?php echo e($type); ?>Two"
      data-parent="#accordionExample" class="collapse show">
      <div class="scrlbar">
        <div class="card-body pl-4 pr-4 pb-2">
          <ul class="no-ul-list mb-3">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
              <li>
                <input id="category<?php echo e($row->category->id); ?>" class="checkbox-custom" name="institute_type"
                  type="checkbox"
                  onclick="<?php echo e(session()->get('UCF_course_category') == $row->category->id ? 'removeFilter(`UCF_course_category`)' : 'ApplyCategoryFilter(`' . $row->category->id . '`)'); ?>"
                  <?php echo e(session()->get('UCF_course_category') == $row->category->id ? 'checked' : ''); ?>>
                <label for="category<?php echo e($row->category->id); ?>" class="checkbox-custom-label">
                  <div class="check-texts"><?php echo e($row->category->name); ?></div>
                </label>
              </li>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="card mb-2">
    <div id="heading<?php echo e($type); ?>Three" class="card-header bg-white shadow-sm border-0 pt-2 pb-2 pl-4 pr-4">
      <h6 class="mb-0 accordion_title size-xs"><a href="#" data-toggle="collapse"
          data-target="#collapse<?php echo e($type); ?>Three" aria-expanded="true"
          aria-controls="collapse<?php echo e($type); ?>Three"
          class="d-block position-relative text-dark collapsible-link py-2">Stream</a></h6>
    </div>
    <div id="collapse<?php echo e($type); ?>Three" aria-labelledby="heading<?php echo e($type); ?>Three"
      data-parent="#accordionExample" class="collapse show">
      <div class="scrlbar">
        <div class="card-body pl-4 pr-4 pb-2">
          <ul class="no-ul-list mb-3">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $specializations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
              <li>
                <input id="spc<?php echo e($row->getSpecialization->id); ?>" class="checkbox-custom" name="institute_type"
                  type="checkbox" onclick="<?php echo session()->get('UCF_specialization') == $row->getSpecialization->id ? "removeFilter('UCF_specialization')" : "ApplySpecializationFilter('" . $row->getSpecialization->id . "')";
                  ?>"
                  <?php echo e(session()->get('UCF_specialization') == $row->getSpecialization->id ? 'checked' : ''); ?>>
                <label for="spc<?php echo e($row->getSpecialization->id); ?>" class="checkbox-custom-label">
                  <div class="check-texts"><?php echo e($row->getSpecialization->name); ?></div>
                </label>
              </li>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="card mb-2" style="display:none">
    <div id="heading<?php echo e($type); ?>Four" class="card-header bg-white shadow-sm border-0 pt-2 pb-2 pl-4 pr-4">
      <h6 class="mb-0 accordion_title size-xs"><a href="#" data-toggle="collapse"
          data-target="#collapse<?php echo e($type); ?>Four" aria-expanded="true"
          aria-controls="collapse<?php echo e($type); ?>Four"
          class="d-block position-relative text-dark collapsible-link py-2">Intakes</a></h6>
    </div>
    <div id="collapse<?php echo e($type); ?>Four" aria-labelledby="heading<?php echo e($type); ?>Four"
      data-parent="#accordionExample" class="collapse show">
      <div class="scrlbar">
        <div class="card-body pl-4 pr-4 pb-2">
          <ul class="no-ul-list mb-3">
            <li>
              <input id="23" class="checkbox-custom" name="23" type="checkbox">
              <label for="23" class="checkbox-custom-label">January</label>
            </li>
            <li>
              <input id="24" class="checkbox-custom" name="24" type="checkbox">
              <label for="24" class="checkbox-custom-label">Feburary</label>
            </li>
            <li>
              <input id="25" class="checkbox-custom" name="25" type="checkbox">
              <label for="25" class="checkbox-custom-label">March</label>
            </li>
            <li>
              <input id="26" class="checkbox-custom" name="26" type="checkbox">
              <label for="26" class="checkbox-custom-label">April</label>
            </li>
            <li>
              <input id="27" class="checkbox-custom" name="27" type="checkbox">
              <label for="27" class="checkbox-custom-label">May</label>
            </li>
            <li>
              <input id="28" class="checkbox-custom" name="28" type="checkbox">
              <label for="28" class="checkbox-custom-label">June</label>
            </li>
            <li>
              <input id="29" class="checkbox-custom" name="29" type="checkbox">
              <label for="29" class="checkbox-custom-label">July</label>
            </li>
            <li>
              <input id="30" class="checkbox-custom" name="30" type="checkbox">
              <label for="30" class="checkbox-custom-label">August</label>
            </li>
            <li>
              <input id="31" class="checkbox-custom" name="31" type="checkbox">
              <label for="31" class="checkbox-custom-label">September</label>
            </li>
            <li>
              <input id="32" class="checkbox-custom" name="32" type="checkbox">
              <label for="32" class="checkbox-custom-label">October</label>
            </li>
            <li>
              <input id="33" class="checkbox-custom" name="33" type="checkbox">
              <label for="33" class="checkbox-custom-label">November</label>
            </li>
            <li>
              <input id="34" class="checkbox-custom" name="34" type="checkbox">
              <label for="34" class="checkbox-custom-label">December</label>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="card mb-2">
    <div id="heading<?php echo e($type); ?>Five" class="card-header bg-white shadow-sm border-0 pt-2 pb-2 pl-4 pr-4">
      <h6 class="mb-0 accordion_title size-xs"><a href="#" data-toggle="collapse"
          data-target="#collapse<?php echo e($type); ?>Five" aria-expanded="true"
          aria-controls="collapse<?php echo e($type); ?>Five"
          class="d-block position-relative text-dark collapsible-link py-2">Study Mode</a></h6>
    </div>
    <div id="collapse<?php echo e($type); ?>Five" aria-labelledby="heading<?php echo e($type); ?>Five"
      data-parent="#accordionExample" class="collapse show">
      <div class="scrlbar">
        <div class="card-body pl-4 pr-4 pb-2">
          <ul class="no-ul-list mb-3">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $studyModes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
              <li>
                <input id="sm<?php echo e($row->id); ?>" class="checkbox-custom" name="institute_type" type="checkbox"
                  onclick="<?php echo session()->get('UCF_study_mode') == $row->study_mode ? " removeFilter('UCF_study_mode')" : "ApplyFilter('UCF_study_mode','" . $row->study_mode . "')"; ?>"
                  <?php echo e(session()->get('UCF_study_mode') == $row->study_mode ? 'checked' : ''); ?>>
                <label for="sm<?php echo e($row->id); ?>" class="checkbox-custom-label">
                  <div class="check-texts"><?php echo e($row->study_mode); ?></div>
                </label>
              </li>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<?php /**PATH C:\laragon\www\reactwithlaravel.educationmalaysia.in\resources\views\front\filter-university-profile-course-list.blade.php ENDPATH**/ ?>