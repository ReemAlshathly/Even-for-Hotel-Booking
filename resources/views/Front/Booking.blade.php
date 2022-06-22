@include('Front.include.header')
 <!-- Hero Slider Begin -->
 <div class="hero-slider">
        
    
    <!-- Hero Slider End -->

    <!-- Room Availability Section Begin -->
    <section class="room-availability spad" >
        <div class="container" style="">
            <div class="room-check">
                <div class="row"  style="margin-top: 5%">
                    <div class="col-lg-5">
                        <div class="room-item">
                            <div class="room-pic-slider room-pic-item owl-carousel">
                                <div class="room-pic">
                                    <img src="/img/room-slider/room-1.jpg" alt="">
                                </div>
                                <div class="room-pic">
                                    <img src="/img/room-slider/room-2.jpg" alt="">
                                </div>
                                <div class="room-pic">
                                    <img src="/img/room-slider/room-3.jpg" alt="">
                                </div>
                            </div>
                            <div class="room-text">
                                <div class="room-title">
                               
                            @if ( $rooms->type == 0)
                            <h2>Standard Room</h2>
                            @elseif ( $rooms->type == 1)
                            <h2>Double Room</h2>
                            @elseif ( $rooms->type == 2)
                            <h2>Junior Suite</h2>
                            @endif
                                    <div class="room-price">
                                       
                                        <h2>${{ $rooms->cost}}</h2>
                                    </div>
                                </div>
                                <div class="room-desc">
                                <p>The room has many features in addition to it enjoying a wonderful view, large glass windows, and a refrigerator to store foods</p>
                            </div>
                                <div class="room-features">
                                @if ( $rooms->TV == 1)
                            <div class="room-info">
                                    <i class="flaticon-019-television"></i>
                                    <span>Smart TV</span>
                                </div>
                            @endif
                            @if ( $rooms->wifi== 1)
                            <div class="room-info">
                            <i class="flaticon-029-wifi"></i>
                                    <span>High Wi-fii</span>
                                </div>
                            @endif
                            @if ( $rooms->AC== 1)
                                <div class="room-info">
                                    <i class="flaticon-003-air-conditioner"></i>
                                    <span>AC</span>
                                </div>
                                @endif
                                @if ( $rooms->parking== 1)
                                <div class="room-info">
                                    <i class="flaticon-036-parking"></i>
                                    <span>Parking</span>
                                </div>
                                @endif
                                @if ( $rooms->pool== 1)
                                <div class="room-info last">
                                    <i class="flaticon-007-swimming-pool"></i>
                                    <span>Pool</span>
                                </div>
                                @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="check-form">
                           @if (session()->has('successSubmit'))
                        <div class="alert alert-warning alert-dismissible fade show">
                            {{ session()->get('successSubmit') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif
                    @if ( $rooms->status== 1)
                            <form action="{{ route('guster.save.booking', $rooms->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                            <h2> Booking detials</h2>
                                <div class="datepicker">
                                    <div class="date-select">
                                        <p>From</p>
                                        <input  type="hidden" value="{{$rooms->id}}" name="roomid" >
                                        <input  type="hidden" value="1" name="status" >
                                        <input type="date" class=""name ="from">
                                        <img src="/img/calendar.png" alt="">
                                        @error('')
                                                <p class="text-danger">{{  }}</p>
                                            @enderror
                                    </div>
                                    <div class="date-select to">
                                        <p>To</p>
                                        <input type="date" class=""  name="to">
                                        <img src="/img/calendar.png" alt="">
                                    </div>
                                </div>
                                <div class="row">
                                <div class="room-quantity col-lg-8 ">
                                    <div class="single-quantity">
                                        <p>Adults</p>
                                        <div class="pro-qty"><input type="text" name="adults"></div>
                                    </div>
                                    <div class="single-quantity">
                                        <p>Children</p>
                                        <div class="pro-qty"><input type="text" name="children"></div>
                                    </div>
                                   
                                </div>
                                <div class="room-selector col-lg-3 ">
                                    <p>Type of Booking</p>
                                    <select class="suit-select" name="bookingType">
                                        <option value="1">Standard </option>
                                        <option value="2">VIP</option>
                                        
                                    </select>
                                </div>

</div>
<h2> Guester detials</h2>
                                <div class="datepicker row">
                                    <div class="date-select col-lg-6 " >
                                        <p>Guest Name</p>
                                        <input type="text"  style="width:100%" name="fullname" >
                                       
                                    </div>
                                    <div class="date-select  col-3 " >
                                        <p>Guest Phone</p>
                                      
                                        <input class="" name="gysterype" type="text">
                                       
                                    </div>
</div>

                                <div class="datepicker row">
                                    
                                <div class="datepicker col-lg-4">
                                    <div class="date-select  " >
                                        <p>Card NO.</p>
                                        <input type="text"  style="width:100%" name="card">
                                       
                                    </div>
</div>
                                   
                                    <div class="room-selector col-lg-4 ">
                                    <p>Card Type</p>
                                    <select class="suit-select" name="name">
                                        <option value="1">Standard </option>
                                        <option value="2">passport</option>
                                        <option value="3">family card</option>
                                        
                                    </select>
                                </div>
                                    <div class="room-selector col-lg-4 ">
                                    <p>Guster Type </p>
                                    <select class="suit-select" name="numberOfGustes">
                                        <option value="1">one</option>
                                        <option value="2">two</option>
                                        <option value="3">group</option>
                                        
                                    </select>
                                </div>
                               
                                
                                </div>
                                <button type="submit">Booking<i class="lnr lnr-arrow-right"></i></button>
                            </form>
                    
                    @else
                        
                      
                           

                    
                   
                       
                          
                        <div class="alert alert-warning alert-dismissible fade show">
                        <p style="text-algin:center;margin-left:25%">  this room has booked before</p>
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                       

                    
                    @endif
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="about-room">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <h2>“Customers may forget what you said  but they will never forget how you made themfeel”.</h2>
                    </div>
                </div>
                <div class="about-para">
                    <div class="row">
                        <div class="col-lg-6">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus libero mauris,
                                bibendum eget sapien ac, ultrices rhoncus ipsum. Donec nec sapien in urna fermentum
                                ornare. Morbi vel ultrices leo. Sed eu turpis eu arcu vehicula fringilla ut vitae
                                orci. Suspendisse maximus malesuada</p>
                        </div>
                        <div class="col-lg-6">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi at vulputate est.
                                Donec tempor felis at nibh eleifend malesuada. Nullam suscipit lobortis aliquam.
                                Phasellus lobortis ante lorem, vitae scelerisque lacus tempus sed. Phasellus rutrum
                                magna </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Room Availability Section End -->

    <!-- Facilities Section Begin -->
    <div class="facilities-section spad">
        <div class="container">
            <div class="facilities-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h1>Facilities</h1>
                        </div>
                    </div>
                    <div class="col-lg-6 p-0">
                        <div class="facilities-img set-bg" data-setbg="/img/facilities-1.jpg"></div>
                    </div>
                    <div class="col-lg-6 p-0 ">
                        <div class="facilities-text-warp">
                            <div class="facilities-text">
                                <h2>Wellness Center</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipis-cing elit. Mauris tincidunt consectetur
                                    turpis, eget consequat.</p>
                                <a href="#" class="primary-btn fac-btn">Visit Center <i class="lnr lnr-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 p-0 order-lg-1 order-2">
                        <div class="facilities-text-warp">
                            <div class="facilities-text">
                                <h2>Wellness Center</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipis-cing elit. Mauris tincidunt consectetur
                                    turpis, eget consequat.</p>
                                <a href="#" class="primary-btn fac-btn">Visit Center <i class="lnr lnr-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 p-0 order-lg-2 order-1">
                        <div class="facilities-img set-bg" data-setbg="/img/facilities-2.jpg"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facilities Section End -->

    <div class="testimonial-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h1>Guestbook</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonial-item">
                        <div class="tab-content">
                            <div class="tab-pane fade-in active" id="testimonial-1" role="tabpanel">
                                <div class="single-testimonial-item">
                                    <span class="test-date">02/02/2019</span>
                                    <div class="test-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h4>Loved It</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiselit. Vivamus libero mauris,
                                        bibendum eget sapien ac, ultrices rhoncus ipsum. Donec nec sapien in urna
                                        fermentum ornare.</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="testimonial-2" role="tabpanel">
                                <div class="single-testimonial-item">
                                    <span class="test-date">02/02/2019</span>
                                    <div class="test-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h4>Loved It2</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiselit. Vivamus libero mauris,
                                        bibendum eget sapien ac, ultrices rhoncus ipsum. Donec nec sapien in urna
                                        fermentum ornare.</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="testimonial-3" role="tabpanel">
                                <div class="single-testimonial-item">
                                    <span class="test-date">02/02/2019</span>
                                    <div class="test-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h4>Loved It3</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiselit. Vivamus libero mauris,
                                        bibendum eget sapien ac, ultrices rhoncus ipsum. Donec nec sapien in urna
                                        fermentum ornare.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonial-author-item">
                        <ul class="nav" role="tablist">
                            <li>
                                <a data-toggle="tab" href="#testimonial-1" role="tab" class="show active">
                                    <div class="author-pic">
                                        <img src="/img/testimonial/author-1.jpg" alt="">
                                    </div>
                                    <div class="author-text">
                                        <h5>John Doe <span>Berlin</span></h5>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#testimonial-2" role="tab">
                                    <div class="author-pic">
                                        <img src="/img/testimonial/author-2.jpg" alt="">
                                    </div>
                                    <div class="author-text">
                                        <h5>John Doe <span>Berlin</span></h5>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#testimonial-3" role="tab">
                                    <div class="author-pic">
                                        <img src="/img/testimonial/author-3.jpg" alt="">
                                    </div>
                                    <div class="author-text">
                                        <h5>John Doe <span>Berlin</span></h5>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Follow Instagram Section Begin -->
    <section class="follow-instagram">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Follow us on Instagram @yourhotel</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- Follow Instagram Section End -->

    <!-- Footer Room Pic Section Begin -->
    <div class="footer-room-pic">
        <div class="container-fluid">
            <div class="row">
                <img src="img/room-footer-pic/room-1.jpg" alt="">
                <img src="img/room-footer-pic/room-2.jpg" alt="">
                <img src="img/room-footer-pic/room-3.jpg" alt="">
                <img src="img/room-footer-pic/room-4.jpg" alt="">
            </div>
        </div>
    </div>
    <!-- Footer Room Pic Section End -->
    @include('Front.include.footer')