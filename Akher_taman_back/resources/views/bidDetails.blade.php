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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


</head>
<body>



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
        <div class="row clearfix"  style="height: 100vh">
            <div class="col-lg-12">
                <div class="card chat-app h-100">
                    <div id="plist" class="people-list">
                        <div class="input-group">
                            <a href="/bids">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-arrow-left"></i></span>
                                </div>
                            </a>
                            <input type="text" class="form-control" placeholder="Search...">
                        </div>
                        <ul class="list-unstyled chat-list mt-2 mb-0">
                            @foreach($AllProduct as $singlePro)
                                <a href="/bidDetails/{{$singlePro->id}}">
                                    @csrf
                                    <li class="clearfix">
                                        <img src="{{ asset('storage/images/' . $singlePro->image) }}" alt="avatar">
                                        <div class="about">
                                            <div class="name">{{$singlePro->title}}</div>
                                            <div class="status">
                                                @if($singlePro->status == 'sold')
                                                    <i class="fa fa-circle offline text-warning"></i>
                                                @elseif($singlePro->status == 'active')
                                                    <i class="fa fa-circle offline text-success"></i>
                                                @else
                                                    <i class="fa fa-circle offline text-danger"></i>
                                                @endif
                                                {{$singlePro->status}} </div>
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
                                    <a href="" data-toggle="modal" data-target="#view_info">
                                        <img src="{{asset('storage/images/' . $selectedPro->image)}}" alt="avatar">
                                    </a>
                                    <div class="chat-about">
                                        <h6 class="m-b-0">{{$selectedPro->title}}</h6>
                                        <small>{{$selectedPro->category->name}}</small>
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
                                                    @if($selectedProBids->isNotEmpty())
                                                        @foreach($selectedProBids as $bid)
                                                            <tr class="align-middle">
                                                                <td>#{{$bid->id}}</td>
                                                                <td>{{$bid->created_at}}</td>
                                                                <td>{{$bid->bidder->name}}</td>
                                                                <td>
                                                                    @if($bid->amount >= 300)
                                                                        <div class="d-flex align-items-center">
                                                                            <span><i class="fa fa-arrow-up text-success" aria-hidden="true"></i></span>
                                                                            <span>{{$bid->amount}}</span>
                                                                        </div>
                                                                    @else
                                                                        <div class="d-flex align-items-center">
                                                                            <span><i class="fa fa-arrow-down text-danger" aria-hidden="true"></i></span>
                                                                            <span>{{$bid->amount}}</span>
                                                                        </div>
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    @if($bid->status == 'pending')
                                                                        <span class="text-warning">{{$bid->status}}</span>
                                                                    @else
                                                                        <span class="text-success">{{$bid->status}}</span>
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    <form method="post" action="{{ route('acceptBid', ['id' => $bid->product_id]) }}">
                                                                        @csrf
                                                                        <input type="hidden" name="bid_id" value="{{ $bid->id }}">
                                                                        <button type="submit" class="mx-4" data-bs-toggle="modal">
                                                                            <i class="fa-solid fa-thumbs-up text-success"></i>
                                                                        </button>
                                                                    </form>
                                                                    <form class="text-danger" method="post" action="{{route('refuseBid', $bid->id)}}">
                                                                        @csrf
                                                                        @method('post')
                                                                        <button type="submit">
                                                                            <i class="fa-solid fa-thumbs-down text-danger"></i>
                                                                        </button>
                                                                    </form>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    @else
                                                        <tr>
                                                            <td colspan="5" class="text-danger">No bids associated with this product</td>
                                                        </tr>
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

    <script src="vendors/js/vendor.bundle.base.js"></script>

    <script src="js/off-canvas.js"></script>
    <script src="js/hoverable-collapse.js"></script>
    <script src="js/misc.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" ></script>
</body>
</html>
