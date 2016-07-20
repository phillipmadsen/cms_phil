@extends('frontend/layout/layout')

@section('htmlschema')
itemscope itemtype="http://schema.org/Article"
@endsection

@section('seo')
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author"content="The Grace Company"/>
@endsection

@section('jsonschema')@endsection

@section('title')
TrueCut | TrueCut Section | The Grace Company
@endsection

@section('bodyschema')@endsection

@section('bodytag')
rows
@endsection

@section('header_styles')@endsection
@section('scripts')@endsection
@section('ppscripts')@endsection

@section('submenu')
    @include('frontend.pages.truecut.partials.submenu-items', ['items'=> $menu_truecut->roots()])
@endsection

@section('slider')
        <section id="slider" class="slider-parallax swiper_wrapper full-width clearfix">

            <div class="swiper-container swiper-parent">
                <div class="swiper-wrapper">
                    <div class="swiper-slide dark" style="background-image: url('{!! asset('/frontend/images/product-overviews/general-quilting/quilt-needle-close.jpg') !!}');">
                        <div class="video-overlay" style="background-color: rgba(0,0,0,0.25);"></div>
                        <div class="container clearfix">
                            <div class="slider-caption slider-caption-center">
                                <h2 data-caption-animate="fadeInUp">Take your quilting to the next level</h2>
                                <h2 data-caption-animate="fadeInUp" data-caption-delay="1000">Learn more about quilting frames</h2>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" style="background-image: url('{!! asset('/frontend/images/product-overviews/general-quilting/gq-ratched-ends.jpg') !!}');">
                        <div class="container clearfix">
                            <div class="slider-caption slider-caption" style="background-color: rgba(255,255,255,0.7); padding:20px;">
                                <h2 data-caption-animate="fadeInUp">No-Baste Quilting</h2>
                                <h3 data-caption-animate="fadeInUp" data-caption-delay="200">Learn More about the quilting rail system.</h3>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide" style="background-image: url('{!! asset('/frontend/images/slider/swiper/3.jpg') !!}'); background-position: center top;">
                        <div class="container clearfix">
                            <div class="slider-caption">
                                <h2 data-caption-animate="fadeInUp">Great Performance</h2>
                                <p data-caption-animate="fadeInUp" data-caption-delay="200">You'll be surprised to see the Final Results of your Creation &amp; would crave for more.</p>
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
@section('intro')@endsection
@section('page-title')@endsection

@section('sidebar')
    @parent

{{--  This is appended to the parent dsidebar.  --}}
@endsection

@section('content')
<section id="content">
	<div class="content-wrap" style="padding:0px;">

	<!-- intro =================================================== -->
	    <div class="container">

	        <div class="heading-block topmargin center">
	            <h1>TrueCut Rotary Cutting</h1>
	            <p class="before-heading">The Ultimate Cutting System</p>
	        </div>

	        <div class="col-sm-5"><p>TrueCut is a unique new cutting system that stretches beyond the features of other leading brands and is the ultimate solution for common cutting frustrations. TrueCut provides an easier, safer and more accurate method of cutting.</p>
	        </div>

	        <div class="col-sm-7" data-animate="fadeInRight">
	            <img src="http://placehold.it/400?text=fake+image" / alt="">
	        </div>

	    </div>


          <!---cutting edge (advancements in rotary cutting =======================================================-->

                 <div class="section parallax nomargin clearfix" style=" border-top:2px solid #B14949; border-bottom:2px solid #B14949; background-image: url('{!! asset('/frontend/images/backgrounds/paven-light-blue.png') !!}'); padding:0px; background-repeat:repeat;" data-stellar-background-ratio="0.4">
                    <div class="container clearfix">

                         <div class="row topmargin-lg bottommargin-sm">

                             <div class="col_half bottommargin center">
                                 <h3>On the Cutting Edge of Rotary Cutting</h3>
                                 <p>Leading Innovation</p>
                                 <p>New Ideas in the industry</p>
                                 <p>Redefinging rotary cutting</p>
                             </div>

                             <div class="col_half col_last">
                                 <div class="feature-box fbox-plain">
                                     <div class="fbox-icon" data-animate="bounceIn">
                                         <a href="#"><img src="{!! asset('/frontend/images/icons/features/performance.png') !!}" alt="Powerful Performance"></a>
                                     </div>
                                     <h3>Track and Guide System</h3>
                                     <p>Canvas includes tons of optimized code that are completely customizable and deliver unmatched fast performance.</p>
                                 </div>

                                 <div class="feature-box fbox-plain">
                                     <div class="fbox-icon" data-animate="bounceIn" data-delay="200">
                                         <a href="#"><img src="{!! asset('/frontend/images/icons/features/performance.png') !!}" alt="Powerful Performance"></a>
                                     </div>
                                     <h3>Safety in non-slipping</h3>
                                     <p>Canvas includes tons of optimized code that are completely customizable and deliver unmatched fast performance.</p>
                                 </div>

                                <div class="feature-box fbox-plain">
                                     <div class="fbox-icon" data-animate="bounceIn" data-delay="400">
                                         <a href="#"><img src="{!! asset('/frontend/images/icons/features/performance.png') !!}" alt="Powerful Performance"></a>
                                     </div>
                                     <h3>Stay Sharp</h3>
                                     <p>Canvas includes tons of optimized code that are completely customizable and deliver unmatched fast performance.</p>
                                 </div>
                         </div>

                         </div>

                     </div>
                 </div>

         <!--track and guide System ============================================-->
            <div class="heading-block topmargin center nobottomborder">
                <h2 class="">Keeping You On Track</h2>
                <p class="before-heading">Track&amp;Guide for Straight Cuts Every Time.</p>
            </div>


                <div>
                    <p class="center">animation goes here.</p>
                </div>

                <div class="container">
                    <p class="lead">At the heart of TrueCut is our ruler track and cutter guide system. How would you like to have a ruler and cutter that gave you straight cuts every time? On each side of the ruler is a track that works with the guide on the rotary cutter. As you move the cutter along the ruler's track, the guide keeps the cutter from veering away from the ruler's edge.
                    </p>
                </div>

		<!-- My Comfort Cutter =================================================== -->

		<div class="section parallax nomargin clearfix" style=" border-top:2px solid #B14949; border-bottom:2px solid #B14949; background-image: url('{!! asset('/frontend/images/backgrounds/greyzz.png') !!}'); padding:0px; background-repeat:repeat;" data-stellar-background-ratio="0.4">
			<div class="container">
				<div class="heading-block topmargin center">
					<h2>My Comfort Cutter</h2>
					<p class="before-heading">Taking the stress out of rotary cutting</p>
				</div>
				<div class="col-sm-5">
					<p>
						The comfort curve grip of this cutter relieves stress in the wrist and arm as you cut. The ergonomic Comfort Curve Grip aligns your wrist naturally, placing all cutting power directly over the blade and preventing stress in the wrist and arm. Cut you fabric comfortably, getting more power with less effort.
					</p>
					<p class="center">
						<img src="http://placehold.it/400?text=fake+image" / alt=""></p>
				</div>
				<div class="col-sm-7" data-animate="fadeInRight">
					<img src="http://placehold.it/400?text=fake+image" / alt=""></div>
			</div>
		</div>



   <!--sharpeners ==============================-->
                <div class="container center">
                    <div class="heading-block center">
                                    <h2>Rotary Blade Sharpeners</h2>
                                    <p class="before-heading">Stay Sharp My Freinds</p>
                    </div>
                    <p>Extend the life of your rotary blades and keep them cutting the way they should with the TrueCut rotary blade sharpeners! The secret to the success of the sharpeners are the high-quality sharpening stones. The same tools and methods that have been used to sharpen blades for centuries have now been adapted for sharpening your rotary blades!</p>
                </div>

                <div class="row">
                    <div class="col_half center">
                        <h3>TrueSharp Sharpener</h3>
                        <p class="before-heading">Electric Power Rotary Blade Sharpener</p>
                        <img src="electric-sharpener.png">
                        <a href="/rotary-cutting/truesharp.html" class="button button-rounded button-secondary">Learn More</a>
                    </div>

                    <div class="col_half col_last center">
                        <h3>TrueCut Linear Sharpener</h3>
                        <p class="before-heading">Manual Rotary Blade Sharpener</p>
                    <img src="manual-sharpener.png">
                    <a href="/rotary-cutting/truesharp.html" class="button button-rounded button-secondary">Learn More</a>
                    </div>
                </div>


<!--products ============================-->

                <div class="container clearfix">

                        <div class="row bottommargin-sm">
                            <div class="heading-block center nomargin">
                                <h2>TrueCut Rotary Cutting Products</h2>
                            </div>
                        </div>
                        <div class="row topmargin-sm clearfix">
                            <div class="col_one_fourth">
                                 <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                                     <h5 class="center">My Comfort Cutter</h5>
                                </div>
                                <img src="{!! asset('/frontend/images/product-overviews/thumbs/comfort-cutter-thumb-blue.jpg') !!}" />
                                <a href="#" class="button button-rounded button-secondary">Learn More</a>
                                Or
                                <a href="#" class="button button-rounded">Buy Now</a>

                            </div>

                            <div class="col_one_fourth">
                                 <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                                     <h5 class="center">StraightCut Cutter</h5>
                                </div>
                                <img src="{!! asset('/frontend/images/product-overviews/thumbs/straightcut-thumb.jpg') !!}" alt="Gracie King and Queen Machine Quilting Frame" />
                                <a href="#" class="button button-rounded button-secondary">Learn More</a>
                                Or
                                <a href="#" class="button button-rounded">Buy Now</a>

                            </div>

                            <div class="col_one_fourth">
                                 <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                                     <h5 class="center">Rotary Cutting Rulers</h5>
                                </div>
                                <img src="{!! asset('/frontend/images/product-overviews/thumbs/rulers-thumb.jpg') !!}" alt="Gracie King and Queen Machine Quilting Frame" />
                                <a href="#" class="button button-rounded button-secondary">Learn More</a>
                                Or
                                <a href="#" class="button button-rounded">Buy Now</a>

                            </div>

                            <div class="col_one_fourth col_last">
                                 <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                                     <h5 class="center">Cutting Mats</h5>
                                </div>
                                <img src="{!! asset('/frontend/images/product-overviews/thumbs/cutting-mats.jpg') !!}" alt="" />
                                <a href="#" class="button button-rounded button-secondary">Learn More</a>
                                Or
                                <a href="#" class="button button-rounded">Buy Now</a>

                            </div>

                        </div><!--end first row-->

                        <div class="row topmargin-sm clearfix">
                            <div class="col_one_fourth">
                                 <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                                     <h5 class="center">Non-Slip Pads</h5>
                                </div>
                                <img src="{!! asset('/frontend/images/product-overviews/thumbs/non-slip-pads.jpg') !!}" />
                                <a href="#" class="button button-rounded button-secondary">Learn More</a>
                                Or
                                <a href="#" class="button button-rounded">Buy Now</a>

                            </div>

                            <div class="col_one_fourth">
                                 <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                                     <h5 class="center">TrueSharp Sharpener</h5>
                                </div>
                                <img src="{!! asset('/frontend/images/product-overviews/thumbs/truesharp.jpg') !!}" />
                                <a href="#" class="button button-rounded button-secondary">Learn More</a>
                                Or
                                <a href="#" class="button button-rounded">Buy Now</a>

                            </div>

                            <div class="col_one_fourth">
                                 <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                                     <h5 class="center">Linear Sharpener</h5>
                                </div>
                                <img src="{!! asset('/frontend/images/product-overviews/thumbs/linear-sharpener.jpg') !!}" />
                                <a href="#" class="button button-rounded button-secondary">Learn More</a>
                                Or
                                <a href="#" class="button button-rounded">Buy Now</a>

                            </div>

                            <div class="col_one_fourth col_last">
                                 <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                                     <h5 class="center">Sharpening Accessories</h5>
                                </div>
                                <img src="{!! asset('/frontend/images/product-overviews/thumbs/shrapening-acc-thumb.jpg') !!}" alt="" />
                                <a href="#" class="button button-rounded button-secondary">Learn More</a>
                                Or
                                <a href="#" class="button button-rounded">Buy Now</a>

                            </div>

                        </div><!--end second row-->

                        <div class="row topmargin-sm clearfix">
                            <div class="col_one_fourth">
                                 <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                                     <h5 class="center">TrueGrips</h5>
                                </div>
                                <img src="{!! asset('/frontend/images/product-overviews/thumbs/truegrips-thumb.jpg') !!}" />
                                <a href="#" class="button button-rounded button-secondary">Learn More</a>
                                Or
                                <a href="#" class="button button-rounded">Buy Now</a>

                            </div>

                            <div class="col_one_fourth">
                                 <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                                     <h5 class="center">Rotary Blades</h5>
                                </div>
                                <img src="{!! asset('/frontend/images/product-overviews/thumbs/blade-thumbs.jpg') !!}" />
                                <a href="#" class="button button-rounded button-secondary">Learn More</a>
                                Or
                                <a href="#" class="button button-rounded">Buy Now</a>

                            </div>

                            <div class="col_one_fourth">
                                 <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                                     <h5 class="center">Cutting Table</h5>
                                </div>
                                <img src="{!! asset('/frontend/images/product-overviews/thumbs/combos-thumb.jpg') !!}" />
                                <a href="#" class="button button-rounded button-secondary">Learn More</a>
                                Or
                                <a href="#" class="button button-rounded">Buy Now</a>

                            </div>

                            <div class="col_one_fourth col_last">
                                 <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                                     <h5 class="center">Rotary Cutting Combos</h5>
                                </div>
                                <img src="{!! asset('/frontend/images/product-overviews/thumbs/table-thumb.jpg') !!}" alt="" />
                                <a href="#" class="button button-rounded button-secondary">Learn More</a>
                                Or
                                <a href="#" class="button button-rounded">Buy Now</a>

                            </div>

                        </div><!--end third row-->



                    </div>



	</div>
</section>
@endsection

@section('footer_scripts')@endsection
@section('pp_footer_scripts')@endsection
@section('inlinejs')@endsection