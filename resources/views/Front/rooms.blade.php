@include('Front.include.header')

 <!-- Hero Section Begin -->
 <section class="hero-section set-bg" data-setbg="img/rooms-bg.jpg">
        <div class="hero-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Rooms</h1>
                    </div>
                </div>
                <div class="page-nav">
                    <a href="./services.html" class="left-nav"><i class="lnr lnr-arrow-left"></i> Services</a>
                    <a href="./news.html" class="right-nav">News <i class="lnr lnr-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Rooms Section Begin -->
    <section class="room-section spad">
        <div class="container">
        @foreach ($rooms as $room)
            <div class="rooms-page-item">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="room-pic-slider owl-carousel">

                      
                            <div class="single-room-pic">
                                <img src="img/room/{{$room->image}} " alt="">
                            </div>
                            <div class="single-room-pic">
                                <img src="img/room/rooms-2.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="room-text">
                            <div class="room-title">
                            @if ( $room->type == 0)
                            <h2>Standard Room</h2>
                            @elseif ( $room->type == 1)
                            <h2>Double Room</h2>
                            @elseif ( $room->type == 2)
                            <h2>Junior Suite</h2>
                            @endif
                                
                                <div class="room-price">
                                   
                                    <h2>${{ $room->cost}}</h2>
                                    @if ( $room->status == 2)
                                    <h2 >  <i class="fa fa-ban "style="color:red ;margin-left:10px"  aria-hidden="true"></i></h2>
                                    @endif
                                
                                </div>
                            </div>
                            <div class="room-desc">
                                <p>The room has many features in addition to it enjoying a wonderful view, large glass windows, and a refrigerator to store foods.</p>
                            </div>
                            <div class="room-features">
                            @if ( $room->TV == 1)
                            <div class="room-info">
                                    <i class="flaticon-019-television"></i>
                                    <span>Smart TV</span>
                                </div>
                            @endif
                            @if ( $room->wifi== 1)
                            <div class="room-info">
                            <i class="flaticon-029-wifi"></i>
                                    <span>High Wi-fii</span>
                                </div>
                            @endif
                            @if ( $room->AC== 1)
                                <div class="room-info">
                                    <i class="flaticon-003-air-conditioner"></i>
                                    <span>AC</span>
                                </div>
                                @endif
                                @if ( $room->parking== 1)
                                <div class="room-info">
                                    <i class="flaticon-036-parking"></i>
                                    <span>Parking</span>
                                </div>
                                @endif
                                @if ( $room->pool== 1)
                                <div class="room-info last">
                                    <i class="flaticon-007-swimming-pool"></i>
                                    <span>Pool</span>
                                </div>
                                @endif
                            </div>
                            <a href="{{ route('site.rooms.booking', $room->id) }}" class="primary-btn">Book Now <i class="lnr lnr-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            
            
        </div>
    </section>
    <!-- Rooms Section End -->


@include('Front.include.footer')