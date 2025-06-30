<?php $__env->startSection("main"); ?>

    <form action="<?php echo e(route("admin.updroom", ["id" => $roomdata->id])); ?>" method="POST" class="form"
        enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field("PUT"); ?>
        <label class="form-label" for="name">Tên</label>
        <input id="name" class="form-control" type="text" name="name" value="<?php echo e($roomdata->name); ?>">
        <label class="form-label" for="category">Danh mục</label>
        <select id="category" class="form-control" name="category">
            <!-- <option value="">--Chọn danh mục--</option> -->
            <?php $__currentLoopData = $cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option <?php echo e($roomdata->category_id == $k->id ? "selected" : ""); ?> value="<?php echo e($k->id); ?>"><?php echo e($k->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        <label for="pimage" class="form-label">Ảnh</label>
        <input accept="image/*" id="pimage" class="form-control" type="file" name="pimage">
        <?php if($roomdata->pimage): ?>
            <p class="form-label">Ảnh hiện tại</p>
            <img width="50%" src="<?php echo e(asset(url("")) . "/storage/upload/" . $roomdata->pimage); ?>" alt="ảnh"><br>
        <?php else: ?>
            Chưa có ảnh <br>
        <?php endif; ?>
        <label class="form-label" for="desc">Mô tả</label>
        <textarea id="desc" class="form-control" name="desc"><?php echo e(old('description', $roomdata->description)); ?></textarea>

        <label class="form-label" for="amenities">Tiện ích</label>
        <textarea class="form-control" id="amenities"
            name="amenities"><?php echo e(old("amenities", $roomdata->amenities)); ?></textarea>
        <label class="form-label" for="position">Vị trí</label>
        <input id="position" class="form-control" type="text" name="position"
            value="<?php echo e(old("position", $roomdata->position)); ?>">
        <input type="hidden" name="old_img" value="<?php echo e($roomdata->pimage); ?>">
        <br>
        <input type="submit" class="btn btn-primary" value="Sửa">
    </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.layout.main", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\Documents\quanlidatphongks\quanlidatphongks\resources\views/admin/Room/edit.blade.php ENDPATH**/ ?>