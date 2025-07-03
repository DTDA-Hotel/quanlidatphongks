@extends("admin.layout.main")

@section("main")

    <form action="{{  route("admin.updroom", ["id" => $roomdata->id]) }}" method="POST" class="form"
        enctype="multipart/form-data">
        @csrf
        @method("PUT")
        <label class="form-label" for="name">Tên</label>
        <input id="name" class="form-control" type="text" name="name" value="{{ $roomdata->name }}">
        <label class="form-label" for="category">Danh mục</label>
        <select id="category" class="form-control" name="category">
            <!-- <option value="">--Chọn danh mục--</option> -->
            @foreach ($cat as $k)
                <option {{ $roomdata->category_id == $k->id ? "selected" : "" }} value="{{ $k->id }}">{{ $k->name }}</option>
            @endforeach
        </select>
        <label for="pimage" class="form-label">Ảnh</label>
        <input accept="image/*" id="pimage" class="form-control" type="file" name="pimage">
        @if($roomdata->pimage)
            <p class="form-label">Ảnh hiện tại</p>
            <img width="50%" src="{{ asset(url("")) . "/storage/upload/" . $roomdata->pimage }}" alt="ảnh"><br>
        @else
            Chưa có ảnh <br>
        @endif
        <label class="form-label" for="desc">Mô tả</label>
        <textarea id="desc" class="form-control" name="desc">{{ old('description', $roomdata->description) }}</textarea>

        <label class="form-label" for="amenities">Tiện ích</label>
        <textarea class="form-control" id="amenities"
            name="amenities">{{ old("amenities", $roomdata->amenities) }}</textarea>
        <label class="form-label" for="hotel">Khách sạn</label>
        <select class="form-select" name="hotel" id="hotel">
            @foreach ($hotels as $h)
                <option {{ $roomdata->hotel_id == $h->id ? "selected" : "" }} value="{{ $h->id }}">{{ $h->name }}</option>
            @endforeach
        </select>
        <label for="price" class="form-label">Giá gốc</label>
        <input id="price" class="form-control" type="text" name="price"
            value="{{ old("base_price", $roomdata->base_price) }}">
        <input type="hidden" name="old_img" value="{{ $roomdata->pimage }}">
        <br>
        <input type="submit" class="btn btn-primary" value="Sửa">
    </form>

@endsection