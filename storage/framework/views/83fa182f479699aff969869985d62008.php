<?php $__env->startSection("main"); ?>
          <div class="tables-wrapper">
            <div class="row">
              <div class="col-lg-12">
                <div class="card-style mb-30">
                  <h6 class="mb-10">Danh sách tài khoản</h6>
<p style="display: none;" id="check">acc</p>
<div class="table-wrapper table-responsive">
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Role</th>
      <th scope="col">email_verified_at	</th>
      <th scope="col">Password</th>
      <th scope="col">Remember_token</th>
      <th scope="col">Created_at</th>
      <th scope="col">Created_at</th>
      <th scope="col">Action</th>
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
        <a href="<?php echo e(route('admin.edituser', $value->id)); ?>" class="btn btn-primary">Edit</a>
        <a href="<?php echo e(route('admin.deleteuser', $value->id)); ?>" class="btn btn-danger">Delete</a>
      </td>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
</div>
</div>
</div>
</div>
</div>




<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.layout.main", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\Documents\PHP\quanlidatphongks\resources\views/admin/account/account.blade.php ENDPATH**/ ?>