@extends('frontend/layout/layout')

@section('htmlschema')
itemscope itemtype="http://schema.org/Product http://schema.org/InStock"
@endsection

@section('title')
Quilter&#39;s Creative Touch | The Grace Company
@endsection

@section('seo')
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="The Grace Company"/>
@endsection

@section('jsonschema')@endsection

@section('schematag')@endsection

@section('bodytag')rows
@endsection

@section('header_styles')
    <!--page level css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/frontend/custom-css/qct.css') }}">
    <style> div.content-wrap{border-top-width:2px;border-top-style:solid;border-top-color:rgb(177,73,73);} </style>
    <!--end of page level css-->
@endsection

@section('scripts')@endsection


@section('submenu')
@include('frontend.layout.partials.menu.submenu-items', ['items'=> $menu_qct->roots()])
@endsection

@section('slider')
@include('frontend/pages/qct/slider')
@endsection

@section('intro')@endsection

@section('pagetitle')@endsection

@section('content')

<!-- Content
   ============================================= -->
<section id="content">
   <div class="content-wrap">
      <!--intro ======================-->
      <div class="topnbottom ingore container clearfix">
         <div class="row clearfix">
            <div class="col-lg-7">
               <div class="heading-block topmargin">
                  <h3>Quilter&#39;s Creative Touch</h3>
                  <span class="before-heading">Creative power right at your fingertips</span>
               </div>
               <p class="lead">
                  Quilter&#39;s Creative Touch is the top-of-the-line automated quilting system. Enjoy the power
                  of simplified pattern sewing with steps as easy as: <em>select, place, and sew!</em>
                  Have the ultimate quilting experience with the advanced features needed to create, design,
                  edit, layout, and quilt with absolute precision. Quilt your masterpiece with ease as
                  Quilter&#39;s Creative Touch takes your ideas from design to reality.
               </p>
               <p class="center">
                  <a href="#" class="button button-rounded">Try a Free Demo!</a>
                  <br>Download a free demo copy of the quilting software here!
               </p>
            </div>
            <div class="col-lg-5">
               <img src="{!! asset('frontend/images/product-overviews/qct/qnique-qct-push.jpg') !!}"
                  data-animate="fadeIn" alt="Quilters Cretive Touch ">
            </div>
         </div>
      </div>
      <!--promo/demo video ==================================-->
{{--       <div class="row clearfix center" style="background-color:rgb(245, 245, 245)">
         <div class="container clearfix" style="padding-bottom:50px;">
            <div class="heading-block topmargin nobottomborder nobottommargin">
               <h3>See A Video Demo</h3>
            </div>
            <iframe width="560" height="315" src="{!! url('http://www.youtube.com/embed/SZEflIVnhH8') !!}"
               frameborder="0" allowfullscreen></iframe>
            <p>
               Quilter&#39;s Creative Touch is the top-of-the-line automated quilting system. Enjoy the power of
               simplified pattern sewing with steps as easy as: <em>select, place, and sew!</em>
               Have the ultimate quilting experience with the advanced features needed to create, design, edit,
               layout, and quilt with absolute precision. Quilt your masterpiece with ease as Quilter&#39;s
               Creative Touch takes your ideas from design to reality.
            </p>
         </div>
      </div> --}}
      <!--ui section =============================-->
      <div class="section parallax dark nomargin"
         style="background-image: url('{!! asset('frontend/images/dark-background.jpg') !!}'); padding:0px"
         data-stellar-background-ratio="0.1">
         <div class="col-lg-5" style="padding-left:150px;" data-animate="fadeIn">
            <div class="heading-block topmargin-lg">
               <h3>Quilter&#39;s Creative Touch</h3>
               <span class="before-heading">Creative power right at your fingertips</span>
            </div>
            <p>
               This latest Upgrade of Quilter&#39;s Crative Touch features a newly improved interface that's more
               powerful and eassier to use. The whole software has been made to work with touch screen devices
               running Windows 7 or 8. More feature have been added, and the software has been carefully
               re-designed to make pattern creation and quilt design easier.
            </p>
         </div>
         <div class="col-lg-7 topmargin" style="padding:0px;" data-animate="fadeInRight">
            <div style="position: relative;">
               <img src="{!! asset('frontend/images/product-overviews/qct/touch-ui.png') !!}"
                  data-animate="fadeIn" alt="Touch Screen Freindly ">
            </div>
         </div>
      </div>
      <!--flow-through-system =================================================-->
      <div class="section parallax nomargin "
         style="background-image:url('{!! asset('frontend/images/backgrounds/square_bg.png') !!}'); background-repeat:repeat;"
         data-stellar-background-ratio="0.1">
         <div class="container clearfix">
            <div class="row topmargin-sm bottommargin-sm">
               <div class="heading-block center nomargin nobottomborder">
                  <h2>Powerfully Simple</h2>
                  <span class="before-heading">From idea, to design, to quilt</span>
               </div>
            </div>
            <div class="row topmargin-sm clearfix">
               <div class="col_one_third nobottommargin">
                  <div class="feature-box   media-box fbox-bg items-container" data-animate="fadeInUp">
                     <div class="fbox-media">
                        <a href="#" itemprop="url">
                        <img itemprop="image"
                           src="{!! asset('frontend/images/product-overviews/qct/pick-pattern.jpg') !!}"
                           alt="selct a pattern"></a>
                     </div>
                     <div class="matchheight fbox-desc">
                        <h3>
                           Pick a pattern
                           <span class="subtitle">Expansive pattern library</span>
                        </h3>
                        <p> Select a block, continuos line, corner, or more from the library of over 200 included patterns. </p>
                     </div>
                  </div>
               </div>
               <div class="col_one_third nobottommargin">
                  <div class="feature-box media-box fbox-bg items-container" data-animate="fadeInUp">
                     <div class="fbox-media">
                        <a href="#" itemprop="url">
                        <img itemprop="image" src="{!! asset('frontend/images/product-overviews/qct/place.png') !!}" alt="using pantostacker in quilter's creative touch"/>
                        </a>
                     </div>
                     <div class="matchheight fbox-desc">
                        <h3>
                           Edit and place
                           <span class="subtitle">Precise placement methods</span>
                        </h3>
                        <p>
                           Quilter&#39;s Creative Touch lets you place your patterns on your quilt the exact
                           way you want. See your pattern in relation to quilt on-screen as set the
                           placement.
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col_one_third col_last nobottommargin">
                  <div class="feature-box   media-box fbox-bg items-container" data-animate="fadeInUp">
                     <div class="fbox-media">
                        <a href="#" itemprop="url">
                        <img src="{!! asset('frontend/images/product-overviews/qct/needle-stitch.jpg') !!}" alt="stitching"/>
                        </a>
                     </div>
                     <div class="matchheight fbox-desc">
                        <h3>
                           Machine does the sewing
                           <span class="subtitle">Automated quilting in your own home</span>
                        </h3>
                        <p> The QuiltMotion motor plate and hardware come bundled with Quilter&#39;s Creative
                           Touch. QuiltMotion controls your sewing machine to accurately stitch your quilt
                           designs.
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--features section =================================-->
      <h2 class="toppadding-sm bottompadding-sm center bgcolor-second dark nobottommargin">Professional Quilting
         Features
      </h2>
      <div class="section nomargin">
         <div class="container clearfix">
            <div class="row topmargin-sm clearfix">
               <div class="col-md-3" data-animate="fadeInUp">
                  <img src="{!! asset('frontend/images/product-overviews/qct/panto-stacker.png') !!}" alt="Panto Stacker">
                  <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                     <h5>Simplified Pantograph Layout</h5>
                  </div>
                  <p>
                     Creating and editing pantograph&#39;s is even easier with <strong><em>Panto
                     Stacker!</em></strong>
                     Alternate rows, sizing, and number of patterns can all be edited in a few simple clicks.
                  </p>
               </div>
               <div class="col-md-3" data-animate="fadeInUp" data-delay="200">
                  <img src="{!! asset('frontend/images/product-overviews/qct/patterncad.png') !!}" alt="Quilt Pattern Creation"/>
                  <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                     <h5>Design Your Own Quilt Pattens</h5>
                  </div>
                  <p>
                     The included <strong><em>Pattern CAD</em></strong>
                     gives you the power to bring any idea to life and be stitched with Quilter&#39;s Creative
                     Touch.
                  </p>
               </div>
               <div class="col-md-3" data-animate="fadeInUp" data-delay="400">
                  <img src="{!! asset('frontend/images/product-overviews/qct/trace.png') !!}" alt="Trace Image For Quilt Pattern" />
                  <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                     <h5>Trace Your Favorite Photographs</h5>
                  </div>
                  <p>
                     Create quilting patterns from your favorite photographs! Quilter's Creative Touch lets
                     you import photos and trace your quilt patterns over them!
                  </p>
               </div>
               <div class="col-md-3" data-animate="fadeInUp" data-delay="600">
                  <img src="{!! asset('frontend/images/product-overviews/qct/record.jpg') !!}" alt="stitching" />
                  <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                     <h5>Record Free-Motion Quilting</h5>
                  </div>
                  <p>
                     With Quilter's Creative Touch, you can record and save any free-motion quilted patterns
                     to use or edit later.
                  </p>
               </div>
               <div class="col-md-12 center" data-animate="fadeIn">
                  <img src="{!! asset('frontend/images/product-overviews/qct/qct-screen-shots.png') !!}" alt="Quilter's Creative Touch Screen Pictures" />
                  <a class="button button-rounded button-large center">See Full Feature Set Here</a>
               </div>
            </div>
         </div>
      </div>
      <!--subscriptions Section ========================================-->
      <div class="section parallax nomargin"
         style="background-image: url('{!! asset('frontend/images/product-overviews/qct/quilt-bg.jpg') !!}'); border-top:2px solid #B14949; border-bottom:2px solid #B14949;"
         data-stellar-background-ratio="0.2">
         <div class="container center topmargin bottommargin">
            <div class="heading-block center nomargin nobottomborder">
               <h2>Take Your Quilting To the Next Level</h2>
               <span class="before-heading" style="color:black;">Unlock The Full Potential Of Quilter's Creative Touch With:</span>
            </div>
            <img src="{!! asset('frontend/images/product-overviews/qct/gold-logo.png') !!}" alt="Quilter's Creative Touch Gold Logo" />
            <p> <a href="#" class="button button-rounded button-large">See all the benefits of subscription</a> </p>
         </div>
         <div class="video-overlay overlay-light"
            style="background-color: rgba(255,255,255,0.8); z-index:1;"></div>
      </div>
      <!--download demo Section ========================================-->
      <div class="section nomargin dark" style="background-color:#B14949;">
         <div class="container center">
            <div class="heading-block center nomargin nobottomborder">
               <h2>Download a free Demo Copy of the Quilting Software!</h2>
               <span class="before-heading">Free to try on your computer or tablet</span>
            </div>
            <a href="#" class="button button-rounded button-large">Get a free QCT demo here</a>
         </div>
      </div>
      <!--compatibility ==================-->
      <div class="row topmargin-lg nobottommargin">
         <div class="heading-block center nomargin nobottomborder">
            <h2>Incredibly Compatible</h2>
         </div>
      </div>
      <div class="row notopmargin clearfix">
         <div class="col-md-4">
            <div class="heading-block nobottomborder dark center nobottommargin" data-animate="fadeInUp">
               <h4 style="padding:10px; background-color:#B14949;">Long-arm Machines</h4>
            </div>
            <img src="{!! asset('frontend/images/product-overviews/qct/qct-on-long.jpg') !!}"
               alt="QCT on Longarm quilting machine">
         </div>
         <div class="col-md-4">
            <div class="heading-block nobottomborder dark center nobottommargin" data-animate="fadeInUp">
               <h4 style="padding:10px; background-color:#B14949;">Mid-arm Machines</h4>
            </div>
            <img src="{!! asset('frontend/images/product-overviews/qct/qct-on-mid.jpg') !!}"
               alt="QCT on Mid arm quilting machine"/>
         </div>
         <div class="col-md-4">
            <div class="heading-block nobottomborder dark center nobottommargin" data-animate="fadeInUp">
               <h4 style="padding:10px; background-color:#B14949;">Domestic Machines</h4>
            </div>
            <img src="{!! asset('frontend/images/product-overviews/qct/qct-on-short.jpg') !!}"
               alt="QCT on domestic quilting machine"/>
         </div>
      </div>
      <div class="container clearfix center topmargin-sm bottommargin-lg">
         <p>
            Quilter&#39;s Creative Touch is designed to work with a large number of common quilting machines and
            quilting frames. It works with domestic machines (short-arms) as well as long-arms and midarms like
            the Qnique Quilter. It works with all of the current Grace quilting frames and most of the past
            Grace quilting grames.
         </p>
         <p>
            Click here to learn more about
            <br/>
            <a href="#" class="button button-rounded">QCT Machine and Frame Compatibility</a>
         </p>
      </div>
      <!--tutorials Section ========================-->
      <div class="row clearfix common-height">
         <div class="col-md-6 center col-padding"
            style="background: url('{!! asset('frontend/images/product-overviews/qct/fold-bg.jpg') !!}') center center no-repeat; background-size: cover;">
            <div>&nbsp;</div>
         </div>
         <div class="col-md-6 center col-padding" style="background-color: #F5F5F5;">
            <div>
               <div class="heading-block nobottomborder">
                  <span class="before-heading color">Easily Understandable &amp; Customizable.</span>
                  <h3>Walkthrough Videos &amp; Demos</h3>
               </div>
               <div class="center bottommargin">
                  <a href="http://vimeo.com/101373765" data-lightbox="iframe" style="position: relative;">
                  <img src="{!! asset('frontend/images/product-overviews/qct/tut-play.jpg') !!}"
                     alt="Video"></a>
               </div>
               <p class="lead nobottommargin">
                  See some tutorial videos for Quilter&#39;s Creative Touch. Learn how to do some popular
                  projects, or see a walk-though of the basics.
               </p>
            </div>
         </div>
      </div>
      <!--get QCT Now! ===================================-->
      <div class="section parallax nomargin"
         style="background-image:url('{!! asset('frontend/images/backgrounds/light_wool.png') !!}'); background-repeat:repeat; border-top:8px solid #B14949; border-bottom:8px solid #B14949;"
         data-stellar-background-ratio="0.1">
         <div class="container clearfix topmargin-lg bottommargin-lg">
            <div class="heading-block center nomargin nobottomborder">
               <h2 style="color:#B14949;">Get Quilter&#39;s Creative Touch Now</h2>
               <span class="before-heading" style="color:#48A0C4">
               Learn how you can get the ultimate quilting experience in your home!
               </span>
               <a href="#" class="button button-rounded button-large button-secondary">See Purchase Options</a>
               or
               <a href="#" class="button button-rounded button-large">Download Free Demo</a>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- #content end -->

@endsection

@section('footer_scripts')@endsection
@section('pp_footer_scripts')@endsection
@section('inlinejs')@endsection