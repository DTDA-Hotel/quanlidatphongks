

<?php $__env->startSection("main"); ?>

<form action="<?php echo e(route("admin.updateuser", $user->id)); ?>" method="POST" class="form">
    <?php echo csrf_field(); ?>
    <label class="form-label" for="name">Tên</label>
    <input class="form-control" type="text" name="name" id="name" value="<?php echo e($user->name); ?>">  
    <label class="form-label" for="">Email</label>
    <input class="form-control" type="text" name="email" id="email" value="<?php echo e($user->email); ?>">
      <label class="form-label" for="">Password</label>
    <input class="form-control" type="text" name="password" id="password" value="<?php echo e($user->password); ?>">
      <label class="form-label" for="role">Role</label>
    <input class="form-control" type="number" name="role" id="role" value="<?php echo e($user->role); ?>">

    <button type="submit" class="btn btn-primary">Cập nhật</button>
  
    <a href="<?php echo e(route('admin.account')); ?>" class="btn btn-secondary">Quay lại</a>
</form>



<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.layout.main", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\MSII\OneDrive\Máy tính\DATN\quanlidatphongks\resources\views/admin/account/edit.blade.php ENDPATH**/ ?>