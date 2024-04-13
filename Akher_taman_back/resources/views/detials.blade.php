<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Akher Taman</title>
</head>
<body>




<style>
    .icon-hover:hover {
        border-color: #3b71ca !important;
        background-color: white !important;
        color: #3b71ca !important;
    }

    .icon-hover:hover i {
        color: #3b71ca !important;
    }

    .nav-pills .nav-link.active, .nav-pills .show>.nav-link
    {
        background: red;
    }

</style>

<header>
    <!-- Jumbotron -->
    <div class="p-3 text-center bg-white border-bottom">
        <div class="container">
            <div class="row gy-3">

                <div class="order-lg-last col-lg-5 col-sm-8 col-8">
                    <div class="d-flex float-end">
                        @if(!Auth::check())
                        <a href="/login" class="me-1 border rounded py-1 px-3 nav-link d-flex align-items-center" target="_blank"> <i class="fas fa-user-alt m-1 me-md-2"></i><p class="d-none d-md-block mb-0">Sign in</p> </a>
                        @endif

                    </div>
                </div>

                <div class="col-lg-5 col-md-12 col-12">
                    <div class="input-group float-center">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-danger">
        <div class="container py-4">
            <nav class="d-flex">
                <h6 class="mb-0">
                    <a href="/" class="text-white-50">Home</a>
                    <span class="text-white-50 mx-2"> > </span>
                    <a href="" class="text-white"><u>Details</u></a>
                </h6>
            </nav>
        </div>
    </div>
</header>
<section class="py-5">
    <div class="container">
        <div class="row gx-5">
            <aside class="col-lg-6">
                <div class="border rounded-4 mb-3 d-flex justify-content-center">
                    <img src="{{ asset('storage/images/' . $details->image) }}" style="max-width: 100%; max-height: 100vh; margin: auto;" class="rounded-4 fit" alt=""/>
                </div>
                <a href="profileDetails" class="d-flex justify-content-start align-items-center gap-2 mb-3">
                   <div class="bg-danger p-2" style="border-radius:7px">
                       <i class="fa-regular fa-user text-white"></i>
                   </div>
                    <div class="d-flex flex-column gap-0" style="border-radius:7px">
                        <p class="text-black">{{$details->user->name}}</p>
                        <i class="fa-regular fa-message" style="font-size: 14px"></i>
                    </div>
                </a>
            </aside>
            <main class="col-lg-6">
                <div class="ps-lg-3">
                    <h1 class="title text-dark">
                        {{$details->title}}
                    </h1>
                    <div class="d-flex flex-row my-3">
                        <div class="text-warning mb-1 me-2">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <span class="ms-1">
                4.5
              </span>
                        </div>
                        <span class="text-success ms-2"> {{$details->status}}</span>
                    </div>

                    <div class="mb-3">
                        @if($highestBid)
                        <span class="h5">${{ $highestBid->amount }}</span>
                        <span class="text-muted">/highest bid</span>
                        @else
                        <p>no bids yet !</p>
                        @endif
                    </div>

                    <p class="fs-5" style="color: #8c8c8c">
                        {{$details->description}}
                    </p>

                    <div class="row">
                        <dt class="col-3" >category:</dt>
                        <dd class="col-9">{{ $details->category->name }}</dd>

                        <dt class="col-3" >started price</dt>
                        <dd class="col-9">{{ $details->current_price }}</dd>

                        <dt class="col-3">condition</dt>
                        <dd class="col-9">{{ $details->condition }}</dd>

                        <dt class="col-3" >location</dt>
                        <dd class="col-9">{{ $details->location }}</dd>
                    </div>

                    <hr />
                    <form method="post" action="{{route('bidnow', $details->id)}}">
                        @csrf
                        <div class="row mb-4">
                            <div class="col-md-8 col-6">
                                <h6 class="mb-2">Bid Now</h6>
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul class="list-unstyled">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <span style="color: #8c8c8c">Minimum Bid $20.00</span>
                                <input class="form-control" type="number" name="bid_amount" placeholder="set your bid">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-danger shadow-0"> <i class="me-1 fa fa-shopping-basket"></i> bid now </button>
                    </form>
                </div>
            </main>
        </div>
    </div>
</section>
<section class="bg-light border-top py-4">
    <div class="container">
        <div class="row gx-4">
            <div class="col-lg-8 mb-4">
                <div class="border rounded-2 px-3 py-2 bg-white">


                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Description</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Diding History</button>
                        </li>

                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">{{$details->description}}
                            <div class="col-12 col-md-6 my-3">
                                <ul class="list-unstyled mb-0">
                                    <li class="d-flex"><i class="fas fa-check text-success me-2"></i><p class="col-3"><strong>category:</strong></p>{{ $details->category->name }}</li>
                                    <li class="d-flex"><i class="fas fa-check text-success me-2"></i> <p class="col-3"><strong>started price</strong></p>{{ $details->current_price }}</li>
                                    <li class="d-flex"><i class="fas fa-check text-success me-2"></i><p class="col-3"><strong>condition</strong></p>{{ $details->condition }}</li>
                                    <li class="d-flex"><i class="fas fa-check text-success me-2"></i><p class="col-3"><strong>location</strong></p>{{ $details->location }}</li>

                                </ul>
                            </div></div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0"><div class="row mb-2">

                                @if ($highestBid)
                                    <p><span style="font-weight: bold">Highest Bidder:</span> {{ $highestBid->bidder->name }}</p>
                                    <p><span style="font-weight: bold">Amount: </span>${{ $highestBid->amount }}</p>
                                    <p><span style="font-weight: bold">Date:</span> {{ $highestBid->created_at }}</p>
                                @else
                                    <p>No bids yet.</p>
                                @endif

                            </div>
                            <div class="wrapper rounded">

                                <div class="row mt-2 pt-2">
                                    <div class="col-md-6" id="income">

                                    </div>
                                    <div class="col-md-6">

                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <ul class="nav nav-tabs w-75">
                                        <li class="nav-item"> <a class="nav-link active" href="#history">History</a> </li>
                                    </ul>
                                </div>
                                <div class="table-responsive mt-3">
                                    <table class="table table-dark table-borderless">
                                        <thead>

                                        <tr>
                                            <th scope="col">Activity</th>
                                            <th scope="col">Date</th>
                                            <th scope="col" class="text-right">Amount</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($product->bids as $bid)
                                            <tr>
                                                <th scope="col">{{ $bid->bidder->name }}</th>
                                                <th scope="col">{{ $bid->created_at }}</th>
                                                <th scope="col" class="text-right">${{ $bid->amount }}</th>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="px-0 border rounded-2 shadow-0">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Similar items</h5>
                            <div class="d-flex mb-3">
                                <a href="#" class="me-3">
                                    <img src="https://mdbcdn.b-cdn.net/img/bootstrap-ecommerce/items/8.webp" style="min-width: 96px; height: 96px;" class="img-md img-thumbnail" />
                                </a>
                                <div class="info">
                                    <a href="#" class="nav-link mb-1">
                                        Rucksack Backpack Large <br />
                                        Line Mounts
                                    </a>
                                    <strong class="text-dark"> $38.90</strong>
                                </div>
                            </div>

                            <div class="d-flex mb-3">
                                <a href="#" class="me-3">
                                    <img src="https://mdbcdn.b-cdn.net/img/bootstrap-ecommerce/items/9.webp" style="min-width: 96px; height: 96px;" class="img-md img-thumbnail" />
                                </a>
                                <div class="info">
                                    <a href="#" class="nav-link mb-1">
                                        Summer New Men's Denim <br />
                                        Jeans Shorts
                                    </a>
                                    <strong class="text-dark"> $29.50</strong>
                                </div>
                            </div>

                            <div class="d-flex mb-3">
                                <a href="#" class="me-3">
                                    <img src="https://mdbcdn.b-cdn.net/img/bootstrap-ecommerce/items/10.webp" style="min-width: 96px; height: 96px;" class="img-md img-thumbnail" />
                                </a>
                                <div class="info">
                                    <a href="#" class="nav-link mb-1"> T-shirts with multiple colors, for men and lady </a>
                                    <strong class="text-dark"> $120.00</strong>
                                </div>
                            </div>

                            <div class="d-flex">
                                <a href="#" class="me-3">
                                    <img src="https://mdbcdn.b-cdn.net/img/bootstrap-ecommerce/items/11.webp" style="min-width: 96px; height: 96px;" class="img-md img-thumbnail" />
                                </a>
                                <div class="info">
                                    <a href="#" class="nav-link mb-1"> Blazer Suit Dress Jacket for Men, Blue color </a>
                                    <strong class="text-dark"> $339.90</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
    a{
        text-decoration: none;
    }
</style>

<footer class="text-center text-lg-start text-muted bg-black mt-3">
    <!-- Section: Links  -->
    <section class="">
        <div class="container text-center text-md-start pt-4 pb-4">
            <!-- Grid row -->
            <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-12 col-lg-3 col-sm-12 mb-2">
                    <!-- Content -->
                    <a href="/" target="_blank" class="text-white h2" style="text-decoration: none">
                        Bid Our
                    </a>
                    <p class="mt-1 text-white">
                        © 2023 Copyright: MDBootstrap.com
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-6 col-sm-4 col-lg-2">
                    <!-- Links -->
                    <h6 class="text-uppercase text-white fw-bold mb-2">
                        Store
                    </h6>
                    <ul class="list-unstyled mb-4">
                        <li><a class="text-white-50" href="#">About us</a></li>
                        <li><a class="text-white-50" href="#">Find store</a></li>
                        <li><a class="text-white-50" href="#">Categories</a></li>
                        <li><a class="text-white-50" href="#">Blogs</a></li>
                    </ul>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-6 col-sm-4 col-lg-2">
                    <!-- Links -->
                    <h6 class="text-uppercase text-white fw-bold mb-2">
                        Information
                    </h6>
                    <ul class="list-unstyled mb-4">
                        <li><a class="text-white-50" href="#">Help center</a></li>
                        <li><a class="text-white-50" href="#">Money refund</a></li>
                        <li><a class="text-white-50" href="#">Shipping info</a></li>
                        <li><a class="text-white-50" href="#">Refunds</a></li>
                    </ul>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-6 col-sm-4 col-lg-2">
                    <!-- Links -->
                    <h6 class="text-uppercase text-white fw-bold mb-2">
                        Support
                    </h6>
                    <ul class="list-unstyled mb-4">
                        <li><a class="text-white-50" href="#">Help center</a></li>
                        <li><a class="text-white-50" href="#">Documents</a></li>
                        <li><a class="text-white-50" href="#">Account restore</a></li>
                        <li><a class="text-white-50" href="#">My orders</a></li>
                    </ul>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-12 col-sm-12 col-lg-3">
                    <!-- Links -->
                    <h6 class="text-uppercase text-white fw-bold mb-2">Newsletter</h6>
                    <p class="text-white">Stay in touch with latest updates about our products and offers</p>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control border" placeholder="Email" aria-label="Email" aria-describedby="button-addon2" />
                        <button class="btn btn-light border shadow-0" type="button" id="button-addon2" data-mdb-ripple-color="dark">
                            Join
                        </button>
                    </div>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
    </section>
    <!-- Section: Links  -->

    <div class="">
        <div class="container">
            <div class="d-flex justify-content-between py-4 border-top">
                <!--- payment --->
                <div>
                    <i class="fab fa-lg fa-cc-visa text-white"></i>
                    <i class="fab fa-lg fa-cc-amex text-white"></i>
                    <i class="fab fa-lg fa-cc-mastercard text-white"></i>
                    <i class="fab fa-lg fa-cc-paypal text-white"></i>
                </div>
                <!--- payment --->

                <!--- language selector --->
                <div class="dropdown dropup">
                    <a class="dropdown-toggle text-white" href="#" id="Dropdown" role="button" data-mdb-toggle="dropdown" aria-expanded="false"> <i class="flag-united-kingdom flag m-0 me-1"></i>English </a>

                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="Dropdown">
                        <li>
                            <a class="dropdown-item" href="#"><i class="flag-united-kingdom flag"></i>English <i class="fa fa-check text-success ms-2"></i></a>
                        </li>
                        <li><hr class="dropdown-divider" /></li>
                        <li>
                            <a class="dropdown-item" href="#"><i class="flag-poland flag"></i>Polski</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#"><i class="flag-china flag"></i>中文</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#"><i class="flag-japan flag"></i>日本語</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#"><i class="flag-germany flag"></i>Deutsch</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#"><i class="flag-france flag"></i>Français</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#"><i class="flag-spain flag"></i>Español</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#"><i class="flag-russia flag"></i>Русский</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#"><i class="flag-portugal flag"></i>Português</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
