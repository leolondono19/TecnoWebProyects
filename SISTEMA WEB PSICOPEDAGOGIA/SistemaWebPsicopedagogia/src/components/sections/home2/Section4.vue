<template>
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
</template>