@extends('frontend/layout/layout')

@section('htmlschema')
itemscope itemtype="http://schema.org/Article"
@endsection

@section('bodyschema')
@endsection

@section('seo')
    <meta name="title" content="Rotary Cutting Accessories">
    <meta name="description" content="welcome to the Rotary Cutting Accessories section of the new Grace Company Website">
    <meta name="keywords" content="the grace company, Rotary Cutting Accessories">
    <meta name="author" content="The Grace Company"/>
@endsection

@section('title')
Rotary Cutting Accessories | The Grace Company
@endsection

@section('jsonschema')
@endsection

@section('bodytag')
    rows
@endsection

@section('header_styles')
@endsection

@section('scripts')
@endsection

@section('ppscripts')
@endsection


@section('submenu')
@include('frontend.layout.partials.menu.submenu-items', ['items'=> $menu_truecut->roots()])
@endsection

@section('slider')@endsection

@section('page-title')@endsection

@section('content')
<!-- Content
   ============================================= -->
<section id="content">
   <div class="content-wrap" style="padding:0px;">
   <!--Intro
      ===================================-->
   <div class="heading-block center topmargin-sm dark nobottomborder bottommargin">
      <h1 class="clearfix toppadding-sm bottompadding-sm center bgcolor-second nobottommargin">Rotary Cutting Accessories</h1>
   </div>
   <!-- TrueGrips
      =================================================== -->
   <div class="section parallax nomargin clearfix" style=" border-top:2px solid #B14949; background-image: url('images/backgrounds/greyzz.png'); padding:0px; background-repeat:repeat;" data-stellar-background-ratio="0.1">
      <div class="container bottommargin" >
         <div class="heading-block center topmargin-sm nobottomborder nobottommargin clearfix">
            <h2 class="accent">TrueGrips</h2>
            <p class="before-heading nobottommargin">Adhesive Ruler Grips</p>
         </div>
         <img src="{!! asset('/frontend/images/product-overviews/rotary-cutting-general/truegrips-pack.png') !!}" data-animate="fadeInRight">
         <p>TrueGrips provide you with an easy, safe, and accurate cutting experience by eliminating slip-ups. TrueGrips are non-slip adhesive rings, that are easy to put on any size or brand of ruler.</p>
         <div class="row">
            <div class="col-sm-6">
               <img src="{!! asset('/frontend/images/product-overviews/rotary-cutting-general/truegrips-sizes.png') !!}" />
            </div>
            <div class="col-sm-6">
               <ul>
                  <li>Safeguards against slipping</li>
                  <li>Transparent for easy visibility</li>
                  <li>Safe for fabric and mats</li>
                  <li>Works on any ruler</li>
                  <li>Contains 15 Large and 15 Small grips</li>
               </ul>
               <div class="clearfix center">
                  <p class="nobottommargin topmargin-sm">Learn more or get the SureStitch now!</p>
                  <a href="shop/somewhere" class="button button-rounded">Buy Now</a>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Luminess Intro
      =================================================== -->
   <div class="section parallax nomargin clearfix" style=" border-top:2px solid #B14949; background-image: url('{!! asset('/frontend/images/backgrounds/square_bg.png') !!}'); padding:0px; background-repeat:repeat;" data-stellar-background-ratio="0.4">
      <div class="heading-block center topmargin nobottomborder nobottommargin">
         <h2 class="accent">Non-Slip Pads</h2>
         <p class="before-heading">A Cutting Mat&#39;s Best Friend</p>
      </div>
      <div class="container topmargin-sm clearfix center">
         <div class="row">
            <div class="col-sm-3">
               <img src="{!! asset('/frontend/images/product-overviews/cutting-mats/mat-on-pad.png') !!}">
            </div>
            <div class="col-sm-9">
               <p>TrueCut Non-Slip Pads can be placed underneath any brand cutting mat to completely eliminate any slipping while cutting, enhancing both accuracy and safety. Non-Slip Pads are available in the three most common sizes of cutting mats. </p>
            </div>
         </div>
         <div class="row">
            <div class="col-sm-4 bottommargin-sm" data-animate="fadeInUp">
               <h4 class="nobottommargin">36 x 24 Inches</h4>
               <img src="{!! asset('/frontend/images/product-overviews/rotary-cutting-general/pad-24x36.png') !!}" alt="Large Non-Slip Pad" />
               <div class="row">
                  <a href="/machine-quilting/gq-frame.html" class="button button-rounded button-small">Buy Now</a>
               </div>
            </div>
            <div class="col-sm-4 bottommargin-sm" data-animate="fadeInUp" data-delay="200">
               <h4 class="nobottommargin">24 x 18 Inches</h4>
               <img src="{!! asset('/frontend/images/product-overviews/rotary-cutting-general/pad918x24.png') !!}" alt="Medium Non-Slip Pad" />
               <div class="row">
                  <a href="/machine-quilting/gq-frame.html" class="button button-rounded button-small">Buy Now</a>
               </div>
            </div>
            <div class="col-sm-4 bottommargin-sm" data-animate="fadeInUp" data-delay="400">
               <h4 class="nobottommargin">18 x 12 Inches</h4>
               <img src="{!! asset('/frontend/images/product-overviews/rotary-cutting-general/pad918x24.png') !!}" alt="Small Non-Slip Pad" />
               <div class="row">
                  <a href="/machine-quilting/gq-frame.html" class="button button-rounded button-small">Buy Now</a>
               </div>
            </div>
         </div>
         <!--features and sizes
            ============================-->
         <div class="container" style="padding-bottom: 25px;">
            <div class="heading-block center nobottomborder nobottommargin toppadding bottompadding-sm clearfix">
               <h4>TrueCut Non-Slip Pad Features</h4>
            </div>
            <div class="col_half  nobottommargin">
               <div class="feature-box center media-box fbox-bg">
                  <div class="fbox-media">
                     <img src="{!! asset('/frontend/images/product-overviews/rotary-cutting-general/pads-under.png') !!}" alt="Non-Slip Pad under Cutting Mat">
                  </div>
                  <div class="fbox-desc">
                     <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                        <h4>No More Sliding! Cutting Mat Safe!</h4>
                     </div>
                     <p>The TrueCut Non-Slip Pads stop your cutting mat from sliding around on your table. They are also designed to be cutting mat safe! Unlike other methods, the Non-Slip Pads keep the mat from moving without scratching or damaging it or your table.</p>
                  </div>
               </div>
            </div>
            <div class="col_half col_last nobottommargin">
               <div class="feature-box center media-box fbox-bg">
                  <div class="fbox-media">
                     <img src="{!! asset('/frontend/images/product-overviews/rotary-cutting-general/pad-any-mat.png') !!}" alt="non-slip pads for any Cutting Mat">
                  </div>
                  <div class="fbox-desc">
                     <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                        <h4>Use With Any Rotary Cutting Mat</h4>
                     </div>
                     <p>The Non-Slip Pads can be used with any brand cutting mat! They're also available in the three most common sizes of cutting mats.</p>
                  </div>
               </div>
            </div>
            <div class="center clearfix bottommargin">
               <h4 class="topmargin nobottommargin">Learn more or get the TrueCut Non-Slip Pads now!</h4>
               <a href="shop/somewhere" class="button button-rounded">Buy Now</a>
            </div>
         </div>
      </div>
      <!--Blades Intro
         ================================-->
      <div class="section parallax nomargin clearfix" style="background-image: url ('{!! asset('/frontend/images/backgrounds/paven-light-blue.png') !!}'); padding:0px; background-repeat:repeat; border-top:2px solid #B14949;" data-stellar-background-ratio="0.4">
         <div class="container clearfix topmargin bottommargin">
            <div class="heading-block center nobottomborder">
               <h2 class="accent">TrueCut Rotary Blades</h2>
            </div>
            <div class="row clearfix bottommargin topmargin-sm">
               <div class="col-md-1"></div>
               <div class="col-md-6">
                  <p class="topmargin-sm">Our 28mm, 45mm, 60mm blades are high quality SKS-7 stainless steel to provide you with the sharpness and quality you've come to expect from a name like TrueCut. These blades are great in your TrueCut rotary cutters, but will also fit in most standard rotary cutters in the market!</p>
               </div>
               <div class="col-md-4">
                  <img  data-animate="fadeIn" src="images/product-overviews/rotary-cutting-general/blades-package.png" alt="Rotary Cutting Blades">
               </div>
               <div class="col-md-1"></div>
            </div>
            <div class="heading-block center nobottomborder nobottommargin center topmargin">
               <h4>TreCut Rotary Blades Features</h4>
            </div>
            <div class="row clearfix bottommargin-sm topmargin-sm">
               <div class="col_half  nobottommargin">
                  <div class="feature-box center media-box fbox-bg">
                     <div class="fbox-media">
                        <img src="{!! asset('/frontend/images/product-overviews/rotary-cutting-general/blades-other-cutters.png') !!}" alt="great with other rotary cutters">
                     </div>
                     <div class="fbox-desc">
                        <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                           <h4>Works With Multiple Cutters</h4>
                        </div>
                        <p>The blades go great with our TrueCut rotary cutters, but will also work with most standard rotary cutters in the market.</p>
                     </div>
                  </div>
               </div>
               <div class="col_half col_last nobottommargin">
                  <div class="feature-box center media-box fbox-bg">
                     <div class="fbox-media">
                        <img src="{!! asset('/frontend/images/product-overviews/rotary-cutting-general/blade.png') !!}" alt="high-quality rotary blade">
                     </div>
                     <div class="fbox-desc">
                        <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                           <h4>High Quality Steel</h4>
                        </div>
                        <p>The high quality steel we use in our blades keeps them sharper longer than other blades, allowing you to get more cuts out of each blade.</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="center clearfix bottommargin">
               <h4 class="nobottommargin topmargin">Learn more or get TrueCut rotary blades now!</h4>
               <a href="shop/somewhere" class="button button-rounded">Buy Now</a>
            </div>
         </div>
      </div>
      <!--POther
         ======================-->
      <div class="section parallax nomargin" style="background-image: url('{!! asset('/frontend/images/backgrounds/light_wool.png') !!}'); background-repeat:repeat; padding-top:0px; border-top: 2px solid #B14949;" data-stellar-background-ratio="0.4">
         <div class="heading-block center nobottomborder topmargin">
            <h2 class="accent">Other Rotary cutting accessories</h2>
         </div>
         <div class="bottommargin-sm" style="background-color: white; border-top: 1px dotted #B14949; border-bottom: 1px dotted #B14949;">
            <div class="container">
               <div class="row">
                  <div class="col-xs-4">
                     <img src="{!! asset('/frontend/images/product-overviews/rotary-cutting-general/metal-stones-800.jpg') !!}" alt="TrueSharp Sharpening stones">
                  </div>
                  <div class="col-xs-4">
                     <img src="{!! asset('/frontend/images/product-overviews/rotary-cutting-general/linear-stone-800.jpg') !!}" alt="TrueCut Manual Sharpening stone">
                  </div>
                  <div class="col-xs-4">
                     <img src="{!! asset('/frontend/images/product-overviews/rotary-cutting-general/oil-800.jpg') !!}" alt="TrueCut Sharpening Oil">
                  </div>
               </div>
            </div>
         </div>
         <div class="row center bottommargin">
            <a href="shop/somewhere" class="button button-large button-rounded">See All Machine Quilting Accessories</a>
         </div>
      </div>
      <!--end blades section-->
   </div>
   <!--.content-wrap end-->
</section>
<!-- #content end -->
@endsection


@section('footer_scripts')@endsection
@section('pp_footer_scripts')@endsection
@section('inlinejs')@endsection