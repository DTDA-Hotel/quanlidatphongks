@extends("admin.layout.main")

@section("main")
          <div class="tables-wrapper">
            <div class="row">
              <div class="col-lg-12">
                <div class="card-style mb-30">
                    <p style="display:none;" id="check">contact</p>
    <h1>Tin nhắn liên hệ</h1>
    <div class="table-wrapper table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>Tên</th>
                <th>Email</th>
                <th>Tin nhắn</th>
                <th>Tạo ngày</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contacts as $contact)
                <tr>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td title="{{ $contact->message }}" style="max-width:200px ;white-space: nowrap;overflow:hidden;text-overflow:ellipsis;  ">{{ $contact->message }}</td>
                    <td>{{ $contact->created_at->format('H:i:s d/m/Y') }}</td>
                    <td>
                        <a class="btn btn-warning" href="#">Xem?</a>
                        <a class="btn btn-danger" href="#">Xóa?</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
                </div>
            </div>
        </div>
    </div>
@endsection
