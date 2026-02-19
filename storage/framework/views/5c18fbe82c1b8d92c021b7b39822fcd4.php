<?php

?>

<?php $__env->startPush('seo_meta_tag'); ?>
  <?php echo $__env->make('front.layouts.static_page_meta_tag', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('main-section'); ?>
  <!-- Content -->
  <section class="gray pt-5 px-0 px-sm-4 px-md-5 profilesection ">
    <div class="container-fluid">
      <div class="row">
        <?php echo $__env->make('front.student.profile-sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        <div class="col-xl-9 col-lg-8 col-md-12 col-sm-12 mb-4">
          <div class="profile-infos">
            <!-- NOTIFICATION FIELD START -->
            <?php if (isset($component)) { $__componentOriginaleb5e0e99c2c93bbf06068ce0c292b3c2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaleb5e0e99c2c93bbf06068ce0c292b3c2 = $attributes; } ?>
<?php $component = App\View\Components\FrontResultNotification::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('front-result-notification'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\FrontResultNotification::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaleb5e0e99c2c93bbf06068ce0c292b3c2)): ?>
<?php $attributes = $__attributesOriginaleb5e0e99c2c93bbf06068ce0c292b3c2; ?>
<?php unset($__attributesOriginaleb5e0e99c2c93bbf06068ce0c292b3c2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaleb5e0e99c2c93bbf06068ce0c292b3c2)): ?>
<?php $component = $__componentOriginaleb5e0e99c2c93bbf06068ce0c292b3c2; ?>
<?php unset($__componentOriginaleb5e0e99c2c93bbf06068ce0c292b3c2); ?>
<?php endif; ?>
            <!-- NOTIFICATION FIELD END -->

            <div class="proHead" id="myHeader">
              <ul class="links scrollTo hor-scrlbar" data-gssticky="1">
                <li class="active"><a href="#PerInfo">General Information <i class="fa fa-check-circle green"></i><i
                      class="fa fa-exclamation-circle red"></i></a></li>
                <li class=""><a href="#EduSummary">Education History <i class="fa fa-check-circle green"></i></a>
                </li>
                <li class=""><a href="#TestScores">Test Scores <i class="fa fa-check-circle green"></i></a>
                </li>
                <li class=""><a href="#BackInfo">Background Information <i class="fa fa-check-circle green"></i></a>
                </li>
                <li class=""><a href="#UplodDoc">Upload Documents <i class="fa fa-check-circle green"></i></a></li>
              </ul>
            </div>

            <div class="infoContent" id="PerInfo">
              <form action="<?php echo e($piurl); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div class="row">
                  <div class="col-md-12 ">
                    <h2>Personal Information</h2>
                    <div class="slogan">(As indicated on your passport)</div>
                  </div>
                  <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 mb-3">
                    <label>Full Name <span class="red">*</span></label>
                    <input name="name" id="name" class="form-control" placeholder="Enter Full Name"
                      value="<?php echo $student->name; ?>" required>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <span class="text-danger"><?php echo e($message); ?></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                  </div>
                  <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 mb-3">
                    <label>Email <span class="red">*</span></label>
                    <input type="email" class=" pif form-control" name="email" id="email"
                      placeholder="Enter email" value="<?php echo $student->email; ?>" required>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <span class="text-danger"><?php echo e($message); ?></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                  </div>

                  <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 mb-3">
                    <div class="d-flex align-items-center set-gapsf">
                      <div class="setcodes">
                        <!-- <label>Country Code <span class="red">*</span></label> -->
                        <select name="country_code" id="country_code" class="pif select2 form-control">
                          <option value="" <?php echo $student->country_code == '' ? 'Selected' : ''; ?>>Select
                          </option>
                          <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $phonecodes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $phone): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                            <option value="<?php echo e($phone->phonecode); ?>"
                              <?php echo e($student->country_code == $phone->phonecode ? 'Selected' : ''); ?>>
                              <?php echo e($phone->phonecode); ?>

                              (<?php echo e($phone->name); ?>)
                            </option>
                          <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                        </select>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['country_code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                          <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                      </div>
                      <div class="w-100 mobiles-full">
                        <label>Mobile <span class="red">*</span></label>
                        <input type="text" class=" pif form-control" name="mobile" id="mobile"
                          placeholder="Enter Phone Number" value="<?php echo $student->mobile; ?>" required>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['mobile'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                          <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                      </div>
                    </div>

                  </div>
                  <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 mb-3">
                    <label>Father Name <span class="red">*</span></label>
                    <input type="text" class=" pif form-control" name="father" id="father"
                      placeholder="Enter Father Name" value="<?php echo $student->father; ?>">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['father'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <span class="text-danger"><?php echo e($message); ?></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                  </div>
                  <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 mb-3">
                    <label>Mother Name <span class="red">*</span></label>
                    <input type="text" class=" pif form-control" name="mother" id="mother"
                      placeholder="Enter mother Name" value="<?php echo $student->mother; ?>">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['mother'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <span class="text-danger"><?php echo e($message); ?></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                  </div>
                  <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 mb-3">
                    <label>Date of Birth <span class="red">*</span></label>
                    <input type="date" class=" pif form-control" name="dob" id="dob"
                      placeholder="Enter date of birth" value="<?php echo $student->dob; ?>">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['dob'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <span class="text-danger"><?php echo e($message); ?></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                  </div>
                  <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 mb-3">
                    <label>First Language <span class="red">*</span></label>
                    <input type="text" class=" pif form-control" name="first_language" id="first_language"
                      placeholder="Enter First Language" value="<?php echo $student->first_language; ?>">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['first_language'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <span class="text-danger"><?php echo e($message); ?></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                  </div>
                  <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 mb-3">
                    <label>Country of Citizenship <span class="red">*</span></label>
                    <select name="nationality" id="nationality" class=" pif select2 form-control">
                      <option value="" <?php echo $student->nationality == '' ? 'Selected' : ''; ?>>
                        Select</option>
                      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                        <option value="<?php echo e($c->name); ?>" <?php echo e($student->nationality == $c->name ? 'Selected' : ''); ?>>
                          <?php echo e($c->name); ?></option>
                      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                    </select>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['nationality'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <span class="text-danger"><?php echo e($message); ?></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                  </div>
                  <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 mb-3">
                    <label>Passport Number <i class="fa fa-info-circle"
                        title="We collect your passport information for identity verification purposes, your school or program of interest may require this information to process your application. If applicable, it may also be used for processing your visa."></i>
                      <span class="red">*</span></label>
                    <input type="text" class=" pif form-control" name="passport_number" id="passport_number"
                      placeholder="Enter Passport Number" value="<?php echo $student->passport_number; ?>">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['passport_number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <span class="text-danger"><?php echo e($message); ?></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                  </div>
                  <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 mb-3">
                    <label>Passport Expiry Date</label>
                    <input type="date" class=" pif form-control" name="passport_expiry" id="passport_expiry"
                      placeholder="Enter Passport Expiry date" value="<?php echo $student->passport_expiry; ?>">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['passport_expiry'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <span class="text-danger"><?php echo e($message); ?></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                  </div>
                  <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 mb-3">
                    <label>Marital Status <span class="red">*</span></label>
                    <select name="marital_status" id="marital_status" class=" pif select2 form-control">
                      <option value="" <?php echo $student->marital_status == '' ? 'Selected' : ''; ?>>Select
                      </option>
                      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $marital_statuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ms): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                        <option value="<?php echo e($ms->marital_status); ?>"
                          <?php echo e($student->marital_status == $ms->marital_status ? 'Selected' : ''); ?>>
                          <?php echo e($ms->marital_status); ?></option>
                      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                    </select>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['marital_status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <span class="text-danger"><?php echo e($message); ?></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                  </div>
                  <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 mb-3">
                    <label>Gender <i class="fa fa-info-circle"></i> <span class="red">*</span></label>
                    <select id="gender" name="gender" class=" pif select2 form-control">
                      <option value="" <?php echo $student->gender == '' ? 'Selected' : ''; ?>>Select
                      </option>
                      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $genders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gender): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                        <option value="<?php echo e($gender->gender); ?>"
                          <?php echo e($student->gender == $gender->gender ? 'Selected' : ''); ?>>
                          <?php echo e($gender->gender); ?></option>
                      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                    </select>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['gender'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <span class="text-danger"><?php echo e($message); ?></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                  </div>

                  <div class="col-md-12" style="margin-top:40px">
                    <h2>
                      Address Detail

                    </h2>
                    <div class="slogan">
                      <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M11 17h2v-6h-2v6zm1-15C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zM11 9h2V7h-2v2z">
                        </path>
                      </svg>
                      Please make sure to enter the student's residential address. Organization
                      address will not be
                      accepted.
                    </div>
                  </div>

                  <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-3   ">
                    <label>Address <span class="red">*</span></label>
                    <input type="text" class=" pif form-control" name="home_address" id="home_address"
                      placeholder="Enter address" value="<?php echo $student->home_address; ?>">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['home_address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <span class="text-danger"><?php echo e($message); ?></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                  </div>
                  <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 mb-3   ">
                    <label>City/Town <span class="red">*</span></label>
                    <input type="text" class=" pif form-control" name="city" id="city"
                      placeholder="Enter city" value="<?php echo $student->city; ?>">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['city'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <span class="text-danger"><?php echo e($message); ?></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                  </div>
                  <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 mb-3   ">
                    <label>Province/State <span class="red">*</span></label>
                    <input type="text" class=" pif form-control" name="state" id="state"
                      placeholder="Enter state" value="<?php echo $student->state; ?>">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['state'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <span class="text-danger"><?php echo e($message); ?></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                  </div>
                  <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 mb-3   ">
                    <label>Country <span class="red">*</span></label>
                    <select name="country" class=" pif form-control select2">
                      <option value="" <?php echo $student->country == '' ? 'Selected' : ''; ?>>Select
                      </option>
                      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                        <option value="<?php echo e($c->name); ?>" <?php echo e($student->country == $c->name ? 'Selected' : ''); ?>>
                          <?php echo e($c->name); ?></option>
                      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                    </select>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['country'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <span class="text-danger"><?php echo e($message); ?></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                  </div>
                  <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 mb-3   ">
                    <label>Postal/Zip Code</label>
                    <input type="text" class=" pif form-control" name="zipcode" id="zipcode"
                      placeholder="Enter Postal/Zipcode" value="<?php echo $student->zipcode == 0 ? '' : $student->zipcode; ?>">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['zipcode'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <span class="text-danger"><?php echo e($message); ?></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                  </div>
                  <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 mb-3   ">
                    <label>Home Contact Number <span class="red">*</span></label>
                    <input type="text" class=" pif form-control" name="home_contact_number"
                      id="home_contact_number" placeholder="Enter home contact number" value="<?php echo $student->home_contact_number; ?>">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['home_contact_number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <span class="text-danger"><?php echo e($message); ?></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                  </div>
                  <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-3 ">
                    <div class="d-flex set-gap align-items-center justify-content-end">
                      <button class="btn btn-primary rounded" type="submit">Save</button>
                      <button class="btn btn-secondary" type="button">Cancel</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>

            <div class="infoContent" id="EduSummary">
              <form action="<?php echo e($eduurl); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div class="row">
                  <div class="col-md-12">
                    <h2 class="mb-3">Education Summary</h2>
                  </div>
                  <div class="col-12 col-sm-12 col-md-3 col-lg-6 col-xl-2 mb-3 ">
                    <label>Country of Education <span class="red">*</span></label>
                    <select name="country_of_education" id="country_of_education" class="pif form-control select2">
                      <option value="" <?php echo $student->country_of_education == '' ? 'Selected' : ''; ?>>Select
                      </option>
                      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                        <option value="<?php echo e($row->name); ?>"
                          <?php echo e($student->country_of_education == $row->name ? 'Selected' : ''); ?>>
                          <?php echo e($row->name); ?>

                        </option>
                      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                    </select>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['country_of_education'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <span class="text-danger"><?php echo e($message); ?></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                  </div>
                  <div class="col-12 col-sm-12 col-md-5 col-lg-6 col-xl-4 mb-3 ">
                    <label>Highest Level of Education <span class="red">*</span></label>
                    <select name="highest_level_of_education" id="highest_level_of_education"
                      class=" pif form-control select2">
                      <option value="" <?php echo e($student->highest_level_of_education == '' ? 'Selected' : ''); ?>>
                        Select
                      </option>
                      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $levels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                        <option value="<?php echo e($row->level); ?>"
                          <?php echo e($student->highest_level_of_education == $row->level ? 'Selected' : ''); ?>>
                          <?php echo e($row->level); ?>

                        </option>
                      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                    </select>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['highest_level_of_education'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <span class="text-danger"><?php echo e($message); ?></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                  </div>
                  <div class="col-12 col-sm-12 col-md-5 col-lg-6 col-xl-4 mb-3 ">
                    <label>Grading Scheme <span class="red">*</span></label>
                    <select name="grading_scheme" id="grading_scheme" class="pif form-control select2">
                      <option value="" <?php echo e($student->grading_scheme == '' ? 'selected' : ''); ?>>Select</option>
                      <?php
                        $gradingSchemes = ['Percentage scale (0-100)', 'Grade Points (10 scale)', 'Grade (A to E)'];
                      ?>

                      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $gradingSchemes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $scheme): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                        <option value="<?php echo e($scheme); ?>"
                          <?php echo e($student->grading_scheme == $scheme ? 'selected' : ''); ?>>
                          <?php echo e($scheme); ?>

                        </option>
                      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                    </select>

                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['grading_scheme'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <span class="text-danger"><?php echo e($message); ?></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                  </div>
                  <div class="col-12 col-sm-12 col-md-3 col-lg-6 col-xl-2 mb-3 ">
                    <label>Grade Average <span class="red">*</span></label>
                    <input type="text" class=" pif form-control" name="grade_average" id="grade_average"
                      placeholder="Enter Grade Average" value="<?php echo e($student->grade_average); ?>">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['grade_average'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <span class="text-danger"><?php echo e($message); ?></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                  </div>
                  <div class="col-md-12">
                    <div class="d-flex set-gap align-items-center justify-content-end">
                      <button class="btn btn-primary rounded" type="submit">Save</button>
                      <button class="btn btn-secondary" type="button">Cancel</button>
                    </div>

                  </div>
                </div>
              </form>
            </div>

            <div class="infoContent pb-0 mb-3" id="SchAtd">
              <div class="row">
                <div class="col-md-12">
                  <div class="d-flex set-gap align-items-end justify-content-between">
                    <h2>Schools Attended</h2>
                    <button style="float:right" class="btn btn-primary" onclick="toggleSchoolAttendedForm()">Add
                      Attended
                      School<i class="fa fa-plus css-1a2afmv ml-2"></i></button>
                  </div>

                </div>
              </div>

              <form action="<?php echo e($schoolurl); ?>" method="post" class="school-attended-form hide-this mt-3">
                <?php echo csrf_field(); ?>
                <div class="row">
                  <div class="col-md-3">
                    <label>Country of Institution <span class="red">*</span></label>
                    <select name="country_of_institution" class=" pif form-control select2">
                      <option value="">Select</option>
                      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                        <option value="<?php echo e($c->name); ?>"><?php echo e($c->name); ?></option>
                      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                    </select>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['country_of_institution'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <span class="text-danger"><?php echo e($message); ?></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                  </div>
                  <div class="col-md-3">
                    <label>Name of Institution <span class="red">*</span></label>
                    <input type="text" class="" name="name_of_institution" id="name_of_institution"
                      placeholder="Enter Name of Institution" required>
                  </div>
                  <div class="col-md-3">
                    <label>Level of Education <span class="red">*</span></label>
                    <select name="level_of_education" id="level_of_education" class=" pif form-control select2">
                      <option value="">Select
                      </option>
                      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $levels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                        <option value="<?php echo e($row->level); ?>"><?php echo e($row->level); ?></option>
                      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                    </select>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['level_of_education'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <span class="text-danger"><?php echo e($message); ?></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                  </div>
                  <div class="col-md-3">
                    <label>Primary Language of Instruction <span class="red">*</span></label>
                    <input type="text" class="" name="primary_language_of_instruction"
                      id="primary_language_of_instruction" placeholder="Enter Primary Language of Instruction" required>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <label>Attended Institution From <span class="red">*</span></label>
                    <input type="date" class="" name="attended_institution_from"
                      id="attended_institution_from" placeholder="Enter Attended Institution From" required>
                  </div>
                  <div class="col-md-4">
                    <label>Attended Institution To <span class="red">*</span></label>
                    <input type="date" class="" name="attended_institution_to" id="attended_institution_to"
                      placeholder="Enter Attended Institution to" required>
                  </div>
                  <div class="col-md-4">
                    <label>Degree Name <span class="red">*</span></label>
                    <input type="text" class="" name="degree_name" id="degree_name"
                      placeholder="Enter Degree Name">
                  </div>
                  <div class="clearfix"></div>
                  <div class="col-md-4">
                    <label style="font-size:18px!important; font-weight:400!important; color:#606a84!important;">I
                      have
                      graduated from this institution <span class="red">*</span></label>
                    <label class="checkCircle" style="margin-top:10px!important">
                      Yes
                      <input class="form-check-input" type="radio" name="graduated_from_this" value="1"
                        checked>
                      <span class="checkmark"></span>
                    </label>
                    <label class="checkCircle" style="margin-top:10px!important">
                      No
                      <input class="form-check-input" type="radio" name="graduated_from_this" value="0">
                      <span class="checkmark"></span>
                    </label>
                  </div>
                  <div class="clearfix"></div>
                  <div class="col-md-4 grdf">
                    <label>Graduation Date </label>
                    <input type="date" class="" name="graduation_date" id="graduation_date"
                      placeholder="Enter Graduation Date" required>
                  </div>
                  <div class="clearfix"></div>
                  <div class="col-md-4 grdf">
                    <label style="margin-top:0px!important"></label>
                    <label class="checkRyt" style="margin-top:0px!important">
                      I have the physical certificate for this degree
                      <input class="form-check-input" type="checkbox" name="have_physical_certificate"
                        id="have_physical_certificate" value="1">
                      <span class="checkmark"></span>
                    </label>
                  </div>
                  <div class="clearfix"></div>
                  <div class="col-md-12" style="margin-top:40px">
                    <h3>School Address Detail</h3>
                  </div>
                  <div class="col-md-4">
                    <label>Address <span class="red">*</span></label>
                    <input type="text" class="" name="address" id="address" placeholder="Enter address"
                      required>
                  </div>
                  <div class="col-md-3">
                    <label>City/Town <span class="red">*</span></label>
                    <input type="text" class="" name="city" id="scity" placeholder="Enter city"
                      required>
                  </div>
                  <div class="col-md-3">
                    <label>Province</label>
                    <input type="text" class="" name="state" id="sstate"
                      placeholder="Enter State/Province..." required>
                  </div>
                  <div class="col-md-2">
                    <label>Postal/Zip Code</label>
                    <input type="number" class="" name="zipcode" id="szipcode"
                      placeholder="Enter Postal/Zipcode">
                  </div>

                  <div class="col-md-12">
                    <div class="d-flex set-gap align-items-center justify-content-end">
                      <button class="btn btn-primary rounded" type="submit">Save</button>
                      <button class="btn btn-secondary" type="button">Cancel</button>
                    </div>
                  </div>
                </div>
              </form>
              <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $schools; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                <div class="row SchAtdResult" id="schitem<?php echo e($row->id); ?>">
                  <div class="col-md-4 black">
                    <h3>
                      <?php echo $row->name_of_institution; ?>
                    </h3>
                    <h4>
                      <?php echo $row->degree_name; ?>
                    </h4>
                  </div>
                  <div class="col-md-8 light">
                    <?php if ($row->graduated_from_this == 1) { ?>
                    <h3>
                      <svg role="img" width="18" height="18" fill="none"
                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true" style="fill:#58BE91; margin-right:5px">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M19.707 6.293a1 1 0 010 1.414L9 18.414l-4.707-4.707a1 1 0 111.414-1.414L9 15.586l9.293-9.293a1 1 0 011.414 0z">
                        </path>
                      </svg>
                      <b>Graduated from Institution</b>
                      <?php echo getFormattedDate($row->graduation_date, 'd M , Y'); ?>
                    </h3>
                    <?php if ($row->have_physical_certificate == 1) { ?>
                    <h3>
                      <svg role="img" width="18" height="18" fill="none"
                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true" style="fill:#58BE91; margin-right:5px">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M19.707 6.293a1 1 0 010 1.414L9 18.414l-4.707-4.707a1 1 0 111.414-1.414L9 15.586l9.293-9.293a1 1 0 011.414 0z">
                        </path>
                      </svg>
                      <b>Level:</b> 3-Year Bachelors Degree
                    </h3>
                    <?php } ?>
                    <?php } ?>
                    <h3>
                      <b>Level:</b>
                      <?php echo $row->level_of_education; ?>
                    </h3>
                    <h3>
                      Attended from</b>
                      <?php echo getFormattedDate($row->attended_institution_from, 'd M , Y'); ?>
                      <b>to</b>
                      <?php echo getFormattedDate($row->attended_institution_to, 'd M , Y'); ?>
                    </h3>
                    <h3>
                      <b>Language of instruction:</b>
                      <?php echo $row->primary_language_of_instruction; ?>
                    </h3>
                    <h3>
                      <b>Address:</b>
                      <?php echo $row->address; ?>,
                      <?php echo $row->city; ?>,
                      <?php echo $row->state; ?>
                      <?php echo $row->zipcode; ?><br>
                      <?php echo $row->country_of_institution; ?>
                    </h3>
                  </div>
                  <div class="col-md-12">
                    <button onclick="schItemTgl('<?php echo $row->id; ?>')" class="btn btn-primary rounded">Expand</button>
                    <button onclick="dltsch('<?php echo $row->id; ?>')" class="deleteBtn">Delete</button>
                  </div>
                  <div class="col-md-12 bdr"></div>
                </div>
                <div class="hide-this" id="schitemeditform<?php echo e($row->id); ?>">
                  <form action="<?php echo e($editschoolurl); ?>" method="post" class="school-attended-form-edit">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="id" value="<?php echo e($row->id); ?>">
                    <div class="row">
                      <div class="col-md-3">
                        <label>Country of Institution <span class="red">*</span></label>
                        <select name="country_of_institution" class=" pif select2">
                          <option value="">Select</option>
                          <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                            <option value="<?php echo e($c->name); ?>"
                              <?php echo e($c->name == $row->country_of_institution ? 'selected' : ''); ?>>
                              <?php echo e($c->name); ?></option>
                          <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                        </select>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['country_of_institution'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                          <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                      </div>
                      <div class="col-md-3">
                        <label>Name of Institution <span class="red">*</span></label>
                        <input type="text" class="" name="name_of_institution" id="name_of_institution"
                          placeholder="Enter Name of Institution" value="<?php echo e($row->name_of_institution); ?>" required>
                      </div>
                      <div class="col-md-3">
                        <label>Level of Education <span class="red">*</span></label>
                        <select name="level_of_education" id="level_of_education" class=" pif select2">
                          <option value="">Select
                          </option>
                          <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $levels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                            <option value="<?php echo e($l->level); ?>"
                              <?php echo e($l->level == $row->level_of_education ? 'selected' : ''); ?>>
                              <?php echo e($l->level); ?></option>
                          <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                        </select>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['level_of_education'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                          <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                      </div>
                      <div class="col-md-3">
                        <label>Primary Language of Instruction <span class="red">*</span></label>
                        <input type="text" class="" name="primary_language_of_instruction"
                          id="primary_language_of_instruction" placeholder="Enter Primary Language of Instruction"
                          value="<?php echo e($row->primary_language_of_instruction); ?>" required>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <label>Attended Institution From <span class="red">*</span></label>
                        <input type="date" class="" name="attended_institution_from"
                          id="attended_institution_from" placeholder="Enter Attended Institution From"
                          value="<?php echo e($row->attended_institution_from); ?>" required>
                      </div>
                      <div class="col-md-4">
                        <label>Attended Institution To <span class="red">*</span></label>
                        <input type="date" class="" name="attended_institution_to"
                          id="attended_institution_to" placeholder="Enter Attended Institution to"
                          value="<?php echo e($row->attended_institution_to); ?>" required>
                      </div>
                      <div class="col-md-4">
                        <label>Degree Name <span class="red">*</span></label>
                        <input type="text" class="" name="degree_name" id="degree_name"
                          placeholder="Enter Degree Name" value="<?php echo e($row->degree_name); ?>">
                      </div>
                      <div class="clearfix"></div>
                      <div class="col-md-4">
                        <label style="font-size:18px!important; font-weight:400!important; color:#606a84!important;">I
                          have
                          graduated from this institution <span class="red">*</span></label>
                        <label class="checkCircle" style="margin-top:10px!important">
                          Yes
                          <input class="form-check-input" type="radio" name="graduated_from_this" value="1"
                            <?php echo $row->graduated_from_this == '1' ? 'checked' : ''; ?>>
                          <span class="checkmark"></span>
                        </label>
                        <label class="checkCircle" style="margin-top:10px!important">
                          No
                          <input class="form-check-input" type="radio" name="graduated_from_this" value="0"
                            <?php echo $row->graduated_from_this == '0' ? 'checked' : ''; ?>>
                          <span class="checkmark"></span>
                        </label>
                      </div>
                      <div class="clearfix"></div>
                      <div class="col-md-4 grdf">
                        <label>Graduation Date </label>
                        <input type="date" class="" name="graduation_date" id="graduation_date"
                          placeholder="Enter Graduation Date" value="<?php echo $row->graduation_date; ?>" required>
                      </div>
                      <div class="clearfix"></div>
                      <div class="col-md-4 grdf">
                        <label style="margin-top:0px!important"></label>
                        <label class="checkRyt" style="margin-top:0px!important">
                          I have the physical certificate for this degree
                          <input class="form-check-input" type="checkbox" name="have_physical_certificate"
                            id="have_physical_certificate" value="1" <?php echo $row->have_physical_certificate == '1' ? 'checked' : ''; ?>>
                          <span class="checkmark"></span>
                        </label>
                      </div>
                      <div class="clearfix"></div>
                      <div class="col-md-12" style="margin-top:40px">
                        <h3>School Address Detail</h3>
                      </div>
                      <div class="col-md-4">
                        <label>Address <span class="red">*</span></label>
                        <input type="text" class="" name="address" id="address"
                          placeholder="Enter address" value="<?php echo $row->address; ?>" required>
                      </div>
                      <div class="col-md-3">
                        <label>City/Town <span class="red">*</span></label>
                        <input type="text" class="" name="city" id="scity" placeholder="Enter city"
                          value="<?php echo $row->city; ?>" required>
                      </div>
                      <div class="col-md-3">
                        <label>Province</label>
                        <input type="text" class="" name="state" id="sstate"
                          placeholder="Enter State/Province..." value="<?php echo $row->state; ?>" required>
                      </div>
                      <div class="col-md-2">
                        <label>Postal/Zip Code</label>
                        <input type="number" class="" name="zipcode" id="szipcode"
                          value="<?php echo $row->zipcode; ?>" placeholder="Enter Postal/Zipcode">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">

                        <div class="d-flex set-gap align-items-center justify-content-end">
                          <button class="btn btn-primary rounded" type="submit">Save</button>
                          <button class="btn btn-secondary" type="button"
                            onclick="schItemTgl('<?php echo e($row->id); ?>')">Cancel</button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
            </div>

            <div class="infoContent pt-0" id="TestScores">
              <form action="<?php echo e(url('student/update-test-score/')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div class="row">
                  <div class="col-md-12">
                    <h2 class="mb-3">Test Scores</h2>
                  </div>
                  <div class="col-12 col-sm-12 col-md-4 col-lg-6   col-xl-3  mb-3">
                    <label>English Exam Type</label>
                    <select name="english_exam_type" id="english_exam_type" class=" pif form-control select2"
                      onchange="testScoreMagic()">
                      <option value="" <?php echo $student->english_exam_type == '' ? 'Selected' : ''; ?>>Select
                      </option>
                      <?php
                        $exmtype = [
                            'I dont have this',
                            'I will provide this later',
                            'TOEFL',
                            'IELTS',
                            'Duolingo English Test',
                            'PTE',
                        ];
                      ?>
                      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $exmtype; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exmtyp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                        <option value="<?php echo e($exmtyp); ?>"
                          <?php echo e($student->english_exam_type == $exmtyp ? 'Selected' : ''); ?>>
                          <?php echo e($exmtyp); ?>

                        </option>
                      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                    </select>
                  </div>
                  <div class="col-12 col-sm-12 col-md-4 col-lg-6   col-xl-3  mb-3 ">
                    <div class="allfh" id="date_of_exam_div">
                      <label>Date of Exam</label>
                      <input type="date" class=" pif form-control" name="date_of_exam" id="date_of_exam"
                        placeholder="Enter Grade Average" value="<?php echo $student->date_of_exam; ?>">
                    </div>

                  </div>
                  <div class="col-12 col-sm-12 col-md-4 col-lg-6   col-xl-3  mb-3">
                    <div class=" allfh testpartsdiv" id="listening_score_div">
                      <label>Listening</label>
                      <input type="number" class=" pif form-control" name="listening_score" id="listening_score"
                        placeholder="Enter Exact Score Listening" value="<?php echo $student->listening_score; ?>" step="any"
                        min="0">
                    </div>

                  </div>
                  <div class="col-12 col-sm-12 col-md-4 col-lg-6   col-xl-3  mb-3 ">
                    <div class="allfh testpartsdiv" id="reading_score_div">
                      <label class="hideM">Reading</label>
                      <input type="number" class=" pif form-control" name="reading_score" id="reading_score"
                        placeholder="Enter Exact Score Reading" value="<?php echo $student->reading_score; ?>" step="any"
                        min="0">
                    </div>

                  </div>
                  <div class="col-12 col-sm-12 col-md-4 col-lg-6   col-xl-3  mb-3 ">
                    <div class="allfh testpartsdiv" id="writing_score_div">
                      <label class="hideM">Writing</label>
                      <input type="number" class=" pif form-control" name="writing_score" id="writing_score"
                        placeholder="Enter Exact Score Writing" value="<?php echo $student->writing_score; ?>" step="any"
                        min="0">
                    </div>

                  </div>
                  <div class="col-12 col-sm-12 col-md-4 col-lg-6   col-xl-3  mb-3">
                    <div class=" allfh testpartsdiv" id="speaking_score_div">
                      <label class="hideM">Speaking</label>
                      <input type="number" class=" pif form-control" name="speaking_score" id="speaking_score"
                        placeholder="Enter Exact Score Speaking" value="<?php echo $student->speaking_score; ?>" step="any"
                        min="0">
                    </div>

                  </div>
                  <div class="col-12 col-sm-12 col-md-4 col-lg-6   col-xl-3  mb-3 ">
                    <div class="allfh" id="overall_score_div">
                      <label class="hideM">Overall Score</label>
                      <input type="number" class=" pif form-control" name="overall_score" id="overall_score"
                        placeholder="Enter Exact overall score" value="<?php echo $student->overall_score; ?>" step="any"
                        min="0">
                    </div>

                  </div>
                  <div class="col-md-12">
                    <div class="d-flex set-gap align-items-center justify-content-end">
                      <button class="btn btn-primary rounded" type="submit">Save</button>
                      <button class="btn btn-secondary" type="button">Cancel</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>

            <div class="infoContent" id="AddQuali">
              <div class="row">
                <div class="col-md-12">
                  <h2 class="mb-3">Additional Qualifications</h2>
                </div>
              </div>
              <form class="mb-4" action="<?php echo e(url('student/update-gre-score')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="id" value="<?php echo e($student->id); ?>">
                <div class="row">
                  <div class="col-md-12">
                    <div class="d-flex set-gap align-items-center justify-content-between">
                      <h6 class="scrose">I have GRE exam scores</h6>
                      <div class="OnOff">
                        <input onclick="toggleGRE()" type="checkbox" name="gre" id="gre"
                          <?php echo e($student->gre == '1' ? 'checked' : ''); ?> value="1">
                        <label for="gre"></label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="<?php echo e($student->gre == '0' || $student->gre == null ? 'hide-this' : ''); ?>" id="greDiv">
                  <div class="row">
                    <div class="col-12 col-sm-12 col-md-4 col-lg-6   col-xl-3  mb-3">
                      <label>Date of Exam</label>
                      <input type="date" class="" name="gre_exam_date" placeholder="Exam Date"
                        value="<?php echo e($student->gre_exam_date); ?>" required>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-6   col-xl-3  mb-3">
                      <label>Verbal</label>
                      <div class="d-flex set-gap align-items-center justify-content-between">
                        <input type="number" class="" name="gre_v_score" placeholder="Score"
                          value="<?php echo e($student->gre_v_score); ?>" max="170" step="any" min="0" required>
                        <input type="number" class="" name="gre_v_rank" placeholder="Rank"
                          value="<?php echo e($student->gre_v_rank); ?>" step="any" max="100" min="0" required>
                      </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-6   col-xl-3  mb-3">
                      <label>Quantitative</label>
                      <div class="d-flex set-gap align-items-center justify-content-between">
                        <input type="number" class="" name="gre_q_score" placeholder="Score"
                          value="<?php echo e($student->gre_q_score); ?>" max="170" step="any" min="0" required>
                        <input type="number" class="" name="gre_q_rank" placeholder="Rank"
                          value="<?php echo e($student->gre_q_rank); ?>" step="any" max="100" min="0" required>
                      </div>

                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-6   col-xl-3  mb-3">
                      <label>Writing</label>
                      <div class="d-flex set-gap align-items-center justify-content-between">
                        <input type="number" class="" name="gre_w_score" placeholder="Score"
                          value="<?php echo e($student->gre_w_score); ?>" max="6" step="any" min="0" required>
                        <input type="number" class="" name="gre_w_rank" placeholder="Rank"
                          value="<?php echo e($student->gre_w_rank); ?>" step="any" max="100" min="0" required>
                      </div>

                    </div>
                    <div class="col-md-12">
                      <div class="d-flex set-gap align-items-center justify-content-end">
                        <button class="btn btn-primary rounded" type="submit">Save</button>
                        <button class="btn btn-secondary" type="button">Cancel</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>

              <form class="mb-4" action="<?php echo url('student/update-gmat-score'); ?>" method="post">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="id" value="<?php echo $student->id; ?>">
                <div class="row">
                  <div class="col-md-12">
                    <div class="d-flex set-gap align-items-center justify-content-between">
                      <h6 class="scrose">I have GRE exam scores</h6>
                      <div class="OnOff">
                        <input onclick="toggleGMAT()" type="checkbox" name="gmat" id="gmat"
                          <?php echo $student->gmat == '1' ? 'checked' : ''; ?> value="1">
                        <label for="gmat"></label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="<?php echo $student->gmat == '0' || $student->gmat == null ? 'hide-this' : ''; ?>" id="gmatDiv">
                  <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 mb-3 ">

                      <label>Date of Exam</label>
                      <input type="date" class="" name="gmat_exam_date" placeholder="Exam Date"
                        value="<?php echo $student->gmat_exam_date; ?>" required>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 mb-3 ">
                      <label>Verbal</label>
                      <div class="d-flex set-gap align-items-center justify-content-between">
                        <input type="number" class="" name="gmat_v_score" placeholder="Score"
                          value="<?php echo $student->gmat_v_score; ?>" max="51" min="0" step="any" required>
                        <input type="number" class="" name="gmat_v_rank" placeholder="Rank"
                          value="<?php echo $student->gmat_v_rank; ?>" step="any" max="100" min="0" required>
                      </div>

                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 mb-3 ">
                      <label>Quantitative</label>
                      <div class="d-flex set-gap align-items-center justify-content-between">

                        <input type="number" class="" name="gmat_q_score" placeholder="Score"
                          value="<?php echo $student->gmat_q_score; ?>" max="51" min="0" step="any" required>
                        <input type="number" class="" name="gmat_q_rank" placeholder="Rank"
                          value="<?php echo $student->gmat_q_rank; ?>" step="any" max="100" min="0" required>
                      </div>

                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 mb-3 ">
                      <label>Writing</label>
                      <div class="d-flex set-gap align-items-center justify-content-between">
                        <input type="number" class="" name="gmat_w_score" placeholder="Score"
                          value="<?php echo $student->gmat_w_score; ?>" max="6" min="0" step="any" required>
                        <input type="number" class="" name="gmat_w_rank" placeholder="Rank"
                          value="<?php echo $student->gmat_w_rank; ?>" step="any" max="100" min="0" required>
                      </div>

                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 mb-3 ">
                      <label>Integrated reasoning</label>
                      <div class="d-flex set-gap align-items-center justify-content-between">
                        <input type="number" class="" name="gmat_ir_score" placeholder="Score"
                          value="<?php echo $student->gmat_ir_score; ?>" max="8" min="0" step="any">
                        <input type="number" class="" name="gmat_ir_rank" placeholder="Rank"
                          value="<?php echo $student->gmat_ir_rank; ?>" step="any" max="100" min="0">
                      </div>

                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 mb-3 ">
                      <label>Total</label>
                      <div class="d-flex set-gap align-items-center justify-content-between">
                        <input type="number" class="" name="gmat_total_score" placeholder="Score"
                          value="<?php echo $student->gmat_total_score; ?>" min="200" max="800" step="any" required>
                        <input type="number" class="" name="gmat_total_rank" placeholder="Rank"
                          value="<?php echo $student->gmat_total_rank; ?>" step="any" max="100" min="0" required>
                      </div>

                    </div>
                    <div class="col-md-12">
                      <div class="d-flex set-gap align-items-center justify-content-end">
                        <button class="btn btn-primary rounded" type="submit">Save</button>
                        <button class="btn btn-secondary" type="button">Cancel</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>

              <form class="mb-4" action="<?php echo url('student/update-sat-score'); ?>" method="post">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="id" value="<?php echo $student->id; ?>">
                <div class="row">
                  <div class="col-md-12">
                    <div class="d-flex set-gap align-items-center justify-content-between">
                      <h6 class="scrose">I have SAT exam scores</h6>

                      <div class="OnOff">
                        <input onclick="toggleSAT()" type="checkbox" name="sat" id="sat"
                          <?php echo $student->sat == '1' ? 'checked' : ''; ?> value="1">
                        <label for="sat"></label>
                      </div>
                    </div>

                  </div>
                </div>
                <div class="<?php echo $student->sat == '0' || $student->sat == null ? 'hide-this' : ''; ?>" id="satDiv">
                  <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 mb-3">
                      <label>Date of Exam</label>
                      <input type="date" class="" name="sat_exam_date" placeholder="Exam Date"
                        value="<?php echo $student->sat_exam_date; ?>" required>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 mb-3">
                      <label>Reasoing Test Points</label>
                      <input type="number" class="" name="sat_reasoning_point"
                        placeholder="SAT Reasoning Point" value="<?php echo $student->sat_reasoning_point; ?>" step="any" min="0"
                        max="1600" required>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 mb-3">
                      <label>SAT Subject Test Point</label>
                      <input type="number" class="" name="sat_subject_point" placeholder="SAT Subject Points"
                        value="<?php echo $student->sat_subject_point; ?>" step="any" min="0" max="800" required>
                    </div>
                    <div class="col-md-12">
                      <div class="d-flex set-gap align-items-center justify-content-end">
                        <button class="btn btn-primary rounded" type="submit">Save</button>
                        <button class="btn btn-secondary" type="button">Cancel</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>

            <div class="infoContent" id="BackInfo">
              <form action="<?php echo e(url('student/update-background-info')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="id" value="<?php echo $student->id; ?>">
                <div class="row">
                  <div class="col-md-12">
                    <h2 class="mb-3">Background Information</h2>
                  </div>
                  <div class="col-md-12 mb-3">
                    <label>Have you been refused a visa from Canada, USA, UK, Australia more...? <i
                        class="fa fa-info-circle"
                        title="The schools listed share biometric information. Hence, visa refusal from these countries might result in a low visa chance approval rate."></i>
                      <span class="red">*</span></label>
                    <select class=" select2" name="refused_visa">
                      <option value="" <?php echo $student->refused_visa == '' ? 'Selected' : ''; ?>>
                        Select</option>
                      <option value="Yes" <?php echo $student->refused_visa == 'Yes' ? 'Selected' : ''; ?>>Yes
                      </option>
                      <option value="No" <?php echo $student->refused_visa == 'No' ? 'Selected' : ''; ?>>No</option>
                    </select>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['refused_visa'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <span class="text-danger"><?php echo e($message); ?></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                  </div>
                  <div class="col-md-12 mb-3">
                    <label>Do you have a valid Study Permit / Visa? <i class="fa fa-info-circle"></i></label>
                    <select class=" select2" name="valid_study_permit">
                      <option value="" <?php echo $student->valid_study_permit == '' ? 'Selected' : ''; ?>>Select
                      </option>
                      <option value="Yes" <?php echo $student->valid_study_permit == 'Yes' ? 'Selected' : ''; ?>>Yes
                      </option>
                      <option value="No" <?php echo $student->valid_study_permit == 'No' ? 'Selected' : ''; ?>>No
                      </option>
                    </select>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['valid_study_permit'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <span class="text-danger"><?php echo e($message); ?></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                  </div>
                  <div class="col-md-12 mb-3">
                    <label>If you answered "Yes" to any of the questions above, please provide more
                      details below: <span class="red">*</span></label>
                    <textarea class="" name="visa_note"><?php echo e($student->visa_note); ?></textarea>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['visa_note'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <span class="text-danger"><?php echo e($message); ?></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                  </div>
                  <div class="col-md-12">
                    <div class="d-flex set-gap align-items-center justify-content-end">
                      <button class="btn btn-primary rounded" type="submit">Save</button>
                      <button class="btn btn-secondary" type="button">Cancel</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="infoContent" id="UplodDoc">
              <form action="<?php echo e(url('student/upload-documents')); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="row">
                  <div class="col-md-12">
                    <h2>Upload Documents</h2>
                    <div class="slogan" style="margin-top:10px">The acceptable formats of the photocopy
                      are .PDF, .JPEG or
                      .PNG</div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label>Document Name</label>
                    <input type="text" name="document_name" placeholder="Enter Document Name..."
                      value="<?php echo e(old('document_name')); ?>">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['document_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <span class="text-danger"><?php echo e($message); ?></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label>Upload Document</label>
                    <div class="input-group maininput b-0 ">
                      <input type="text" class="inputbuts">

                      <div class="btn btn-primary rounded">
                        <div class="d-flex align-items-center ">
                          <span class="fa fa-folder-open"></span>
                          <span class="image-preview-input-title">Browse</span>
                        </div>
                        <input type="file" accept="image/png, image/jpeg, image/gif" name="doc" />
                      </div>
                      </span>
                      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['doc'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-danger"><?php echo e($message); ?></span>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="d-flex set-gap align-items-center justify-content-end">
                      <button class="btn btn-primary rounded" type="submit">Save</button>
                      <button class="btn btn-secondary" type="button">Cancel</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($stdDocs->count() > 0): ?>
              <div class="infoContent" id="docTbl">
                <div class="row">
                  <div class="col-md-12">
                    <h2>Uploaded Documents</h2>
                  </div>
                </div>
                <table class="table">
                  <thead class="thead-inverse">
                    <tr>
                      <th>S.N.</th>
                      <th>Doc Name</th>
                      <th>File</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $i = 1;
                    ?>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $stdDocs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                      <tr>
                        <td scope="row"><?php echo e($i); ?></td>
                        <td><?php echo e($row->doc_name); ?></td>
                        <td>
                          <a target="blank" href="<?php echo e(storage_url($row->imgpath)); ?>"
                            class="btn btn-sm btn-info">View</a> |
                          <a target="blank" href="<?php echo e(storage_url($row->imgpath)); ?>"
                            class="btn btn-sm btn-secondary" download>Download</a>
                        </td>
                      </tr>
                      <?php
                        $i++;
                      ?>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                  </tbody>
                </table>
              </div>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Content -->
  <script>
    function toggleGRE() {
      var radioValue = $("input[name='gre']:checked").val();
      //alert(radioValue);
      if (radioValue == undefined) {
        $("#greDiv").hide();
      } else if (radioValue == '1') {
        $("#greDiv").show();
      }
    }

    function toggleGMAT() {
      var radioValue = $("input[name='gmat']:checked").val();
      //alert(radioValue);
      if (radioValue == undefined) {
        $("#gmatDiv").hide();
      } else if (radioValue == '1') {
        $("#gmatDiv").show();
      }
    }

    function toggleSAT() {
      var radioValue = $("input[name='sat']:checked").val();
      //alert(radioValue);
      if (radioValue == undefined) {
        $("#satDiv").hide();
      } else if (radioValue == '1') {
        $("#satDiv").show();
      }
    }

    $(document).ready(function() {
      testScoreMagic();
      $("#english_exam_type").on("change", function(event) {
        testScoreMagic();
      });
      gradeSystem();
      $("#grading_scheme").on("change", function(event) {
        gradeSystem();
      });
    });

    function schItemTgl(id) {
      //alert(id);
      $("#schitem" + id).toggle();
      $("#schitemeditform" + id).toggle();
    }


    function dltsch(id) {
      //alert(id);
      var deleteConfirm = confirm("Are you sure?");
      if (deleteConfirm == true) {
        if (id != '') {
          $.ajax({
            url: "<?php echo e(url('/student/delete-school/')); ?>/" + id,
            method: "GET",
            success: function(data) {
              $("#schitem" + id).remove();
              var msg = 'Record has been deleted successfully.';
              var ty = 'success';
              showToast(msg, ty);
            }
          });
        }
      }
    }

    function editSchool(id) {
      alert(id);
      var deleteConfirm = confirm("Are you sure?");
      if (deleteConfirm == true) {
        if (id != '') {
          $.ajax({
            url: "<?php echo e(url('/student/delete-school/')); ?>/" + id,
            method: "GET",
            success: function(data) {
              $("#schitem" + id).remove();
              var msg = 'Record has been deleted successfully.';
              var ty = 'success';
              showToast(msg, ty);
            }
          });
        }
      }
    }

    function toggleSchoolAttendedForm() {
      $(".school-attended-form").toggle();
    }

    $(document).ready(function() {
      $("input[name='graduated_from_this']").on("click", function(event) {
        var radioValue = $("input[name='graduated_from_this']:checked").val();
        if (radioValue == '0') {
          $(".grdf").hide();
          $("#graduation_date").attr("required", false);
        } else if (radioValue == '1') {
          $(".grdf").show();
          $("#graduation_date").attr("required", true);
        }
      });
    });

    function testScoreMagic() {
      var eet = $("#english_exam_type").val();
      if (eet == 'I dont have this' || eet == 'I will provide this later') {
        $("#date_of_exam_div,#listening_score_div,#reading_score_div,#writing_score_div,#speaking_score_div,#overall_score_div")
          .hide();
      }
      if (eet == 'TOEFL') {
        $("#listening_score_div,#reading_score_div,#writing_score_div,#speaking_score_div").show();
        $("#overall_score_div").hide();
        $("#listening_score,#reading_score,#writing_score,#speaking_score").attr("max", "30");
      }
      if (eet == 'IELTS') {
        $("#date_of_exam_div,#listening_score_div,#reading_score_div,#writing_score_div,#speaking_score_div").show();
        $("#overall_score_div").hide();
        $("#listening_score,#reading_score,#writing_score,#speaking_score").attr("max", "9");
      }
      if (eet == 'Duolingo English Test') {
        $("#listening_score_div,#reading_score_div,#writing_score_div,#speaking_score_div").hide();
        $("#date_of_exam_div,#overall_score_div").show();
        $("#overall_score").attr("max", "160");
      }
      if (eet == 'PTE') {
        $("#listening_score_div,#reading_score_div,#writing_score_div,#speaking_score_div,#date_of_exam_div,#overall_score_div")
          .show();
        $("#listening_score,#reading_score,#writing_score,#speaking_score,#overall_score").attr("max", "90");
      }
    }

    function gradeSystem() {
      var eet = $("#grading_scheme").val();
      if (eet == 'Percentage scale (0-100)') {
        $("#grade_average").attr("max", "100");
      }
      if (eet == 'Grade Points (10 scale)') {
        $("#grade_average").attr("max", "10");
      }
    }

    $(document).ready(function() {
      $('#testscoreform').on('submit', function(event) {
        event.preventDefault();
        $.ajax({
          url: "<?php echo url('Common/updateStudentDetail'); ?>",
          method: "POST",
          data: new FormData(this),
          contentType: false,
          cache: false,
          processData: false,
          success: function(result) {
            location.reload(true);
          }
        })
      });
    });

    jQuery(document).ready(function($) {
      $(function() {
        $(".scrollTo a").click(function(e) {
          var destination = $(this).attr('href');
          $(".scrollTo li").removeClass('active');
          $(this).parent().addClass('active');

          $('html, body').animate({
            scrollTop: $(destination).offset().top - 90
          }, 500);
        });
      });
      var totalHeight = $('#myHeader').height() + $('.proHead').height();
      $(window).scroll(function() {
        if ($(this).scrollTop() > totalHeight) {
          $('.proHead').addClass('sticky');
        } else {
          $('.proHead').removeClass('sticky');
        }
      })
    });
  </script>
  <script>
    $(document).on('click', '#close-preview', function() {
      $('.image-preview').popover('hide');
      // Hover befor close the preview
      $('.image-preview').hover(
        function() {
          $('.image-preview').popover('show');
        },
        function() {
          $('.image-preview').popover('hide');
        }
      );
    });

    $(function() {
      // Create the close button
      var closebtn = $('<button/>', {
        type: "button",
        text: 'x',
        id: 'close-preview',
        style: 'font-size: initial;',
      });
      closebtn.attr("class", "close pull-right");
      // Set the popover default content
      $('.image-preview').popover({
        trigger: 'manual',
        html: true,
        title: "<strong>Preview</strong>" + $(closebtn)[0].outerHTML,
        content: "There's no image",
        placement: 'bottom'
      });
      // Clear event
      $('.image-preview-clear').click(function() {
        $('.image-preview').attr("data-content", "").popover('hide');
        $('.image-preview-filename').val("");
        $('.image-preview-clear').hide();
        $('.image-preview-input input:file').val("");
        $(".image-preview-input-title").text("Browse");
      });
      // Create the preview image
      $(".image-preview-input input:file").change(function() {
        var img = $('<img/>', {
          id: 'dynamic',
          width: 250,
          height: 200
        });
        var file = this.files[0];
        var reader = new FileReader();
        // Set preview image into the popover data-content
        reader.onload = function(e) {
          $(".image-preview-input-title").text("Change");
          $(".image-preview-clear").show();
          $(".image-preview-filename").val(file.name);
          img.attr('src', e.target.result);
          $(".image-preview").attr("data-content", $(img)[0].outerHTML).popover("show");
        }
        reader.readAsDataURL(file);
      });
    });
  </script>
  <script>
    $("#upload").click(function() {
      $("#upload-file").trigger('click');
    });
  </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\reactwithlaravel.educationmalaysia.in\resources\views\front\student\profile.blade.php ENDPATH**/ ?>