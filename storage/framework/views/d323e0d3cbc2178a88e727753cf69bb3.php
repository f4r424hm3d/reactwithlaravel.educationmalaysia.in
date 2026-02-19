<?php
  $page = Request::segment(3);
?>
<div data-gssticky="1" class="addSticky">
  <div class="container">
    <div class="new-links">
      <ul class="vertically-scrollbar">
        <li class="<?php echo e($page == '' ? 'active' : ''); ?>">
          <a href="<?php echo e(route('university.overview', ['university_slug' => $university->uname])); ?>">Overview</a>
        </li>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($university->activePrograms->count() > 0): ?>
          <li class="<?php echo e($page == 'courses' ? 'active' : ''); ?>">
            <a href="<?php echo e(route('university.courses', ['university_slug' => $university->uname])); ?>">Courses</a>
          </li>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($university->photos->count() > 0): ?>
          <li class="<?php echo e($page == 'gallery' ? 'active' : ''); ?>"><a
              href="<?php echo e(route('university.gallery', ['university_slug' => $university->uname])); ?>">Gallery</a></li>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($university->videos->count() > 0): ?>
          <li class="<?php echo e($page == 'video' ? 'active' : ''); ?>"><a
              href="<?php echo e(route('university.video', ['university_slug' => $university->uname])); ?>">Videos</a></li>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($university->reviews->count() > 0): ?>
          <li class="<?php echo e($page == 'reviews' ? 'active' : ''); ?>"><a
              href="<?php echo e(route('university.reviews', ['university_slug' => $university->uname])); ?>">Reviews</a>
          </li>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
      </ul>
    </div>
  </div>
</div>
<?php /**PATH C:\laragon\www\reactwithlaravel.educationmalaysia.in\resources\views\front\university-profile-menu.blade.php ENDPATH**/ ?>