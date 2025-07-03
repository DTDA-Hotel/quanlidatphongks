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
                            <h6 class="d-flex justify-content-center">#</h6>
                          </th>
                          <th>
                            <h6 class="d-flex justify-content-center">Tên</h6>
                          </th>
                          <th>
                            <h6 class="d-flex justify-content-center">Danh mục</h6>
                          </th>
                          <th>
                            <h6 class="d-flex justify-content-center">Ảnh chính</h6>
                          </th>
                          <th>
                            <h6 class="d-flex justify-content-center">Mô tả</h6>
                          </th>
                          <th>
                            <h6 class="d-flex justify-content-center">Review</h6>
                          </th>
                          <th>
                            <h6 class="d-flex justify-content-center">Giá gốc</h6>
                          </th>
                          <th>
                            <h6 class="d-flex justify-content-center">Tiện ích phòng</h6>
                          </th>
                          <th>
                            <h6 class="d-flex justify-content-center">Khách sạn</h6>
                          </th>
                          <th>
                            <h6 class="d-flex justify-content-center">Tình trạng</h6>
                          </th>
                          <th>
                            <h6 class="d-flex justify-content-center">Tạo ngày</h6>
                          </th>
                          <th>
                            <h6 class="d-flex justify-content-center">Sửa ngày</h6>
                          </th>
                          <th>
                            <h6 class="d-flex justify-content-center">Hành động</h6>
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
                          <td style="max-width:150px" class="min-width border border-start border-end border-black">
                            <?php if($k->pimage!=null||$k->pimage!=""): ?>
                            <img width="100%" src="<?php echo e(asset(url(""))."/storage/upload/".$k->pimage); ?>" alt="ảnh">
                            <?php else: ?>
                              không có ảnh
                            <?php endif; ?>
                          </td>
                          <td style="max-width: 240px;" class="border border-start border-end border-black">
                           <p title="<?php echo e($k->description); ?>" style="max-width:200px ;white-space: nowrap;overflow:hidden;text-overflow:ellipsis;  " > <?php echo e($k->description); ?></p>
                          </td>
                          <td class="min-width border border-start border-end border-black">
                            <?php echo e($k->review); ?> 
                            <a href="<?php echo e(route("admin.reviews",["id"=>$k->id])); ?>" class="btn btn-success">Review</a>
                            
                            
                          </td>
                          <td class="border border-start border-end border-black">
                            <?php echo e(number_format($k->base_price,0,",",".")); ?>VND
                          </td>
                          <td class="border border-start border-end border-black">
                          <p style="max-width:200px ;white-space: nowrap;overflow:hidden;text-overflow:ellipsis; " > <?php echo e($k->amenities); ?>

                          </td>
                          <td class="border border-start border-end border-black">
                            <?php echo e($k->hotel_name); ?>

                          </td>
                          <td class="border border-start border-end border-black">
                            <?php echo e($k->isInUse==0?"Phòng trống" : "Phòng đang được sử dụng"); ?>

                          </td>
                          <td style="max-width:110px" class="min-width border border-start border-end border-black">
                           <?php echo e($k->created_at); ?>

                          </td>
                          <td style="max-width:110px" class="min-width border border-start border-end border-black">
                            <?php echo e($k->updated_at); ?>

                          </td>
                          <td class="border border-start border-end border-black">
                            <a href="<?php echo e(route("admin.showroom",["id"=>$k->id])); ?>" class="btn btn-success">Chi tiết</a>
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