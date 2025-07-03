@extends("admin.layout.main")

@section("main")

{{-- this is category page --}}
<a href="{{ route("admin.createcat") }}" class="btn btn-primary">Thêm danh mục</a>
          <div class="tables-wrapper">
            <div class="row">
              <div class="col-lg-12">
                <div class="card-style mb-30">
                  <h6 class="mb-10">Danh sách danh mục</h6>
                   <p style="display: none;" id="check">cate</p>
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
                        @foreach ($cat as $k )
                        <tr>
                          <td>
                            {{ $k->id }}
                          </td>
                          <td class="min-width">
                            {{ $k->name }}
                          </td>
                          <td class="min-width">
                            @if ($k->image)
                            {{ $k->image }}
                            @else
                              Không có
                            @endif
                          </td>
                          <td class="min-width">
                            {{ $k->created_at }}
                          </td>
                          <td class="min-width">
                            {{ $k->updated_at??"Chưa sửa lần nào" }}
                          </td>
                          <td>
                            <div class="action">
                              <!-- <a class="text-warning" >
                                <img src="{{ asset(url("")) }}/admin/images/pen-solid.svg" alt="">
                              </a> -->
                              <a href="{{ route("admin.editcat",["id"=>$k->id]) }}" class="text-warning" style="padding:4px;">
                                <i class="lni lni-pencil" ></i>
                              </a>
                              <br>
                              <a onclick="return confirm('Bạn có chắc muốn xóa không?')" href="{{ route("admin.delcat",["id"=>$k->id]) }}" class="text-danger" style="padding:4px;">
                                <i class="lni lni-trash-can"></i>
                              </a>
                            </div>
                          </td>
                        </tr>
                        @endforeach
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
@endsection