

<?php $__env->startSection("main"); ?>
          <div class="tables-wrapper">
            <div class="row">
              <div class="col-lg-12">
                <div class="card-style mb-30">
                  <h6 class="mb-10">Danh sách khách sạn</h6>
                   <p style="display: none;" id="check">hotel</p>
                  <div class="table-wrapper table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>
                            <h6>ID</h6>
                          </th>
                          <th>
                            <h6>Tên</h6>
                          </th>
                          <th>
                            <h6>Địa chỉ</h6>
                          </th>
                          <th>
                            <h6>Số phòng</h6>
                          </th>
                          <th>
                            <h6>Ảnh</h6>
                          </th>
                            <th>
                                <h6>Mô tả</h6>
                            </th>
                          <th>
                            <h6>Hành động</h6>
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $__currentLoopData = $hotel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $h): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                        <td><?php echo e($h->id); ?></td>
                        <td><?php echo e($h->name); ?></td>
                        <td><?php echo e($h->address); ?></td>
                        <td><?php echo e($h->rooms); ?></td>
                        <td><?php echo e($h->pimage); ?></td>
                        <td><?php echo e($h->description); ?></td>
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
<?php echo $__env->make("admin.layout.main", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Admin\Videos\Captures\quanlidatphongks\resources\views/admin/hotel/index.blade.php ENDPATH**/ ?>