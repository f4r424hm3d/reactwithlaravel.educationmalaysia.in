<?php
  echo $utf;
?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xhtml="http://www.w3.org/1999/xhtml">
  <url>
    <loc><?php echo e(url('/solutions')); ?></loc>
    <lastmod><?php echo date('Y-m-d'); ?></lastmod>
    <changefreq>always</changefreq>
    <priority>1</priority>
  </url>
  <?php foreach ($categories as $row) { ?>
  <url>
    <loc><?php echo e(url($row->category_slug)); ?></loc>
    <priority>0.80</priority>
    <changefreq>always</changefreq>
    <lastmod><?php echo date('Y-m-d', strtotime($row->updated_at)); ?></lastmod>
  </url>
  <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $row->subCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
    <url>
      <loc><?php echo e(url($row->category_slug . '/' . $sc->sub_category_slug)); ?></loc>
      <priority>0.80</priority>
      <changefreq>always</changefreq>
      <lastmod><?php echo date('Y-m-d', strtotime($sc->updated_at)); ?></lastmod>
    </url>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $sc->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
      <url>
        <loc><?php echo e(url($row->category_slug . '/' . $sc->sub_category_slug . '/' . $p->product_slug)); ?></loc>
        <priority>0.80</priority>
        <changefreq>always</changefreq>
        <lastmod><?php echo date('Y-m-d', strtotime($p->updated_at)); ?></lastmod>
      </url>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
  <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
  <?php } ?>

</urlset>
<?php /**PATH C:\laragon\www\reactwithlaravel.educationmalaysia.in\resources\views\sm\solutions.blade.php ENDPATH**/ ?>