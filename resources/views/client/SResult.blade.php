@extends('layout.main')

@section("main")
<section class="hero-section">
    <div class="container">
    @if ($notFound)
    <p style="font-weight: bold; color: red;">Không có phòng hoặc khách sạn nào khớp với: "{{ $keyword }}"</p>
@else
    @foreach ($results as $room)
        <div class="room-result">
            <h3>{{ $room->name }}</h3>
            <p>Khách sạn: {{ $room->hotel->name }}</p>
            <p>Địa chỉ: {{ $room->hotel->address }}</p>
            <p>Giá: {{ number_format($room->base_price) }} VND/đêm</p>
        </div>
    @endforeach
@endif
</div>
</section>

@endsection