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


    <title>Akher Tamen</title>
</head>
<body>
<style>

    .chat-search-box {
        -webkit-border-radius: 3px 0 0 0;
        -moz-border-radius: 3px 0 0 0;
        border-radius: 3px 0 0 0;
        padding: .75rem 1rem;
    }

    .chat-search-box .input-group .form-control {
        -webkit-border-radius: 2px 0 0 2px;
        -moz-border-radius: 2px 0 0 2px;
        border-radius: 2px 0 0 2px;
        border-right: 0;
    }

    .chat-search-box .input-group .form-control:focus {
        border-right: 0;
    }

    .chat-search-box .input-group .input-group-btn .btn {
        -webkit-border-radius: 0 2px 2px 0;
        -moz-border-radius: 0 2px 2px 0;
        border-radius: 0 2px 2px 0;
        margin: 0;
    }

    .chat-search-box .input-group .input-group-btn .btn i {
        font-size: 1.2rem;
        line-height: 100%;
        vertical-align: middle;
    }

    @media (max-width: 767px) {
        .chat-search-box {
            display: none;
        }
    }


    /************************************************
        ************************************************
                                        Users Container
        ************************************************
    ************************************************/

    .users-container {
        position: relative;
        padding: 1rem 0;
        border-right: 1px solid #e6ecf3;
        height: 100%;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-direction: column;
        flex-direction: column;
    }


    /************************************************
        ************************************************
                                                Users
        ************************************************
    ************************************************/

    .users {
        padding: 0;
    }

    .users .person {
        position: relative;
        width: 100%;
        padding: 10px 1rem;
        cursor: pointer;
        border-bottom: 1px solid #f0f4f8;
    }

    .users .person:hover {
        background-color: #ffffff;
        /* Fallback Color */
        background-image: -webkit-gradient(linear, left top, left bottom, from(#e9eff5), to(#ffffff));
        /* Saf4+, Chrome */
        background-image: -webkit-linear-gradient(right, #e9eff5, #ffffff);
        /* Chrome 10+, Saf5.1+, iOS 5+ */
        background-image: -moz-linear-gradient(right, #e9eff5, #ffffff);
        /* FF3.6 */
        background-image: -ms-linear-gradient(right, #e9eff5, #ffffff);
        /* IE10 */
        background-image: -o-linear-gradient(right, #e9eff5, #ffffff);
        /* Opera 11.10+ */
        background-image: linear-gradient(right, #e9eff5, #ffffff);
    }

    .users .person.active-user {
        background-color: #ffffff;
        /* Fallback Color */
        background-image: -webkit-gradient(linear, left top, left bottom, from(#f7f9fb), to(#ffffff));
        /* Saf4+, Chrome */
        background-image: -webkit-linear-gradient(right, #f7f9fb, #ffffff);
        /* Chrome 10+, Saf5.1+, iOS 5+ */
        background-image: -moz-linear-gradient(right, #f7f9fb, #ffffff);
        /* FF3.6 */
        background-image: -ms-linear-gradient(right, #f7f9fb, #ffffff);
        /* IE10 */
        background-image: -o-linear-gradient(right, #f7f9fb, #ffffff);
        /* Opera 11.10+ */
        background-image: linear-gradient(right, #f7f9fb, #ffffff);
    }

    .users .person:last-child {
        border-bottom: 0;
    }

    .users .person .user {
        display: inline-block;
        position: relative;
        margin-right: 10px;
    }

    .users .person .user img {
        width: 48px;
        height: 48px;
        -webkit-border-radius: 50px;
        -moz-border-radius: 50px;
        border-radius: 50px;
    }

    .users .person .user .status {
        width: 10px;
        height: 10px;
        -webkit-border-radius: 100px;
        -moz-border-radius: 100px;
        border-radius: 100px;
        background: #e6ecf3;
        position: absolute;
        top: 0;
        right: 0;
    }

    .users .person .user .status.online {
        background: #9ec94a;
    }

    .users .person .user .status.offline {
        background: #c4d2e2;
    }

    .users .person .user .status.away {
        background: #f9be52;
    }

    .users .person .user .status.busy {
        background: #fd7274;
    }

    .users .person p.name-time {
        font-weight: 600;
        font-size: .85rem;
        display: inline-block;
    }

    .users .person p.name-time .time {
        font-weight: 400;
        font-size: .7rem;
        text-align: right;
        color: #8796af;
    }

    @media (max-width: 767px) {
        .users .person .user img {
            width: 30px;
            height: 30px;
        }
        .users .person p.name-time {
            display: none;
        }
        .users .person p.name-time .time {
            display: none;
        }
    }


    /************************************************
        ************************************************
                                        Chat right side
        ************************************************
    ************************************************/

    .selected-user {
        width: 100%;
        padding: 0 15px;
        min-height: 64px;
        line-height: 64px;
        border-bottom: 1px solid #e6ecf3;
        -webkit-border-radius: 0 3px 0 0;
        -moz-border-radius: 0 3px 0 0;
        border-radius: 0 3px 0 0;
    }

    .selected-user span {
        line-height: 100%;
    }

    .selected-user span.name {
        font-weight: 700;
    }

    .chat-container {
        position: relative;
        padding: 1rem;
    }

    .chat-container li.chat-left,
    .chat-container li.chat-right {
        display: flex;
        flex: 1;
        flex-direction: row;
        margin-bottom: 40px;
    }

    .chat-container li img {
        width: 48px;
        height: 48px;
        -webkit-border-radius: 30px;
        -moz-border-radius: 30px;
        border-radius: 30px;
    }

    .chat-container li .chat-avatar {
        margin-right: 20px;
    }

    .chat-container li.chat-right {
        justify-content: flex-end;
    }

    .chat-container li.chat-right > .chat-avatar {
        margin-left: 20px;
        margin-right: 0;
    }

    .chat-container li .chat-name {
        font-size: .75rem;
        color: #999999;
        text-align: center;
    }

    .chat-container li .chat-text {
        padding: .4rem 1rem;
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        border-radius: 4px;
        background: #ffffff;
        font-weight: 300;
        line-height: 150%;
        position: relative;
    }

    .chat-container li .chat-text:before {
        content: '';
        position: absolute;
        width: 0;
        height: 0;
        top: 10px;
        left: -20px;
        border: 10px solid;
        border-color: transparent #ffffff transparent transparent;
    }

    .chat-container li.chat-right > .chat-text {
        text-align: right;
    }

    .chat-container li.chat-right > .chat-text:before {
        right: -20px;
        border-color: transparent transparent transparent #ffffff;
        left: inherit;
    }

    .chat-container li .chat-hour {
        padding: 0;
        margin-bottom: 10px;
        font-size: .75rem;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
        margin: 0 0 0 15px;
    }

    .chat-container li .chat-hour > span {
        font-size: 16px;
        color: #9ec94a;
    }

    .chat-container li.chat-right > .chat-hour {
        margin: 0 15px 0 0;
    }

    @media (max-width: 767px) {
        .chat-container li.chat-left,
        .chat-container li.chat-right {
            flex-direction: column;
            margin-bottom: 30px;
        }
        .chat-container li img {
            width: 32px;
            height: 32px;
        }
        .chat-container li.chat-left .chat-avatar {
            margin: 0 0 5px 0;
            display: flex;
            align-items: center;
        }
        .chat-container li.chat-left .chat-hour {
            justify-content: flex-end;
        }
        .chat-container li.chat-left .chat-name {
            margin-left: 5px;
        }
        .chat-container li.chat-right .chat-avatar {
            order: -1;
            margin: 0 0 5px 0;
            align-items: center;
            display: flex;
            justify-content: right;
            flex-direction: row-reverse;
        }
        .chat-container li.chat-right .chat-hour {
            justify-content: flex-start;
            order: 2;
        }
        .chat-container li.chat-right .chat-name {
            margin-right: 5px;
        }
        .chat-container li .chat-text {
            font-size: .8rem;
        }
    }

    .chat-form {
        padding: 15px;
        width: 100%;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ffffff;
        border-top: 1px solid white;
    }

    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }
    .card {
        border: 0;
        background: #f4f5fb;
        -webkit-border-radius: 2px;
        -moz-border-radius: 2px;
        border-radius: 2px;
        margin-bottom: 2rem;
        box-shadow: none;
    }

    .user
    {
        width: 40px;
    }
    .user img
    {
        width: 100%;
        border-radius: 5px;
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
                        @else
                            <a href="/dashboard" class="me-1 border rounded py-1 px-3 nav-link d-flex align-items-center" target="_blank"> <i class="fas fa-user-alt m-1 me-md-2"></i><p class="d-none d-md-block mb-0">{{auth()->user()->name}}</p> </a>
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
                    <a href="" class="text-white"><u>messages</u></a>
                </h6>
            </nav>
        </div>
    </div>
</header>
    <div class="container  my-5">

        <!-- Page header start -->
        <div class="page-title">
            <div class="row gutters">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <h5 class="title">Chat App</h5>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12"> </div>
            </div>
        </div>
        <!-- Page header end -->

        <!-- Content wrapper start -->
        <div class="content-wrapper">

            <!-- Row start -->
            <div class="row gutters">

                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                    <div class="card m-0">

                        <!-- Row start -->
                        <form method="post" action="{{route('SendMessage', $user->id)}}">
                            @csrf
                            @method('post')
                            <div class="row no-gutters">
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-3 col-3">
                                <div class="users-container">
                                    <div class="chat-search-box">
                                        <div class="input-group">
                                            <input class="form-control" placeholder="Search" id="searchInput" type="search" name="query" style="border:none">
                                        </div>
                                    </div>
                                    <ul>
                                        <div class="card-content divide-y flex flex-col gap-y-3 mt-5">
                                            <div id="searchResults"></div>
                                        </div>
                                    </ul>
                                    <ul class="users">
                                        @foreach($senders as $sender)
                                            <a href="/messagesPerson/{{$sender->sender->id}}">
                                                <li class="person" data-chat="person1">
                                                       <div class="user">
                                                           <img src="{{ asset('storage/imageProfile/' . $sender->sender->image) }}" alt="Retail Admin">
                                                           <span class="status busy"></span>
                                                       </div>
                                                       <p class="name-time">
                                                           <span class="name">{{$sender->sender->name}}</span>
                                                       </p>
                                                </li>
                                            </a>

                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-9 col-9">

{{--                                <div class="chat-container">--}}
{{--                                    @foreach($AllMessages as $message)--}}
{{--                                        <ul class="chat-box chatContainerScroll">--}}
{{--                                            @if($message->sender_id == Auth::id())--}}

{{--                                                <li class="chat-right">--}}
{{--                                                    <div class="chat-hour">{{ $message->created_at->format('H:i') }} <span class="fa fa-check-circle"></span></div>--}}
{{--                                                    <div class="chat-text">{{ $message->message }}</div>--}}
{{--                                                    <div class="chat-avatar">--}}
{{--                                                        <img src="{{ Auth::user()->avatar }}" alt="{{ Auth::user()->name }}">--}}
{{--                                                        <img src="{{asset('storage/imageProfile/' . Auth::user()->image) }}" alt="Retail Admin">--}}
{{--                                                        <div class="chat-name">{{ Auth::user()->name }}</div>--}}
{{--                                                    </div>--}}
{{--                                                </li>--}}
{{--                                            @else--}}
{{--                                                <li class="chat-left">--}}
{{--                                                    <div class="chat-avatar">--}}
{{--                                                        <img src="{{asset('storage/imageProfile/' . $message->receiver->image) }}" alt="{{ $user->name }}">--}}
{{--                                                        <div class="chat-name">{{ $user->name }}</div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="chat-text">{{ $message->message }}</div>--}}
{{--                                                    <div class="chat-hour"><span class="fa fa-check-circle"></span></div>--}}
{{--                                                </li>--}}
{{--                                            @endif--}}
{{--                                        </ul>--}}
{{--                                    @endforeach--}}

{{--                                    <div class="form-group mt-3 mb-0">--}}
{{--                                        <textarea class="form-control" rows="3" placeholder="Type your message here..." name="message"></textarea>--}}
{{--                                        <button type="submit" class="btn btn-danger my-2">Send</button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            </div>
                        </div>
                        </form>
                        <!-- Row end -->
                    </div>

                </div>

            </div>
            <!-- Row end -->

        </div>
        <!-- Content wrapper end -->

    </div>


<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" ></script>
<script>

    document.getElementById('searchInput').addEventListener('input', function(event) {
        const query = event.target.value;
        axios.get('/search', {
            params: {
                query: query
            }
        })
            .then(function(response) {
                const searchResults = response.data;
                const searchResultsContainer = document.getElementById('searchResults');
                searchResultsContainer.innerHTML = '';
                searchResults.forEach(function(user) {
                    const cardContent = `
                <a href="/messagesPerson/${user.id}">
                    <li class="person d-flex" data-chat="person1">
                           <div class="user">
                               <img src="http://127.0.0.1:8000/storage/imageProfile/${user.image}">
                               <span class="status busy"></span>
                           </div>
                           <p class="name-time">
                               <span class="name">${user.name}</span>
                           </p>
                    </li>
                </a>
            `;
                    searchResultsContainer.insertAdjacentHTML('beforeend', cardContent);
                });
            })
            .catch(function(error) {
                console.error('Error searching:', error);
            });
    });

</script>

</body>
</html>