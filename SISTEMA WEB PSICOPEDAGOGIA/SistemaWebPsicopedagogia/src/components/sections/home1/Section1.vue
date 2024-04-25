<template>
  <section class="banner-section-two main-slider">
    <swiper :slides-per-view="1" :space-between="30" :loop="false" :autoplay="{
      delay: 8000,
      disableOnInteraction: true,
    }" :pagination="{
      el: '.swiper-pagination',
      clickable: true,
    }" :navigation="{
      nextEl: '.h1n',
      prevEl: '.h1p',
    }" :modules="modules" class="banner-carousel owl-carousel owl-theme">
    <!-- Slide Item -->
    <swiper-slide class="slide-item">
      <div class="bg-image" style="background-image: url(images/main-slider/1.jpg);"></div>
      <div class="auto-container">
        <div class="row align-items-center">
          <div class="content-column col-lg-6 col-md-12">
            <div class="content-box mt-md-30">
              <span class="arrow-icon"><img src="/images/main-slider/icon/icon-arrow.png" alt=""></span>
              <div class="star d-none d-sm-block spin-one">
                <img src="/images/main-slider/icon/icon-star.png" alt="">
              </div>
              <span class="sub-title">START TO NEW JOURNEY</span>
              <h1 className="banner-one__title banner-one__light-color">Best <span className="style-font">online</span> <br />courses from <br />eduLerns</h1>
              <div class="text">World-class training and development programs <br>developed by top teachers</div>
              <NuxtLink to="/page-courses" class="theme-btn btn-style-one"><span class="btn-title">Find Course</span></NuxtLink>
            </div>
          </div>

          <div class="image-column col-lg-6 col-md-12">
            <div class="image">
              <figure class="image-1 overlay-anim m-0"><img src="/images/main-slider/image-1.png" alt=""></figure>
              <div class="circle_image">
                <img src="/images/main-slider/icon/icon-circle-1.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="bg-anim-image">
        <div class="book d-none d-xl-block bounce-y">
          <img src="/images/main-slider/icon/icon-book.png" alt="">
        </div>
        <div class="left-dots d-none d-xl-block bounce-x">
          <img src="/images/main-slider/icon/icon-dots.png" alt="">
        </div>
        <div class="right-dots d-none d-lg-block">
          <img src="/images/main-slider/icon/icon-dots-2.png" alt="">
        </div>
        <div class="light d-none d-lg-block bounce-y">
          <img src="/images/main-slider/icon/icon-bulb.png" alt="">
        </div>
        <div class="earth d-none d-sm-block spin-one">
          <img src="/images/main-slider/icon/icon-globe.png" alt="">
        </div>
      </div>
    </swiper-slide>
    <swiper-slide class="slide-item">
      <div class="bg-image" style="background-image: url(images/main-slider/1.jpg);"></div>
      <div class="auto-container">
        <div class="row align-items-center">
          <div class="content-column col-lg-6 col-md-12">
            <div class="content-box mt-md-30">
              <span class="arrow-icon"><img src="/images/main-slider/icon/icon-arrow.png" alt=""></span>
              <div class="star d-none d-sm-block spin-one">
                <img src="/images/main-slider/icon/icon-star.png" alt="">
              </div>
              <span class="sub-title">START TO NEW JOURNEY</span>
              <h1 className="banner-one__title banner-one__light-color">Best <span className="style-font">online</span> <br />courses from <br />eduLerns</h1>
              <div class="text">World-class training and development programs <br>developed by top teachers</div>
              <NuxtLink to="/page-courses" class="theme-btn btn-style-one"><span class="btn-title">Find Course</span></NuxtLink>
            </div>
          </div>

          <div class="image-column col-lg-6 col-md-12">
            <div class="image">
              <figure class="image-1 overlay-anim m-0"><img src="/images/main-slider/image-1.png" alt=""></figure>
              <div class="circle_image">
                <img src="/images/main-slider/icon/icon-circle-1.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="bg-anim-image">
        <div class="book d-none d-xl-block bounce-y">
          <img src="/images/main-slider/icon/icon-book.png" alt="">
        </div>
        <div class="left-dots d-none d-xl-block bounce-x">
          <img src="/images/main-slider/icon/icon-dots.png" alt="">
        </div>
        <div class="right-dots d-none d-lg-block">
          <img src="/images/main-slider/icon/icon-dots-2.png" alt="">
        </div>
        <div class="light d-none d-lg-block bounce-y">
          <img src="/images/main-slider/icon/icon-bulb.png" alt="">
        </div>
        <div class="earth d-none d-sm-block spin-one">
          <img src="/images/main-slider/icon/icon-globe.png" alt="">
        </div>
      </div>
    </swiper-slide>
  </swiper>
  <ul class="banner-social-links">
    <li>
      <NuxtLink to="#">facebook</NuxtLink>
    </li>
    <li>
      <NuxtLink to="#">twitter</NuxtLink>
    </li>
    <li>
      <NuxtLink to="#">instagram</NuxtLink>
    </li>
  </ul>
</section>
</template>
<script>

import { Autoplay, Navigation, Pagination } from "swiper/modules"
import { Swiper, SwiperSlide } from "swiper/vue"

export default {
  components: {
    Swiper,
    SwiperSlide
  },
  setup() {
    return {
      modules: [Autoplay, Pagination, Navigation],
    }
  }
}
</script>