@extends('layout.layout')
@section('content')


    <style>
        body{
            background-color: #f4f7f6;
            margin-top:20px;
        }
        .card {
            background: #fff;
            transition: .5s;
            border: 0;
            margin-bottom: 30px;
            border-radius: .55rem;
            position: relative;
            width: 100%;
            box-shadow: 0 1px 2px 0 rgb(0 0 0 / 10%);
        }
        .chat-app .people-list {
            width: 280px;
            position: absolute;
            left: 0;
            top: 0;
            padding: 20px;
            z-index: 7
        }

        .chat-app .chat {
            margin-left: 280px;
            border-left: 1px solid #eaeaea
        }

        .people-list {
            -moz-transition: .5s;
            -o-transition: .5s;
            -webkit-transition: .5s;
            transition: .5s
        }

        .people-list .chat-list li {
            padding: 10px 15px;
            list-style: none;
            border-radius: 3px
        }

        .people-list .chat-list li:hover {
            background: #efefef;
            cursor: pointer
        }

        .people-list .chat-list li.active {
            background: #efefef
        }

        .people-list .chat-list li .name {
            font-size: 15px
        }

        .people-list .chat-list img {
            width: 45px;
            height: 45px;
            border-radius: 50%
        }

        .people-list img {
            float: left;
            border-radius: 50%
        }

        .people-list .about {
            float: left;
            padding-left: 8px
        }

        .people-list .status {
            color: #999;
            font-size: 13px
        }

        .chat .chat-header {
            padding: 15px 20px;
            border-bottom: 2px solid #f4f7f6
        }

        .chat .chat-header img {
            float: left;
            border-radius: 40px;
            width: 40px;
            height: 40px;
        }

        .chat .chat-header .chat-about {
            float: left;
            padding-left: 10px
        }

        .chat .chat-history {
            padding: 20px;
            border-bottom: 2px solid #fff
        }

        .chat .chat-history ul {
            padding: 0
        }

        .chat .chat-history ul li {
            list-style: none;
            margin-bottom: 30px
        }

        .chat .chat-history ul li:last-child {
            margin-bottom: 0px
        }

        .chat .chat-history .message-data {
            margin-bottom: 15px
        }

        .chat .chat-history .message-data img {
            border-radius: 40px;
            width: 40px
        }

        .chat .chat-history .message-data-time {
            color: #434651;
            padding-left: 6px
        }

        .chat .chat-history .message {
            color: #444;
            padding: 18px 20px;
            line-height: 26px;
            font-size: 16px;
            border-radius: 7px;
            display: inline-block;
            position: relative
        }

        .chat .chat-history .message:after {
            bottom: 100%;
            left: 7%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none;
            border-bottom-color: #fff;
            border-width: 10px;
            margin-left: -10px
        }

        .chat .chat-history .my-message {
            background: #efefef
        }

        .chat .chat-history .my-message:after {
            bottom: 100%;
            left: 30px;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none;
            border-bottom-color: #efefef;
            border-width: 10px;
            margin-left: -10px
        }

        .chat .chat-history .other-message {
            background: #e8f1f3;
            text-align: right
        }

        .chat .chat-history .other-message:after {
            border-bottom-color: #e8f1f3;
            left: 93%
        }

        .chat .chat-message {
            padding: 20px
        }

        .online,
        .offline,
        .me {
            margin-right: 2px;
            font-size: 8px;
            vertical-align: middle
        }

        .online {
            color: #86c541
        }

        .offline {
            color: #e47297
        }

        .me {
            color: #1d8ecd
        }

        .float-right {
            float: right
        }

        .clearfix:after {
            visibility: hidden;
            display: block;
            font-size: 0;
            content: " ";
            clear: both;
            height: 0
        }

        @media only screen and (max-width: 767px) {
            .chat-app .people-list {
                height: 465px;
                width: 100%;
                overflow-x: auto;
                background: #fff;
                left: -400px;
                display: none
            }
            .chat-app .people-list.open {
                left: 0
            }
            .chat-app .chat {
                margin: 0
            }
            .chat-app .chat .chat-header {
                border-radius: 0.55rem 0.55rem 0 0
            }
            .chat-app .chat-history {
                height: 300px;
                overflow-x: auto
            }
        }

        @media only screen and (min-width: 768px) and (max-width: 992px) {
            .chat-app .chat-list {
                height: 650px;
                overflow-x: auto
            }
            .chat-app .chat-history {
                height: 600px;
                overflow-x: auto
            }
        }

        @media only screen and (min-device-width: 768px) and (max-device-width: 1024px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1) {
            .chat-app .chat-list {
                height: 480px;
                overflow-x: auto
            }
            .chat-app .chat-history {
                height: calc(100vh - 350px);
                overflow-x: auto
            }
        }
    </style>
    <div class="container my-5">
        <div class="row clearfix">
            <div class="col-lg-12">

                <div class="card chat-app">
                    <div id="plist" class="people-list">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-search"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Search..." id="seachProducts">
                        </div>
                        <ul class="list-unstyled chat-list mt-2 mb-0" id="rowProducts">
                            @foreach($products as $product)
                               <a href="bidDetails/{{$product->id}}">
                                   @csrf
                                   <li class="clearfix" >
                                       <img src="{{ asset('storage/images/' . $product->image) }}" alt="avatar">
                                       <div class="about">
                                           <div class="name">{{$product->title}}</div>
                                           <div class="status">
                                               @if($product->status == 'sold')
                                                   <i class="fa fa-circle offline text-warning"></i>
                                               @elseif($product->status == 'active')
                                                   <i class="fa fa-circle offline text-success"></i>
                                               @else
                                                   <i class="fa fa-circle offline text-danger"></i>
                                               @endif
                                               {{$product->status}} </div>
                                       </div>
                                   </li>
                               </a>
                            @endforeach
                        </ul>
                    </div>
                    <div class="chat">
                        <div class="chat-header clearfix">
                            <div class="row">
                                <div class="col-lg-6">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#view_info">
                                        <img src="storage/images/{{$lastProduct->image}}" alt="avatar">
                                    </a>
                                    <div class="chat-about">
                                        <h6 class="m-b-0">{{$lastProduct->title}}</h6>
                                            <small>{{$lastProduct->category->name}}</small>
                                    </div>
                                </div>
                                <div class="col-lg-6 hidden-sm text-right">
                                </div>
                            </div>
                        </div>
                        <div class="chat-history">
                            <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 mb-3 mb-lg-5">
                                        <div class="position-relative card table-nowrap table-card">

                                            <div class="table-responsive">
                                                <table class="table mb-0">
                                                    <thead class="small text-uppercase bg-body text-muted">
                                                    <tr>
                                                        <th>Transaction ID</th>
                                                        <th>Date</th>
                                                        <th>User</th>
                                                        <th>Amount</th>
                                                        <th>Status</th>
                                                        <th>action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @if($bids->isNotEmpty())
                                                        @foreach($bids as $bid)
                                                        <tr class="align-middle">
                                                            <td>
                                                                #57473829
                                                            </td>
                                                            <td>{{$bid->created_at}}</td>
                                                            <td>{{$bid->bidder->name}}</td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <span><i class="fa fa-arrow-up" aria-hidden="true"></i></span>
                                                                    <span>{{$bid->amount}}</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                @if($bid->status == 'pending')
                                                                    <span class="text-warning">{{$bid->status}}</span>
                                                                @else
                                                                    <span class="text-success">{{$bid->status}}</span>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                <form method="post" action="{{ route('acceptBids', $product->id) }}">
                                                                    @csrf
                                                                    <input type="hidden" name="bid_id" value="{{ $bid->id }}">
                                                                    <button type="submit" class="mx-4" data-bs-toggle="modal">
                                                                        <i class="fa-solid fa-thumbs-up text-success"></i>
                                                                    </button>
                                                                </form>
                                                                <form class="text-danger" method="post" action="{{route('refuseBids', $bid->id)}}">
                                                                    @csrf
                                                                    <button type="submit">
                                                                        <i class="fa-solid fa-thumbs-down text-danger"></i>
                                                                    </button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    @else
                                                        <p class="text-black">No bids Associated with this product</p>
                                                    @endif
                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="chat-message clearfix">

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>


    <script>
        const searchProducts = document.getElementById('seachProducts');

        searchProducts.addEventListener('input', function ()
        {
            const searchText = this.value.toLowerCase();
            console.log(searchText)
            const rowProducts  = document.querySelectorAll('#rowProducts li');

            rowProducts.forEach(function(item) {
                const productName = item.querySelector('.name').textContent.toLowerCase();

                if (productName.includes(searchText)) {
                    item.style.display = '';
                } else {
                    item.style.display = 'none';
                }
            });

        })

    </script>

@endsection
