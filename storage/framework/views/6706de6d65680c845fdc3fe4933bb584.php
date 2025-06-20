

<?php $__env->startSection("main"); ?>
<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-body">
            <p><strong>💵 Tổng tiền:</strong> <?php echo e(number_format($bill->total)); ?> đ</p>

            <hr>

            <h5 class="mt-4">🛏️ Chi tiết phòng:</h5>
            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-info">
                        <tr>
                            <th>#</th>
                            <th>Số phòng</th>
                            <th>Loại phòng</th>
                            <th>Giá mỗi đêm</th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $tong = 0; ?>
                        <?php $__empty_1 = true; $__currentLoopData = $bill->details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <?php
                        $thanhtien = $detail->room_rate * $detail->quantity;
                        $tong += $thanhtien;
                        ?>
                        <tr>
                            <td><?php echo e($index + 1); ?></td>
                            <td><?php echo e($detail->room->name ?? 'N/A'); ?></td>
                            <td><?php echo e($detail->room->category->name ?? 'Không rõ'); ?></td>
                            <td><?php echo e(number_format($detail->room_rate)); ?> đ</td>
                            <td><?php echo e($detail->quantity); ?></td>
                            <td><?php echo e(number_format($thanhtien)); ?> đ</td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="6" class="text-muted">Không có chi tiết phòng nào.</td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                    <?php if($bill->details->isNotEmpty()): ?>
                    <tfoot>
                        <tr>
                            <td colspan="5" class="text-end"><strong>Tổng thành tiền:</strong></td>
                            <td><strong><?php echo e(number_format($tong)); ?> đ</strong></td>
                        </tr>
                    </tfoot>
                    <?php endif; ?>
                </table>
            </div>

            <a href="<?php echo e(route('admin.bills.index')); ?>" class="btn btn-secondary mt-3">⬅ Quay lại danh sách hóa đơn</a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.layout.main", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\wamp64\www\quanlidatphongks\resources\views/admin/bill/detailedbill.blade.php ENDPATH**/ ?>