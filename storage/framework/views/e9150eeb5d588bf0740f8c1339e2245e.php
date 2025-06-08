<?php $__env->startSection("main"); ?>

<form action="<?php echo e(route("admin.updroom",["id"=>$roomdata->id])); ?>" method="POST" class="form">
     <?php echo csrf_field(); ?>
     <?php echo method_field('PUT'); ?>
    <label class="form-label" for="name">Tên</label>
    <input class="form-control" type="text" name="name" value="<?php echo e($roomdata->name); ?>">
    <label class="form-label" for="category">Danh mục</label>
    <select class="form-control" name="category">
        <!-- <option value="">--Chọn danh mục--</option> -->
         <?php $__currentLoopData = $cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 <option <?php echo e($roomdata->category_id==$k->id? "selected":""); ?> value="<?php echo e($k->id); ?>"><?php echo e($k->name); ?></option>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </select>
        <label class="form-label" for="desc">Mô tả</label>
    <textarea class="form-control" name="desc" ><?php echo e(old('description',$roomdata->description)); ?></textarea>
    <br>
    <input type="submit" class="btn btn-primary" value="Thêm">
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.layout.main", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\PHP3\quanlidatphongks\resources\views/admin/Room/edit.blade.php ENDPATH**/ ?>