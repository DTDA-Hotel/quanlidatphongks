@extends("admin.layout.main")

@section("main")
@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route("admin.storepic",["id"=>$id]) }}" method="POST" enctype="multipart/form-data">
    @csrf
<label class="form-label" for="imgs">Ảnh:</label>
<input required class="form-control" type="file" accept="image/*" name="images[]" id="imgs" multiple>
<input type="submit" class="btn btn-primary" value="Lưu">
</form>
@error("err")
<div class="text-danget">{{ $message }}</div>
@enderror
@endsection