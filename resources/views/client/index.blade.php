@extends("layout.main")
@section("main")
@if(session('error'))
<div class="alert alert-success">
    {{ session('error') }}
</div>
@endif
                </div>
            </div>
            <div class="col-xl-4 col-lg-5 offset-xl-2 offset-lg-1">
                <div class="booking-form">
                    <h3>Booking Your Hotel</h3>
                    <form action="#">
                        <div class="check-date">
                            <label for="date-in">Check In:</label>
                            <input type="text" class="date-input" id="date-in">
                            <i class="icon_calendar"></i>
                        </div>
                        <div class="check-date">
                            <label for="date-out">Check Out:</label>
                            <input type="text" class="date-input" id="date-out">
                            <i class="icon_calendar"></i>
                        </div>
                        <div class="select-option">
                            <label for="guest">Guests:</label>
                            <select id="guest">
                                <option value="">2 Adults</option>
                                <option value="">3 Adults</option>
                            </select>
                        </div>
                        <div class="select-option">
                            <label for="room">Room:</label>
                            <select id="room">
                                <option value="">1 Room</option>
                                <option value="">2 Room</option>
                            </select>
                        </div>
                        <div class="search">
                            <label style="font-size: 14px;color: #707079;display: block;margin-bottom: 10px;" for="search">Search:</label>
                            <input style="border-radius: 2px;border: 1px solid #ebebeb;height: 50px;line-height: 50px;outline: none;padding-left: 20px;width: 100%;float: none;" type="text" class="form-control" placeholder="Search hotels, places, or keywords">
                        </div>
                        <button type="submit">Check Availability</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-slider owl-carousel">
        <div class="hs-item set-bg" data-setbg="{{ url('storage/istockphoto-1360554439-612x612.jpg') }}"></div>
        <div class="hs-item set-bg" data-setbg="{{ url('storage/nguyenle3579.png') }}"></div>
        <div class="hs-item set-bg" data-setbg="{{ url('storage/anh-mo-ta.jpg') }}"></div>
        <div class="hs-item set-bg" data-setbg="{{ url('storage/Vinpearl-Resort-Spa-Ha-Long.jpg') }}"></div>
    </div>
</section>
<!-- Hero Section End -->



<!-- Home Room Section Begin -->
<section class="hp-room-section">
    <div class="container-fluid">
        <div class="hp-room-items">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span></span>
                        <h2>Some Featured Hotels</h2>
                    </div>
                </div>
            </div>

            <div class="row ">
                @foreach ($rooms as $k)
                <div class="col-lg-3 col-sm-6 h-100 w-100 d-flex flex-column justify-content-between">
                    <div class="hp-room-item set-bg " style="
                    background-size: cover;
                    background-position: center;
                    background-repeat: no-repeat;
                    height: 300px;
                    border-radius: 10px;
                    overflow: hidden;"
                        data-setbg="{{ url('storage/room/' . $k->pimage) }}">
                        <div class="hr-text">
                            <h3 class="room-text">Name: {{ $k->name }}</h3>
                            <h4 class="room-text">Amenities: {{ $k->amenities }}</h4>
                                <h4 class="room-text" >Position: {{ $k->position }}</h4>
                                <!-- <h2>199$<span>/Pernight</span></h2> -->
                                <a class="room-text" href="#" class="primary-btn">More Details</a>
                        </div>
                    </div>
                </div>

                @endforeach

            </div>
        </div>
    </div>
</section>
<!-- Home Room Section End -->


<!-- Blog Section Begin -->
<section class="blog-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>Hotel News</span>
                    <h2>Our Blog & Event</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="blog-item set-bg" data-setbg="img/blog/blog-1.jpg">
                    <div class="bi-text">
                        <span class="b-tag">Travel Trip</span>
                        <h4><a href="#">Tremblant In Canada</a></h4>
                        <div class="b-time"><i class="icon_clock_alt"></i> 15th April, 2019</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog-item set-bg" data-setbg="img/blog/blog-2.jpg">
                    <div class="bi-text">
                        <span class="b-tag">Camping</span>
                        <h4><a href="#">Choosing A Static Caravan</a></h4>
                        <div class="b-time"><i class="icon_clock_alt"></i> 15th April, 2019</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog-item set-bg" data-setbg="img/blog/blog-3.jpg">
                    <div class="bi-text">
                        <span class="b-tag">Event</span>
                        <h4><a href="#">Copper Canyon</a></h4>
                        <div class="b-time"><i class="icon_clock_alt"></i> 21th April, 2019</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="blog-item small-size set-bg" data-setbg="img/blog/blog-wide.jpg">
                    <div class="bi-text">
                        <span class="b-tag">Event</span>
                        <h4><a href="#">Trip To Iqaluit In Nunavut A Canadian Arctic City</a></h4>
                        <div class="b-time"><i class="icon_clock_alt"></i> 08th April, 2019</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog-item small-size set-bg" data-setbg="img/blog/blog-10.jpg">
                    <div class="bi-text">
                        <span class="b-tag">Travel</span>
                        <h4><a href="#">Traveling To Barcelona</a></h4>
                        <div class="b-time"><i class="icon_clock_alt"></i> 12th April, 2019</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Section End -->

@endsection