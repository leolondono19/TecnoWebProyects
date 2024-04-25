<template><!--Team Details Start-->
	<section class="team-details">
		<div class="container pb-100">
			<div class="team-details__top pb-70">
				<div class="row">
					<div class="col-xl-6 col-lg-6">
						<div class="team-details__top-left">
							<div class="team-details__top-img"> <img src="/images/resource/team-details.jpg" alt="">
								<div class="team-details__big-text"></div>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6">
						<div class="team-details__top-right">
							<div class="team-details__top-content">
								<h3 class="team-details__top-name">Jane Seymour</h3>
								<p class="team-details__top-title">Senior Lecturer</p>
								<div class="team-details__social"> <NuxtLink to="/#"><i class="fab fa-twitter"></i></NuxtLink> <NuxtLink to="/#"><i class="fab fa-facebook"></i></NuxtLink> <NuxtLink to="/#"><i class="fab fa-pinterest-p"></i></NuxtLink> <NuxtLink to="/#"><i class="fab fa-instagram"></i></NuxtLink> </div>
								<p class="team-details__top-text-1">I help my clients stand out and <br> they help me grow.</p>
								<p class="team-details__top-text-3">Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae </p>
								<p class="team-details__top-text-2">When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries architecto</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="team-details__bottom pt-100">
				<div class="row">
					<div class="col-xl-6 col-lg-6">
						<div class="team-details__bottom-left">
							<h4 class="team-details__bottom-left-title">Personal Experience</h4>
							<p class="team-details__bottom-left-text">When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries architecto dolorem ipsum quia</p>
						</div>
					</div>
          <div class="skills-column col-xl-6 col-lg-6" data-wow-delay="300ms">
            <div class="inner-column"> 
              <!--Skills-->
              <div class="skills style-two"> 
                <!--Skill Item-->
                <div class="skill-item">
                  <div class="skill-header">
                    <h6 class="skill-title">Technology</h6>
                  </div>
                  <div class="skill-bar">
                    <div class="bar-inner">
                      <div class="bar progress-line" data-width="77" style="width: 77%;">
                        <div class="skill-percentage">
                          <div class="count-box"><ElementsCounterUp :end="77"/>% </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--Skill Item-->
                <div class="skill-item">
                  <div class="skill-header">
                    <h6 class="skill-title">HVAC</h6>
                  </div>
                  <div class="skill-bar">
                    <div class="bar-inner">
                      <div class="bar progress-line" data-width="57" style="width: 57%;">
                        <div class="skill-percentage">
                          <div class="count-box"><ElementsCounterUp :end="57"/>% </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--Skill Item-->
                <div class="skill-item">
                  <div class="skill-header">
                    <h6 class="skill-title">HVAC</h6>
                  </div>
                  <div class="skill-bar">
                    <div class="bar-inner">
                      <div class="bar progress-line" data-width="92" style="width: 92%;">
                        <div class="skill-percentage">
                          <div class="count-box"><ElementsCounterUp :end="92"/>% </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--Skill Item--> 
              </div>
            </div>
          </div>
				</div>
			</div>
		</div>
	</section>
	<!--Team Details End--> 
</template>