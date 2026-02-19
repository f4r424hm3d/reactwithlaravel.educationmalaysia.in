<?php $__env->startPush('seo_meta_tag'); ?>
  <?php echo $__env->make('front.layouts.static_page_meta_tag', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('main-section'); ?>
  <!-- Content -->
  <section class="gray pt-5 px-0 px-sm-4 px-md-5 profilesection">
    <div class="container-fluid">
      <div class="row">
        <?php echo $__env->make('front.student.profile-sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <div class=" col-xl-9 col-lg-8 col-md-12 col-sm-12 mb-4">
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
          <div class="profile-infos">
            <div class="infoContent mt-0 pt-0 pb-2">
              <form action="<?php echo e(url('student/change-password')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="id" value="<?php echo e($student->id); ?>">
                <div class="row">
                  <div class="col-md-12 mb-3 text-center ">
                    <h2 class="fullchagesn">Change Password</h2>
                  </div>
                  <div class="col-md-12 mb-3">
                    <label>Password <span class="red">*</span></label>
                    <input name="old_password" type="password" placeholder="Enter Current Password" required>
                    <span class="text-danger">
                      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['old_password'];
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
                  <div class="col-md-12 mb-3">
                    <label>Enter New Password</label>
                    <input name="new_password" type="password" placeholder="Enter New Password" required>
                    <span class="text-danger">
                      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['new_password'];
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
                  <div class="col-md-12 mb-3">
                    <label>Confirm New Password</label>
                    <input name="confirm_new_password" type="password" placeholder="Confirm New Password" required>
                    <span class="text-danger">
                      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['confirm_new_password'];
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
                  <div class="col-md-12 mb-3">
                    <div class="d-flex align-items-center set-gap justify-content-end ">
                      <button class="btn btn-primary">Save</button>
                      <button class="btn btn-secondary">Cancel</button>
                    </div>

                  </div>
                </div>
              </form>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
  <!-- Content -->
  <script>
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

<?php echo $__env->make('front.layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\reactwithlaravel.educationmalaysia.in\resources\views\front\student\change-password.blade.php ENDPATH**/ ?>