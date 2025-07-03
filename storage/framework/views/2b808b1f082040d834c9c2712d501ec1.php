<?php $__env->startSection("main"); ?>

<form action="<?php echo e(route("admin.storeroom")); ?>" method="POST" class="form" enctype="multipart/form-data">
     <?php echo csrf_field(); ?>
    <label class="form-label" for="name">Tên</label>
    <input id="name" class="form-control" type="text" name="name" >
    <label class="form-label" for="category">Danh mục</label>
    <select id="category" class="form-control" name="category">
        <!-- <option value="">--Chọn danh mục--</option> -->
        <?php $__currentLoopData = $catelist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($k->id); ?>"><?php echo e($k->name); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    <label class="form-label" for="hotel">Của khách sạn</label>
    <select id="hotel" class="form-control" name="hotel">
        <!-- <option value="">--Chọn danh mục--</option> -->
        <?php $__currentLoopData = $hotel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($k->id); ?>"><?php echo e($k->name); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    <label for="pimage" class="form-label">Ảnh</label>
        <input accept="image/*" id="pimage" class="form-control" type="file" name="pimage">
        <label class="form-label" for="desc">Mô tả</label>
    <textarea id="desc" class="form-control" name="desc"></textarea>
    
    <label class="form-label" for="amenities">Tiện ích</label>
    <textarea class="form-control" id="amenities" name="amenities"></textarea>
    <label class="form-label" for="baseprice">Giá gốc(VND)</label>
    
    <input id="baseprice" class="form-control" type="currency" name="baseprice" value="0">
    <br>
    <input type="submit" class="btn btn-primary" value="Thêm">
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.layout.main", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Admin\Videos\Captures\quanlidatphongks\resources\views/admin/Room/add.blade.php ENDPATH**/ ?>