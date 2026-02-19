<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($row->meta_title != null): ?>
  <button type="button" class="btn btn-xs btn-outline-info waves-effect waves-light" data-bs-toggle="modal"
    data-bs-target="#SeoModalScrollable<?php echo e($row->id); ?>">View</button>
  <div class="modal fade" id="SeoModalScrollable<?php echo e($row->id); ?>" tabindex="-1" role="dialog"
    aria-labelledby="SeoModalScrollableTitle<?php echo e($row->id); ?>" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="SeoModalScrollableTitle<?php echo e($row->id); ?>">
            SEO
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h4>Meta Title</h4>
          <p><?php echo $row->meta_title; ?></p>
          <h4>Meta Keyword</h4>
          <p><?php echo $row->meta_keyword; ?></p>
          <h4>Meta Description</h4>
          <p><?php echo $row->meta_description; ?></p>
          <h4>Page Content</h4>
          <p><?php echo $row->page_content; ?></p>
          <h4>Seo Rating</h4>
          <p>Rating : <?php echo e($row->seo_rating); ?> | Best Rating : <?php echo e($row->best_rating); ?> | Number of
            Review : <?php echo e($row->review_number); ?></p>
          <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($row->og_image_path != null && ($file = Storage::disk('public')->exists($row->og_image_path))): ?>
            <h4>OG Image</h4>
            <a href="<?php echo e(storage_url($row->og_image_path)); ?>" target="_blank">View OG Image</a>
          <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
<?php else: ?>
  Null
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php /**PATH C:\laragon\www\reactwithlaravel.educationmalaysia.in\resources\views\components\seo-view-model.blade.php ENDPATH**/ ?>