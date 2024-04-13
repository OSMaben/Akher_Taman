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
                <a href="/home" >Home</a>
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
            <div class="eg-btn btn--primary2 header-btn">
                <a href="/dashboard">dashboard</a>
            </div>
        @endif
        <div class="mobile-menu-btn d-lg-none d-block">
            <i class="bx bx-menu"></i>
        </div>
    </div>
</header>

