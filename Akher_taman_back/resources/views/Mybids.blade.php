<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Connect Plus</title>
    <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="images/favicon.png" />



    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
<div class="container-scroller">


    @include('layout.dashBoard_header');
    <div class="container-fluid page-body-wrapper" style="padding: 0">
        @include('layout.sideBar');

        <div class="main-panel">
            <div class="content-wrapper">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul class="list-unstyled">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="d-flex justify-content-between">
                                <h4 class="card-title">All Bids</h4>
                                @if(Auth::user()->role_id == 1)
                                    <button type="submit" style="background: red; color: white; border: none" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="mdi mdi-plus-outline  fs-5"></i>
                                    </button>
                                @endif
                            </div>
                            @if(Auth::user()->role_id == 2)
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul class="list-unstyled">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th> # </th>
                                        <th>image</th>
                                        <th> title </th>
                                        <th> description</th>
                                        <th>condition</th>
                                        <th>Your Bid</th>
                                        <th>Product Owner</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th> # </th>
                                        <th>image</th>
                                        <th> title </th>
                                        <th> description</th>
                                        <th>condition</th>
                                        <th>Your Bid</th>
                                        <th>Product Owner</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($userBids as $userBid)
                                        <tr>
                                            <td>{{$userBid->product->id}}</td>
                                            <td><img src="storage/images/{{$userBid->product->image}}"/></td>
                                            <td>{{$userBid->product->title}}</td>
                                            <td>{{$userBid->product->description}}</td>
                                            <td>{{$userBid->product->condition}}</td>
                                            <td>{{$userBid->amount}}</td>
                                            <td>{{$userBid->product->user->name}}</td>
                                            @if($userBid->status == 'pending')
                                                <td class="text-warning">pending</td>
                                            @elseif($userBid->status == 'completed')
                                                    <td class="text-warning">completed</td>
                                            @else
                                                <td class="text-success">Accepted</td>
                                            @endif
                                            @if($userBid->status == 'completed')
                                                <td class="text-success"><i class="bi bi-download"></i></td>
                                            @elseif($userBid->status != 'pending')
                                                <td>
                                                    <form method="post" action="{{route('payment', $userBid->product->id)}}">
                                                        @csrf
                                                        <input type="hidden" value="{{$userBid->product->title}}" name="product_name" />
                                                        <input type="hidden" value="{{$userBid->amount}}" name="amount" />
                                                        <input type="hidden" value="{{$userBid->id}}" name="BidID"/>
                                                        <input type="hidden" value="{{$userBid->product->id}}" name="productId"/>
                                                        <button type="submit" class="btn btn-success">Buy</button>
                                                    </form>
                                                </td>
                                            @else
                                                <td>
                                                    <form method="post" action="{{route('CancelBid', $userBid->id)}}">
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger">Cancel</button>
                                                    </form>
                                                </td>
                                            @endif
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            @endif
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<style>
    .action button
    {
        background: transparent;
        border: none;
        color: red;
    }
</style>
<script src="vendors/js/vendor.bundle.base.js"></script>

<script src="js/off-canvas.js"></script>
<script src="js/hoverable-collapse.js"></script>
<script src="js/misc.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" ></script>
</body>
</html>
