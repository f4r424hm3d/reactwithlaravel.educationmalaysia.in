<div class="row">
  <div class="col-xl-12">
    <div class="card">
      <div class="card-header">
        <span style="float:left;">
          <a href="<?php echo e(aurl('university-overview/' . $university->id)); ?>"
            class="btn btn-xs btn<?php echo e($page_route == 'university-overview' ? '' : '-outline'); ?>-primary">Overview</a>

          <a href="<?php echo e(aurl('university-programs/' . $university->id)); ?>"
            class="btn btn-xs btn<?php echo e($page_route == 'university-programs' ? '' : '-outline'); ?>-primary">Courses</a>

          <a href="<?php echo e(aurl('university-photos/' . $university->id)); ?>"
            class="btn btn-xs btn<?php echo e($page_route == 'university-photos' ? '' : '-outline'); ?>-primary">Gallery</a>

          <a href="<?php echo e(aurl('university-videos/' . $university->id)); ?>"
            class="btn btn-xs btn<?php echo e($page_route == 'university-videos' ? '' : '-outline'); ?>-primary">Videos</a>

          <a href="<?php echo e(aurl('university-facilities/' . $university->id)); ?>"
            class="btn btn-xs btn<?php echo e($page_route == 'university-facilities' ? '' : '-outline'); ?>-primary">Facilities</a>

          <a href="<?php echo e(aurl('university-ranking/' . $university->id)); ?>"
            class="btn btn-xs btn<?php echo e($page_route == 'university-ranking' ? '' : '-outline'); ?>-primary">Rankings</a>

        </span>
      </div>
    </div>
  </div>
</div>
<?php /**PATH C:\laragon\www\reactwithlaravel.educationmalaysia.in\resources\views\admin\university-profile-header.blade.php ENDPATH**/ ?>