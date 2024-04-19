<header class="style-2">
    <div class="header-logo">
        <a href="index.html"><img alt="image" src="images/bg/header-logo2.png"></a>
    </div>
    <div class="main-menu">
        <div class="mobile-logo-area d-lg-none d-flex justify-content-between align-items-center">
            <div class="mobile-logo-wrap">
                <a href="index.html"><img alt="image" src="images/bg/header-logo2.png"></a>
            </div>
            <div class="menu-close-btn">
                <i class="bi bi-x-lg"></i>
            </div>
        </div>
        <ul class="menu-list">
            <li>
                <a href="/" >Home</a>
            </li>
            <li>
                <a href="/about">About Us</a>
            </li>
            <li>
                <a href="/how-works">How It Works</a>
            </li>
            <li>
                <a href="/">Browse Product</a>
            </li>
            <li><a href="/contact">Contact</a></li>
        </ul>

        <div class="d-lg-none d-block">
            <form class="mobile-menu-form style-2 mb-5">
                <div class="input-with-btn d-flex flex-column">
                    <input type="text" placeholder="Search here...">
                    <button type="submit" class="eg-btn btn--primary2 btn--sm">Search</button>
                </div>
            </form>
            <div class="hotline two">
                <div class="hotline-info">
                    <span>Click To Call</span>
                    <h6><a href="tel:347-274-8816">+347-274-8816</a></h6>
                </div>
            </div>
        </div>
    </div>
    <div class="nav-right d-flex align-items-center">
       @if(!Auth::check())
            <div class="eg-btn btn--primary2 header-btn">
                <a href="/register">register</a>
            </div>
        @else
            <div class="action">
                <div class="profile" onclick="menuToggle();">
                    <img src="{{asset('storage/imageProfile/'. Auth()->user()->image)}}" />
                </div>
                <div class="menu">
                    <h3>{{Auth()->user()->name}}</h3>
                    <ul>
                        <li>
                            <img class="rounded-circle w-100" src="{{asset('storage/imageProfile/'. Auth()->user()->image)}}" alt="image"><a href="/dashboard">My profile</a>
                        </li>
                        <li>
                            <form method="post" action="{{route('logout')}}">
                                @csrf
                                <button type="submit" class="nav-link"><i class="mdi mdi-logout menu-icon"></i>
                                    <span class="menu-title">Log Out</span></button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        @endif
        <div class="mobile-menu-btn d-lg-none d-block">
            <i class="bx bx-menu"></i>
        </div>
    </div>
</header>
<script>
    function menuToggle() {
        const toggleMenu = document.querySelector(".menu");
        toggleMenu.classList.toggle("active");
    }
</script>


<style>


    .action {
        position: fixed;
        top: 20px;
        right: 30px;
    }

    .action .profile {
        position: relative;
        width: 60px;
        height: 60px;
        border-radius: 50%;
        overflow: hidden;
        cursor: pointer;
    }

    .action .profile img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .action .menu {
        position: absolute;
        top: 120px;
        right: -10px;
        padding: 10px 20px;
        background: #fff;
        width: 200px;
        box-sizing: 0 5px 25px rgba(0, 0, 0, 0.1);
        border-radius: 15px;
        transition: 0.5s;
        visibility: hidden;
        opacity: 0;
    }

    .action .menu.active {
        top: 80px;
        visibility: visible;
        opacity: 1;
    }

    .action .menu::before {
        content: "";
        position: absolute;
        top: -5px;
        right: 28px;
        width: 20px;
        height: 20px;
        background: #fff;
        transform: rotate(45deg);
    }

    .action .menu h3 {
        width: 100%;
        text-align: center;
        font-size: 18px;
        padding: 20px 0;
        font-weight: 500;
        color: #555;
        line-height: 1.5em;
    }

    .action .menu h3 span {
        font-size: 14px;
        color: #cecece;
        font-weight: 300;
    }

    .action .menu ul li {
        list-style: none;
        padding: 16px 0;
        border-top: 1px solid rgba(0, 0, 0, 0.05);
        display: flex;
        align-items: center;
    }

    .action .menu ul li img {
        max-width: 20px;
        margin-right: 10px;
        opacity: 0.5;
        transition: 0.5s;
    }

    .action .menu ul li:hover img {
        opacity: 1;
    }

    .action .menu ul li a {
        display: inline-block;
        text-decoration: none;
        color: #555;
        font-weight: 500;
        transition: 0.5s;
    }

    .action .menu ul li:hover a {
        color: #ff5d94;
    }
</style>


