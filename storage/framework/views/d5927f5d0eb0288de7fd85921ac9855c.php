<?php
  use App\Models\Country;
  use App\Models\CourseCategory;
  use App\Models\Specialization;
  use App\Models\Level;
  use App\Models\Student;

?>

<?php $__env->startPush('title'); ?>
  <title>Students</title>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('main-section'); ?>
  <div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="d-flex align-items-center">
          <div class="mr-auto">
            <div class="d-inline-block align-items-center">
              <nav>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?php echo e(url('/admin/')); ?>"><i class="mdi mdi-home-outline"></i></a></li>
                  <li class="breadcrumb-item active" aria-current="page">Students</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-12">
            <!-- NOTIFICATION FIELD START -->
            <?php if (isset($component)) { $__componentOriginal0c88f9f5840aabf224e26a6100d8e4ae = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0c88f9f5840aabf224e26a6100d8e4ae = $attributes; } ?>
<?php $component = App\View\Components\ResultNotificationField::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('result-notification-field'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\ResultNotificationField::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0c88f9f5840aabf224e26a6100d8e4ae)): ?>
<?php $attributes = $__attributesOriginal0c88f9f5840aabf224e26a6100d8e4ae; ?>
<?php unset($__attributesOriginal0c88f9f5840aabf224e26a6100d8e4ae); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0c88f9f5840aabf224e26a6100d8e4ae)): ?>
<?php $component = $__componentOriginal0c88f9f5840aabf224e26a6100d8e4ae; ?>
<?php unset($__componentOriginal0c88f9f5840aabf224e26a6100d8e4ae); ?>
<?php endif; ?>
            <!-- NOTIFICATION FIELD END -->
          </div>
          <div class="col-lg-12 col-md-12 col-12">
            <div class="box hide-this hideDiv">
              <div class="box-body">
                <h4 class="box-title text-info"> Filter</h4>
                <form method="get" class="form" enctype="multipart/form-data">
                  <hr class="my-15">
                  
                  <div class="row">
                    <div class="form-group col-md-3 col-sm-12">
                      <label>Nationality</label>
                      <select name="nationality" id="nationality" class="form-control select2">
                        <option value="">Select</option>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $nat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $na): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                          <option value="<?php echo e($na->nationality); ?>"
                            <?php echo e(isset($_GET['nationality']) && $_GET['nationality'] == $na->nationality ? 'Selected' : ''); ?>>
                            <?php echo e($na->nationality); ?></option>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                      </select>
                    </div>
                    <div class="form-group col-md-3 col-sm-12">
                      <label>Level</label>
                      <select name="level" id="level" class="form-control select2">
                        <option value="">Select</option>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $lvl; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                          <option value="<?php echo e($l->current_qualification_level); ?>"
                            <?php echo e(isset($_GET['level']) && $_GET['level'] == $l->current_qualification_level ? 'Selected' : ''); ?>>
                            <?php echo e($l->getLevel->name ?? ''); ?></option>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                      </select>
                    </div>
                    <div class="form-group col-md-3 col-sm-12">
                      <label>Course</label>
                      <select name="course" id="course" class="form-control select2">
                        <option value="">Select</option>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $cc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                          <option value="<?php echo e($c->intrested_course_category); ?>"
                            <?php echo e(isset($_GET['course']) && $_GET['course'] == $c->intrested_course_category ? 'Selected' : ''); ?>>
                            <?php echo e($c->getCourse->category ?? ''); ?></option>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                      </select>
                    </div>
                    <div class="form-group col-md-3 col-sm-12">
                      <button type="submit" class="btn btn-sm  btn-primary ">Apply</button>
                      &nbsp;
                      <a href="<?php echo e(url('admin/students')); ?>" class="btn btn-sm  btn-info ">
                        <i class="ti-trash"></i> Clear All
                      </a>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          
          <div class="col-lg-12 col-md-12 col-12">
            <div class="box">
              <div class="box-header">
                <h4 class="box-title">Students List</h4>
                <div style="float:right;" class="mb-0">
                  <input class="form-control" onkeyup="myNewF()" type="text" id="search" placeholder="Search">
                </div>
              </div>
              <div class="box-body">
                <div class="table-responsive">
                  <table id="" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th colspan="2">
                          <input style="opacity: 9;left:30px" type="checkbox" name="check_all" id="check_all"
                            value="" />
                        </th>
                        <th>Sr. No.</th>
                        <th>Action</th>
                        <th>Name</th>
                        <th>Contact</th>
                        <th>Father</th>
                        <th>Mother</th>
                        <th>Nationality</th>
                        <th>Inernational Id</th>
                        <th>Qualification Level</th>
                        <th>Intrested Course</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      ?>
                      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                        <tr id="row<?php echo e($row->id); ?>">
                          <td colspan="2">
                            <input style="opacity: 9;left:30px" type="checkbox" name="selected_id[]" class="checkbox"
                              value="<?php echo e($row->id); ?>" />
                          </td>
                          <td><?php echo e($i); ?></td>
                          <td>
                            <a href="<?php echo e(url('admin/student/' . $row->id)); ?>"
                              class="waves-effect waves-light btn btn-sm btn-outline btn-info">
                              <i class="fa fa-user" aria-hidden="true"></i>
                            </a>
                          </td>
                          <td>
                            <?php echo $row->name ? '<b>Name : </b>' . $row->name . '<br>' : ''; ?>

                            <?php echo $row->gender ? '<b>Gender : </b>' . $row->gender . '<br>' : ''; ?>

                            <?php echo $row->dob ? '<b>D.O.B : </b>' . $row->dob . '<br>' : ''; ?>

                          </td>
                          <td>
                            <?php echo $row->mobile ? '<b>Mobile : </b>' . $row->country_code . ' ' . $row->mobile . '<br>' : ''; ?>

                            <?php echo $row->email ? '<b>Email : </b>' . $row->email . '<br>' : ''; ?>

                          </td>
                          <td>
                            <?php echo $row->father ? '<b>Father : </b>' . $row->father . '<br>' : ''; ?>

                            <?php echo $row->father_occupation ? '<b>Occupation : </b>' . $row->father_occupation . '<br>' : ''; ?>

                            <?php echo $row->father_income ? '<b>Income : </b>' . $row->father_income . '<br>' : ''; ?>

                          </td>
                          <td>
                            <?php echo $row->mother ? '<b>Mother : </b>' . $row->mother . '<br>' : ''; ?>

                            <?php echo $row->mother_occupation ? '<b>Occupation : </b>' . $row->mother_occupation . '<br>' : ''; ?>

                            <?php echo $row->mother_income ? '<b>Income : </b>' . $row->mother_income . '<br>' : ''; ?>

                          </td>
                          <td><?php echo e($row->nationality); ?></td>
                          <td><?php echo e($row->aadhar); ?></td>
                          <td><?php echo e($row->getLevel->name ?? ''); ?></td>
                          <td><?php echo e($row->getCourse->category ?? ''); ?></td>
                        </tr>
                        <?php
                          $i++;
                        ?>
                      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                    </tbody>
                  </table>
                  <?php echo $rows->links('pagination::bootstrap-5'); ?>

                </div>
                <hr>
                <div class="hide-this" id="submitBtn">
                  <a title="Delete" data-toggle="tooltip" onclick="bulkForceDelete()" href="javascript:void()"
                    class="btn btn-danger btn-sm">
                    Delete
                  </a>
                  <a title="Delete" data-toggle="tooltip" onclick="bulkRestore()" href="javascript:void()"
                    class="btn btn-success btn-sm">
                    Restore
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
  <script>
    function bulkForceDelete() {
      var deleteConfirm = confirm("Are you sure?");
      if (deleteConfirm == true) {
        var users_arr = [];
        $(".checkbox:checked").each(function() {
          var userid = $(this).val();
          users_arr.push(userid);
        });
        //alert(users_arr);
        $.ajax({
          url: "<?php echo e(url('admin/student/bulk-force-delete')); ?>",
          type: 'get',
          data: {
            ids: users_arr
          },
          success: function(response) {
            //alert(response);
            if (response > 0) {
              location.reload(true);
            }
          }
        });
      }
    }

    function bulkRestore() {
      var deleteConfirm = confirm("Are you sure?");
      if (deleteConfirm == true) {
        var users_arr = [];
        $(".checkbox:checked").each(function() {
          var userid = $(this).val();
          users_arr.push(userid);
        });
        //alert(users_arr);
        $.ajax({
          url: "<?php echo e(url('admin/student/bulk-restore')); ?>",
          type: 'get',
          data: {
            ids: users_arr
          },
          success: function(response) {
            //alert(response);
            if (response > 0) {
              location.reload(true);
            }
          }
        });
      }
    }

    $("#search").keyup(function() {
      var value = this.value.toLowerCase().trim();
      $("table tr").each(function(index) {
        if (!index) return;
        $(this).find("td").each(function() {
          var id = $(this).text().toLowerCase().trim();
          var not_found = (id.indexOf(value) == -1);
          $(this).closest('tr').toggle(!not_found);
          return not_found;
        });
      });
    });

    $(document).ready(function() {
      $('#check_all').on('click', function() {
        if (this.checked) {
          $('.checkbox').each(function() {
            this.checked = true;
            $(this).closest('tr').addClass('selectedRow');
          });
        } else {
          $('.checkbox').each(function() {
            this.checked = false;
            $(this).closest('tr').removeClass('selectedRow');
          });
        }
      });
      $('.checkbox').on('click', function() {
        if ($('.checkbox:checked').length == $('.checkbox').length) {
          $('#check_all').prop('checked', true);
        } else {
          $('#check_all').prop('checked', false);
        }
      });
      $('.checkbox').on('click', function() {
        if ($('.checkbox:checked').length > 0) {
          $('#submitBtn').show();
        } else {
          $('#submitBtn').hide();
        }
      });
      $('#check_all').on('click', function() {
        if ($('.checkbox:checked').length > 0) {
          $('#submitBtn').show();
        } else {
          $('#submitBtn').hide();
        }
      });
      $('.checkbox').click(function() {
        if ($(this).is(':checked')) {
          $(this).closest('tr').addClass('selectedRow');
        } else {
          $(this).closest('tr').removeClass('selectedRow');
        }
      });
    });

    function DeleteAjax(id) {
      //alert(id);
      var cd = confirm("Are you sure ?");
      if (cd == true) {
        $.ajax({
          url: "<?php echo e(url('admin/student/force-delete')); ?>" + "/" + id,
          success: function(data) {
            if (data == '1') {
              $('#row' + id).remove();
              var h = 'Success';
              var msg = 'Record deleted successfully';
              var type = 'success';
              showToastr(h, msg, type);
            }
          }
        });
      }
    }
  </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\reactwithlaravel.educationmalaysia.in\resources\views\admin\students-trash.blade.php ENDPATH**/ ?>