<template >
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
                <router-link to="/page-courses" class="theme-btn btn-style-one"><span class="btn-title">Find Course</span></router-link>
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
                <router-link to="/page-courses" class="theme-btn btn-style-one"><span class="btn-title">Find Course</span></router-link>
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
        <router-link to="#">facebook</router-link>
      </li>
      <li>
        <router-link to="#">twitter</router-link>
      </li>
      <li>
        <router-link to="#">instagram</router-link>
      </li>
    </ul>
  </section>
  
  
  
  
  <section class="about-section">
          <div class="anim-icons">
              <span class="icon icon-dotted-map"></span>
          </div>
          <div class="auto-container">
              <div class="row">
                  <div class="content-column col-lg-6 col-md-12 order-2 wow fadeInRight" data-wow-delay="600ms">
                      <div class="inner-column">
                          <div class="sec-title">
                              <span class="sub-title">Get to know us</span>
                              <h2>Grow your skills learn with us from anywhere</h2>
                              <div class="text">Lorem ipsum dolor sit amet consectur adipiscing elit sed eiusmod tempor
                                  incididunt labore dolore magna aliquaenim ad minim. Sed risus augue, commodo ornare felis
                                  non, eleifend molestie metus pharetra eleifend.</div>
                          </div>
  
                          <ul class="list-style-one two-column">
                              <li><i class="icon fa fa-check"></i> Expert trainers</li>
                              <li><i class="icon fa fa-check"></i> Online learning</li>
                              <li><i class="icon fa fa-check"></i> Lifetime access</li>
                              <li><i class="icon fa fa-check"></i> Great results</li>
                          </ul>
  
                          <div class="btn-box">
                              <router-link to="/page-about" class="theme-btn btn-style-one"><span class="btn-title">Discover
                                      more</span></router-link>
                          </div>
                      </div>
                  </div>
  
                  <!-- Image Column -->
                  <div class="image-column col-lg-6 col-md-12">
                      <div class="anim-icons">
                          <span class="icon icon-dotted-map-2"></span>
                          <span class="icon icon-paper-plan"></span>
                          <span class="icon icon-dotted-line"></span>
                      </div>
                      <div class="inner-column wow fadeInLeft">
                          <figure class="image-1 overlay-anim wow fadeInUp"><img src="/images/resource/about-1.png" alt="">
                          </figure>
                          <figure class="image-2 overlay-anim wow fadeInRight"><img src="/images/resource/about-2.jpg" alt="">
                          </figure>
                          <div class="experience bounce-y"><span class="count">16</span> Years of Experience</div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
  
  
  
  
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
                                      <router-link to="/page-course-details"><img src="/images/resource/course-1.jpg" alt="">
                                      </router-link>
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
                                      <router-link to="/page-course-details">Starting seo as your home based
                                          business</router-link>
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
                                      <router-link to="/page-course-details"><img src="/images/resource/course-2.jpg" alt="">
                                      </router-link>
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
                                      <router-link to="/page-course-details">Starting seo as your home based
                                          business</router-link>
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
                                      <router-link to="/page-course-details"><img src="/images/resource/course-3.jpg" alt="">
                                      </router-link>
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
                                      <router-link to="/page-course-details">Starting seo as your home based
                                          business</router-link>
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
                                      <router-link to="/page-course-details"><img src="/images/resource/course-4.jpg" alt="">
                                      </router-link>
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
                                      <router-link to="/page-course-details">Starting seo as your home based
                                          business</router-link>
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
                                      <router-link to="/page-course-details"><img src="/images/resource/course-1.jpg" alt="">
                                      </router-link>
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
                                      <router-link to="/page-course-details">Starting seo as your home based
                                          business</router-link>
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
                                      <router-link to="/page-course-details"><img src="/images/resource/course-2.jpg" alt="">
                                      </router-link>
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
                                      <router-link to="/page-course-details">Starting seo as your home based
                                          business</router-link>
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
                                      <router-link to="/page-course-details"><img src="/images/resource/course-3.jpg" alt="">
                                      </router-link>
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
                                      <router-link to="/page-course-details">Starting seo as your home based
                                          business</router-link>
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
                                      <router-link to="/page-course-details"><img src="/images/resource/course-4.jpg" alt="">
                                      </router-link>
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
                                      <router-link to="/page-course-details">Starting seo as your home based
                                          business</router-link>
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
                      <strong>23,000+</strong> more skillful courses you can explore <router-link to="/page-courses"
                          class="theme-btn btn-style-one small">Explore All Courses</router-link>
                  </div>
              </div>
          </div>
      </section>
  
  
  
  
  
  
  
  
  
  
  
      
      <section class="features-section">
          <div class="auto-container">
              <div class="row">
                  <!-- Feature Block -->
                  <div class="feature-block col-lg-3 col-md-6 col-sm-6 wow fadeInUp">
                      <div class="inner-box ">
                          <i class="icon flaticon-online-learning"></i>
                          <h5 class="title">Online<br> Certifications</h5>
                      </div>
                  </div>
  
                  <!-- Feature Block -->
                  <div class="feature-block col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="400ms">
                      <div class="inner-box ">
                          <i class="icon flaticon-elearning"></i>
                          <h5 class="title">Top<br> Instructors</h5>
                      </div>
                  </div>
  
                  <!-- Feature Block -->
                  <div class="feature-block col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="800ms">
                      <div class="inner-box ">
                          <i class="icon flaticon-web-2"></i>
                          <h5 class="title">Unlimited <br>Online Courses</h5>
                      </div>
                  </div>
  
                  <!-- Feature Block -->
                  <div class="feature-block col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="1200ms">
                      <div class="inner-box ">
                          <i class="icon flaticon-users"></i>
                          <h5 class="title">Experienced <br>Members</h5>
                      </div>
                  </div>
              </div>
          </div>
      </section>
    
    
    <section class="categories-section-current">
          <div class="auto-container">
              <div class="anim-icons">
                  <span class="icon icon-group-1 bounce-y"></span>
                  <span class="icon icon-group-2 bounce-y"></span>
              </div>
  
              <div class="sec-title text-center">
                  <span class="sub-title">Checkout our categories</span>
                  <h2>Top categories for popular <br>courses to show</h2>
              </div>
  
              <div class="row justify-content-center">
                  <!-- Category Block -->
                  <div class="category-block-current col-xl-2 col-lg-3 col-md-4 col-sm-6">
                      <div class="inner-box">
                          <div class="icon-box">
                              <i class="icon flaticon-student-2"></i>
                          </div>
                          <h6 class="title">
                              <router-link to="/page-course-details">Business <br>Management</router-link>
                          </h6>
                      </div>
                  </div>
  
                  <!-- Category Block -->
                  <div class="category-block-current col-xl-2 col-lg-3 col-md-4 col-sm-6">
                      <div class="inner-box">
                          <div class="icon-box">
                              <i class="icon flaticon-stationary"></i>
                          </div>
                          <h6 class="title">
                              <router-link to="/page-course-details">Arts and <br>Design</router-link>
                          </h6>
                      </div>
                  </div>
  
                  <!-- Category Block -->
                  <div class="category-block-current col-xl-2 col-lg-3 col-md-4 col-sm-6">
                      <div class="inner-box">
                          <div class="icon-box">
                              <i class="icon flaticon-online-learning"></i>
                          </div>
                          <h6 class="title">
                              <router-link to="/page-course-details">Computer <br>Science</router-link>
                          </h6>
                      </div>
                  </div>
  
                  <!-- Category Block -->
                  <div class="category-block-current col-xl-2 col-lg-3 col-md-4 col-sm-6">
                      <div class="inner-box">
                          <div class="icon-box">
                              <i class="icon flaticon-study"></i>
                          </div>
                          <h6 class="title">
                              <router-link to="/page-course-details">Personal <br>Development</router-link>
                          </h6>
                      </div>
                  </div>
  
                  <!-- Category Block -->
                  <div class="category-block-current col-xl-2 col-lg-3 col-md-4 col-sm-6">
                      <div class="inner-box">
                          <div class="icon-box">
                              <i class="icon flaticon-pie-chart"></i>
                          </div>
                          <h6 class="title">
                              <router-link to="/page-course-details">Business and <br>Finance</router-link>
                          </h6>
                      </div>
                  </div>
  
                  <!-- Category Block -->
                  <div class="category-block-current col-xl-2 col-lg-3 col-md-4 col-sm-6">
                      <div class="inner-box">
                          <div class="icon-box">
                              <i class="icon flaticon-web-2"></i>
                          </div>
                          <h6 class="title">
                              <router-link to="/page-course-details">Video and <br>Photography</router-link>
                          </h6>
                      </div>
                  </div>
              </div>
          </div>
      </section>
  
  
  
  
      <section class="signup-section">
          <div class="auto-container">
              <div class="anim-icons">
                  <span class="icon icon-paper-clip bounce-x"></span>
              </div>
              <div class="outer-box" style="background-image: url(./images/background/3.jpg)">
                  <span class="float-icon icon-pencil-line wow fadeInUp"></span>
                  <div class="row">
                      <!-- Title Column -->
                      <div class="title-column col-lg-6 col-md-12 col-sm-12">
                          <div class="sec-title light">
                              <h2>Sign up for a<br> free trial lesson<br> by zoom</h2>
                              <div class="text">Quisque commodo, magna nec accu man euismod <br> tellus mi ornare enim, quis congue elit.</div>
                          </div>
                      </div>
  
                      <!-- Form Column -->
                      <div class="form-column col-lg-6 col-md-12 col-sm-12">
                          <div class="inner-column">
                              <!-- Sign Form -->
                              <div class="signup-form wow fadeInLeft">
                                  <!--Contact Form-->
                                  <form method="post" action="get" id="contact-form">
                                      <div class="form-group">
                                          <input type="text" name="full_name" placeholder="Your name" required>
                                      </div>
  
                                      <div class="form-group">
                                          <input type="text" name="Email" placeholder="Email address" required>
                                      </div>
  
                                      <div class="form-group">
                                          <select class="custom-select">
                                              <option value="">Select course</option>
                                              <option value="UI/UX Designing">UI/UX Designing</option>
                                              <option value="Digital Marketing">Digital Marketing</option>
                                          </select>
                                      </div>
  
                                      <div class="form-group">
                                          <button class="theme-btn btn-style-one" type="submit" name="submit-form">Send Request</button>
                                      </div>
                                  </form>
                              </div>
                              <!--End Contact Form -->
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
  
  
  
    <section class="team-section">
          <div class="auto-container">
              <div class="sec-title text-center">
                  <span class="sub-title">qualified teachers</span>
                  <h2>Meet the teacher who <br>teaches you online</h2>
              </div>
  
              <div class="row">
                  <!-- Team block -->
                  <div class="team-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                      <div class="inner-box">
                          <div class="image-box">
                              <figure class="image">
                                  <router-link to="/#"><img src="/images/resource/team-1.jpg" alt=""></router-link>
                              </figure>
                              <span class="share-icon fa fa-share-alt"></span>
                              <div class="social-links">
                                  <router-link to="/#"><i class="fab fa-twitter"></i></router-link>
                                  <router-link to="/#"><i class="fab fa-facebook-f"></i></router-link>
                                  <router-link to="/#"><i class="fab fa-pinterest-p"></i></router-link>
                                  <router-link to="/#"><i class="fab fa-instagram"></i></router-link>
                              </div>
                          </div>
                          <div class="info-box">
                              <h4 class="name">
                                  <router-link to="/#">Edward norton</router-link>
                              </h4>
                              <span class="designation">Musian</span>
                          </div>
                      </div>
                  </div>
  
                  <!-- Team block -->
                  <div class="team-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                      <div class="inner-box">
                          <div class="image-box">
                              <figure class="image">
                                  <router-link to="/#"><img src="/images/resource/team-2.jpg" alt=""></router-link>
                              </figure>
                              <span class="share-icon fa fa-share-alt"></span>
                              <div class="social-links">
                                  <router-link to="/#"><i class="fab fa-twitter"></i></router-link>
                                  <router-link to="/#"><i class="fab fa-facebook-f"></i></router-link>
                                  <router-link to="/#"><i class="fab fa-pinterest-p"></i></router-link>
                                  <router-link to="/#"><i class="fab fa-instagram"></i></router-link>
                              </div>
                          </div>
                          <div class="info-box">
                              <h4 class="name">
                                  <router-link to="/#">Jane seymour</router-link>
                              </h4>
                              <span class="designation">Designer</span>
                          </div>
                      </div>
                  </div>
  
                  <!-- Team block -->
                  <div class="team-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                      <div class="inner-box">
                          <div class="image-box">
                              <figure class="image">
                                  <router-link to="/#"><img src="/images/resource/team-3.jpg" alt=""></router-link>
                              </figure>
                              <span class="share-icon fa fa-share-alt"></span>
                              <div class="social-links">
                                  <router-link to="/#"><i class="fab fa-twitter"></i></router-link>
                                  <router-link to="/#"><i class="fab fa-facebook-f"></i></router-link>
                                  <router-link to="/#"><i class="fab fa-pinterest-p"></i></router-link>
                                  <router-link to="/#"><i class="fab fa-instagram"></i></router-link>
                              </div>
                          </div>
                          <div class="info-box">
                              <h4 class="name">
                                  <router-link to="/#">Mike hardson</router-link>
                              </h4>
                              <span class="designation">Developer</span>
                          </div>
                      </div>
                  </div>
  
                  <!-- Team block -->
                  <div class="team-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
                      <div class="inner-box">
                          <div class="image-box">
                              <figure class="image">
                                  <router-link to="/#"><img src="/images/resource/team-4.jpg" alt=""></router-link>
                              </figure>
                              <span class="share-icon fa fa-share-alt"></span>
                              <div class="social-links">
                                  <router-link to="/#"><i class="fab fa-twitter"></i></router-link>
                                  <router-link to="/#"><i class="fab fa-facebook-f"></i></router-link>
                                  <router-link to="/#"><i class="fab fa-pinterest-p"></i></router-link>
                                  <router-link to="/#"><i class="fab fa-instagram"></i></router-link>
                              </div>
                          </div>
                          <div class="info-box">
                              <h4 class="name">
                                  <router-link to="/#">Christine eve</router-link>
                              </h4>
                              <span class="designation">Artisit</span>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
  
  
  
  
      <section class="call-to-action" style="background-image: url(./images/background/1.jpg)">
          <div class="anim-icons">
              <span class="icon icon-calculator zoom-one"></span>
              <span class="icon icon-pin-clip zoom-one"></span>
              <span class="icon icon-dots"></span>
          </div>
  
          <div class="auto-container">
              <div class="row"  >
                  <div class="title-column col-lg-8 col-md-12">
                      <div class="inner-column">
                          <div class="sec-title light">
                              <span class="style-font">Get your quality</span>
                              <h1>Skills certificate <br>from the edulerns</h1>
                              <router-link to="/page-course-details" class="theme-btn btn-style-one"><span class="btn-title">Get
                                      started now</span></router-link>
                          </div>
                      </div>
                  </div>
  
                  <div class="image-column col-lg-4 col-md-12">
                      <figure class="image"><img src="/images/resource/cta.png" alt=""></figure>
                  </div>
              </div>
          </div>
      </section>
  
  
  
  
  
  
      <section class="testimonial-section" style="overflow-x: hidden;">
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
  
  
  
      <section class="about-section-two">
          <div class="anim-icons" style="overflow: hidden;">
              <span class="icon icon-e wow zoomIn"></span>
              <span class="icon icon-dots-2 bounce-x"></span>
          </div>
          <div class="auto-container">
              <div class="row">
                  <div class="content-column col-lg-6 col-md-12 order-2 wow fadeInRight" data-wow-delay="600ms">
                      <div class="inner-column">
                          <div class="sec-title">
                              <h2>Over 36 years in distant learning for skills</h2>
                              <div class="text">Lorem ipsum dolor sit amet consectur adipiscing elit sed eiusmod tempor
                                  incididunt labore dolore magna aliquaenim ad minim. Sed risus augue, commodo ornare felis
                                  non, eleifend molestie metus pharetra eleifend.</div>
                          </div>
  
                          <div class="row">
                              <div class="about-block col-lg-6 col-md-6 col-sm-6 wow fadeInUp">
                                  <div class="inner-box">
                                      <span class="info-text">Best off canvas program</span>
                                      <div class="info-box">
                                          <div class="thumb"><img src="/images/resource/avatar-1.jpg" alt=""></div>
                                          <h5 class="name">John Doe</h5>
                                          <span class="designation">Student</span>
                                      </div>
                                  </div>
                              </div>
  
                              <div class="about-block style-two col-lg-6 col-md-6 col-sm-6 wow fadeInRight">
                                  <div class="inner-box">
                                      <span class="info-text">Best degree program</span>
                                      <div class="info-box">
                                          <div class="thumb"><img src="/images/resource/avatar-2.jpg" alt=""></div>
                                          <h5 class="name">Albart Brown</h5>
                                          <span class="designation">TEACHER</span>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
  
                  <!-- Image Column -->
                  <div class="image-column col-lg-6 col-md-12">
                      <div class="inner-column wow fadeInLeft">
                          <div class="icons-box">
                              <span class="icon icon-dotted-map"></span>
                              <span class="icon icon-dotted-line"></span>
                              <span class="icon icon-papper-plan"></span>
                          </div>
                          <figure class="image overlay-anim wow fadeInUp"><img src="/images/resource/about-3.jpg" alt="">
                          </figure>
                      </div>
                  </div>
              </div>
          </div>
      </section>
  
  
  
  
  
      <section class="countdown-section">
          <div class="bg-image zoom-two" style="background-image: url(./images/background/2.jpg)"></div>
          <div class="auto-container">
              <div class="content-box">
                  <div class="sec-title light text-center">
                      <span class="sub-title">Book your seat now</span>
                      <h2>Upcoming study trip</h2>
                  </div>
                  <div class="time-counter wow fadeInUp">
                      <!-- <div class="time-countdown" data-countdown="2/2/2023"></div> -->
                      <ElementsCountdown :countDay="2"/>
                  </div>
              </div>
          </div>
      </section>
  
  
  
  
    <section class="news-section">
  
  <div class="auto-container">
      <div class="sec-title text-center">
          <span class="sub-title">directly from blog</span>
          <h2>Our latest news &<br> upcoming blog posts</h2>
      </div>
  
      <div class="row">
          <!-- News Block -->
          <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
              <div class="inner-box">
                  <div class="image-box">
                      <figure class="image">
                          <router-link to="/news-details"><img src="/images/resource/news-1.jpg" alt=""></router-link>
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
                              <router-link to="/news-details">The quality role of the elementary teacher in
                                  education</router-link>
                          </h4>
                          <router-link to="/news-details" class="read-more">Read More <i
                                  class="fa fa-long-arrow-alt-right"></i></router-link>
                      </div>
                  </div>
              </div>
          </div>
  
          <!-- News Block -->
          <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms">
              <div class="inner-box">
                  <div class="image-box">
                      <figure class="image">
                          <router-link to="/news-details"><img src="/images/resource/news-2.jpg" alt=""></router-link>
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
                              <router-link to="/news-details">The quality role of the elementary teacher in
                                  education</router-link>
                          </h4>
                          <router-link to="/news-details" class="read-more">Read More <i
                                  class="fa fa-long-arrow-alt-right"></i></router-link>
                      </div>
                  </div>
              </div>
          </div>
  
          <!-- News Block -->
          <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms">
              <div class="inner-box">
                  <div class="image-box">
                      <figure class="image">
                          <router-link to="/news-details"><img src="/images/resource/news-3.jpg" alt=""></router-link>
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
                              <router-link to="/news-details">The quality role of the elementary teacher in
                                  education</router-link>
                          </h4>
                          <router-link to="/news-details" class="read-more">Read More <i
                                  class="fa fa-long-arrow-alt-right"></i></router-link>
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
                          <router-link to="/#"><img src="/images/resource/client.png" alt=""></router-link>
                      </swiper-slide>
                      <swiper-slide class="slide-item">
                          <router-link to="/#"><img src="/images/resource/client.png" alt=""></router-link>
                      </swiper-slide>
                      <swiper-slide class="slide-item">
                          <router-link to="/#"><img src="/images/resource/client.png" alt=""></router-link>
                      </swiper-slide>
                      <swiper-slide class="slide-item">
                          <router-link to="/#"><img src="/images/resource/client.png" alt=""></router-link>
                      </swiper-slide>
                      <swiper-slide class="slide-item">
                          <router-link to="/#"><img src="/images/resource/client.png" alt=""></router-link>
                      </swiper-slide>
                      <swiper-slide class="slide-item">
                          <router-link to="/#"><img src="/images/resource/client.png" alt=""></router-link>
                      </swiper-slide>
                      <swiper-slide class="slide-item">
                          <router-link to="/#"><img src="/images/resource/client.png" alt=""></router-link>
                      </swiper-slide>
                  </swiper>
              </div>
          </div>
      </section>
   
  
  
  </template>
  
<script>
import { Autoplay, Navigation, Pagination } from "swiper/modules"
import { Swiper, SwiperSlide } from "swiper/vue"
import ElementsCountdown from '@/components/elements/Countdown.vue'


export default {
  components: {
    Swiper,
    SwiperSlide,
    ElementsCountdown
  },
  setup() {
    return {
      modules: [Autoplay, Pagination, Navigation],
    }
  }
}


</script>
<style scoped>
</style>
