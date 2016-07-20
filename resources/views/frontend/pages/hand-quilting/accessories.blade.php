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
Accessories| The Grace Company
@endsection

@section('bodyschema')@endsection

@section('bodytag')
rows
@endsection

@section('header_styles')@endsection
@section('scripts')@endsection
@section('ppscripts')@endsection

@section('submenu')
@include('frontend.layout.partials.menu.submenu-items', ['items'=> $menu_hand->roots()])
@endsection

@section('slider')@endsection
@section('intro')@endsection
@section('page-title')@endsection

@section('sidebar')
    @parent

{{--  This is appended to the parent dsidebar.  --}}
@endsection

@section('content')
<!-- Content ============================================= -->
<section id="content">
   <div class="content-wrap" style="padding:0px;">
      <!--Intro ===================================-->
      <div class="heading-block center topmargin-sm dark nobottomborder bottommargin-lg">
         <h1 class="clearfix toppadding-sm bottompadding-sm center bgcolor-second nobottommargin">Hand Quilting Accessories</h1>
      </div>
      <!-- Luminess Intro =================================================== -->
      <div class="section parallax nomargin clearfix" style=" border-top:2px solid #B14949; background-image: url('{!! asset('/frontend/images/backgrounds/square_bg.png') !!}'); padding:0px; background-repeat:repeat;" data-stellar-background-ratio="0.4">
         <div class="row topmargin">
            <div class="heading-block center nobottomborder bottommargin-sm clearfix">
               <h2 class="accent">Luminess Light Station</h2>
               <p class="before-heading">Illuminate your projects</p>
            </div>
            <div class="container" style="border-bottom:1px solid #B14949;">
               <div class="col-md-1"></div>
               <div class="col-sm-6">
                  <img src="{!! asset('/frontend/images/product-overviews/accessories/luminess-main.png') !!}">
               </div>
               <div class="col-sm-6 col-md-4">
                  <p class="nobottommargin">The Luminess is the perfect lighting solution for any project! It&#39;s made to fit perfectly over any quilting frame, sewing table, or work area! The TRUE-COLOR light-balanced bubs enhance the details of your projects. The Luminess is adjustable in height and width, and is available in two sizes.
                  </p>
                  <span class="center"><img src="{!! asset('/frontend/images/product-overviews/accessories/luminess-logo.png') !!}"></span>
               </div>
               <div class="col-md-1"></div>
            </div>
         </div>
         <!--TrueCuolor ==================================-->
         <div class="row clearfix">
            <div class="container" style="border-bottom:1px solid #B14949; padding-bottom:25px;">
               <div class="heading-block center nobottomborder nobottommargin toppadding bottompadding-sm clearfix">
                  <h4>TrueColor Balanced Light</h4>
               </div>
               <p>The Luminess features a special True Color balanced lighting system that is perfect for artists and crafters. When you use a Luminess Light Station, you can rest assured that the colors you see are accurate, with no tinting or false-color casts. The True Color lights also reduce glare and soften shadows, while enhancing details and textures.</p>
               <div class="col_half nobottommargin">
                  <div class="feature-box center media-box fbox-bg" data-animate="fadeInLeft">
                     <div class="fbox-media">
                        <h3>Without <em>True-Color Balanced Light</em>&#8482;</h3>
                        <img  src="{!! asset('/frontend/images/product-overviews/accessories/hard-shadow.jpg') !!}" alt="Without Balanced Light">
                     </div>
                     <div class="fbox-desc">
                        <p>Dull and incorrect colors with harsh shadows.</p>
                     </div>
                  </div>
               </div>
               <div class="col_half col_last nobottommargin">
                  <div class="feature-box center media-box fbox-bg" data-animate="fadeInRight">
                     <div class="fbox-media">
                        <h3>With <em>True-Color Balanced Light</em>&#8482;</h3>
                        <img src="{!! asset('/frontend/images/product-overviews/accessories/soft-shadow.jpg') !!}" alt="With True-Color Balanced Light">
                     </div>
                     <div class="fbox-desc">
                        <p>Accurate color viewing with reduced glare and soften shadows, all while enhancing details and textures.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--slider ==============================================-->
      <div class="section parallax nomargin clearfix" style="background-image: url('{!! asset('/frontend/images/backgrounds/square_bg.png') !!}'); padding:0px; background-repeat:repeat;" data-stellar-background-ratio="0.4">
         <div class="heading-block center nobottomborder nobottommargin toppadding bottompadding-sm clearfix">
            <h4>Perfect lighting for any situation</h4>
         </div>
         <div class="container" style="border-bottom:1px solid #B14949; padding-bottom: 25px;">
            <div class="col-md-1"></div>
            <div class="col-md-10">
               <div class="fslider" data-easing="easeInQuad" slideshow="false">
                  <div class="flexslider">
                     <div class="slider-wrap">
                        <div class="slide">
                           <img src="{!! asset('/frontend/images/product-overviews/accessories/luminess-sr2.jpg') !!}" alt="Luminess Light over Quiltinlg Frame">
                           <div class="flex-caption slider-caption-bg slider-caption-bottom-right"><strong>Perfect for any quilting frame</strong>
                           </div>
                        </div>
                        <div class="slide">
                           <img src="{!! asset('/frontend/images/product-overviews/accessories/luminess-sitd-own.jpg') !!}" alt="Luminess Light for sit-down quilting machine">
                           <div class="flex-caption slider-caption-bg slider-caption-bottom-left"><strong>Great for sewing</strong>
                           </div>
                        </div>
                        <div class="slide">
                           <img src="{!! asset('/frontend/images/product-overviews/accessories/luminess-cutting-table.jpg') !!}" alt="Luminess Light for cutting tables">
                           <div class="flex-caption slider-caption-bg  slider-caption-top-left"><strong>Lighting for any craft room</strong>
                           </div>
                        </div>
                        <div class="slide">
                           <img src="{!! asset('/frontend/images/product-overviews/accessories/luminess-craft-room.jpg') !!}" alt="Luminess Light for any work area">
                           <div class="flex-caption slider-caption-bg slider-caption-bg-light slider-caption-top-left"><strong>Perfect for any work area</strong>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-1"></div>
         </div>
      </div>
      <!--features and sizes ============================-->
      <div class="section parallax nomargin clearfix" style="background-image: url('{!! asset('/frontend/images/backgrounds/square_bg.png') !!}'); padding:0px; background-repeat:repeat; border-bottom: 2px solid #B14949;" data-stellar-background-ratio="0.4">
         <div class="container" style="border-bottom:1px solid #B14949; padding-bottom: 25px;">
            <div class="heading-block center nobottomborder nobottommargin toppadding bottompadding-sm clearfix">
               <h4>Other Luminess Features</h4>
            </div>
            <div class="col_half  nobottommargin">
               <div class="feature-box center media-box fbox-bg">
                  <div class="fbox-media">
                     <img src="{!! asset('/frontend/images/product-overviews/accessories/luminess-adjust.png') !!}" alt="Adjusting Luminess Light Station">
                  </div>
                  <div class="fbox-desc">
                     <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                        <h4>Designed To Fit Your Needs</h4>
                     </div>
                     <p>The overall height of the Luminess can be adjusted, and the width can be resized to fit most any quilting frame, cutting table, or work area.</p>
                  </div>
               </div>
            </div>
            <div class="col_half col_last nobottommargin">
               <div class="feature-box center media-box fbox-bg">
                  <div class="fbox-media">
                     <img src="{!! asset('/frontend/images/product-overviews/accessories/luminess-lamp.png') !!}" alt="Luminess color-balanced light">
                  </div>
                  <div class="fbox-desc">
                     <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                        <h4>Enhanced Efficiency Lighting</h4>
                     </div>
                     <p>The low-wattage bulbs produce more light while consuming less power, and putting off less heat than standard lighting systems.</p>
                  </div>
               </div>
            </div>
            <div class="center clearfix bottommargin">
               <h4 class="topmargin nobottommargin">Learn more or get the Luminess Light Station now!</h4>
               <a href="{!! url(getLang(). 'shop') !!}" class="button button-rounded">Buy Now</a>
            </div>
         </div>
         <div class="container hidden-xs" >
            <div class="heading-block center nobottomborder nobottommargin toppadding bottompadding-sm clearfix">
               <h4>Designed to fit your needs</h4>
            </div>
            <img src="{!! asset('/frontend/images/product-overviews/accessories/Light-Bar-sizes-flat.png') !!}" alt="Luminess Light bar sizes">
         </div>
      </div>
      <!--Cloth Leaders Intro ================================-->
      <div class="section parallax nomargin clearfix" style="background-image: url('{!! asset('/frontend/images/backgrounds/paven-light-blue.png') !!}'); padding:0px; background-repeat:repeat;" data-stellar-background-ratio="0.4">
         <div class="heading-block center topmargin nobottomborder">
            <h2 class="accent">Start-Right Cloth Leaders</h2>
            <p class="before-heading">Managing your quilt on a frame, from start to finish</p>
         </div>
         <img  data-animate="fadeIn" src="{!! asset('/frontend/images/product-overviews/accessories/cloth_leaders_long.png') !!}" alt="Cloth Leaders for machine or hand quilting frames">
         <div class="container clearfix topmargin-sm bottommargin">
            <p class="nobottommargin">A time-saving product to help you attach your fabric to your frame easily, and accurately. Cloth Leaders are needed when quilting on a quilting frame so that your sewing machine can reach the beginning and end of your quilt.</p>
            <div class="row clearfix bottommargin-sm">
               <div class="col-sm-5 nobottommargin">
                  <img data-animate="fadeInLeft" src="{!! asset('/frontend/images/product-overviews/accessories/cloth_leader_package.png') !!}" alt="Cloth Leaders Set for quilting">
               </div>
               <div class="col-sm-7 col_last nobottommargin">
                  <p class="topmargin-sm">Each set includes three cloth leaders (one for each rail) printed with precise guide marks and pin lines. Cloth leaders can be attached to the rail using our Fabri-Fast system, or the included Velcro® set. Choose the size that&#39;s best for your frame. 112" set is made for most king size frames. The 136" cloth leader is good king frames with an extra 2-foot extension. If you have a crib size frame, you may need to get a 112" size and then cut it down. Start-Right Cloth Leaders are also now available for purchase by the yard.</p>
               </div>
            </div>
            <div class="center clearfix bottommargin-sm">
               <h4 class="nobottommargin">Learn more or get Start-Right Cloth Leaders now!</h4>
               <a href="{!! url(getLang(). 'shop') !!}" class="button button-rounded">Buy Now</a>
            </div>
         </div>
      </div>
      <!--Bungee Clamps and swig arm lamp ======================-->
      <div class="section parallax nomargin" style="background-image: url('{!! asset('/frontend/images/backgrounds/light_wool.png') !!}'); background-repeat:repeat; padding-top:0px; border-top: 2px solid #B14949;" data-stellar-background-ratio="0.4">
         <div class="container">
            <div class="col_half  nobottommargin">
               <div class="heading-block center nobottomborder topmargin">
                  <h2 class="accent">Bungee Clamps</h2>
                  <p class="before-heading">For the Z44 or EZ3 Frames</p>
               </div>
               <p>The new and improved Grace Company Bungee Clamps have been designed with a sleek new profile to make attaching and removing them even easier!</p>
               <img src="{!! asset('/frontend/images/product-overviews/accessories/bungee-z44.png') !!}" alt="Bungee Clamps for Quiltung Frames" data-animate="fadeInLeft">
               <p>The Bungee Clamps provide excellent and even side tension for your quilts at the edges of your machine or hand quilting frame. All GraceFrames except for the EZ3 currently come with a set. These come in a set of four.</p>
               <div class="row center">
                  <a href="{!! url(getLang(). 'shop') !!}" class="button button-rounded">Buy Now</a>
               </div>
            </div>
            <div class="col_half col_last  nobottommargin">
               <div class="heading-block center nobottomborder topmargin">
                  <h2 class="accent">Swing Arm Lamp</h2>
                  <p class="before-heading">For the Z44 or Grace Hoop <sup>2</sup></p>
               </div>
               <p>Light up your wok area with the Swing Arm Lamp! It is compatible with the Grace Brite-white bulb to lessen eye strain and accurately portray colors.</p>
               <img src="{!! asset('/frontend/images/product-overviews/accessories/swing-lamp-z44.png') !!}" alt="Grace Company Swing Arm Lamp" data-animate="fadeInRight">
               <p>With its elegant, functional design, it can be precisely placed without getting in the way. Perfect for the Grace Hoop<sup>2</sup> or Z44 Hand Quilting Frame, or you can use it with the included table clamp to illuminate any table-top project.</p>
               <div class="row center">
                  <a href="{!! url(getLang(). 'shop') !!}" class="button button-rounded">Buy Now</a>
               </div>
            </div>
         </div>
      </div>
      <!--Other Accessories ====================================-->
      <div class="row center bottommargin" style="border-top:2px solid #b14949; padding:20px;">
         <div class="heading-block center topmargin nobottomborder">
            <h2>Other Hand Quilting Accessories</h2>
         </div>
         <a href="{!! url(getLang(). 'shop') !!}" class="button button-large button-rounded">See All Hand Quilting Accessories</a>
      </div>
   </div>
   <!--.content-wrap end-->
</section>
<!-- #content end -->
@endsection

@section('footer_scripts')@endsection
@section('pp_footer_scripts')@endsection
@section('inlinejs')@endsection