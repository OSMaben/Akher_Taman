<template>
  <header class="style-2">
    <div class="header-logo">
      <a href="index.html"><img alt="image" src="../assets/images/bg/header-logo2.png"></a>
    </div>
    <div class="main-menu">
      <div class="mobile-logo-area d-lg-none d-flex justify-content-between align-items-center">
        <div class="mobile-logo-wrap">
          <a href="index.html"><img alt="image" src="../assets/images/bg/header-logo2.png"></a>
        </div>
        <div class="menu-close-btn">
          <i class="bi bi-x-lg"></i>
        </div>
      </div>
      <ul class="menu-list">
        <li class="menu-item-has-children">
          <router-link to="/" class="drop-down">Home</router-link>
        </li>
        <li>
          <a href="about.html">About Us</a>
        </li>
        <li>
          <a href="how-works.html">How It Works</a>
        </li>
        <li>
          <a href="live-auction.html">Browse Product</a>
        </li>
        <li class="menu-item-has-children">
          <a href="#">News</a><i class="bx bx-plus dropdown-icon"></i>
          <ul class="submenu">
            <li><a href="blog.html">Blog</a></li>
            <li><a href="blog-details.html">Blog details</a></li>
          </ul>
        </li>
        <li><a href="contact.html">Contact</a></li>
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
      <div class="search-btn">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
          <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
        </svg>
      </div>
      <a href="" class="join-btn">Join Merchant</a>
      <div class="eg-btn btn--primary2 header-btn">
        <router-link :to="{ name: 'Register' }"  style="color: white">Register</router-link>
      </div>
      <div class="eg-btn btn--primary2 header-btn">
        <router-link :to="{name: 'Dashboard'}" style="color: white">Dashboard</router-link>
      </div>
      <div class="mobile-menu-btn d-lg-none d-block">
        <i class="bx bx-menu"></i>
      </div>
    </div>
  </header>
</template>

<style scoped>

</style>
<script>
</script>