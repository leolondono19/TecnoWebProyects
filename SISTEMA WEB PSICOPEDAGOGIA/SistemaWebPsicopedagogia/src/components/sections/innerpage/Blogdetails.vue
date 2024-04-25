<template><!--Blog Details Start-->
	<section class="blog-details">
		<div class="container">
			<div class="row">
				<div class="col-xl-8 col-lg-7">
					<div class="blog-details__left">
						<div class="blog-details__img">
							<img src="/images/resource/news-details.jpg" alt="">
							<div class="blog-details__date">
								<span class="day">28</span>
								<span class="month">Aug</span>
							</div>
						</div>
						<div class="blog-details__content">
							<ul class="list-unstyled blog-details__meta">
								<li><NuxtLink to="/news-details"><i class="fas fa-user-circle"></i> Admin</NuxtLink> </li>
								<li><NuxtLink to="/news-details"><i class="fas fa-comments"></i> 02
									Comments</NuxtLink>
								</li>
							</ul>
							<h3 class="blog-details__title">SEO is a Cost-Effective Advertising Strategy</h3>
							<p class="blog-details__text-2">Mauris non dignissim purus, ac commodo diam. Donec sit
								amet lacinia nulla. Aliquam quis purus in justo pulvinar tempor. Aliquam tellus
								nulla, sollicitudin at euismod nec, feugiat at nisi. Quisque vitae odio nec lacus
								interdum tempus. Phasellus a rhoncus erat. Vivamus vel eros vitae est aliquet
								pellentesque vitae et nunc. Sed vitae leo vitae nisl pellentesque semper.
							</p>
							<p class="blog-details__text-2">Mauris non dignissim purus, ac commodo diam. Donec sit
								amet lacinia nulla. Aliquam quis purus in justo pulvinar tempor. Aliquam tellus
								nulla, sollicitudin at euismod nec, feugiat at nisi. Quisque vitae odio nec lacus
								interdum tempus. Phasellus a rhoncus erat. Vivamus vel eros vitae est aliquet
								pellentesque vitae et nunc. Sed vitae leo vitae nisl pellentesque semper.
							</p>
							<p class="blog-details__text-2">Mauris non dignissim purus, ac commodo diam. Donec sit
								amet lacinia nulla. Aliquam quis purus in justo pulvinar tempor. Aliquam tellus
								nulla, sollicitudin at euismod nec, feugiat at nisi. Quisque vitae odio nec lacus
								interdum tempus. Phasellus a rhoncus erat. Vivamus vel eros vitae est aliquet
								pellentesque vitae et nunc. Sed vitae leo vitae nisl pellentesque semper.
							</p>
						</div>
						<div class="blog-details__bottom">
							<p class="blog-details__tags"> <span>Tags</span> <NuxtLink to="/news-details">Education</NuxtLink> <NuxtLink to="/news-details">College</NuxtLink> </p>
							<div class="blog-details__social-list"> <NuxtLink to="/news-details"><i class="fab fa-twitter"></i></NuxtLink> <NuxtLink to="/news-details"><i class="fab fa-facebook"></i></NuxtLink> <NuxtLink to="/news-details"><i class="fab fa-pinterest-p"></i></NuxtLink> <NuxtLink to="/news-details"><i class="fab fa-instagram"></i></NuxtLink> </div>
						</div>
						<div class="nav-links">
							<div class="prev">
								<NuxtLink to="/news-details"> rel="prev">True factors of the modern healthy lifestyle</NuxtLink>
							</div>
							<div class="next">
								<NuxtLink to="/news-details"> rel="next">How to lead a healthy &amp; well-balanced life</NuxtLink>
							</div>
						</div>
						<div class="comment-one">
							<h3 class="comment-one__title">2 Comments</h3>
							<div class="comment-one__single">
								<div class="comment-one__image"> <img src="/images/resource/testi-thumb-1.jpg" alt=""> </div>
								<div class="comment-one__content">
									<h3>Kevin Martin</h3>
									<p>Mauris non dignissim purus, ac commodo diam. Donec sit amet lacinia nulla.
										Aliquam quis purus in justo pulvinar tempor. Aliquam tellus nulla,
										sollicitudin at euismod.
									</p>
									<NuxtLink to="/news-details"> class="theme-btn btn-style-one bg-theme-color4 comment-one__btn"><span class="btn-title">Reply</span></NuxtLink>
								</div>
							</div>
							<div class="comment-one__single">
								<div class="comment-one__image"> <img src="/images/resource/testi-thumb-2.jpg" alt=""> </div>
								<div class="comment-one__content">
									<h3>Sarah Albert</h3>
									<p>Mauris non dignissim purus, ac commodo diam. Donec sit amet lacinia nulla.
										Aliquam quis purus in justo pulvinar tempor. Aliquam tellus nulla,
										sollicitudin at euismod.
									</p>
									<NuxtLink to="/news-details"> class="theme-btn btn-style-one bg-theme-color4 comment-one__btn"><span class="btn-title">Reply</span></NuxtLink>
								</div>
							</div>
							<div class="comment-form">
								<h3 class="comment-form__title">Leave a Comment</h3>
								<form id="contact_form" name="contact_form" class="" action="includes/sendmail.php" method="post">
									<div class="row">
										<div class="col-sm-6">
											<div class="mb-3">
												<input name="form_name" class="form-control" type="text" placeholder="Enter Name">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="mb-3">
												<input name="form_email" class="form-control required email" type="email" placeholder="Enter Email">
											</div>
										</div>
									</div>
									<div class="mb-3">
										<textarea name="form_message" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
									</div>
									<div class="mb-3">
										<input name="form_botcheck" class="form-control" type="hidden" value="" />
										<button type="submit" class="theme-btn btn-style-one" data-loading-text="Please wait..."><span class="btn-title">Submit Comment</span></button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-5">
					<div class="sidebar">
						<div class="sidebar__single sidebar__search">
							<form action="#" class="sidebar__search-form">
								<input type="search" placeholder="Search here">
								<button type="submit"><i class="lnr-icon-search"></i></button>
							</form>
						</div>
						<div class="sidebar__single sidebar__post">
							<h3 class="sidebar__title">Latest Posts</h3>
							<ul class="sidebar__post-list list-unstyled">
								<li>
									<div class="sidebar__post-image"> <img src="/images/resource/news-1.jpg" alt=""> </div>
									<div class="sidebar__post-content">
										<h3> <span class="sidebar__post-content-meta"><i
											class="fas fa-user-circle"></i>Admin</span> <NuxtLink to="/news-details">Top crypto exchange influencers</NuxtLink>
										</h3>
									</div>
								</li>
								<li>
									<div class="sidebar__post-image"> <img src="/images/resource/news-2.jpg" alt=""> </div>
									<div class="sidebar__post-content">
										<h3> <span class="sidebar__post-content-meta"><i
											class="fas fa-user-circle"></i>Admin</span> <NuxtLink to="/news-details">Necessity may give us best virtual court</NuxtLink> </h3>
									</div>
								</li>
								<li>
									<div class="sidebar__post-image"> <img src="/images/resource/news-3.jpg" alt=""> </div>
									<div class="sidebar__post-content">
										<h3> <span class="sidebar__post-content-meta"><i
											class="fas fa-user-circle"></i>Admin</span> <NuxtLink to="/news-details">You should know about business plan</NuxtLink> </h3>
									</div>
								</li>
							</ul>
						</div>
						<div class="sidebar__single sidebar__category">
							<h3 class="sidebar__title">Categories</h3>
							<ul class="sidebar__category-list list-unstyled">
								<li><NuxtLink to="/news-details">Artifical Intelligence<span
									class="icon-right-arrow"></span></NuxtLink> </li>
								<li class="active"><NuxtLink to="/news-details">Cloud Solution<span
									class="icon-right-arrow"></span></NuxtLink></li>
								<li><NuxtLink to="/news-details">Cyber Data<span
									class="icon-right-arrow"></span></NuxtLink> </li>
								<li><NuxtLink to="/news-details">SEO Marketing<span
									class="icon-right-arrow"></span></NuxtLink> </li>
								<li><NuxtLink to="/news-details">UI/UX Design<span
									class="icon-right-arrow"></span></NuxtLink> </li>
								<li><NuxtLink to="/news-details">Web Development<span
									class="icon-right-arrow"></span></NuxtLink> </li>
							</ul>
						</div>
						<div class="sidebar__single sidebar__tags">
							<h3 class="sidebar__title">Tags</h3>
							<div class="sidebar__tags-list"> <NuxtLink to="/#">Education</NuxtLink> <NuxtLink to="/#">Book</NuxtLink> <NuxtLink to="/#">Collage</NuxtLink> <NuxtLink to="/#">Digital</NuxtLink> <NuxtLink to="/#">Software</NuxtLink> <NuxtLink to="/#">Language</NuxtLink> </div>
						</div>
						<div class="sidebar__single sidebar__comments">
							<h3 class="sidebar__title">Recent Comments</h3>
							<ul class="sidebar__comments-list list-unstyled">
								<li>
									<div class="sidebar__comments-icon"> <i class="fas fa-comments"></i> </div>
									<div class="sidebar__comments-text-box">
										<p>A wordpress commenter on <br>
											launch new mobile app
										</p>
									</div>
								</li>
								<li>
									<div class="sidebar__comments-icon"> <i class="fas fa-comments"></i> </div>
									<div class="sidebar__comments-text-box">
										<p> <span>John Doe</span> on template:</p>
										<h5>comments</h5>
									</div>
								</li>
								<li>
									<div class="sidebar__comments-icon"> <i class="fas fa-comments"></i> </div>
									<div class="sidebar__comments-text-box">
										<p>A wordpress commenter on <br>
											launch new mobile app
										</p>
									</div>
								</li>
								<li>
									<div class="sidebar__comments-icon"> <i class="fas fa-comments"></i> </div>
									<div class="sidebar__comments-text-box">
										<p> <span>John Doe</span> on template:</p>
										<h5>comments</h5>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Blog Details End-->
</template>