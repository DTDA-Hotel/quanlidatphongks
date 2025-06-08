@extends("admin.layout.main")

@section("main")

<form action="{{ route("admin.storeroom") }}" method="POST" class="form">
     @csrf
    <label class="form-label" for="name">Tên</label>
    <input class="form-control" type="text" name="name" >
    <label class="form-label" for="category">Danh mục</label>
    <select class="form-control" name="category">
        <!-- <option value="">--Chọn danh mục--</option> -->
        @foreach($catelist as $k)
        <option value="{{ $k->id }}">{{ $k->name }}</option>
        @endforeach
    </select>
        <label class="form-label" for="desc">Mô tả</label>
    <textarea class="form-control" name="desc"></textarea>
    <br>
    <input type="submit" class="btn btn-primary" value="Thêm">
</form>

@endsection