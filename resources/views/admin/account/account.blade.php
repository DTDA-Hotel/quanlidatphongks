@extends("admin.layout.main")

@section("main")
<h4 class="text-center mb-4">Danh sách người dùng</h4>

<div class="table-responsive rounded shadow-sm p-3">
   <p style="display: none;" id="check">acc</p>
  <table class="table table-bordered table-hover text-center align-middle bg-white">
    <thead style="background-color: #00bcd4; color: white;">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Tên</th>
        <th scope="col">Email</th>
        <th scope="col">Vai trò</th>
        <th scope="col">Email xác thực</th>
        <th scope="col">Mật khẩu</th>
        <th scope="col">Token ghi nhớ</th>
        <th scope="col">Ngày tạo</th>
        <th scope="col">Ngày cập nhật</th>
        <th scope="col">Hành động</th>
      </tr>

    </thead>
    <tbody>
      @foreach ($user as $key => $value)
      <tr>
        <th scope="row">{{ $value->id }}</th>
        <td>{{ $value->name }}</td>
        <td>{{ $value->email }}</td>
        <td>{{ $value->role }}</td>
        <td>{{ $value->email_verified_at }}</td>
        <td>{{ $value->password }}</td>
        <td>{{ $value->remember_token }}</td>
        <td>{{ $value->created_at }}</td>
        <td>{{ $value->updated_at }}</td>
        <td>
          <a href="{{ route('admin.edituser', $value->id) }}" class="btn btn-sm btn-primary">Edit</a>
          <a href="{{ route('admin.deleteuser', $value->id) }}" class="btn btn-sm btn-danger">Delete</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection