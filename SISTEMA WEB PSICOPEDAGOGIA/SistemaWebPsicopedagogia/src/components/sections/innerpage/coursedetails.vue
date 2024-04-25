<template><!--Start courses Details-->
	<section class="course-details">
		<div class="container">
			<div class="row flex-xl-row-reverse">
				<!--Start courses Details Content-->
				<div class="col-xl-8 col-lg-8">
					<div class="courses-details__content">
						<img src="/images/resource/course-details.jpg" alt="" />
						<h2 class="mt-4">course Overview</h2>
						<p>Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Aelltes port lacus quis enim var sed efficitur turpis gilla sed sit amet finibus eros. Lorem Ipsum is simply dummy text of the printing.</p>
						<p>When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
						<div class="content mt-40">
							<div class="text">
								<h3>What You Will Learn?</h3>
								<p>Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
							</div>
							<div class="row mt-30">
								<!-- Category Block Two -->
								<div class="category-block-current-two col-lg-4 col-md-6 col-sm-6">
									<div class="inner-box">
										<div class="icon-box">
											<i class="icon flaticon-elearning"></i>
										</div>
										<h4 class="title">Online degree programs</h4>
										<span class="sub-title">26 Courses</span>
									</div>
								</div>

								<!-- Category Block Two -->
								<div class="category-block-current-two col-lg-4 col-md-6 col-sm-6">
									<div class="inner-box">
										<div class="icon-box">
											<i class="icon flaticon-study-1"></i>
										</div>
										<h4 class="title">Non-degree programs</h4>
										<span class="sub-title">38 Courses</span>
									</div>
								</div>

								<!-- Category Block Two -->
								<div class="category-block-current-two col-lg-4 col-md-6 col-sm-6">
									<div class="inner-box">
										<div class="icon-box">
											<i class="icon flaticon-study"></i>
										</div>
										<h4 class="title">Off campus programs</h4>
										<span class="sub-title">13 Courses</span>
									</div>
								</div>
							</div>
						</div>
						<div class=" mt-25">
							<h3>Frequently Asked Question</h3>
							<p>Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
							
							<ul class="accordion-box wow fadeInRight">
                            <!--Block-->
                            <li class="accordion block" :class="{ 'active-block': isActive.key === 1}">
                                <div class="acc-btn" :class="{ 'active': isActive.key === 1}" @click="handleClick(1)">Is my technology allowed on tech?
                                    <div class="icon fa fa-angle-right"></div>
                                </div>
                                <div class="acc-content" :class="{ 'current': isActive.key === 1}">
                                    <div class="content">
                                        <div class="text">There are many variations of passages the majority have suffered alteration in some fo injected humour, or randomised words believable.</div>
                                    </div>
                                </div>
                            </li>
                            <!--Block-->
                            <li class="accordion block" :class="{ 'active-block': isActive.key === 2}">
                                <div  class="acc-btn" :class="{ 'active': isActive.key === 2}" @click="handleClick(2)">Which country is good for residents?
                                    <div class="icon fa fa-angle-right"></div>
                                </div>
                                <div class="acc-content" :class="{ 'current': isActive.key === 2}">
                                    <div class="content">
                                        <div class="text">There are many variations of passages the majority have suffered alteration in some fo injected humour, or randomised words believable..</div>
                                    </div>
                                </div>
                            </li>
                            <!--Block-->
                            <li class="accordion block" :class="{ 'active-block': isActive.key === 3}">
                                <div class="acc-btn" :class="{ 'active': isActive.key === 3}" @click="handleClick(3)">How to turn visitors into contributors
                                    <div class="icon fa fa-angle-right"></div>
                                </div>
                                <div class="acc-content" :class="{ 'current': isActive.key === 3}">
                                    <div class="content">
                                        <div class="text">There are many variations of passages the majority have suffered alteration in some fo injected humour, or randomised words believable.</div>
                                    </div>
                                </div>
                            </li>
                        	</ul>
						</div>
					</div>
				</div>
				<!--End courses Details Content-->

				<!--Start courses Details Sidebar-->
				<div class="col-xl-4 col-lg-4">
					<div class="course-sidebar">
						<ul class="course-details-info">
							<li class="course-details-info-link">
								<span class="course-details-info-icon"><i class="far fa-clock"></i></span>
								Durations: <span>10 hours</span>
							</li>
							<li class="course-details-info-link">
								<span class="course-details-info-icon"><i class="far fa-folder-open"></i></span>
								Lectures: <span>15</span>
							</li>
							<li class="course-details-info-link">
								<span class="course-details-info-icon"><i class="far fa-user-circle"></i></span>
								Students: <span>Max 50</span>
							</li>
							<li class="course-details-info-link">
								<span class="course-details-info-icon"><i class="far fa-flag"></i></span>
								Skill Level: <span>Advanced</span>
							</li>
							<li class="course-details-info-link">
								<span class="course-details-info-icon"><i class="far fa-bell"></i></span>
								Language: <span>English</span>
							</li>
						</ul>

						<div class="course-details-price">
							<p class="course-details-price-text">Course price</p>
							<p class="course-details-price-amount">$18.00</p>
							<NuxtLink to="/#" class="theme-btn btn-style-two course-details-price-btn">Buy This Course</NuxtLink>
						</div>

						<div class="latest-course mb-30">
							<h4 class="latest-course-title mb-30">New Courses</h4>
							<div class="latest-course-item">
								<div class="latest-course-img">
									<img src="/images/resource/course-1.jpg" alt="">
								</div>
								<div class="latest-course-content">
									<NuxtLink to="/#" class="latest-course-author">by <span>Advanced</span></NuxtLink>
									<h5><NuxtLink to="/page-course-details">Modern Languages</NuxtLink></h5>
									<div class="latest-course-stars">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<span>4.8</span>
									</div>
								</div>
							</div>
							<div class="latest-course-item">
								<div class="latest-course-img">
									<img src="/images/resource/course-2.jpg" alt="">
								</div>
								<div class="latest-course-content">
									<NuxtLink to="/#" class="latest-course-author">by <span>Advanced</span></NuxtLink>
									<h5><NuxtLink to="page-course-details">Modern Technologies</NuxtLink></h5>
									<div class="latest-course-stars">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<span>5.0</span>
									</div>
								</div>
							</div>
							<div class="latest-course-item">
								<div class="latest-course-img">
									<img src="/images/resource/course-3.jpg" alt="">
								</div>
								<div class="latest-course-content">
									<NuxtLink to="/#" class="latest-course-author">by <span>Advanced</span></NuxtLink>
									<h5><NuxtLink to="page-course-details">Development Studies</NuxtLink></h5>
									<div class="latest-course-stars">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<span>4.9</span>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
				<!--End courses Details Sidebar-->
			</div>
		</div>
	</section>
	<!--End courses Details-->
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
};
</script>