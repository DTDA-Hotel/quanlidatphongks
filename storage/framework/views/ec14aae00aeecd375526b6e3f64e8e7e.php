<?php $__env->startSection("main"); ?>

<style>
    .room-box {
        border: 1px solid #ccc;
        padding: 15px;
        margin-bottom: 20px;
        /* position: absolute; */
    }
    .image-group img {
        margin-right: 10px;
        margin-bottom: 10px;
        border-radius: 4px;
    }
    .topimg{
     /* margin:-126px -1px 72px -20px ;    */
         position: absolute;
    top: 5px;
    right: 5px;
    /* background: rgba(255, 0, 0, 0.8); */
    color: black;
    padding: 1px 22px;
    /* border-radius: 50%; */
    /* font-weight: bold; */
    cursor: pointer;
    font-size: 14px;
    line-height: 1;
    }
    .delicon{
        position:absolute;
    }
    .imgcont{
            position: relative;
    display: inline-block; /* để vừa khít ảnh */
    width: auto; /* hoặc auto */
    }
</style>
<p style="display: none;" id="check">trash</p>

<?php if($trashed->isEmpty()): ?>
    <p>Không có ảnh nào!</p>
<?php else: ?>
<div class="room-box row row-cols-6">
<?php $__currentLoopData = $trashed; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div title="Ảnh thuộc mã phòng <?php echo e($k->roomid); ?>, được xóa vào <?php echo e($k->deleted_at); ?>">
    <div class="image-group">
        <div class="imgcont">
            <img src="<?php echo e(asset(url(""))."/storage/upload/".$k->imgname); ?>" width="200">
            <a class="topimg" onclick="if(confirm('Bạn có chắc muốn xóa vĩnh viễn ảnh này?')) document.getElementById('delete-form-<?php echo e($k->id); ?>').submit(); return false;"><svg class="delicon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
  <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
</svg></a>
<form id="delete-form-<?php echo e($k->id); ?>" action="<?php echo e(route('storage.fdelimg', $k->id)); ?>" method="POST" style="display: none;">
    <?php echo csrf_field(); ?> 
    <?php echo method_field('DELETE'); ?>
</form>
        </div>

    </div>
    
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.layout.main", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Admin\Videos\Captures\quanlidatphongks\resources\views/admin/storage/image/trash.blade.php ENDPATH**/ ?>