

<?php $__env->startSection("main"); ?>

<a href="<?php echo e(route("admin.createcat")); ?>" class="btn btn-primary">Thêm danh mục</a>
          <div class="tables-wrapper">
            
            <!-- end row -->

            
            <!-- end row -->

            <div class="row">
              <div class="col-lg-12">
                <div class="card-style mb-30">
                  <h6 class="mb-10">Danh sách danh mục</h6>
                  
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
                            <h6>Ảnh</h6>
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
                        <?php $__currentLoopData = $cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            
                        
                        <tr>
                          <td>
                            <?php echo e($k->id); ?>

                          </td>
                          <td class="min-width">
                            <?php echo e($k->name); ?>

                          </td>
                          <td class="min-width">
                            <?php echo e($k->image??"Không có"); ?>

                          </td>
                          <td class="min-width">
                            <?php echo e($k->created_at); ?>

                          </td>
                          <td class="min-width">
                            <?php echo e($k->updated_at??"Chưa sửa lần nào"); ?>

                          </td>
                          <td>
                            <div class="action">
                              <button class="text-danger">
                                <i class="lni lni-trash-can"></i>
                              </button>
                            </div>
                          </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <!-- end table row -->
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
<?php echo $__env->make("admin.layout.main", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Admin\Documents\quanlidatphongks\resources\views/admin/category/category.blade.php ENDPATH**/ ?>