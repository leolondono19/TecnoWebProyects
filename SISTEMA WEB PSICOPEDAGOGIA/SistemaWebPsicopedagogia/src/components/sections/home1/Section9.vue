<template>
    <section class="testimonial-section">
        <div class="anim-icons">
            <span class="icon icon-dotted-map-2"></span>
        </div>
        <div class="auto-container">
            <div class="row">
                <!-- Title Column -->
                <div class="title-column col-xl-4 col-lg-5 col-md-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="sub-title">Our testimonials</span>
                            <h2>What they’re <br>saying about our <br>courses</h2>
                            <div class="text">Quisque commodo, magna nec accu man euismod tellus mi ornare enim.</div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial Column -->
                <div class="testimonial-column col-xl-8 col-lg-7 col-md-12">
                    <div class="carousel-outer">
                        <swiper
    :slides-per-view="2"
    :space-between="0"
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
        slidesPerView: 1,
        spaceBetween: 30,
      },
      767: {
        slidesPerView: 1,
        spaceBetween: 30,
      },
      991: {
        slidesPerView: 2,
        spaceBetween: 30,
      },
      1199: {
        slidesPerView: 2,
        spaceBetween: 30,
      },
      1350: {
        slidesPerView: 2,
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
    :modules="modules" class="testimonial-carousel owl-carousel owl-theme">
                            <!-- Testimonial Block -->
                            <swiper-slide class="testimonial-block">
                                <div class="inner-box">
                                    <div class="content-box">
                                        <figure class="thumb"><img src="/images/resource/testi-thumb-1.jpg" alt=""></figure>
                                        <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                        </div>
                                        <div class="text">Lorem ipsum is simply free text dolor sit amet, consectetur
                                            adipisicing elit, sed do incididunt ut labore et dolore magna aliqua.</div>
                                        <div class="info-box">
                                            <span class="icon-quote"></span>
                                            <h4 class="name">Jame sickres</h4>
                                            <span class="designation">Market Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </swiper-slide>

                            <!-- Testimonial Block -->
                            <swiper-slide class="testimonial-block">
                                <div class="inner-box">
                                    <div class="content-box">
                                        <figure class="thumb"><img src="/images/resource/testi-thumb-2.jpg" alt=""></figure>
                                        <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                        </div>
                                        <div class="text">Lorem ipsum is simply free text dolor sit amet, consectetur
                                            adipisicing elit, sed do incididunt ut labore et dolore magna aliqua.</div>
                                        <div class="info-box">
                                            <span class="icon-quote"></span>
                                            <h4 class="name">Aleesha brown</h4>
                                            <span class="designation">Market Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </swiper-slide>

                            <!-- Testimonial Block -->
                            <swiper-slide class="testimonial-block">
                                <div class="inner-box">
                                    <div class="content-box">
                                        <figure class="thumb"><img src="/images/resource/testi-thumb-1.jpg" alt=""></figure>
                                        <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                        </div>
                                        <div class="text">Lorem ipsum is simply free text dolor sit amet, consectetur
                                            adipisicing elit, sed do incididunt ut labore et dolore magna aliqua.</div>
                                        <div class="info-box">
                                            <span class="icon-quote"></span>
                                            <h4 class="name">Jame sickres</h4>
                                            <span class="designation">Market Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </swiper-slide>

                            <!-- Testimonial Block -->
                            <swiper-slide class="testimonial-block">
                                <div class="inner-box">
                                    <div class="content-box">
                                        <figure class="thumb"><img src="/images/resource/testi-thumb-2.jpg" alt=""></figure>
                                        <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                        </div>
                                        <div class="text">Lorem ipsum is simply free text dolor sit amet, consectetur
                                            adipisicing elit, sed do incididunt ut labore et dolore magna aliqua.</div>
                                        <div class="info-box">
                                            <span class="icon-quote"></span>
                                            <h4 class="name">Aleesha brown</h4>
                                            <span class="designation">Market Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </swiper-slide>

                            <!-- Testimonial Block -->
                            <swiper-slide class="testimonial-block">
                                <div class="inner-box">
                                    <div class="content-box">
                                        <figure class="thumb"><img src="/images/resource/testi-thumb-1.jpg" alt=""></figure>
                                        <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                        </div>
                                        <div class="text">Lorem ipsum is simply free text dolor sit amet, consectetur
                                            adipisicing elit, sed do incididunt ut labore et dolore magna aliqua.</div>
                                        <div class="info-box">
                                            <span class="icon-quote"></span>
                                            <h4 class="name">Jame sickres</h4>
                                            <span class="designation">Market Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </swiper-slide>

                            <!-- Testimonial Block -->
                            <swiper-slide class="testimonial-block">
                                <div class="inner-box">
                                    <div class="content-box">
                                        <figure class="thumb"><img src="/images/resource/testi-thumb-2.jpg" alt=""></figure>
                                        <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                        </div>
                                        <div class="text">Lorem ipsum is simply free text dolor sit amet, consectetur
                                            adipisicing elit, sed do incididunt ut labore et dolore magna aliqua.</div>
                                        <div class="info-box">
                                            <span class="icon-quote"></span>
                                            <h4 class="name">Aleesha brown</h4>
                                            <span class="designation">Market Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </swiper-slide>

                        </swiper>
                    </div>
                </div>
            </div>
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