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

@section('jsonschema')@endsection

@section('bodytag')
rows
@endsection

@section('title')
Machine Quilting Frames | The Grace Company
@endsection

@section('bodyschema')@endsection

@section('header_styles')@endsection
@section('scripts')@endsection
@section('ppscripts')@endsection

@section('submenu')
    @include('frontend.pages.machine-frames.partials.submenu')
@endsection

@section('slider')
        <section id="slider" class="slider-parallax swiper_wrapper full-width clearfix">

            <div class="swiper-container swiper-parent">
                <div class="swiper-wrapper">
                    <div class="swiper-slide dark" style="background-image: url('{!! url('frontend/images/product-overviews/general-quilting/quilt-needle-close.jpg') !!}');">
                        <div class="video-overlay" style="background-color: rgba(0,0,0,0.25);"></div>
                        <div class="container clearfix">
                            <div class="slider-caption slider-caption-center">
                                <h2 data-caption-animate="fadeInUp">Take your quilting to the next level</h2>
                                <h2 data-caption-animate="fadeInUp" data-caption-delay="1000">Learn more about quilting frames</h2>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" style="background-image: url('{!! url('frontend/images/product-overviews/general-quilting/gq-ratched-ends.jpg') !!}');">
                        <div class="container clearfix">
                            <div class="slider-caption slider-caption" style="background-color: rgba(255,255,255,0.7); padding:20px;">
                                <h2 data-caption-animate="fadeInUp">No-Baste Quilting</h2>
                                <h3 data-caption-animate="fadeInUp" data-caption-delay="200">Learn More about the quilting rail system.</h3>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide" style="background-image: url('{!! url('frontend/images/slider/swiper/3.jpg') !!}'); background-position: center top;">
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


@section('slider')@endsection
@section('intro')@endsection
@section('page-title')@endsection

@section('sidebar')
    @parent

{{--  This is appended to the parent dsidebar.  --}}
@endsection

@section('content')
<article>
 <!-- Content ============================================= -->
        <section id="content">

            <div class="content-wrap" style="padding:0px;">
         <!--Frames parallax =================================================== -->


                <div class="section parallax dark nomargin" style=" border-top:14px solid #B14949; border-bottom:14px solid #B14949;
                background-image: url('{!! url('frontend/images/product-overviews/general-quilting/three-frames.jpg') !!}');padding:0px 0px 0px 100px;" data-stellar-background-ratio="0.4">
                   <div class="col_one_third nomargin" style="background-color: rgba(0,0,0,0.6); padding:75px 15px;">
                        <div class="heading-block topmargin nobottommargin">
                            <h3>Creative Freedom for Machine Quilters</h3>
                        </div>

                        <p>Quilting frames have come a long way from their humble beginnings. Modern day quilters rely on their frames to make each of their projects easier, more convenient and more beautiful! Wheter you are a professional or a hobbyist, and no-matter what kind of quilting machine you use, there is a quilting frame that would work for you!</p>
                    </div>

                </div>

                <!--Rail System ============================================-->
                <div class="section notopmargin">
                    <div class="container clear-bottommargin clearfix">
                        <div class="heading-block center">
                                    <h2>Quilting Frame Rail Sysytem</h2>
                        </div>

                        <div class="row topmargin-sm clearfix">

                            <div data-animate="fadeInUp" class="col-md-4 bottommargin">
                                <img style="padding-bottom:15px;" src="{!! url('frontend/images/product-overviews/general-quilting/gq-ratched-ends-400.png') !!}" alt="No-baste quilting rail system" />
                                <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                                    <span class="before-heading">No Baste is the Best Baste</span>
                                    <h4>No-Baste Rail System</h4>
                                </div>
                                <p>All of the Grace Frames utilize an innovative no-baste rail system to make the quilting process easier. All the quilt layers come together and are rolled on to the take-up rail as you quilt. Some frames come with an additonal 4th rail that is convenient to roll the batting layer on and keep it off of the floor.</p>
                            </div>

                            <div data-animate="fadeInUp" data-delay="200" class="col-md-4 bottommargin">
                               <img style="padding-bottom:15px;" src="{!! url('frontend/images/product-overviews/general-quilting/fabri-fast-400.png') !!}" alt="Fabri-fast rails in use" />
                                <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                                    <span class="before-heading">Easy Fabric Loading</span>
                                    <h4>Fabri-Fast Rails</h4>
                                </div>
                                <p>The unique Grace Company Fabri-Fast rails make attaching fabric to your rails a breeze. No need for quilting tacks, ties, or tape! It’s as easy as sliding the fabric into the rail slot with the provided Fabri-Fast tool. Fabric is held securely in the slot by a Fabri-Fast tube.</p>
                            </div>

                            <div data-animate="fadeInUp" data-delay="400" class="col-md-4 bottommargin">
                                <img style="padding-bottom:15px;" src="{!! url('frontend/images/product-overviews/general-quilting/quilt-clips-400.png') !!}" alt="Quilt Clips for quilting frames" />
                                <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                                    <span class="before-heading">Quickest New Way to Manage Fabric Tension and Control</span>
                                    <h4>Start-Right Quilt-Clips (Accessory)</h4>
                                </div>
                                <p>Democracy inspire breakthroughs, Rosa Parks; inspiration raise awareness natural resources. Governance impact; transformative donation philanthropy, respect reproductive.</p>
                            </div>

                        </div>

                    </div>
                </div>

                <!--carriage/tracks=== ==================================================-->
                <!--tracks parallax-->
                <div class="container clearfix bottommargin-sm">
                    <div class="row">

                        <div class="col-lg-5">
                            <div class="heading-block">
                                <h3>Track and Carriage System</h3>
                                <p class="before-heading">A smooth ride for quality quilting</p>
                            </div>
                            <p class="lead">
      					Grace Frames are known for the smooth and fluid feel of their track and carriage system. When using a machine quilting frame, your serwing machine sits on a carriage, which rolls back and forth on a track. Grace frames utilize smooth ball bearings in high-quality steel wheels that practically glide along the plastic tracks in the frame.
      		        </p>

                        </div>

                        <div class="col-lg-7">
                            <img src="{!! url('frontend/images/product-overviews/general-quilting/track-wheels-cropped.jpg') !!}" data-animate="fadeIn" alt="Quilting Frame Tracks">
                        </div>
                    </div>
                </div>


                <!---Frame Features =======================================================-->
                 <div class="container clearfix">

                    <div class="row topmargin-lg bottommargin-sm">

                        <div class="center">
                            <h2>More Machine Quiltng Frame Features</h2>
                        </div>
                        <div class="col-md-5 col-sm-6 bottommargin">

                            <div class="feature-box fbox-right topmargin" data-animate="fadeIn">
                                <div class="fbox-icon">
                                    <img src="{!! url('frontend/images/product-overviews/general-quilting/bungees-square-300.jpg') !!}" />
                                </div>
                                <h3>Bungee Clamps</h3>
                                <p>Each Grace Machine Quilting Frame comes with a set of four bungee clamps. These are ideal for achieving a good balanced tension throughout the quilt.</p>
                            </div>

                            <div class="feature-box fbox-right topmargin" data-animate="fadeIn" data-delay="200">
                                <div class="fbox-icon">
                                    <img src="{!! url('frontend/images/product-overviews/general-quilting/speed-control-square-300.jpg') !!}" />
                                </div>
                                <h3>Speed Control</h3>
                                <p>The Speed Control lets you adjust the constant stitching speed of your machine as you quilt. It plugs into your machines foot pedal port. </p>
                            </div>
                        </div>

                        <div class="col-md-2 hidden-sm bottommargin center">
                            <img src="{!! url('frontend/images/product-overviews/general-quilting/frames-stacked.png') !!}" alt="Machine Quilting Frames">
                        </div>

                        <div class="col-md-5 col-sm-6 bottommargin">

                            <div class="feature-box topmargin" data-animate="fadeIn">
                                <div class="fbox-icon">
                                    <img src="{!! url('frontend/images/product-overviews/general-quilting/pro-carriage-square-300.jpg') !!}" />
                                </div>
                                <h3>Pro Series Carriage</h3>
                                <p>The Grace Professional Series Carriage lets you use your domestic quilting machine on a frame. It comes with compfort-grip handles, accessory holders, and the smooth motion Grace Frames are known for.</p>
                            </div>

                            <div class="feature-box topmargin" data-animate="fadeIn" data-delay="200">
                                <div class="fbox-icon">
                                    <img src="{!! url('frontend/images/product-overviews/general-quilting/ppp-square-300.png') !!}" />
                                </div>
                                <h3>Accessories</h3>
                                <p>Each quilting frame is compatible with a variety of fun and convenient accessories for machine quilting.</p>
                            </div>

                        </div>

                    </div>

                </div>

                <!--frames  ============================-->
                <a class="button button-full button-dark center tright bottommargin-sm" href="compare-machine-frames/">
                    <div class="container clearfix">
                        Which frame is right for you? <strong>Compare Machine Quilting Frames</strong> <i class="icon-caret-right" style="top:4px;"></i>
                    </div>
                </a>

                <div class="container clearfix">

                        <div class="row bottommargin-sm">
                            <div class="heading-block center nomargin">
                                <h1>Grace Machine Quilting Frames</h1>
                            </div>
                        </div>
                        <div class="row topmargin-sm clearfix">
                            <div class="col_one_third">
                                 <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                                     <h5 class="center">GQ Frame</h5>
                                </div>
                                <img src="{!! url('frontend/images/product-overviews/gq-frame/gq--frame-438.png') !!}" alt="Grace GQ Machine Quilting Frame" />
                                <a href="{!! url('/') !!}/machine-frames/gq-frame/" class="button button-rounded button-secondary">Learn More</a>
                                Or
                                <a href="{!! url('/') !!}/machine-frames/gq-frame/" class="button button-rounded">Buy Now</a>

                            </div>

                            <div class="col_one_third">
                                 <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                                     <h5 class="center">Gracie King Or Queen</h5>
                                </div>
                                <img src="{!! url('frontend/images/product-overviews/general-quilting/gracie-king-queen-438.png') !!}" alt="Gracie King and Queen Machine Quilting Frame" />
                                <a href="{!! url('/') !!}/machine-frames/gracie-king/" class="button button-rounded button-secondary">Learn More</a>
                                Or
                                <a href="{!! url('/') !!}/machine-frames/gq-frame/" class="button button-rounded">Buy Now</a>

                            </div>

                            <div class="col_one_third col_last">
                                 <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                                     <h5 class="center">SR-2 Frame</h5>
                                </div>
                                <img src="{!! url('frontend/images/product-overviews/sr-2-frame/sr-2-frame-438.png') !!}" alt="SR-2 Machine Quilting Frame" />
                                <a href="{!! url('/') !!}/machine-frames/sr-2-frame/" class="button button-rounded button-secondary">Learn More</a>
                                Or
                                <a href="{!! url('/') !!}/machine-frames/gq-frame/" class="button button-rounded">Buy Now</a>

                            </div>



                        </div>
                    </div>




            </div><!-- .content-wrap end  -->

        </section><!-- #content end -->
</article>
    <script type="text/javascript">
        jQuery(window).load(function(){
            $('#page-menu a').click(function(){
                $('#page-menu li').removeClass('current');
                $(this).parent('li').addClass('current');
                var selector = $(this).attr('data-filter');
                $container.isotope({ filter: selector });
                return false;
            });
            $(window).resize(function() {
                $container.isotope('layout');
            });
        });

    </script>
    <script type="text/javascript">
    $(document).on('click','#testNav', function(){
        $.ajax({
            url: rootPath + '/_ajax/_compare',
            type: "GET", // not POST, laravel won't allow it
            success: function(data){
              $data = $(data); // the HTML content your controller has produced
              $('#content').fadeOut().html($data).fadeIn();
              }
          });
        });

</script>
@endsection

@section('footer_scripts')@endsection
@section('pp_footer_scripts')@endsection
@section('inlinejs')@endsection