

<?php $__env->startSection("main"); ?>

<a href="<?php echo e(route("admin.addroom")); ?>" class="btn btn-primary">Thêm phòng</a>
          <div class="tables-wrapper">
            <div class="row">
              <div class="col-lg-12">
                <div class="card-style mb-30">
                  <h6 class="mb-10">Danh sách phòng</h6>
                  
                  <div class="table-wrapper table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>
                            <h6>#</h6>
                          </th>
                          <th>
                            <h6>Tên</h6>
                          </th>
                          <th>
                            <h6>Danh mục</h6>
                          </th>
                          <th>
                            <h6>Mô tả</h6>
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
                        <!-- end table row-->
                      </thead>
                      <tbody>
                       <?php $__currentLoopData = $roomlist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                          <td>
                            <?php echo e($k->id); ?>

                          </td>
                          <td class="min-width">
                            <?php echo e($k->name); ?>

                          </td>
                          <td class="min-width">
                           <?php echo e($k->category_id); ?>

                          </td>
                          <td>
                           <p class="overflow-y-auto"> <?php echo e($k->description); ?></p>
                          </td>
                          <td class="min-width">
                           <?php echo e($k->created_at); ?>

                          </td>
                          <td class="min-width">
                            <?php echo e($k->updated_at); ?>

                          </td>
                          <td>
                            <a class="btn btn-warning" href="<?php echo e(route("admin.editroom",["id"=>$k->id])); ?>">Sửa</a>
                            <a class="btn btn-danger" href="<?php echo e(route("admin.delroom",["id"=>$k->id])); ?>">Xoá</a>
                          </td>
                        </tr>
                        <!-- end table row -->
                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </tbody>
                    </table>
                    <!-- end table -->
                  </div>
                </div>
                <!-- end card -->
              </div>
              <!-- end col -->
            </div>
            <!-- end row -->
          </div>
          <!-- ========== tables-wrapper end ========== -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin.layout.main", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\PHP3\quanlidatphongks\resources\views/admin/Room/index.blade.php ENDPATH**/ ?>