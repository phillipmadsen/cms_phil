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
Grace Hoop 2
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

<section id="content">
   <div class="content-wrap" style="padding:0px;">
      <!--Page Intro ===================================-->
      <div class="container clearfix">
         <div class="row">
            <div class="heading-block center topmargin bottommargin-sm">
               <h1 class="accent">The Grace Hoop<sup>2</sup></h1>
               <p class="before-heading">Top of the line quilting hoop</p>
            </div>
            <div class="col-md-6" >
               <img src="{!! asset('/frontend/images/product-overviews/hoop2/hoop2-chair.png') !!}" data-animate="fadeIn" alt="Z44 No-Baste Frame ">
            </div>
            <div class="col-md-6 col-last">
               <p class="lead">
                  The Grace Hoop2 is the foremost of a great line of square hoops designed to make hoop quilting easier. The square weave in fabric lends itself naturally to these hoops, achieving a better even tension on all sides. Designed with your comfort in mind, the Grace Hoop2 can adjust in height and angle to match your work-style.
               </p>
            </div>
         </div>
      </div>
      <!-- square-hoop parallax =================================================== -->
      <div class="section parallax nomargin clearfix" style="border-top:2px solid #B14949; border-bottom:2px solid #B14949; background-image: url('{!! asset('/frontend/images/product-overviews/hoop2/hoop-close.jpg') !!}'); background-size: cover;  padding:0px; background-repeat:repeat;" data-stellar-background-ratio="0.2">
         <div class="container">
            <div class="col-sm-8" data-animate="fadeInRight"></div>
            <div class="col-sm-4" style="border-left:1px solid #48A0C4; border-right:1px solid #48A0C4; background-color:rgba(255,255,255,0.8)">
               <div class="heading-block topmargin center">
                  <h2>Square Quilting Hoops</h2>
               </div>
               <p style="color: black;">
                  Every Grace Company quilting hoop is based on a simple yet profound truth, square hoops are more ideal for holding fabric than a round one. The square weave in fabric lends itself naturally to square hoop quilting, and makes it easier to achieve good, even tension on all sides.
               </p>
               <p class="center">
                  <img src="{!! asset('/frontend/images/product-overviews/hoop2/all-hoops.jpg') !!}" / alt="square quilting hoops">
               </p>
            </div>
         </div>
      </div>
      <!--adjustability =========================================-->
      <section style="background-image: url('{!! asset('/frontend/images/backgrounds/cheap_diagonal_fabric.png') !!}'); background-repeat:repeat; border-bottom:2px solid #B14949;">
         <div class="container">
            <div class="heading-block center nobottomborder nobottommargin toppadding bottompadding-sm clearfix" >
               <h3>Quilt in Comfort</h3>
               <p class="lead nobottommargin" style="font-weight: bold;">The most adjutable quilting hoop in the market, the Grace Hoop<sup>2</sup> lets you quilt in your own way from the most comfortable chair in your house.</p>
            </div>
            <div class="fslider bottommargin" data-easing="easeInQuad" slideshow="false">
               <div class="flexslider">
                  <div class="slider-wrap">
                     <div class="slide">
                        <img src="{!! asset('/frontend/images/product-overviews/hoop2/hoop-height.jpg') !!}" alt="height adjustable quilting hoop">
                        <div class="flex-caption slider-caption-bg slider-caption-top-right"><strong>Height Adjustable</strong><br>
                           Adjust the hieght of the work area to best suit your quilting style.
                        </div>
                     </div>
                     <div class="slide">
                        <img src="{!! asset('/frontend/images/product-overviews/hoop2/hoop-swing.jpg') !!}" alt="quilting hoop adjusting angle">
                        <div class="flex-caption slider-caption-bg slider-caption-top-right"><strong>Adjustable Swing Arm</strong><br>
                           Swing the hoop to be placed over a chair.
                        </div>
                     </div>
                     <div class="slide">
                        <img src="{!! asset('/frontend/images/product-overviews/hoop2/hoop-rotate.jpg') !!}" alt="rotating quilting hoop">
                        <div class="flex-caption slider-caption-bg slider-caption-bg slider-caption-top-right"><strong>Fully Tilting and Rotating Hoop.</strong><br>
                           The full rotation and swivel of the hoop lets you work from all the angles and from any corner.
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Other Features ================================-->
      <div class="container clearfix topmargin bottommargin">
         <div class="heading-block center">
            <h3>Extra Hoop<sup>2</sup> Features</h3>
         </div>
         <div class="row clearfix">
            <div class="col_half ">
               <div class="feature-box center media-box fbox-bg">
                  <div class="fbox-media">
                     <img src="{!! asset('/frontend/images/product-overviews/hoop2/hoop2-folds.jpg') !!}" alt="folding quilting hoop">
                  </div>
                  <div class="fbox-desc">
                     <div class="heading-block" style="margin-bottom: 15px;">
                        <h4>Folds for convenient storage</h4>
                     </div>
                     <p>The Grace Hoop<sup>2</sup> can easily be folded compactly! Great for storage or portability.</p>
                  </div>
               </div>
            </div>
            <div class="col_half col_last">
               <div class="feature-box center media-box fbox-bg">
                  <div class="fbox-media">
                     <img src="{!! asset('/frontend/images/product-overviews/hoop2/hoop2-edge-tool.jpg') !!}" alt="edge tools for quilting hoop">
                  </div>
                  <div class="fbox-desc">
                     <div class="heading-block" style="margin-bottom: 15px;">
                        <h4>Edge Tools Included</h4>
                     </div>
                     <p>Free edge tools are included for maximum side tension, even when working on a corner or edge.</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="row clearfix">
            <div class="col_half ">
               <div class="feature-box center media-box fbox-bg">
                  <div class="fbox-media">
                     <img src="{!! asset('/frontend/images/product-overviews/hoop2/hoop2-acc-holders.jpg') !!}" alt="tread and tools holder on quilting hoop">
                  </div>
                  <div class="fbox-desc">
                     <div class="heading-block" style="margin-bottom: 15px;">
                        <h4>Thread holdera and tool slots</h4>
                     </div>
                     <p>Keep everything you need right at your fingertips as you quilt.</p>
                  </div>
               </div>
            </div>
            <div class="col_half col_last">
               <div class="feature-box center media-box fbox-bg">
                  <div class="fbox-media">
                     <img src="{!! asset('/frontend/images/product-overviews/hoop2/hoop2-sizes.jpg') !!}" alt="different sizes of quilting hoops">
                  </div>
                  <div class="fbox-desc">
                     <div class="heading-block" style="margin-bottom: 15px;">
                        <h4>Three sizes of hoops</h4>
                     </div>
                     <p>Your choice of a 24, 18, or 14 inch hoop. You can also get more than one for different projects!</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--specs ======================-->
      <section class="center bgcolor-second dark nobottommargin clearfix">
         <div class="row" style="padding: 0px 20px;">
            <div class="col-md-6 center">
               <div class="heading-block nobottomborder topmargin nobottommargin">
                  <h2>Available Accessory</h2>
                  <p class="before-heading" style="color: white;"><strong>Swing Arm Lamp</strong>: Illuminate your quilt projects</p>
               </div>
               <p>Easily attaches to the hoop stand<br>
                  Adjusts in hieght and angle<br>
                  Also attaches to table tops<br>
               </p>
            </div>
            <div class="col-md-2 topmargin-sm bottommargin-sm"><img src="{!! asset('/frontend/images/product-overviews/hoop2/lamp-acc.jpg') !!}"></div>
            <div class="col-md-2 topmargin-sm bottommargin-sm"><img src="{!! asset('/frontend/images/product-overviews/hoop2/lamp-base.jpg') !!}"></div>
            <div class="col-md-2 topmargin-sm bottommargin-sm"><img src="{!! asset('/frontend/images/product-overviews/hoop2/lamp-table.jpg') !!}"></div>
         </div>
      </section>
      <!--specs ======================-->
      <div class="section parallax nomargin" style="background-image: url('{!! asset('/frontend/images/backgrounds/square_bg.png') !!}'); background-repeat:repeat; padding-top:0px;" data-stellar-background-ratio="0.4">
         <div class="container topmargin">
            <div class="heading-block center nobottommargin">
               <h3>Overall Hoop Stand Dimensions</h3>
            </div>
            <div class="row">
               <div class="col-md-2"></div>
               <div class="col-md-8">
                  <img data-animate="fadeIn" src="{!! asset('/frontend/images/product-overviews/hoop2/hoop2-dims.png') !!}" alt="Grace Hoop2 size" />
               </div>
               <div class="col-md-2"></div>
            </div>
         </div>
      </div>
   </div>
</section>





@endsection

@section('footer_scripts')@endsection
@section('pp_footer_scripts')@endsection
@section('inlinejs')@endsection