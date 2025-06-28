

<?php $__env->startSection("main"); ?>
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2><?php echo e(__("messages.Rooms")); ?></h2>
                        <div class="bt-option">
                            <a href="./home.html"><?php echo e(__("messages.Home")); ?></a>
                            <span><?php echo e(__("messages.Rooms")); ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Rooms Section Begin -->
    <section class="rooms-section spad">
        <div class="container">
            <div class="row">
                
<?php if(isset($listbycat)): ?>

<?php $__currentLoopData = $listbycat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <img src="<?php echo e(asset(url(""))); ?>/img/room/room-1.jpg" alt="">
                        <div class="ri-text">
                            <h4>Premium King Room</h4>
                            <h3>159$<span>/Pernight</span></h3>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="r-o">Size:</td>
                                        <td>30 ft</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Capacity:</td>
                                        <td>Max persion 3</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Bed:</td>
                                        <td>King Beds</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Services:</td>
                                        <td>Wifi, Television, Bathroom,...</td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="#" class="primary-btn">More Details</a>
                        </div>
                    </div>
                </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
<?php $__currentLoopData = $rooms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <div style="width: 100%; height: 200px; overflow: hidden;">
                        <img width="400px" src="<?php echo e(asset(url(""))); ?>/storage/upload/<?php echo e($v->pimage); ?>" alt="">
                        </div>
                        <div class="ri-text">
                            <h4><?php echo e($v->name); ?></h4>
                            <h3>159$<span>/Pernight</span></h3>
                            <table>
                                <tbody>
                                    <!-- <tr>
                                        <td class="r-o">Size:</td>
                                        <td>30 ft</td>
                                    </tr> -->
                                    <tr>
                                        <td class="r-o">Tiện ích:</td>
                                        <td><?php echo e($v->amenities); ?></td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Tình trạng:</td>
                                        <td><?php echo e($v->isInUse===0?"Còn phòng":"Hết phòng"); ?></td>
                                    </tr>
                                    <!-- <tr>
                                        <td class="r-o">Services:</td>
                                        <td>Wifi, Television, Bathroom,...</td>
                                    </tr> -->
                                </tbody>
                            </table>
                            <a href="<?php echo e(route("client.roomdetail",["id"=>$v->id])); ?>" class="primary-btn">Chi tiết</a>
                        </div>
                    </div>
                </div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
                                <div class="col-lg-12">
                    <div class="room-pagination">
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">Next <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Rooms Section End -->
     <?php $__env->stopSection(); ?>
<?php echo $__env->make("layout.main", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\Documents\PHP\quanlidatphongks\resources\views/client/room/list.blade.php ENDPATH**/ ?>