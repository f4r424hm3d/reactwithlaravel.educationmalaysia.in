<?php $__env->startPush('seo_meta_tag'); ?>
  <?php echo $__env->make('front.layouts.static_page_meta_tag', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('main-section'); ?>
  <!-- Breadcrumb -->
  <div class="image-cover ed_detail_head lg" style="background:url(<?php echo e(storage_cdn('front/')); ?>/assets/img/ub.jpg);"
    data-overlay="8">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-12 col-md-12">
          <div class="ed_detail_wrap light">
            <ul class="cources_facts_list">
              <li class="facts-1"><a href="<?php echo e(url('/')); ?>">Home</a></li>
              <li class="facts-1">Write a Review</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumb -->

  <!-- Content -->
  <section class="reveiew-section">
    <div class="container">

      <div class="row">

        <div class="col-lg-12 col-md-12">

          <div class="prc_wrap">
            <div class="prc_wrap_header">
              <h4 class="property_block_title theme-cl">Your Review of Your Institution Experience Can Help Others</h4>
            </div>
            <div class="prc_wrap-body">
              <div class="contact-info">
                <p>Thank you for writing a review of your experience at University Name. Your honest feedback can help
                  future students make the right decision about their choice of institution and course.</p>
              </div>
            </div>
          </div>

          <div class="prc_wrap bg-light">
            <div class="prc_wrap-body">
              <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(session()->has('smsg')): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <?php echo e(session()->get('smsg')); ?>

                </div>
              <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
              <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(session()->has('emsg')): ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <?php echo e(session()->get('emsg')); ?>

                </div>
              <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

              <h4 class="mt-2">Rate the University - <span class="theme-cl">SUBMIT YOUR REVIEW</span></h4>
              <p>Your email address will not be published. Required fields are marked<span class="theme-cl">*</span></p>
              <form action="<?php echo e(route('add.review')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div class="row">

                  <div class="col-lg-4 col-md-4">
                    <div class="form-group">
                      <label>Your Name</label>
                      <div class="input-group">
                        <div class="input-icon"><span class="ti-user"></span></div>
                        <input name="name" type="text" class="form-control b-0 pl-0" placeholder="Enter your name"
                          value="<?php echo e(old('name')); ?>">

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
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-4">
                    <div class="form-group">
                      <label>Your Email</label>
                      <div class="input-group">
                        <div class="input-icon"><span class="ti-email"></span></div>
                        <input name="email" type="email" class="form-control b-0 pl-0" placeholder="Enter your email"
                          value="<?php echo e(old('email')); ?>">
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
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-4">
                    <label>Your Mobile No.</label>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-icon"><span class="ti-mobile"></span></div>
                        <input name="mobile" type="number" class="form-control b-0 pl-0"
                          placeholder="Enter your mobile no." value="<?php echo e(old('mobile')); ?>" required="">
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

                  <div class="col-lg-4 col-md-4">
                    <div class="form-group">
                      <label>Select College/University</label>
                      <select id="university" name="university" class="form-control">
                        <option value="">Select University</option>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $universities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                          <option value="<?php echo e($row->id); ?>"
                            <?php echo e(old('university') && old('university') == $row->id ? 'Selected' : ''); ?>

                            <?php echo e(request('university') == $row->id ? 'selected' : ''); ?>>
                            <?php echo e($row->name); ?>

                          </option>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                      </select>
                      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['university'];
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

                  <div class="col-lg-4 col-md-4">
                    <div class="form-group">
                      <label>Select Programe</label>
                      <select id="program_list" name="program" class="form-control">
                        <option value="">Select Program</option>
                      </select>
                      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['program'];
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

                  <div class="col-lg-4 col-md-4">
                    <div class="form-group">
                      <label>Passing Year</label>
                      <select name="passing_year" id="passing_year" class="form-control">
                        <option value="">Select Year</option>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php for($year = 1980; $year <= date('Y'); $year++): ?>
                          <option value="<?php echo e($year); ?>"
                            <?php echo e(old('passing_year') && old('passing_year') == $year ? 'Selected' : ''); ?>>
                            <?php echo e($year); ?>

                          </option>
                        <?php endfor; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                      </select>
                      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['passing_year'];
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

                  <div class="col-lg-12 col-md-12">
                    <div class="form-group">
                      <label>Review Title* <i class="fa fa-info-circle theme-cl" data-toggle="tooltip"
                          title="Give your review title"></i> <span class="pl-2 theme-cl font-size-13">(Title cannot be
                          less
                          than 20 and more than 100 characters.)</span></label>
                      <div class="input-group">
                        <div class="input-icon"><span class="ti-briefcase"></span></div>
                        <input name="review_title" type="text" class="form-control b-0 pl-0"
                          placeholder="How would you sum up your experience studying at this institution in a sentence?"
                          value="<?php echo e(old('review_title')); ?>" required="">
                      </div>
                    </div>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['review_title'];
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

                  <div class="col-lg-12 col-md-12">
                    <div class="form-group mb-2 setlabel">
                      <label>Write a Review* <i class="fa fa-info-circle theme-cl" data-toggle="tooltip"
                          title="Give your review"></i> <span class="pl-2 theme-cl font-size-13">(Description cannot be
                          less than 150 characters.)</span></label>
                      <div class="input-group input-group-merge">
                        <div class="input-icon align-items-start pt-3"><span class="ti-pencil-alt color-primary"></span>
                        </div>
                        <textarea name="description" id="description" type="text" class="form-control b-0 pl-0"
                          placeholder="Share your experience at this institution from the time you first enrolled to its various course subjects, student lifestyle, teaching and facilities."
                          style="height:100px; padding-top:17px"><?php echo e(old('description')); ?></textarea>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['description'];
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
                      <div class="star-rating my-4">
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php for($i = 1; $i <= 5; $i++): ?>
                          <input id="star-<?php echo e($i); ?>" type="radio" name="rating"
                            value="<?php echo e($i); ?>" />
                          <label for="star-<?php echo e($i); ?>" title="<?php echo e($i); ?> star">
                            <i class="active fa fa-star" aria-hidden="true"></i>
                          </label>
                        <?php endfor; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                      </div>
                      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['rating'];
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

                <div class="form-group mb-0">
                  <button class="btn btn-modern float-none" type="submit">
                    Submit Review <span><i class="fa fa-angle-right"></i></span>
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>
  <!-- Content -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#university').change(function() {
        let universityId = $(this).val();
        // console.log(universityId);
        // alert(universityId);
        if (universityId) {
          $.ajax({
            url: '<?php echo e(route('review.get.programs')); ?>',
            type: 'GET',
            data: {
              university_id: universityId,
            },
            success: function(data) {
              // console.log(data);
              // alert(data);
              $('#program_list').html(data);
            },
            error: function() {
              alert('Failed to fetch programs. Please try again later.');
            }
          });
        }
      });
    });
  </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\reactwithlaravel.educationmalaysia.in\resources\views\front\write-a-review.blade.php ENDPATH**/ ?>