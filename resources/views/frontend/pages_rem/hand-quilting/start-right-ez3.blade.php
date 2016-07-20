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

@section('title')
Start-Right EZ3 Hand Quilting Frame | The Grace Company
@endsection

@section('jsonschema')
  {{-- @include('frontend/pages/hand-quilting/partials/microjson') --}}
  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Article",
      "author": "The Grace Company",
      "interactionStatistic": [
        {
          "@type": "InteractionCounter",
          "interactionService": {
            "@type": "Website",
            "name": "Twitter",
            "url": "http://www.twitter.com"
          },
          "interactionType": "http://schema.org/ShareAction",
          "userInteractionCount": "1203"
        },
        {
          "@type": "InteractionCounter",
          "interactionType": "http://schema.org/CommentAction",
          "userInteractionCount": "78"
        },
      ],
      "name": "Start-Right EZ3 Hand Quilting Frame"
    }
  </script>
@endsection

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
    <div class="container clearfix">
        <div class="row">
            <div class="heading-block center topmargin">
                    <h3 class="accent">Start-Right EZ3 Hand Quilting Frame</h3>
                    <p class="before-heading">All the right features at the right price</p>
                </div>
            <div class="col-md-8" >
                <img src="{!! asset('/frontend//images/product-overviews/z44/z44-king-size-main.jpg') !!}" data-animate="fadeIn" alt="Z44 No-Baste Frame ">
            </div>
            <div class="col-md-4 col-last">
                <p class="lead">
                    The Start-Right EZ3 is the perfect way to begin hand quilting! Even with an entry-point price tag, the EZ3 boasts a top-of-the-line 3-rail sysetm so you can quilt without the hassle of basting! The work area can also tilt to four different angles, conveniently letting you work at the angle most comfortable for you! The EZ3 also folds up for space-saving storage. </p>
            </div>
        </div>
    </div>



    <!-- No Baste =================================================== -->
<section>
  <div class="section nomargin clearfix" style=" border-top:2px solid #B14949; border-bottom:2px solid #B14949; padding:0px;">
    <div class="container parallax clearfix" style="background-image: url('{!! asset('/frontend/images/backgrounds/paven-light-blue.png') !!}'); background-repeat:repeat; padding:0px" data-stellar-background-ratio="0.2">
      <div class=" center heading-block topmargin bottommargin-sm" style="padding:0px 25px;">
        <h3>No Baste, No Fuss</h3>
        <p class="before-heading">Three-rail system for hassle-free, no-baste quilting</p>
      </div>
      <p style="padding:0px 25px;">
        On the EZ3, each layer of fabric in the quilt is rolled on to its own rail, with all of them coming together on a "take-up" rail. The 3 sturdy aluminum rails and precision ratchets make it easy to handle your fabric and tension without basting! Each of the main rails has a 50 tooth ratchet for superior tension control..
      </p>
      <img src="{!! asset('/frontend//images/product-overviews/z44/z44-nobaste.png') !!}" alt="No-Baste Frame Rails for Quilting" />
    </div>
  </div>
</section>


<!--adjustability =========================================-->
<section>
    <div class="heading-block center nobottomborder nobottommargin toppadding bottompadding-sm clearfix" style="background-image: url('{!! asset('/frontend/images/backgrounds/greyzz.png') !!}'); background-repeat:repeat;">
        <h3>Quilt in the most comfortable position</h3>
        <p class="lead nobottommargin">Adjustability so you can work the way like best</p>
    </div>
    <div class="col_half">
        <h3 class="center">Size it to the space you need</h3>
        <p>
            The Start-Right EZ3 sets up in one of 3 possible sizes. No-matter your project size, it is always recommended to set the frame up as large as your quilting room will allow.
        </p>
        <img src="{!! asset('/frontend/images/product-overviews/z44/z44-width.jpg') !!}" alt="EZ3 3 Widths"></div>
    <div class="col_half col_last">
        <h3 class="center">Convenient tilting work space</h3>
        <p>
            You can tilt the work area of the EZ3 to one of 4 different angles for maximum comfort. Sitting in the position that is most comfortable to you will reduce stress in the shoulders and back as you quilt.
        </p>
        <img src="{!! asset('/frontend/images/product-overviews/z44/z44-tilt.jpg') !!}" alt="Z44 adjustable tilt angle">
    </div>
</section>




<!--Other Features ================================-->
<div class="container clearfix topmargin bottommargin">
    <div class="heading-block center">
        <h3>Other EZ3 Features</h3>
    </div>
        <div class="row clearfix">
           <div class="col_half  nobottommargin">
               <div class="feature-box center media-box fbox-bg">
                   <div class="fbox-media">
                     <img src="{!! asset('/frontend/images/product-overviews/z44/z44-feature-fold.jpg') !!}" alt="Z44 Folding Quilting Frame">
                   </div>
                   <div class="fbox-desc">
                       <div class="heading-block" style="margin-bottom: 15px;">
                           <h4>Folds for easy storage</h4>
                       </div>
               <p>Fold the Z44 for space-saving storage, even with your project still attached!</p>
                   </div>
               </div>
           </div>
          <div class="col_half col_last nobottommargin">
               <div class="feature-box center media-box fbox-bg">
                   <div class="fbox-media">
                      <img src="{!! asset('/frontend/images/product-overviews/z44/z44-feature-fourth-rail.jpg') !!}" alt="Fourth Rail">
                   </div>
                   <div class="fbox-desc">
                       <div class="heading-block" style="margin-bottom: 15px;">
                           <h4>Fabri-Fast&#0153; rails</h4>
                       </div>
                       <p>The Fabri-Fast™ slots and tubing make attaching your fabric easy, without the use of tacks, ties, or tape!</p>
                   </div>
               </div>
           </div>
       </div>
</div>


<!--specs ======================-->
<h2 class="toppadding-sm bottompadding-sm center bgcolor-second dark nobottommargin">Z44 Frame Specs</h2>
<div class="section parallax nomargin" style="background-image: url('{!! asset('/frontend/images/backgrounds/square_bg.png') !!}'); background-repeat:repeat; padding-top:0px;" data-stellar-background-ratio="0.4">
    <div class="container">
         <div class="col-sm-6 topmargin">
            <p class="center lead">The Quilting Area is the maximim size quilt you can work with on your frame. It is determined by the length of the rails, and extra space needed on the sides for bungee clampls. It is always recommended that you set your quilt up in the largest size that you can in your quilting room. </p>
        </div>
        <div class=" col-sm-6 topmargin center">
            <div data-animate="fadeInRight" class="col-xs-6">
               <div class="feature-box fbox-center fbox-outline fbox-effect nobottomborder">
                    <div class="fbox-icon">
                        <i class="icon-th-large"></i>
                    </div>
                </div>
                    <h3 class="nobottommargin">Maximum Quilt Area</h3>
                    <div class="col-xs-3">
                        <p class="nomargin">King:</p>
                        <p class="nomargin">108"</p>
                    </div>
                    <div class="col-xs-3">
                        <p class="nomargin">Queen:</p>
                        <p class="nomargin">106"</p>
                    </div>
                    <div class="col-xs-3">
                        <p class="nomargin">Twin:</p>
                        <p class="nomargin">81"</p>
                    </div>
                    <div class="col-xs-3">
                        <p class="nomargin">Crib:</p>
                        <p class="nomargin">67"</p>
                    </div>
            </div>
            <div data-animate="fadeInRight" data-delay="200" class="col-xs-6">
               <div class="feature-box fbox-center fbox-outline fbox-effect nobottomborder">
                    <div class="fbox-icon">
                        <i class="icon-settings"></i>
                    </div>
                </div>
                    <h3 class="nobottommargin">Rail Diameter</h3>
                <p>1&frac12; inches</p>
            </div>
        </div>
                <img data-animate="fadeIn" src="{!! asset('/frontend/images/product-overviews/sr-2-frame/sr-2-frame-438.png') !!}" alt="SR2 frame size" />
    </div>
</div>




<!--frames compared ====================================-->
<div class="row bottommargin-sm" style="border-top:2px solid #b14949;">
    <div class="heading-block center topmargin nobottomborder">
        <h2> Grace No-Baste Hand Frames</h2>
    </div>
</div>
<div class="container topmargin-sm clearfix center">
    <div class="col-sm-6 bottommargin-sm">
        <h4 class="nobottommargin">Start-Right EZ3 Frame</h4>
        <img src="{!! asset('/frontend/images/product-overviews/ez3/EZ3-450px.jpg') !!}" alt="EZ3 Hand Quilting Frame" />
        <div class="row">
            <a href="/machine-quilting/gq-frame.html" class="button button-rounded button-secondary button-small">See More</a>
            Or
            <a href="/machine-quilting/gq-frame.html" class="button button-rounded button-small">Buy Now</a>
        </div>
    </div>
    <div class="col-sm-6 bottommargin-sm">
        <h4 class="nobottommargin">Z44 Frame</h4>
        <img src="{!! asset('/frontend/images/product-overviews/z44/z44-450px.jpg') !!}" alt="Z44 Hand Quilting Frame King Size" />
        <div class="row">
            <a href="/machine-quilting/gq-frame.html" class="button button-rounded button-secondary button-small">See More</a>
            Or
            <a href="/machine-quilting/gq-frame.html" class="button button-rounded button-small">Buy Now</a>
        </div>
    </div>
</div>


<!--Compare section ===================================-->
<a class="button button-full button-dark center tright bottommargin-sm">
    <div class="container clearfix">
        <strong>Compare All Hand Quilting Products</strong> <i class="icon-caret-right" style="top:4px;"></i>
    </div>
</a>




  </div>
</section>























@endsection


@section('footer_scripts')@endsection
@section('pp_footer_scripts')@endsection
@section('inlinejs')@endsection