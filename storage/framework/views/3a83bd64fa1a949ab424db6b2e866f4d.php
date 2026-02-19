<?php
  use App\Models\StudentApplication;
  use App\Helpers\UniversityProgramListButton;
?>

<?php $__env->startPush('seo_meta_tag'); ?>
  <?php echo $__env->make('front.layouts.dynamic_page_meta_tag', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('breadcrumb_schema'); ?>
  <!-- breadcrumb schema Code -->
  <script type="application/ld+json">
    {
      "@context": "https://schema.org/",
      "@type": "BreadcrumbList",
      "name": "<?php echo e(ucwords($meta_title)); ?>",
      "description": "<?php echo e($meta_description); ?>",
      "itemListElement": [{
        "@type": "ListItem",
        "position": 1,
        "name": "Home",
        "item": "<?php echo e(url('/')); ?>"
      }, {
        "@type": "ListItem",
        "position": 2,
        "name": "Select University",
        "item": "<?php echo e(route('select.university')); ?>"
      }, {
        "@type": "ListItem",
        "position": 3,
        "name": "University",
        "item": "<?php echo e(route('university.overview',['university_slug'=>$university->uname])); ?>"
      }, {
        "@type": "ListItem",
        "position": 4,
        "name": "University Courses",
        "item": "<?php echo e(route('university.courses',['university_slug'=>$university->uname])); ?>"
      }, {
        "@type": "ListItem",
        "position": 5,
        "name": "Courses",
        "item": "<?php echo e(url()->current()); ?>"
      }]
    }
  </script>
  <!-- breadcrumb schema Code End -->
<?php $__env->stopPush(); ?>
<?php $__env->startSection('main-section'); ?>
  <!-- Breadcrumb -->
  <?php echo $__env->make('front.university-profile', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
  <!-- Breadcrumb -->
  <!-- Menu -->
  <?php echo $__env->make('front.university-profile-menu', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
  <!-- Menu -->
  <!-- Content -->
  <section class="bg-light py-5 program-profiledd ">
    <div class="container">
      <div class="row">

        <div class="col-lg-8 col-md-12">
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
          <!-- Course details -->

          <div class="edu_wraper">

            <h2 class="course-new-title"><?php echo e($program->course_name); ?> Fees Structure, Admission, Intake, Deadline</h2>

            <div class="row align-items-center mx-auto">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mb-2">
                    <div class="row">
                      <div class="col-lg-3 col-md-12 col-sm-12 col-12 course-icon-new mb-3"><i class="ti-flag-alt"></i>
                      </div>
                      <div class="col-lg-9 col-md-12 col-sm-12 col-12 mb-3"><span class="theme-cl">Study Mode:</span><span
                          class="course-new-sc"><?php echo e(ucwords($program->study_mode)); ?></span></div>
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mb-2">
                    <div class="row">
                      <div class="col-lg-3 col-md-12 col-sm-12 col-12 course-icon-new mb-3"><i class="ti-time"></i></div>
                      <div class="col-lg-9 col-md-12 col-sm-12 col-12 mb-3"><span class="theme-cl">Duration:</span><span
                          class="course-new-sc"><?php echo e($program->duration); ?></span></div>
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mb-2">
                    <div class="row">
                      <div class="col-lg-3 col-md-12 col-sm-12 col-12 course-icon-new mb-3"><i class="ti-files"></i></div>
                      <div class="col-lg-9 col-md-12 col-sm-12 col-12 mb-3"><span class="theme-cl">Level:</span><span
                          class="course-new-sc"><?php echo e($program->level); ?></span></div>
                    </div>
                  </div>

                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mb-2">
                    <div class="row">
                      <div class="col-lg-3 col-md-12 col-sm-12 col-12 course-icon-new mb-3"><i class="ti-medall-alt"></i>
                      </div>
                      <div class="col-lg-9 col-md-12 col-sm-12 col-12 mb-3"><span class="theme-cl">Exam
                          Accepted:</span><span class="course-new-sc"><?php echo e(j2s($program->exam_accepted ?? null)); ?></span>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mb-2">
                    <div class="row">
                      <div class="col-lg-3 col-md-12 col-sm-12 col-12 course-icon-new mb-3"><i class="ti-calendar"></i>
                      </div>
                      <div class="col-lg-9 col-md-12 col-sm-12 col-12 mb-3"><span class="theme-cl">Intake:</span><span
                          class="course-new-sc"><?php echo e($program->intake); ?></span></div>
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mb-2">
                    <div class="row">
                      <div class="col-lg-3 col-md-12 col-sm-12 col-12 course-icon-new mb-3"><i class="ti-money"></i></div>
                      <div class="col-lg-9 col-md-12 col-sm-12 col-12 mb-3"><span class="theme-cl">Tuition
                          Fees:</span><span class="course-new-sc"><?php echo e($program->tution_fees ?? 'N/A'); ?></span></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($program->intake != null): ?>
            <?php
              $intakeArr = explode(',', $program->intake);
              $appDeadlineArr = explode(',', $program->application_deadline);
            ?>

            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(count($intakeArr) == count($appDeadlineArr)): ?>
              <?php
                $finalIntake = array_combine($intakeArr, $appDeadlineArr);
              ?>
              <table class="table table-sm">
                <tr>
                  <td>
                    <table>
                      <tr>
                        <th>Intake</th>
                        <th>Deadline</th>
                      </tr>
                      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $finalIntake; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                        <tr>
                          <td><?php echo e($key != null ? $key : 'N/A'); ?></td>
                          <td><?php echo e($value != null ? $value : 'N/A'); ?></td>
                        </tr>
                      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                    </table>
                  </td>
                </tr>
              </table>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($program->overview != null): ?>
              <!-- Overview -->
              <div class="edu_wraper">
                <div class="show-more-box">
                  <div class="text show-more-height">
                    <h2 class="edu_title">Course Overview</h2>
                    <?php echo $program->overview; ?>

                  </div>
                  <div class="show-more">(Show More)</div>
                </div>
              </div>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($program->entry_requirement != null): ?>
              <div class="edu_wraper">
                <div class="show-more-box">
                  <div class="text show-more-height">
                    <h2 class="edu_title">Entry Requirements</h2>
                    <?php echo $program->entry_requirement; ?>

                  </div>
                  <div class="show-more">(Show More)</div>
                </div>
              </div>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($program->exam_required != null): ?>
              <div class="edu_wraper">
                <div class="show-more-box">
                  <div class="text show-more-height">
                    <h2 class="edu_title">Exam Required</h2>
                    <?php echo $program->exam_required; ?>

                  </div>
                  <div class="show-more">(Show More)</div>
                </div>
              </div>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($program->mode_of_instruction != null): ?>
              <div class="edu_wraper">
                <div class="show-more-box">
                  <div class="text show-more-height">
                    <h2 class="edu_title">Mode Of Instruction</h2>
                    <?php echo $program->mode_of_instruction; ?>

                  </div>
                  <div class="show-more">(Show More)</div>
                </div>
              </div>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($program->scholarship_info != null): ?>
              <div class="edu_wraper">
                <div class="show-more-box">
                  <div class="text show-more-height">
                    <h2 class="edu_title">Scholarship Info</h2>
                    <?php echo $program->scholarship_info; ?>

                  </div>
                  <div class="show-more">(Show More)</div>
                </div>
              </div>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
          <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
          <div class="edu_wraper p-3">
            <!-- Call to action -->
            <div class="justify-content-center align-content-center text-center font-weight-bold">
              <?php echo UniversityProgramListButton::getApplyButton($program->id, 'btn btn-theme-2 ml-2 rounded rounded-circle'); ?>

              <a href="<?php echo e(route('university.courses', ['university_slug' => $university->uname])); ?>"
                class="btn btn-theme-2 ml-2 rounded rounded-circle" style="border:0px">View all courses</a>
            </div>
          </div>

          <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($program->intake != null): ?>
            <div class="edu_wraper">
              <h2 class="course-new-title pl-3 mb-0">Course Intake</h2>
              <div class="row">
                <div class="col-md-12 col-12">
                  <div class="course-intake">
                    <?php
                      // Convert comma-separated string into an array and trim any whitespace
                      $intakeArray = array_map('strtolower', array_map('trim', explode(',', $program->intake)));
                    ?>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $months; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                      <?php
                        // Check for matches in both short and full month names
                        $shortNameMatch = in_array(strtolower($row->month_short_name), $intakeArray);
                        $fullNameMatch = in_array(strtolower($row->month_full_name), $intakeArray);
                      ?>
                      <span class="<?php echo e($shortNameMatch || $fullNameMatch ? 'active' : ''); ?>">
                        <?php echo e($row->month_short_name); ?>

                      </span>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
          <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

          <div id="accordionExample" class="accordion shadow circullum mt-3 program-accordian ">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($program->contents->count() > 0): ?>
              <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $program->contents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ucc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                <div class="card">
                  <div id="headingFive<?php echo e($ucc->id); ?>" class="card-header bg-white shadow-sm border-0">
                    <h6 class="mb-0 accordion_title title-accord"><a href="#" data-toggle="collapse"
                        data-target="#collapseFive<?php echo e($ucc->id); ?>" aria-expanded="false"
                        aria-controls="collapseFive<?php echo e($ucc->id); ?>"
                        class="d-block position-relative collapsed text-dark collapsible-link py-2"><?php echo e($ucc->tab_title); ?></a>
                    </h6>
                  </div>
                  <div id="collapseFive<?php echo e($ucc->id); ?>" aria-labelledby="headingFive<?php echo e($ucc->id); ?>"
                    data-parent="#accordionExample" class="collapse show">
                    <div class="card-body pl-4 pr-4 ">
                      <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 p-0">
                          <!-- <div class="arrow_slide two_slide-dots arrow_middle">   -->
                          <div class="singles_items">
                            <div class="boxcontent">
                              <h3>
                                <?php echo e($ucc->tab_title); ?> of <?php echo e($program->course_name); ?> in <?php echo e($university->name); ?>

                                Malaysia
                              </h3>
                              <?php echo $ucc->description; ?>

                            </div>
                          </div>
                          <!-- </div> -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
          </div>

          <div id="accordionExample" class="accordion shadow circullum mt-4 program-accordian  newprogramss">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($similarPrograms->count() > 0): ?>
              <div class="card">
                <div id="headingFive" class="card-header bg-white shadow-sm border-0">
                  <h6 class="mb-0 accordion_title title-accord">
                    <a href="#" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true"
                      aria-controls="collapseFive"
                      class="d-block position-relative collapsed text-dark collapsible-link py-2 removed-icon">
                      Similar Programs
                    </a>
                  </h6>
                </div>
                <div id="collapseFive" aria-labelledby="headingFive" data-parent="#accordionExample"
                  class="collapse show">
                  <div class="card-body pt-3">
                    <div class="row">
                      <div class="col-lg-12 col-md-12 col-sm-12 p-0">
                        <!-- <div class="arrow_slide two_slide-dots arrow_middle"> -->
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $similarPrograms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                          <div class="singles_items">
                            <div class="education_block_grid style_2 mb-3 all-programss">
                              <div class="education_block_body mb-0">
                                <div class="row align-items-center mx-auto ">
                                  <div class="col-12 col-sm-12 col-md-3 mb-3">
                                    <div class="path-img">
                                      <img data-src="<?php echo e(storage_url($tu->university->logo_path)); ?>"
                                        class="img-fluid rounded" alt="">
                                    </div>
                                  </div>
                                  <div class="col-12 col-sm-12 col-md-9 mb-3">
                                    <h6 class="mb-1"><?php echo e($tu->university->name); ?></h6>
                                    <ul class="loc-rating">
                                      <li class="loc ">
                                        <i class="ti-location-pin mr-2"></i><?php echo e($tu->university->city); ?>

                                      </li>
                                      <li class="loc">
                                        <i class="ti-location-pin mr-2"></i><?php echo e($tu->university->state); ?>

                                      </li>
                                      <li class="loc">
                                        <i class="ti-eye mr-2"></i><?php echo e($tu->university->instituteType->type ?? 'N/A'); ?>

                                      </li>
                                    </ul>

                                  </div>
                                </div>
                              </div>

                              <div class="education_block_fo ">
                                <div class="row mx-auto align-items-center">
                                  <div class="col-12 col-sm-12 col-md-7 col-lg-7 mb-4">
                                    <h3 class="h3-progrmsn mb-2">
                                      <a
                                        href="<?php echo e(url('university/' . $tu->university->uname . '/courses/' . $tu->slug)); ?>">
                                        <?php echo e($tu->course_name); ?>

                                      </a>
                                    </h3>
                                    <div class="aminities">
                                      <?php echo $tu->duration; ?>
                                      <span></span>
                                      <?php echo $tu->study_mode; ?>
                                      <span></span>
                                      <?php echo $tu->intake; ?>
                                    </div>
                                  </div>
                                  <div class="col-12 col-sm-12 col-md-5 col-lg-5 mb-4">
                                    <div class="d-flex align-items-center set-gap justify-content-end ">
                                      <a href="<?php echo e(route('university.course.details', ['university_slug' => $tu->university->uname, 'course_slug' => $tu->slug])); ?>"
                                        class="btn btn-primary">View
                                        detials</a>
                                      <a href="<?php echo e(route('university.courses', ['university_slug' => $tu->university->uname])); ?>"
                                        class="btn btn-primary">View
                                        courses</a>
                                    </div>
                                  </div>
                                </div>

                              </div>
                            </div>
                          </div>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                        <!-- </div> -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
          </div>

          <div class="multi-streams">
            <div class="card">
              <div class="card-header">
                <h3><?php echo e($university->name); ?> Popular Courses</h3>
              </div>
              <div class="card-body">
                <div class="row ">
                  <div class="col-12 col-sm-12 col-md-2 mb-4 ">
                    <h2 class="top-streams">
                      Top Streams:
                    </h2>
                  </div>
                  <div class=" col-12 col-sm-12 col-md-10 mb-4">
                    <div class="multi-options">
                      <ul>

                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $universtySpecializationsForCourses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                          <li><span class="spanstream"
                              onclick="goToUniPrograms('<?php echo e($university->uname); ?>', '<?php echo e($row->id); ?>')">
                              <?php echo e($row->name); ?>

                            </span></li>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                        <li> <a target="_blank" href="<?php echo e(url('university/' . $university->uname . '/courses')); ?>"
                            class="btn btn-sm btn-primary span-linames">View All</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header">
                <h3>Malaysia Popular Courses</h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-12 col-sm-12 col-md-2 mb-4 ">
                    <h2 class="top-streams">
                      Top Streams:
                    </h2>
                  </div>
                  <div class=" col-12 col-sm-12 col-md-10 mb-4">
                    <div class="multi-options">
                      <ul>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $randomSpecializations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                          <li>
                            <a class="spanstream" target="_blank"
                              href="<?php echo e(url($row->slug . '-courses')); ?>"><?php echo e($row->name); ?></a>
                          </li>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                        <li>
                          <a target="_blank" href="<?php echo e(url('courses-in-malaysia')); ?>"
                            class="btn btn-sm btn-primary span-linames">View
                            All</a>
                        </li>
                      </ul>

                    </div>

                  </div>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header">
                <h3>Top Courses to Study in Malaysia</h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-12 col-sm-12  col-md-2 mb-3 ">
                    <h2 class="top-streams">
                      Top Streams:
                    </h2>
                  </div>
                  <div class="col-12 col-sm-12 col-md-10 mb-3">
                    <div class="multi-options">
                      <ul>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $specializationsWithContents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                          <li>
                            <a class="spanstream" target="_blank"
                              href="<?php echo e(route('specialization.detail', ['slug' => $row->slug])); ?>"><?php echo e($row->name); ?></a>
                          </li>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                        <li>

                          <a target="_blank" href="<?php echo e(url('specialization')); ?>"
                            class="btn btn-sm btn-primary span-linames">View
                            All</a>
                        </li>
                      </ul>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

        <!-- Sidebar -->
        <div class="col-lg-4 col-md-12">
          <?php echo $__env->make('front.forms.university-side-form', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
          <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($trendingUniversity->count() > 0): ?>
            <div class="ed_view_box style_2">
              <div class="ed_author">
                <div class="ed_author_box">
                  <h4>Featured Universities</h4>
                </div>
              </div>

              <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $trendingUniversity; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $uni): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                <div class="learnup-list">
                  <div class="learnup-list-thumb">
                    <a href="<?php echo e(route('university.overview', ['university_slug' => $uni->slug])); ?>">
                      <img data-src="<?php echo e(storage_url($uni->logo_path)); ?>" class="img-fluid" alt="<?php echo e($uni->name); ?>">
                    </a>
                  </div>
                  <div class="learnup-list-caption">
                    <h6><a
                        href="<?php echo e(route('university.overview', ['university_slug' => $uni->slug])); ?>"><?php echo e($uni->name); ?></a>
                    </h6>
                    <p class="mb-0"><i class="ti-location-pin"></i> <?php echo e($uni->city); ?>, <?php echo e($uni->state); ?></p>
                    <div class="learnup-info">
                      <span class="mr-3">
                        <a href="<?php echo e(route('university.overview', ['university_slug' => $uni->slug])); ?>"><i
                            class="fa fa-edit"></i> Admission</a>
                      </span>
                      <span>
                        <a href="<?php echo e(route('university.courses', ['university_slug' => $uni->slug])); ?>"><i
                            class="fa fa-graduation-cap"></i> Programme</a>
                      </span>
                    </div>
                  </div>
                </div>
              <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
            </div>
          <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
          <div class="ed_view_box style_2">
            <div class="ed_author">
              <div class="ed_author_box">
                <h4>Find Universities Courses</h4>
              </div>
            </div>

            <a class="learnup-list" href="<?php echo e(url('courses/pre-university')); ?>">
              <div class="learnup-list-thumb">

                <img data-src="<?php echo e(storage_cdn('assets')); ?>/web/images/fuc-icons/pre-university.png" class="img-fluid"
                  alt="Pre University">

              </div>
              <div class="learnup-list-caption">
                <h6>
                  <p>Certificate Course in Malaysia </p>
                </h6>
              </div>
            </a>
            <a href="<?php echo e(url('courses/diploma')); ?>" class="learnup-list">
              <div class="learnup-list-thumb">

                <img data-src="<?php echo e(storage_cdn('assets')); ?>/web/images/fuc-icons/diploma.png" class="img-fluid"
                  alt="Pre University">

              </div>
              <div class="learnup-list-caption">
                <h6>
                  <p>Diploma Course in Malaysia </p>
                </h6>
              </div>
            </a>
            <a class="learnup-list" href="<?php echo e(url('courses/under-graduate')); ?>">
              <div class="learnup-list-thumb">

                <img data-src="<?php echo e(storage_cdn('assets')); ?>/web/images/fuc-icons/under-graduate.png" class="img-fluid"
                  alt="Pre University">

              </div>
              <div class="learnup-list-caption">
                <h6>
                  <p>Bachelor Course in Malaysia </p>
                </h6>
              </div>
            </a>
            <a class="learnup-list" href="<?php echo e(url('courses/post-graduate')); ?>">
              <div class="learnup-list-thumb">

                <img data-src="<?php echo e(storage_cdn('assets')); ?>/web/images/fuc-icons/post-graduate.png" class="img-fluid"
                  alt="Pre University">

              </div>
              <div class="learnup-list-caption">
                <h6>
                  <p>Master Degree in Malaysia </p>
                </h6>
              </div>
            </a>
            <a class="learnup-list" href="<?php echo e(url('courses/phd')); ?>">
              <div class="learnup-list-thumb">

                <img data-src="<?php echo e(storage_cdn('assets')); ?>/web/images/fuc-icons/phd.png" class="img-fluid"
                  alt="Pre University">

              </div>
              <div class="learnup-list-caption">
                <h6>
                  <p>PHD Courses in Malaysia </p>
                </h6>
              </div>
            </a>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- Content -->
  <script>
    function applyProgram(program_id, btn_id) {
      //alert(id);
      return new Promise(function(resolve, reject) {
        $("#" + btn_id).text('Applying...');
        $.ajax({
          url: "<?php echo e(url('/student/apply-program')); ?>",
          method: "GET",
          data: {
            program_id: program_id,
          },
          success: function(data) {
            //alert(data);
            $("#" + btn_id).attr('class', 'btn btn-success');
            $("#" + btn_id).text('Applied');
          }
        }).fail(err => {
          $("#" + btn_id).attr('class', 'btn btn-danger');
          $("#" + btn_id).text('Failed');
        });
      });
    }

    function goToUniPrograms(uname, specializationId) {
      if (specializationId != '') {
        $.ajax({
          url: "<?php echo e(url('university-course-list/specialization')); ?>",
          method: "GET",
          data: {
            specialization_id: specializationId
          },
          success: function(data) {
            window.open("<?php echo e(url('university/')); ?>/" + uname + "/courses", "_blank");
          }
        });
      }
    }
  </script>

  <script>
    $(document).ready(function() {
      $("table").each(function() {
        if (!$(this).parent().hasClass("table-responsive")) {
          $(this).wrap("<div class='table-responsive'></div>");
        }
      });
    });
  </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\reactwithlaravel.educationmalaysia.in\resources\views\front\programs-profile.blade.php ENDPATH**/ ?>