<?php $__env->startPush('seo_meta_tag'); ?>
  <?php echo $__env->make('front.layouts.static_page_meta_tag', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('main-section'); ?>
  <section class="p-0">
    <div class="log-space">
      <div>
        <div class="row no-gutters position-relative log_rads">
          <div class="d-none d-md-block col-lg-6 col-md-5 bg-cover"
            style="background:#1f2431 url(<?php echo e(storage_cdn('front')); ?>/assets/img/log.png)no-repeat;">
            <div class="lui_9okt6">
              <div class="_loh_revu97">
                <div id="reviews-login">

                  <!-- Single Reviews -->
                  <div class="_loh_r96">
                    <div class="_bloi_quote"><i class="fa fa-quote-left"></i></div>
                    <div class="_loh_r92">
                      <h4>Good Services</h4>
                    </div>
                    <div class="_loh_r93">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.</p>
                    </div>
                    <div class="_loh_foot_r93">
                      <h4>Adam Wilsom</h4>
                      <span>Mak Founder</span>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-7 position-static p-2">
            <div class="log_wraps booking">
              <form action="<?php echo e(url('book-slot/save-slot')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div class="row align-items-center">

                  <div class="col-lg-6">
                    <div class="form-group">
                      <label>Select date</label>
                      <div class="input-group">
                        <div class="input-icon"><span class="ti-calendar"></span></div>
                        <input name="preferred_counselling_date" type="date" class="form-control b-0 pl-0"
                          placeholder="Select a date" value="<?php echo e(old('preferred_counselling_date')); ?>" required=""
                          min="<?php echo e(date('Y-m-d', strtotime('+1 day'))); ?>">
                      </div>
                      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['preferred_counselling_date'];
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

                  <div class="col-lg-6">
                    <div class="form-group">
                      <label>Select time</label>
                      <div class="input-group">
                        <div class="input-icon"><span class="ti-timer"></span></div>
                        <input name="preferred_counselling_time" type="time" class="form-control b-0 pl-0"
                          placeholder="Select a slot" value="<?php echo e(old('preferred_counselling_time')); ?>" required="">
                      </div>
                      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['preferred_counselling_time'];
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

                  <div class="col-lg-12">
                    <div class="form-group mb-0">
                      <label>Courses you’re interested in</label>
                      <div class="input-group">
                        <div class="input-icon"><span class="ti-search"></span></div>
                        <select name="intrested_course_category" class="form-control b-0 pl-0 bg-white" required>
                          <option value="">Select</option>
                          <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $courseCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                            <option value="<?php echo e($row->category_name); ?>"
                              <?php echo e($row->category_name == old('intrested_course_category') ? 'selected' : ''); ?>>
                              <?php echo e($row->category_name); ?>

                            </option>
                          <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                        </select>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['intrested_course_category'];
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

                  <div class="col-lg-12">
                    <div class="form-group">
                      <label>Where are you in your study abroad journey?</label>
                      <div class="input-group">
                        <select name="study_abroad_journey_status" class="form-control b-0 pl-0 bg-white">
                          <option value="">Select stage</option>
                          <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $sajs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                            <option value="<?php echo e($stage); ?>"
                              <?php echo e($stage == old('study_abroad_journey_status') ? 'selected' : ''); ?>><?php echo e($stage); ?>

                            </option>
                          <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                        </select>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['study_abroad_journey_status'];
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

                  <div class="col-lg-12">
                    <div class="form-group"><button class="slot-btn" type="submit">Finish Booking</button></div>
                  </div>

                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\reactwithlaravel.educationmalaysia.in\resources\views\front\book-demo-slot.blade.php ENDPATH**/ ?>