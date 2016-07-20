@extends('frontend/layout/shop')



@section('goodrelations')

@endsection

@section('seo')@endsection
@section('jsonschema')@endsection
@section('title')@endsection
@section('bodyschema')@endsection

@section('header_styles')
<!-- SLIDER REVOLUTION 5.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="{!! asset('/frontend/include/rs-plugin/css/settings.css') !!}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{!! asset('/frontend/include/rs-plugin/css/layers.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('/frontend/include/rs-plugin/css/navigation.css') !!}">

    <style>
.revo-slider-emphasis-text{font-size:58px;font-weight:700;letter-spacing:1px;font-family:'Raleway',sans-serif;padding:15px 20px;border-top:2px solid #FFF;border-bottom:2px solid #FFF;}
.revo-slider-desc-text{font-size:20px;font-family:'Lato',sans-serif;width:650px;text-align:center;line-height:1.5;}
.revo-slider-caps-text{font-size:16px;font-weight:400;letter-spacing:3px;font-family:'Raleway',sans-serif;}
.tp-video-play-button{display:none!important;}
.tp-caption{white-space:nowrap;}
    </style>

@endsection

@section('scripts')@endsection

@section('ppscripts')

@endsection

@section('submenu')

@endsection

@section('slider')
	@include('frontend.shop.partials.layout.slider')
@endsection


@section('intro')@endsection



@section('page-title-off')
<!-- Page Title ============================================= -->
		<section id="page-title">
			<div class="container clearfix">
				<h1>Shop</h1>
				<span>Start Buying your Favourite Theme</span>
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li class="active">Shop</li>
				</ol>
			</div>
		</section><!-- #page-title end -->
@endsection


@section('sidebar')@endsection

@section('content')

<!-- Content
============================================= -->
<section id="content">
<div class="content-wrap">
<div class="container clearfix">



{{-- @include('frontend.shop.partials.layout.promo') --}}
{{-- @include('frontend.shop.partials.layout.4colrow') --}}
{{--
<div class="section notopborder nobottomborder nomargin nopadding nobg footer-stick">
    <div class="container clearfix">

        <div class="col_half nobottommargin topmargin">
            <img src="images/services/4.jpg" alt="Image" class="nobottommargin">
        </div>

        <div class="col_half subscribe-widget nobottommargin col_last">

            <div class="heading-block topmargin-lg">
                <h3><strong>GET 20% OFF*</strong></h3>
                <span>Our App scales beautifully to different Devices.</span>
            </div>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet cumque, perferendis accusamus porro illo exercitationem molestias.</p>

            <div class="widget-subscribe-form-result"></div>
            <form id="widget-subscribe-form3" action="include/subscribe.php" role="form" method="post" class="nobottommargin">
                <div class="input-group" style="max-width:400px;">
                    <span class="input-group-addon"><i class="icon-email2"></i></span>
                    <input type="email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
                    <span class="input-group-btn">
                        <button class="btn btn-danger" type="submit">Subscribe Now</button>
                    </span>
                </div>
            </form>

        </div>

    </div>
</div>

 --}}




<div class="col-md-12">
                @foreach ($products as $product)

                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail" >
                            <img src="{{$product->imageurl}}" class="img-responsive">
                            <div class="caption">
                                <div class="row">
                                    <div class="col-md-6 col-xs-6">
                                        <h3>{{$product->name}}</h3>
                                    </div>
                                    <div class="col-md-6 col-xs-6 price">
                                        <h3>
                                            <label>${{$product->price}}</label></h3>
                                    </div>
                                </div>
                                <p>{{$product->description}}</p>
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-3">
                                        <a href="/addProduct/{{$product->id}}" class="btn btn-success btn-product"><span class="fa fa-shopping-cart"></span> Buy</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>





</div>
</div>
</div>





{{-- @include('frontend.shop.partials.layout.full') --}}


@endsection

@section('footer_scripts')@endsection
@section('pp_footer_scripts')


      <!-- SLIDER REVOLUTION 5.x SCRIPTS  -->
    <script type="text/javascript" src="{!! asset('/frontend/include/rs-plugin/js/jquery.themepunch.tools.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('/frontend/include/rs-plugin/js/jquery.themepunch.revolution.min.js') !!}"></script>

    <script type="text/javascript" src="{!! asset('/frontend/include/rs-plugin/js/extensions/revolution.extension.video.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('/frontend/include/rs-plugin/js/extensions/revolution.extension.slideanims.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('/frontend/include/rs-plugin/js/extensions/revolution.extension.actions.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('/frontend/include/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('/frontend/include/rs-plugin/js/extensions/revolution.extension.kenburn.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('/frontend/include/rs-plugin/js/extensions/revolution.extension.navigation.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('/frontend/include/rs-plugin/js/extensions/revolution.extension.migration.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('/frontend/include/rs-plugin/js/extensions/revolution.extension.parallax.min.js') !!}"></script>

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

    </script>
@endsection