@extends("admin.layout.main")

@section("main")

<form action="{{ route("admin.updroom",["id"=>$roomdata->id]) }}" method="POST" class="form">
     @csrf
     @method('PUT')
    <label class="form-label" for="name">Tên</label>
    <input class="form-control" type="text" name="name" value="{{ $roomdata->name }}">
    <label class="form-label" for="category">Danh mục</label>
    <select class="form-control" name="category">
        <!-- <option value="">--Chọn danh mục--</option> -->
         @foreach ($cat as $k)
                 <option {{ $roomdata->category_id==$k->id? "selected":"" }} value="{{ $k->id }}">{{ $k->name }}</option>
         @endforeach

    </select>
        <label class="form-label" for="desc">Mô tả</label>
    <textarea class="form-control" name="desc" >{{ old('description',$roomdata->description) }}</textarea>
    <br>
    <input type="submit" class="btn btn-primary" value="Thêm">
</form>

@endsection