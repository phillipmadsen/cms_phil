<section id="slider" class="slider-parallax swiper_wrapper full-width clearfix" itemprop="associatedMedia">
<div class="swiper-container swiper-parent" itemscope itemtype="http://schema.org/ImageObject">
<div class="swiper-wrapper">
	<div itemprop="contentURL" class="swiper-slide dark" style="background-image: url('{!! asset('frontend/images/product-overviews/qct/slider-ui.jpg') !!}');">
			<div class="slider-caption slider-caption-center" style="float:right;" itemprop="caption">
				<h2 data-caption-animate="fadeInUp">New Simplified Interface</h2>
				<p data-caption-animate="fadeInUp" data-caption-delay="200">Even more powerful, and yet, easier.</p>
			</div>
	</div>
	<div class="swiper-slide dark">
		<div class="container clearfix">
			<div class="slider-caption slider-caption-center" itemprop="caption">
				<h2 data-caption-animate="fadeInUp">All The Professional Longarm Features</h2>
				<h2 data-caption-animate="fadeInUp" data-caption-delay="1000">AT A MIDARM PRICE</h2>
			</div>
		</div>
		<div class="video-wrap">
			<video poster="{!! asset('frontend/images/videos/qnique-overview-poster.jpg') !!}" preload="auto" loop autoplay muted>
				<source src="{!! asset('frontend/images/videos/qnique-video-background.mp4') !!}" type='video/mp4' />
				<source src="{!! asset('frontend/images/videos/qnique-video-background.webm') !!}" type='video/webm' />
			</video>
			<div class="video-overlay" style="background-color: rgba(0,0,0,0.55);"></div>
		</div>
	</div>
	 <div class="swiper-slide dark">
		<div class="container clearfix">
			<div class="slider-caption slider-caption-center" itemprop="caption">
				<h2 data-caption-animate="fadeInUp">Trace Your Favorite Photographs!</h2>
				<p data-caption-animate="fadeInUp" data-caption-delay="1000">Turn any photo into a pattern</p>
			</div>
		</div>
		<div class="video-wrap">
			<video poster="{!! asset('/frontend/images/product-overviews/qct/trace-poster.jpg') !!}" preload="auto" loop autoplay muted>
				<source src="{!! asset('/frontend/images/product-overviews/qct/trace-slider.mp4') !!}" type='video/mp4' />
				<source src="{!! asset('/frontend/images/product-overviews/qct/trace-slider.webm') !!}" type='video/webm' />
			</video>
			<div class="video-overlay" style="background-color: rgba(0,0,0,0.55);"></div>
		</div>
	</div>
	<div itemprop="contentURL" class="swiper-slide dark" style="background-image: url('{!! asset('frontend/images/product-overviews/qct/short-v-long.jpg') !!}');">
		<div class="container clearfix">
			<div class="slider-caption slider-caption-center" itemprop="caption">
				<h2 data-caption-animate="fadeInUp">From Domestic to Long-Arm</h2>
				<p data-caption-animate="fadeInUp" data-caption-delay="200">QCT is compatible with a wide variety of quilting machines and frames.
					<br /><a href="#" class="button button-border button-rounded" >See a full list here.</a></p>
			</div>
		</div>
		<div class="video-overlay" style="background-color: rgba(0,0,0,0.55);" data-caption-animate="fadeInUp"></div>
	</div>
</div>
<div id="slider-arrow-left"><i class="icon-angle-left"></i></div>
<div id="slider-arrow-right"><i class="icon-angle-right"></i></div>
</div>
<script>
jQuery(document).ready(function($){
	var swiperSlider = new Swiper('.swiper-parent',{
		paginationClickable: false,
		slidesPerView: 1,
		grabCursor: true,
		loop: true,
		onSwiperCreated: function(swiper){
			$('[data-caption-animate]').each(function(){
				var $toAnimateElement = $(this);
				var toAnimateDelay = $(this).attr('data-caption-delay');
				var toAnimateDelayTime = 0;
				if( toAnimateDelay ) { toAnimateDelayTime = Number( toAnimateDelay ) + 750; } else { toAnimateDelayTime = 750; }
				if( !$toAnimateElement.hasClass('animated') ) {
					$toAnimateElement.addClass('not-animated');
					var elementAnimation = $toAnimateElement.attr('data-caption-animate');
					setTimeout(function() {
						$toAnimateElement.removeClass('not-animated').addClass( elementAnimation + ' animated');
					}, toAnimateDelayTime);
				}
			});
			SEMICOLON.slider.swiperSliderMenu();
		},
		onSlideChangeStart: function(swiper){
			$('[data-caption-animate]').each(function(){
				var $toAnimateElement = $(this);
				var elementAnimation = $toAnimateElement.attr('data-caption-animate');
				$toAnimateElement.removeClass('animated').removeClass(elementAnimation).addClass('not-animated');
			});
			SEMICOLON.slider.swiperSliderMenu();
		},
		onSlideChangeEnd: function(swiper){
			$('#slider').find('.swiper-slide').each(function(){
				if($(this).find('video').length > 0) { $(this).find('video').get(0).pause(); }
				if($(this).find('.yt-bg-player').length > 0) { $(this).find('.yt-bg-player').pauseYTP(); }
			});
			$('#slider').find('.swiper-slide:not(".swiper-slide-active")').each(function(){
				if($(this).find('video').length > 0) {
					if($(this).find('video').get(0).currentTime != 0 ) $(this).find('video').get(0).currentTime = 0;
				}
				if($(this).find('.yt-bg-player').length > 0) {
					$(this).find('.yt-bg-player').getPlayer().seekTo( $(this).find('.yt-bg-player').attr('data-start') );
				}
			});
			if( $('#slider').find('.swiper-slide.swiper-slide-active').find('video').length > 0 ) { $('#slider').find('.swiper-slide.swiper-slide-active').find('video').get(0).play(); }
			if( $('#slider').find('.swiper-slide.swiper-slide-active').find('.yt-bg-player').length > 0 ) { $('#slider').find('.swiper-slide.swiper-slide-active').find('.yt-bg-player').playYTP(); }
			$('#slider .swiper-slide.swiper-slide-active [data-caption-animate]').each(function(){
				var $toAnimateElement = $(this);
				var toAnimateDelay = $(this).attr('data-caption-delay');
				var toAnimateDelayTime = 0;
				if( toAnimateDelay ) { toAnimateDelayTime = Number( toAnimateDelay ) + 300; } else { toAnimateDelayTime = 300; }
				if( !$toAnimateElement.hasClass('animated') ) {
					$toAnimateElement.addClass('not-animated');
					var elementAnimation = $toAnimateElement.attr('data-caption-animate');
					setTimeout(function() {
						$toAnimateElement.removeClass('not-animated').addClass( elementAnimation + ' animated');
					}, toAnimateDelayTime);
				}
			});
		}
	});
	$('#slider-arrow-left').on('click', function(e){
		e.preventDefault();
		swiperSlider.swipePrev();
	});
	$('#slider-arrow-right').on('click', function(e){
		e.preventDefault();
		swiperSlider.swipeNext();
	});
});
</script>
</section>
