
@extends("admin.layout.main")

@section("main")
{{-- {{ dd($trashed) }} --}}
<style>
    .room-box {
        border: 1px solid #ccc;
        padding: 15px;
        margin-bottom: 20px;
        /* position: absolute; */
    }
    .image-group img {
        margin-right: 10px;
        margin-bottom: 10px;
        border-radius: 4px;
    }
    .topimg{
     /* margin:-126px -1px 72px -20px ;    */
         position: absolute;
    top: 5px;
    right: 5px;
    /* background: rgba(255, 0, 0, 0.8); */
    color: black;
    padding: 1px 22px;
    /* border-radius: 50%; */
    /* font-weight: bold; */
    cursor: pointer;
    font-size: 14px;
    line-height: 1;
    }
    .delicon{
        position:absolute;
    }
    .imgcont{
            position: relative;
    display: inline-block; /* để vừa khít ảnh */
    width: auto; /* hoặc auto */
    }
</style>
<p style="display: none;" id="check">trash</p>
{{-- {{ dd($trashed) }} --}}
@if ($trashed->isEmpty())
    <p>Không có ảnh nào!</p>
@else
<div class="room-box row row-cols-6">
@foreach ($trashed as $k )
<div title="Ảnh thuộc mã phòng {{ $k->roomid }}, được xóa vào {{ $k->deleted_at }}">
    <div class="image-group">
        <div class="imgcont">
            <img src="{{ asset(url(""))."/storage/upload/".$k->imgname }}" width="200">
            <a class="topimg" onclick="if(confirm('Bạn có chắc muốn xóa vĩnh viễn ảnh này?')) document.getElementById('delete-form-{{ $k->id }}').submit(); return false;"><svg class="delicon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
  <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
</svg></a>
<form id="delete-form-{{ $k->id }}" action="{{ route('storage.fdelimg', $k->id) }}" method="POST" style="display: none;">
    @csrf 
    @method('DELETE')
</form>
        </div>

    </div>
    
</div>
@endforeach
</div>
@endif
@endsection