

<?php $__env->startSection("main"); ?>


<table class="table">
  <div class="tables-wrapper">
            <div class="row">
              <div class="col-lg-12">
                <div class="card-style mb-30">
                  <h6 class="mb-10">Danh sách tài khoản</h6>
                  <div class="table-wrapper table-responsive">
  <thead>
    <tr>
      <th>
        <h6>ID</h6>
      </th>
      <th>
        <h6>Name</h6>
      </th>
      <th>
        <h6>Email</h6>
      </th>
      <th>
        <h6>Role</h6>
      </th>
      <th>
        <h6>email_verified_at</h6>
      </th>
      <th>
        <h6>Password</h6>
      </th>
      <th>
        <h6>Remember_token</h6>
      </th>
      <th>
        <h6>Created_at</h6>
      </th>
      <th>
        <h6>Created_at</h6>
      </th>
      <th>
        <h6>Action</h6>
      </th>
    </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <th scope="row"><h6><?php echo e($value->id); ?>


      </th>
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
<?php echo $__env->make("admin.layout.main", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\MSII\OneDrive\Máy tính\DATN\quanlidatphongks\resources\views/admin/account/account.blade.php ENDPATH**/ ?>