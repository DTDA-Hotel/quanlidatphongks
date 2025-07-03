

<?php $__env->startSection("main"); ?>
<section class="hero-section">
    <div class="container">
    <?php if($notFound): ?>
    <p style="font-weight: bold; color: red;">Không có phòng hoặc khách sạn nào khớp với: "<?php echo e($keyword); ?>"</p>
<?php else: ?>
    <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $room): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="room-result">
            <h3><?php echo e($room->name); ?></h3>
            <p>Khách sạn: <?php echo e($room->hotel->name); ?></p>
            <p>Địa chỉ: <?php echo e($room->hotel->address); ?></p>
            <p>Giá: <?php echo e(number_format($room->base_price)); ?> VND/đêm</p>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
</div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\quanlidatphongks\resources\views/client/SResult.blade.php ENDPATH**/ ?>