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
              <li class="facts-1"><a href="#">Contact</a></li>
            </ul>
            <div class="ed_header_caption mb-0">
              <h1 class="ed_title mb-0">Education Malaysia</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumb -->
  <!-- Content -->
  <section class="bg-light contactusz ">
    <div class="container">

      <div class="row">
        <div class="col-lg-4 col-md-5 col-sm-12 mb-4 ">
          <div class="prc_wrap">
            <div class="prc_wrap_header">
              <h4 class="property_block_title">Contacts info & Details</h4>
            </div>
            <div class="prc_wrap-body">
              <div class="contact-info">
                <p>We at Britannica Education have not only been taking care of students but also understand their needs.
                  We consult the students as well as their family to take the right decision for a bright and happy
                  future.</p>

                <div class="cn-info-detail">
                  <div class="cn-info-content">
                    <h4 class="cn-info-title"><i class="ti-home mr-1 theme-cl"></i> Location:</h4>
                    B-16 Ground Floor, Mayfield Garden, Sector 50, Gurugram, Haryana, India 122002
                  </div>
                </div>

                <div class="cn-info-detail">
                  <div class="cn-info-content">
                    <h4 class="cn-info-title"><i class="ti-email mr-1 theme-cl"></i> Drop A Mail</h4>
                    <a href="mailto:info@educationmalaysia.in">info@educationmalaysia.in</a>
                    <a href="mailto:sales@educationmalaysia.in">sales@educationmalaysia.in</a>
                  </div>
                </div>

                <div class="cn-info-detail mb-2">
                  <div class="cn-info-content">
                    <h4 class="cn-info-title"><i class="ti-mobile mr-1 theme-cl"></i> Call Us</h4>
                    <a href="tel:+919818560331">+91 9818560331</a>
                    <a href="tel:+918130798532">+91 8130798532</a>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-8 col-md-7 col-sm-12 mb-4">
          <div class="prc_wrap">
            <div class="prc_wrap_header">
              <h4 class="property_block_title">Get in Touch</h4>
            </div>
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
            <div class="prc_wrap-body">
              <form action="<?php echo e(route('submit.contact')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="source" value="contact-us">
                <input type="hidden" name="source_path" value="<?php echo e(URL::full()); ?>">
                <div class="row">
                  <div class="col-lg-6 col-md-12">
                    <div class="form-group">
                      <label>Name</label>
                      <input type="text" placeholder="Write your name" name="name" id="name"
                        value="<?php echo e(old('name')); ?>" class="form-control simple">
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
                  <div class="col-lg-6 col-md-12">
                    <div class="form-group">
                      <label>Email</label>
                      <input type="email" placeholder="example@gmail.com" name="email" id="email"
                        value="<?php echo e(old('email')); ?>" class="form-control simple">
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
                <div class="form-group">
                  <label>Mobile Number</label>
                  <div class="row">
                    <div class="col-12 col-sm-4 ">
                      <select name="country_code" id="country_code" class="form-control simple border-0">
                        <option value="">Select</option>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $phonecodes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                          <option value="<?php echo e($item->phonecode); ?>">
                            +<?php echo e($item->phonecode); ?> (<?php echo e($item->name); ?>)
                          </option>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                      </select>
                      <span class="text-danger">
                      </span>
                    </div>
                    <div class="col-12 col-sm-8  ">
                      <div class="form-group">
                        <div class="input-group border-0">
                          <input name="mobile" type="number" class="form-control simple border-0"
                            placeholder="Ex. 9634575238" value="" required="">
                        </div>
                        <span class="text-danger">
                        </span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label>Message</label>
                  <textarea id="message" name="message" placeholder="Write Your Message" id="message" class="form-control simple"><?php echo e(old('message')); ?></textarea>
                  <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['message'];
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
                <div class="form-group main-groups">

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
                <div class="form-group mb-0"><button class="btn btn-theme" type="submit">Submit Request</button></div>
              </form>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <section class="min-sec">
    <div class="container">

      <div class="row justify-content-center">
        <div class="col-lg-12 col-md-12">
          <div class="sec-heading">
            <h2>Our <span class="theme-cl1">Locations</span></h2>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 p-0">

          <div class="container">

            <div class="custom-tab customize-tab tabs_creative">
              <ul class="nav nav-tabs pb-2 b-0 vertically-scrollbar" id="myTab" role="tablist">
                <?php $i = 1; ?>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $allCountries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                  <li class="nav-item">
                    <a class="nav-link <?php echo e($i == 1 ? 'active' : ''); ?>" id="<?php echo e($country->country); ?>-tab"
                      data-toggle="tab" href="#<?php echo e($country->country); ?>" role="tab" aria-selected="true"
                      aria-expanded="true">
                      <?php echo e(ucwords($country->country)); ?>

                    </a>
                  </li>
                  <?php $i++; ?>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
              </ul>

              <div class="tab-content" id="myTabContent">
                <?php $j = 1; ?>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $addressesByCountry; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country => $addresses): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                  <div class="tab-pane fade <?php echo e($j == 1 ? 'active' : ''); ?> show bg-light pt-4 pr-2 pb-4 pl-2"
                    id="<?php echo e($country); ?>" role="tabpanel" aria-labelledby="<?php echo e($country); ?>-tab"
                    aria-expanded="true">
                    <div class="container">
                      <div class="row">
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $addresses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $address): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                          <div class="col-lg-4 col-md-6 col-sm-12 col-12 mb-4">
                            <div class="card mb-0 h-100">
                              <div class="card-body">
                                <h5><?php echo e($address->city); ?></h5>
                                <h4 class="cn-info-title"><i class="ti-home mr-1 theme-cl"></i> Location:</h4>
                                <p class="card-text"><?php echo e($address->address); ?></p>
                                <p class="cn-info-title theme-cl"><i class="ti-mobile mr-1 theme-cl"></i> Contact: <a
                                    href="tel:<?php echo e($address->mobile); ?>"><?php echo e($address->mobile); ?></a></p>
                                <p class="cn-info-title theme-cl"><i class="ti-email mr-1 theme-cl"></i> Email: <a
                                    href="mailto:<?php echo e($address->email); ?>"><?php echo e($address->email); ?></a></p>
                              </div>
                            </div>
                          </div>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                      </div>
                    </div>
                  </div>
                  <?php $j++; ?>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-light">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12 col-md-12">
          <div class="sec-heading">
            <h2>View in <span class="theme-cl">Google map</span></h2>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 p-0">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14035.267462665315!2d77.0567231!3d28.4247823!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdff990e03def313c!2sBritannica%20Overseas%20Education!5e0!3m2!1sen!2sin!4v1673527931145!5m2!1sen!2sin"
              width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Content -->
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

<?php echo $__env->make('front.layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\reactwithlaravel.educationmalaysia.in\resources\views\front\contact.blade.php ENDPATH**/ ?>