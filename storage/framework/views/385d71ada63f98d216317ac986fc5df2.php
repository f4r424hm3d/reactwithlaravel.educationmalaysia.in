<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-<?php echo e(Str::slug($title)); ?>" role="button">
    <span><?php echo e($title); ?></span>
    <div class="arrow-down"></div>
  </a>
  <div class="dropdown-menu" aria-labelledby="topnav-<?php echo e(Str::slug($title)); ?>">
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
    <a href="<?php echo e($link['url']); ?>" class="dropdown-item"><?php echo e($link['label']); ?></a>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
  </div>
</li>
<?php /**PATH C:\laragon\www\reactwithlaravel.educationmalaysia.in\resources\views\components\menu-dropdown-list.blade.php ENDPATH**/ ?>