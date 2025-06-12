@extends("admin.layout.main")

@section("main")
{{-- this is category page --}}
<a href="{{ route("admin.addroom") }}" class="btn btn-primary">Thêm phòng</a>
          <div class="tables-wrapper">
            <div class="row">
              <div class="col-lg-12">
                <div class="card-style mb-30">
                  <h6 class="mb-10">Danh sách phòng</h6>
                  {{-- <p class="text-sm mb-20">
                    For basic styling—light padding and only horizontal
                    dividers—use the class table.
                  </p> --}}
                  {{-- {{ $roomlist }} --}}
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
                       @foreach ( $roomlist as $k )
                        <tr>
                          <td class="border border-start border-end border-black">
                            {{ $k->id }}
                          </td>
                          <td class="min-width border border-start border-end border-black" style="max-width: 150px;color:black;">
                            <p style="white-space: normal; word-wrap: break-word;">{{ $k->name }}</p>
                          </td>
                          <td class="min-width border border-start border-end border-black">
                           {{ $k->category_name }}
                          </td>
                          <td class="min-width border border-start border-end border-black">
                            @if($k->pimage!=null||$k->pimage!="")
                            <img width="100%" src="{{ asset(url(""))."/storage/upload/".$k->pimage }}" alt="ảnh">
                            @else
                              không có ảnh
                            @endif
                          </td>
                          <td style="max-width: 240px;" class="border border-start border-end border-black">
                           <p style="max-width:200px ;white-space: nowrap;overflow:hidden;text-overflow:ellipsis;  " > {{ $k->description }}</p>
                          </td>
                          <td class="min-width border border-start border-end border-black">
                            {{ $k->review }} 
                            {{-- (ô này vs ô đánh giá sẽ làm sau, vì cần phải xử lí riêng-
                             tức là phải có db riêng lưu mấy cái này.) --}}
                          </td>
                          <td class="border border-start border-end border-black">
                            {{ $k->rating }}
                          </td>
                          <td class="border border-start border-end border-black">
                          <p style="max-width:200px ;white-space: nowrap;overflow:hidden;text-overflow:ellipsis; " > {{ $k->amenities }}
                          </td>
                          <td class="border border-start border-end border-black">
                            {{ $k->position }}
                          </td>
                          <td class="border border-start border-end border-black">
                            {{ $k->isInUse==0?"Phòng trống" : "Phòng đang được sử dụng" }}
                          </td>
                          <td class="min-width border border-start border-end border-black">
                           {{ $k->created_at }}
                          </td>
                          <td class="min-width border border-start border-end border-black">
                            {{ $k->updated_at }}
                          </td>
                          <td class="border border-start border-end border-black">
                            <a class="btn btn-warning" href="{{ route("admin.editroom",["id"=>$k->id]) }}">Sửa</a><br>
                            <a onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger" href="{{ route("admin.delroom",["id"=>$k->id]) }}">Xoá</a>
                          </td>
                        </tr>
                        <!-- end table row -->
                         @endforeach
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
@endsection