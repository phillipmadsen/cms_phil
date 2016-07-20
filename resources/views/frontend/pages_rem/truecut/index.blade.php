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
@include('frontend.layout.partials.menu.submenu-items', ['items'=> $menu_hand->roots()])
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


                    <div class="container">

                        <div class="heading-block topmargin center">
                            <h1>TrueCut Rotary Cutting</h1>
                            <p class="before-heading">The Ultimate Cutting System</p>
                        </div>

                        <div class="col-sm-5"><p>TrueCut is a unique new cutting system that stretches beyond the features of other leading brands and is the ultimate solution for common cutting frustrations. TrueCut provides an easier, safer and more accurate method of cutting.</p>
                        </div>

                        <div class="col-sm-7" data-animate="fadeInRight">
                            <img src="../images/product-overviews/rotary-cutting-general/cutting_system_blue.png" / alt="TrueCut Rotary Cutting System">
                        </div>

                    </div>



                 <!--track and guide
                 =======================-->
                 <div class="section parallax nomargin clearfix" style=" border-top:2px solid #B14949; border-bottom:2px solid #B14949; background-image: url('/images/backgrounds/greyzz.png'); padding:0px; background-repeat:repeat;" data-stellar-background-ratio="0.4">
                     <div class="heading-block topmargin nobottommargin center nobottomborder" style="padding:0px 50px;">
                         <h2>Keeping you on track</h2>
                         <p class="before-heading">Giving you straight cuts everytime</p>
                     </div>



                         <div class="col-md-7" style="padding:15px 75px;">
                             <p class="lead">At the heart of TrueCut is our ruler track and cutter guide system. How would you like to have a ruler and cutter that gave you straight cuts every time? On each side of the ruler is a track that works with the guide on the rotary cutter. As you move the cutter along the ruler's track, the guide keeps the cutter from veering away from the ruler's edge.
                    </p>


                         </div>

                         <div class="col-md-5" style="padding:0px" data-animate="fadeInRight">
                             <img src="/images/product-overviews/comfort-cutter/comfort-track-guide.png" / alt="TrueCut Ruler Track and Cutter Guide">
                         </div>


                 </div>




                     <!-- My Comfort Cutter
    =================================================== -->


                <div class="section parallax nomargin clearfix" style=" border-top:2px solid #B14949; border-bottom:2px solid #B14949; background-image: url('/images/backgrounds/greyzz.png'); padding:0px; background-repeat:repeat;" data-stellar-background-ratio="0.4">
                    <div class="container">

                                    <div class="heading-block topmargin center">
                                        <h2>My Comfort Cutter</h2>
                                        <p class="before-heading">Taking the stress out of rotary cutting</p>
                                    </div>

                                    <div class="col-sm-6"><p>The comfort curve grip of this cutter relieves stress in the wrist and arm as you cut. The ergonomic Comfort Curve Grip aligns your wrist naturally, placing all cutting power directly over the blade and preventing stress in the wrist and arm. Cut you fabric comfortably, getting more power with less effort.
                                    </p>
                                  <div class="center"><a href="/machine-quilting/gq-frame.html" class="button button-rounded button-secondary">Learn More</a></div>
                                    </div>

                                    <div class="col-sm-6" data-animate="fadeInRight">
                                        <img src="../images/product-overviews/comfort-cutter/wrist-alignment-small.jpg" / alt="My Comfort Cutter: ergonomic rotary cutter">
                                    </div>

                                </div>
                </div>



                <!--sharpeners
                ==============================-->
            <div class="container">
                    <div class="heading-block center topmargin">
                                    <h2>Rotary Blade Sharpeners</h2>
                                    <p class="before-heading">Stay Sharp My Freinds</p>
                    </div>
                    <p>Extend the life of your rotary blades and keep them cutting the way they should with the TrueCut rotary blade sharpeners! The secret to the success of the sharpeners are the high-quality sharpening stones. The same tools and methods that have been used to sharpen blades for centuries have now been adapted for sharpening your rotary blades!</p>

                <div class="row">
                    <div class="col_half center">
                        <h3>TrueSharp Sharpener</h3>
                        <p class="before-heading">Electric Power Rotary Blade Sharpener</p>
                        <img src="../images/product-overviews/truesharp/truesharp-main-open.jpg">
                        <a href="/rotary-cutting/truesharp.html" class="button button-rounded button-secondary">Learn More</a>
                    </div>

                    <div class="col_half col_last center">
                        <h3>TrueCut Linear Sharpener</h3>
                        <p class="before-heading">Manual Rotary Blade Sharpener</p>
                    <img src="../images/product-overviews/linear_sharpener/linear-sharpener-main.jpg">
                    <a href="/rotary-cutting/truesharp.html" class="button button-rounded button-secondary">Learn More</a>
                    </div>
                </div>
            </div>











                <!--products
                ============================-->

                <div class="container clearfix">

                        <div class="row bottommargin-sm">
                            <div class="heading-block center nomargin">
                                <h2>TrueCut Rotary Cutting Products</h2>
                            </div>
                        </div>
                        <div class="row topmargin-sm clearfix">
                            <div class="col_one_fourth">
                                 <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                                     <h5 class="center">My Comfort Cutter</h5>
                                </div>
                                <img src="http://www.graceframe.com/site/images/stories/new-products/comfort-cutter/comfort-cutter-thumb-blue.jpg" />
                                <a href="/machine-quilting/gq-frame.html" class="button button-rounded button-secondary">Learn More</a>
                                Or
                                <a href="/machine-quilting/gq-frame.html" class="button button-rounded">Buy Now</a>

                            </div>

                            <div class="col_one_fourth">
                                 <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                                     <h5 class="center">StraightCut Cutter</h5>
                                </div>
                                <img src="http://www.graceframe.com/site/images/stories/rotary_cutting/thumbs/straightcut-thumb.jpg" alt="Gracie King and Queen Machine Quilting Frame" />
                                <a href="/machine-quilting/gracie-king.html" class="button button-rounded button-secondary">Learn More</a>
                                Or
                                <a href="/machine-quilting/gq-frame.html" class="button button-rounded">Buy Now</a>

                            </div>

                            <div class="col_one_fourth">
                                 <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                                     <h5 class="center">Rotary Cutting Rulers</h5>
                                </div>
                                <img src="http://www.graceframe.com/site/images/stories/rotary_cutting/thumbs/rulers-thumb.jpg" alt="Gracie King and Queen Machine Quilting Frame" />
                                <a href="/machine-quilting/gracie-king.html" class="button button-rounded button-secondary">Learn More</a>
                                Or
                                <a href="/machine-quilting/gq-frame.html" class="button button-rounded">Buy Now</a>

                            </div>

                            <div class="col_one_fourth col_last">
                                 <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                                     <h5 class="center">Cutting Mats</h5>
                                </div>
                                <img src="http://www.graceframe.com/site/images/stories/rotary_cutting/cutting-mats.jpg" alt="SR-2 Machine Quilting Frame" />
                                <a href="/machine-quilting/sr-2-frame.html" class="button button-rounded button-secondary">Learn More</a>
                                Or
                                <a href="/machine-quilting/gq-frame.html" class="button button-rounded">Buy Now</a>

                            </div>

                        </div><!--end first row-->

                        <div class="row topmargin-sm clearfix">
                            <div class="col_one_fourth">
                                 <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                                     <h5 class="center">Non-Slip Pads</h5>
                                </div>
                                <img src="http://www.graceframe.com/site/images/stories/rotary_cutting/non-slip-pads.jpg" />
                                <a href="/machine-quilting/gq-frame.html" class="button button-rounded button-secondary">Learn More</a>
                                Or
                                <a href="/machine-quilting/gq-frame.html" class="button button-rounded">Buy Now</a>

                            </div>

                            <div class="col_one_fourth">
                                 <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                                     <h5 class="center">TrueSharp Sharpener</h5>
                                </div>
                                <img src="http://www.graceframe.com/site/images/stories/rotary_cutting/truesharp.jpg" />
                                <a href="/machine-quilting/gracie-king.html" class="button button-rounded button-secondary">Learn More</a>
                                Or
                                <a href="/machine-quilting/gq-frame.html" class="button button-rounded">Buy Now</a>

                            </div>

                            <div class="col_one_fourth">
                                 <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                                     <h5 class="center">Linear Sharpener</h5>
                                </div>
                                <img src="http://www.graceframe.com/site/images/stories/rotary_cutting/linear-sharpener.jpg" />
                                <a href="/machine-quilting/gracie-king.html" class="button button-rounded button-secondary">Learn More</a>
                                Or
                                <a href="/machine-quilting/gq-frame.html" class="button button-rounded">Buy Now</a>

                            </div>

                            <div class="col_one_fourth col_last">
                                 <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                                     <h5 class="center">Sharpening Accessories</h5>
                                </div>
                                <img src="http://www.graceframe.com/site/images/stories/rotary_cutting/thumbs/shrapening-acc-thumb.jpg" alt="SR-2 Machine Quilting Frame" />
                                <a href="/machine-quilting/sr-2-frame.html" class="button button-rounded button-secondary">Learn More</a>
                                Or
                                <a href="/machine-quilting/gq-frame.html" class="button button-rounded">Buy Now</a>

                            </div>

                        </div><!--end second row-->

                        <div class="row topmargin-sm clearfix">
                            <div class="col_one_fourth">
                                 <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                                     <h5 class="center">TrueGrips</h5>
                                </div>
                                <img src="http://www.graceframe.com/site/images/stories/rotary_cutting/thumbs/truegrips-thumb.jpg" />
                                <a href="/machine-quilting/gq-frame.html" class="button button-rounded button-secondary">Learn More</a>
                                Or
                                <a href="/machine-quilting/gq-frame.html" class="button button-rounded">Buy Now</a>

                            </div>

                            <div class="col_one_fourth">
                                 <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                                     <h5 class="center">Rotary Blades</h5>
                                </div>
                                <img src="http://www.graceframe.com/site/images/stories/rotary_cutting/thumbs/blade-thumbs.jpg" />
                                <a href="/machine-quilting/gracie-king.html" class="button button-rounded button-secondary">Learn More</a>
                                Or
                                <a href="/machine-quilting/gq-frame.html" class="button button-rounded">Buy Now</a>

                            </div>

                            <div class="col_one_fourth">
                                 <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                                     <h5 class="center">Cutting Table</h5>
                                </div>
                                <img src="http://www.graceframe.com/site/images/stories/rotary_cutting/thumbs/combos-thumb.jpg" />
                                <a href="/machine-quilting/gracie-king.html" class="button button-rounded button-secondary">Learn More</a>
                                Or
                                <a href="/machine-quilting/gq-frame.html" class="button button-rounded">Buy Now</a>

                            </div>

                            <div class="col_one_fourth col_last">
                                 <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                                     <h5 class="center">Rotary Cutting Combos</h5>
                                </div>
                                <img src="http://www.graceframe.com/site/images/stories/rotary_cutting/thumbs/table-thumb.jpg" alt="SR-2 Machine Quilting Frame" />
                                <a href="/machine-quilting/sr-2-frame.html" class="button button-rounded button-secondary">Learn More</a>
                                Or
                                <a href="/machine-quilting/gq-frame.html" class="button button-rounded">Buy Now</a>

                            </div>

                        </div><!--end third row-->



                    </div>




            </div><!--.content-wrap end-->

        </section><!-- #content end -->
@endsection


@section('footer_scripts')@endsection
@section('pp_footer_scripts')@endsection
@section('inlinejs')@endsection