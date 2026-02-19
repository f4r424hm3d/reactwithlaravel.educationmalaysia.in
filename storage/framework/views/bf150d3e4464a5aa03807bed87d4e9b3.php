<?php $__env->startPush('title'); ?>
  <title><?php echo e($page_title); ?></title>
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<?php $__env->stopPush(); ?>
<?php $__env->startSection('main-section'); ?>
  <div class="page-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18"><?php echo e($page_title); ?></h4>
            <div class="page-title-right">
              <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="<?php echo e(url('/admin/')); ?>"><i class="mdi mdi-home-outline"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo e($page_title); ?></li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-12">
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
      </div>
      <div class="row">
        <div class="col-xl-12">
          <div class="card">
            <div class="card-body" id="tblCDiv">
              <form class="needs-validation" method="get" enctype="multipart/form-data" novalidate>
                <div class="row">
                  <div class="col-md-6 col-sm-12 mb-3">
                    <div class="form-group">
                      <label>Search University by Name, City, State and Country</label>
                      <input name="search" id="search" type="text" class="form-control"
                        placeholder="Search University by Name, City, State and Country"
                        value="<?php echo e($_GET['search'] ?? ''); ?>" required>
                      <span class="text-danger" id="search-err">
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['search'];
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
                  <div class="col-md-3 col-sm-12 mb-3">
                    <button class="btn btn-sm btn-primary setBtn" type="submit">Search</button>
                    <a href="<?php echo e(aurl('university')); ?>" class="btn btn-sm btn-warning setBtn"><i class="ti-trash"></i>
                      Reset</a>
                    <a href="javascript:void(0)" class="btn btn-sm btn-info setBtn" id="advSearchBtn">
                      <i class="ti-trash"></i> Advance Search
                    </a>
                  </div>
                </div>
              </form>
              <div class="<?php echo e($filterApplied == true ? '' : 'hide-this'); ?>" id="advSearchForm">
                <hr>
                <form class="needs-validation" method="get" enctype="multipart/form-data" novalidate>
                  <div class="row">
                    <div class="col-md-3 col-sm-12 mb-3">
                      <div class="form-group">
                        <label>State</label>
                        <select name="state" id="state" class="form-control js-example-basic-singl">
                          <option value="">Select</option>
                          <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $filterStates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                            <option value="<?php echo e($row->state); ?>"
                              <?php echo e(isset($_GET['state']) && $_GET['state'] == $row->state ? 'selected' : ''); ?>>
                              <?php echo e($row->state); ?></option>
                          <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-12 mb-3">
                      <div class="form-group">
                        <label>City</label>
                        <select name="city" id="city" class="form-control js-example-basic-singl">
                          <option value="">Select</option>
                          <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $filterCities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                            <option value="<?php echo e($row->city); ?>"
                              <?php echo e(isset($_GET['city']) && $_GET['city'] == $row->city ? 'selected' : ''); ?>>
                              <?php echo e($row->city); ?></option>
                          <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-12 mb-3">
                      <button class="btn btn-sm btn-primary setBtn advSearchBtn" type="submit">Search</button>
                      <a href="<?php echo e(aurl('university')); ?>" class="btn btn-sm btn-warning setBtn"><i class="ti-trash"></i>
                        Reset</a>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <div style="float:left;">
                <label>
                  Show
                  <select name="limit_per_page" id="limit_per_page" class="">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $lpp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lpp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                      <option value="<?php echo e($lpp); ?>" <?php echo e($limit_per_page == $lpp ? 'selected' : ''); ?>>
                        <?php echo e($lpp); ?></option>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                  </select>
                  entries
                </label>
                <select name="order_by" id="order_by">
                  <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $orderColumns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                    <option value="<?php echo e($value); ?>" <?php echo $order_by == $value ? 'selected' : ''; ?>><?php echo e($key); ?></option>
                  <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                </select>
                <select name="order_in" id="order_in">
                  <option value="ASC" <?php echo e($order_in == 'ASC' ? 'selected' : ''); ?>>ASC</option>
                  <option value="DESC" <?php echo e($order_in == 'DESC' ? 'selected' : ''); ?>>DESC</option>
                </select>
              </div>
              <div style="float:right;">
                <a href="<?php echo e(aurl($page_route . '/export/')); ?>" class="btn btn-xs btn-success">Export</a>
              </div>
            </div>
            <div class="card-body">
              <table id="datatabl" class="table table-bordered dt-responsive nowrap w-100">
                <thead>
                  <tr>
                    <th>
                      <input type="checkbox" name="check_all" id="check_all" value=""
                        class="check-all-chkbox filled-in chk-col-primary" />
                    </th>
                    <th>Sr. No.</th>
                    <th>Name</th>
                    <th>Location</th>
                    <th>Rank</th>
                    <th>Logo/Banner</th>
                    <th>Permission</th>
                    <th>SEO</th>
                    <th>Profile</th>
                    <th>Date</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                    <tr id="row<?php echo e($row->id); ?>">
                      <td>
                        <input type="checkbox" name="selected_id[]" id="chk<?php echo e($row->id); ?>"
                          class="checkbox check-chkbox filled-in chk-col-info" value="<?php echo e($row->id); ?>" />
                        <label for="chk<?php echo e($row->id); ?>">&nbsp;</label>
                      </td>
                      <td><?php echo e($i); ?></td>
                      <td>
                        <b>Id</b> : <?php echo e($row->id); ?> <br>
                        <b>Name</b> : <?php echo e($row->name); ?> <br>
                        <b>Inst Type</b> : <?php echo e($row->instituteType->type ?? 'N/A'); ?> <br>
                        <b>Established Year</b> : <?php echo e($row->established_year ?? 'N/A'); ?> <br>
                        <b>Email</b> : <?php echo e($row->email ?? 'N/A'); ?> <br>
                        <b>CC</b> : <?php echo e($row->cc ?? 'N/A'); ?> <br>
                      </td>
                      <td>
                        <b>City</b> : <?php echo e($row->city ?? 'N/A'); ?> <br>
                        <b>State</b> : <?php echo e($row->state ?? 'N/A'); ?> <br>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($row->latitude_longitude != null): ?>
                          <a href="https://www.google.com/maps/dir/?api=1&destination=<?php echo e($row->latitude_longitude); ?>"
                            target="_blank">
                            Get Directions
                          </a>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                      </td>
                      <td>
                        <b>Rank (QS Malaysia)</b> : <?php echo e($row->rank ?? 'N/A'); ?> <br>
                        <b>QS Wrold Ranking</b> : <?php echo e($row->qs_rank ?? 'N/A'); ?> <br>
                        <b>The Times</b> : <?php echo e($row->times_rank ?? 'N/A'); ?> <br>
                        <b>QS Asia Rank</b> : <?php echo e($row->qs_asia_rank ?? 'N/A'); ?>

                      </td>
                      <td>
                        Logo : <?php echo $row->logo_path != null
                            ? '<a href="' .
                                storage_url($row->logo_path) .
                                '" target="_blank"><i class="fa fa-image" aria-hidden="true"></i></a>'
                            : 'N/A'; ?> <br>
                        Banner : <?php echo $row->banner_path != null
                            ? '<a href="' .
                                storage_url($row->banner_path) .
                                '" target="_blank"><i class="fa fa-image" aria-hidden="true"></i></a>'
                            : 'N/A'; ?>

                      </td>
                      <td id="statustd<?php echo e($row->id); ?>">
                        <table class="table-sm ">
                          <tbody>
                            <tr>
                              <td>Status</td>
                              <td>
                                <?php if (isset($component)) { $__componentOriginal397708b3bb09fb1c752545000a24874c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal397708b3bb09fb1c752545000a24874c = $attributes; } ?>
<?php $component = App\View\Components\StatusField::resolve(['row' => $row] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('status-field'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\StatusField::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal397708b3bb09fb1c752545000a24874c)): ?>
<?php $attributes = $__attributesOriginal397708b3bb09fb1c752545000a24874c; ?>
<?php unset($__attributesOriginal397708b3bb09fb1c752545000a24874c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal397708b3bb09fb1c752545000a24874c)): ?>
<?php $component = $__componentOriginal397708b3bb09fb1c752545000a24874c; ?>
<?php unset($__componentOriginal397708b3bb09fb1c752545000a24874c); ?>
<?php endif; ?>
                              </td>
                            </tr>
                            <tr>
                              <td>Home View</td>
                              <td>
                                <span id="ahome_view<?php echo e($row->id); ?>"
                                  class="badge bg-success <?php echo e($row->homeview == 1 ? '' : 'hide-this'); ?>"
                                  onclick="changeStatus('<?php echo e($row->id); ?>','homeview','0')">Active</span>
                                <span id="ihome_view<?php echo e($row->id); ?>"
                                  class="badge bg-danger <?php echo e($row->homeview == 0 ? '' : 'hide-this'); ?>"
                                  onclick="changeStatus('<?php echo e($row->id); ?>','homeview','1')">Inactive</span>
                              </td>
                            </tr>
                            <tr>
                              <td>Featured</td>
                              <td>
                                <span id="afeatured<?php echo e($row->id); ?>"
                                  class="badge bg-success <?php echo e($row->featured == 1 ? '' : 'hide-this'); ?>"
                                  onclick="changeStatus('<?php echo e($row->id); ?>','featured','0')">Yes</span>
                                <span id="ifeatured<?php echo e($row->id); ?>"
                                  class="badge bg-danger <?php echo e($row->featured == 0 ? '' : 'hide-this'); ?>"
                                  onclick="changeStatus('<?php echo e($row->id); ?>','featured','1')">No</span>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                      <td>
                        <?php if (isset($component)) { $__componentOriginal575cd02558ad67e724a201dc841d6e29 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal575cd02558ad67e724a201dc841d6e29 = $attributes; } ?>
<?php $component = App\View\Components\SeoViewModel::resolve(['row' => $row] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('seo-view-model'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\SeoViewModel::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal575cd02558ad67e724a201dc841d6e29)): ?>
<?php $attributes = $__attributesOriginal575cd02558ad67e724a201dc841d6e29; ?>
<?php unset($__attributesOriginal575cd02558ad67e724a201dc841d6e29); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal575cd02558ad67e724a201dc841d6e29)): ?>
<?php $component = $__componentOriginal575cd02558ad67e724a201dc841d6e29; ?>
<?php unset($__componentOriginal575cd02558ad67e724a201dc841d6e29); ?>
<?php endif; ?>
                      </td>
                      <td>
                        Programs : <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($row->programs->count() > 0): ?>
                          <a href="<?php echo e(url('admin/university-programs/' . $row->id)); ?>"
                            class="badge bg-success"><?php echo e($row->programs->count()); ?> Programs</a>
                        <?php else: ?>
                          <a href="<?php echo e(url('admin/university-programs/' . $row->id)); ?>" class="badge bg-danger">Null</a>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        <br>
                        Overview : <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($row->overviews->count() > 0): ?>
                          <a href="<?php echo e(url('admin/university-overview/' . $row->id)); ?>"
                            class="badge bg-success"><?php echo e($row->overviews->count()); ?> Entry</a>
                        <?php else: ?>
                          <a href="<?php echo e(url('admin/university-overview/' . $row->id)); ?>" class="badge bg-danger">Null</a>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        <br>

                      </td>
                      <td>
                        Created at : <b><?php echo e(getFormattedDate($row->created_at, 'h:i A - d-m-Y')); ?></b> <br>
                        Updated at : <b><?php echo e(getFormattedDate($row->updated_at, 'h:i A - d-m-Y')); ?></b> <br>
                      </td>
                      <td>
                        
                        <div class="dropdown">
                          <button class="btn btn-xs btn-outline-info font-size-16 shadow-none text-muted dropdown-toggle"
                            type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bx bx-dots-horizontal-rounded"></i>
                          </button>
                          <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                              <a class="dropdown-item" href="<?php echo e(aurl('university-overview/' . $row->id)); ?>"
                                target="_blank">Overview <span
                                  class="badge bg-<?php echo e($row->overviews->count() > 0 ? 'success' : 'danger'); ?>"><?php echo e($row->overviews->count()); ?></span></a>
                            </li>
                            <li>
                              <a class="dropdown-item" href="<?php echo e(aurl('university-programs/' . $row->id)); ?>"
                                target="_blank">Programs <span
                                  class="badge bg-<?php echo e($row->programs->count() > 0 ? 'success' : 'danger'); ?>"><?php echo e($row->programs->count()); ?></span></a>
                            </li>
                            <li>
                              <a class="dropdown-item" href="<?php echo e(aurl('university-photos/' . $row->id)); ?>"
                                target="_blank">Photos <span
                                  class="badge bg-<?php echo e($row->photos->count() > 0 ? 'success' : 'danger'); ?>"><?php echo e($row->photos->count()); ?></span></a>
                            </li>
                            <li>
                              <a class="dropdown-item" href="<?php echo e(aurl('university-videos/' . $row->id)); ?>"
                                target="_blank">Videos <span
                                  class="badge bg-<?php echo e($row->videos->count() > 0 ? 'success' : 'danger'); ?>"><?php echo e($row->videos->count()); ?></span></a>
                            </li>
                            <li>
                              <a class="dropdown-item" href="<?php echo e(aurl('university-facilities/' . $row->id)); ?>"
                                target="_blank">Facilities <span
                                  class="badge bg-<?php echo e($row->facilities->count() > 0 ? 'success' : 'danger'); ?>"><?php echo e($row->facilities->count()); ?></span></a>
                            </li>
                          </ul>
                        </div>
                        <a href="javascript:void()" onclick="DeleteAjax('<?php echo e($row->id); ?>')"
                          class="waves-effect waves-light btn btn-xs btn-outline btn-danger">
                          <i class="fa fa-trash" aria-hidden="true"></i>
                        </a>
                        <a href="<?php echo e(url('admin/' . $page_route . '/update/' . $row->id)); ?>"
                          class="waves-effect waves-light btn btn-xs btn-outline btn-info">
                          <i class="fa fa-edit" aria-hidden="true"></i>
                        </a>
                      </td>
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
            <div class="card-body">
              <div class="hide-this w100 float-left sbmtBtndiv" id="submitBtn">
                

                <a onclick="bulkUpdate('status','1')" href="javascript:void()" data-toggle="tooltip"
                  class="btn btn-sm btn-outline btn-success" title="Active">
                  Active
                </a>

                <a onclick="bulkUpdate('status','0')" href="javascript:void()" data-toggle="tooltip"
                  class="btn btn-sm btn-outline btn-danger" title="Inactive">
                  Inactive
                </a>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-xl-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Bulk Update</h4>
            </div>
            <div class="card-body" id="tblCDiv">
              <form method="post" action="<?php echo e(url('admin/' . $page_route . '/bulk-update-import')); ?>" id="import_csv"
                enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="row">
                  <div class="form-group col-md-4 mb-3">
                    <label>Select Excel File</label>
                    <input type="file" name="file" id="file" required class="form-control mb-2 mr-sm-2" />
                  </div>
                  <div class="form-group col-md-4 mb-3">
                    <label>&nbsp;&nbsp;</label>
                    <button style="margin-top:28px" type="submit" name="import_csv" class="btn btn-sm btn-info"
                      id="import_csv_btn">Import</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    $(document).ready(function() {
      $('.advSearchBtn').click(function() {
        // Remove empty fields before form submission
        $('select').each(function() {
          if ($(this).val() == '') {
            $(this).prop('disabled', true);
          }
        });
      });
    });

    // ORDER BY, LIMIT PER PAGE
    $(document).ready(function() {
      $('#limit_per_page').change(function() {
        var selectedValue = $(this).val(); // Get the selected value
        var currentUrl = new URL(window.location.href); // Get the current URL
        var searchParams = currentUrl.searchParams;
        // Update or set the 'limit_per_page' query parameter
        searchParams.set('limit_per_page', selectedValue);
        // Update the URL by replacing the existing query string
        currentUrl.search = searchParams.toString();
        // Reload the page with the updated URL
        window.location.href = currentUrl.href;
      });
      $('#order_by').change(function() {
        var selectedValue = $(this).val(); // Get the selected value
        var currentUrl = new URL(window.location.href); // Get the current URL
        var searchParams = currentUrl.searchParams;
        // Update or set the 'order_by' query parameter
        searchParams.set('order_by', selectedValue);
        // Update the URL by replacing the existing query string
        currentUrl.search = searchParams.toString();
        // Reload the page with the updated URL
        window.location.href = currentUrl.href;
      });
      $('#order_in').change(function() {
        var selectedValue = $(this).val(); // Get the selected value
        var currentUrl = new URL(window.location.href); // Get the current URL
        var searchParams = currentUrl.searchParams;
        // Update or set the 'order_in' query parameter
        searchParams.set('order_in', selectedValue);
        // Update the URL by replacing the existing query string
        currentUrl.search = searchParams.toString();
        // Reload the page with the updated URL
        window.location.href = currentUrl.href;
      });
      $('#advSearchBtn').click(function() {
        $('#advSearchForm').toggle();
      });
    });

    // CHECK ALL CHECKBOX
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

    // UPDATE BULK FIELD (STATUS)
    function bulkUpdate(col, val) {
      var tbl = 'universities';
      var users_arr = [];
      $(".checkbox:checked").each(function() {
        var userid = $(this).val();
        users_arr.push(userid);
      });
      $.ajax({
        url: "<?php echo e(url('common/update-bulk-field')); ?>",
        type: 'get',
        data: {
          ids: users_arr,
          val: val,
          col: col,
          tbl: tbl
        },
        success: function(response) {
          //alert(response.affected_rows);
          if (response.affected_rows > '0') {
            var h = 'Success';
            var msg = response.affected_rows + ' rows updated successfully';
            var type = 'success';
          } else {
            var h = 'Danger';
            var msg = 'Not any record updated';
            var type = 'danger';
          }
          showToastr(h, msg, type);
          if (col == 'status' && val == 1) {
            $('tr.selectedRow span.active_status').show();
            $('tr.selectedRow span.inactive_status').hide();
          } else if (col == 'status' && val == 0) {
            $('tr.selectedRow span.active_status').hide();
            $('tr.selectedRow span.inactive_status').show();
          }
        }
      });

    }
    // DELETE BULK
    function bulkDelete() {
      var deleteConfirm = confirm("Are you sure?");
      if (deleteConfirm == true) {
        var tbl = 'universities';
        var users_arr = [];
        $(".checkbox:checked").each(function() {
          var userid = $(this).val();
          users_arr.push(userid);
        });
        $.ajax({
          url: "<?php echo e(url('common/bulk-delete')); ?>",
          type: 'get',
          data: {
            ids: users_arr,
            tbl: tbl
          },
          success: function(response) {
            location.reload(true);
          }
        });
      }
    }

    function changeStatus(id, col, val) {
      //alert(id);
      var tbl = 'universities';
      $.ajax({
        url: "<?php echo e(url('common/update-field')); ?>",
        method: "GET",
        data: {
          id: id,
          tbl: tbl,
          col: col,
          val: val
        },
        success: function(data) {
          if (data == '1') {
            //alert('status changed of ' + id + ' to ' + val);
            if (val == '1') {
              $('#a' + col + id).toggle();
              $('#i' + col + id).toggle();
            }
            if (val == '0') {
              $('#a' + col + id).toggle();
              $('#i' + col + id).toggle();
            }
          }
        }
      });
    }

    $(document).ready(function() {
      $('#course_category_id').on('change', function(event) {
        var course_category_id = $('#course_category_id').val();
        $.ajax({
          url: "<?php echo e(aurl('course-specialization/get-by-category')); ?>",
          method: "GET",
          data: {
            course_category_id: course_category_id
          },
          success: function(result) {
            $('#specialization_id').html(result);
          }
        })
      });
      $('#country').on('change', function(event) {
        var country = $('#country').val();
        //alert(country);
        $.ajax({
          url: "<?php echo e(aurl('get-state-by-country')); ?>",
          method: "GET",
          data: {
            country: country
          },
          success: function(result) {
            //alert(result);
            $('#state').html(result);
          }
        })
        $.ajax({
          url: "<?php echo e(aurl('get-city-by-state')); ?>",
          method: "GET",
          data: {
            country: country
          },
          success: function(result) {
            $('#city').html(result);
          }
        })
      });
      $('#state').on('change', function(event) {
        var state = $('#state').val();
        var country = $('#country').val();
        $.ajax({
          url: "<?php echo e(aurl('get-city-by-state')); ?>",
          method: "GET",
          data: {
            country: country,
            state: state,
          },
          success: function(result) {
            $('#city').html(result);
          }
        })
      });
    });

    function DeleteAjax(id) {
      //alert(id);
      var cd = confirm("Are you sure ?");
      if (cd == true) {
        $.ajax({
          url: "<?php echo e(url('admin/' . $page_route . '/delete')); ?>" + "/" + id,
          success: function(data) {
            if (data == '1') {
              var h = 'Success';
              var msg = 'Record deleted successfully';
              var type = 'success';
              $('#row' + id).remove();
              $('#toastMsg').text(msg);
              $('#liveToast').show();
              showToastr(h, msg, type);
            }
          }
        });
      }
    }

    CKEDITOR.replace('description');
  </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\reactwithlaravel.educationmalaysia.in\resources\views\admin\university.blade.php ENDPATH**/ ?>