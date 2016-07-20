@extends('frontend/layout/layout')

@section('htmlschema')
itemscope itemtype="http://schema.org/Article"
@endsection

@section('seo')
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author"content="The Grace Company"/>
<script type="application/ld+json">
{
   "@context":"http:\/\/schema.org\/",
   "name":"The Grace Company",
   "@type":"Organization",
   "email":"info@graceframe.com",
   "sameAs":[
      "https:\/\/twitter.com\/QniqueQuilter",
      "http:\/\/www.graceframe.com\/",
      "https:\/\/www.facebook.com\/QniqueQuilter",
      "https:\/\/plus.google.com\/+QniqueQuilter14\/",
      "http:\/\/www.google.com\/+QniqueQuilterContact",
      "http:\/\/www.youtube.com\/playlist?list=PLCmfLRhaBv-e5i6T0aPw1rjBWFLZYX5cl"
   ]
}
</script>
@endsection

@section('jsonschema')@endsection

@section('title')
Qnique Features | The Grace Company
@endsection

@section('bodyschema')@endsection

@section('bodytag')
rows
@endsection

@section('header_styles')
<style>
    .page-menu{display: block; height: 100px; line-height: 100px; padding: 0px 15px; color: #444; font-weight: bold; font-size: 13px; letter-spacing: 1px; text-transform: uppercase; font-family: "Raleway",sans-serif; transition: height 0.4s ease 0s, line-height 0.4s ease 0s, margin 0.4s ease 0s, padding 0.4s ease 0s; }

    #xray-wrapper{position:relative;/*    min-height: 800px; min-width: 1200px; max-height: 800px; max-width: 1200px;*/width:100%;height:100%;max-width:1200px;max-height:800px;}
    #unchangable-container{height:100%;width:100%;}

    .revo-slider-emphasis-text{font-size:64px;font-weight:700;letter-spacing:-1px;font-family:'Raleway',sans-serif;padding:15px 20px;border-top:2px solid #FFF;border-bottom:2px solid #FFF;}
    .revo-slider-desc-text{font-size:20px;font-family:'Lato',sans-serif;width:650px;text-align:center;line-height:1.5;}
    .revo-slider-caps-text{font-size:16px;font-weight:400;letter-spacing:3px;font-family:'Raleway',sans-serif;}
    .hotspot-icon{background:url({!! url('frontend/images/qnique/features/hotspot.png') !!}
    )center no-repeat;width:100%;height:100%;max-height:3.2rem;max-width:3.2rem;padding:10px;}
    .hotspot-red-icon{background:url({!! url('frontend/images/qnique/features/red-hotspot.png') !!}
    )center no-repeat!important;height:30px;width:30px;padding:10px;}
    span.icon-hoppingfoot{position:absolute;cursor:pointer;z-index:20;top:35%;left:38%;border-width:3px;border-color:#fff;}
    #xray-wrapper { position: relative; height: 800px; }
    #unchangable-container { height: 100%; width: 100%; }
    span.icon-hoppingfoot { position: absolute; cursor: pointer; z-index: 30; top: 35%; left: 38%; border-width: 3px; border-color: #fff; }
    span.icon-shaftencoder { position: absolute; border-width: 3px; border-color: #fff; cursor: pointer; z-index: 30; top: 12%; left: 65%; }
    span.icon-softwareupdate { position: absolute; cursor: pointer; z-index: 30; top: 18%; left: 68%; border-width: 3px; border-color: #fff; }
    span.icon-shafts { position: absolute; cursor: pointer; z-index: 30; top: 13%; left: 50%; border-width: 3px; border-color: #fff; }
    span.icon-sealedbearing { position: absolute; cursor: pointer; z-index: 30; top: 14%; left: 42%; border-width: 3px; border-color: #fff; }
    span.icon-aluminumbody { position: absolute; cursor: pointer; z-index: 30; top: 27%; left: 60%; border-width: 3px; border-color: #fff; }
    span.icon-stitchspeed { position: absolute; cursor: pointer; z-index: 30; top: 25%; left: 38%; border-width: 3px; border-color: #fff; }
    span.icon-dualvoltage { position: absolute; z-index: 30; top: 28%; left: 70%; border-width: 3px; border-color: #fff; }
    .outside { position: absolute; z-index: 3200; }
    img[id^="prC"] { position: absolute; -webkit-transition: opacity 2s ease-in-out; -moz-transition: opacity 2s ease-in-out; -o-transition: opacity 2s ease-in-out; transition: opacity 2s ease-in-out; }
    body [id^="icon-"] {padding: 1px; border: 2px solid #fff; border-radius: 50px; }
    img[id^="prC"] {cursor: pointer;}

    /*img[usemap]{border:none;height:auto;max-width:100%;width:auto;}*/
    /*i{font-style:normal;font-size:28px;text-align:center;line-height:64px;}
    .icon-eye{display:block;position:absolute;width:64px;height:64px;top:0;left:0;}
    i{border-radius:50%;background-color:#1ABC9C;}
    .icon-eye i,.feature-box .fbox-icon img{display:block;position:relative;width:100%;height:100%;color:#FFF;}*/
</style>

@endsection
@section('scripts')
 <!-- SLIDER REVOLUTION 5.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="{!! asset('/frontend/include/rs-plugin/css/settings.css') !!}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{!! asset('/frontend/include/rs-plugin/css/layers.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('/frontend/include/rs-plugin/css/navigation.css') !!}">
<script>
$(document).scroll(function(){
    var docPos = Math.round(($(window).scrollTop() + $(window).height())/$(document).height() *100);
    $("#outside").css("opacity",""+docPos/100+"");
});
</script>

@endsection
@section('ppscripts')@endsection

@section('submenu')
@include('frontend.layout.partials.menu.submenu-items', ['items'=> $menu_qnique->roots()])
@endsection

@section('slider-OFF')
<section id="slider" class="slider-parallax revslider-wrap clearfix">
    <div class="tp-banner-container">
        <div class="tp-banner" >
            <ul>    <!-- SLIDE  -->
        <li class="dark" data-transition="fade" data-slotamount="1" data-masterspeed="1500" data-thumb="{!! url('frontend/images/slider/rev/ken-1-thumb.jpg') !!}" data-delay="10000"  data-saveperformance="off" data-title="Responsive Design">
            <!-- MAIN IMAGE -->
            <img src="{!! url('frontend/images/slider/rev/ken-1.jpg') !!}"  alt="kenburns1"  data-bgposition="left center" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-bgfit="130" data-bgfitend="100" data-bgpositionend="right center">
            <!-- LAYERS -->

            <!-- LAYER NR. 2 -->
            <div class="tp-caption customin ltl tp-resizeme revo-slider-caps-text uppercase"
            data-x="355"
            data-y="215"
            data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
            data-speed="800"
            data-start="1000"
            data-easing="easeOutQuad"
            data-splitin="none"
            data-splitout="none"
            data-elementdelay="0.01"
            data-endelementdelay="0.1"
            data-endspeed="1000"
            data-endeasing="Power4.easeIn" style="z-index: 3;">Picture Perfect on Every Device Bcoz</div>

            <div class="tp-caption customin ltl tp-resizeme revo-slider-emphasis-text nopadding noborder"
            data-x="200"
            data-y="230"
            data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
            data-speed="800"
            data-start="1200"
            data-easing="easeOutQuad"
            data-splitin="none"
            data-splitout="none"
            data-elementdelay="0.01"
            data-endelementdelay="0.1"
            data-endspeed="1000"
            data-endeasing="Power4.easeIn" style="z-index: 3;">It&#39;s Completely Responsive</div>

            <div class="tp-caption customin ltl tp-resizeme revo-slider-desc-text"
            data-x="245"
            data-y="340"
            data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
            data-speed="800"
            data-start="1400"
            data-easing="easeOutQuad"
            data-splitin="none"
            data-splitout="none"
            data-elementdelay="0.01"
            data-endelementdelay="0.1"
            data-endspeed="1000"
            data-endeasing="Power4.easeIn" style="z-index: 3; max-width: 650px; white-space: normal;">We have created a Design that looks Awesome, performs Brilliantly &amp; senses Orientations.</div>

            <div class="tp-caption customin ltl tp-resizeme"
            data-x="496"
            data-y="450"
            data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
            data-speed="800"
            data-start="1550"
            data-easing="easeOutQuad"
            data-splitin="none"
            data-splitout="none"
            data-elementdelay="0.01"
            data-endelementdelay="0.1"
            data-endspeed="1000"
            data-endeasing="Power4.easeIn" style="z-index: 3;"><a href="#" class="button button-border button-white button-light button-large button-rounded tright nomargin"><span>Start Tour</span> <i class="icon-angle-right"></i></a></div>

        </li>
        <!-- SLIDE  -->
        <li data-transition="slideup" data-slotamount="1" data-masterspeed="1500" data-thumb="{!! url('frontend/images/slider/rev/ken-2-thumb.jpg') !!}" data-delay="10000"  data-saveperformance="off"  data-title="Unlimited Possibilities">
            <!-- MAIN IMAGE -->
            <img src="{!! url('frontend/images/slider/rev/ken-2.jpg') !!}"  alt="kenburns6"  data-bgposition="center bottom" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-bgfit="100" data-bgfitend="120" data-bgpositionend="center top">
            <!-- LAYERS -->

            <!-- LAYER NR. 2 -->
            <div class="tp-caption customin ltl tp-resizeme revo-slider-caps-text uppercase"
            data-x="453"
            data-y="215"
            data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
            data-speed="800"
            data-start="1000"
            data-easing="easeOutQuad"
            data-splitin="none"
            data-splitout="none"
            data-elementdelay="0.01"
            data-endelementdelay="0.1"
            data-endspeed="1000"
            data-endeasing="Power4.easeIn" style="z-index: 3; color: #333;">Why Choose Canvas?</div>

            <div class="tp-caption customin ltl tp-resizeme revo-slider-emphasis-text nopadding noborder"
            data-x="264"
            data-y="230"
            data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
            data-speed="800"
            data-start="1200"
            data-easing="easeOutQuad"
            data-splitin="none"
            data-splitout="none"
            data-elementdelay="0.01"
            data-endelementdelay="0.1"
            data-endspeed="1000"
            data-endeasing="Power4.easeIn" style="z-index: 3; color: #333;">Unlimited Possibilities</div>

            <div class="tp-caption customin ltl tp-resizeme revo-slider-desc-text"
            data-x="245"
            data-y="340"
            data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
            data-speed="800"
            data-start="1400"
            data-easing="easeOutQuad"
            data-splitin="none"
            data-splitout="none"
            data-elementdelay="0.01"
            data-endelementdelay="0.1"
            data-endspeed="1000"
            data-endeasing="Power4.easeIn" style="z-index: 3; color: #333; max-width: 650px; white-space: normal;">Create whatever you require for your Business to bloom with Tons of Customization Possibilities.</div>

            <div class="tp-caption customin ltl tp-resizeme"
            data-x="508"
            data-y="450"
            data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
            data-speed="800"
            data-start="1550"
            data-easing="easeOutQuad"
            data-splitin="none"
            data-splitout="none"
            data-elementdelay="0.01"
            data-endelementdelay="0.1"
            data-endspeed="1000"
            data-endeasing="Power4.easeIn" style="z-index: 3;"><a href="#" class="button button-border button-large button-rounded tright nomargin"><span>Browse</span><i class="icon-angle-right"></i></a></div>

        </li>
        </ul>
        </div>
    </div>
    <script type="text/javascript">

        var tpj=jQuery;
        tpj.noConflict();

        tpj(document).ready(function() {

            var apiRevoSlider = tpj('.tp-banner').show().revolution(
            {
                dottedOverlay:"none",
                delay:16000,
                startwidth:1140,
                startheight:700,
                hideThumbs:200,

                thumbWidth:100,
                thumbHeight:50,
                thumbAmount:5,

                navigationType:"bullet",
                navigationArrows:"solo",
                navigationStyle:"preview4",

                touchenabled:"on",
                onHoverStop:"on",

                swipe_velocity: 0.7,
                swipe_min_touches: 1,
                swipe_max_touches: 1,
                drag_block_vertical: false,

                                        parallax:"mouse",
                parallaxBgFreeze:"on",
                parallaxLevels:[7,4,3,2,5,4,3,2,1,0],

                keyboardNavigation:"off",

                navigationHAlign:"center",
                navigationVAlign:"bottom",
                navigationHOffset:0,
                navigationVOffset:20,

                soloArrowLeftHalign:"left",
                soloArrowLeftValign:"center",
                soloArrowLeftHOffset:20,
                soloArrowLeftVOffset:0,

                soloArrowRightHalign:"right",
                soloArrowRightValign:"center",
                soloArrowRightHOffset:20,
                soloArrowRightVOffset:0,

                shadow:0,
                fullWidth:"off",
                fullScreen:"on",

                spinner:"spinner4",

                stopLoop:"off",
                stopAfterLoops:-1,
                stopAtSlide:-1,

                shuffle:"off",

                autoHeight:"off",
                forceFullWidth:"off",



                hideThumbsOnMobile:"off",
                hideNavDelayOnMobile:1500,
                hideBulletsOnMobile:"off",
                hideArrowsOnMobile:"off",
                hideThumbsUnderResolution:0,

                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                startWithSlide:0,
                fullScreenOffsetContainer: ".header"
            });

            apiRevoSlider.bind("revolution.slide.onchange",function (e,data) {

                if( $(window).width() > 992 ) {
                    if( $('#slider ul > li').eq(data.slideIndex-1).hasClass('dark') ){
                        $('#header.transparent-header:not(.sticky-header,.semi-transparent)').addClass('dark');
                        $('#header.transparent-header.sticky-header,#header.transparent-header.semi-transparent.sticky-header').removeClass('dark');
                        $('#header-wrap').removeClass('not-dark');
                    } else {
                        if( $('body').hasClass('dark') ) {
                            $('#header.transparent-header:not(.semi-transparent)').removeClass('dark');
                            $('#header.transparent-header:not(.sticky-header,.semi-transparent)').find('#header-wrap').addClass('not-dark');
                        } else {
                            $('#header.transparent-header:not(.semi-transparent)').removeClass('dark');
                            $('#header-wrap').removeClass('not-dark');
                        }
                    }
                    SEMICOLON.header.darkLogo();
                }
            });

        }); //ready
    </script>
</section>

@endsection

@section('intro')@endsection
@section('page-title')@endsection

@section('sidebar')
@endsection

@section('content')
<section id="content">
    <div class="content-wrap">
        <div class="promo promo-full promo-border header-stick bottommargin-lg">
            <div class="container clearfix">
                <h3>Call us today at <span>+1.800.264.0644</span> or Email us at <span>info@graceframe.com</span></h3>
                <span>We strive to provide Our Customers with Top Notch Support to make their Qnique a great experience</span>
                <a href="#" class="button button-reveal button-xlarge button-rounded tright">
                <i class="icon-angle-right"></i><span>Call Now</span>
                </a>
            </div>
        </div>
   <div class="row">
    <div class="col-md-12">
        <div id="xray-wrapper" class="col_full">
        <div id="unchangable-container" class="divcenter bottommargin">
            <img class="outside" id="outside" alt="qnique outside case view" src="{!! url('frontend/images/qnique/features/outside.png') !!}" style=" ">
            <img id="prC0" src="{!! url('frontend/images/qnique/features/hoppingfoot.png') !!}" style="display: none;">
            <img id="prC1" src="{!! url('frontend/images/qnique/features/shaftencoder.png') !!}" style="display: inline;">
            <img id="prC2" src="{!! url('frontend/images/qnique/features/softwareupdate.png') !!}" style="display: none;">
            <img id="prC3" src="{!! url('frontend/images/qnique/features/shafts.png') !!}" style="display: none;">
            <img id="prC4" src="{!! url('frontend/images/qnique/features/sealedbearing.png') !!}" style="display: none;">
            <img id="prC5" src="{!! url('frontend/images/qnique/features/aluminum-body.png') !!}" style="display: none;">
            <img id="prC6" src="{!! url('frontend/images/qnique/features/stitchspeed.png') !!}" style="display: none;">
            <img id="prC7" src="{!! url('frontend/images/qnique/features/dual-voltage1.png') !!}" style="display: none;">
            <img class="xray-machine" id="xray-machine" alt="xray-machine" src="{!! url('frontend/images/qnique/features/machine-xray-hotspots.png') !!}">
                <span class="hotspot-icon icon-hoppingfoot hotspot-red-icon" id="icon-0"> </span>
                <span class="hotspot-icon icon-shaftencoder" id="icon-1"></span>
                <span class="hotspot-icon icon-softwareupdate" id="icon-2"></span>
                <span class="hotspot-icon icon-shafts" id="icon-3"></span>
                <span class="hotspot-icon icon-sealedbearing" id="icon-4"></span>
                <span class="hotspot-icon icon-aluminumbody" id="icon-5"></span>
                <span class="hotspot-icon icon-stitchspeed" id="icon-6"></span>
                <span class="hotspot-icon icon-dualvoltage" id="icon-7"></span>
        </div>
        </div>
    </div>
</div>
    </div>
</section>
@endsection

@section('footer_scripts')

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
jQuery(window)
    .load(function() {
        var $container = $('#portfolio');
        $container.isotope({
            transitionDuration: '0.65s',
            masonry: {
                columnWidth: $container.find('.portfolio-item:not(.wide)')[0]
            }
        });
        $('#page-menu a')
            .click(function() {
                $('#page-menu li')
                    .removeClass('current');
                $(this)
                    .parent('li')
                    .addClass('current');
                var selector = $(this)
                    .attr('data-filter');
                $container.isotope({
                    filter: selector
                });
                return false;
            });
        $(window)
            .resize(function() {
                $container.isotope('layout');
            });
    });
(function($) {
    $.fn.fadeDelay = function(delay) {
        var that = $(this);
        delay = delay || 2000;
        return that.each(function() {
            $(that)
                .queue(function() {
                    setTimeout(function() {
                        $(that)
                            .dequeue();
                    }, delay);
                });
            $(that)
                .fadeOut('slow');
        });
    }
    $('#outside')
        .fadeDelay(100);
});
$(window)
    .scroll(function(i) {
        var scrollVar = $(window)
            .scrollTop();
        $('#outside')
            .css({
                'top': .7 * scrollVar
            });
        $('#outside')
            .css({
                'opacity': (100 - scrollVar) / 100
            });
    })
$('h1')
    .css({
        'opacity': (100 - $(window)
            .scrollTop()) / 100
    });
$('[id^="icon-0"]')
    .click(function() {
        var $image0 = $('[id^="prC0"]');
        $('[id^="prC"]')
            .not($image0)
            .hide();
        if ($image0.is(":visible")) {
            $image0.hide();
        }
        else {
            $image0.show();
        }
    });
$('[id^="icon-1"]')
    .click(function() {
        var $image1 = $('[id^="prC1"]');
        $('[id^="prC"]')
            .not($image1)
            .hide();
        if ($image1.is(":visible")) {
            $image1.hide();
        }
        else {
            $image1.show();
        }
    });
$('[id^="icon-2"]')
    .click(function() {
        var $image2 = $('[id^="prC2"]');
        $('[id^="prC"]')
            .not($image2)
            .hide();
        if ($image2.is(":visible")) {
            $image2.hide();
        }
        else {
            $image2.show();
        }
    });
$('[id^="icon-3"]')
    .click(function() {
        var $image3 = $('[id^="prC3"]');
        $('[id^="prC"]')
            .not($image3)
            .hide();
        if ($image3.is(":visible")) {
            $image3.hide();
        }
        else {
            $image3.show();
        }
    });
$('[id^="icon-4"]')
    .click(function() {
        var $image4 = $('[id^="prC4"]');
        $('[id^="prC"]')
            .not($image4)
            .hide();
        if ($image4.is(":visible")) {
            $image4.hide();
        }
        else {
            $image4.show();
        }
    });
$('[id^="icon-5"]')
    .click(function() {
        var $image5 = $('[id^="prC5"]');
        $('[id^="prC"]')
            .not($image5)
            .hide();
        if ($image5.is(":visible")) {
            $image5.hide();
        }
        else {
            $image5.show();
        }
    });
$('[id^="icon-6"]')
    .click(function() {
        var $image6 = $('[id^="prC6"]');
        $('[id^="prC"]')
            .not($image6)
            .hide();
        if ($image6.is(":visible")) {
            $image6.hide();
        }
        else {
            $image6.show();
        }
    });
$('[id^="icon-7"]')
    .click(function() {
        var $image7 = $('[id^="prC7"]');
        $('[id^="prC"]')
            .not($image7)
            .hide();
        if ($image7.is(":visible")) {
            $image7.hide();
        }
        else {
            $image7.show();
        }
    });
})(jQuery);
    </script>
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

@section('pp_footer_scripts')@endsection
@section('inlinejs')@endsection