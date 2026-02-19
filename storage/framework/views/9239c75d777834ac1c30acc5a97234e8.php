<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="robots" content="index, follow" />
<title><?php echo e(ucwords($meta_title)); ?></title>
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<meta name="description" content="<?php echo e($meta_description); ?>">
<meta name="keywords" content="<?php echo e($meta_keyword); ?>">
<link rel="canonical" href="<?php echo e(url()->current()); ?>" />

<link rel="shortcut icon" href="<?php echo e(storage_cdn('front/')); ?>/assets/img/favicon.png" type="image/x-icon">
<link rel="apple-touch-icon" href="<?php echo e(storage_cdn('front/')); ?>/assets/img/favicon.png" />

<!-- FB Meta Tag Starts-->
<meta property="og:title" content="<?php echo e($meta_title); ?>" />
<meta property="og:description" content="<?php echo e($meta_description); ?>" />
<meta property="og:url" content="<?php echo e(url()->current()); ?>" />
<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($og_image_path != null): ?>
  <meta property="og:image" content="<?php echo e(storage_url($og_image_path)); ?>" />
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<meta property="og:site_name" content="Education Malaysia" />
<!-- FB MEta Tag Ends -->
<!-- twitter tag -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@educatemalaysia">
<meta name="twitter:title" content="<?php echo e($meta_title); ?>" />
<meta name="twitter:description" content="<?php echo e($meta_description); ?>" />
<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($og_image_path != null): ?>
  <meta name="twitter:image" content="<?php echo e(storage_url($og_image_path)); ?>" />
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

<!-- twitter tag -->

<script type="application/ld+json">
  {
      "@context": "https://schema.org",
      "@type": "WebPage",
      "inLanguage": "en-US",
      "name": "<?php echo e($meta_title); ?>",
      "description": "<?php echo e($meta_description); ?>",
      "url": "<?php echo e(url()->current()); ?>",
      "publisher": {
          "@type": "Organization",
          "name": "Education Malaysia",
          "logo": {
              "@type": "ImageObject",
              "url": "https://www.educationmalaysia.in/assets/web/images/education-malaysia-new-logo.png",
              "width": "230",
              "height": "55"
          }
      }
  }
</script>
<?php /**PATH C:\laragon\www\reactwithlaravel.educationmalaysia.in\resources\views\front\layouts\dynamic_page_meta_tag.blade.php ENDPATH**/ ?>