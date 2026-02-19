<div class="hero-banner-top">
  <img src="<?php echo e(storage_url($university->banner_path)); ?>" class="img-responsive hidden-xs initial loading"
    alt="<?php echo e($university->name); ?>">
</div>

<div class="image-cover ed_detail_head lg ">
  <div class="container">
    <div class="ed_detail_wrap light">
      <ul class="cources_facts_list">
        <li class="facts-1"><a href="<?php echo e(url('/')); ?>">Home</a></li>
        <li class="facts-1"><a href="<?php echo e(route('select.university')); ?>">University</a>
        </li>
        <li class="facts-1"><a
            href="<?php echo e(route('university.overview', ['university_slug' => $university->uname])); ?>"><?php echo e($university->name); ?></a>
        </li>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Request::segment(3) != '' && Request::segment(4) == ''): ?>
          <li class="facts-1"><?php echo e(Request::segment(3)); ?></li>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(Request::segment(4) != ''): ?>
          <li class="facts-1">
            <a href="<?php echo e(route('university.courses', ['university_slug' => $university->uname])); ?>">Courses</a>
          </li>
          <li class="facts-1"><?php echo e($program->course_name); ?></li>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
      </ul>
    </div>

  </div>

</div>
<section class="university-blade">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-xl-2 col-lg-3 col-md-3 col-12 mb-4">
        <div class="imguniersity">
          <img data-src="<?php echo e(storage_url($university->logo_path)); ?>" class="" alt="<?php echo e($university->name); ?>">
        </div>
      </div>

      <div class="col-xl-10 col-lg-9 col-md-9 col-12 mb-4">
        <div class="ed_detail_wrap light">

          <div class="ed_header_caption">
            <h1 class="ed_title">
              <?php echo e($university->name); ?>

            </h1>
            <ul>
              <li><i class="ti-location-pin"></i><span>Location:</span> <?php echo e($university->city); ?>,
                <?php echo e($university->state); ?></li>
              <li>
                <div class="locationssd">
                  <div class="loc-rating">
                    <span class="loc mobile">
                      Rating:
                      <div class="star-ratings">
                        <?php echo universityRating($university->rating); ?>

                      </div>
                    </span>
                  </div>
                </div>

              </li>
              <li>
                <div class="dv-loc d-flex align-items-center ">
                  <span class="loc mobile">
                    <i class="fa fa-graduation-cap me-1" aria-hidden="true"></i>

                    Scholarship:
                  </span>

                  <div class="empty-ratings"><span>Yes</span></div>

                </div>

              </li>
              <li>
                <div class="dv-loc d-flex align-items-center ">
                  <span class="loc mobile">
                    <i class="fa fa-eye me-1" aria-hidden="true"></i>View:
                  </span>

                  <div class="empty-ratings"><span><?php echo e($university->views); ?></span></div>

                </div>

              </li>
              <li><i class="fa fa-graduation-cap"></i><span>Type:</span>
                <?php echo e($university->instituteType->type ?? 'N/A'); ?>

              </li>
              <li><i class="ti-user"></i><span>Courses:</span> <?php echo e($university->activePrograms->count()); ?></li>
              <li><i class="fa fa-building"></i><span>QS World University Rankings:</span>
                <?php echo e($university->qs_rank); ?>

              </li>
              <li><i class="fa fa-globe"></i><span>Times Higher Education World University
                  Rankings:</span>
                <?php echo e($university->times_rank); ?></li>
              <li><i class="fa fa-location-arrow" aria-hidden="true"></i> Get Direction </li>
            </ul>
          </div>

          <div class="head-btns">
            <a onclick="setSource('brochure')" href="#" class="btn btn-white-t-theme btn-50L" data-toggle="modal"
              data-target="#downloadBrochureModal"><i class="ti-download mr-1"></i>
              Download
              Brochure</a>
            <a onclick="setSource('fees')" href="#" class="btn btn-white-t-theme btn-50R" data-toggle="modal"
              data-target="#downloadBrochureModal"><i class="ti-user mr-1"></i> Download
              Fees
              Structure</a>
            <a href="<?php echo e(route('write.review')); ?>" class="btn btn-white-t-theme"><i class="ti-pencil-alt mr-1"></i>
              Write a review</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Modal -->
<div class="modal registration-modal fade" id="downloadBrochureModal" tabindex="-1" role="dialog"
  aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">

      <div class="modal-body p-0">
        <div class="all-registration">
          <div class="row flex-column-reverse flex-md-row align-items-center">
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 pr-md-0">
              <div class="all-grays">
                <h2>How Education Malaysia helps you in </h2>
                <div class="d-flex set-gaps gap-3 flex-wrap align-items-center">
                  <div class="border-alls">
                    
                    🎓
                    <h4>Comprehensive Course Guidance</h4>
                  </div>
                  <div class="border-alls">
                    📖
                    <h4>Brochure Access</h4>
                  </div>
                  <div class="border-alls">
                    🌍
                    <h4>International Student Support
                    </h4>
                  </div>
                  <div class="border-alls">
                    💡
                    <h4>Personalized Counseling</h4>
                  </div>
                  <div class="border-alls">
                    💰
                    <h4>Scholarship Assistance</h4>
                  </div>
                  <div class="border-alls">
                    📞
                    <h4>24/7 Suppor</h4>
                  </div>
                </div>

              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-8  col-lg-8 pl-md-0">
              <div class="all-white">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <div class=" leadform-header">
                  <div class="lead-hdr-img"><img src="<?php echo e(storage_url($university->logo_path)); ?>" alt="">
                  </div>
                  <div class="hdr-info">
                    <h3 class="">Register Now To Download Brochure</h3>
                    <p class="all-list"><?php echo e($university->name); ?></p>
                  </div>
                </div>
                <form method="post" class="form-added" id="dataForm">
                  <?php echo csrf_field(); ?>
                  <input type="hidden" name="requestfor" id="requestfor" value="">
                  <input type="hidden" name="university_id" value="<?php echo e($university->id); ?>">
                  <input type="hidden" name="source_path" value="<?php echo e(URL::full()); ?>">

                  <div class="row">
                    <div class="col-12 col-sm-12 col-md-6">
                      <div class="form-group">
                        <input name="name" type="text" class="form-control" placeholder="Full Name*"
                          value="<?php echo e(old('name')); ?>" required="">
                      </div>
                      <span class="text-danger" id="name-err"></span>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6">
                      <div class="form-group">
                        <input name="email" type="text" placeholder="Email" value="<?php echo e(old('email')); ?>"
                          class="form-control">
                      </div>
                      <span class="text-danger" id="email-err"></span>
                    </div>

                    <div class="col-12 col-sm-12 col-md-6 ">
                      <div class="form-group">
                        <div class="d-flex align-items-center setgap3 position-relative mobile-field">
                          <select name="country_code" class="form-control call-select" required>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $phonecodes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                              <option value="<?php echo e($row->phonecode); ?>"
                                <?php echo e((old('country_code') && old('country_code') == $row->phonecode) || $row->phonecode == '91' ? 'Selected' : ''); ?>>
                                +<?php echo e($row->phonecode); ?> (<?php echo e($row->name); ?>)
                              </option>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                          </select>
                          <input name="mobile" type="text" class="form-control"
                            placeholder="Mobile/WhatsApp No*" value="<?php echo e(old('mobile')); ?>" required="">
                        </div>
                        <span class="text-danger" id="country_code-err"></span>
                      </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 ">
                      <div class="form-group">
                        <select name="nationality" id="nationality" class="form-control">
                          <option value="">Nationality</option>
                          <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                            <option value="<?php echo e($row->name); ?>"
                              <?php echo e(old('nationality') && old('nationality') == $row->name ? 'Selected' : ''); ?>>
                              <?php echo e($row->name); ?></option>
                          <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                        </select>
                        <span class="text-danger" id="nationality-err"></span>
                      </div>
                    </div>

                    <div class="col-12 col-sm-12 col-md-6 ">
                      <div class="form-group">
                        <select name="highest_qualification" id="highest_qualification" class="form-control ">
                          <option value="">Your Highest Qualification Level</option>
                          <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $levels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                            <option value="<?php echo e($row->level); ?>"
                              <?php echo e(old('highest_qualification') && old('highest_qualification') == $row->level ? 'Selected' : ''); ?>>
                              <?php echo e($row->level); ?></option>
                          <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                        </select>
                        <span class="text-danger" id="highest_qualification-err"></span>
                      </div>

                    </div>
                    <div class="col-12 col-sm-12 col-md-6 ">
                      <div class="form-group">
                        <select name="interested_course_category" id="interested_course_category"
                          class="form-control ">
                          <option value="">Intrested Course Category</option>
                          <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $course_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                            <option value="<?php echo e($row->name); ?>"
                              <?php echo e(old('interested_course_category') && old('interested_course_category') == $row->name ? 'Selected' : ''); ?>>
                              <?php echo e($row->name); ?></option>
                          <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                        </select>
                        <span class="text-danger" id="interested_course_category-err"></span>
                      </div>

                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 ">
                      <div class="form-group">
                        <div class="mb-3">
                          <label class="form-label"
                            id="page-captcha-label"><?php echo e($pageQuestion['label'] ?? 'Solve the math:'); ?></label>
                          <input type="text" name="page_captcha" class="form-control" inputmode="numeric"
                            required>
                          <input type="hidden" id="page_captcha_key" name="page_captcha_key"
                            value="<?php echo e($pageCaptchaKey); ?>">
                        </div>
                        <span class="text-danger" id="page_captcha-err"></span>
                      </div>

                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12  text-right ">
                      <p class=" mb-3 text-left linkp">By submitting this form, you accept and
                        agree to our <a href="<?php echo e(route('tc')); ?>" rel="noopener" target="_blank">Terms of
                          Use.</a></p>

                      <div class="row flex-column-reverse flex-md-row align-items-center ">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                          <button type="submit" class="btn btn-primary rounded">Send
                            Message</button>
                        </div>
                      </div>

                    </div>

                  </div>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
<script>
  async function refreshUniversityModalCaptcha() {
    try {
      const res = await fetch("<?php echo e(route('captcha.math')); ?>", {
        method: 'POST',
        headers: {
          'X-CSRF-TOKEN': "<?php echo e(csrf_token()); ?>",
          'Accept': 'application/json',
          'Content-Type': 'application/json'
        },
        body: JSON.stringify({
          context: 'page_form'
        })
      });

      const data = await res.json();
      document.getElementById('page-captcha-label').textContent = data.label;
      document.getElementById('page_captcha_key').value = data.key;
    } catch (err) {
      console.error('Captcha refresh failed', err);
    }
  }
</script>
<script>
  function setSource(value) {
    //alert(value);
    $('#requestfor').val(value);
  }

  function printErrorMsg(msg) {
    $.each(msg, function(key, value) {
      $("#" + key + "-err").text(value);
    });
  }

  $(document).ready(function() {
    $('#dataForm').on('submit', function(event) {
      event.preventDefault();
      $(".errSpan").text(''); // Clear previous error messages
      $.ajax({
        url: "<?php echo e(route('brochure.inquiry')); ?>",
        method: "POST",
        data: new FormData(this),
        contentType: false,
        cache: false,
        processData: false,
        success: function(data) {
          if ($.isEmptyObject(data.error)) {
            if (data.hasOwnProperty('success')) {
              Swal.fire({
                title: 'Success',
                text: data.message,
                icon: 'success',
                confirmButtonText: 'OK'
              }).then(() => {
                $('#dataForm')[0].reset(); // Reset the form
                $('#downloadBrochureModal').hide(); // Close the modal
              });
              // 🔄 Always refresh captcha after success
              refreshUniversityModalCaptcha();
            }
          } else {
            printErrorMsg(data.error); // Display validation errors
            // 🔄 Refresh captcha on validation errors as well
            refreshUniversityModalCaptcha();
          }
        },
        error: function(xhr, status, error) {
          console.error('AJAX Error:', status, error); // Log errors for debugging
        }
      });
    });
  });
</script>
<?php /**PATH C:\laragon\www\reactwithlaravel.educationmalaysia.in\resources\views\front\university-profile.blade.php ENDPATH**/ ?>