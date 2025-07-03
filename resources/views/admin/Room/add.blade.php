@extends("admin.layout.main")

@section("main")

<form action="{{ route("admin.storeroom") }}" method="POST" class="form" enctype="multipart/form-data">
     @csrf
    <label class="form-label" for="name">Tên</label>
    <input id="name" class="form-control" type="text" name="name" >
    <label class="form-label" for="category">Danh mục</label>
    <select id="category" class="form-control" name="category">
        <!-- <option value="">--Chọn danh mục--</option> -->
        @foreach($catelist as $k)
        <option value="{{ $k->id }}">{{ $k->name }}</option>
        @endforeach
    </select>
    <label class="form-label" for="hotel">Của khách sạn</label>
    <select id="hotel" class="form-control" name="hotel">
        <!-- <option value="">--Chọn danh mục--</option> -->
        @foreach($hotel as $k)
        <option value="{{ $k->id }}">{{ $k->name }}</option>
        @endforeach
    </select>
    <label for="pimage" class="form-label">Ảnh</label>
        <input accept="image/*" id="pimage" class="form-control" type="file" name="pimage">
        <label class="form-label" for="desc">Mô tả</label>
    <textarea id="desc" class="form-control" name="desc"></textarea>
    
    <label class="form-label" for="amenities">Tiện ích</label>
    <textarea class="form-control" id="amenities" name="amenities"></textarea>
    <label class="form-label" for="baseprice">Giá gốc(VND)</label>
    {{-- giá chưa tính số người, số ngày, loại,... --}}
    <input id="baseprice" class="form-control" type="currency" name="baseprice" value="0">
    <br>
    <input type="submit" class="btn btn-primary" value="Thêm">
</form>

@endsection