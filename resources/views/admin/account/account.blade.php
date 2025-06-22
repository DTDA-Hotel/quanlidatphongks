@extends("admin.layout.main")

@section("main")


<table class="table">
  <div class="tables-wrapper">
            <div class="row">
              <div class="col-lg-12">
                <div class="card-style mb-30">
                  <h6 class="mb-10">Danh sách tài khoản</h6>
                  <div class="table-wrapper table-responsive">
  <thead>
    <tr>
      <th>
        <h6>ID</h6>
      </th>
      <th>
        <h6>Name</h6>
      </th>
      <th>
        <h6>Email</h6>
      </th>
      <th>
        <h6>Role</h6>
      </th>
      <th>
        <h6>email_verified_at</h6>
      </th>
      <th>
        <h6>Password</h6>
      </th>
      <th>
        <h6>Remember_token</h6>
      </th>
      <th>
        <h6>Created_at</h6>
      </th>
      <th>
        <h6>Created_at</h6>
      </th>
      <th>
        <h6>Action</h6>
      </th>
    </tr>
  </thead>
  <tbody>
    @foreach ($user as $key => $value)
    <tr>
      <th scope="row"><h6>{{ $value->id }}

      </th>
      <td>{{ $value->name }}</td>
      <td>{{ $value->email }}</td>
      <td>{{ $value->role }}</td>
      <td>{{ $value->email_verified_at }}</td>
      <td>{{ $value->password }}</td>
      <td>{{ $value->remember_token }}</td>
      <td>{{ $value->created_at }}</td>
      <td>{{ $value->updated_at }}</td>
      <td>
        <a href="{{  route('admin.edituser', $value->id) }}" class="btn btn-primary">Edit</a>
        <a href="{{ route('admin.deleteuser', $value->id) }}" class="btn btn-danger">Delete</a>
      </td>
     @endforeach
  </tbody>
</table>
                </div>
              </div>
            </div>
          </div>
</div>





@endsection