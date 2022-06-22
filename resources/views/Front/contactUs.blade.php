@include('Front.include.header')

    <!-- Hero Section Begin -->
    <section class="hero-section set-bg" data-setbg="img/contact-bg.jpg">
        <div class="hero-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Contact</h1>
                    </div>
                </div>
                <div class="page-nav">
                    <a href="./news.html" class="left-nav"><i class="lnr lnr-arrow-left"></i> News</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-left">
                        <div class="contact-information">
                            <h2>Contact Information</h2>
                            <ul> @foreach ($detials as $detial)
                                <li><img src="img/placeholder-copy.png" alt=""> <span>{{$detial->street}} {{$detial->address}},
                                     {{$detial->city}} -{{$detial->country}}</span></li>
                                <li><img src="img/phone-copy.png" alt=""> <span>{{$detial->reception}}</span></li>
                                @endforeach
                                @foreach ($soials as $soial)
                                <li><img src="img/envelop.png" alt=""> <span>{{$soial->email}}</span></li>
                                <li><img src="img/clock-copy.png" alt=""> <span>Everyday: {{$soial->onlinefrom}}:00 -{{$soial->onlineto}}:00</span></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="social-links">
                            <h2>Follow us on:</h2>
                            @foreach ($soials as $soial)
                            <a href="{{$soial->facebook}}"><i class="fa fa-facebook"></i></a>
                            <a href="{{$soial->instagram}}"><i class="fa fa-instagram"></i></a>
                            <a href="{{$soial->linkedin}}"><i class="fa fa-linkedin"></i></a>
                            <a href="{{$soial->twitter}}"><i class="fa fa-pinterest"></i></a>
                            <a href="{{$soial->twitter}}"><i class="fa fa-twitter"></i></a>
                            <a href="{{$soial->youtube}}"><i class="fa fa-youtube-play"></i></a>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form">
                    @if (session()->has('successSubmit'))
                        <div class="alert alert-warning alert-dismissible fade show">
                            {{ session()->get('successSubmit') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif

                        <h5>Write us ...</h5>
                        
                        <form action="{{ route('user.contactus.store') }}"method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <p>From</p>
                                    <div class="input-group">
                                        <input type="text" placeholder="Full Name" name="name">
                                        <img src="img/edit.png" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <input type="email" placeholder="Email" name="email">
                                        <img src="img/envelop-copy.png" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-group phone-num">
                                        <input type="text" placeholder="Phone" name="phone"> 
                                        <img src="img/phone-copy.png" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="message">
                                        <p>Message</p>
                                        <div class="textarea">
                                            <textarea placeholder="Hi ..." name="message"></textarea>
                                            <img src="img/speech-copy.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit">Send <i class="lnr lnr-arrow-right"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Map Section Begin -->
    <div class="map">

   @foreach ($soials as $soial)
   
    
         @endforeach
         <iframe src="{{$soial->location}}"
          width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" 
           referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- Map Section End -->

@include('Front.include.footer')
