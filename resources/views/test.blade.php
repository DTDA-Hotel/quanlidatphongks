<form action="{{ route("testing") }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input accept="image/*" type="file" name="pimage" class="form-control">
    <input type="submit" value="Test Upload">
</form>