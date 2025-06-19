<?php $__env->startSection("main"); ?>
<h4 class="text-center mb-4">Danh sách người dùng</h4>

<div class="table-responsive rounded shadow-sm p-3">
  <table class="table table-bordered table-hover text-center align-middle bg-white">
    <thead style="background-color: #00bcd4; color: white;">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Tên</th>
        <th scope="col">Email</th>
        <th scope="col">Vai trò</th>
        <th scope="col">Email xác thực</th>
        <th scope="col">Mật khẩu</th>
        <th scope="col">Token ghi nhớ</th>
        <th scope="col">Ngày tạo</th>
        <th scope="col">Ngày cập nhật</th>
        <th scope="col">Hành động</th>
      </tr>

    </thead>
    <tbody>
      <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <th scope="row"><?php echo e($value->id); ?></th>
        <td><?php echo e($value->name); ?></td>
        <td><?php echo e($value->email); ?></td>
        <td><?php echo e($value->role); ?></td>
        <td><?php echo e($value->email_verified_at); ?></td>
        <td><?php echo e($value->password); ?></td>
        <td><?php echo e($value->remember_token); ?></td>
        <td><?php echo e($value->created_at); ?></td>
        <td><?php echo e($value->updated_at); ?></td>
        <td>
          <a href="<?php echo e(route('admin.edituser', $value->id)); ?>" class="btn btn-sm btn-primary">Edit</a>
          <a href="<?php echo e(route('admin.deleteuser', $value->id)); ?>" class="btn btn-sm btn-danger">Delete</a>
        </td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.layout.main", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\wamp64\www\quanlidatphongks\resources\views/admin/account/account.blade.php ENDPATH**/ ?>