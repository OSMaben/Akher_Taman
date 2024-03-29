<template>
  <div class="hero-area hero-style-two">
    <img alt="image" src="../assets/images/bg/section-bg2.png" class="radial-bg">
    <img alt="image" src="../assets/images/bg/banner2-icon1.png" class="banner2-icon1">
    <img alt="image" src="../assets/images/bg/banner2-icon2.png" class="banner2-icon2">
    <img alt="image" src="../assets/images/bg/banner2-icon3.png" class="banner2-icon3">
    <div class="scroll-text">
      <h6><a href="#category">Scroll Down</a></h6>
    </div>
    <div class="container">
      <div class="row d-flex justify-content-start align-items-end">
        <div class="col-xl-7 col-lg-7">
          <div class="banner2-content">
                        <span class="wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.5s">Welcome To Auction
                            House</span>
            <h1 class="wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="1s">Build, sell & collect
              digital items.</h1>
            <p class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1s">Nulla facilisi. Maecenas ac
              tellus ut ligula interdum convallis. Nullam
              dapibus on erat in dolor posuere, none hendrerit lectus ornare.
              Suspendisse sit amet turpina sagittis, ultrices dui et, aliquam urna.
            </p>
            <a href="live-auction.html" class="eg-btn btn--primary2 btn--lg wow fadeInUp"
               data-wow-duration="2s" data-wow-delay="0.8s">Start Exploring</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <AuctionApp />
  <TestimonialsApp />
  <SponsoreApp />
</template>

<script>
import AuctionApp from "@/components/AuctionApp.vue";
import TestimonialsApp from "@/components/TestimonialsApp.vue";
import SponsoreApp from "@/components/SponsoreApp.vue";
export default {
  components: {AuctionApp,
              TestimonialsApp,
              SponsoreApp
  }
}


</script>

<style scoped>

</style>