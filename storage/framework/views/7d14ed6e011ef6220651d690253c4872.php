<?php $__env->startSection("main"); ?>

<style>
    .row>*{
      padding-left:4px!important;
      padding-top:5px
    }
    .imgcont{
            position: relative;
    display: inline-block; /* để vừa khít ảnh */
    width: auto; /* hoặc auto */
    }
    .image-group img {
        margin-right: 10px;
        margin-bottom: 10px;
        border-radius: 4px;
    }
    .image-group{
        margin:3px;
        border:1px solid black;
        border-radius: 5px;
    }
        .room-box {
        border: 1px solid #ccc;
        padding: 15px;
        margin-bottom: 20px;
        /* position: absolute; */
    }
        .topimg{
     /* margin:-126px -1px 72px -20px ;    */
         position: absolute;
    top: 0px;
    right: 0px;
    /* background: rgba(255, 0, 0, 0.8); */
    color: black;
    /* padding: 1px 22px; */
    /* border-radius: 50%; */
    /* font-weight: bold; */
    cursor: pointer;
    font-size: 14px;
    line-height: 1;
    }
        .imgcont{
            position: relative;
    display: inline-block; /* để vừa khít ảnh */
    width: auto; /* hoặc auto */
    }
</style>



<h3>Mã phòng: <?php echo e($roominf->id); ?></h3>
<h3>Tên: <?php echo e($roominf->name); ?></h3>
<h3>Danh mục: <?php echo e($roominf->category_name); ?></h3>
<h3>Mô tả: <span><?php echo e($roominf->description); ?></span></h3>
<h3>Giá gốc: <?php echo e(number_format($roominf->base_price,0,",",".")); ?> VND</h3>

<h3>Tiện ích phòng: <span><?php echo e($roominf->amenities); ?></span></h3>
<h3>Khách sạn: <?php echo e($roominf->hotel_name); ?></h3>
<h3>Tình trạng: <?php echo e($roominf->isInUse==0?"Phòng trống":"Phòng đang sử dụng"); ?></h3>




<hr>
<h2>Ảnh phòng:</h2>
<a href="<?php echo e(route("admin.tostorepic",["id"=>$id])); ?>" class="btn btn-primary">Thêm ảnh</a>
<div class="room-box row row-cols-6">

<?php $__currentLoopData = $imglist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="image-group">
        <div class="imgcont">
            <img src="<?php echo e(asset(url(""))."/storage/upload/".$img->imgname); ?>" width="200">
            <a class="topimg" onclick="if(confirm('Bạn có chắc muốn xóa ảnh này?')) document.getElementById('delete-form-<?php echo e($img->id); ?>').submit(); return false;"><svg class="delicon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
  <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
</svg></a>
<form id="delete-form-<?php echo e($img->id); ?>" action="<?php echo e(route('storage.sdelimg', $img->id)); ?>" method="POST" style="display: none;">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
        </form>
        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.layout.main", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Admin\Videos\Captures\quanlidatphongks\resources\views/admin/Room/info.blade.php ENDPATH**/ ?>