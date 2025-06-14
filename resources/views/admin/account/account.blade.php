@extends("admin.layout.main")

@section("main")


<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Role</th>
      <th scope="col">email_verified_at	</th>
      <th scope="col">Password</th>
      <th scope="col">Remember_token</th>
      <th scope="col">Created_at</th>
      <th scope="col">Created_at</th>
      <th scope="col">Action</th>
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
        <a href="{{  route('admin.edituser', $value->id) }}" class="btn btn-primary">Edit</a>
        <a href="{{ route('admin.deleteuser', $value->id) }}" class="btn btn-danger">Delete</a>
      </td>
     @endforeach
  </tbody>
</table>





@endsection