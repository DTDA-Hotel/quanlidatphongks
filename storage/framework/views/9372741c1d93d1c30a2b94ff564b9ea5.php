<?php $__env->startSection("main"); ?>

<form action="<?php echo e(route("admin.addcat")); ?>" method="POST" class="form">
    <?php echo csrf_field(); ?>
    <label class="form-label" for="name">Tên</label>
    <input class="form-control" type="text" name="name" id="name">
    <label class="form-label" for="image">Ảnh</label>
    <input class="form-control" type="file" name="image" id="img">
    <input type="submit" class="btn btn-primary" value="Thêm">
</form>

<?php $__env->stopSection(); ?>
<<<<<<<< HEAD:storage/framework/views/b006ce9afff8234ce1dd409371cbf0c8.php
<?php echo $__env->make("admin.layout.main", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Admin\Videos\Captures\quanlidatphongks\resources\views/admin/category/add.blade.php ENDPATH**/ ?>
========
<?php echo $__env->make("admin.layout.main", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\Documents\quanlidatphongks\quanlidatphongks\resources\views/admin/category/add.blade.php ENDPATH**/ ?>
>>>>>>>> 3b9ccc05e228cb54099e4c0b68ee35c7edb95eca:storage/framework/views/9372741c1d93d1c30a2b94ff564b9ea5.php
