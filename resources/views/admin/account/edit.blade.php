@extends("admin.layout.main")

@section("main")

<form action="{{ route("admin.updateuser", $user->id) }}" method="POST" class="form">
    @csrf
    <label class="form-label" for="name">Tên</label>
    <input class="form-control" type="text" name="name" id="name" value="{{ $user->name }}">  
    <label class="form-label" for="">Email</label>
    <input class="form-control" type="text" name="email" id="email" value="{{ $user->email }}">
      <label class="form-label" for="">Password</label>
    <input class="form-control" type="text" name="password" id="password" value="{{ $user->password }}">
      <label class="form-label" for="role">Role</label>
    {{-- <input class="form-control" type="number" name="role" id="role" value="{{ $user->role }}"> --}}
    <select class="form-select" name="role" id="role">
      <option {{ $user->role=="user"?"selected":"" }} value="user">Người dùng</option>
      <option {{ $user->role=="admin"?"selected":"" }} value="admin">Quản lí</option>
      <option {{ $user->role=="staff"?"selected":"" }} value="staff">Nhân viên</option>
    </select>

    <button type="submit" class="btn btn-primary">Cập nhật</button>
  
    <a href="{{ route('admin.account') }}" class="btn btn-secondary">Quay lại</a>
</form>



@endsection