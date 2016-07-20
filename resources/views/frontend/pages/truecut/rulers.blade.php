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
Linear Rotary Blade Sharpener | The Grace Company
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


                    <div class="container bottommargin">

                        <div class="heading-block topmargin nobottommargin center">
                            <h1>TrueCut Rotary Cutting Rulers</h1>
                            <p class="before-heading">For easier, safer cuts with the highest levels of percision</p>
                        </div>

                        <img src="{!! asset('/frontend/images/product-overviews/rulers/ruler_perspective.png') !!}" / alt="TrueCut roatary cutting ruler">

                        <p lass="lead">The TrueCut rulers not only provide precise measuring, but also solve one of the most common cutting frustrations: slipping and veering away from the ruler's edge. Our patented track and guide system prevent slipping and keep all of your cuts straight. Everything about TrueCut rotary cutting rulers has been innovated, from the built in holes, to raised edge providing extra safety, to the very process in which they are manufactured.</p>


                    </div>


                <!---ergonomics (wrist parallax)
=======================================================-->
                 <div class="section parallax nomargin clearfix" style="border-top:2px solid #B14949; border-bottom:2px solid #B14949; background-image: url('{!! asset('/frontend/images/backgrounds/square_bg.png') !!}'); padding:0px; background-repeat:repeat;" data-stellar-background-ratio="0.4">
                    <div class="container">

                            <div class="heading-block topmargin center nobottomborder">
                            <h2>Raised Ruler Edge</h2>
                            </div>

                            <div class="col-sm-8">
                                <p>All of the TrueCut rulers have a raised edge or track on both sides that provides extra security when cutting. The ruler edge adds more surface area for the rotary blade to rest against. This gives a safer and more stable cut, while also preventing the cutter from slipping over the ruler. The edge doesn't take any extra space, or add to your measurements.</p>
                            </div>

                            <div class="col-sm-4">
                                <img data-animate="fadeInRight" src="{!! asset('/frontend/images/product-overviews/rulers/edge-close.png') !!}" />
                            </div>


                        </div>

                    </div>





                     <!-- Track and guide
    =================================================== -->
                <div class="section parallax nomargin clearfix" style=" border-bottom:2px solid #B14949; background-image: url('{!! asset('/frontend/images/backgrounds/greyzz.png') !!}'); padding:0px; background-repeat:repeat;" data-stellar-background-ratio="0.4">
                    <div class="container">
                        <div class="heading-block topmargin nobottommargin center nobottomborder" style="padding:0px 50px;">
                            <h2>Part of the TrueCut Track and Guide System</h2>
                            <p class="before-heading">Giving you straight cuts everytime</p>
                        </div>



                        <div class="col-md-7">
                                <p>How would you like to have a ruler and cutter that gave you straight cuts every time? No more slipping away from the ruler for crooked cuts! No more accidentally cutting into your ruler, or running over the top! The raised edge on every ruler is a patented "Ruler Track" that interlocks to the special "Cutter Guide" on the TrueCut rotary cutters. As you move the cutter along the ruler's track, the guide keeps the cutter from veering away from the ruler's edge.
                            </p>


                        </div>

                        <div class="col-md-5" style="padding:0px" data-animate="fadeInRight">
                            <img src="{!! asset('/frontend//images/product-overviews/comfort-cutter/comfort-track-guide.png') !!}" alt="TrueCut Ruler Track and Cutter Guide" />
                        </div>
                    </div>


                </div>



                <!-- Chip resist
    =================================================== -->
                <div class="section parallax nomargin clearfix" style=" border-bottom:2px solid #B14949; background-image: url('{!! asset('/frontend/images/backgrounds/greyzz.png') !!}'); padding:0px; background-repeat:repeat;" data-stellar-background-ratio="0.4">

                        <div class="container">
                           <div class="heading-block topmargin nobottommargin center nobottomborder">

                                <h2>Chip Resistant Plastic</h2>
                                <br>
                                <img src="{!! asset('/frontend/images/product-overviews/rulers/chip-resist.png') !!}">
                                <br>
                                <p class="before-heading">Innovative new ruler style</p>
                            </div>

                        </div>


                        <div class="col-xs-12" style="padding: 0px;">
                        <img src="{!! asset('/frontend/images/product-overviews/rulers/ruler-bend.jpg') !!}" alt="Chip Resistant Rotary Cutting Ruler">
                        </div>

                    <div class="container" style="clear: both;">

                                <p class="topmargin-sm">TrueCut uses a new, innovative process of manufacturing to provide the ultimate level of quality in rotary cutting rulers. Other rulers are cut out of acrylic, a process that leaves the ruler rigid, fragile, and brittle. TrueCut rulers are formed with an injection molded thermoplastic that makes the ruler more chip-resistant, flexible, and durable than other rulers.
                                </p>

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
                                     <img src="{!! asset('/frontend/images/product-overviews/rulers/1-2-inch.png') !!}" alt="extra rotary cutter blade exposure">
                                   </div>
                                   <div class="fbox-desc">
                                       <div class="heading-block nobottomborder nobottommargin">
                                           <h4>Convenient "Quick Labels"</h4>
                                       </div>
                               <p>Some 1/4", 1/2", and 3/4" marks are conveniently labeled for quick measuring, so there's no guessing.</p>

                                   </div>
                               </div>
                           </div>
                          <div class="col_half col_last nobottommargin">
                               <div class="feature-box center media-box fbox-bg">
                                   <div class="fbox-media">
                                      <img src="{!! asset('/frontend/images/product-overviews/rulers/incraments.png') !!}" alt="multiple rotary blade brands">
                                   </div>
                                   <div class="fbox-desc">
                                       <div class="heading-block nobottomborder nobottommargin">
                                           <h4>Easy to see grid lines</h4>
                                       </div>
                                       <p>The grids on the rulers are designed to e clearly visible on both light and dark fabrics. They are measured in 1/8 inch increments.</p>
                                   </div>
                               </div>
                           </div>
                       </div>


                       <div class="row clearfix topmargin-sm">
                           <div class="col_half  nobottommargin">
                               <div class="feature-box center media-box fbox-bg">
                                   <div class="fbox-media">
                                     <img src="{!! asset('/frontend/images/product-overviews/rulers/left-right.png') !!}" alt="rotary cutter safety lock">
                                   </div>
                                   <div class="fbox-desc">
                                       <div class="heading-block nobottomborder nobottommargin">
                                           <h4>Can be used in both directions</h4>
                                       </div>
                               <p>Numbers along the bottom and top run both left-to right, and right-to left, so you'll never need to flip the ruler.</p>

                                   </div>
                               </div>
                           </div>
                          <div class="col_half col_last nobottommargin">
                               <div class="feature-box center media-box fbox-bg">
                                   <div class="fbox-media">
                                      <img src="{!! asset('/frontend/images/product-overviews/rulers/angles.png') !!}" alt="Customizable Handle Inserts">
                                   </div>
                                   <div class="fbox-desc">
                                       <div class="heading-block nobottomborder nobottommargin">
                                           <h4>Angle Lines For Easy Angled Cuts</h4>
                                       </div>
                                       <p>Most of our rectangle rulers have 30, 45, and 60 degree angle lines to make angled cuts easy.</p>
                                   </div>
                               </div>
                           </div>
                       </div>

                </div>



                 <!-- compared
====================================-->

                <div class="section topmargin" style="border-top:2px solid #b14949;">


                        <div class="container clearfix center">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <div class="heading-block center nobottomborder">
                                    <h3>Rectangle Rulers</h3>
                                    <p>These traditional sized quilting rulers are perfect for cutting strips and just about any other project. The larger rulers are ideal for cutting fabric directly off the bolt, while the smaller ones are easier to manage for smaller projects, and great for cutting various shapes.</p>
                                </div>
                            </div>

                            <div class="col-md-1"></div>

                            <div class="row" style="border-bottom: 1px solid #48A0C4;">
                                <div class="col-sm-4 bottommargin-sm">
                                    <h4 class="nobottommargin">6&frac12; x 24&frac12; Inch Ruler</h4>
                                    <img src="{!! asset('/frontend/images/product-overviews/rulers/ruler-24half.png') !!}" alt="6.5 x 24.5 rotary cutting ruler" style="height: 300px;"/>
                                    <div class="row">

                                        <a href="/machine-quilting/gq-frame.html" class="button button-rounded button-small">Buy Now</a>
                                    </div>
                                </div>

                                <div class="col-sm-4 bottommargin-sm">
                                    <h4 class="nobottommargin">6&frac12; x 12&frac12; Inch Ruler</h4>
                                    <img src="{!! asset('/frontend/images/product-overviews/rulers/ruler-6x12half.png') !!}" alt="6.5 x 24.5 rotary cutting ruler" style="height: 300px;" />
                                    <div class="row">

                                        <a href="/machine-quilting/gq-frame.html" class="button button-rounded button-small">Buy Now</a>
                                    </div>
                                </div>

                                <div class="col-sm-4 bottommargin-sm">
                                    <h4 class="nobottommargin">3 x 18 Inch Ruler</h4>
                                    <img src="{!! asset('/frontend/images/product-overviews/rulers/ruler-3x18.png') !!}" alt="6.5 x 12.5 rotary cutting ruler" style="height: 300px;" />
                                <div class="row">

                                        <a href="/machine-quilting/gq-frame.html" class="button button-rounded button-small">Buy Now</a>
                                    </div>
                                </div>


                            </div>


                            <div class="row topmargin-sm">
                                <div class="col-md-1"></div>

                                <div class="col-md-10">
                                    <div class="heading-block center nobottomborder">
                                        <h3>Square Rulers</h3>
                                        <p>Square rulers are ideal for squaring up blocks of fabric. These are also great for various shapes such as triangles and stars. The 45 degree angle line on these ruler has inch marks along it, making it quick and easy to measure and square up blocks.</p>
                                    </div>

                                </div>

                                <div class="col-md-1"></div>
                            </div>


                            <div class="row">
                                <div class="col-sm-4 bottommargin-sm">
                                    <h4 class="nobottommargin">Square 12&frac12; Inch Ruler</h4>
                                    <img src="{!! asset('/frontend/images/product-overviews/rulers/ruler-square-12half.png') !!}" alt="12.5 x 12.5 rotary cutting ruler" style="height: 300px;"/>
                                    <div class="row">

                                        <a href="/machine-quilting/gq-frame.html" class="button button-rounded button-small">Buy Now</a>
                                    </div>
                                </div>

                                <div class="col-sm-4 bottommargin-sm">
                                    <h4 class="nobottommargin">Square 9&frac12; Inch Ruler</h4>
                                    <img src="{!! asset('/frontend/images/product-overviews/rulers/ruler-square-9half.png') !!}" alt="9.5 x 9.5 rotary cutting ruler" style="height: 300px;" />
                                    <div class="row">

                                        <a href="/machine-quilting/gq-frame.html" class="button button-rounded button-small">Buy Now</a>
                                    </div>
                                </div>

                                <div class="col-sm-4 bottommargin-sm">
                                    <h4 class="nobottommargin">Square 6&frac12; Inch Ruler</h4>
                                    <img src="{!! asset('/frontend/images/product-overviews/rulers/ruler-square-6half.png') !!}" alt="6.5 x 6.5 rotary cutting ruler" style="height: 300px;" />
                                <div class="row">

                                        <a href="/machine-quilting/gq-frame.html" class="button button-rounded button-small">Buy Now</a>
                                    </div>
                                </div>


                            </div>

                        </div>
                </div>










            </div><!--.content-wrap end-->

        </section><!-- #content end -->
@endsection


@section('footer_scripts')@endsection
@section('pp_footer_scripts')@endsection
@section('inlinejs')@endsection