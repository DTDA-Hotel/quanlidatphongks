@extends('layout.main')
@section('main')

<div class="container mt-5">
    <h2 class="mb-4">Xác nhận đặt phòng</h2>
    <div class="row">
        {{-- Cột thông tin khách hàng --}}
        <div class="col-md-6">
            <div class="card shadow rounded-3 p-3 mb-4">
                <h4 class="mb-3">1. Thông tin khách hàng</h4>
                <div class="mb-2">
                    <label class="form-label"><strong>Họ và tên</strong>*:</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="mb-2">
                    <label class="form-label"><strong>Email</strong>*:</label>
                    <input type="email" name="email" class="form-control" value="{{ Auth::check() ? Auth::user()->email : '' }}">

                </div>
                <div class="mb-2">
                    <label class="form-label"> <strong>Số điện thoại</strong>*:</label>
                    <input type="text" name="phone-number" class="form-control">

                </div>
                <div class="mb-2">
                    <label class="form-label"><strong>Số định danh cá nhân</strong>:</label>
                    <input type="text" name="personal-identification-number" class="form-control">

                </div>
            </div>
        </div>

        {{-- Cột thông tin đặt phòng --}}
        <div class="col-md-6">
            <div class="card shadow rounded-3 p-3 mb-4">
                <h4 class="mb-3">2. Thông tin đặt phòng</h4>
                <div class="mb-2"><strong>Khách sạn:</strong></div>
                <div class="mb-2"><strong>Loại phòng:</strong></div>
                <div class="mb-2">
                    <strong>Số lượng phòng:</strong>
                    <span id="rooms">{{ $booking['room'] ?? '5'}}</span>
                </div>
                <div class="mb-2">
                    <strong>Ngày nhận phòng:</strong>
                    <span id="check_in_raw" style="display: none">{{ $booking['check_in'] ?? '2025-05-11' }}</span>
                    <span id="check_in"></span>
                </div>

                <div class="mb-2">
                    <strong>Ngày trả phòng:</strong>
                    <span id="check_out_raw" style="display: none">{{ $booking['check_out'] ?? '2025-05-16' }}</span>
                    <span id="check_out"></span>
                </div>
                <div class="mb-2"><strong>Giá mỗi đêm: </strong>
                    <span id="ppn">{{ $booking['base_price'] ?? '200000' }}</span>VNĐ
                </div>
                <div class="mb-2">
                    <strong>Số đêm:</strong>
                    <span id="nights"></span>
                </div>
                <div class="mb-2">
                    <strong>Tổng tiền:</strong>
                    <span id="total"></span>
                    <strong class="text-danger"> VND</strong>
                </div>
                <div class="mb-3 text-start">
                    <label class="form-label"><strong>Phương thức thanh toán:</strong></label>
                    <div class="form-control bg-light">
                        <img src="{{ uri('./img/logo_pttt/LogoMoMoSquare.png') }}" alt="Momo" style="height: 24px; margin-right: 8px;">
                        Thanh toán qua ví Momo
                    </div>
                    {{-- Input ẩn để gửi giá trị --}}
                    <input type="hidden" name="payment_method" value="momo">
                </div>
            </div>
        </div>
    </div>

    {{-- Nút thanh toán --}}
    <div class="text-center">
        <form action="" method="POST">
            @csrf
            <input type="hidden" name="booking_id" value="">
            <button type="submit" class="btn btn-primary px-5 py-2">Thanh toán ngay</button>
        </form>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const checkInRaw = document.getElementById('check_in_raw').innerText.trim();
        const checkOutRaw = document.getElementById('check_out_raw').innerText.trim();

        function formatDate(dateStr) {
            const [year, month, day] = dateStr.split('-');
            return `${day}-${month}-${year}`;
        }

        // Gán ngày đã định dạng vào view
        document.getElementById('check_in').innerText = formatDate(checkInRaw);
        document.getElementById('check_out').innerText = formatDate(checkOutRaw);

        // Tính số đêm
        const dateIn = new Date(checkInRaw);
        const dateOut = new Date(checkOutRaw);

        const diffTime = dateOut - dateIn;
        const diffDays = Math.round(diffTime / (1000 * 60 * 60 * 24));

        document.getElementById('nights').innerText = diffDays;

        const rooms = document.getElementById('rooms').innerText;
        const PricePerNight = document.getElementById('ppn').innerText;
        const totalPrice = diffDays * PricePerNight * rooms;

        document.getElementById('total').innerText = totalPrice.toLocaleString('vi-VN', {
            style: 'currency',
            currency: 'VND'
        });
    });
</script>
@endsection