<template>
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
</template>