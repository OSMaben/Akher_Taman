@extends('layout.layout');
@section('content');

@include('layout.dashBoard_header');
<div class="container-fluid page-body-wrapper" style="padding: 0">
    @include('layout.sideBar');
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <div class="tab-content tab-transparent-content">
                        <div class="tab-pane fade show active" id="business-1" role="tabpanel" aria-labelledby="business-tab">
                            <div class="row">
                                <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <h5 class="mb-2 text-dark font-weight-normal">Number Of Products</h5>
                                            <h2 class="mb-4 text-dark font-weight-bold">{{$numberOfproducts}}</h2>
                                            <div class="dashboard-progress dashboard-progress-1 d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-lightbulb icon-md absolute-center text-dark"></i></div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <h5 class="mb-2 text-dark font-weight-normal">Accepted Bids</h5>
                                            <h2 class="mb-4 text-dark font-weight-bold">{{$totalAcceptedBids}}  </h2>
                                            <div class="dashboard-progress dashboard-progress-2 d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-account-circle icon-md absolute-center text-dark"></i></div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3  col-lg-6 col-sm-6 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <h5 class="mb-2 text-dark font-weight-normal">revune</h5>
                                            <h2 class="mb-4 text-dark font-weight-bold">{{$totalAmountAcceptedBids}}</h2>
                                            <div class="dashboard-progress dashboard-progress-3 d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-eye icon-md absolute-center text-dark"></i></div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <h5 class="mb-2 text-dark font-weight-normal">profite</h5>
                                            <h2 class="mb-4 text-dark font-weight-bold">{{$profit}}</h2>
                                            <div class="dashboard-progress dashboard-progress-4 d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-cube icon-md absolute-center text-dark"></i></div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between overflow-scroll">
                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Image</th>
                                                <th>Title</th>
                                                <th>Description</th>
                                                <th>Starting Price</th>
                                                <th>Current Price</th>
                                                <th>Ending Time</th>
                                                <th>Status</th>
                                                <th>Category</th>
                                                <th>Condition</th>
                                                <th>Location</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($acceptedBidsWithProduct as $acceptedProduct)

                                                <tr>
                                                    <td>{{ $acceptedProduct->id }}</td>
                                                    <td><img src="{{ asset('storage/images/' . $acceptedProduct->product->image) }}" alt="Product Image"></td>
                                                    <td>{{ $acceptedProduct->product->title }}</td>
                                                    <td>{{\Illuminate\Support\Str::words( $acceptedProduct->product->description,3) }}</td>
                                                    <td>{{ $acceptedProduct->product->starting_price }}</td>
                                                    <td>{{ $acceptedProduct->product->current_price }}</td>
                                                    <td>{{ $acceptedProduct->product->bid_end_time }}</td>
                                                    <td>{{ $acceptedProduct->product->status }}</td>
                                                    <td>{{ $acceptedProduct->product->category->name}}</td>
                                                    <td>{{ $acceptedProduct->product->condition }}</td  >
                                                    <td>{{ $acceptedProduct->product->location }}</td>
                                                    <td>
                                                        <form method="post" action="{{route('cancelAcceptedBids', $acceptedProduct->id)}}">
                                                            @csrf
                                                            <button type="submit" >
                                                                <i class="fa-solid fa-power-off text-danger"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <th>#</th>
                                                <th>Image</th>
                                                <th>Title</th>
                                                <th>Description</th>
                                                <th>Starting Price</th>
                                                <th>Current Price</th>
                                                <th>Ending Time</th>
                                                <th>Status</th>
                                                <th>Category</th>
                                                <th>Condition</th>
                                                <th>Location</th>
                                                <th>Action</th>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="footer-inner-wraper">
                <div class="d-sm-flex justify-content-center justify-content-sm-between py-2">
                    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © <a href="https://www.bootstrapdash.com/" target="_blank">bootstrapdash.com </a>2021</span>
                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Only the best <a href="https://www.bootstrapdash.com/" target="_blank"> Bootstrap dashboard </a> templates</span>
                </div>
            </div>
        </footer>
    </div>
</div>

@endsection
