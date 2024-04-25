<template>
    <section class="courses-section">
        <div class="auto-container">
            <div class="anim-icons">
                <span class="icon icon-e wow zoomIn"></span>
            </div>

            <div class="sec-title">
                <span class="sub-title">popular courses</span>
                <h2>Pick a course to<br> get started your study</h2>
            </div>

            <div class="carousel-outer">
                <!-- Courses Carousel -->
                <swiper :slides-per-view="4" :space-between="0" :loop="true" :autoplay="{
                    delay: 8000,
                    disableOnInteraction: true,
                }" :breakpoints="{
    320: {
        slidesPerView: 1,
        // spaceBetween: 30,
    },
    575: {
        slidesPerView: 2,
        // spaceBetween: 30,
    },
    767: {
        slidesPerView: 3,
        // spaceBetween: 30,
    },
    991: {
        slidesPerView: 3,
        // spaceBetween: 30,
    },
    1199: {
        slidesPerView: 4,
        // spaceBetween: 30,
    },
    1350: {
        slidesPerView: 4,
        // spaceBetween: 30,
    },
}" :pagination="{
    el: '.swiper-pagination',
    clickable: true,
}" :navigation="{
    nextEl: '.h1n',
    prevEl: '.h1p',
}" :modules="modules" class="courses-carousel">
                    <!-- Course Block -->
                    <swiper-slide class="course-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image">
                                    <NuxtLink to="/page-course-details"><img src="/images/resource/course-1.jpg" alt="">
                                    </NuxtLink>
                                </figure>
                                <span class="price">$49.00</span>
                                <div class="value">Advanced</div>
                            </div>
                            <div class="content-box">
                                <ul class="course-info">
                                    <li><i class="fa fa-book"></i> 8 Lessons</li>
                                    <li><i class="fa fa-users"></i> 16 Students</li>
                                </ul>
                                <h5 class="title">
                                    <NuxtLink to="/page-course-details">Starting seo as your home based
                                        business</NuxtLink>
                                </h5>
                                <div class="other-info">
                                    <div class="rating-box">
                                        <span class="text">(4.9 /8 Rating)</span>
                                        <div class="rating"><span class="fa fa-star"></span><span
                                                class="fa fa-star"></span><span class="fa fa-star"></span><span
                                                class="fa fa-star"></span><span class="fa fa-star"></span></div>
                                    </div>
                                    <div class="duration"><i class="fa fa-clock"></i> 3 Weeks</div>
                                </div>
                            </div>
                        </div>
                    </swiper-slide>

                    <!-- Course Block -->
                    <swiper-slide class="course-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image">
                                    <NuxtLink to="/page-course-details"><img src="/images/resource/course-2.jpg" alt="">
                                    </NuxtLink>
                                </figure>
                                <span class="price">$49.00</span>
                                <div class="value">Advanced</div>
                            </div>
                            <div class="content-box">
                                <ul class="course-info">
                                    <li><i class="fa fa-book"></i> 8 Lessons</li>
                                    <li><i class="fa fa-users"></i> 16 Students</li>
                                </ul>
                                <h5 class="title">
                                    <NuxtLink to="/page-course-details">Starting seo as your home based
                                        business</NuxtLink>
                                </h5>
                                <div class="other-info">
                                    <div class="rating-box">
                                        <span class="text">(4.9 /8 Rating)</span>
                                        <div class="rating"><span class="fa fa-star"></span><span
                                                class="fa fa-star"></span><span class="fa fa-star"></span><span
                                                class="fa fa-star"></span><span class="fa fa-star"></span></div>
                                    </div>
                                    <div class="duration">3 Weeks</div>
                                </div>
                            </div>
                        </div>
                    </swiper-slide>

                    <!-- Course Block -->
                    <swiper-slide class="course-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image">
                                    <NuxtLink to="/page-course-details"><img src="/images/resource/course-3.jpg" alt="">
                                    </NuxtLink>
                                </figure>
                                <span class="price">$49.00</span>
                                <div class="value">Advanced</div>
                            </div>
                            <div class="content-box">
                                <ul class="course-info">
                                    <li><i class="fa fa-book"></i> 8 Lessons</li>
                                    <li><i class="fa fa-users"></i> 16 Students</li>
                                </ul>
                                <h5 class="title">
                                    <NuxtLink to="/page-course-details">Starting seo as your home based
                                        business</NuxtLink>
                                </h5>
                                <div class="other-info">
                                    <div class="rating-box">
                                        <span class="text">(4.9 /8 Rating)</span>
                                        <div class="rating"><span class="fa fa-star"></span><span
                                                class="fa fa-star"></span><span class="fa fa-star"></span><span
                                                class="fa fa-star"></span><span class="fa fa-star"></span></div>
                                    </div>
                                    <div class="duration">3 Weeks</div>
                                </div>
                            </div>
                        </div>
                    </swiper-slide>

                    <!-- Course Block -->
                    <swiper-slide class="course-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image">
                                    <NuxtLink to="/page-course-details"><img src="/images/resource/course-4.jpg" alt="">
                                    </NuxtLink>
                                </figure>
                                <span class="price">$49.00</span>
                                <div class="value">Advanced</div>
                            </div>
                            <div class="content-box">
                                <ul class="course-info">
                                    <li><i class="fa fa-book"></i> 8 Lessons</li>
                                    <li><i class="fa fa-users"></i> 16 Students</li>
                                </ul>
                                <h5 class="title">
                                    <NuxtLink to="/page-course-details">Starting seo as your home based
                                        business</NuxtLink>
                                </h5>
                                <div class="other-info">
                                    <div class="rating-box">
                                        <span class="text">(4.9 /8 Rating)</span>
                                        <div class="rating"><span class="fa fa-star"></span><span
                                                class="fa fa-star"></span><span class="fa fa-star"></span><span
                                                class="fa fa-star"></span><span class="fa fa-star"></span>
                                        </div>
                                    </div>
                                    <div class="duration">3 Weeks</div>
                                </div>
                            </div>
                        </div>
                    </swiper-slide>

                    <!-- Course Block -->
                    <swiper-slide class="course-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image">
                                    <NuxtLink to="/page-course-details"><img src="/images/resource/course-1.jpg" alt="">
                                    </NuxtLink>
                                </figure>
                                <span class="price">$49.00</span>
                                <div class="value">Advanced</div>
                            </div>
                            <div class="content-box">
                                <ul class="course-info">
                                    <li><i class="fa fa-book"></i> 8 Lessons</li>
                                    <li><i class="fa fa-users"></i> 16 Students</li>
                                </ul>
                                <h5 class="title">
                                    <NuxtLink to="/page-course-details">Starting seo as your home based
                                        business</NuxtLink>
                                </h5>
                                <div class="other-info">
                                    <div class="rating-box">
                                        <span class="text">(4.9 /8 Rating)</span>
                                        <div class="rating"><span class="fa fa-star"></span><span
                                                class="fa fa-star"></span><span class="fa fa-star"></span><span
                                                class="fa fa-star"></span><span class="fa fa-star"></span>
                                        </div>
                                    </div>
                                    <div class="duration"><i class="fa fa-clock"></i> 3 Weeks</div>
                                </div>
                            </div>
                        </div>
                    </swiper-slide>

                    <!-- Course Block -->
                    <swiper-slide class="course-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image">
                                    <NuxtLink to="/page-course-details"><img src="/images/resource/course-2.jpg" alt="">
                                    </NuxtLink>
                                </figure>
                                <span class="price">$49.00</span>
                                <div class="value">Advanced</div>
                            </div>
                            <div class="content-box">
                                <ul class="course-info">
                                    <li><i class="fa fa-book"></i> 8 Lessons</li>
                                    <li><i class="fa fa-users"></i> 16 Students</li>
                                </ul>
                                <h5 class="title">
                                    <NuxtLink to="/page-course-details">Starting seo as your home based
                                        business</NuxtLink>
                                </h5>
                                <div class="other-info">
                                    <div class="rating-box">
                                        <span class="text">(4.9 /8 Rating)</span>
                                        <div class="rating"><span class="fa fa-star"></span><span
                                                class="fa fa-star"></span><span class="fa fa-star"></span><span
                                                class="fa fa-star"></span><span class="fa fa-star"></span>
                                        </div>
                                    </div>
                                    <div class="duration">3 Weeks</div>
                                </div>
                            </div>
                        </div>
                    </swiper-slide>

                    <!-- Course Block -->
                    <swiper-slide class="course-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image">
                                    <NuxtLink to="/page-course-details"><img src="/images/resource/course-3.jpg" alt="">
                                    </NuxtLink>
                                </figure>
                                <span class="price">$49.00</span>
                                <div class="value">Advanced</div>
                            </div>
                            <div class="content-box">
                                <ul class="course-info">
                                    <li><i class="fa fa-book"></i> 8 Lessons</li>
                                    <li><i class="fa fa-users"></i> 16 Students</li>
                                </ul>
                                <h5 class="title">
                                    <NuxtLink to="/page-course-details">Starting seo as your home based
                                        business</NuxtLink>
                                </h5>
                                <div class="other-info">
                                    <div class="rating-box">
                                        <span class="text">(4.9 /8 Rating)</span>
                                        <div class="rating"><span class="fa fa-star"></span><span
                                                class="fa fa-star"></span><span class="fa fa-star"></span><span
                                                class="fa fa-star"></span><span class="fa fa-star"></span>
                                        </div>
                                    </div>
                                    <div class="duration">3 Weeks</div>
                                </div>
                            </div>
                        </div>
                    </swiper-slide>

                    <!-- Course Block -->
                    <swiper-slide class="course-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image">
                                    <NuxtLink to="/page-course-details"><img src="/images/resource/course-4.jpg" alt="">
                                    </NuxtLink>
                                </figure>
                                <span class="price">$49.00</span>
                                <div class="value">Advanced</div>
                            </div>
                            <div class="content-box">
                                <ul class="course-info">
                                    <li><i class="fa fa-book"></i> 8 Lessons</li>
                                    <li><i class="fa fa-users"></i> 16 Students</li>
                                </ul>
                                <h5 class="title">
                                    <NuxtLink to="/page-course-details">Starting seo as your home based
                                        business</NuxtLink>
                                </h5>
                                <div class="other-info">
                                    <div class="rating-box">
                                        <span class="text">(4.9 /8 Rating)</span>
                                        <div class="rating"><span class="fa fa-star"></span><span
                                                class="fa fa-star"></span><span class="fa fa-star"></span><span
                                                class="fa fa-star"></span><span class="fa fa-star"></span>
                                        </div>
                                    </div>
                                    <div class="duration">3 Weeks</div>
                                </div>
                            </div>
                        </div>
                    </swiper-slide>
                </swiper>
            </div>

            <div class="bottom-text">
                <div class="content">
                    <strong>23,000+</strong> more skillful courses you can explore <NuxtLink to="/page-courses"
                        class="theme-btn btn-style-one small">Explore All Courses</NuxtLink>
                </div>
            </div>
        </div>
    </section>
</template>
<script>
import { Swiper, SwiperSlide } from "swiper/vue"
import { Autoplay, Navigation, Pagination } from "swiper/modules"

export default {
    components: {
        Swiper,
        SwiperSlide,
    },
    setup() {
        return {
            modules: [Autoplay, Pagination, Navigation],
        }
    },
}
</script>