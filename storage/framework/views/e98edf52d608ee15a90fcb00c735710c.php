<?php $__env->startPush('seo_meta_tag'); ?>
  <?php echo $__env->make('front.layouts.dynamic_page_meta_tag', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('breadcrumb_schema'); ?>
  <!-- breadcrumb schema Code -->
  <script type="application/ld+json">
    {
      "@context": "https://schema.org/",
      "@type": "BreadcrumbList",
      "name": "<?php echo e(ucwords($meta_title)); ?>",
      "description": "<?php echo e($meta_description); ?>",
      "itemListElement": [{
        "@type": "ListItem",
        "position": 1,
        "name": "Home",
        "item": "<?php echo e(url('/')); ?>"
      }, {
        "@type": "ListItem",
        "position": 2,
        "name": "<?php echo e($article->getDestination->destination_name); ?>",
        "item": "<?php echo e(url($article->getDestination->destination_slug)); ?>"
      }, {
        "@type": "ListItem",
        "position": 3,
        "name": "<?php echo e($article->title); ?>",
        "item": "<?php echo e(url()->current()); ?>"
      }]
    }
  </script>
  <!-- breadcrumb schema Code End -->
<?php $__env->stopPush(); ?>
<?php $__env->startSection('main-section'); ?>
  <!-- Breadcrumb -->
  <div class="ed_detail_head" data-overlay="8">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-12 col-md-12">
          <div class="ed_detail_wrap light">
            <ul class="cources_facts_list">
              <li class="facts-1"><a href="<?php echo e(url('/')); ?>">Home</a></li>
              <li class="facts-1">
                <a href="<?php echo e(url($article->getDestination->destination_slug)); ?>">
                  <?php echo e($article->getDestination->destination_name); ?>

                </a>
              </li>
              <li class="facts-1"><?php echo e($article->title); ?></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumb -->

  <!-- Content -->
  <section class="bg-light pt-5 pb-5">
    <div class="container">
      <div class="row">

        <div class="col-lg-8 col-md-8">
          <div class="new-exam-page">

            <!-- <div class="sec-heading"> -->
            <h3><?php echo e($article->title); ?></h3>
            <!-- </div> -->

            <div class="row align-items-center mb-3">
              <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($article->author_id != null): ?>
                <div class="col-8">
                  <div class="new-author">
                    <div class="img-div">
                      <img src="<?php echo e(userIcon($article->getUser->profile_picture ?? null)); ?>"
                        alt="<?php echo e($article->getUser->name); ?>"><i class="fa fa-check-circle"></i>
                    </div>
                    <div class="cont-div">
                      <a href="#"><?php echo e($article->getUser->name); ?> </a><span> Updated on -
                        <?php echo e(getFormattedDate($article->updated_at, 'M d, Y')); ?></span>
                    </div>
                  </div>
                </div>
              <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
              <div class="col-4">
                <div class="share-button">
                  <div class="share-button__back">
                    <a class="share__link" href="#" aria-label="Share This Page"><i
                        class="ti-facebook share__icon"></i></a>
                    <a class="share__link" href="#" aria-label="Share This Page"><i
                        class="ti-twitter share__icon"></i></a>
                    <a class="share__link" href="#" aria-label="Share This Page"><i
                        class="ti-instagram share__icon"></i></a>
                    <a class="share__link" href="#" aria-label="Share This Page"><i
                        class="ti-linkedin share__icon"></i></a>
                  </div>
                  <div class="share-button__front">
                    <p class="share-button__text">Share <i class="fa fa-share-alt"></i></p>
                  </div>
                </div>
              </div>
            </div>

            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($article->image_path != null): ?>
              <img src="<?php echo e(storage_url($article->image_path)); ?>" alt="<?php echo e($article->title); ?>">
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            <a href="<?php echo e(url($article->getDestination->destination_slug)); ?>" class="big-center-btn text-white">Study In
              <?php echo e($article->getDestination->destination_name); ?>

            </a>
            <div class="edu_wraper">
              <h2><?php echo e($article->heading); ?></h2>
              <?php echo $article->description; ?>

              <a href="<?php echo e(url('book-demo')); ?>" class="big-center-btn btn-theme text-white rounded">
                Enquiry Now</a>

              <div id="accordionExample" class="accordion circullum">
                <div class="card mt-4 mb-4 shadow-0">
                  <div id="headingOne" class="card-header border-0 pl-4 pr-4 bg-light">
                    <h3 class="mb-0"><a data-toggle="collapse" data-target="#collapseOne" aria-expanded="false"
                        role="button" aria-controls="collapseOne"
                        class="d-block position-relative text-dark collapsible-link">Table of
                        Content</a></h3>
                  </div>

                  <div id="collapseOne" aria-labelledby="headingOne" data-parent="#accordionExample" class="collapse">
                    <div class="card-body pl-4 pr-4 bg-light">
                      <div class="table-of-content">
                        <ul>

                          <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $article->getAllMasterContent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                            <li><a href="#content<?php echo e($row->id); ?>"><?php echo e($row->heading); ?></a>
                              <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($row->getAllChild->count() > 0): ?>
                                <ul>
                                  <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $row->getAllChild; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                                    <li><a href="#content<?php echo e($ch->id); ?>"><?php echo e($ch->heading); ?></a></li>
                                  <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                                </ul>
                              <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            </li>
                          <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                          
                        </ul>
                      </div>
                    </div>
                  </div>

                </div>
              </div>

              <?php echo $article->description2; ?>


              <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $article->getAllMasterContent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                <div id="content<?php echo e($row->id); ?>">
                  <h2><?php echo e($row->heading); ?></h2>
                  <?php echo $row->description; ?>

                </div>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($row->getAllChild->count() > 0): ?>
                  <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $row->getAllChild; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                    <div id="content<?php echo e($ch->id); ?>">
                      <h3><?php echo e($ch->heading); ?></h3>
                      <?php echo $ch->description; ?>

                    </div>
                  <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
              <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>

              <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($article->faqs->count() > 0): ?>
                <div id="Frequently-Asked-Questions" class="mt-3 card shadow-0 bg-light pt-4 pb-4 pr-4 pl-4">
                  <h3>Frequently Asked Questions</h3>
                  <div class="row mt-3">
                    <div class="col-lg-12 col-md-12 col-sm-12 p-0">
                      <div class="container">
                        <div id="accordionExample" class="accordion circullum">
                          <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $article->faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                            <div class="card mb-0 shadow-0">
                              <div id="faqheadingOne<?php echo e($row->id); ?>" class="card-header bg-white border-0 b-b pr-4">
                                <div class="mb-0 accordion_title"><a href="#" data-toggle="collapse"
                                    data-target="#faqcollapseOne<?php echo e($row->id); ?>" aria-expanded="false"
                                    aria-controls="faqcollapseOne<?php echo e($row->id); ?>"
                                    class="d-block position-relative collapsible-link py-1"><strong>Q:</strong>
                                    <?php echo e($row->question); ?></a></div>
                              </div>
                              <div id="faqcollapseOne<?php echo e($row->id); ?>"
                                aria-labelledby="faqheadingOne<?php echo e($row->id); ?>" data-parent="#accordionExample"
                                class="collapse">
                                <div class="card-body pt-3"><strong>Ans:</strong>
                                  <?php echo e($row->answer); ?>

                                </div>
                              </div>
                            </div>
                          <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <?php $__env->startPush('breadcrumb_schema'); ?>
                  <!-- FAQ SCHEMA START -->
                  <script type="application/ld+json">
                    {
                    "@context": "https:\/\/schema.org",
                    "@type": "FAQPage",
                    "mainEntity": [
                      <?php
                    $i = 1;
                    $tfaq = count($article->faqs);
                    foreach ($article->faqs as $faq) {
                    ?> {
                          "@type": "Question",
                          "name": "<?php echo e($faq->question); ?>",
                          "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "<?php echo e(str_replace('/', '\/', str_replace('"', '\"', $faq->answer))); ?>"
                          }
                        }
                        <?php if ($i < $tfaq) { ?>, <?php } ?>
                      <?php $i++;
                    } ?>
                    ]
                    }
                  </script>
                  <!-- FAQ SCHEMA END -->
                <?php $__env->stopPush(); ?>
              <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            </div>
          </div>
        </div>

        <!-- Sidebar -->
        <div class="col-lg-4 col-md-4">
          <div class="ed_view_box style_2">
            <div class="ed_author">
              <div class="ed_author_box">
                <h4>Top Universities in <?php echo e($destination->destination_name); ?></h4>
              </div>
            </div>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $trendingUniversity; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $uni): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
              <div class="learnup-list">
                <div class="learnup-list-thumb">
                  <a href="<?php echo e(url($uni->slug)); ?>">
                    <img data-src="<?php echo e(storage_url($uni->logo_path)); ?>" class="img-fluid" alt="<?php echo e($uni->name); ?>">
                  </a>
                </div>
                <div class="learnup-list-caption">
                  <h6><a href="<?php echo e(url($uni->slug)); ?>"><?php echo e($uni->name); ?></a></h6>
                  <p class="mb-0"><i class="ti-location-pin"></i> <?php echo e($uni->city); ?>, <?php echo e($uni->state); ?></p>
                  <div class="learnup-info">
                    <span class="mr-3">
                      <a href="<?php echo e(url($uni->slug)); ?>"><i class="fa fa-edit"></i> Admission</a>
                    </span>
                    <span>
                      <a href="<?php echo e(url($uni->slug . '/courses')); ?>"><i class="fa fa-graduation-cap"></i> Programme</a>
                    </span>
                  </div>
                </div>
              </div>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
          </div>

          <!-- Trending Posts -->
          <div class="single_widgets widget_thumb_post">
            <h4 class="title mb-3">Trending Posts</h4>
            <ul>

              <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
                <li>
                  <span class="left"><img data-src="<?php echo e(storage_url($row->image_path)); ?>" alt="<?php echo e($row->title); ?>"
                      class=""></span>
                  <span class="right">
                    <a class="feed-title"
                      href="<?php echo e(url($row->getDestination->destination_slug . '/articles/' . $row->page_url)); ?>"><?php echo e($row->title); ?></a>
                    <span class="post-date"><i
                        class="ti-calendar"></i><?php echo e(getFormattedDate($row->created_at, 'd M, Y')); ?></span>
                  </span>
                </li>
              <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>

            </ul>
          </div>
          <!-- Tags Cloud -->
        </div>

      </div>

    </div>
  </section>
  <!-- Content -->
  <script>
    $('a[href*="#"]')
      .not('[href="#"]')
      .not('[href="#0"]')
      .click(function(event) {
        if (
          location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
          location.hostname == this.hostname
        ) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
          if (target.length) {
            event.preventDefault();
            $('html, body').animate({
              scrollTop: target.offset().top - 80
            }, 500, function() {});
          }
        }
      });
  </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\reactwithlaravel.educationmalaysia.in\resources\views\front\article-detail.blade.php ENDPATH**/ ?>