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
