<?php $__env->startSection("main"); ?>
          <div class="tables-wrapper">
            <div class="row">
              <div class="col-lg-12">
                <div class="card-style mb-30">
                  <h6 class="mb-10">Danh sách đánh giá</h6>
                   <p style="display: none;" id="check">review</p>
                  <div class="table-wrapper table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>
                            <h6>ID</h6>
                          </th>
                          <th>
                            <h6>Bình luận</h6>
                          </th>
                          <th>
                            <h6>Người dùng</h6>
                          </th>
                          <th>
                            <h6>Phòng</h6>
                          </th>
                          <th>
                            <h6>Đánh giá</h6>
                          </th>
                          <th>
                            <h6>Tạo ngày</h6>
                          </th>
                          <th>
                            <h6>Sửa ngày</h6>
                          </th>
                        <th>
                            <h6>Hành động</h6>
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $__currentLoopData = $rv; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $h): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                        <td><?php echo e($h->id); ?></td>
                        <td><?php echo e($h->comment); ?></td>
                        <td><?php echo e("$h->userid-$h->usern"); ?></td>
                        <td><?php echo e("$h->roomid-$h->roomn"); ?></td>
                        <td><?php echo e($h->rating); ?></td>
                        <td><?php echo e($h->created_at); ?></td>
                        <td><?php echo e($h->updated_at); ?></td>
                        <td>
                            <a href="#" class="btn btn-primary">a</a>

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
<?php echo $__env->make("admin.layout.main", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Admin\Videos\Captures\quanlidatphongks\resources\views/admin/Room/review.blade.php ENDPATH**/ ?>