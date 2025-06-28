@extends("layout.main")

@section("main")
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>{{__("messages.Rooms")}}</h2>
                        <div class="bt-option">
                            <a href="./home.html">{{ __("messages.Home") }}</a>
                            <span>{{__("messages.Rooms")}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Rooms Section Begin -->
    <section class="rooms-section spad">
        <div class="container">
            <div class="row">
                
@if (isset($listbycat))

@foreach ($listbycat as $k=>$v)


                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <img src="{{ asset(url("")) }}/img/room/room-1.jpg" alt="">
                        <div class="ri-text">
                            <h4>Premium King Room</h4>
                            <h3>159$<span>/Pernight</span></h3>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="r-o">Size:</td>
                                        <td>30 ft</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Capacity:</td>
                                        <td>Max persion 3</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Bed:</td>
                                        <td>King Beds</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Services:</td>
                                        <td>Wifi, Television, Bathroom,...</td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="#" class="primary-btn">More Details</a>
                        </div>
                    </div>
                </div>
@endforeach
                @else
@foreach ($rooms as $k=>$v)
                                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <div style="width: 100%; height: 200px; overflow: hidden;">
                        <img width="400px" src="{{ asset(url("")) }}/storage/upload/{{ $v->pimage }}" alt="">
                        </div>
                        <div class="ri-text">
                            <h4>{{ $v->name }}</h4>
                            <h3>159$<span>/Pernight</span></h3>
                            <table>
                                <tbody>
                                    <!-- <tr>
                                        <td class="r-o">Size:</td>
                                        <td>30 ft</td>
                                    </tr> -->
                                    <tr>
                                        <td class="r-o">Tiện ích:</td>
                                        <td>{{ $v->amenities }}</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Tình trạng:</td>
                                        <td>{{ $v->isInUse===0?"Còn phòng":"Hết phòng" }}</td>
                                    </tr>
                                    <!-- <tr>
                                        <td class="r-o">Services:</td>
                                        <td>Wifi, Television, Bathroom,...</td>
                                    </tr> -->
                                </tbody>
                            </table>
                            <a href="{{ route("client.roomdetail",["id"=>$v->id]) }}" class="primary-btn">Chi tiết</a>
                        </div>
                    </div>
                </div>

@endforeach
@endif
                                <div class="col-lg-12">
                    <div class="room-pagination">
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">Next <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Rooms Section End -->
     @endsection