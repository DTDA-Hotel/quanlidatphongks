@extends("admin.layout.main")

@section("main")

<form action="{{ route("admin.updcat",["id"=>$cate->id]) }}" method="POST" class="form">
    @csrf
    <label class="form-label" for="name">Tên</label>
    <input class="form-control" type="text" name="name" id="name" value="{{  $cate->name }}">
    <label class="form-label" for="image">Ảnh</label>
    <input class="form-control" type="file" name="image" id="img">
    <input type="submit" class="btn btn-primary" value="Sửa">
</form>

@endsection