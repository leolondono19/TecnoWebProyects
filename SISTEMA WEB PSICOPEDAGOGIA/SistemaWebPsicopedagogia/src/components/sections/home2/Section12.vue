<template>
    <section class="gallery-section">
        <div class="anim-icons">
            <span class="icon icon-line-1 spin-one"></span>
            <span class="icon icon-dots-7 bounce-x"></span>
        </div>
        <div class="auto-container">
            <!--clients carousel-->
            <swiper
    :slides-per-view="4"
    :space-between="30"
    :loop="true"
    :autoplay="{
      delay: 8000,
      disableOnInteraction: true,
    }"
    :breakpoints="{
      320: {
        slidesPerView: 1,
        spaceBetween: 30,
      },
      575: {
        slidesPerView: 2,
        spaceBetween: 30,
      },
      767: {
        slidesPerView: 3,
        spaceBetween: 30,
      },
      991: {
        slidesPerView: 3,
        spaceBetween: 30,
      },
      1199: {
        slidesPerView:4,
        spaceBetween: 30,
      },
      1350: {
        slidesPerView: 4,
        spaceBetween: 30,
      },
    }"
    :pagination="{
      el: '.swiper-pagination',
      clickable: true,
    }"
    :navigation="{
      nextEl: '.h1n',
      prevEl: '.h1p',
    }"
    :modules="modules" class="gallery-carousel owl-carousel owl-theme wow fadeInUp">
                <swiper-slide class="gallery-item">
                    <NuxtLink to="#" class="lightbox-image"><img
                            src="/images/resource/gallery-1.jpg" alt=""></NuxtLink>
                </swiper-slide>
                <swiper-slide class="gallery-item">
                    <NuxtLink to="#" class="lightbox-image"><img
                            src="/images/resource/gallery-2.jpg" alt=""></NuxtLink>
                </swiper-slide>
                <swiper-slide class="gallery-item">
                    <NuxtLink to="#" class="lightbox-image"><img
                            src="/images/resource/gallery-3.jpg" alt=""></NuxtLink>
                </swiper-slide>
                <swiper-slide class="gallery-item">
                    <NuxtLink to="#" class="lightbox-image"><img
                            src="/images/resource/gallery-4.jpg" alt=""></NuxtLink>
                </swiper-slide>
            </swiper>
        </div>
    </section>
</template>
<script>
import { Swiper, SwiperSlide } from "swiper/vue";
import { Autoplay, Navigation, Pagination } from "swiper/modules";

export default {
  components: {
    Swiper,
    SwiperSlide,
  },
  setup() {
    return {
      modules: [Autoplay, Pagination, Navigation],
    };
  },
};
</script>