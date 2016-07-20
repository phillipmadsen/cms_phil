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

@section('title')@endsection

@section('bodyschema')@endsection

@section('bodytag')
rows
@endsection

@section('header_styles')@endsection
@section('scripts')@endsection
@section('ppscripts')@endsection

@section('submenu')
  @include('frontend.pages.truecut.partials.submenu-items', ['items'=> $menu_truecut->roots()])
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

<!-- intro =================================================== -->

        <div class="container bottommargin">

            <div class="heading-block topmargin center">
                <h1>My Comfort Cutter</h1>
                <p class="before-heading">The Ultimate Ergonomic Rotary Cutter</p>
            </div>
            <div class="col-sm-5"><p>The My Comfort Cutter&tm; is the top-of-the-line ergonomic rotary cutter. It&#39;s comfort curve grip is especialy designed to make rotary cutting esaser, safer and more accurate. Seasoned cutters will appreciate how the handle reduces stress on the wrist and arm, and everyone from beginners to advanced cutters love the &quot;track-and-guide&quot; for straight cuts every time!</p>
            </div>
            <div class="col-sm-7" data-animate="fadeInRight">
                <img src="{!! asset('/frontend/images/product-overviews/comfort-cutter/my-comfort-45-main.jpg') !!}" / alt="My Comfort Cutter">
            </div>

        </div>

    <!---ergonomics (wrist parallax) =======================================================-->
     <div class="section parallax nomargin clearfix visible-md visible-lg" style="border-top:2px solid #B14949; border-bottom:2px solid #B14949; background-image: url('{!! asset('/frontend/images/product-overviews/comfort-cutter/wrist-alignment.jpg') !!}'); padding:0px; background-repeat:repeat;" data-stellar-background-ratio="0.4">
        <div class="container">

            <div class="col-sm-4" style="border-left:1px solid #48A0C4; border-right:1px solid #48A0C4; background-color:rgba(255,255,255,0.8) ">
                <div class="heading-block topmargin center">
                <h2>Comfort Curve Grip</h2>
                <p class="before-heading">Natural wrist alignment</p>
                </div>
                <p>The Comfort Curve Grip of the My Comfort Cutter is designed to give you the most natural feeling cut ever. Traditional rotary cutters require you to bend your wrist, or to put unnatural strain on muscles and tendons in your hand, fingers, and wrist. The My Comfort Cutter aligns your naturally with your arm as you cut, relieving stress in your wrist, arm, and shoulder, even over extend periods of cutting!</p>
                <p class="center"><img src="{!! asset('/frontend/images/product-overviews/comfort-cutter/wrist-bent.jpg') !!}" / alt="poor ergonomic cutter"></p>
            </div>
            <div class="col-sm-8" data-animate="fadeInRight">
            </div>

        </div>
    </div>

    <div class="section visible-sm visible-xs" style="background-image:url('{!! asset('/frontend/images/backgrounds/square_bg.png') !!}'); background-repeat:repeat; border-top:2px solid #B14949; border-bottom:2px solid #B14949; ">
        <div class="container">

            <div class="heading-block topmargin center">
                <h2>Comfort Curve Grip</h2>
                <p class="before-heading">For natural wrist alignment</p>
                </div>
            <p>The Comfort Curve Grip of the My Comfort Cutter is designed to give you the most natural feeling cut ever. Traditional rotary cutters require you to bend your wrist, or to put unnatural strain on muscles and tendons in your hand, fingers, and wrist. The My Comfort Cutter aligns your naturally with your arm as you cut, relieving stress in your wrist, arm, and shoulder, even over extend periods of cutting! </p>

            <div class="col-sm-6 center bottommargin">
                <h3 class="nomargin">My Comfort Cutter</h3>
                <img src="{!! asset('/frontend/images/product-overviews/comfort-cutter/wrist-alignment-small.jpg') !!}" alt="rotary cutter wrist alignment" />
            </div>
            <div class="col-sm-6 center bottommargin">
                <h4 class="nomargin">Other Rotary Cutters</h4>
                <img src="{!! asset('/frontend/images/product-overviews/comfort-cutter/wrist-bent.jpg') !!}" alt="rotary cutter wrist alignment" />
            </div>
        </div>
    </div>



    <!--ergonomics (handle design) ============================================-->
    <div class="container topmargin">
        <div class="heading-block center">
                <h2>Ergonomic Handle Desgin</h2>
        </div>

        <div class="col-md-8">
            <p>Part of the innovation in the design of the My Comfort Cutter is its simplicity. The handle is really the same kind of handle as a traditional rotary cutter, but my moving the head of the cutter right below the point of the most cutting power, your wrist will be naturally aligned with your arm. Now you can cut with more power using less effort! </p>
            <p>You don&#39;t have to re-learn how to hold the cutter either! Just hold it the same way you would hold any traditional rotary cutter. Most people like to hold it one of three ways: finger on top, thumb on top, or both to the side.</p>
            <img src="{!! asset('/frontend/images/product-overviews/comfort-cutter/handle-design.png') !!}" alt="My Comfort Cutter ergonmic rotary cutter handle" />

        </div>

        <div class="col-md-4">
            <h4 class="nobottommargin">Ways to hold the My Comfort Cutter</h4>
            <img src="{!! asset('/frontend/images/product-overviews/comfort-cutter/hold-finger.jpg') !!}" alt="holding rotary cutter with finger" />
            <img src="{!! asset('/frontend/images/product-overviews/comfort-cutter/hold-thumb.jpg') !!}" alt="holding rotary cutter with thumb" />
            <img src="{!! asset('/frontend/images/product-overviews/comfort-cutter/hold-side.jpg') !!}" alt="holding rotary cutter with palm" />
        </div>
    </div>
         <!-- My Comfort Cutter =================================================== -->
    <div class="section parallax nomargin clearfix" style=" border-top:2px solid #B14949; border-bottom:2px solid #B14949; background-image: url('{!! asset('/frontend/images/backgrounds/greyzz.png') !!}'); padding:0px; background-repeat:repeat;" data-stellar-background-ratio="0.4">
        <div class="heading-block topmargin nobottommargin center nobottomborder" style="padding:0px 50px;">
            <h2>Part of the TrueCut Track and Guide System</h2>
            <p class="before-heading">Giving you straight cuts everytime</p>
        </div>


            <div class="col-md-7" style="padding:15px 75px;">
                <p>How would you like to have a ruler and cutter that gave you straight cuts every time? No more slipping away from the ruler for curced cuts! No more accidentally cutting into your ruler, or running over the top! The My Comfort Cutter comes with our patented Cutter Guide. With this guide installed, the cutter interlocks to the special track on the siedes of the TrueCut Rulers. As you move the cutter along the ruler&#39;s track, the guide keeps the cutter from veering away from the ruler's edge.
            </p>
                <p>
                    The My Comfort Cutter and its amazing ergonomic grip can still be used with any other quilting ruler. In some cases it is preferred to remove the cutter guide when uding the cutter with a ruler that is not TrueCut brand.
                </p>

            </div>
            <div class="col-md-5" style="padding:0px" data-animate="fadeInRight">
                <img src="{!! asset('/frontend/images/product-overviews/comfort-cutter/comfort-track-guide.png') !!}" / alt="TrueCut Ruler Track and Cutter Guide">
            </div>

    </div>

     <!--Other Features ================================-->
   <div class="container clearfix topmargin bottommargin">
        <div class="heading-block center">
            <h3>Other My Comfort Cutter Features</h3>
        </div>
            <div class="row clearfix">

               <div class="col_half  nobottommargin">
                   <div class="feature-box center media-box fbox-bg">
                       <div class="fbox-media">
                         <img src="{!! asset('/frontend/images/product-overviews/comfort-cutter/feature-exposure.jpg') !!}" alt="extra rotary cutter blade exposure">
                       </div>
                       <div class="fbox-desc">
                           <div class="heading-block nobottomborder nobottommargin">
                               <h4>Extra Blade Exposure - More Power</h4>
                           </div>
                   <p>The My Comfort Cutter has more blade exposure than other cutters, giving you more cutting power! Cut through multiple layers of fabric with ease.</p>
                       </div>
                   </div>
               </div>
              <div class="col_half col_last nobottommargin">
                   <div class="feature-box center media-box fbox-bg">
                       <div class="fbox-media">
                          <img src="{!! asset('/frontend/images/product-overviews/comfort-cutter/feature-blades.jpg') !!}" alt="multiple rotary blade brands">
                       </div>
                       <div class="fbox-desc">
                           <div class="heading-block nobottomborder nobottommargin">
                               <h4>Uses Most Brand Rotary Blades</h4>
                           </div>
                           <p>The My Comfort Cutter is designed to use most brands of rotary blades on the market. You can pick up your favorite brand (even Fiskars and Olfa) in your favorite quilt shop, and put them right in the My Comfort Cutter!</p>
                       </div>
                   </div>
               </div>
           </div>
           <div class="row clearfix">
               <div class="col_half  nobottommargin">
                   <div class="feature-box center media-box fbox-bg">
                       <div class="fbox-media">
                         <img src="{!! asset('/frontend/images/product-overviews/comfort-cutter/feature-lock.jpg') !!}" alt="rotary cutter safety lock">
                       </div>
                       <div class="fbox-desc">
                           <div class="heading-block nobottomborder nobottommargin">
                               <h4>Safety Lock</h4>
                           </div>
                   <p>An easy-access safety lock keeps the blade covered when the cutter is in use. The cutter can be unlocked quickly with a quick flick of the safety lever.</p>
                       </div>
                   </div>
               </div>
              <div class="col_half col_last nobottommargin">
                   <div class="feature-box center media-box fbox-bg">
                       <div class="fbox-media">
                          <img src="{!! asset('/frontend/images/product-overviews/comfort-cutter/feature-handle-inserts.jpg') !!}" alt="Customizable Handle Inserts">
                       </div>
                       <div class="fbox-desc">
                           <div class="heading-block nobottomborder nobottommargin">
                               <h4>Customizable Handle Inserts</h4>
                           </div>
                           <p>Show off your Comfort Cutter to friends and family by personalizing the handle with your own designs, photos or fabric. A handle insert template is included.</p>
                       </div>
                   </div>
               </div>
           </div>
           <div class="row clearfix">
               <div class="col_half  nobottommargin">
                   <div class="feature-box center media-box fbox-bg">
                       <div class="fbox-media">
                         <img src="{!! asset('/frontend/images/product-overviews/comfort-cutter/feature-handed.jpg') !!}" alt="left and right handed rotary cutter">
                       </div>
                       <div class="fbox-desc">
                           <div class="heading-block nobottomborder nobottommargin">
                               <h4>Left and Right Handed</h4>
                           </div>
                   <p>The My Comfort Cutter comes set up for right-handed use out of the package, but can easily be switched to left-handed by installing the blade assembly on the other side of the cutter.</p>
                       </div>
                   </div>
               </div>
              <div class="col_half col_last nobottommargin">
                   <div class="feature-box center media-box fbox-bg">
                       <div class="fbox-media">
                          <img src="{!! asset('/frontend/images/product-overviews/comfort-cutter/feature-sizes.jpg') !!}" alt="different size rotary cutters">
                       </div>
                       <div class="fbox-desc">
                           <div class="heading-block nobottomborder nobottommargin">
                               <h4>Three available sizes</h4>
                           </div>
                           <p>The My Comfort Cutter is available in 45, 60, and 28mm blade sizes. 45mm is the standard size in the market.</p>
                       </div>
                   </div>
               </div>
           </div>


    </div>
</div>
</section>





@endsection

@section('footer_scripts')@endsection
@section('pp_footer_scripts')@endsection
@section('inlinejs')@endsection