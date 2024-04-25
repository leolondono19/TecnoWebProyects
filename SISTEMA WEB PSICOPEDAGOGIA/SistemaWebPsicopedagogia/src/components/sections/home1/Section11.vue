<template>
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
</template>