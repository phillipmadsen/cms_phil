@extends('frontend/layout/layout')

@section('htmlschema')
itemscope itemtype="http://schema.org/Article"
@endsection

@section('bodyschema')
@endsection

@section('seo')
    <meta name="description" content="welcome to the Hand Quilting section of the new Grace Company Website">
    <meta name="keywords" content="the grace company, hand quilting frame, grace frames, grace hand frames, grace and sewing frames, sewing hoops, lap hoops">
    <meta name="author" content="The Grace Company"/>
@endsection

@section('jsonschema')
@endsection

@section('bodytag')
    rows
@endsection

@section('header_styles')
<!-- SLIDER REVOLUTION 5.x CSS SETTINGS -->
{{--     <link rel="stylesheet" type="text/css" href="{!! asset('/frontend/include/rs-plugin/css/settings.css') !!}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{!! asset('/frontend/include/rs-plugin/css/layers.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('/frontend/include/rs-plugin/css/navigation.css') !!}">
 --}}
@endsection



@section('submenu')
@include('frontend.layout.partials.menu.submenu-items', ['items'=> $menu_hand->roots()])
@endsection

@section('slider')
        <section id="slider" class="slider-parallax swiper_wrapper clearfix">

            <div class="slider-parallax-inner">
                    <div class="swiper-container swiper-parent">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide dark" style="background-image: url('{!! url('/frontend/images/product-overviews/general-quilting/hand-stitch.jpg') !!}');">
                                <div class="video-overlay" style="background-color: rgba(0,0,0,0.25);"></div>
                                <div class="container clearfix">
                                    <div class="slider-caption slider-caption-left">
                                        <h2 data-caption-animate="fadeInUp">Grace Hand Quilting</h2>
                                        <h3 style="font-style:italic" data-caption-animate="fadeInUp" data-caption-delay="1000">Our quilting roots run deep</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" style="background-image: url('{!! url('/frontend/images/product-overviews/hand-quilting-general/z44-close-bg.jpg') !!}');">
                                <div class="container clearfix">
                                    <div class="slider-caption" style="background-color: rgba(255,255,255,0.7); padding:20px;">
                                        <h2 data-caption-animate="fadeInUp">No-Baste Quilting</h2>
                                        <h3 data-caption-animate="fadeInUp" data-caption-delay="200">Learn More about the quilting
                                            rail system.</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" style="background-image: url('{!! url('/frontend/images/product-overviews/hand-quilting-general/leaders-pin-bg.jpg') !!}');">
                                <div class="container clearfix">
                                    <div class="slider-caption slider-caption-right"
                                         style="background-color: rgba(255,255,255,0.7); padding:20px;">
                                        <h2 data-caption-animate="fadeInUp">Grace Cloth Leaders</h2>
                                        <h3 data-caption-animate="fadeInUp" data-caption-delay="200">And other quilting
                                            accessories</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="slider-arrow-left"><i class="icon-angle-left"></i></div>
                        <div id="slider-arrow-right"><i class="icon-angle-right"></i></div>
                    </div>
            </div>

        </section>
@endsection

@section('page-title')
    <section id="page-title">
        <div class="container clearfix">
            <h1 itemprop="headline">Hand Quilting </h1>
            <span>Hand Quilting Frames, Lap Hoops and Accessories</span>
            <ol class="breadcrumb" itemscope itemtype="//data-vocabulary.org/Breadcrumb">
                <li class="breadcrumb-lead"><a title="Go Home." href="{!! url(getLang() .'/') !!}" itemprop="url"><span itemprop="title">Home</span></a></li>
                <li itemprop="child" itemscope itemtype="//data-vocabulary.org/Breadcrumb">
                    <a title="Go to Machine Quilting." href="{!! url('/machine-frames/') !!}" itemprop="url"><span itemprop="title">Machine Quilting </span></a></li>
                <li class="active" itemprop="child" itemscope itemtype="//data-vocabulary.org/Breadcrumb"><span itemprop="title">Accessories </span></li>
            </ol>
        </div>
    </section>
@endsection

@section('content')
            <!-- Content ============================================= -->
    <section id="content">
        <div class="content-wrap" style="padding:0px;">
            <!--Frames parallax =================================================== -->
            <div class="section parallax nomargin"
                 style=" border-top:14px solid #B14949; border-bottom:2px solid #B14949; background-image: url('{!! asset('frontend/images/product-overviews/hand-quilting-general/needle-close-hand.jpg') !!}'); padding:0px; background-size:cover;"
                 data-stellar-background-ratio="0.4">
                <div class="container">
                    <div class="col-md-5 nomargin dark" style="background-color: rgba(0,0,0,0.4); padding:100px 20px;">
                        <div class="heading-block topmargin bottommargin-sm">
                            <h3>Timeless Tradition, Modern Innovation</h3>
                        </div>
                        <p>Hand quilting is a treasured skill that has withstood the test of time. Today it is
                            considered a highly rewarding labor of love for those who practice it. The Grace Company
                            hand quilting frames have deep roots in this traditional art, as well as innovative new
                            features that make hand quilting easier and more convenient.
                        </p>
                    </div>
                </div>
            </div>
            <!--No-Baste System ===================================-->
            <div class="section parallax nomargin"
                 style=" border-top:2px solid #B14949; border-bottom:2px solid #B14949; background-image: url('{!! asset('frontend/images/backgrounds/paven-light.png') !!}'); padding:0px; background-repeat:repeat;"
                 data-stellar-background-ratio="0.4">
                <div class="container clearfix nobottommargin">
                    <div class="row">
                        <div class="heading-block center topmargin">
                            <h3>No Baste, 3 Rail Sysetm</h3>
                            <p class="before-heading">Because having to baste is such a waste</p>
                        </div>
                        <div class="col-md-8">
                            <img src="{!! asset('frontend/images/product-overviews/hand-quilting-general/z44-nobaste.jpg') !!}"
                                 data-animate="fadeIn" alt="Z44 No-Baste Frame ">
                        </div>
                        <div class="col-md-4">
                            <p class="lead">
                                The Grace Z44 and Start-Right EZ3 hand frames use an innovative no-baste rail system to
                                <stong><em>make the quilting easier</em></stong>
                                . All the quilt layers come together and are rolled on to the take-up rail as you quilt.
                                The Z44 even comes with an additonal 4th rail that is convenient for keeping the batting
                                layer off of the floor.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!--Fabri-Fast ================-->
            <div class="section parallax nomargin"
                 style=" border-top:2px solid #B14949; border-bottom:2px solid #B14949; background-image: url('{!! asset('frontend/images/backgrounds/light_wool.png') !!}'); padding:0px; background-repeat:repeat;"
                 data-stellar-background-ratio="0.4">
                <div class="container clearfix nobottommargin">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="heading-block topmargin">
                                <h3>Fabri-Fast Rails</h3>
                                <p class="before-heading">Easy fabric loading</p>
                            </div>
                            <p class="lead">
                                The unique Grace Company Fabri-Fast rails on the Z44 and EZ3 frames make attaching
                                fabric to your rails a breeze. No need for quilting tacks, ties, or tape! It’s as easy
                                as sliding the fabric into the rail slot with the provided Fabri-Fast tool. Fabric is
                                held securely in the slot by a Fabri-Fast tube.
                            </p>
                        </div>
                        <div class="col-md-8">
                            <img src="{!! asset('frontend/images/product-overviews/general-quilting/fabri-fast-big.jpg') !!}"
                                 data-animate="fadeIn" alt="Quilting Frame Tracks">
                        </div>
                    </div>
                </div>
            </div>
            <!---Adjustability =======================================================-->
            <div class="container center">
                <div class="heading-block nobottomborder topmargin nobottommargin">
                    <h2>Fully Adjustable</h2>
                    <p class="before-heading">Quilt in comfort</p>
                </div>
                <p class="lead">Grace hand-quilting frames and hoops are the most adjustable on the market! Adjustable
                    heights, lengths, tilt- angles, and positions will make sure you always work in perfect comfort!</p>
                <div class="row">
                    <div class="col-sm-6">
                        <img src="{!! asset('frontend/images/product-overviews/hand-quilting-general/z44-arrows.jpg') !!}"
                             data-animate="fadeInLeft" alt="Z44 adjusting">
                    </div>
                    <div class="col-sm-6">
                        <img src="{!! asset('frontend/images/product-overviews/hand-quilting-general/hoop-arrows.jpg') !!}"
                             data-animate="fadeInRight" alt="Grace Hoop2 adjustability">
                    </div>
                </div>
            </div>
            <!--compare filler ============================-->
            <div class="section parallax nomargin"
                 style=" border-top:14px solid #B14949; border-bottom:2px solid #B14949; background-image: url('{!! asset('frontend/images/product-overviews/hand-quilting-general/hand-quilting-parallax.jpg') !!}'); padding:0px; background-size:cover;"
                 data-stellar-background-ratio="0.4">
                <div class="container dark" style="padding:100px 0px 300px 0px">
                    <div class="col-md-4">
                        <div class="heading-block topmargin bottommargin-sm nobottomborder">
                            <h3>Frame or Hoop, There is a perfect hand quilting solution for you</h3>
                        </div>
                    </div>
                </div>
            </div>
            <!--Compare section ===================================-->
            <a class="button button-full button-dark center tright bottommargin-sm" href="compare-hand-frames/">
                <div class="container clearfix">
                    Which frame is right for you? <strong>Compare Hand Quilting Frames</strong> <i
                            class="icon-caret-right" style="top:4px;"></i>
                </div>
            </a>
            <div class="container clearfix">
                <p class="lead topmargin-sm">Before choosing a frame or hoop, it is best to learn which features are
                    most important for you and the projects you do. No matter your quilting needs, there is a Grace
                    hand-quilter that’s right for you. Here are some key questions to ask yourself when choosing a
                    frame:
                </p>
                <div class="row topmargin-sm center">
                    <div data-animate="fadeInUp" class="col-sm-4 bottommargin">
                        <div class="feature-box fbox-center fbox-outline nobottomborder">
                            <div class="fbox-icon">
                                <i class="icon-th-large"></i>
                            </div>
                        </div>
                        <h3 class="nobottommargin">Maximum Quilt Area</h3>
                        <p>What is the maximum size quilt you will ever want to do? If you know you&#39;ll be working
                            with a king size quilt sometime, the Z44 may be the best option for you.</p>
                    </div>
                    <div data-animate="fadeInUp" data-delay="200" class="col-sm-4 bottommargin">
                        <div class="feature-box fbox-center fbox-outline nobottomborder">
                            <div class="fbox-icon">
                                <i class="icon-resize-horizontal"></i>
                            </div>
                        </div>
                        <h3 class="nobottommargin">Quilting Room Space</h3>
                        <p>If you don&#39;t have a quilting room, the Grace Hoop<sup>2</sup> can be a great option
                            working from any chair in the house. </p>
                    </div>
                    <div data-animate="fadeInUp" data-delay="400" class="col-sm-4 bottommargin">
                        <div class="feature-box fbox-center fbox-outline nobottomborder">
                            <div class="fbox-icon">
                                <i class="icon-suitcase"></i>
                            </div>
                        </div>
                        <h3 class="nobottommargin">Portable Options</h3>
                        <p>Need something you can take with you? Try looking at the conveniently compact lap hoops</p>
                    </div>
                </div>
                <!--frames compared ====================================-->
                <div class="row bottommargin-sm">
                    <div class="heading-block center nomargin nobottomborder">
                        <h1>Grace Hand Quilting Frames</h1>
                    </div>
                </div>
                <div class="row topmargin-sm clearfix center">
                    <div class="col-md-3 col-sm-6 bottommargin-sm">
                        <h4 class="nobottommargin">Z44 Frame</h4>
                        <img src="{!! asset('frontend/images/product-overviews/z44/z44-450px.jpg') !!}"
                             alt="Z44 Hand Quilting Frame King Size"/>
                        <a href="{!! url(getLang(). '/hand-quilting') !!}"
                           class="button button-rounded button-secondary button-small">See More</a>
                        Or
                        <a href="{!! url(getLang(). '/hand-quilting') !!}"
                           class="button button-rounded button-small">Buy Now</a>
                    </div>
                    <div class="col-md-3 col-sm-6 bottommargin-sm">
                        <h4 class="nobottommargin">Start-Right EZ3 Frame</h4>
                        <img src="{!! asset('frontend/images/product-overviews/ez3/EZ3-450px.jpg') !!}" alt="EZ3 Hand Quilting Frame"/>
                        <a href="{!! url(getLang(). '/hand-quilting') !!}" class="button button-rounded button-secondary button-small">See More</a>
                        Or
                        <a href="{!! url(getLang(). '/hand-quilting') !!}" class="button button-rounded button-small">Buy Now</a>
                    </div>
                    <div class="col-md-3 col-sm-6 bottommargin-sm">
                        <h4 class="nobottommargin">Grace Hoop<sub>2</sub></h4>
                        <img src="{!! asset('frontend/images/product-overviews/hoop2/hoop2-450px.jpg') !!}"
                             alt="Grace Hoop2 quilting hoop and stand"/>
                        <a href="{!! url(getLang(). '/hand-quilting') !!}" class="button button-rounded button-secondary button-small">See More</a>
                        Or
                        <a href="{!! url(getLang(). '/hand-quilting') !!}" class="button button-rounded button-small">Buy Now</a>
                    </div>
                    <div class="col-md-3 col-sm-6 bottommargin-sm">
                        <h4 class="nobottommargin">Grace Lap hoops Frame</h4>
                        <img src="{!! asset('frontend/images/product-overviews/laphoops/laphoops-450px.jpg') !!}" alt="Grace square Lap Hoops for quilting"/>
                        <a href="{!! url('/machine-quilting/gq-frame') !!}" class="button button-rounded button-secondary button-small">See More</a>
                        Or
                        <a href="{!! url('/shop') !!}" class="button button-rounded button-small">Buy Now</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6 bottommargin-sm center">
                        <h4 class="nobottommargin">GracieBee</h4>
                        <img src="{!! asset('frontend/images/product-overviews/graciebee/graciebee-450px.jpg') !!}" alt="GracieBee quilting frame for groups"/>
                        <a href="{!! url(getLang(). '/machine-quilting/gq-frame') !!}" class="button button-rounded button-secondary button-small">See More</a>
                        Or
                        <a href="{!! url(getLang(). '/shop') !!}" class="button button-rounded button-small">Buy Now</a>
                    </div>
                    <div class="col-md-8 col-sm-6 fright">
                        <h4 class="nobottommargin">It&#39;s Hip To Be Square</h4>
                        <p class="before-heading">About Grace Square Quilting Hoops</p>
                        <p>Every Grace quilting hoop is based on a simple yet profound truth, square hoops are more
                            ideal for holding fabric than a round one. The square weave in fabric lends itself naturally
                            to square hoop quilting, and makes it easier to achieve good, even tension on all sides.</p>
                    </div>
                </div>
            </div><!--.content-wrap end-->
        </div>
    </section><!-- #content end -->

@endsection


@section('footer_scripts')@endsection

@section('pp_footer_scripts-off')


      <!-- SLIDER REVOLUTION 5.x SCRIPTS  -->
{{--     <script type="text/javascript" src="{!! asset('/frontend/include/rs-plugin/js/jquery.themepunch.tools.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('/frontend/include/rs-plugin/js/jquery.themepunch.revolution.min.js') !!}"></script>

    <script type="text/javascript" src="{!! asset('/frontend/include/rs-plugin/js/extensions/revolution.extension.video.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('/frontend/include/rs-plugin/js/extensions/revolution.extension.slideanims.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('/frontend/include/rs-plugin/js/extensions/revolution.extension.actions.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('/frontend/include/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('/frontend/include/rs-plugin/js/extensions/revolution.extension.kenburn.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('/frontend/include/rs-plugin/js/extensions/revolution.extension.navigation.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('/frontend/include/rs-plugin/js/extensions/revolution.extension.migration.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('/frontend/include/rs-plugin/js/extensions/revolution.extension.parallax.min.js') !!}"></script> --}}
{{--
    <script type="text/javascript">

        var tpj=jQuery;
        tpj.noConflict();

        tpj(document).ready(function() {

            var apiRevoSlider = tpj('.tp-banner').show().revolution(
            {
                sliderType:"standard",
                jsFileLocation:"{!! asset('/frontend/include/rs-plugin/js/') !!}",
                sliderLayout:"fullwidth",
                dottedOverlay:"none",
                delay:9000,
                navigation: {},
                responsiveLevels:[1200,992,768,480,320],
                gridwidth:1140,
                gridheight:500,
                lazyType:"none",
                shadow:0,
                spinner:"off",
                autoHeight:"off",
                disableProgressBar:"on",
                hideThumbsOnMobile:"off",
                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                debugMode:false,
                fallbacks: {
                    simplifyAll:"off",
                    disableFocusListener:false,
                },
                navigation: {
                    keyboardNavigation:"off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation:"off",
                    onHoverStop:"off",
                    touch:{
                        touchenabled:"on",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    },
                    arrows: {
                        style: "ares",
                        enable: true,
                        hide_onmobile: false,
                        hide_onleave: false,
                        tmp: '<div class="tp-title-wrap">   <span class="tp-arr-titleholder"> </span> </div>',
                        left: {
                            h_align: "left",
                            v_align: "center",
                            h_offset: 10,
                            v_offset: 0
                        },
                        right: {
                            h_align: "right",
                            v_align: "center",
                            h_offset: 10,
                            v_offset: 0
                        }
                    }
                }
            });

            apiRevoSlider.bind("revolution.slide.onloaded",function (e) {
                SEMICOLON.slider.sliderParallaxDimensions();
            });

        }); //ready

    </script> --}}
@endsection

@section('inlinejs')@endsection