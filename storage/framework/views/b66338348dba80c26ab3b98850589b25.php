<?php $__env->startSection("main"); ?>
<style>
    .table-light-blue {
        background-color: #e0f7fa !important;
        /* Màu xanh nước biển nhạt */
    }
</style>
<p style="display:none;" id="check">bill</p>
<div class="table-responsive rounded shadow-sm p-3 table-light-blue">
    <table class="table table-bordered table-hover text-center align-middle bg-white">
        <thead style="background-color: #00acc1; color: white;">
            <tr>
                <th>#</th>
                <th>Khách hàng</th>
                <th>Tổng tiền</th>
                <th>Ngày đặt phòng</th>
                <th>Trạng thái</th>
                <th>Ngày thanh toán</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $bills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($bill->id); ?></td>
                <td><?php echo e($bill->user->name ?? 'Không có tên'); ?></td>
                <td><?php echo e(number_format($bill->total)); ?> đ</td>
                <td><?php echo e($bill->booking_date ?? 'Không rõ'); ?></td>
                <td>
                    <?php if($bill->status == 'paid'): ?>
                    <span class="badge bg-success px-3 py-2">💰 Đã thanh toán</span>
                    <?php elseif($bill->status == 'cancelled'): ?>
                    <span class="badge bg-danger px-3 py-2">❌ Đã hủy</span>
                    <?php else: ?>
                    <form action="<?php echo e(route('admin.bills.updateStatus', $bill->id)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <select name="status" class="form-select form-select-sm w-auto d-inline-block" onchange="this.form.submit()">
                            <option value="pending" <?php echo e($bill->status == 'pending' ? 'selected' : ''); ?>>🕒 Đang đặt</option>
                            <option value="paid">💰 Đã thanh toán</option>
                            <option value="cancelled">❌ Đã hủy</option>
                        </select>
                    </form>
                    <?php endif; ?>
                </td>
                <td>
                    <?php if($bill->status == 'paid' && $bill->payment_date): ?>
                    <?php echo e($bill->payment_date->format('d/m/Y H:i')); ?>

                    <?php elseif($bill->status == 'cancelled'): ?>
                    Không thanh toán
                    <?php else: ?>
                    Không rõ
                    <?php endif; ?>
                </td>
                <td>
                    <a href="<?php echo e(route('admin.bills.show', $bill->id)); ?>" class="btn btn-sm btn-info">Chi tiết</a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.layout.main", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\quanlidatphongks\resources\views/admin/bill/index.blade.php ENDPATH**/ ?>