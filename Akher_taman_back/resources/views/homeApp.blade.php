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

            <div class="search w-50 my-5">
                    <div class="input-group rounded">
                        <input type="search" class="form-control rounded" id="searchInput" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                        <span class="input-group-text border-0" id="search-addon">
                        </span>
                    </div>
            </div>

            <div class="row gy-4 d-flex justify-content-center">
                <div class="card-content divide-y flex flex-col gap-y-3 mt-5">
                    <div id="searchResults"></div>
                </div>
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


    <script>

        document.getElementById('searchInput').addEventListener('input', function(event) {
            const query = event.target.value;
            axios.get('/searchProduct', {
                params: {
                    query: query
                }
            })
                .then(function(response) {
                    const searchResults = response.data;
                    const searchResultsContainer = document.getElementById('searchResults');
                    searchResultsContainer.innerHTML = '';
                    searchResults.forEach(function(products) {
                        const cardContent = `
                             <div class="col-lg-4 col-md-6 col-sm-10 ">
                                <div data-wow-duration="1.5s" data-wow-delay="0.2s" class="eg-card auction-card2 wow fadeInDown">
                                    <div class="auction-img">
                                        <img alt="image" src="storage/images/${products.image}">
                                        <div class="auction-timer">
                                            <div class="countdown" id="timer1">
                                                <h5>${products.bid_end_time}</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="auction-content">
                                        <h4><a href="details/${products.id}">${products.title}</a></h4>
                                        <div class="author-price-area">
                                            <div class="author">
                                                <img alt="image" src="images/bg/auction-authr1.png"><span class="name">
{{--                                                    {{$product->user->name}}--}}
                                            </div>
                                                <p>$${products.current_price}</p>
                                        </div>
                                        <div class="auction-card-bttm">
                                            <a href="details/${products.id}" class="eg-btn btn--primary2 btn--sm">Place a Bid</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        `;
                        searchResultsContainer.insertAdjacentHTML('beforeend', cardContent);
                    });
                })
                .catch(function(error) {
                    console.error('Error searching:', error);
                });
        });


    </script>

@endsection
