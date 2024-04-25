<template>
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
</template>