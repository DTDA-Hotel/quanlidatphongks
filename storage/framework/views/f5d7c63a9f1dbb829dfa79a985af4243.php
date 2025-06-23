

<?php $__env->startSection("main"); ?>
          <div class="tables-wrapper">
            <div class="row">
              <div class="col-lg-12">
                <div class="card-style mb-30">
                    <p style="display:none;" id="check">contact</p>
    <h1>Tin nhắn liên hệ</h1>
    <div class="table-wrapper table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>Tên</th>
                <th>Email</th>
                <th>Tin nhắn</th>
                <th>Tạo ngày</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($contact->name); ?></td>
                    <td><?php echo e($contact->email); ?></td>
                    <td><?php echo e($contact->message); ?></td>
                    <td><?php echo e($contact->created_at->format('H:i:s d/m/Y')); ?></td>
                    <td>
                        <a class="btn btn-warning" href="#">Xem?</a>
                        <a class="btn btn-danger" href="#">Xóa?</a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("admin.layout.main", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Admin\Videos\Captures\quanlidatphongks\resources\views/admin/contact/index.blade.php ENDPATH**/ ?>