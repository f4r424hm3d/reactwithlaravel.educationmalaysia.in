<?php
  echo $utf;
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
  <url>
    <loc><?php echo e(sitemap_url('resources/services')); ?></loc>
    <lastmod><?php echo e(date('Y-m-d')); ?></lastmod>
    <changefreq>always</changefreq>
    <priority>0.8</priority>
  </url>
  <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
    <url>
      <loc><?php echo e(sitemap_url('resources/services/' . $row->uri)); ?></loc>
      <lastmod><?php echo e($row->updated_at->format('Y-m-d')); ?></lastmod>
      <changefreq>always</changefreq>
      <priority>0.5</priority>
    </url>
  <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
</urlset>
<?php /**PATH C:\laragon\www\reactwithlaravel.educationmalaysia.in\resources\views\sm\service.blade.php ENDPATH**/ ?>