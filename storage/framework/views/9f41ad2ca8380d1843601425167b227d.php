<div>
  <table class="table table-bordered dt-responsiv nowra w-100">
    <thead>
      <tr>
        <th>Sr. No.</th>
        <th>Category</th>
        <th>Title</th>
        <th>Description</th>
        <th>Thumbnail</th>
        <th>Author</th>
        <th>Status</th>
        <th>Activity</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
      <?php
      $url = url('admin/blog-contents/' . $row->id);
      $faqUrl = url('admin/blog-faqs/' . $row->id);
      $categorySlug = $row->category?->category_slug ?? $row->getCategory?->category_slug;
      ?>
      <tr id="row<?php echo e($row->id); ?>" <?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processElementKey('blog-row-{{ $row->id }}', get_defined_vars()); ?>wire:key="blog-row-<?php echo e($row->id); ?>">
        <td><?php echo e($rows->firstItem() + $loop->index); ?></td>
        <td><?php echo e($row->getCategory?->category_name ?? $row->category?->category_name ?? $row->category_id); ?></td>
        <td>
          <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($categorySlug): ?>
          <?php echo e($row->headline); ?>

          <?php else: ?>
          <?php echo e($row->headline); ?>

          <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </td>
        <td>
          <?php if (isset($component)) { $__componentOriginalac995f9789c85d269719e6566ddaf104 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalac995f9789c85d269719e6566ddaf104 = $attributes; } ?>
<?php $component = App\View\Components\ContentViewModal::resolve(['row' => $row,'field' => 'description'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('content-view-modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\ContentViewModal::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalac995f9789c85d269719e6566ddaf104)): ?>
<?php $attributes = $__attributesOriginalac995f9789c85d269719e6566ddaf104; ?>
<?php unset($__attributesOriginalac995f9789c85d269719e6566ddaf104); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalac995f9789c85d269719e6566ddaf104)): ?>
<?php $component = $__componentOriginalac995f9789c85d269719e6566ddaf104; ?>
<?php unset($__componentOriginalac995f9789c85d269719e6566ddaf104); ?>
<?php endif; ?>
        </td>
        <td>
          <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($row->thumbnail_path && \Illuminate\Support\Facades\Storage::disk('public')->exists($row->thumbnail_path)): ?>
          <img src="<?php echo e(storage_url($row->thumbnail_path)); ?>" alt="" height="20" width="20">
          <?php else: ?>
          N/A
          <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </td>
        <td><?php echo e($row->author?->name ?? 'Null'); ?></td>
        <td>
          <span id="astatus<?php echo e($row->id); ?>" class="badge bg-success <?php echo e($row->status == 1 ? '' : 'hide-this'); ?>"
            wire:click="toggleStatus(<?php echo e($row->id); ?>, 0)">
            Approved
          </span>
          <span id="istatus<?php echo e($row->id); ?>" class="badge bg-danger <?php echo e($row->status == 0 ? '' : 'hide-this'); ?>"
            wire:click="toggleStatus(<?php echo e($row->id); ?>, 1)">
            Pending
          </span>
        </td>
        <td>
          <div><small>Created:</small> <span class="badge bg-primary"><?php echo e($row->creator?->name ?? 'N/A'); ?></span></div>
          <div><small>Updated:</small> <span class="badge bg-warning"><?php echo e($row->updater?->name ?? 'N/A'); ?></span></div>
          <div><small>Approved:</small> <span class="badge bg-success"><?php echo e($row->approver?->name ?? 'Pending'); ?></span>
          </div>
        </td>
        <td>
          <?php if (isset($component)) { $__componentOriginal201919ccca3992f63543ba3c660510d4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal201919ccca3992f63543ba3c660510d4 = $attributes; } ?>
<?php $component = App\View\Components\CustomButton::resolve(['url' => $url,'label' => 'Content','count' => $row->contents_count] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('custom-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\CustomButton::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal201919ccca3992f63543ba3c660510d4)): ?>
<?php $attributes = $__attributesOriginal201919ccca3992f63543ba3c660510d4; ?>
<?php unset($__attributesOriginal201919ccca3992f63543ba3c660510d4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal201919ccca3992f63543ba3c660510d4)): ?>
<?php $component = $__componentOriginal201919ccca3992f63543ba3c660510d4; ?>
<?php unset($__componentOriginal201919ccca3992f63543ba3c660510d4); ?>
<?php endif; ?>
          <?php if (isset($component)) { $__componentOriginal201919ccca3992f63543ba3c660510d4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal201919ccca3992f63543ba3c660510d4 = $attributes; } ?>
<?php $component = App\View\Components\CustomButton::resolve(['url' => $faqUrl,'label' => 'Faqs','count' => $row->faqs_count] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('custom-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\CustomButton::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal201919ccca3992f63543ba3c660510d4)): ?>
<?php $attributes = $__attributesOriginal201919ccca3992f63543ba3c660510d4; ?>
<?php unset($__attributesOriginal201919ccca3992f63543ba3c660510d4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal201919ccca3992f63543ba3c660510d4)): ?>
<?php $component = $__componentOriginal201919ccca3992f63543ba3c660510d4; ?>
<?php unset($__componentOriginal201919ccca3992f63543ba3c660510d4); ?>
<?php endif; ?>
          <a href="javascript:void(0)"
            onclick="if(confirm('Are you sure ?')) { window.Livewire.find('<?php echo e($_instance->getId()); ?>').call('deleteBlog', <?php echo e($row->id); ?>) }"
            class="waves-effect waves-light btn btn-xs btn-outline btn-danger">
            <i class="fa fa-trash" aria-hidden="true"></i>
          </a>
          <a href="<?php echo e(url('admin/blogs/update/' . $row->id)); ?>"
            class="waves-effect waves-light btn btn-xs btn-outline btn-info">
            <i class="fa fa-edit" aria-hidden="true"></i>
          </a>
        </td>
      </tr>
      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
    </tbody>
  </table>

  <div class="mt-3">
    <?php echo e($rows->links()); ?>

  </div>
</div>

<?php $__env->startPush('scripts'); ?>
<script>
  document.addEventListener('livewire:init', () => {
    Livewire.on('toast', (payload) => {
      const data = Array.isArray(payload) ? payload[0] : payload;
      showToastr(data?.title || 'Success', data?.message || '', data?.type || 'success');
    });
  });
</script>
<?php $__env->stopPush(); ?>
<?php /**PATH C:\laragon\www\reactwithlaravel.educationmalaysia.in\resources\views\livewire\admin\blogs-table.blade.php ENDPATH**/ ?>