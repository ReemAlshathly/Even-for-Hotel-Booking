@include('Front.include.header')
 <!-- Hero Section Begin -->
 <section class="hero-section set-bg" data-setbg="img/services-bg.jpg">
        <div class="hero-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Services</h1>
                    </div>
                </div>
                <div class="page-nav">
                    <a href="./about-us.html" class="left-nav"><i class="lnr lnr-arrow-left"></i> About</a>
                    <a href="./rooms.html" class="right-nav">Rooms <i class="lnr lnr-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Services Section Begin -->
    <section class="services-section">
        <div class="container-fluid">
            <div class="row">
            @foreach ($services as $service)

                <div class="col-lg-3 col-sm-6">
                    <div class="single-services-item">
                        <div class="services-pic-item">
                            <img style="height:400px" src="img/services/{{ $service->pic}}" alt="">
                        </div>
                        <div class="services-text">
                            <h2>{{ $service->name}}</h2>
                            <h6 class="cost">{{ $service->cost}} $</h6>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Services Section End -->
    <section class="features-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Features</h2>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-features-item">
                        <i class="flaticon-043-room-service"></i>
                        <h4>Room Service</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-features-item">
                        <i class="flaticon-007-swimming-pool"></i>
                        <h4>Pool</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-features-item">
                        <i class="flaticon-013-safety-box"></i>
                        <h4>Safty Box</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-features-item">
                        <i class="flaticon-033-dinner"></i>
                        <h4>Restaurant</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-features-item">
                        <i class="flaticon-029-wifi"></i>
                        <h4>Wi-fi</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-features-item">
                        <i class="flaticon-003-air-conditioner"></i>
                        <h4>Air Conditioner</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-features-item">
                        <i class="flaticon-033-dinner"></i>
                        <h4>Restaurant</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-features-item">
                        <i class="flaticon-020-telephone"></i>
                        <h4>Phone</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-features-item">
                        <i class="flaticon-019-television"></i>
                        <h4>Smart TV</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-features-item">
                        <i class="flaticon-040-key-card"></i>
                        <h4>Smart Key</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-features-item">
                        <i class="flaticon-009-cctv"></i>
                        <h4>24/7 Security</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-features-item">
                        <i class="flaticon-036-parking"></i>
                        <h4>Free Parking</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

@include('Front.include.footer')
