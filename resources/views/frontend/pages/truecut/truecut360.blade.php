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
TrueCut 360 Rotary Cutting | TrueCut Section | The Grace Company
@endsection

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
@section('page-title')@endsection

@section('content')
        <!-- Content
        ============================================= -->
        <section id="content">

            <div class="content-wrap" style="padding:0px;">




         <!-- intro
    =================================================== -->


                    <div class="container bottommargin">

                        <div class="heading-block topmargin center">
                            <h1>TrueCut 360&deg; Cricle Cutter</h1>
                            <p class="before-heading">The easiest way to cut perfect fabric circles</p>
                        </div>

                        <div class="col-sm-5"><p>Cutting curves and circles is a breeze with the TrueCut 360°! The innovative design makes it simple to use, and prevents the fabric from bunching or wrinkling as you cut. The TrueCut 360&deg; is easy to adjust and use, and has been designed with the highest quality to cut precise circles from 2 to 12 inches</p>
                        </div>

                        <div class="col-sm-7" data-animate="fadeInRight">
                            <img src="{!! asset('/frontend/images/product-overviews/truecut-360/circle-cutter-right.jpg') !!}" / alt="TrueCut 360 Circle Cutter">
                        </div>

                    </div>


                <!---use (parallax)
=======================================================-->
                 <div class="section parallax nomargin clearfix visible-md visible-lg" style="border-top:2px solid #B14949; border-bottom:2px solid #B14949; background-image: url('{!! asset('/frontend/images/product-overviews/truecut-360/circle-cutter-use-large.jpg') !!}'); background-size:cover; padding:0px;" data-stellar-background-ratio="0.3">
                    <div class="container">

                        <div class="col-sm-4 dark" style="background-color:rgba(0,0,0,0.6) ">
                            <div class="heading-block topmargin-lg center">
                            <h2>Precision Cut Circles</h2>
                            <p class="before-heading" style="color: #eee;">from 2 to 12 inches</p>
                            </div>

                            <p class="bottommargin-lg">The TrueCut 360° is designed with exact markings for precise circles. Just set and lock in the circle size, and rotate the TrueCut 360° while holding the center for clean-cut, accurate circles.</p>

                        </div>

                        <div class="col-sm-8" data-animate="fadeInRight">

                        </div>

                    </div>
                </div>

                <div class="section visible-sm visible-xs" style="background-image:url('{!! asset('/frontend/images/backgrounds/square_bg.png') !!}'); background-repeat:repeat; border-top:2px solid #B14949; border-bottom:2px solid #B14949; ">
                    <div class="container">

                        <div class="heading-block topmargin center">
                            <h2>Precision Cut Circles</h2>
                            <p class="before-heading">from 2 to 12 inches</p>
                        </div>

                        <div class="col-sm-6 center bottommargin">
                            <p>The TrueCut 360° is designed with exact markings for precise circles. Just set and lock in the circle size, and rotate the TrueCut 360° while holding the center for clean-cut, accurate circles.</p>

                        </div>
                        <div class="col-sm-6 center bottommargin">

                            <img src="{!! asset('/frontend/images/product-overviews/truecut-360/circle-cutter-use-smaller.jpg') !!}" alt="Cutting Fabric Circles" />
                        </div>
                    </div>
                </div>




                 <!--Other Features
================================-->
               <div class="container clearfix topmargin bottommargin-lg">
                    <div class="heading-block center">
                        <h3>Special TrueCut 360&deg; Features</h3>
                    </div>

                        <div class="row clearfix">

                           <div class="col_half  nobottommargin">
                               <div class="feature-box center media-box fbox-bg">
                                   <div class="fbox-media">
                                     <img src="{!! asset('/frontend/images/product-overviews/truecut-360/360-adjusts.png') !!}" alt="Adjustable Fabric Cricle Cutter">
                                   </div>
                                   <div class="fbox-desc">
                                   <div class="heading-block nobottomborder nobottommargin">
                                       <h4>Easily Adjusted</h4>
                                   </div>
                               <p>The cutter can be adjusted to cut circles from 2 to 12 inches and includes precise ruler markings.</p>

                                   </div>
                               </div>
                           </div>
                          <div class="col_half col_last nobottommargin">
                               <div class="feature-box center media-box fbox-bg">
                                   <div class="fbox-media">
                                      <img src="{!! asset('/frontend/images/product-overviews/truecut-360/360-smooth.png') !!}" alt="Circle Cutter smooths fabric as it cuts">
                                   </div>
                                   <div class="fbox-desc">
                                   <div class="heading-block nobottomborder nobottommargin">
                                       <h4>Built-in Fabric Press</h4>
                                   </div>
                                       <p>The fabric-press design of the cutter smooths fabric to eliminate bunching or shifting while cutting.</p>
                                   </div>
                               </div>
                           </div>
                       </div>



                </div>

                <!--buy now
================================-->
               <div class="container clearfix bottommargin" style="border-top:1px solid #B14949;">

                        <div class="row">

                           <div class="col_half center nobottommargin topmargin">
                               <div class="heading-block nobottomborder nobottommargin">
                                   <h4>Get the TrueCut 360&deg; Now</h4>
                               </div>

                                <img src="{!! asset('/frontend/images/product-overviews/truecut-360/circle-cutter-main.jpg') !!}" alt="TrueCut Circle Cutter">

                                <a href="{!! url(getLang(). '/shop') !!}" class="button button-rounded button-small">Buy Now</a>

                           </div>


                          <div class="col_half col_last center nobottommargin topmargin">
                               <div class="heading-block nobottomborder nobottommargin">
                                   <h4>Additional Blades Available</h4>
                               </div>

                               <div class="row">
                                   <div class="col-sm-3"></div>
                                   <div class="col-sm-6"> <img src="{!! asset('/frontend/images/product-overviews/truecut-360/360-extra-blade.png') !!}" alt="Circle Cutter Blade Cartridge"></div>
                                   <div class="col-sm-3"></div>
                               </div>

                                <p class="clearfix">TrueCut 360&deg; Blade Cartridge</p>

                               <a href="{!! url(getLang(). '/shop') !!}" class="button button-rounded button-small">Buy Now</a>


                           </div>

                       </div>



                </div>











            </div><!--.content-wrap end-->

        </section><!-- #content end -->
@endsection


@section('footer_scripts')@endsection
@section('pp_footer_scripts')@endsection
@section('inlinejs')@endsection