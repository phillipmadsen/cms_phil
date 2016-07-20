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
Qnique Features | The Grace Company
@endsection

@section('bodyschema')@endsection

@section('bodytag')
rows
@endsection

@section('header_styles')@endsection

@section('scripts')@endsection

@section('ppscripts')@endsection

@section('submenu')
@include('frontend.layout.partials.menu.submenu-items', ['items'=> $menu_qnique->roots()])
@endsection




@section('content')


<!-- Content
   ============================================= -->
<section id="content">
   <div class="content-wrap" style="padding:0px;">
      <!-- intro
         =================================================== -->
      <div class="heading-block center topmargin-sm dark nobottomborder nobottommargin">
         <h1 class="clearfix toppadding-sm bottompadding-sm center bgcolor-second nobottommargin">Q&apos;nique Machine Optional Accessories</h1>
      </div>
      <!-- laser
         =================================================== -->
      <div class="section parallax nomargin clearfix" style="background-image: url('{!! asset('/frontend/images/backgrounds/square_bg.png') !!}'); padding:0px; background-repeat:repeat;" data-stellar-background-ratio="0.4">
         <div class="container clearfix topmargin bottommargin">
            <div class="row heading-block center nobottomborder nobottommargin clearfix">
               <h2 class="accent">Laser Stylus</h2>
               <p class="before-heading nobottommargin">For percison pattern tracing</p>
            </div>
            <div class="row">
               <img src="{!! asset('/frontend/images/product-overviews/qnique/laser.png') !!}" alt="Laser Stylus">
               <p>The <strong>Q’nique Laser Stylus</strong> is the easiest way to trace patterns or pantographs while quilting on a machine quilting frame. Just attach the laser stylus to the Q’nique, and position it to trace the desired pattern! The laser can be attached to the front or rear handles, or even on the bottom of the machine between the wheels using the included adapter. Once attached, the laser can be rotated or positioned in any angle.
               </p>
               <p class="nobottommargin">
                  Just place a paper pattern off to the side and follow along with the precise laser indicator. Even copy patterns you've already quilted without a paper template! The Laser stylus plugs right into the Qnique’s accessory ports, so there are no batteries to buy or replace.
               </p>
            </div>
            <div class="row clearfix topmargin" style="border-top:1px solid #B14949;">
               <div class="heading-block center topmargin nobottomborder bottommargin clearfix">
                  <h4>Laser can also be used from the rear of the machine</h4>
                  <p class="before-heading nobottommargin">Requires Rear Handles</p>
               </div>
               <img style="vertical-align: middle; margin: auto; width: 100%;" data-animate="fadeIn" src="{!! asset('/frontend/images/product-overviews/qnique/laser-bottom.png') !!}" alt="Laser Stylus">
               <p class="topmargin-sm">The laser stylus can also be used from the rear of the machine, perfect for tracing pantographs and patterns from the rear table of the quiting frame. A special attachment piece is included so you can set the laser up on the bottom of the carriage. Rear handles (a separate accessory) must be used when using the laser stylus from the rear of the quilting machine.</p>
            </div>
            <div class="center topmargin-sm bottommargin">
               <a href="{!! url(getLang(). '/shop') !!}" class="button button-rounded button-small">Buy Now</a>
            </div>
         </div>
      </div>
      <!-- rear handles
         =================================================== -->
      <div class="clearfix notopmargin nobottommargin" style=" border-top:2px solid #B14949;">
         <div class="container bottommargin-sm">
            <div class="heading-block topmargin bottommargin center nobottomborder clearfix">
               <h2 class="accent">Rear Handles</h2>
               <p class="before-heading nobottommargin">For quilting from the back of your quilting frame</p>
            </div>
            <div class="row clearfix">
               <div class="col-md-8"><img data-animate="fadeInLeft" src="{!! asset('/frontend/images/product-overviews/qnique/rear-handles.png') !!}" alt="Rear Handles"></div>
               <div class="col-md-4">
                  <p>Double the ways you can quilt with your Grace Qnique by adding <strong>Rear Handles</strong>! These let you work from the back of the machine on a quilting frame, and are a must if wish to follow pantograph patterns or the <a href="#">Plastic Pattern Perfect&trade;</a> templates from the back of the quilting machine.
                  </p>
                  <p>
                     These rear handles feature the same quick access buttons as your regular quilting handles, and even provide a connection for the LCD display. This allows you to control all of the Qnique Quilter’s functions and settings right from the rear of the machine.
                  </p>
                  <div class="center"><a href="{!! url(getLang(). '/shop') !!}" class="button button-rounded button-small">Buy Now</a></div>
               </div>
            </div>
         </div>
      </div>
      <!-- ruler base
         ====================================-->
      <div class="section parallax nomargin clearfix" style="background-image: url('{!! asset('/frontend/images/backgrounds/greyzz.png') !!}'); padding:0px; background-repeat:repeat; border-top:2px solid #B14949" data-stellar-background-ratio="0.4">
         <div class="container clearfix topmargin bottommargin">
            <div class="heading-block center nobottomborder bottommargin clearfix">
               <h2 class="accent">Ruler Base</h2>
               <p class="before-heading nobottommargin">An Essential Sewing Accessory for Stitching Quilts</p>
            </div>
            <div class="row">
               <div class="col-sm-4 col-md-5 bottommargin-sm">
                  <p>More and more machine quilters are discovering the ease and fun of using quilting rulers or templates with their quilting machine. Different templates can be used and combined to created intricate stitching designs and patterns.</p>
                  <img src="{!! asset('/frontend/images/product-overviews/qnique/ruler-base-template.jpg') !!}">
               </div>
               <div class="col-sm-8 col-md-7 bottommargin-sm">
                  <img data-animate="fadeInRight" src="{!! asset('/frontend/images/product-overviews/qnique/ruler-base-rgb-1200.png') !!}" alt="Ruler Base" />
               </div>
            </div>
            <div class="row center">
               <p style="text-align: left;">The ruler base accessory is required to use these quilting rulers and templates. The ruler base easily attaches to the bed of the quilting machine underneath the fabric, and provides a stable surface for quilting rulers while stitching. </p>
               <a href="{!! url(getLang(). '/shop') !!}" class="button button-rounded button-small">Buy Now</a>
            </div>
         </div>
      </div>
      <!-- other accessories
         =================================================== -->
      <div class="section parallax nomargin clearfix" style=" border-top:2px solid #B14949; background-image: url('{!! asset('/frontend/images/backgrounds/paven-light-blue.png') !!}'); padding:0px; background-repeat:repeat;" data-stellar-background-ratio="0.4">
         <div class="container clearfix topmargin bottommargin">
            <div class="heading-block center nobottomborder nobottommargin clearfix">
               <h2 class="accent">Other Q&#39;nique Machine Accessories</h2>
            </div>
            <div class="row clearfix bottommargin">
               <div class="col_half  nobottommargin">
                  <div class="feature-box center media-box fbox-bg">
                     <div class="fbox-media">
                        <img src="{!! asset('/frontend/images/product-overviews/qnique/acc-needles.png') !!}" alt="Quilting Machine Needles">
                     </div>
                     <div class="fbox-desc">
                        <div class="heading-block nobottomborder nobottommargin">
                           <h4>Longarm Quilting Needles</h4>
                           <a href="{!! url(getLang(). '/shop') !!}" class="button button-rounded button-small">Buy Now</a>
                        </div>
                        <p>These high quality steel quilting machine sewing needles are available in either size 16 or 18. Each package comes with 10 needles. These will work with most longarm quiltng machines. Make sure you order several of these so you always have enough on hand.
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col_half col_last nobottommargin">
                  <div class="feature-box center media-box fbox-bg">
                     <div class="fbox-media">
                        <img src="{!! asset('/frontend/images/product-overviews/qnique/acc-bobbins.png') !!}" alt="M-Class longarm bobbins">
                     </div>
                     <div class="fbox-desc">
                        <div class="heading-block nobottomborder nobottommargin">
                           <h4>M-Class Bobbins</h4>
                           <a href="{!! url(getLang(). '/shop') !!}" class="button button-rounded button-small">Buy Now</a>
                        </div>
                        <p>These large M-Class bobbins hold more thread than a regular bobbin, letting you quilt longer without needing to change it. They come in a pack of 10 and are made of a high-quality aluminum. These will work with most longarm quilting machines, but are specifically designed to work with the Q'nique machine product line.</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row clearfix">
               <div class="col_half  nobottommargin">
                  <div class="feature-box center media-box fbox-bg">
                     <div class="fbox-media">
                        <img src="{!! asset('/frontend/images/product-overviews/qnique/bobbin_case.png') !!}" alt="bobbin case">
                     </div>
                     <div class="fbox-desc">
                        <div class="heading-block nobottomborder nobottommargin">
                           <h4>Additional Bobbin Case</h4>
                           <a href="{!! url(getLang(). '/shop') !!}" class="button button-rounded button-small">Buy Now</a>
                        </div>
                        <p>This bobbin case is made of a high-quality aluminum and is made to fit perfectly for the Qnique 14+ Mid-Arm Quilting Machine. It holds the large M-Class bobbin used by the Qnique.</p>
                     </div>
                  </div>
               </div>
               <div class="col_half col_last nobottommargin">
                  <div class="feature-box center media-box fbox-bg">
                     <div class="fbox-media">
                        <img src="{!! asset('/frontend/images/product-overviews/qnique/acc-truetrim.png') !!}" alt="TrueTrim sewing machine thread cutter">
                     </div>
                     <div class="fbox-desc">
                        <div class="heading-block nobottomborder nobottommargin">
                           <h4>TrueTrim Thread Cutter</h4>
                           <a href="{!! url(getLang(). '/shop') !!}" class="button button-rounded button-small">Buy Now</a>
                        </div>
                        <p>The TrueTrim is the easiest way to add thread cutting capability to any sewing machine! Just attach the adhesive mount, and then use the TrueTrim both on and off the machine!</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!--end additional acc.container-->
      </div>
      <!--end additional acc.section-->
      <!--Other
         ======================-->
      <div class="section parallax nomargin" style="background-image: url('{!! asset('/frontend/images/backgrounds/light_wool.png') !!}'); background-repeat:repeat; padding-top:0px; border-top: 2px solid #B14949;" data-stellar-background-ratio="0.4">
         <div class="heading-block center nobottomborder topmargin">
            <h2 class="accent">Browse Our Other Quilting Accessories</h2>
         </div>
         <div class="row center bottommargin">
            <a href="shop/somewhere" class="button button-large button-rounded">See All Machine Quilting Accessories</a>
         </div>
      </div>
      <!--end others section-->
   </div>
   <!--.content-wrap end-->
</section>
<!-- #content end -->


@endsection

@section('pp_footer_scripts')


@endsection