<?php $__env->startPush('seo_meta_tag'); ?>
  <?php echo $__env->make('front.layouts.static_page_meta_tag', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('main-section'); ?>
  <!-- Content -->
  <section class="gray pt-5 px-0 px-sm-4 px-md-5 profilesection ">
    <div class="container-fluid">
      <div class="row">
        <?php echo $__env->make('front.student.profile-sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <div class=" col-xl-9 col-lg-8 col-md-12 col-sm-12 mb-4">
          <div class="profile-infos">
          <div class="infoContent mt-0 py-0">
            <div class="row">
              <div class="col-md-12">
                <h2>Your Shortlisted Programs</h2>
              </div>
            </div>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($rows->count() > 0): ?>
              <div class="dashboard_container mt-3">
                <div class="dashboard_container_body">

                  <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                    <div class="dashboard_single_course align-items-center" id="programItem<?php echo e($row->id); ?>">
                      <div class="dashboard_single_course_caption p-0">
                        <div class="text-right">
                        <div class="dc_head_right">
                            <div class="dropdown">
                              <a class="btn btn-theme text-white rounded dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="Download"><span
                                  class="d-none d-sm-inline">Downlaod</span></a>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" x-placement="bottom-start">
                                <a class="dropdown-item" href="#">Brochure</a>
                                <a class="dropdown-item" href="#">Fee Structure</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="dashboard_single_course_head">
                          <div class="dashboard_single_course_head_flex">
                            <h4 class="dashboard_course_title"><?php echo e($row->universityProgram->course_name); ?></h4>
                          </div>
                          
                        </div>

                        <div class="row align-items-center">
                          <div class="col-md-12">
                            <div class="row">
                              <div class="col-12 col-sm-12 col-md-6 col-lg-3 mb-3 ">
                                <span class="theme-cl">Study Mode:</span>
                                
                                <span class="duratinss"> <?php echo e($row->universityProgram->study_mode); ?> </span>
                              </div>
                              <div class="col-12 col-sm-12 col-md-6 col-lg-3 mb-3 ">
                                <span class="theme-cl">Duration:</span>
                                <span class="duratinss"> <?php echo e($row->universityProgram->duration ?? 'N/A'); ?></span>
                              </div>
                              <div class="col-12 col-sm-12 col-md-6 col-lg-3 mb-3 ">
                                <span class="theme-cl">Deadline:</span>
                                
                                <span class="duratinss"> <?php echo e($row->universityProgram->application_deadline ?? 'N/A'); ?> </span>
                              </div>
                              <div class="col-12 col-sm-12 col-md-6 col-lg-3 mb-3 ">
                                
                                <span class="theme-cl">Intake:</span>
                                <span class="duratinss"><?php echo e($row->universityProgram->intake ?? 'N/A'); ?> </span>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-12 mt-1"><span class="theme-cl">
                              Exams Accepted:</span><br><?php echo e(json_to_string($row->universityProgram->exam_accepted)); ?>

                          </div>
                        </div>
                      </div>
                    </div>
                 
                  <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>

                </div>
              </div>
            <?php else: ?>
              <div class="row justify-content-center">
                
                  <p>Nothing to show yet. You haven't applied to any colleges.</p>

              
              </div>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            <div class="row justify-content-center mt-3">
              <a href="<?php echo e(url('courses-in-malaysia')); ?>" class="btn btn-modern float-none">
                Browse Colleges<span><i class="fa fa-angle-right"></i></span>
              </a>
            </div>
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

<?php echo $__env->make('front.layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\reactwithlaravel.educationmalaysia.in\resources\views\front\student\shortlist.blade.php ENDPATH**/ ?>