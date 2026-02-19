<div class="row">
  <div class="col-md-6 col-sm-12">
    <div class="form-group mb-3">
      <label>Meta Title</label>
      <input name="meta_title" type="text" class="form-control" placeholder="Enter Meta Title"
        value="<?php echo e($ft == 'edit' ? $sd->meta_title : old('meta_title')); ?>">
      <span id="meta_title-err" class="text-danger errSpan">
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['meta_title'];
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
  <div class="col-md-6 col-sm-12">
    <div class="form-group mb-3">
      <label>Meta Keyword</label>
      <input name="meta_keyword" type="text" class="form-control" placeholder="Meta Keyword"
        value="<?php echo e($ft == 'edit' ? $sd->meta_keyword : old('meta_keyword')); ?>">
      <span id="meta_keyword-err" class="text-danger errSpan">
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['meta_keyword'];
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
  <div class="col-md-12 col-sm-12">
    <div class="form-group mb-3">
      <label>Meta Description</label>
      <textarea name="meta_description" id="meta_description" class="form-control" cols="30" rows="5"><?php echo e($ft == 'edit' ? $sd->meta_description : old('meta_description')); ?></textarea>
      <span id="meta_description-err" class="text-danger errSpan">
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['meta_description'];
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
  
  <div class="col-md-3 col-sm-12">
    <div class="form-group mb-3">
      <label>Seo Rating</label>
      <input name="seo_rating" type="number" class="form-control" placeholder="Seo Rating"
        value="<?php echo e($ft == 'edit' ? $sd->seo_rating : old('seo_rating')); ?>" min="1" max="5" step=".1">
      <span id="seo_rating-err" class="text-danger errSpan">
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['seo_rating'];
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
  <div class="col-md-3 col-sm-12">
    <div class="form-group mb-3">
      <label>Best Rating</label>
      <input name="best_rating" type="number" class="form-control" placeholder="Best Rating"
        value="<?php echo e($ft == 'edit' ? $sd->best_rating : old('best_rating')); ?>" min="1" max="5"
        step=".1">
      <span id="best_rating-err" class="text-danger errSpan">
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['best_rating'];
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
  <div class="col-md-3 col-sm-12">
    <div class="form-group mb-3">
      <label>Number of Review</label>
      <input name="review_number" type="number" class="form-control" placeholder="Total Reviews"
        value="<?php echo e($ft == 'edit' ? $sd->review_number : old('review_number')); ?>">
      <span id="review_number-err" class="text-danger errSpan">
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['review_number'];
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
  <div class="col-md-3 col-sm-12">
    <div class="form-group mb-3">
      <label>Upload OG Image</label>
      <input name="og_image" type="file" class="form-control" placeholder="Upload OG Image">
      <span id="og_image-err" class="text-danger errSpan">
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['og_image'];
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
</div>
<?php /**PATH C:\laragon\www\reactwithlaravel.educationmalaysia.in\resources\views\components\seo-field.blade.php ENDPATH**/ ?>