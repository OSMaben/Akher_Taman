@extends('layout.layout')
@section('content')

    <div class="mobile-search">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-11">
                    <label>What are you lookking for?</label>
                    <input type="text" placeholder="Search Products, Category, Brand">
                </div>
                <div class="col-1 d-flex justify-content-end align-items-center">
                    <div class="search-cross-btn style-2">
                        <i class="bi bi-x"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="hero-area hero-style-two">
        <img alt="image" src="images/bg/section-bg2.png" class="radial-bg">
        <img alt="image" src="images/bg/banner2-icon1.png" class="banner2-icon1">
        <img alt="image" src="images/bg/banner2-icon2.png" class="banner2-icon2">
        <img alt="image" src="images/bg/banner2-icon3.png" class="banner2-icon3">
        <div class="scroll-text">
            <h6><a href="#category">Scroll Down</a></h6>
        </div>
        <div class="container">
            <div class="row d-flex justify-content-start align-items-end">
                <div class="col-xl-7 col-lg-7">
                    <div class="banner2-content">
                        <span class="wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.5s">Welcome To Auction
                            House</span>
                        <h1 class="wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="1s">Build, sell & collect
                            digital items.</h1>
                        <p class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1s">Nulla facilisi. Maecenas ac
                            tellus ut ligula interdum convallis. Nullam
                            dapibus on erat in dolor posuere, none hendrerit lectus ornare.
                            Suspendisse sit amet turpina sagittis, ultrices dui et, aliquam urna.
                        </p>
                        <a href="live-auction.html" class="eg-btn btn--primary2 btn--lg wow fadeInUp"
                           data-wow-duration="2s" data-wow-delay="0.8s">Start Exploring</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="category-section2 pt-120 pb-120" id="category">
        <div class="container position-relative">
            <div class="row">
                <div class="col-12">
                    <div class="swiper category2-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="eg-card category-card2 wow fadeInDown" data-wow-duration="1.5s"
                                     data-wow-delay="0.2s">
                                    <img alt="image" src="../images/bg/accessories.png" class="category-img">
                                    <div class="content">
                                        <img alt="image" src="../images/icons/cat-icon2.svg">
                                        <h5><a href="live-auction.html">Accessories</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="eg-card category-card2 wow fadeInDown" data-wow-duration="1.5s"
                                     data-wow-delay="0.4s">
                                    <img alt="image" src="../images/bg/cars.png" class="category-img">
                                    <div class="content">
                                        <img alt="image" src="../images/icons/car-icon.svg">
                                        <h5><a href="live-auction.html">Cars</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="eg-card category-card2 wow fadeInDown" data-wow-duration="1.5s"
                                     data-wow-delay="0.6s">
                                    <img alt="image" src="../images/bg/motobike.png" class="category-img">
                                    <div class="content">
                                        <img alt="image" src="../images/icons/moto-bike.svg">
                                        <h5><a href="live-auction.html">Motor Bike</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="eg-card category-card2 wow fadeInDown" data-wow-duration="1.5s"
                                     data-wow-delay="0.2s">
                                    <img alt="image" src="../images/bg/fashion.png" class="category-img">
                                    <div class="content">
                                        <img alt="image" src="../images/icons/cat-icon4.svg">
                                        <h5><a href="live-auction.html">Fashion</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="eg-card category-card2 wow fadeInDown" data-wow-duration="1.5s"
                                     data-wow-delay="0.4s">
                                    <img alt="image" src="../images/bg/virtual.png" class="category-img">
                                    <div class="content">
                                        <img alt="image" src="../images/icons/cat-icon5.svg">
                                        <h5><a href="live-auction.html">Virtual Worlds</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="eg-card category-card2 wow fadeInDown" data-wow-duration="1.5s"
                                     data-wow-delay="0.6s">
                                    <img alt="image" src="../images/bg/music.png" class="category-img">
                                    <div class="content">
                                        <img alt="image" src="../images/icons/cat-icon1.svg">
                                        <h5><a href="live-auction.html">Music</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="eg-card category-card2 wow fadeInDown" data-wow-duration="1.5s"
                                     data-wow-delay="1s">
                                    <img alt="image" src="../images/bg/cards.png" class="category-img">
                                    <div class="content">
                                        <img alt="image" src="../images/icons/cat-icon3.svg">
                                        <h5><a href="live-auction.html">Trading Cards</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="eg-card category-card2 wow fadeInDown" data-wow-duration="1.5s"
                                     data-wow-delay="0.2s">
                                    <img alt="image" src="../images/bg/fashion.png" class="category-img">
                                    <div class="content">
                                        <img alt="image" src="../images/icons/cat-icon4.svg">
                                        <h5><a href="live-auction.html">Fashion</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="eg-card category-card2 wow fadeInDown" data-wow-duration="1.5s"
                                     data-wow-delay="1s">
                                    <img alt="image" src="../images/bg/cards.png" class="category-img">
                                    <div class="content">
                                        <img alt="image" src="../images/icons/cat-icon3.svg">
                                        <h5><a href="live-auction.html">Trading Cards</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="live-auction pb-120">
        <img alt="image" src="images/bg/section-bg2.png" class="img-fluid section-bg2">
        <div class="container position-relative">
            <img alt="image" src="images/bg/dotted2.png" class="dotted3">
            <div class="row d-flex justify-content-center align-items-center mb-60 g-4">
                <div class="col-sm-12 col-md-10 col-lg-8 col-xl-6">
                    <div class="section-title2 text-lg-start text-center">
                        <h2>Live Auction</h2>
                        <p class="mb-0">Explore on the world's best & largest Bidding marketplace with our beautiful
                            Bidding
                            products. We want to be a part of your smile, success and future growth.</p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-4 col-xl-6 text-lg-end text-center">
                    <a href="live-auction.html" class="eg-btn btn--primary2 btn--md">View All</a>
                </div>
            </div>
            <div class="row gy-4 d-flex justify-content-center">
                @foreach($products as $product)
                    <div class="col-lg-4 col-md-6 col-sm-10 ">
                        <div data-wow-duration="1.5s" data-wow-delay="0.2s" class="eg-card auction-card2 wow fadeInDown">
                            <div class="auction-img">
                                <img alt="image" src="storage/images/{{$product->image}}">
                                <div class="auction-timer">
                                    <div class="countdown" id="timer1">
                                        <h5>{{$product->bid_end_time}}</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="auction-content">
                                <h4><a href="details/{{$product->id}}">{{$product->title}}</a></h4>
                                <div class="author-price-area">
                                    <div class="author">
                                        <img alt="image" src="images/bg/auction-authr1.png"><span class="name">
                                            {{$product->user->name}}
                                        </span>
                                    </div>
                                    <p>${{$product->current_price}}</p>
                                </div>
                                <div class="auction-card-bttm">
                                    <a href="details/{{$product->id}}" class="eg-btn btn--primary2 btn--sm">Place a Bid</a>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


    <div class="testimonial-section pt-80 pb-80">
        <img alt="image" src="images/bg/client-right.png" class="client-right-vector">
        <img alt="image" src="images/bg/client-left.png" class="client-left-vector">
        <img alt="image" src="images/bg/client-circle4.png" class="client-circle4">
        <img alt="image" src="images/bg/client-circle5.png" class="client-circle5">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-sm-12 col-md-10 col-lg-8 col-xl-6">
                    <div class="section-title1">
                        <h2>What Client Say</h2>
                        <p class="mb-0">Explore on the world's best & largest Bidding marketplace with our beautiful
                            Bidding
                            products. We want to be a part of your smile, success and future growth.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center position-relative">
                <div class="swiper testimonial-slider2">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial-single style2 hover-border2 wow fadeInDown" data-wow-duration="1.5s"
                                 data-wow-delay=".2s">
                                <img alt="image" src="images/icons/quote-red.svg" class="quote-icon">
                                <div class="testi-img">
                                    <img alt="image" src="images/bg/testi1.png">
                                </div>
                                <div class="testi-content">
                                    <div class="testi-designation">
                                        <h5>Johan Martin R</h5>
                                        <p>CEO Founder</p>
                                    </div>
                                    <p class="para">The Pacific Grove Chamber of Commerce would like to thank eLab
                                        Communications and Mr. Will Elkadi for all the efforts that
                                        assisted me nicely manners. </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-single style2 hover-border2 wow fadeInDown" data-wow-duration="1.5s"
                                 data-wow-delay=".4s">
                                <img alt="image" src="images/icons/quote-red.svg" class="quote-icon">
                                <div class="testi-img">
                                    <img alt="image" src="images/bg/testi2.png">
                                </div>
                                <div class="testi-content">
                                    <div class="testi-designation">
                                        <h5>Johan Dou RO</h5>
                                        <p>Marketing Officer</p>
                                    </div>
                                    <p class="para">Nullam cursus tempor ex. Nullam nec dui id metus consequat congue ac
                                        at est. Pellentesque blandit neque at elit tristique tincidunt.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-single style2 hover-border2 wow fadeInDown" data-wow-duration="1.5s"
                                 data-wow-delay=".4s">
                                <img alt="image" src="images/icons/quote-red.svg" class="quote-icon">
                                <div class="testi-img">
                                    <img alt="image" src="images/bg/testi3.png">
                                </div>
                                <div class="testi-content">
                                    <div class="testi-designation">
                                        <h5>Martin Luther</h5>
                                        <p>CTO Enginier</p>
                                    </div>
                                    <p class="para">Maecenas vitae porttitor neque, ac porttitor nunc. Duis venenatis
                                        lacinia libero. Nam nec augue ut nunc vulputate tincidunt at suscipit nunc. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-arrows testimonial2-arrow d-flex justify-content-between gap-3">
                    <div class="testi-prev2 style-2 swiper-prev-arrow" tabindex="0" role="button"
                         aria-label="Previous slide"><i class="bi bi-arrow-left"></i></div>
                    <div class="testi-next2 style-2 swiper-next-arrow" tabindex="0" role="button"
                         aria-label="Next slide">
                        <i class="bi bi-arrow-right"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="upcoming-seciton pt-120 pb-120">
        <img alt="image" src="images/bg/section-bg2.png" class="img-fluid section-bg2">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center mb-60">
                <div class="col-sm-12 col-md-10 col-lg-8 col-xl-6">
                    <div class="section-title2 text-lg-start text-center">
                        <h2>Up Comming Auction</h2>
                        <p class="mb-0">Explore on the world's best & largest Bidding marketplace with our beautiful
                            Bidding
                            products. We want to be a part of your smile, success and future growth.</p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-4 d-lg-block d-none">
                    <div class="slider-bottom d-flex justify-content-end align-items-center">
                        <div class="slider-arrows coming-arrow d-flex gap-3">
                            <div class="coming-prev2 swiper-prev-arrow" tabindex="0" role="button"
                                 aria-label="Previous slide"><i class="bi bi-arrow-left"></i></div>
                            <div class="coming-next2 swiper-next-arrow" tabindex="0" role="button"
                                 aria-label="Next slide"> <i class="bi bi-arrow-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="swiper upcoming-slider2">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="eg-card c-feature-card2 wow fadeInDown" data-wow-duration="1.5s"
                                 data-wow-delay="0.2s">
                                <div class="auction-img">
                                    <img alt="image" src="images/bg/umcoming1.png">
                                    <div class="auction-timer2 gap-2" id="timer7">
                                        <div class="countdown-single">
                                            <h5 id="days7">7</h5>
                                            <span>Days</span>
                                        </div>
                                        <div class="countdown-single">
                                            <h5 id="hours7">05</h5>
                                            <span>Hours</span>
                                        </div>
                                        <div class="countdown-single">
                                            <h5 id="minutes7">56</h5>
                                            <span>Mins</span>
                                        </div>
                                        <div class="countdown-single">
                                            <h5 id="seconds7">08</h5>
                                            <span>Secs</span>
                                        </div>
                                    </div>
                                    <div class="author-area3">
                                        <div class="author-emo">
                                            <img alt="image" src="images/bg/upcoming-author1.png">
                                        </div>
                                        <div class="author-name">
                                            <span>by @robatfox</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="c-feature-content">
                                    <div class="c-feature-category">Time Zoon</div>
                                    <a href="auction-details.html">
                                        <h4>Michael Kors Watch m20L6</h5>
                                    </a>
                                    <p>Bidding Price : <span>$15.99</span></p>
                                    <div class="auction-card-bttm">
                                        <a href="auction-details.html" class="eg-btn btn--primary2 btn--sm">View
                                            Details</a>
                                        <div class="share-area">
                                            <ul class="social-icons d-flex">
                                                <li><a href="https://www.facebook.com/"><i
                                                            class="bx bxl-facebook"></i></a></li>
                                                <li><a href="https://www.twitter.com/"><i
                                                            class="bx bxl-twitter"></i></a></li>
                                                <li><a href="https://www.pinterest.com/"><i
                                                            class="bx bxl-pinterest"></i></a></li>
                                                <li><a href="https://www.instagram.com/"><i
                                                            class="bx bxl-instagram"></i></a></li>
                                            </ul>
                                            <div>
                                                <a href="#" class="share-btn"><i class="bx bxs-share-alt"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="eg-card c-feature-card2 wow fadeInDown" data-wow-duration="1.5s"
                                 data-wow-delay="0.4s">
                                <div class="auction-img">
                                    <img alt="image" src="images/bg/umcoming2.png">
                                    <div class="auction-timer2 gap-2" id="timer8">
                                        <div class="countdown-single">
                                            <h5 id="days8">7</h5>
                                            <span>Days</span>
                                        </div>
                                        <div class="countdown-single">
                                            <h5 id="hours8">05</h5>
                                            <span>Hours</span>
                                        </div>
                                        <div class="countdown-single">
                                            <h5 id="minutes8">56</h5>
                                            <span>Mins</span>
                                        </div>
                                        <div class="countdown-single">
                                            <h5 id="seconds8">08</h5>
                                            <span>Secs</span>
                                        </div>
                                    </div>
                                    <div class="author-area3">
                                        <div class="author-emo">
                                            <img alt="image" src="images/bg/upcoming-author2.png">
                                        </div>
                                        <div class="author-name">
                                            <span>by @robatfox</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="c-feature-content">
                                    <div class="c-feature-category">Lit Gaslighte</div>
                                    <a href="auction-details.html">
                                        <h4>Toyota AIGID A Clasic Hatchback.</h4>
                                    </a>
                                    <p>Bidding Price : <span>$15.99</span></p>
                                    <div class="auction-card-bttm">
                                        <a href="auction-details.html" class="eg-btn btn--primary2 btn--sm">View
                                            Details</a>
                                        <div class="share-area">
                                            <ul class="social-icons d-flex">
                                                <li><a href="https://www.facebook.com/"><i
                                                            class="bx bxl-facebook"></i></a></li>
                                                <li><a href="https://www.twitter.com/"><i
                                                            class="bx bxl-twitter"></i></a></li>
                                                <li><a href="https://www.pinterest.com/"><i
                                                            class="bx bxl-pinterest"></i></a></li>
                                                <li><a href="https://www.instagram.com/"><i
                                                            class="bx bxl-instagram"></i></a></li>
                                            </ul>
                                            <div>
                                                <a href="#" class="share-btn"><i class="bx bxs-share-alt"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="eg-card c-feature-card2 wow fadeInDown" data-wow-duration="1.5s"
                                 data-wow-delay="0.6s">
                                <div class="auction-img">
                                    <img alt="image" src="images/bg/umcoming3.png">
                                    <div class="auction-timer2 gap-2" id="timer9">
                                        <div class="countdown-single">
                                            <h5 id="days9">7</h5>
                                            <span>Days</span>
                                        </div>
                                        <div class="countdown-single">
                                            <h5 id="hours9">05</h5>
                                            <span>Hours</span>
                                        </div>
                                        <div class="countdown-single">
                                            <h5 id="minutes9">56</h5>
                                            <span>Mins</span>
                                        </div>
                                        <div class="countdown-single">
                                            <h5 id="seconds9">08</h5>
                                            <span>Secs</span>
                                        </div>
                                    </div>
                                    <div class="author-area3">
                                        <div class="author-emo">
                                            <img alt="image" src="images/bg/upcoming-author3.png">
                                        </div>
                                        <div class="author-name">
                                            <span>by @robatfox</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="c-feature-content">
                                    <div class="c-feature-category">Motor Bike</div>
                                    <a href="auction-details.html">
                                        <h4>North Casual Lifestle Shoes..</h4>
                                    </a>
                                    <p>Bidding Price : <span>$15.99</span></p>
                                    <div class="auction-card-bttm">
                                        <a href="auction-details.html" class="eg-btn btn--primary2 btn--sm">View
                                            Details</a>
                                        <div class="share-area">
                                            <ul class="social-icons d-flex">
                                                <li><a href="https://www.facebook.com/"><i
                                                            class="bx bxl-facebook"></i></a></li>
                                                <li><a href="https://www.twitter.com/"><i
                                                            class="bx bxl-twitter"></i></a></li>
                                                <li><a href="https://www.pinterest.com/"><i
                                                            class="bx bxl-pinterest"></i></a></li>
                                                <li><a href="https://www.instagram.com/"><i
                                                            class="bx bxl-instagram"></i></a></li>
                                            </ul>
                                            <div>
                                                <a href="#" class="share-btn"><i class="bx bxs-share-alt"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="eg-card c-feature-card2 wow fadeInDown" data-wow-duration="1.5s"
                                 data-wow-delay=".2s">
                                <div class="auction-img">
                                    <img alt="image" src="images/bg/umcoming1.png">
                                    <div class="auction-timer2 gap-2" id="timer10">
                                        <div class="countdown-single">
                                            <h5 id="days10">7</h5>
                                            <span>Days</span>
                                        </div>
                                        <div class="countdown-single">
                                            <h5 id="hours10">05</h5>
                                            <span>Hours</span>
                                        </div>
                                        <div class="countdown-single">
                                            <h5 id="minutes10">56</h5>
                                            <span>Mins</span>
                                        </div>
                                        <div class="countdown-single">
                                            <h5 id="seconds10">08</h5>
                                            <span>Secs</span>
                                        </div>
                                    </div>
                                    <div class="author-area3">
                                        <div class="author-emo">
                                            <img alt="image" src="images/bg/upcoming-author1.png">
                                        </div>
                                        <div class="author-name">
                                            <span>by @robatfox</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="c-feature-content">
                                    <div class="c-feature-category">Time Zoon</div>
                                    <a href="auction-details.html">
                                        <h4>Michael Kors Watch m20L6</h4>
                                    </a>
                                    <p>Bidding Price : <span>$15.99</span></p>
                                    <div class="auction-card-bttm">
                                        <a href="auction-details.html" class="eg-btn btn--primary2 btn--sm">View
                                            Details</a>
                                        <div class="share-area">
                                            <ul class="social-icons d-flex">
                                                <li><a href="https://www.facebook.com/"><i
                                                            class="bx bxl-facebook"></i></a></li>
                                                <li><a href="https://www.twitter.com/"><i
                                                            class="bx bxl-twitter"></i></a></li>
                                                <li><a href="https://www.pinterest.com/"><i
                                                            class="bx bxl-pinterest"></i></a></li>
                                                <li><a href="https://www.instagram.com/"><i
                                                            class="bx bxl-instagram"></i></a></li>
                                            </ul>
                                            <div>
                                                <a href="#" class="share-btn"><i class="bx bxs-share-alt"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="sponsor-section style-2">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-sm-12 col-md-10 col-lg-8 col-xl-6">
                    <div class="section-title1">
                        <h2>Trusted By 500+ Businesses.</h2>
                        <p class="mb-0">Explore on the world's best & largest Bidding marketplace with our beautiful
                            Bidding
                            products. We want to be a part of your smile, success and future growth.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="slick-wrapper wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.3s">
                    <div id="slick1">
                        <div class="slide-item"><img alt="image" src="images/bg/sponsor1.png"></div>
                        <div class="slide-item"><img alt="image" src="images/bg/sponsor2.png"></div>
                        <div class="slide-item"><img alt="image" src="images/bg/sponsor3.png"></div>
                        <div class="slide-item"><img alt="image" src="images/bg/sponsor4.png"></div>
                        <div class="slide-item"><img alt="image" src="images/bg/sponsor5.png"></div>
                        <div class="slide-item"><img alt="image" src="images/bg/sponsor6.png"></div>
                        <div class="slide-item"><img alt="image" src="images/bg/sponsor7.png"></div>
                        <div class="slide-item"><img alt="image" src="images/bg/sponsor8.png"></div>
                        <div class="slide-item"><img alt="image" src="images/bg/sponsor9.png"></div>
                        <div class="slide-item"><img alt="image" src="images/bg/sponsor1.png"></div>
                        <div class="slide-item"><img alt="image" src="images/bg/sponsor3.png"></div>
                        <div class="slide-item"><img alt="image" src="images/bg/sponsor5.png"></div>
                        <div class="slide-item"><img alt="image" src="images/bg/sponsor8.png"></div>
                        <div class="slide-item"><img alt="image" src="images/bg/sponsor6.png"></div>
                        <div class="slide-item"><img alt="image" src="images/bg/sponsor7.png"></div>
                        <div class="slide-item"><img alt="image" src="images/bg/sponsor8.png"></div>
                        <div class="slide-item"><img alt="image" src="images/bg/sponsor1.png"></div>
                        <div class="slide-item"><img alt="image" src="images/bg/sponsor2.png"></div>
                        <div class="slide-item"><img alt="image" src="images/bg/sponsor9.png"></div>
                        <div class="slide-item"><img alt="image" src="images/bg/sponsor8.png"></div>
                        <div class="slide-item"><img alt="image" src="images/bg/sponsor9.png"></div>
                        <div class="slide-item"><img alt="image" src="images/bg/sponsor1.png"></div>
                        <div class="slide-item"><img alt="image" src="images/bg/sponsor3.png"></div>
                        <div class="slide-item"><img alt="image" src="images/bg/sponsor5.png"></div>
                        <div class="slide-item"><img alt="image" src="images/bg/sponsor8.png"></div>
                        <div class="slide-item"><img alt="image" src="images/bg/sponsor6.png"></div>
                        <div class="slide-item"><img alt="image" src="images/bg/sponsor7.png"></div>
                        <div class="slide-item"><img alt="image" src="images/bg/sponsor8.png"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="recent-news-section pt-120 pb-120">
        <img alt="image" src="images/bg/section-bg2.png" class="img-fluid section-bg2">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-sm-12 col-md-10 col-lg-8 col-xl-6">
                    <div class="section-title1">
                        <h2>Our Recent News</h2>
                        <p class="mb-0">Explore on the world's best & largest Bidding marketplace with our beautiful
                            Bidding
                            products. We want to be a part of your smile, success and future growth.</p>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center g-4">
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-10">
                    <div class="single-blog-style2 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <div class="blog-img">
                            <a href="#" class="blog-date"><i class="bi bi-calendar-check"></i>Jan 30, 2022</a>
                            <img alt="image" src="images/blog/recent21.png">
                        </div>
                        <div class="blog-content">
                            <h5><a href="blog-details.html">David Droga Still Has Faith in Online Advertising Creative
                                </a></h5>
                            <div class="blog-meta">
                                <div class="author">
                                    <img alt="image" src="images/blog/author1.png">
                                    <a href="blog-details.html" class="author-name">Johan Martin</a>
                                </div>
                                <div class="comment">
                                    <img alt="image" src="images/icons/comment-icon.svg">
                                    <a href="#" class="comment">05 Comments</a>
                                </div>
                            </div>
                            <p class="para">Explore on the world's best & largest Bidding market place with our Bidding
                                products.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-10">
                    <div class="single-blog-style2 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.4s">
                        <div class="blog-img">
                            <a href="#" class="blog-date"><i class="bi bi-calendar-check"></i>May 30, 2022</a>
                            <img alt="image" src="images/blog/recent22.png">
                        </div>
                        <div class="blog-content">
                            <h5><a href="blog-details.html">Take our friend Johnny No-Job, for example. He’s a
                                    specialist in .</a></h5>
                            <div class="blog-meta">
                                <div class="author">
                                    <img alt="image" src="images/blog/author1.png">
                                    <a href="blog-details.html" class="author-name">Johan Martin</a>
                                </div>
                                <div class="comment">
                                    <img alt="image" src="images/icons/comment-icon.svg">
                                    <a href="#" class="comment">05 Comments</a>
                                </div>
                            </div>
                            <p class="para">Explore on the world's best & largest Bidding market place with our Bidding
                                products.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-10">
                    <div class="single-blog-style2 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay=".4s">
                        <div class="blog-img">
                            <a href="#" class="blog-date"><i class="bi bi-calendar-check"></i>May 30, 2022</a>
                            <img alt="image" src="images/blog/recent23.png">
                        </div>
                        <div class="blog-content">
                            <h5><a href="blog-details.html">The second-price sealed-bid auction is similar to the
                                    first.</a></h5>
                            <div class="blog-meta">
                                <div class="author">
                                    <img alt="image" src="images/blog/author1.png">
                                    <a href="blog-details.html" class="author-name">Johan Martin</a>
                                </div>
                                <div class="comment">
                                    <img alt="image" src="images/icons/comment-icon.svg">
                                    <a href="#" class="comment">05 Comments</a>
                                </div>
                            </div>
                            <p class="para">Explore on the world's best & largest Bidding market place with our Bidding
                                products.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="about-us-counter pb-120">
        <div class="container">
            <div class="row g-4 d-flex justify-content-center">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-10 col-10">
                    <div class="counter-single text-center d-flex flex-row hover-border2 wow fadeInDown"
                         data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <div class="counter-icon"> <img alt="image" src="images/icons/employee.svg"> </div>
                        <div class="coundown d-flex flex-column">
                            <h3 class="odometer" data-odometer-final="5400">&nbsp;</h3>
                            <p>Happy Customer</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-10 col-10">
                    <div class="counter-single text-center d-flex flex-row hover-border2 wow fadeInDown"
                         data-wow-duration="1.5s" data-wow-delay="0.4s">
                        <div class="counter-icon"> <img alt="image" src="images/icons/review.svg"> </div>
                        <div class="coundown d-flex flex-column">
                            <h3 class="odometer" data-odometer-final="1250">&nbsp;</h3>
                            <p>Good Reviews</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-10 col-10">
                    <div class="counter-single text-center d-flex flex-row hover-border2 wow fadeInDown"
                         data-wow-duration="1.5s" data-wow-delay="0.6s">
                        <div class="counter-icon"> <img alt="image" src="images/icons/smily.svg"> </div>
                        <div class="coundown d-flex flex-column">
                            <h3 class="odometer" data-odometer-final="4250">&nbsp;</h3>
                            <p>Winner Customer</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-10 col-10">
                    <div class="counter-single text-center d-flex flex-row hover-border2 wow fadeInDown"
                         data-wow-duration="1.5s" data-wow-delay="0.8s">
                        <div class="counter-icon"> <img alt="image" src="images/icons/comment.svg"> </div>
                        <div class="coundown d-flex flex-column">
                            <h3 class="odometer" data-odometer-final="500">&nbsp;</h3>
                            <p>New Comments</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer class="style-2">
        <div class="footer-top">
            <div class="container">
                <div class="row gy-5">
                    <div class="col-xl-3 col-lg-8 col-md-12">
                        <div class="footer-item">
                            <h5>Join Newsletter</h5>
                            <p>Subscribe our newsletter to get more free design course and resource.</p>
                            <form class="mb-30">
                                <div class="input-with-btn d-flex jusify-content-start align-items-strech">
                                    <input type="text" placeholder="Enter your email">
                                    <button type="submit">Subscribe</button>
                                </div>
                            </form>
                            <ul class="footer-social gap-3">
                                <li><a href="#"><i class="bx bxl-facebook"></i></a></li>
                                <li><a href="#"><i class="bx bxl-twitter"></i></a></li>
                                <li><a href="#"><i class="bx bxl-instagram"></i></a></li>
                                <li><a href="#"><i class="bx bxl-pinterest-alt"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 d-flex justify-content-xl-center">
                        <div class="footer-item">
                            <h5>Importants links</h5>
                            <ul class="footer-list">
                                <li><a href="live-auction.html">All Product</a></li>
                                <li><a href="how-works.html">How It Works</a></li>
                                <li><a href="dashboard.html">My Account</a></li>
                                <li><a href="about.html">About Company</a></li>
                                <li><a href="blog.html">Our News Feed</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 d-flex justify-content-xl-center">
                        <div class="footer-item">
                            <h5>Help & FAQs</h5>
                            <ul class="footer-list">
                                <li><a href="product.html">Help Center</a></li>
                                <li><a href="faq.html">Customer FAQs</a></li>
                                <li><a href="login.html">Terms and Conditions</a></li>
                                <li><a href="about.html">Security Information</a></li>
                                <li><a href="blog.html">Merchant Add Policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-8 col-md-12">
                        <div class="footer-item">
                            <a href="index.html"><img alt="image" src="images/bg/footer-logo2.png"></a>
                            <ul class="address-list">
                                <li><a href="#">Add. 168/170, Avenue 01, Mirpur DOHS, Bangladesh.</a></li>
                                <li><a href="tel:+029169852">Phone: +029169852 / +88017600000</a></li>
                                <li><a
                                        href="/cdn-cgi/l/email-protection#e68f888089c8839e878b968a83a6818b878f8ac885898b">Email:
                                        <span class="__cf_email__"
                                              data-cfemail="e78e898188c9829f868a978b82a7808a868e8bc984888a">[email&#160;protected]</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row d-flex align-items-center g-4">
                    <div class="col-lg-6 d-flex justify-content-lg-start justify-content-center">
                        <p>Copyright 2022 <a href="#">Bid Out</a> | Design By <a href="https://www.egenslab.com/"
                                                                                 class="egns-lab">Egens Lab</a></p>
                    </div>
                    <div
                        class="col-lg-6 d-flex justify-content-lg-end justify-content-center align-items-center flex-sm-nowrap flex-wrap">
                        <p class="d-sm-flex d-none">We Accepts:</p>
                        <ul class="footer-logo-list">
                            <li><a href="#"><img alt="image" src="images/bg/footer-pay1.png"></a></li>
                            <li><a href="#"><img alt="image" src="images/bg/footer-pay2.png"></a></li>
                            <li><a href="#"><img alt="image" src="images/bg/footer-pay3.png"></a></li>
                            <li><a href="#"><img alt="image" src="images/bg/footer-pay4.png"></a></li>
                            <li><a href="#"><img alt="image" src="images/bg/footer-pay5.png"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

@endsection
