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

@section('title')
TrueSharp Electric Rotary Blade Sharpener | TrueCut Section | The Grace Company
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
      <!-- intro
      =================================================== -->
      <div class="container nobottommargin">
         <div class="heading-block topmargin nobottommargin center">
            <h1>TrueSharp <span style="color: #DE5C86">2</span></h1>
            <p class="before-heading">Electric Rotary Blade Sharpener</p>
         </div>
         <div class="col-sm-7">
            <p lass="lead">
            <p>Stop wasting money on new blades! The TrueSharp Power Sharpener sharpens your rotary blades with the push of a button! Make quick work of sharpening 28mm, 45mm, and 60mm rotary blades with the TrueSharp&#39;s high-quality sharpening stones.</p>
         </div>
         <div class="col-sm-5">
            <img data-animate="fadeInRight" src="{!! asset('/frontend/images/product-overviews/truesharp/truesharp-main-open.jpg') !!}" alt="TrueSharp 2 Electric Rotary Blade Sharpener" />
         </div>
      </div>
      <!--video
      ===============================-->
      <div class="row clearfix center">
         <div class="container" style="padding-bottom:50px;">
            <div class="heading-block notopmargin nobottomborder nobottommargin">
               <h3>See The TrueSharp In Action</h3>
            </div>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/Js7J2Akqs-M" frameborder="0" allowfullscreen></iframe>
         </div>
      </div>
      <!---easy push button
      =======================================================-->
      <div class="section nobottommargin" style="border-top:2px solid #B14949; border-bottom:2px solid #B14949;">
         <div class="container">
            <div class="heading-block topmargin center nobottomborder">
               <h2>Power Sharpening at the Push of a Button</h2>
               <p class="before-heading">Blade sharpening doesn't get any easier than this</p>
            </div>
            <div class="col-sm-7">
               <p lass="lead">
               <p>Stop wasting money on new blades! The TrueSharp Power Sharpener sharpens your rotary blades with the push of a button! Make quick work of sharpening 28mm, 45mm, and 60mm rotary blades with the TrueSharp's high-quality sharpening stones.</p>
            </div>
            <div class="col-sm-5">
               <img data-animate="fadeInRight" src="{!! asset('/frontend/images/product-overviews/truesharp/sharpener_in_use.jpg') !!}" />
            </div>
         </div>
      </div>
      <!-- Improvements
      =================================================== -->
      <div class="section parallax nomargin clearfix" style=" border-bottom:2px solid #B14949; background-image: url('{!! asset('/frontend/images/backgrounds/square_bg.png') !!}'); padding:0px; background-repeat:repeat;" data-stellar-background-ratio="0.4">
         <div class="container bottommargin">
            <div class="heading-block topmargin nobottommargin center nobottomborder" style="padding:0px 50px;">
               <h2>TrueSharp <span style="color: #DE5C86">2</span>: New and Improved</h2>
            </div>
            <div class="row topmargin-sm">
               <div class="col-md-4">
                  <div  class="feature-box fbox-center fbox-outline nobottomborder" data-animate="fadeInUp">
                     <div class="fbox-icon nobottommargin">
                        <i class="icon-line-watch"></i>
                     </div>
                  </div>
                  <h3  class="nobottommargin" style="text-align: center;">Faster Sharpening Times</h3>
                  <p class="before-heading">New Improved power output enhances motor efficiency, and makes overall sharpening times <span style="color: black;">twice as short</span>.</p>
               </div>
               <div class="col-md-4">
                  <div  class="feature-box fbox-center fbox-outline nobottomborder" data-animate="fadeInUp" data-delay="200">
                     <div class="fbox-icon nobottommargin">
                        <i class="icon-diamond"></i>
                     </div>
                  </div>
                  <h3 class="nobottommargin" style="text-align: center;">Diamond Grit Stones</h3>
                  <p class="before-heading">All new TrueSharp <span style="color:#DE5C86;">2</span> models include upgraded diamond stones in both a fine and a rough grit!</p>
               </div>
               <div class="col-md-4">
                  <div  class="feature-box fbox-center fbox-outline nobottomborder" data-animate="fadeInUp" data-delay="600">
                     <div class="fbox-icon nobottommargin">
                        <i class="icon-line-disc"></i>
                     </div>
                  </div>
                  <h3 class="nobottommargin" style="text-align: center;">Higher-Quality Sharpening</h3>
                  <p class="before-heading">A new precision blade alignment assures that the edge of your rotary blade is honed with the highest level of quality.</p>
               </div>
            </div>
         </div>
      </div>
      <!-- diamond stones
      =================================================== -->
      <!--<div class="section parallax nomargin clearfix" style=" border-bottom:2px solid #B14949; background-image: url('{!! asset('/frontend/images/backgrounds/greyzz.png') !!}'); padding:0px; background-repeat:repeat;" data-stellar-background-ratio="0.4">-->
      <div class="container">
         <div class="heading-block topmargin nobottommargin center nobottomborder">
            <h2>Diamond Grit Sharpening Stones</h2>
            <div  class="feature-box fbox-center fbox-outline nobottomborder">
               <div class="fbox-icon nobottommargin notopmargin" style="border-color: #DE5C86;">
                  <i class="icon-diamond" style="background-color:#DE5C86"></i>
               </div>
            </div>
         </div>
         <div class="col-sm-7">
            <p class="topmargin-sm">TrueCut uses a new, innovative process of manufacturing to provide the ultimate level of quality in rotary cutting rulers. Other rulers are cut out of acrylic, a process that leaves the ruler rigid, fragile, and brittle. TrueCut rulers are formed with an injection molded thermoplastic that makes the ruler more chip-resistant, flexible, and durable than other rulers.</p>
         </div>
         <div class="col-sm-5">
            <img src="{!! asset('/frontend/images/product-overviews/truesharp/diamond-stone.jpg') !!}" />
         </div>
      </div>
      <!--</div>-->
      <!-- any blade
      =================================================== -->
      <div class="section parallax nomargin clearfix" style="border-top:2px solid #B14949; border-bottom:2px solid #B14949; background-image: url('{!! asset('/frontend/images/backgrounds/greyzz.png') !!}'); padding:0px; background-repeat:repeat;" data-stellar-background-ratio="0.4">
         <div class="container center">
            <div class="heading-block topmargin nobottommargin center nobottomborder">
               <h2>Sharpen Three sizes of rotary blade and almost any brand</h2>
               <p class="center">
                  We know you have many cutters at home, maybe even in different sizes. The TrueSharp will sharpen most brands of blades in 28mm, 45mm, or 60mm.
               </p>
            </div>
            <div class="row bottommargin">
               <div class="col-sm-2"></div>
               <div class="col-sm-8">
                  <img src="{!! asset('/frontend/images/product-overviews/truesharp/3_blades.png') !!}" alt="3 different size rotary blades">
               </div>
               <div class="col-sm-2"></div>
            </div>
         </div>
      </div>
      <!--Other Features
      ================================-->
      <div class="container clearfix topmargin bottommargin">
         <div class="heading-block center">
            <h3>Other TrueCut Ruler Features</h3>
         </div>
         <div class="row clearfix">
            <div class="col_half  nobottommargin">
               <div class="feature-box center media-box fbox-bg">
                  <div class="fbox-media">
                     <img src="{!! asset('/frontend/images/product-overviews/truesharp/two-sides.png') !!}" alt="sharpens both side of rotary blade at the the same time">
                  </div>
                  <div class="fbox-desc">
                     <div class="heading-block nobottomborder nobottommargin">
                        <h4>Sharpens both sides of the blade at once.</h4>
                     </div>
                     <p>A high-quality sharpening stone is used in both the top and bottom of the TrueSharp, making quick work of the process by sharpening both sides of the rotary blade at once.</p>
                  </div>
               </div>
            </div>
            <div class="col_half col_last nobottommargin">
               <div class="feature-box center media-box fbox-bg">
                  <div class="fbox-media">
                     <img src="{!! asset('/frontend/images/product-overviews/truesharp/plug.png') !!}" alt="Plugs in. Sharpener doesn't use batteries">
                  </div>
                  <div class="fbox-desc">
                     <div class="heading-block nobottomborder nobottommargin">
                        <h4>No Batteries to worry about.</h4>
                     </div>
                     <p>The TrueSharp plugs into the wall and runs on AC power, so you&#39;ll never have to worry about replacing any batteries.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--Kit Includes
      ==============================-->
      <div class="section parallax nomargin clearfix" style="border-top:2px solid #B14949; border-bottom:2px solid #B14949; background-image: url('{!! asset('/frontend/images/backgrounds/square_bg.png') !!}'); padding:0px; background-repeat:repeat;" data-stellar-background-ratio="0.4">
         <div class="container bottommargin center">
            <div class="heading-block topmargin nobottommargin center nobottomborder" style="padding:0px 50px;">
               <h2>Complete Sharpening kit</h2>
               <p class="before-heading">Everything you need to keep your rotary blades cutting sharp</p>
            </div>
            <img src="{!! asset('/frontend/images/product-overviews/truesharp/truesharp-kit.png') !!}" />
            <div class="row topmargin-sm center">
               <div class="col-md-3">
                  <img src="{!! asset('/frontend/images/product-overviews/truesharp/vector-stones.png') !!}" alt="high-quality sharpening stones" />
                  <h4 class="nobottommargin center">Sharpening Stones</h4>
                  <p style="font-style: italic;">One Set Fine &amp; One Set Coarse</p>
               </div>
               <div class="col-md-3">
                  <img src="{!! asset('/frontend/images/product-overviews/truesharp/vector-handler.png') !!}" alt="rotary blade handler">
                  <h4 class="nobottommargin">Rotary Blade Handlers</h4>
               </div>
               <div class="col-md-3">
                  <img src="{!! asset('/frontend/images/product-overviews/truesharp/vector-oil.png') !!}" alt="blade sharpening oil">
                  <h4 class="nobottommargin">Sharpening Oil</h4>
               </div>
               <div class="col-md-3">
                  <img src="{!! asset('/frontend/images/product-overviews/truesharp/vector-cleaning-cloth.png') !!}" alt="cleaning cloth">
                  <h4 class="nobottommargin">Cleaning Cloth</h4>
               </div>
            </div>
         </div>
      </div>
      <!--testimonials
      ================================-->
      <div class="container">
         <div class="heading-block topmargin center">
            <h3>Testimonials</h3>
         </div>
         <ul class="testimonials-grid clearfix">
            <li>
               <div class="testimonial">
                  <div class="testi-content">
                     <p>This one is great. It&#39;s like almost getting a new blade again! what a money saver given the price of blades. Easy to use and store when not in use. I've already recommended to many of my fellow quilters. Thanks for a great product.</p>
                  </div>
               </div>
            </li>
            <li>
               <div class="testimonial">
                  <div class="testi-content">
                     <p>Let me tell you, it works GREAT! I&#39;m going to tell my friends and endorse this purchase. It works and will save me money in the long run. It will pay it sell off in no time with the blade savings!</p>
                  </div>
               </div>
            </li>
            <li>
               <div class="testimonial">
                  <div class="testi-content">
                     <p>This blade sharpener sharpens all sizes. It does a very fast job and it is not a bad price. It&#39;s a great little machine for anybody that does quilting!</p>
                  </div>
               </div>
            </li>
            <li>
               <div class="testimonial">
                  <div class="testi-content">
                     <p>Love mine! It is the electric one. Small nicks can be removed with the coarser stones, then smooth with the finer ones.</p>
                  </div>
               </div>
            </li>
            <li>
               <div class="testimonial">
                  <div class="testi-content">
                     <p>I have the True Cut Power Sharpener and I am very satisfied with it. I use 60mm blades which are quite pricey. If I can get more uses out of each blade, then I think it is worth the investment in the sharpener.</p>
                  </div>
               </div>
            </li>
            <li>
               <div class="testimonial">
                  <div class="testi-content">
                     <p>I now have wonderfully sharp blades! I am impressed with your product and will demonstrate it at our next quilting meeting. Thanks again!</p>
                  </div>
               </div>
            </li>
         </ul>
      </div>
      <!-- compared
      ====================================-->
      <div class="row bottommargin-sm" style="border-top:2px solid #b14949;">
         <div class="heading-block center topmargin nobottomborder">
            <h2>TrueCut Rotary Blade Sharpeners</h2>
         </div>
      </div>
      <div class="container topmargin-sm clearfix center">
         <div class="row">
            <div class="col-sm-6 bottommargin-lg">
               <h4 class="nobottommargin">TrueSharp Power Sharpener</h4>
               <img src="{!! asset('/frontend//images/product-overviews/linear_sharpener/truesharp_blades.png') !!}" alt="Linear Sharpener" />
               <div class="row">
                  <div>
                     <a href="{!! url(getLang(). '/machine-quilting/gq-frame') !!}" class="button button-rounded button-small button-secondary">Learn More</a>
                     <a href="{!! url(getLang(). '/shop') !!}" class="button button-rounded button-small">Buy Now</a>
                  </div>
               </div>
            </div>
            <div class="col-sm-6 bottommargin-lg">
               <h4 class="nobottommargin">Linear Rotary Blade Sharpener</h4>
               <img src="{!! asset('/frontend//images/product-overviews/linear_sharpener/linear-blue.png') !!}" alt="Z44 Hand Quilting Frame King Size" />
               <div class="row">
                  <div>
                     <a href="{!! url(getLang(). '/shop') !!}" class="button button-rounded button-small">Buy Now</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--.content-wrap end-->
</section>
<!-- #content end -->
@endsection


@section('footer_scripts')@endsection
@section('pp_footer_scripts')@endsection
@section('inlinejs')@endsection