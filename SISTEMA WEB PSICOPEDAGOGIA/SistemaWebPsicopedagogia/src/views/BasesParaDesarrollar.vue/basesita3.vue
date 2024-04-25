
<template>
    <section class="banner-section main-slider">
      <swiper :slides-per-view="1" :space-between="30" :loop="true" :autoplay="{
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
            <div class="content-column col-lg-7 col-md-12">
              <div class="content-box">
                <div class="star d-none d-lg-block spin-one">
                  <img src="/images/main-slider/icon/icon-star.png" alt="">
                </div>
                <h1 className="banner-one__title banner-one__light-color">The best program to <br> <span className="style-font">enroll</span> for exchange</h1>
                <div class="text">World-class training and development programs <br>developed by top teachers</div>
                <NuxtLink to="/page-courses" class="theme-btn btn-style-one"><span class="btn-title">Find Course</span></NuxtLink>
              </div>
            </div>
  
            <div class="image-column col-lg-5 col-md-12">
              <div class="image">
                <figure class="image-1 overlay-anim m-0"><img src="/images/main-slider/image-2.jpg" alt=""></figure>
              </div>
            </div>
          </div d-none d-xl-block>
        </div>
        <div class="bg-anim-image">
          <div class="left-dots d-none d-xl-block bounce-x">
            <img src="/images/main-slider/icon/icon-plane.png" alt="">
          </div>
          <div class="right-dots d-none d-lg-block">
            <img src="/images/main-slider/icon/icon-dots-2.png" alt="">
          </div>
          <div class="light bounce-y">
            <img src="/images/main-slider/icon/icon-bulb.png" alt="">
          </div>
          <div class="earth spin-one">
            <img src="/images/main-slider/icon/icon-globe.png" alt="">
          </div>
        </div>
      </swiper-slide>
      <swiper-slide class="slide-item">
        <div class="bg-image" style="background-image: url(images/main-slider/1.jpg);"></div>
        <div class="auto-container">
          <div class="row align-items-center">
            <div class="content-column col-lg-6 col-md-12">
              <div class="content-box">
                <div class="star d-none d-lg-block spin-one">
                  <img src="/images/main-slider/icon/icon-star.png" alt="">
                </div>
                <h1 className="banner-one__title banner-one__light-color">Best <span className="style-font">online</span> <br />courses from <br />eduLerns</h1>
                <div class="text">World-class training and development programs <br>developed by top teachers</div>
                <NuxtLink to="/page-courses" class="theme-btn btn-style-one"><span class="btn-title">Find Course</span></NuxtLink>
              </div>
            </div>
  
            <div class="image-column col-lg-6 col-md-12">
              <div class="image">
                <figure class="image-1 overlay-anim m-0"><img src="/images/main-slider/11.jpg" alt=""></figure>
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
          <div class="light bounce-y">
            <img src="/images/main-slider/icon/icon-bulb.png" alt="">
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



  <section class="categories-section-current-two">
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="sub-title">popular categories</span>
                <h2>Providing online classes for <br>remote learning</h2>
            </div>

            <div class="row">
                <!-- Category Block Two -->
                <div class="category-block-current-two col-lg-3 col-md-6 col-sm-6">
                    <div class="inner-box">
                        <div class="icon-box">
                            <i class="icon flaticon-elearning"></i>
                        </div>
                        <h4 class="title">
                            <NuxtLink to="/page-course-details">Online degree programs</NuxtLink>
                        </h4>
                        <span class="sub-title">26 Courses</span>
                    </div>
                </div>

                <!-- Category Block Two -->
                <div class="category-block-current-two col-lg-3 col-md-6 col-sm-6">
                    <div class="inner-box">
                        <div class="icon-box">
                            <i class="icon flaticon-study-1"></i>
                        </div>
                        <h4 class="title">
                            <NuxtLink to="/page-course-details">Non-degree programs</NuxtLink>
                        </h4>
                        <span class="sub-title">38 Courses</span>
                    </div>
                </div>

                <!-- Category Block Two -->
                <div class="category-block-current-two col-lg-3 col-md-6 col-sm-6">
                    <div class="inner-box">
                        <div class="icon-box">
                            <i class="icon flaticon-study"></i>
                        </div>
                        <h4 class="title">
                            <NuxtLink to="/page-course-details">Off campus programs</NuxtLink>
                        </h4>
                        <span class="sub-title">13 Courses</span>
                    </div>
                </div>

                <!-- Category Block Two -->
                <div class="category-block-current-two col-lg-3 col-md-6 col-sm-6">
                    <div class="inner-box">
                        <div class="icon-box">
                            <i class="icon flaticon-notebook"></i>
                        </div>
                        <h4 class="title">
                            <NuxtLink to="/page-course-details">Business and <br>Finance</NuxtLink>
                        </h4>
                        <span class="sub-title">42 Courses</span>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="about-section-three pt-0">
        <div class="auto-container">
            <div class="row">
                <div class="content-column col-lg-6 col-md-12 order-2 wow fadeInRight" data-wow-delay="600ms">
                    <div class="inner-column">
                        <div class="anim-icons">
                            <span class="icon icon-dots-5 bounce-x"></span>
                            <span class="icon icon-dots-3 bounce-y"></span>
                            <span class="icon icon-star-2 spin-one"></span>
                        </div>

                        <div class="sec-title">
                            <span class="sub-title">About the company</span>
                            <h2>Over 36 years in distant learning for skills</h2>
                            <div class="text">Lorem ipsum dolor sit amet consectur adipiscing elit sed eiusmod
                                tempor incididunt labore dolore magna aliquaenim ad minim. Sed risus augue, commodo
                                ornare felis non, eleifend molestie metus pharetra eleifend.</div>
                        </div>

                        <ul class="list-style-two">
                            <li><i class="icon fa fa-book"></i> Flexible unlimited training programs</li>
                            <li><i class="icon fa fa-book"></i> Experience & qualified teachers</li>
                            <li><i class="icon fa fa-book"></i> Free incoming lessons</li>
                        </ul>

                        <div class="btn-box">
                            <div class="info-box">
                                <div class="icon-box">
                                    <i class="icon flaticon-cup-1"></i>
                                    <div class="count-box">+<ElementsCounterUp :end="29"/></div>
                                </div>
                                <h6 class="counter-title">Wonderful awards</h6>
                            </div>
                            <NuxtLink to="/page-about" class="theme-btn btn-style-one"><span class="btn-title">Discover
                                    more</span></NuxtLink>
                            <span class="float-icon icon-arrow"></span>
                        </div>
                    </div>
                </div>

                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12">
                    <div class="inner-column wow fadeInLeft">
                        <div class="anim-icons">
                            <span class="icon icon-percent bounce-y"></span>
                            <span class="icon icon-star-1 spin-one"></span>
                            <span class="icon icon-dots-4 bounce-x"></span>
                            <span class="icon icon-wave"></span>
                            <span class="icon icon-idea bounce-y"></span>
                        </div>
                        <figure class="image overlay-anim wow fadeInUp"><img src="/images/resource/about-4.png" alt="">
                        </figure>
                        <div class="author-info bounce-x">
                            <h3 class="name">Aleesha brown</h3>
                            <span class="designation">Maths teacher</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <section class="fun-fact-section pt-0">
            <div class="auto-container">
                <div class="fact-counter">
                    <div class="row">
                        <!-- Counter block-->
                        <div class="counter-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                            <div class="inner">
                                <div class="count-box"><ElementsCounterUp :end="45.2"/>K
                                </div>
                                <h6 class="counter-title">Student Enrolled</h6>
                            </div>
                        </div>

                        <!--Counter block-->
                        <div class="counter-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms">
                            <div class="inner">
                                <div class="count-box"><ElementsCounterUp :end="32.4"/>K</div>
                                <h6 class="counter-title">Classes completed</h6>
                            </div>
                        </div>

                        <!--Counter block-->
                        <div class="counter-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms">
                            <div class="inner">
                                <div class="count-box"><ElementsCounterUp :end="354"/>+</div>
                                <h6 class="counter-title">Top Instructors</h6>
                            </div>
                        </div>

                        <!--Counter block-->
                        <div class="counter-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="900ms">
                            <div class="inner">
                                <div class="count-box"><ElementsCounterUp :end="99.9"/>%</div>
                                <h6 class="counter-title">Satisfaction rate</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <section class="courses-section-two">
        <div class="auto-container">
            <div class="anim-icons">
                <span class="icon icon-e wow zoomIn"></span>
                <span class="icon icon-group-1 bounce-y"></span>
                <span class="icon icon-group-2 bounce-y"></span>
            </div>

            <div class="sec-title text-center">
                <span class="sub-title">popular courses</span>
                <h2>Pick a course to<br> get started your study</h2>
            </div>

            <div class="row">
                <!-- Course Block Two-->
                <div class="course-block-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image">
                                <NuxtLink to="/page-course-details"><img src="/images/resource/course-5.jpg" alt="">
                                </NuxtLink>
                            </figure>
                            <span class="price">$49.00</span>
                            <div class="value">Advanced</div>
                        </div>
                        <div class="content-box">
                            <ul class="course-info">
                                <li><i class="fa fa-book"></i> 8 Lessons</li>
                                <li><i class="fa fa-users"></i> 16 Students</li>
                                <li><i class="fa fa-clock"></i> 3 Weeks</li>
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
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Course Block Two-->
                <div class="course-block-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image">
                                <NuxtLink to="/page-course-details"><img src="/images/resource/course-6.jpg" alt="">
                                </NuxtLink>
                            </figure>
                            <span class="price">$49.00</span>
                            <div class="value">Advanced</div>
                        </div>
                        <div class="content-box">
                            <ul class="course-info">
                                <li><i class="fa fa-book"></i> 8 Lessons</li>
                                <li><i class="fa fa-users"></i> 16 Students</li>
                                <li><i class="fa fa-clock"></i> 3 Weeks</li>
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
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Course Block Two-->
                <div class="course-block-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image">
                                <NuxtLink to="/page-course-details"><img src="/images/resource/course-7.jpg" alt="">
                                </NuxtLink>
                            </figure>
                            <span class="price">$49.00</span>
                            <div class="value">Advanced</div>
                        </div>
                        <div class="content-box">
                            <ul class="course-info">
                                <li><i class="fa fa-book"></i> 8 Lessons</li>
                                <li><i class="fa fa-users"></i> 16 Students</li>
                                <li><i class="fa fa-clock"></i> 3 Weeks</li>
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
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    
    

    <section class="clients-section">
        <div class="auto-container">
            <!-- Sponsors Outer -->
            <div class="sponsors-outer">
                <!--clients carousel-->
                <swiper :slides-per-view="3" :space-between="30" :loop="true" :autoplay="{
                    delay: 8000,
                    disableOnInteraction: true,
                }" :breakpoints="{
    320: {
        slidesPerView: 1,
        spaceBetween: 30,
    },
    575: {
        slidesPerView: 4,
        spaceBetween: 30,
    },
    767: {
        slidesPerView: 5,
        spaceBetween: 30,
    },
    991: {
        slidesPerView: 6,
        spaceBetween: 30,
    },
    1199: {
        slidesPerView: 6,
        spaceBetween: 30,
    },
    1350: {
        slidesPerView: 6,
        spaceBetween: 30,
    },
}" :pagination="{
    el: '.swiper-pagination',
    clickable: true,
}" :navigation="{
    nextEl: '.h1n',
    prevEl: '.h1p',
}" :modules="modules" class="clients-carousel owl-carousel owl-theme">
                    <swiper-slide class="slide-item">
                        <NuxtLink to="/#"><img src="/images/resource/client.png" alt=""></NuxtLink>
                    </swiper-slide>
                    <swiper-slide class="slide-item">
                        <NuxtLink to="/#"><img src="/images/resource/client.png" alt=""></NuxtLink>
                    </swiper-slide>
                    <swiper-slide class="slide-item">
                        <NuxtLink to="/#"><img src="/images/resource/client.png" alt=""></NuxtLink>
                    </swiper-slide>
                    <swiper-slide class="slide-item">
                        <NuxtLink to="/#"><img src="/images/resource/client.png" alt=""></NuxtLink>
                    </swiper-slide>
                    <swiper-slide class="slide-item">
                        <NuxtLink to="/#"><img src="/images/resource/client.png" alt=""></NuxtLink>
                    </swiper-slide>
                    <swiper-slide class="slide-item">
                        <NuxtLink to="/#"><img src="/images/resource/client.png" alt=""></NuxtLink>
                    </swiper-slide>
                    <swiper-slide class="slide-item">
                        <NuxtLink to="/#"><img src="/images/resource/client.png" alt=""></NuxtLink>
                    </swiper-slide>
                </swiper>
            </div>
        </div>
    </section>



 <section class="faqs-section">
        <div class="bg-image" style="background-image: url(./images/background/5.jpg)"></div>
        <div class="auto-container">
            <div class="row">
                <!-- FAQ Column -->
                <div class="faq-column col-lg-6 col-md-12 col-sm-12 order-2">
                    <div class="faq-bg"></div>
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="sub-title">Our faqs</span>
                            <h2>Frequently asked some questions?</h2>
                        </div>

                        <ul class="accordion-box wow fadeInRight">
                            <!--Block-->
                            <li class="accordion block" :class="{ 'active-block': isActive.key === 1 }">
                                <div class="acc-btn" :class="{ 'active': isActive.key === 1 }" @click="handleClick(1)">Where
                                    should I study abroad?
                                    <div class="icon fa fa-angle-right"></div>
                                </div>
                                <div class="acc-content" :class="{ 'current': isActive.key === 1 }">
                                    <div class="content">
                                        <div class="text">Online courses are easily accessible on much smaller
                                            budgets. In addition to the convenience and the cost, a large number of
                                            students are turning to online learning courses</div>
                                    </div>
                                </div>
                            </li>
                            <!--Block-->
                            <li class="accordion block" :class="{ 'active-block': isActive.key === 2 }">
                                <div class="acc-btn" :class="{ 'active': isActive.key === 2 }" @click="handleClick(2)">Why
                                    do students prefer online learning?
                                    <div class="icon fa fa-angle-right"></div>
                                </div>
                                <div class="acc-content" :class="{ 'current': isActive.key === 2 }">
                                    <div class="content">
                                        <div class="text">Online courses are easily accessible on much smaller
                                            budgets. In addition to the convenience and the cost, a large number of
                                            students are turning to online learning courses</div>
                                    </div>
                                </div>
                            </li>
                            <!--Block-->
                            <li class="accordion block" :class="{ 'active-block': isActive.key === 3 }">
                                <div class="acc-btn" :class="{ 'active': isActive.key === 3 }" @click="handleClick(3)">How
                                    can I contact a school directly?
                                    <div class="icon fa fa-angle-right"></div>
                                </div>
                                <div class="acc-content" :class="{ 'current': isActive.key === 3 }">
                                    <div class="content">
                                        <div class="text">Online courses are easily accessible on much smaller
                                            budgets. In addition to the convenience and the cost, a large number of
                                            students are turning to online learning courses</div>
                                    </div>
                                </div>
                            </li>
                            <!--Block-->
                            <li class="accordion block" :class="{ 'active-block': isActive.key === 4 }">
                                <div class="acc-btn" :class="{ 'active': isActive.key === 4 }" @click="handleClick(4)">How
                                    do I find a school where I want to study?
                                    <div class="icon fa fa-angle-right"></div>
                                </div>
                                <div class="acc-content" :class="{ 'current': isActive.key === 4 }">
                                    <div class="content">
                                        <div class="text">Online courses are easily accessible on much smaller
                                            budgets. In addition to the convenience and the cost, a large number of
                                            students are turning to online learning courses</div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="image-column col-lg-6 col-md-12">
                    <div class="inner-column">
                        <figure class="image"><img src="/images/resource/faq.png" alt=""></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <section class="clients-section">
        <div class="auto-container">
            <!-- Sponsors Outer -->
            <div class="sponsors-outer">
                <!--clients carousel-->
                <swiper :slides-per-view="3" :space-between="30" :loop="true" :autoplay="{
                    delay: 8000,
                    disableOnInteraction: true,
                }" :breakpoints="{
    320: {
        slidesPerView: 1,
        spaceBetween: 30,
    },
    575: {
        slidesPerView: 4,
        spaceBetween: 30,
    },
    767: {
        slidesPerView: 5,
        spaceBetween: 30,
    },
    991: {
        slidesPerView: 6,
        spaceBetween: 30,
    },
    1199: {
        slidesPerView: 6,
        spaceBetween: 30,
    },
    1350: {
        slidesPerView: 6,
        spaceBetween: 30,
    },
}" :pagination="{
    el: '.swiper-pagination',
    clickable: true,
}" :navigation="{
    nextEl: '.h1n',
    prevEl: '.h1p',
}" :modules="modules" class="clients-carousel owl-carousel owl-theme">
                    <swiper-slide class="slide-item">
                        <NuxtLink to="/#"><img src="/images/resource/client.png" alt=""></NuxtLink>
                    </swiper-slide>
                    <swiper-slide class="slide-item">
                        <NuxtLink to="/#"><img src="/images/resource/client.png" alt=""></NuxtLink>
                    </swiper-slide>
                    <swiper-slide class="slide-item">
                        <NuxtLink to="/#"><img src="/images/resource/client.png" alt=""></NuxtLink>
                    </swiper-slide>
                    <swiper-slide class="slide-item">
                        <NuxtLink to="/#"><img src="/images/resource/client.png" alt=""></NuxtLink>
                    </swiper-slide>
                    <swiper-slide class="slide-item">
                        <NuxtLink to="/#"><img src="/images/resource/client.png" alt=""></NuxtLink>
                    </swiper-slide>
                    <swiper-slide class="slide-item">
                        <NuxtLink to="/#"><img src="/images/resource/client.png" alt=""></NuxtLink>
                    </swiper-slide>
                    <swiper-slide class="slide-item">
                        <NuxtLink to="/#"><img src="/images/resource/client.png" alt=""></NuxtLink>
                    </swiper-slide>
                </swiper>
            </div>
        </div>
    </section>



    <section class="faqs-section">
        <div class="bg-image" style="background-image: url(./images/background/5.jpg)"></div>
        <div class="auto-container">
            <div class="row">
                <!-- FAQ Column -->
                <div class="faq-column col-lg-6 col-md-12 col-sm-12 order-2">
                    <div class="faq-bg"></div>
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="sub-title">Our faqs</span>
                            <h2>Frequently asked some questions?</h2>
                        </div>

                        <ul class="accordion-box wow fadeInRight">
                            <!--Block-->
                            <li class="accordion block" :class="{ 'active-block': isActive.key === 1 }">
                                <div class="acc-btn" :class="{ 'active': isActive.key === 1 }" @click="handleClick(1)">Where
                                    should I study abroad?
                                    <div class="icon fa fa-angle-right"></div>
                                </div>
                                <div class="acc-content" :class="{ 'current': isActive.key === 1 }">
                                    <div class="content">
                                        <div class="text">Online courses are easily accessible on much smaller
                                            budgets. In addition to the convenience and the cost, a large number of
                                            students are turning to online learning courses</div>
                                    </div>
                                </div>
                            </li>
                            <!--Block-->
                            <li class="accordion block" :class="{ 'active-block': isActive.key === 2 }">
                                <div class="acc-btn" :class="{ 'active': isActive.key === 2 }" @click="handleClick(2)">Why
                                    do students prefer online learning?
                                    <div class="icon fa fa-angle-right"></div>
                                </div>
                                <div class="acc-content" :class="{ 'current': isActive.key === 2 }">
                                    <div class="content">
                                        <div class="text">Online courses are easily accessible on much smaller
                                            budgets. In addition to the convenience and the cost, a large number of
                                            students are turning to online learning courses</div>
                                    </div>
                                </div>
                            </li>
                            <!--Block-->
                            <li class="accordion block" :class="{ 'active-block': isActive.key === 3 }">
                                <div class="acc-btn" :class="{ 'active': isActive.key === 3 }" @click="handleClick(3)">How
                                    can I contact a school directly?
                                    <div class="icon fa fa-angle-right"></div>
                                </div>
                                <div class="acc-content" :class="{ 'current': isActive.key === 3 }">
                                    <div class="content">
                                        <div class="text">Online courses are easily accessible on much smaller
                                            budgets. In addition to the convenience and the cost, a large number of
                                            students are turning to online learning courses</div>
                                    </div>
                                </div>
                            </li>
                            <!--Block-->
                            <li class="accordion block" :class="{ 'active-block': isActive.key === 4 }">
                                <div class="acc-btn" :class="{ 'active': isActive.key === 4 }" @click="handleClick(4)">How
                                    do I find a school where I want to study?
                                    <div class="icon fa fa-angle-right"></div>
                                </div>
                                <div class="acc-content" :class="{ 'current': isActive.key === 4 }">
                                    <div class="content">
                                        <div class="text">Online courses are easily accessible on much smaller
                                            budgets. In addition to the convenience and the cost, a large number of
                                            students are turning to online learning courses</div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="image-column col-lg-6 col-md-12">
                    <div class="inner-column">
                        <figure class="image"><img src="/images/resource/faq.png" alt=""></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="video-section">
        <div class="bg-image" style="background-image: url(./images/background/6.jpg)"></div>
        <div class="auto-container">
            <div class="outer-box">
                <div class="title-box">
                    <h2 class="title">Take a video tour to learn<br> intro of campus</h2>
                    <NuxtLink to="/page-about" class="theme-btn btn-style-one bg-theme-color3">Discover more
                    </NuxtLink>
                </div>
                <div class="video-box wow fadeInUp">
                    <span class="float-icon icon-arrow-2"></span>
                    <NuxtLink @click="openVideo" class="play-btn lightbox-image"><i
                            class="icon fa fa-play"></i></NuxtLink>
                </div>
            </div>
        </div>
    </section>



    <section class="signup-section-two">
            <div class="auto-container">
                <div class="anim-icons">
                    <span class="icon icon-line-1 spin-one"></span>
                    <span class="icon icon-line-2 spin-one"></span>
                    <span class="icon icon-line-3 bounce-x"></span>
                    <span class="icon icon-square spin-one"></span>
                    <span class="icon icon-triangle spin-one"></span>
                    <span class="icon icon-dots-2 bounce-y"></span>
                    <span class="icon icon-dots-6 spin-one"></span>
                </div>

                <div class="row">
                    <!-- Title Column -->
                    <div class="title-column col-xl-6 col-lg-7 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="sec-title">
                                <h2>Register now get premium online courses for free!</h2>
                                <div class="text">Lorem ipsum gravida nibh vel velit auctor aliquetnean sollicitudin,
                                    lorem quis bibendum auci elit consequat is simply free text available in the psutis
                                    sem nibh id eis sed odio sit amet.</div>
                            </div>
                            <div class="time-countdown time-counter-two" data-countdown="2/2/2023"></div>
                        </div>
                    </div>

                    <!-- Form Column -->
                    <div class="form-column col-xl-6 col-lg-5 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <!-- Sign Form -->
                            <div class="signup-form-two wow fadeInLeft">
                                <div class="title-box">
                                    <h4 class="title">Get free courses</h4>
                                </div>

                                <!--Contact Form-->
                                <form method="post" action="get" id="contact-form">
                                    <div class="form-group">
                                        <input type="text" name="full_name" placeholder="Your name" required>
                                    </div>

                                    <div class="form-group">
                                        <input type="text" name="Email" placeholder="Email Address" required>
                                    </div>

                                    <div class="form-group">
                                        <input type="text" name="Phone" placeholder="Phone Number" required>
                                    </div>

                                    <div class="form-group">
                                        <input type="text" name="Subject" placeholder="Subject" required>
                                    </div>

                                    <div class="form-group">
                                        <button class="theme-btn btn-style-one bg-theme-color4" type="submit"
                                            name="submit-form">Apply Now</button>
                                    </div>
                                </form>
                            </div>
                            <!--End Contact Form -->
                        </div>
                    </div>
                </div>
            </div>
        </section>




 <section class="pricing-section">
        <div class="anim-icons">
            <span class="icon icon-group-1 bounce-y"></span>
            <span class="icon icon-group-2 bounce-y"></span>
        </div>

        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="sub-title">pricing plan</span>
                <h2>Choose the right <br>plan for you</h2>
            </div>

            <div class="row">
                <!-- Pricing Block -->
                <div class="pricing-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="price-box">
                            <h1 class="price">$20.00</h1>
                            <span class="title">basic pack</span>
                        </div>
                        <ul class="features">
                            <li>3 Full Courses</li>
                            <li>Lifetime free support</li>
                            <li>Upgrate options</li>
                            <li>9 Days Time</li>
                        </ul>

                        <div class="btn-box">
                            <NuxtLink to="/page-pricing" class="theme-btn btn-style-one"><span class="btn-title">Choose
                                    Plan</span></NuxtLink>
                            <span class="sub-title">No hidden charges!</span>
                        </div>
                    </div>
                </div>

                <!-- Pricing Block -->
                <div class="pricing-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="price-box">
                            <h1 class="price">$30.00</h1>
                            <span class="title">medium pack</span>
                        </div>
                        <ul class="features">
                            <li>3 Full Courses</li>
                            <li>Lifetime free support</li>
                            <li>Upgrate options</li>
                            <li>9 Days Time</li>
                        </ul>

                        <div class="btn-box">
                            <NuxtLink to="/page-pricing" class="theme-btn btn-style-one hvr-light"><span
                                    class="btn-title">Choose Plan</span></NuxtLink>
                            <span class="sub-title">No hidden charges!</span>
                        </div>
                    </div>
                </div>

                <!-- Pricing Block -->
                <div class="pricing-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="price-box">
                            <h1 class="price">$40.00</h1>
                            <span class="title">premium pack</span>
                        </div>
                        <ul class="features">
                            <li>3 Full Courses</li>
                            <li>Lifetime free support</li>
                            <li>Upgrate options</li>
                            <li>9 Days Time</li>
                        </ul>

                        <div class="btn-box">
                            <NuxtLink to="/page-pricing" class="theme-btn btn-style-one hvr-light"><span
                                    class="btn-title">Choose Plan</span></NuxtLink>
                            <span class="sub-title">No hidden charges!</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


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




    <section class="features-section-two pt-0">
        <div class="anim-icons">
            <span class="icon icon-shape-1 zoom-one"></span>
            <span class="icon icon-shape-2 zoom-one"></span>
            <span class="icon icon-e zoom-one"></span>
        </div>
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="sub-title">Our Advantages</span>
                <h2>You’ve come to the right <br>place to learn</h2>
            </div>
            <div class="row">
                <!-- Feature Block -->
                <div class="feature-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box ">
                        <figure class="image"><img src="/images/resource/feature-1.png" alt=""></figure>
                        <h4 class="title">
                            <NuxtLink to="/page-about">135,00 courses</NuxtLink>
                        </h4>
                        <div class="text">Whether you want to learn or to share what you know, you’ve come to the
                            right place.</div>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                    <div class="inner-box ">
                        <figure class="image"><img src="/images/resource/feature-2.png" alt=""></figure>
                        <h4 class="title">
                            <NuxtLink to="/page-about">Industry instructors</NuxtLink>
                        </h4>
                        <div class="text">Whether you want to learn or to share what you know, you’ve come to the
                            right place.</div>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                    <div class="inner-box ">
                        <figure class="image"><img src="/images/resource/feature-3.png" alt=""></figure>
                        <h4 class="title">
                            <NuxtLink to="/page-about">Lifetime access</NuxtLink>
                        </h4>
                        <div class="text">Whether you want to learn or to share what you know, you’ve come to the
                            right place.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="about-section-four">
        <div class="auto-container">
            <div class="row">
                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <h2>Over 36 years in distant learning for skills</h2>
                            <div class="text">Lorem ipsum gravida nibh vel velit auctor aliquetnean sollicitudin,
                                lorem quis bibendum auci elit consequat is simply free text available in the psutis
                                sem</div>
                        </div>

                        <div class="contact-info">
                            <i class="icon fa fa-phone"></i>
                            <h6 class="title">Have any question about donation?</h6>
                            <div class="info">Call us now: <NuxtLink to="tel:6668880000">666 888 0000</NuxtLink>
                            </div>
                        </div>

                        <div class="counter-info-box">
                            <div class="inner">
                                <div class="count-box"><ElementsCounterUp :end="5716"/>
                                </div>
                                <div class="text">students enrolled in a digital classroom</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="image-box">
                            <figure class="image"><img src="/images/resource/about-5.jpg" alt=""></figure>
                            <div class="caption-box wow slideInRight">
                                <div class="inner">
                                    <div class="icon"><i class="flaticon-study"></i></div>
                                    <div class="text">Get your skills certificate from the edulerns online exam
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <section class="event-section">
        <div class="anim-icons">
            <span class="icon icon-dotted-map-3"></span>
        </div>
        <div class="auto-container">
            <div class="sec-title-outer">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="sec-title">
                            <span class="sub-title">Latest Events</span>
                            <h2>Our Latest Upcoming<br> Events List</h2>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="text">Lorem ipsum dolor sit amet consectur adipiscing elit sed eiusmod tempor
                            incididunt labore dolore magna aliquaenim ad minim.</div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Event Block -->
                <div class="event-block col-lg-6">
                    <div class="inner-box">
                        <div class="content-box">
                            <div class="image-box">
                                <figure class="image"><img src="/images/resource/event-1.jpg" alt=""></figure>
                                <span class="date">20 <br> May</span>
                            </div>
                            <h5 class="title">
                                <NuxtLink to="/#">Starting seo as your home based business</NuxtLink>
                            </h5>
                            <ul class="post-info">
                                <li><i class="icon lnr-icon-history"></i><span>Time:</span> 11:00am 02:00pm</li>
                                <li><i class="icon lnr-icon-location"></i><span>Location:</span> England</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Event Block -->
                <div class="event-block col-lg-6">
                    <div class="inner-box">
                        <div class="content-box">
                            <div class="image-box">
                                <figure class="image"><img src="/images/resource/event-2.jpg" alt=""></figure>
                                <span class="date">20 <br> May</span>
                            </div>
                            <h5 class="title">
                                <NuxtLink to="/#">Starting seo as your home based business</NuxtLink>
                            </h5>
                            <ul class="post-info">
                                <li><i class="icon lnr-icon-history"></i><span>Time:</span> 11:00am 02:00pm</li>
                                <li><i class="icon lnr-icon-location"></i><span>Location:</span> England</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Event Block -->
                <div class="event-block col-lg-6">
                    <div class="inner-box">
                        <div class="content-box">
                            <div class="image-box">
                                <figure class="image"><img src="/images/resource/event-3.jpg" alt=""></figure>
                                <span class="date">20 <br> May</span>
                            </div>
                            <h5 class="title">
                                <NuxtLink to="/#">Starting seo as your home based business</NuxtLink>
                            </h5>
                            <ul class="post-info">
                                <li><i class="icon lnr-icon-history"></i><span>Time:</span> 11:00am 02:00pm</li>
                                <li><i class="icon lnr-icon-location"></i><span>Location:</span> England</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Event Block -->
                <div class="event-block col-lg-6">
                    <div class="inner-box">
                        <div class="content-box">
                            <div class="image-box">
                                <figure class="image"><img src="/images/resource/event-4.jpg" alt=""></figure>
                                <span class="date">20 <br> May</span>
                            </div>
                            <h5 class="title">
                                <NuxtLink to="/#">Starting seo as your home based business</NuxtLink>
                            </h5>
                            <ul class="post-info">
                                <li><i class="icon lnr-icon-history"></i><span>Time:</span> 11:00am 02:00pm</li>
                                <li><i class="icon lnr-icon-location"></i><span>Location:</span> England</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


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
 import { ref } from 'vue';
 import { Swiper, SwiperSlide } from "swiper/vue";
 import { Autoplay, Navigation, Pagination } from "swiper/modules";
 import ModalVideo from '@/components/elements/ModalVideo.vue';
 
 export default {
   components: {
     Swiper,
     SwiperSlide,
     ModalVideo
   },
   setup() {
     const isActive = ref({
       status: false,
       key: 1,
     });
 
     const handleClick = (key) => {
       if (isActive.value.key === key) {
         isActive.value.status = false;
       } else {
         isActive.value.status = true;
         isActive.value.key = key;
       }
     };
 
     const openVideo = () => {
       this.videoIsOpen = !this.videoIsOpen;
     };
 
     const videoChannel = () => {
       // Lógica para extraer basada en la URL
       return 'youtube';
     };
 
     const videoId = () => {
       // Lógica para extraer basada en la URL
       return 'QiqQoqtnHrk';
     };
 
     const modules = [Autoplay, Pagination, Navigation];
 
     return {
       isActive,
       handleClick,
       openVideo,
       videoChannel,
       videoId,
       modules
     };
   },
 };
 </script>
 