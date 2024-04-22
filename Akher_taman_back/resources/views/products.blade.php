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
    <link rel="shortcut icon" href="images/favicon.png"/>
    <script src="https://cdn.tailwindcss.com"></script>
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
                                <h4 class="card-title">Manage Products</h4>
                                   @if(Auth::user()->role_id == 3)
                                    <button type="submit" style="background: red; color: white; border: none" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="mdi mdi-plus-outline  fs-5"></i>
                                    </button>
                                   @endif

                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="post" action="{{route('addProduct')}}" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="mb-3">
                                                        <label for="title" class="form-label">Title</label>
                                                        <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="description" class="form-label">Description</label>
                                                        <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter description"></textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="starting-price" class="form-label">Starting Price</label>
                                                        <input type="number" class="form-control" name="starting_price" id="starting-price" placeholder="Enter starting price">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="ending-time" class="form-label">Ending Time</label>
                                                        <input type="datetime-local" class="form-control" name="bid_end_time"  id="ending-time">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="status" class="form-label">Status</label>
                                                        <select class="form-select" id="status" name="status">
                                                            <option value="active">active</option>
                                                            <option value="sold">sold</option>
                                                            <option value="expired">expired</option>
                                                        </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="category" class="form-label">Category</label>
                                                        <select class="form-select" id="category" name="category_id">
                                                               @foreach($categories as $category)
                                                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                                               @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="condition" class="form-label">Condition</label>
                                                        <select class="form-select" id="condition" name="condition">
                                                            <option value="new">new</option>
                                                            <option value="used">used</option>
                                                            <option value="damaged">damaged</option>
                                                        </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="location" class="form-label">Location</label>
                                                        <input type="text" class="form-control" name="location" id="location" placeholder="Enter location">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="image" class="form-label">Image</label>
                                                        <input type="file" class="form-control" id="image" name="image">
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @if(Auth::user()->role_id == 3)
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th> # </th>
                                    <th>image</th>
                                    <th> title </th>
                                    <th> description</th>
                                    <th> starting price </th>
                                    <th> current price </th>
                                    <th>ending time </th>
                                    <th>status</th>
                                    <th>category</th>
                                    <th>condition</th>
                                    <th>location</th>

                                    <th>action</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th> # </th>
                                    <th>image</th>
                                    <th> title </th>
                                    <th> description</th>
                                    <th> starting price </th>
                                    <th> current price </th>
                                    <th>ending time </th>
                                    <th>status</th>
                                    <th>category</th>
                                    <th>condition</th>
                                    <th>location</th>
                                    <th>action</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                @foreach($products as $product)
                                <tr>
                                    <td> {{$product->id}} </td>
                                    <td> <img src="storage/images/{{$product->image ?? 'empty'}} " /></td>
                                    <td> {{$product->title}} </td>
                                    <td> {{ \Illuminate\Support\Str::words($product->description, 3)}} </td>
                                    <td> {{$product->starting_price}}</td>
                                    <td> {{$product->current_price}} </td>
                                    <td> {{$product->bid_end_time ?? 'empty'}} </td>
                                    @if($product->isAccepted == 1)
                                        <td class="text-success">Approved</td>
                                    @else
                                        <td class="text-warning"> pending </td>
                                    @endif
                                    <td> {{$product->category->name}} </td>

                                    @if($product->condition == 'damaged')
                                        <td class="text-danger"> {{$product->condition}} </td>
                                    @elseif($product->condition == 'used')
                                        <td class="text-behance"> {{$product->condition}}</td>
                                    @else
                                        <td class="text-black"> {{$product->condition}} </td>
                                    @endif

                                    <td> {{$product->location}} </td>
                                    <td class="d-flex action">
                                            <button type="submit" class="" data-bs-toggle="modal" data-bs-target="#exampleModal{{$product->id}}">
                                                <i class="mdi mdi-pencil-outline text-success"></i>
                                            </button>
                                            <div class="modal fade" id="exampleModal{{$product->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Update Product</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form method="post" action="{{route('updateProduct', $product->id)}}" enctype="multipart/form-data">
                                                                @csrf
                                                                @method("PUT")
                                                                <div class="mb-3">
                                                                    <label for="title" class="form-label">Title</label>
                                                                    <input type="text" class="form-control" id="title" name="title" value="{{$product->title}}" placeholder="Enter title">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="description" class="form-label">Description</label>
                                                                    <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter description">{{$product->description}}</textarea>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="starting-price" class="form-label">Starting Price</label>
                                                                    <input type="number" class="form-control" name="starting_price" value="{{$product->starting_price}}" id="starting-price" placeholder="Enter starting price">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="ending-time" class="form-label">Ending Time</label>
                                                                    <input type="datetime-local" class="form-control" name="bid_end_time" value="{{$product->bid_end_time}}"  id="ending-time">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="status" class="form-label">Status</label>
                                                                    <select class="form-select" id="status" name="status">
                                                                        <option value="active">active</option>
                                                                        <option value="sold">sold</option>
                                                                        <option value="expired">expired</option>
                                                                    </select>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="category" class="form-label">Category</label>
                                                                    <select class="form-select" id="category" name="category_id">
                                                                        @foreach($categories as $category)
                                                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="condition" class="form-label">Condition</label>
                                                                    <select class="form-select" id="condition" name="condition">
                                                                        <option value="new">new</option>
                                                                        <option value="used">used</option>
                                                                        <option value="damaged">damaged</option>
                                                                    </select>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="location" class="form-label">Location</label>
                                                                    <input type="text" class="form-control" value="{{$product->location}}" name="location" id="location" placeholder="Enter location">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="image" class="form-label">Image</label>
                                                                    <input type="file" class="form-control" id="image" name="image">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <button type="submit" class="btn btn-primary" style="background: red">Update</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <form class="text-danger" method="post" action="{{route('delete', $product->id)}}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="confirm('are you sure you want to delete a product ? ')">
                                                <i class="mdi mdi-delete-outline"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach

                                </tbody>
                            </table>
                         @elseif(Auth::user()->role_id == 1)
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
                                            <th> starting price </th>
                                            <th> current price </th>
                                            <th>ending time </th>
                                            <th>status</th>
                                            <th>category</th>
                                            <th>condition</th>
                                            <th>location</th>
                                            <th>action</th>
                                        </tr>
                                        </thead>
                                        <tfoot>
                                        <tr>
                                            <th> # </th>
                                            <th>image</th>
                                            <th> title </th>
                                            <th> description</th>
                                            <th> starting price </th>
                                            <th> current price </th>
                                            <th>ending time </th>
                                            <th>status</th>
                                            <th>category</th>
                                            <th>condition</th>
                                            <th>location</th>
                                            <th>action</th>
                                        </tr>
                                        </tfoot>
                                        <tbody>
                                        @foreach($products as $product)
                                            <tr>
                                                <td> {{$product->id}} </td>
                                                <td> <img src="storage/images/{{$product->image ?? 'empty'}} " /></td>
                                                <td> {{$product->title}} </td>
                                                <td>{{ \Illuminate\Support\Str::words($product->description, 3)}} </td>
                                                <td> {{$product->starting_price}}</td>
                                                <td> {{$product->current_price}} </td>
                                                <td> {{$product->bid_end_time ?? 'empty'}} </td>
                                                @if($product->isAccepted == 1)
                                                    <td class="text-success">Approved</td>
                                                @else
                                                    <td class="text-danger"> No yet! </td>
                                                @endif
                                                <td> {{$product->category->name}} </td>

                                                @if($product->condition == 'damaged')
                                                    <td class="text-danger"> {{$product->condition}} </td>
                                                @elseif($product->condition == 'used')
                                                    <td class="text-behance"> {{$product->condition}}</td>
                                                @else
                                                    <td class="text-black"> {{$product->condition}} </td>
                                                @endif

                                                <td> {{$product->location}} </td>
                                                <td class="d-flex action">
                                                    <form method="post" action="{{route('accept', $product->id)}}">
                                                        @csrf
                                                        <button type="submit" class="mx-4" data-bs-toggle="modal">
                                                            <i class="mdi mdi-checkbox-multiple-marked-circle-outline text-success fs-5"></i>
                                                        </button>
                                                    </form>
                                                    <form class="text-danger" method="post" action="{{route('refuse', $product->id)}}">
                                                        @csrf
                                                        @method('post')
                                                        <button type="submit" >
                                                            <i class="mdi mdi-thumb-down-outline  fs-5"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach

                                        </tbody>
                                    </table>
                        @endif
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
