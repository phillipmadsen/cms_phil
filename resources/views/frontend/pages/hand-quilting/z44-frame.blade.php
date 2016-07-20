@extends('frontend/layout/layout')
@section('htmlschema')
itemscope itemtype="http://schema.org/Article"
@endsection

@section('bodyschema')@endsection

@section('seo')
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author"content="The Grace Company"/>
@endsection

@section('jsonschema')
  {{-- @include('frontend/pages/hand-quilting/partials/z44microjson') --}}
  {{-- http://linter.structured-data.org/examples/google-rs/Product/ --}}
@endsection

@section('bodytag')
rows
@endsection

@section('header_styles')@endsection
@section('scripts')@endsection
@section('ppscripts')@endsection

@section('submenu')
@include('frontend.layout.partials.menu.submenu-items', ['items'=> $menu_hand->roots()])
@endsection

@section('slider-off')
      <section id="slider" class="slider-parallax swiper_wrapper full-width clearfix">

            <div class="swiper-container swiper-parent">
                <div class="swiper-wrapper">
                    <div class="swiper-slide dark" style="background-image: url('{!! asset('/frontend/images/product-overviews/general-quilting/hand-stitch.jpg') !!}');">
                        <div class="video-overlay" style="background-color: rgba(0,0,0,0.25);"></div>
                        <div class="container clearfix">
                            <div class="slider-caption slider-caption-left">
                                <h2 data-caption-animate="fadeInUp">Grace Hand Quilting</h2>
                                <h3 style="font-style:italic" data-caption-animate="fadeInUp" data-caption-delay="1000">Our quilting roots run deep</h3>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" style="background-image: url('{!! asset('/frontend/images/product-overviews/hand-quilting-general/z44-close-bg.jpg') !!}');">
                        <div class="container clearfix">
                            <div class="slider-caption" style="background-color: rgba(255,255,255,0.7); padding:20px;">
                                <h2 data-caption-animate="fadeInUp">No-Baste Quilting</h2>
                                <h3 data-caption-animate="fadeInUp" data-caption-delay="200">Learn More about the quilting rail system.</h3>
                            </div>
                        </div>
                    </div>

                     <div class="swiper-slide" style="background-image: url('{!! asset('/frontend/images/product-overviews/hand-quilting-general/leaders-pin-bg.jpg') !!}');">
                        <div class="container clearfix">
                            <div class="slider-caption slider-caption-right" style="background-color: rgba(255,255,255,0.7); padding:20px;">
                                <h2 data-caption-animate="fadeInUp">Grace Cloth Leaders</h2>
                                <h3 data-caption-animate="fadeInUp" data-caption-delay="200">And other quilting accessories</h3>
                            </div>
                        </div>
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
@endsection
@section('pagetitle')
	{{-- @include('frontend/layout/temp-title')  --}}
@endsection
@section('content')


<!-- Content ============================================= -->
<section id="content">
	<div class="content-wrap" style="padding:0px;">

	    	<div class="container clearfix">
	                            <div class="row">
	                                <div class="heading-block center topmargin">
	                                        <h3 class="accent">The Z44 Hand Quilting Frame</h3>
	                                        <p class="before-heading">The most adjustable frame on the market</p>
	                                    </div>

	                                <div class="col-md-8" >
	                                    <img src="{!! asset('/frontend/images/product-overviews/z44/z44-king-size-main.jpg') !!}" data-animate="fadeIn" alt="Z44 No-Baste Frame ">
	                                </div>

	                                <div class="col-md-4 col-last">
	                                    <p class="lead">
	                                        The Z44 is our top of the line, no-baste hand quilting frame, as well as the most adjustable frame on the market. You can set the included height-adjustable legs to your level without the need of any tools! The work area also tilts to six different angles, letting you work in the most comfortable position. The Z44 is also durable and designed to withstand heavy use. Made with a beautifully crafted Baltic Birch wood, this is yet another way Grace quilting frames combine style and functionality.
	                            </p>
	                                </div>


	                            </div>
	                        </div>


















 <!-- parallax =================================================== -->


                <div class="section parallax nomargin clearfix" style=" border-top:2px solid #B14949; border-bottom:2px solid #B14949; background-image: url('{!! asset('/frontend/images/backgrounds/paven-light-blue.png') !!}'); padding:0px; background-repeat:repeat;" data-stellar-background-ratio="0.4">
                       <div class="row">
                            <div class="col-md-7" style="padding:0px;">
                              <img src="{!! asset('/frontend/images/product-overviews/z44/z44-nobaste.png') !!}" alt="No-Baste Frame Rails for Quilting" />
                            </div>

                            <div class="col-md-3 nomargin" style="padding:20px 10px;">
                                <div class=" center heading-block topmargin bottommargin-sm">
                                    <h3>Innovative No-Baste System</h3>
                                    <p class="before-heading">Having to baste is such a waste</p>
                                </div>

                                   <p>The 3 sturdy aluminum rails and precision ratchets make it easy to handle your fabric and tension without basting! Each of the main rails has a 50 tooth ratchet for superior tension control. Each layer of fabric is rolled on to its own rail, with all of them coming together on a "take-up" rail as you quilt.
                                   </p>
                            </div>
                        </div>

                </div>









<!--adjustability =========================================-->
<section>
	<div class="heading-block center nobottomborder nobottommargin toppadding bottompadding-sm clearfix" style="background-image: url('{!! asset('/frontend/images/backgrounds/greyzz.png') !!}'); background-repeat:repeat;">
		<h3>Quilt in the most comfortable position</h3>
		<p class="lead nobottommargin">Adjustability so you can work the way like best</p>
	</div>
	<div class="fslider" data-easing="easeInQuad" slideshow="false">
		<div class="flexslider">
			<div class="slider-wrap">
				<div class="slide">
					<img src="{!! asset('/frontend/images/product-overviews/z44/z44-height.jpg') !!}" alt="Z44 Adjustable Height">
					<div class="flex-caption slider-caption-bg slider-caption-bg slider-caption-top-right"> <strong>Height Adjustable</strong>
						<br>
						Raise and lower the work area of the Z44 to one of 8 positions in a foot of adjustability. You can quilt while sitting or standing!
					</div>
				</div>
				<div class="slide">
					<img src="{!! asset('/frontend/images/product-overviews/z44/z44-width.jpg') !!}" alt="Z44 4 Widths">
					<div class="flex-caption slider-caption-bg slider-caption-top-left"> <strong>Like Four Frames In One!</strong>
						<br>
						Set the Z44 up in one of four possible widths. No-matter your project size, it is always recommended to set the frame up as large as your quilting room will allow.
					</div>
				</div>
				<div class="slide">
					<img src="{!! asset('/frontend/images/product-overviews/z44/z44-tilt.jpg') !!}" alt="Z44 adjustable tilt angle">
					<div class="flex-caption slider-caption-bg slider-caption-bg slider-caption-bottom-right">
						<strong>Working From The Best Angle</strong>
						<br>
						Weather you are sitting or standing, you can tilt the work area of the Z44 to one of 6 different angles for maximum comfort and reduced stress in the shoulders and back.
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!--Other Features ================================-->
<div class="container clearfix topmargin bottommargin">
	<div class="heading-block center">
		<h3>Other Z44 Features</h3>
	</div>
	<div class="row clearfix">
		<div class="col_half  nobottommargin">
			<div class="feature-box center media-box fbox-bg">
				<div class="fbox-media">
					<img src="{!! asset('/frontend/images/product-overviews/z44/z44-feature-fold.jpg') !!}" alt="Z44 Folding Quilting Frame"></div>
				<div class="fbox-desc">
					<div class="heading-block" style="margin-bottom: 15px;">
						<h4>Folds for easy storage</h4>
					</div>
					<p>
						Fold the Z44 for space-saving storage, even with your project still attached!
					</p>
				</div>
			</div>
		</div>
		<div class="col_half col_last nobottommargin">
			<div class="feature-box center media-box fbox-bg">
				<div class="fbox-media">
					<img src="{!! asset('/frontend/images/product-overviews/z44/z44-feature-fourth-rail.jpg') !!}" alt="Fourth Rail"></div>
				<div class="fbox-desc">
					<div class="heading-block" style="margin-bottom: 15px;">
						<h4>Fourth Rail Included</h4>
					</div>
					<p>
						The Fabri-Fast™ slots and tubing make attaching your fabric easy, without the use of tacks, ties, or tape!
					</p>
				</div>
			</div>
		</div>
	</div>
</div>












<!--specs ======================-->
<h2 class="toppadding-sm bottompadding-sm center bgcolor-second dark nobottommargin">Z44 Frame Specs</h2>
<div class="section parallax nomargin" style="background-image: url('{!! asset('/frontend/images/backgrounds/square_bg.png') !!}'); background-repeat:repeat; padding-top:0px;" data-stellar-background-ratio="0.4">
	<div class="container">
		<div class="col-sm-6 topmargin">
			<p class="center lead">
				The Quilting Area is the maximim size quilt you can work with on your frame. It is determined by the length of the rails, and extra space needed on the sides for bungee clampls. It is always recommended that you set your quilt up in the largest size that you can in your quilting room.
			</p>
		</div>
		<div class=" col-sm-6 topmargin center">
			<div data-animate="fadeInRight" class="col-xs-6">
				<div class="feature-box fbox-center fbox-outline fbox-effect nobottomborder">
					<div class="fbox-icon"> <i class="icon-th-large"></i>
					</div>
				</div>
				<h3 class="nobottommargin">Maximum Quilt Area</h3>
				<div class="col-xs-3">
					<p class="nomargin">King:</p>
					<p class="nomargin">108"</p>
				</div>
				<div class="col-xs-3">
					<p class="nomargin">Queen:</p>
					<p class="nomargin">106"</p>
				</div>
				<div class="col-xs-3">
					<p class="nomargin">Twin:</p>
					<p class="nomargin">81"</p>
				</div>
				<div class="col-xs-3">
					<p class="nomargin">Crib:</p>
					<p class="nomargin">67"</p>
				</div>
			</div>
			<div data-animate="fadeInRight" data-delay="200" class="col-xs-6">
				<div class="feature-box fbox-center fbox-outline fbox-effect nobottomborder">
					<div class="fbox-icon"> <i class="icon-settings"></i>
					</div>
				</div>
				<h3 class="nobottommargin">Rail Diameter</h3>
				<p>1&frac12; inches</p>
			</div>
		</div>
		<img data-animate="fadeIn" src="{!! asset('/frontend/images/product-overviews/sr-2-frame/sr2-frame-sizes-RGBwebresized.png') !!}" alt="SR2 frame size" />
	</div>
</div>





<!--frames compared ====================================-->
<div class="row bottommargin-sm" style="border-top:2px solid #b14949;">
	<div class="heading-block center topmargin nobottomborder">
		<h2>Grace No-Baste Hand Frames</h2>
	</div>
</div>
<div class="container topmargin-sm clearfix center">
	<div class="col-sm-6 bottommargin-sm">
		<h4 class="nobottommargin">Z44 Frame</h4>
		<img src="{!! asset('/frontend/images/product-overviews/z44/z44-450px.jpg') !!}" alt="Z44 Hand Quilting Frame King Size" />
		<div class="row">
			<a href="{!! url('/') !!}/hand-quilting/z44-frame/" class="button button-rounded button-secondary button-small">See More</a>
			Or
			<a href="{!! url('/') !!}" class="button button-rounded button-small">Buy Now</a>
		</div>
	</div>
	<div class="col-sm-6 bottommargin-sm">
		<h4 class="nobottommargin">Start-Right EZ3 Frame</h4>
		<img src="{!! asset('/frontend/images/product-overviews/ez3/EZ3-450px.jpg') !!}" alt="EZ3 Hand Quilting Frame" />
		<div class="row">
			<a href="{!! url('/') !!}/hand-quilting/start-right-ez3/" class="button button-rounded button-secondary button-small">See More</a>
			Or
			<a href="{!! url('/') !!}" class="button button-rounded button-small">Buy Now</a>
		</div>
	</div>
</div>







<!--Compare section ===================================-->
<a class="button button-full button-dark center tright bottommargin-sm" >
	<div class="container clearfix"> <strong>Compare All Hand Quilting Products</strong> <i class="icon-caret-right" style="top:4px;"></i>
	</div>
</a>








	</div>
</section><!-- #content end -->

@endsection

@section('footer_scripts')@endsection
@section('pp_footer_scripts')@endsection
@section('inlinejs')@endsection
