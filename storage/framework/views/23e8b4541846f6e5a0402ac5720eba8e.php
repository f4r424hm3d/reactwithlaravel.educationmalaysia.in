<?php $__env->startPush('seo_meta_tag'); ?>
  <?php echo $__env->make('front.layouts.dynamic_page_meta_tag', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('main-section'); ?>
  <!-- Breadcrumb -->
  <div class="image-cove" data-overlay="8">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 col-md-9">
          <div class="ed_detail_wrap light">
            <div class="ed_header_caption job-heading">
              <ul class="cources_facts_list">
                <li class="facts-1"><a href="<?php echo e(url('/')); ?>">Home</a></li>
                <li class="facts-1"><a href="<?php echo e(url('jobs')); ?>">Jobs</a>
                </li>
                <li class="facts-1"><?php echo e($row->page_name); ?></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumb -->

  <!-- Content -->
  <section class="bg-light pt-40 pb-40">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-8">
          <div class="nursing-image">
            <div class="thumb">
              <div class="sec-heading heading-padding">
                <h2><?php echo e($row->title); ?></h2>
              </div>
              <div class="row align-items-center mb-3">
                <div class="col-8">
                  <div class="new-author">
                    <div class="img-div">
                      <img data-src="https://educationmalaysia.in/uploads/users/britannica-author_1691754396.jpg"
                        alt="<?php echo e($row->getAuthor->name); ?>"><i class="fa fa-check-circle"></i>
                    </div>
                    <div class="cont-div">
                      <a href="<?php echo e(url('author/' . $row->getAuthor->id . '-' . $row->getAuthor->slug)); ?>"><?php echo e($row->getAuthor->name); ?>

                      </a><span>
                        Updated on -
                        <?php echo e(getFormattedDate($row->updated_at, 'M d, Y')); ?></span>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <!--a href="#" class="new-share">Share <i class="fa fa-share-alt"></i></a-->
                  <div class="share-button">
                    <div class="share-button__back">
                      <a class="share__link" href="#"><i class="ti-facebook share__icon"></i></a>
                      <a class="share__link" href="#"><i class="ti-twitter share__icon"></i></a>
                      <a class="share__link" href="#"><i class="ti-instagram share__icon"></i></a>
                      <a class="share__link" href="#"><i class="ti-linkedin share__icon"></i></a>
                    </div>
                    <div class="share-button__front">
                      <p class="share-button__text">Share <i class="fa fa-share-alt"></i></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="img">
                <img data-src="<?php echo e(storage_url($row->thumbnail_path)); ?>">
              </div>

            </div>
          </div>
          <div class="enquiry-sec">
            <a href="#visit_form" class="big-center-btn enquiry-width open-button btn btn-modern dark">Enquire
              Now<span><i class="fa fa-angle-right"></i></span></a>
          </div>

          

          <div class="edu_wraper box-style mt-5">
            <?php echo $row->description; ?>

          </div>

          <!-- All Info Show in Tab -->
          <div class="tab_box_info mt-4">
            <ul class="nav nav-pills mb-3 light" id="pills-tab" role="tablist">
              <?php
                $tb = 1;
              ?>
              <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $row->getAllTabs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tab): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                <li class="nav-item">
                  <a class="nav-link <?php echo e($tb == 1 ? 'active' : ''); ?>" id="<?php echo e($tab->tab_slug); ?>-tab" data-toggle="pill"
                    href="#<?php echo e($tab->tab_slug); ?>" role="tab" aria-controls="<?php echo e($tab->tab_slug); ?>"
                    aria-selected="true"><?php echo e($tab->tab_name); ?></a>
                </li>
                <?php
                  $tb++;
                ?>
              <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
            </ul>

            <div class="tab-content" id="pills-tabContent">
              <?php
                $tbc = 1;
              ?>
              <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $row->getAllTabs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tab): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                <div class="tab-pane <?php echo e($tbc == 1 ? 'active' : ''); ?>" id="<?php echo e($tab->tab_slug); ?>" role="tabpanel"
                  aria-labelledby="<?php echo e($tab->tab_slug); ?>-tab">
                  <div class="edu_wraper box-style">

                    <div id="accordionExample" class="accordion shadow circullum">
                      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $tab->getAllContent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                        <div class="card">
                          <div id="heading<?php echo e($tc->id); ?>" class="card-header bg-white shadow-sm border-0">
                            <h6 class="mb-0 accordion_title">
                              <a href="#" data-toggle="collapse" data-target="#collapse<?php echo e($tc->id); ?>"
                                aria-expanded="false" aria-controls="collapse<?php echo e($tc->id); ?>"
                                class="d-block position-relative collapsed text-dark collapsible-link py-2">
                                <?php echo e($tc->heading); ?>

                              </a>
                            </h6>
                          </div>
                          <div id="collapse<?php echo e($tc->id); ?>" aria-labelledby="heading<?php echo e($tc->id); ?>"
                            data-parent="#accordionExample" class="collapse">
                            <div class="card-body pl-3 pr-3">
                              <?php echo $tc->description; ?>

                            </div>
                          </div>
                        </div>
                      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                    </div>
                  </div>
                </div>
                <?php
                  $tbc++;
                ?>
              <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>

            </div>
          </div>

        </div>

        <div class="col-lg-4 col-md-4">
          <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($exams->count() > 0): ?>
            <div class="single_widgets widget_category new-page-heading">
              <h5 class="title"><span>Important</span> Exams</h5>
              <ul>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $exams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                  <li>
                    <a href="<?php echo e(url('exam/' . $row->exam_slug . '/overview')); ?>">
                      <?php echo e($row->exam_name); ?><span><i class="fa fa-angle-right"></i></span>
                    </a>
                  </li>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
              </ul>
            </div>
          <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
          <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($jobs->count() > 0): ?>
            <div class="single_widgets widget_category new-page-heading">
              <h5 class="title"><span>Other</span> Jobs</h5>
              <ul>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                  <li>
                    <a href="<?php echo e(url($row->page_slug)); ?>">
                      <?php echo e($row->page_name); ?><span><i class="fa fa-angle-right"></i></span>
                    </a>
                  </li>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
              </ul>
            </div>
          <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
          <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(session()->has('smsg')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <span id="smsg"><?php echo e(session()->get('smsg')); ?></span>
            </div>
          <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
          <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(session()->has('emsg')): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <span id="emsg"><?php echo e(session()->get('emsg')); ?></span>
            </div>
          <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
          <div class=" booking-form  single_widgets form-heading widget_category" id="visit_form">
            <h5 class="title mb-3 text-center"><span>TALK TO </span> US</h5>
            <div class="row align-items-center booking p-0">
              <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['g-recaptcha-response'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="text-danger"><?php echo e($message); ?></span>
              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
              <form id="dataForm" method="post" action="<?php echo e(url('inquiry/job-page')); ?>">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="source" value="Job Detail Page">
                <input type="hidden" name="source_path" value="<?php echo e(URL::full()); ?>">
                <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">
                <div class="col-lg-12">
                  <div class="form-group">
                    <div class="input-group form-input">
                      <input name="name" type="text" class="form-control b-0" placeholder="Full Name*"
                        value="<?php echo e(old('name')); ?>">
                    </div>
                    <span class="text-danger" id="name-err">
                      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <?php echo e($message); ?>

                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </span>
                    <div class="input-group form-input mt-3">
                      <input name="mobile" class="form-control b-0 " type="text" placeholder="91 (702) 123-4567"
                        value="<?php echo e(old('mobile')); ?>">
                    </div>
                    <span class="text-danger" id="mobile-err">
                      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['mobile'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <?php echo e($message); ?>

                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </span>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <div class="input-group form-input">
                      <input name="email" type="email" class="form-control b-0" placeholder="Email ID"
                        value="<?php echo e(old('email')); ?>">
                    </div>
                    <span class="text-danger" id="email-err">
                      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <?php echo e($message); ?>

                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </span>
                  </div>
                  <div class="form-group form-input">
                    <select name="intrested_program" id="intrested_program" class="form-control bg-white">
                      <option value="">Select Option</option>
                      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $alljobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aj): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                        <option value="<?php echo e($aj->page_name); ?>" <?php echo e($aj->page_name == $curJob ? 'selected' : ''); ?>>
                          <?php echo e($aj->page_name); ?></option>
                      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                    </select>
                    <span class="text-danger" id="intrested_program-err">
                      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['intrested_program'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <?php echo e($message); ?>

                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </span>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <div class="input-group form-input">
                      <input name="state" type="text" class="form-control b-0" placeholder="Your State"
                        value="<?php echo e(old('state')); ?>">
                    </div>
                    <span class="text-danger" id="state-err">
                      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['state'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <?php echo e($message); ?>

                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </span>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <div class="mb-3">
                      <label class="form-label"><?php echo e($pageQuestion['label'] ?? 'Solve the math:'); ?></label>
                      <input type="text" name="page_captcha" class="form-control" inputmode="numeric" required>
                      <input type="hidden" name="page_captcha_key" value="<?php echo e($pageCaptchaKey); ?>">
                      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['page_captcha'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="text-danger small"><?php echo e($message); ?></div>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </div>
                  </div>
                </div>

                <div class="col-lg-12">
                  <div class="inline_edu_las demo-bt">
                    <button class="btn btn-theme" type="submit">Submit Now</button>
                  </div>
                </div>
              </form>

            </div>
          </div>
        </div>

      </div>

    </div>
  </section>
  <section>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="sec-heading center">
            <h2>Let’s <span class="theme-cl"> help you live</span> your dream</h2>
          </div>
        </div>
      </div>
      <div class="row mt-3 arrow_slide five_slide arrow_middle _wrk_prc_wrap active">
        <div class="singles_items">
          <div class="card shadow-0 mb-0">
            <img data-src="https://educationmalaysia.in/uploads/destination/c1_1693905223.jpg" class="img-fluid"
              alt="UK">
            <div class="card-header bg-light border-0 pl-4 pr-4">
              <h4 class="text-center" style="font-size:15px; font-weight:600;">Study in
                UK</h4>
              <a href="https://educationmalaysia.in/uk" class="btn btn_apply w-100" style="height:40px">View
                Details</a>
            </div>
          </div>
        </div>
        <div class="singles_items">
          <div class="card shadow-0 mb-0">
            <img data-src="https://educationmalaysia.in/uploads/destination/canada_1694003866.jpg" class="img-fluid"
              alt="Canada">
            <div class="card-header bg-light border-0 pl-4 pr-4">
              <h4 class="text-center" style="font-size:15px; font-weight:600;">Study in
                Canada</h4>
              <a href="https://educationmalaysia.in/canada" class="btn btn_apply w-100" style="height:40px">View
                Details</a>
            </div>
          </div>
        </div>
        <div class="singles_items">
          <div class="card shadow-0 mb-0">
            <img data-src="https://educationmalaysia.in/uploads/destination/australia_1694003416.jpg" class="img-fluid"
              alt="Australia">
            <div class="card-header bg-light border-0 pl-4 pr-4">
              <h4 class="text-center" style="font-size:15px; font-weight:600;">Study in
                Australia</h4>
              <a href="https://educationmalaysia.in/australia" class="btn btn_apply w-100" style="height:40px">View
                Details</a>
            </div>
          </div>
        </div>
        <div class="singles_items">
          <div class="card shadow-0 mb-0">
            <img data-src="https://educationmalaysia.in/uploads/destination/germany_1694003453.jpg" class="img-fluid"
              alt="Germany">
            <div class="card-header bg-light border-0 pl-4 pr-4">
              <h4 class="text-center" style="font-size:15px; font-weight:600;">Study in
                Germany</h4>
              <a href="https://educationmalaysia.in/germany" class="btn btn_apply w-100" style="height:40px">View
                Details</a>
            </div>
          </div>
        </div>
        <div class="singles_items">
          <div class="card shadow-0 mb-0">
            <img data-src="https://educationmalaysia.in/uploads/destination/cyprus_1694003541.jpg" class="img-fluid"
              alt="Cyprus">
            <div class="card-header bg-light border-0 pl-4 pr-4">
              <h4 class="text-center" style="font-size:15px; font-weight:600;">Study in
                Cyprus</h4>
              <a href="https://educationmalaysia.in/cyprus" class="btn btn_apply w-100" style="height:40px">View
                Details</a>
            </div>
          </div>
        </div>
        <div class="singles_items">
          <div class="card shadow-0 mb-0">
            <img data-src="https://educationmalaysia.in/uploads/destination/netherlands_1694003580.jpg"
              class="img-fluid" alt="Netherlands">
            <div class="card-header bg-light border-0 pl-4 pr-4">
              <h4 class="text-center" style="font-size:15px; font-weight:600;">Study in
                Netherlands</h4>
              <a href="https://educationmalaysia.in/netherlands" class="btn btn_apply w-100" style="height:40px">View
                Details</a>
            </div>
          </div>
        </div>
        <div class="singles_items">
          <div class="card shadow-0 mb-0">
            <img data-src="https://educationmalaysia.in/uploads/destination/singapore_1694003784.jpg" class="img-fluid"
              alt="Singapore">
            <div class="card-header bg-light border-0 pl-4 pr-4">
              <h4 class="text-center" style="font-size:15px; font-weight:600;">Study in
                Singapore</h4>
              <a href="https://educationmalaysia.in/singapore" class="btn btn_apply w-100" style="height:40px">View
                Details</a>
            </div>
          </div>
        </div>
        <div class="singles_items">
          <div class="card shadow-0 mb-0">
            <img data-src="https://educationmalaysia.in/uploads/destination/usa_1694003802.jpg" class="img-fluid"
              alt="USA">
            <div class="card-header bg-light border-0 pl-4 pr-4">
              <h4 class="text-center" style="font-size:15px; font-weight:600;">Study in
                USA</h4>
              <a href="https://educationmalaysia.in/usa" class="btn btn_apply w-100" style="height:40px">View
                Details</a>
            </div>
          </div>
        </div>
        <div class="singles_items">
          <div class="card shadow-0 mb-0">
            <img data-src="https://educationmalaysia.in/uploads/destination/new-zealand_1694003819.jpg"
              class="img-fluid" alt="New Zealand">
            <div class="card-header bg-light border-0 pl-4 pr-4">
              <h4 class="text-center" style="font-size:15px; font-weight:600;">Study in
                New Zealand</h4>
              <a href="https://educationmalaysia.in/new-zealand" class="btn btn_apply w-100" style="height:40px">View
                Details</a>
            </div>
          </div>
        </div>
        <div class="singles_items">
          <div class="card shadow-0 mb-0">
            <img data-src="https://educationmalaysia.in/uploads/destination/india_1694003915.jpg" class="img-fluid"
              alt="India">
            <div class="card-header bg-light border-0 pl-4 pr-4">
              <h4 class="text-center" style="font-size:15px; font-weight:600;">Study in
                India</h4>
              <a href="https://educationmalaysia.in/india" class="btn btn_apply w-100" style="height:40px">View
                Details</a>
            </div>
          </div>
        </div>
      </div>

      <div class="row justify-content-center mt-4">
        <a href="universities" class="btn btn-modern float-none">View all Destinations<span><i
              class="fa fa-angle-right"></i></span></a>
      </div>
    </div>
  </section>
  <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($exams->count() > 0): ?>
    <section class="bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12 col-md-12 mb-3">
            <div class="sec-heading center">
              <h2>Study <span class="theme-cl">Abroad Exams</span> with Britannica</h2>
            </div>
          </div>
        </div>

        <div class="row">
          <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $exams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
            <div class="col-lg-4 col-md-4 col-sm-6">
              <div class="education_block_grid style_2 mb-4">
                <div class="education_block_body">
                  <div class="course-short"><?php echo e($row->exam_name); ?></div>
                  <h4 class="bl-title"><a href="exam-detail"><?php echo e($row->title); ?></a></h4>
                </div>
                <div class="cources_info_style3">
                  <p class="mb-0"><?php echo e($row->shortnote); ?></p>
                </div>
                <div class="education_block_footer align-items-center p-3">
                  <div class="education_block_author"><a href="<?php echo e(url('exam/' . $row->exam_slug . '/overview')); ?>"
                      class="card-btn">Click
                      more info <i class="fa fa-arrow-right ml-1"></i></a></div>
                </div>
              </div>
            </div>
          <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
        </div>
        <div class="row justify-content-center">
          <a href="<?php echo e(route('exams')); ?>" class="btn btn-modern float-none">View all Exams<span><i
                class="fa fa-angle-right"></i></span></a>
        </div>
      </div>
    </section>
  <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

  <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($testimonials->count() > 0): ?>
    <section class="new-testi">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-sm-12 text-center">
            <h2>What our <span class="theme-cl">students</span> are saying</h2>
          </div>
        </div>

        <div class="row mt-3 edu_cat_2 cat-3">
          <div class="col-lg-3 rating-box">
            <div class="rating _wrk_prc_wrap active">
              <p>42,150+ reviews</p>
              <div class="testi-rate">
                <i class="fa fa-star filled"></i>
                <i class="fa fa-star filled"></i>
                <i class="fa fa-star filled"></i>
                <i class="fa fa-star filled"></i>
                <i class="fa fa-star filled"></i>
              </div>
              <h3>4.9/5</h3>
              <div class="row justify-content-center"><a href="#" class="btn btn-modern float-none">Get free
                  counselling <span><i class="fa fa-angle-right"></i></span></a></div>
            </div>
          </div>

          <div class="col-lg-9 text-center">
            <div class="reviews_third" id="reviews-slide">
              <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                <div class="testimonial-wraps">
                  <div class="testimonial-icon">
                    <div class="testimonial-icon-thumb"><span class="quotes"><i class="fas fa-quote-left"></i></span>
                    </div>
                    <h4><?php echo e($row->name); ?></h4>
                  </div>
                  <div class="facts-detail">
                    <p><?php echo e($row->review); ?></p>
                    <h5>Student from <?php echo e($row->country); ?></h5>
                  </div>
                </div>
              <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
            </div>
          </div>
        </div>

      </div>
    </section>
  <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
  <style type="text/css">
    section {
      padding: 40px 0px 40px !important;
    }

    .job-heading h2 {
      font-size: 27px;
    }

    .btn.btn-modern {
      float: none;
    }

    .pt-40 {
      padding-top: 40px;
    }

    .pb-40 {
      padding-bottom: 40px;
    }

    .text-bold p span {
      font-weight: 600;
      color: #000;
    }

    .text-prnt {
      margin: 20px 0px 20px;
    }

    .text-prnt p {
      line-height: normal;
      color: #000;
      font-size: 14px;
    }

    .btn.btn-modern.dark:hover,
    .btn.btn-modern.dark:focus {
      background: #ffffff;
      color: #0a4191 !important;
    }

    .img {
      margin: 0px 0px 40px;
    }

    select.form-control:not([size]):not([multiple]) {
      height: 50px;
    }

    .demo-btn {
      text-align: center;
      display: block;
    }

    .form-heading h5 {
      font-size: 22px;
    }

    .form-heading span {
      color: #0a4191;
    }

    .img img {
      width: 100%
    }

    .form-input input {
      height: 38px;
    }

    .form-input select {
      height: 40px !important;
    }

    .booking-form {
      box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
      border-radius: 5px;
    }

    .pra-pl p {
      padding-left: 24px;
    }

    .box-style {
      box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
    }

    .heading-padding h2 {
      padding: 10px;
      color: #0a4191;
      font-size: 28px;
    }

    .open-button {
      background-color: #e4004a;
      color: white;
      padding: 10px 16px;
      border: none;
      cursor: pointer;
      opacity: 1;
      bottom: 23px;
      right: 28px;
      width: 280px;
    }

    /* The popup form - hidden by default */
    .form-popup {
      display: none;
      bottom: 0;
      right: 15px;
      border: 3px solid #f1f1f1;
      z-index: 9;
      position: fixed;
    }

    /* Add styles to the form container */
    .form-container {
      max-width: 300px;
      padding: 10px;
      background-color: white;
    }

    /* Full-width input fields */
    .form-container input[type=text],
    .form-container input[type=password] {
      width: 100%;
      padding: 15px;
      border: none;
    }

    /* When the inputs get focus, do something */
    .form-container input[type=text]:focus,
    .form-container input[type=password]:focus {
      background-color: #ddd;
      outline: none;
    }

    /* Set a style for the submit/login button */
    .form-container .btn {
      background-color: #0a4191;
      color: white;
      padding: 10px 20px;
      border: none;
      cursor: pointer;
      width: 100%;
      margin-top: 10px;
    }

    .tab-width {
      width: 100%;
    }

    /* Add a red background color to the cancel button */
    .form-container .cancel {
      background-color: #000;
    }

    /* Add some hover effects to buttons */
    .form-container .btn:hover,
    .open-button:hover {
      opacity: 1;
    }

    .new-page-heading h5 {
      font-size: 25px;
      text-align: center;
    }

    .new-page-heading span {
      color: #0a4191 !important;
    }

    .form-heading h5 {
      font-size: 25px;
    }
  </style>
  <script>
    function openForm() {
      document.getElementById("myForm").style.display = "block";
    }

    function closeForm() {
      document.getElementById("myForm").style.display = "none";
    }
  </script>
  <script>
    grecaptcha.ready(function() {
      grecaptcha.execute('<?php echo e(gr_site_key()); ?>', {
          action: 'contact_us'
        })
        .then(function(token) {
          // Set the reCAPTCHA token in the hidden input field
          document.getElementById('g-recaptcha-response').value = token;
        });
    });
  </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\reactwithlaravel.educationmalaysia.in\resources\views\front\job-detail.blade.php ENDPATH**/ ?>