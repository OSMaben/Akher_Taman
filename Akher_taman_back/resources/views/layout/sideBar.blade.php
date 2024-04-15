<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-category">Main</li>
        <li class="nav-item">
            <a class="nav-link" href="/dashboard">
                <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="/products">
                <span class="icon-bg"><i class="mdi mdi-table-large menu-icon"></i></span>
                <span class="menu-title">Products</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/bids">
                <span class="icon-bg"><i class="mdi mdi-wallet"></i></span>
                <span class="menu-title">bids</span>
            </a>
        </li>
        @if(Auth::user()->role_id ==  3 )
        <li class="nav-item">
            <a class="nav-link" href="/Acceptedbids">
                <span class="icon-bg"><i class="mdi mdi-wallet"></i></span>
                <span class="menu-title">Accepted Bids</span>
            </a>
        </li>
        @endif
        <li class="nav-item">
           @if(Auth::user()->role_id ==  1 )
                <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                    <span class="icon-bg"><i class="mdi mdi-lock menu-icon"></i></span>
                    <span class="menu-title">Manage</span>
                    <i class="menu-arrow"></i>
                </a>
            @endif
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> users </a></li>

                </ul>
            </div>
        </li>
        <li class="nav-item sidebar-user-actions">
            <div class="user-details">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="d-flex align-items-center">F
                            <div class="sidebar-profile-img">
                                <img src="images/faces/face28.png" alt="image">
                            </div>
                            <div class="sidebar-profile-text">
                                <p class="mb-1">{{Auth()->user()->name}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>

        <li class="nav-item sidebar-user-actions">
            <div class="sidebar-user-menu">
                <form method="post" action="{{route('logout')}}">
                    @csrf
                    <button type="submit" class="nav-link"><i class="mdi mdi-logout menu-icon"></i>
                        <span class="menu-title">Log Out</span></button>
                </form>
            </div>
        </li>
    </ul>
</nav>
<style>
    .sidebar-user-menu button
    {
        background: transparent;
        border: none;
    }
</style>
