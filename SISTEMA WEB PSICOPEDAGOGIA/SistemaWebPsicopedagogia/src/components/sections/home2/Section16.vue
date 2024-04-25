<template>
    <section class="news-section-two">
        <div class="anim-icons">
            <span class="icon icon-dotted-map-4"></span>
        </div>
        <div class="auto-container">
            <div class="row">
                <!-- Title Column -->
                <div class="title-column col-xl-4 col-lg-4 col-md-12">
                    <div class="inner-column">
                        <div class="sec-title mb-0">
                            <span class="sub-title">directly from blog</span>
                            <h2>Our latest news & upcoming blog posts</h2>
                            <div class="text">Quisque commodo, magna nec accu man euismod tellus mi ornare enim.
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Carousel Column -->
                <div class="carousel-column col-xl-8 col-lg-8 col-md-12">
                    <div class="carousel-outer">
                        <swiper
    :slides-per-view="3"
    :space-between="0"
    :loop="true"
    :autoplay="{
      delay: 8000,
      disableOnInteraction: true,
    }"
    :breakpoints="{
      320: {
        slidesPerView: 1,
        // spaceBetween: 30,
      },
      575: {
        slidesPerView: 2,
        // spaceBetween: 30,
      },
      767: {
        slidesPerView: 2,
        // spaceBetween: 30,
      },
      991: {
        slidesPerView: 2,
        // spaceBetween: 30,
      },
      1199: {
        slidesPerView: 3,
        // spaceBetween: 30,
      },
      1350: {
        slidesPerView: 3,
        // spaceBetween: 30,
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
    :modules="modules" class="news-carousel owl-carousel owl-theme">
                            <!-- News Block -->
                            <swiper-slide class="news-block">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image">
                                            <NuxtLink to="/news-details"><img src="/images/resource/news-1.jpg" alt="">
                                            </NuxtLink>
                                        </figure>
                                        <span class="date"><b>20</b> SEP</span>
                                    </div>
                                    <div class="content-box">
                                        <div class="content">
                                            <ul class="post-info">
                                                <li><i class="fa fa-user"></i> by Admin</li>
                                                <li><i class="fa fa-comments"></i> 2 Comments</li>
                                            </ul>
                                            <h4 class="title">
                                                <NuxtLink to="/news-details">The quality role of the
                                                    elementary teacher in education</NuxtLink>
                                            </h4>
                                            <NuxtLink to="/news-details" class="read-more">Read More <i
                                                    class="fa fa-long-arrow-alt-right"></i></NuxtLink>
                                        </div>
                                    </div>
                                </div>
                            </swiper-slide>

                            <!-- News Block -->
                            <swiper-slide class="news-block">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image">
                                            <NuxtLink to="/news-details"><img src="/images/resource/news-2.jpg" alt="">
                                            </NuxtLink>
                                        </figure>
                                        <span class="date"><b>20</b> SEP</span>
                                    </div>
                                    <div class="content-box">
                                        <div class="content">
                                            <ul class="post-info">
                                                <li><i class="fa fa-user"></i> by Admin</li>
                                                <li><i class="fa fa-comments"></i> 2 Comments</li>
                                            </ul>
                                            <h4 class="title">
                                                <NuxtLink to="/news-details">The quality role of the
                                                    elementary teacher in education</NuxtLink>
                                            </h4>
                                            <NuxtLink to="/news-details" class="read-more">Read More <i
                                                    class="fa fa-long-arrow-alt-right"></i></NuxtLink>
                                        </div>
                                    </div>
                                </div>
                            </swiper-slide>

                            <!-- News Block -->
                            <swiper-slide class="news-block">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image">
                                            <NuxtLink to="/news-details"><img src="/images/resource/news-3.jpg" alt="">
                                            </NuxtLink>
                                        </figure>
                                        <span class="date"><b>20</b> SEP</span>
                                    </div>
                                    <div class="content-box">
                                        <div class="content">
                                            <ul class="post-info">
                                                <li><i class="fa fa-user"></i> by Admin</li>
                                                <li><i class="fa fa-comments"></i> 2 Comments</li>
                                            </ul>
                                            <h4 class="title">
                                                <NuxtLink to="/news-details">The quality role of the
                                                    elementary teacher in education</NuxtLink>
                                            </h4>
                                            <NuxtLink to="/news-details" class="read-more">Read More <i
                                                    class="fa fa-long-arrow-alt-right"></i></NuxtLink>
                                        </div>
                                    </div>
                                </div>
                            </swiper-slide>

                            <!-- News Block -->
                            <swiper-slide class="news-block">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image">
                                            <NuxtLink to="/news-details"><img src="/images/resource/news-1.jpg" alt="">
                                            </NuxtLink>
                                        </figure>
                                        <span class="date"><b>20</b> SEP</span>
                                    </div>
                                    <div class="content-box">
                                        <div class="content">
                                            <ul class="post-info">
                                                <li><i class="fa fa-user"></i> by Admin</li>
                                                <li><i class="fa fa-comments"></i> 2 Comments</li>
                                            </ul>
                                            <h4 class="title">
                                                <NuxtLink to="/news-details">The quality role of the
                                                    elementary teacher in education</NuxtLink>
                                            </h4>
                                            <NuxtLink to="/news-details" class="read-more">Read More <i
                                                    class="fa fa-long-arrow-alt-right"></i></NuxtLink>
                                        </div>
                                    </div>
                                </div>
                            </swiper-slide>

                            <!-- News Block -->
                            <swiper-slide class="news-block">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image">
                                            <NuxtLink to="/news-details"><img src="/images/resource/news-2.jpg" alt="">
                                            </NuxtLink>
                                        </figure>
                                        <span class="date"><b>20</b> SEP</span>
                                    </div>
                                    <div class="content-box">
                                        <div class="content">
                                            <ul class="post-info">
                                                <li><i class="fa fa-user"></i> by Admin</li>
                                                <li><i class="fa fa-comments"></i> 2 Comments</li>
                                            </ul>
                                            <h4 class="title">
                                                <NuxtLink to="/news-details">The quality role of the
                                                    elementary teacher in education</NuxtLink>
                                            </h4>
                                            <NuxtLink to="/news-details" class="read-more">Read More <i
                                                    class="fa fa-long-arrow-alt-right"></i></NuxtLink>
                                        </div>
                                    </div>
                                </div>
                            </swiper-slide>

                            <!-- News Block -->
                            <swiper-slide class="news-block">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image">
                                            <NuxtLink to="/news-details"><img src="/images/resource/news-3.jpg" alt="">
                                            </NuxtLink>
                                        </figure>
                                        <span class="date"><b>20</b> SEP</span>
                                    </div>
                                    <div class="content-box">
                                        <div class="content">
                                            <ul class="post-info">
                                                <li><i class="fa fa-user"></i> by Admin</li>
                                                <li><i class="fa fa-comments"></i> 2 Comments</li>
                                            </ul>
                                            <h4 class="title">
                                                <NuxtLink to="/news-details">The quality role of the
                                                    elementary teacher in education</NuxtLink>
                                            </h4>
                                            <NuxtLink to="/news-details" class="read-more">Read More <i
                                                    class="fa fa-long-arrow-alt-right"></i></NuxtLink>
                                        </div>
                                    </div>
                                </div>
                            </swiper-slide>

                            <!-- News Block -->
                            <swiper-slide class="news-block">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image">
                                            <NuxtLink to="/news-details"><img src="/images/resource/news-1.jpg" alt="">
                                            </NuxtLink>
                                        </figure>
                                        <span class="date"><b>20</b> SEP</span>
                                    </div>
                                    <div class="content-box">
                                        <div class="content">
                                            <ul class="post-info">
                                                <li><i class="fa fa-user"></i> by Admin</li>
                                                <li><i class="fa fa-comments"></i> 2 Comments</li>
                                            </ul>
                                            <h4 class="title">
                                                <NuxtLink to="/news-details">The quality role of the
                                                    elementary teacher in education</NuxtLink>
                                            </h4>
                                            <NuxtLink to="/news-details" class="read-more">Read More <i
                                                    class="fa fa-long-arrow-alt-right"></i></NuxtLink>
                                        </div>
                                    </div>
                                </div>
                            </swiper-slide>

                            <!-- News Block -->
                            <swiper-slide class="news-block">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image">
                                            <NuxtLink to="/news-details"><img src="/images/resource/news-2.jpg" alt="">
                                            </NuxtLink>
                                        </figure>
                                        <span class="date"><b>20</b> SEP</span>
                                    </div>
                                    <div class="content-box">
                                        <div class="content">
                                            <ul class="post-info">
                                                <li><i class="fa fa-user"></i> by Admin</li>
                                                <li><i class="fa fa-comments"></i> 2 Comments</li>
                                            </ul>
                                            <h4 class="title">
                                                <NuxtLink to="/news-details">The quality role of the
                                                    elementary teacher in education</NuxtLink>
                                            </h4>
                                            <NuxtLink to="/news-details" class="read-more">Read More <i
                                                    class="fa fa-long-arrow-alt-right"></i></NuxtLink>
                                        </div>
                                    </div>
                                </div>
                            </swiper-slide>

                            <!-- News Block -->
                            <swiper-slide class="news-block">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image">
                                            <NuxtLink to="/news-details"><img src="/images/resource/news-3.jpg" alt="">
                                            </NuxtLink>
                                        </figure>
                                        <span class="date"><b>20</b> SEP</span>
                                    </div>
                                    <div class="content-box">
                                        <div class="content">
                                            <ul class="post-info">
                                                <li><i class="fa fa-user"></i> by Admin</li>
                                                <li><i class="fa fa-comments"></i> 2 Comments</li>
                                            </ul>
                                            <h4 class="title">
                                                <NuxtLink to="/news-details">The quality role of the
                                                    elementary teacher in education</NuxtLink>
                                            </h4>
                                            <NuxtLink to="/news-details" class="read-more">Read More <i
                                                    class="fa fa-long-arrow-alt-right"></i></NuxtLink>
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