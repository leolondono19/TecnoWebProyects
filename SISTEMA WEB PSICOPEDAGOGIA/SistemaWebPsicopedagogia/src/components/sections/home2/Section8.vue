<template>
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
</template>
<script setup>
import { ref } from 'vue'

const isActive = ref({
    status: false,
    key: 1,
})

const handleClick = (key) => {
    if (isActive.value.key === key) {
        isActive.value.status = false
    } else {
        isActive.value.status = true
        isActive.value.key = key
    }
}
</script>