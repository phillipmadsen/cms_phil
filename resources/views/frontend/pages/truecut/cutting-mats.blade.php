@extends('frontend/layout/layout')

@section('htmlschema')
itemscope itemtype="http://schema.org/Article"
@endsection

@section('bodyschema')
@endsection

@section('seo')
    <meta name="title" content="TrueCut Cutting Mats">
    <meta name="description" content="welcome to the Hand Quilting section of the new Grace Company Website">
    <meta name="keywords" content="the grace company, hand quilting frame, grace frames, grace hand frames, grace and sewing frames, sewing hoops, lap hoops">
    <meta name="author" content="The Grace Company"/>
@endsection

@section('title')
TrueCut Cutting Mats | TrueCut Section | The Grace Company
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

                <div class="col-xs-12 clearfix" style="padding: 0px;"><img src="{!! asset('/frontend/images/product-overviews/cutting-mats/mat-banner.png') !!}"></div>
                    <div class="container bottommargin">

                        <div class="clearfix heading-block topmargin-sm center">
                            <h1>TrueCut Cutting Mats</h1>
                        </div>

                          <div class="col-sm-2">
                        </div>


                    <div class="col-sm-8 center">
                        <p lass="lead">TrueCut Cutting mats are top-of-the-line, featuring an enhanced self-healing surface and special attention to the detail of the grid measurements and numbering.  </p>
                        <img src="{!! asset('/frontend/images/product-overviews/cutting-mats/truecut_mats.jpg') !!}" / alt="TrueCut cutting mats">
                   </div>


                        <div class="col-sm-2">
                        </div>



                    </div>


                <!---5-layer-pvc)
=======================================================-->
                 <div class="section parallax nomargin clearfix" style="border-top:2px solid #B14949; border-bottom:2px solid #B14949; background-image: url('{!! asset('/frontend/images/backgrounds/square_bg.png') !!}'); padding:0px; background-repeat:repeat;" data-stellar-background-ratio="0.4">



                            <div class="row">
                                <div class="col-sm-1"></div>

                                <div class="col-sm-5">
                                <div class="heading-block topmargin center nobottomborder nobottommargin">
                                <h2>Enhanced Cutting Surface</h2>
                                <p class="before-heading">Improved Self-Healing</p>
                                </div>
                                <h4 class="center">5-Layered Self-Healing Surfaces</h4>
                                    <p class="center" style="padding:0px; margin: 0px;"><img class="center" src="{!! asset('/frontend/images/product-overviews/cutting-mats/mats-layers.png') !!}" alt="5-layerd PVC cutting mat"></p>
                                    <p class="nobottommargin">Our self-healing cutting mats have a center core made of a 5 layer PVC plastic, allowing the cuts to self-heal faster and keep the working surface smooth.</p>
                                </div>

                                <div class="col-sm-6 col-last" style="padding-right: 0px;">
                                    <img data-animate="fadeInRight" src="{!! asset('/frontend/images/product-overviews/cutting-mats/sally_comfort.png') !!}" alt="truecut cutting mat in use" />
                                </div>
                            </div>



                    </div>





                     <!-- Double Sided
    =================================================== -->
                <div class="section parallax nomargin clearfix" style=" border-bottom:2px solid #B14949; background-image: url('{!! asset('/frontend/images/backgrounds/greyzz.png') !!}'); padding:0px; background-repeat:repeat;" data-stellar-background-ratio="0.4">


                            <div class="row">
                                <div class="col-sm-1"></div>

                                <div class="col-sm-7">
                                <div class="heading-block topmargin center nobottomborder nobottommargin">
                                <h2>Double-Sided Cutting Mats</h2>
                                <p class="before-heading">Double the sides, double the use!</p>
                                </div>
                                    <div class="row center bottommargin-sm">
                                        <div class="col-xs-6"><img class="center" src="{!! asset('/frontend/images/product-overviews/cutting-mats/mat-side-1.png') !!}" alt="5-layerd PVC cutting mat"></div>


                                        <div class="col-xs-6"><img class="center" src="{!! asset('/frontend/images/product-overviews/cutting-mats/mat-side-1.png') !!}" alt="5-layerd PVC cutting mat"></div>
                                    </div>

                                    <p class="nobottommargin">All of our self-healing mats are double-sided, so you get double the use! One side includes angle reference guides lines, the other side has bias markings for cutting bias strips. Use both sides to double the life of your mat!</p>
                                </div>

                                <div class="col-sm-4 col-last" style="padding-right: 0px;">
                                    <img data-animate="fadeInRight" src="{!! asset('/frontend/images/product-overviews/cutting-mats/mat-fold.png') !!}" alt="double-sided cutting mat" />
                                </div>
                            </div>






                </div>



                 <!--Other Features
================================-->
               <div class="container clearfix topmargin bottommargin">
                    <div class="heading-block center">
                        <h3>Other TrueCut Cutting Mat Features</h3>
                    </div>

                        <div class="row clearfix">

                           <div class="col_half  nobottommargin">
                               <div class="feature-box center media-box fbox-bg">
                                   <div class="fbox-media">
                                     <img src="{!! asset('/frontend/images/product-overviews/cutting-mats/numbers-outside.png') !!}" alt="easy to see grid measurements">
                                   </div>
                                   <div class="fbox-desc">
                                       <div class="heading-block nobottomborder nobottommargin">
                                           <h4>Easy to use Grid and Measurements</h4>
                                       </div>
                               <p>The grids on the TrueCut cutting mats are precisely measured in &frac18; increments in easy to see colors. The numbers are set right on the border of the grid, allowing you to accurately measure and make cuts all the way to the edges without the fabric covering the numbers.</p>

                                   </div>
                               </div>
                           </div>
                          <div class="col_half col_last nobottommargin">
                               <div class="feature-box center media-box fbox-bg">
                                   <div class="fbox-media">
                                      <img src="{!! asset('/frontend/images/product-overviews/cutting-mats/angles.png') !!}" alt="multiple rotary blade brands">
                                   </div>
                                   <div class="fbox-desc">
                                       <div class="heading-block nobottomborder nobottommargin">
                                           <h4>Angle Reference Lines</h4>
                                       </div>
                                       <p>All of our mats have angle markings for 45, 60, and 90 degree cuts.</p>
                                   </div>
                               </div>
                           </div>
                       </div>


                       <div class="row clearfix">
                           <div class="col_half  nobottommargin">
                               <div class="feature-box center media-box fbox-bg">
                                   <div class="fbox-media">
                                     <img src="{!! asset('/frontend/images/product-overviews/cutting-mats/bias.png') !!}" alt="fabric bias lines">
                                   </div>
                                   <div class="fbox-desc">
                                       <div class="heading-block nobottomborder nobottommargin">
                                           <h4>Fabric Grain and Bias Lines</h4>
                                       </div>
                               <p>Guide lines area available on one side of the mat, showing the grain, bias and true-bias directions of the fabric.</p>

                                   </div>
                               </div>
                           </div>
                          <div class="col_half col_last nobottommargin">
                               <div class="feature-box center media-box fbox-bg">
                                   <div class="fbox-media">
                                      <img src="{!! asset('/frontend/images/product-overviews/cutting-mats/right-left.png') !!}" alt="cutting mat read from both sides">
                                   </div>
                                   <div class="fbox-desc">
                                       <div class="heading-block nobottomborder nobottommargin">
                                           <h4>Numbers Run in Both Directions</h4>
                                       </div>
                                       <p>The measurements along the top and bottom run in both directions so you can measure left-to-right or right-to-left.</p>
                                   </div>
                               </div>
                           </div>
                       </div>

                </div>



                 <!-- Buy
====================================-->

                        <div class="row bottommargin-sm" style="border-top:2px solid #b14949;">
                            <div class="heading-block center topmargin nobottomborder nobottommargin">
                                <h3>3 Different Sizes</h3>
                            </div>
                        </div>
                        <div class="container topmargin-sm clearfix center">


                            <div class="row">
                                <div class="col-sm-4 bottommargin-sm" data-animate="fadeInUp">
                                    <h4 class="nobottommargin">36 x 24 Inches</h4>
                                    <img src="{!! asset('/frontend/images/product-overviews/cutting-mats/cutting-mat-36x24.png') !!}" alt="36x24 Cutting Mat" />
                                    <div class="row">

                                        <a href="{!! url(getLang(). '/shop') !!}.html" class="button button-rounded button-small">Buy Now</a>
                                    </div>
                                </div>

                                <div class="col-sm-4 bottommargin-sm" data-animate="fadeInUp" data-delay="200">
                                    <h4 class="nobottommargin">24 x 18 Inches</h4>
                                    <img src="{!! asset('/frontend/images/product-overviews/cutting-mats/cutting-mat-24x18.png') !!}" alt="24x18 Cutting Mat" />
                                    <div class="row">

                                        <a href="{!! url(getLang(). '/shop') !!}" class="button button-rounded button-small">Buy Now</a>
                                    </div>
                                </div>

                                <div class="col-sm-4 bottommargin-sm" data-animate="fadeInUp" data-delay="400">
                                    <h4 class="nobottommargin">18 x 12 Inches</h4>
                                    <img src="{!! asset('/frontend/images/product-overviews/cutting-mats/cutting-mat-18x12.png') !!}" alt="18x12 Cutting Mat" />
                                <div class="row">

                                        <a href="{!! url(getLang(). '/shop') !!}" class="button button-rounded button-small">Buy Now</a>
                                    </div>
                                </div>


                            </div>

                        </div>


               <!-- Pads
====================================-->

                        <div class="row clearfix nobottommargin" style="border-top:2px solid #b14949;">
                            <div class="heading-block center topmargin nobottomborder nobottommargin">
                                <h3>Non-Slip Pads</h3>
                                <p class="before-heading">A Cutting Mat's Best Friend</p>
                            </div>
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
                                    <img src="{!! asset('/frontend/images/product-overviews/cutting-mats/pad24x36.jpg') !!}" alt="Large Non-Slip Pad" />
                                    <div class="row">

                                        <a href="{!! url(getLang(). '/shop') !!}.html" class="button button-rounded button-small">Buy Now</a>
                                    </div>
                                </div>

                                <div class="col-sm-4 bottommargin-sm" data-animate="fadeInUp" data-delay="200">
                                    <h4 class="nobottommargin">24 x 18 Inches</h4>
                                    <img src="{!! asset('/frontend/images/product-overviews/cutting-mats/pad-18x24.jpg') !!}" alt="Medium Non-Slip Pad" />
                                    <div class="row">

                                        <a href="{!! url(getLang(). '/shop') !!}.html" class="button button-rounded button-small">Buy Now</a>
                                    </div>
                                </div>

                                <div class="col-sm-4 bottommargin-sm" data-animate="fadeInUp" data-delay="400">
                                    <h4 class="nobottommargin">18 x 12 Inches</h4>
                                    <img src="{!! asset('/frontend/images/product-overviews/cutting-mats/pad-12x18.jpg') !!}" alt="Small Non-Slip Pad" />
                                <div class="row">

                                        <a href="{!! url(getLang(). '/shop') !!}.html" class="button button-rounded button-small">Buy Now</a>
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