@extends("admin.layout.main")

@section("main")
<style>
    .table-light-blue {
        background-color: #e0f7fa !important;
        /* Màu xanh nước biển nhạt */
    }
</style>
<div class="table-responsive rounded shadow-sm p-3 table-light-blue">
    <table class="table table-bordered table-hover text-center align-middle bg-white">
        <thead style="background-color: #00acc1; color: white;">
            <tr>
                <th>#</th>
                <th>Khách hàng</th>
                <th>Tổng tiền</th>
                <th>Ngày đặt phòng</th>
                <th>Trạng thái</th>
                <th>Ngày thanh toán</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bills as $bill)
            <tr>
                <td>{{ $bill->id }}</td>
                <td>{{ $bill->user->name ?? 'Không có tên' }}</td>
                <td>{{ number_format($bill->total) }} đ</td>
                <td>{{ $bill->booking_date ?? 'Không rõ' }}</td>
                <td>
                    @if($bill->status == 'paid')
                    <span class="badge bg-success px-3 py-2">💰 Đã thanh toán</span>
                    @elseif($bill->status == 'cancelled')
                    <span class="badge bg-danger px-3 py-2">❌ Đã hủy</span>
                    @else
                    <form action="{{ route('admin.bills.updateStatus', $bill->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <select name="status" class="form-select form-select-sm w-auto d-inline-block" onchange="this.form.submit()">
                            <option value="pending" {{ $bill->status == 'pending' ? 'selected' : '' }}>🕒 Đang đặt</option>
                            <option value="paid">💰 Đã thanh toán</option>
                            <option value="cancelled">❌ Đã hủy</option>
                        </select>
                    </form>
                    @endif
                </td>
                <td>
                    @if ($bill->status == 'paid' && $bill->payment_date)
                    {{ $bill->payment_date->format('d/m/Y H:i') }}
                    @elseif ($bill->status == 'cancelled')
                    Không thanh toán
                    @else
                    Không rõ
                    @endif
                </td>
                <td>
                    <a href="{{ route('admin.bills.show', $bill->id) }}" class="btn btn-sm btn-info">Chi tiết</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection