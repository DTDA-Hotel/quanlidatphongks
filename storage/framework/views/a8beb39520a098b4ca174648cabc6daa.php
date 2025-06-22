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
<?php echo $__env->make("admin.layout.main", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\Documents\PHP\quanlidatphongks\resources\views/admin/category/add.blade.php ENDPATH**/ ?>