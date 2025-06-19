@extends("admin.layout.main")

@section("main")
<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-body">
            <p><strong>💵 Tổng tiền:</strong> {{ number_format($bill->total) }} đ</p>

            <hr>

            <h5 class="mt-4">🛏️ Chi tiết phòng:</h5>
            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-info">
                        <tr>
                            <th>#</th>
                            <th>Số phòng</th>
                            <th>Loại phòng</th>
                            <th>Giá mỗi đêm</th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $tong = 0; @endphp
                        @forelse ($bill->details as $index => $detail)
                        @php
                        $thanhtien = $detail->room_rate * $detail->quantity;
                        $tong += $thanhtien;
                        @endphp
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $detail->room->name ?? 'N/A' }}</td>
                            <td>{{ $detail->room->category->name ?? 'Không rõ' }}</td>
                            <td>{{ number_format($detail->room_rate) }} đ</td>
                            <td>{{ $detail->quantity }}</td>
                            <td>{{ number_format($thanhtien) }} đ</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-muted">Không có chi tiết phòng nào.</td>
                        </tr>
                        @endforelse
                    </tbody>
                    @if ($bill->details->isNotEmpty())
                    <tfoot>
                        <tr>
                            <td colspan="5" class="text-end"><strong>Tổng thành tiền:</strong></td>
                            <td><strong>{{ number_format($tong) }} đ</strong></td>
                        </tr>
                    </tfoot>
                    @endif
                </table>
            </div>

            <a href="{{ route('admin.bills.index') }}" class="btn btn-secondary mt-3">⬅ Quay lại danh sách hóa đơn</a>
        </div>
    </div>
</div>
@endsection