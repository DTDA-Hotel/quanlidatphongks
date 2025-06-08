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
                       @foreach ( $roomlist as $k )
                        <tr>
                          <td>
                            {{ $k->id }}
                          </td>
                          <td class="min-width">
                            {{ $k->name }}
                          </td>
                          <td class="min-width">
                           {{ $k->category_id }}
                          </td>
                          <td>
                           <p class="overflow-y-auto"> {{ $k->description }}</p>
                          </td>
                          <td class="min-width">
                           {{ $k->created_at }}
                          </td>
                          <td class="min-width">
                            {{ $k->updated_at }}
                          </td>
                          <td>
                            <a class="btn btn-warning" href="{{ route("admin.editroom",["id"=>$k->id]) }}">Sửa</a>
                            <a class="btn btn-danger" href="{{ route("admin.delroom",["id"=>$k->id]) }}">Xoá</a>
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