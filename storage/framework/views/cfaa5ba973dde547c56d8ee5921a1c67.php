<?php $__env->startSection('main'); ?>
    <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-section">
        <p style="display:none;" id="current">about</p>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2><?php echo e(__("messages.AboutUs")); ?></h2>
                        <div class="bt-option">
                            <a href="./index.html"><?php echo e(__("messages.Home")); ?></a>
                            <span><?php echo e(__("messages.AboutUs")); ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- About Us Page Section Begin -->
    <section class="aboutus-page-section spad">
        <div class="container">
            <div class="about-page-text">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="ap-title">
                            <h2><?php echo e(__("messages.welcometoweb")); ?></h2>
                            <p><?php echo e(__("messages.aboutcontent")); ?></p>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <h2><?php echo e(__("messages.atRVN")); ?></h2>
                        <ul class="ap-services">
                            <li><i class="icon_check"></i> <?php echo e(__("messages.RVNcompare")); ?></li>
                            <li><i class="icon_check"></i> <?php echo e(__("messages.RVNview")); ?></li>
                            <li><i class="icon_check"></i> <?php echo e(__("messages.RVNdiscount")); ?></li>
                            <li><i class="icon_check"></i> <?php echo e(__("messages.RVNgetroom")); ?></li>
                            <li><i class="icon_check"></i> <?php echo e(__("messages.RVNsupport")); ?></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="about-page-services">
                <div class="row">
                    <div class="col-md-4">
                        <div class="ap-service-item set-bg" data-setbg="img/about/about-p1.jpg">
                            <div class="api-text">
                                <h3><?php echo e(__("messages.RVNresta")); ?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="ap-service-item set-bg" data-setbg="img/about/about-p2.jpg">
                            <div class="api-text">
                                <h3><?php echo e(__("messages.RVNtraandca")); ?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="ap-service-item set-bg" data-setbg="img/about/about-p3.jpg">
                            <div class="api-text">
                                <h3><?php echo e(__("messages.RVNevent")); ?></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Page Section End -->

    <!-- Video Section Begin -->
    
    <!-- Video Section End -->

    <!-- Gallery Section Begin -->
    <section class="gallery-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        
                        <h2><?php echo e(__("messages.ourbeautypic")); ?></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="gallery-item set-bg" data-setbg="img/gallery/gallery-1.jpg">
                        <div class="gi-text">
                            <h3>Room Luxury</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="gallery-item set-bg" data-setbg="img/gallery/gallery-3.jpg">
                                <div class="gi-text">
                                    <h3>Room Luxury</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="gallery-item set-bg" data-setbg="img/gallery/gallery-4.jpg">
                                <div class="gi-text">
                                    <h3>Room Luxury</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="gallery-item large-item set-bg" data-setbg="img/gallery/gallery-2.jpg">
                        <div class="gi-text">
                            <h3>Room Luxury</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Gallery Section End -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\Documents\PHP\quanlidatphongks\resources\views/client/about.blade.php ENDPATH**/ ?>