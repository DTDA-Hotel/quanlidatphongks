<?php $__env->startSection("main"); ?>

<a href="<?php echo e(route("admin.addroom")); ?>" class="btn btn-primary">Thêm phòng</a>
          <div class="tables-wrapper">
            <div class="row">
              <div class="col-lg-12">
                <div class="card-style mb-30">
                  <h6 class="mb-10">Danh sách phòng</h6>
                   <p style="display: none;" id="check">rooms</p>
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
                            <h6>Ảnh chính</h6>
                          </th>
                          <th>
                            <h6>Mô tả</h6>
                          </th>
                          <th>
                            <h6>Review</h6>
                          </th>
                          <th>
                            <h6>Đánh giá</h6>
                          </th>
                          <th>
                            <h6>Tiện ích phòng</h6>
                          </th>
                          <th>
                            <h6>Vị trí</h6>
                          </th>
                          <th>
                            <h6>Tình trạng</h6>
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
                          <td class="border border-start border-end border-black">
                            <?php echo e($k->id); ?>

                          </td>
                          <td class="min-width border border-start border-end border-black" style="max-width: 150px;color:black;">
                            <p style="white-space: normal; word-wrap: break-word;"><?php echo e($k->name); ?></p>
                          </td>
                          <td class="min-width border border-start border-end border-black">
                           <?php echo e($k->category_name); ?>

                          </td>
                          <td class="min-width border border-start border-end border-black">
                            <?php if($k->pimage!=null||$k->pimage!=""): ?>
                            <img width="100%" src="<?php echo e(asset(url(""))."/storage/upload/".$k->pimage); ?>" alt="ảnh">
                            <?php else: ?>
                              không có ảnh
                            <?php endif; ?>
                          </td>
                          <td style="max-width: 240px;" class="border border-start border-end border-black">
                           <p style="max-width:200px ;white-space: nowrap;overflow:hidden;text-overflow:ellipsis;  " > <?php echo e($k->description); ?></p>
                          </td>
                          <td class="min-width border border-start border-end border-black">
                            <?php echo e($k->review); ?> 
                            
                          </td>
                          <td class="border border-start border-end border-black">
                            <?php echo e($k->rating); ?>

                          </td>
                          <td class="border border-start border-end border-black">
                          <p style="max-width:200px ;white-space: nowrap;overflow:hidden;text-overflow:ellipsis; " > <?php echo e($k->amenities); ?>

                          </td>
                          <td class="border border-start border-end border-black">
                            <?php echo e($k->position); ?>

                          </td>
                          <td class="border border-start border-end border-black">
                            <?php echo e($k->isInUse==0?"Phòng trống" : "Phòng đang được sử dụng"); ?>

                          </td>
                          <td class="min-width border border-start border-end border-black">
                           <?php echo e($k->created_at); ?>

                          </td>
                          <td class="min-width border border-start border-end border-black">
                            <?php echo e($k->updated_at); ?>

                          </td>
                          <td class="border border-start border-end border-black">
                            <a class="btn btn-warning" href="<?php echo e(route("admin.editroom",["id"=>$k->id])); ?>">Sửa</a><br>
                            <a onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger" href="<?php echo e(route("admin.delroom",["id"=>$k->id])); ?>">Xoá</a>
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
<?php echo $__env->make("admin.layout.main", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Admin\Videos\Captures\quanlidatphongks\resources\views/admin/Room/index.blade.php ENDPATH**/ ?>