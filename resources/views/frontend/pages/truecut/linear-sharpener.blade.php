@extends('frontend/layout/layout')

@section('htmlschema')
itemscope itemtype="http://schema.org/Article"
@endsection

@section('bodyschema')
@endsection

@section('seo')
    <meta name="title" content="Rotary Cutting Accessories">
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

                 <div class="container nobottommargin">

                        <div class="heading-block topmargin nobottommargin center">
                            <h1>Linear Rotary Blade Sharpener</h1>
                            <p class="before-heading">Linear Rotary Blade Sharpener</p>
                        </div>

                        <div class="row clearfix">
                          <div class="col-sm-2"></div>

                           <div class="col-sm-8"><img data-animate="fadeInRight" src="{!! asset('/frontend/images/product-overviews/linear_sharpener/linear-sharpener-main.jpg') !!}" / alt="Linear Sharpener"></div>

                           <div class="col-sm-2"></div>
                         </div>

                            <p class="lead">This linear sharpener sharpens your blade with the same motion you use when cutting fabric. You don't even have to touch your blade, just leave it in your cutter! Sharp blades require less pressure to cut, giving you more accuracy and less chance of slipping.</p>



                    </div>


                 <!--Other Features
================================-->
              <div class="row bottommargin-sm" style="border-top:2px solid #b14949;">
                  <div class="heading-block center topmargin nobottomborder">
                      <h2>Linear Rotary Blade Sharpener</h2>
                  </div>
              </div>
               <div class="container clearfix topmargin bottommargin">

                        <div class="row clearfix">

                           <div class="col_half  nobottommargin">
                               <div class="feature-box center media-box fbox-bg">
                                   <div class="fbox-media">
                                     <img src="{!! asset('/frontend/images/product-overviews/linear_sharpener/stone.png') !!}" alt="sharpens both side of rotary blade at the the same time">
                                   </div>
                                   <div class="fbox-desc">
                                       <div class="heading-block nobottomborder nobottommargin">
                                           <h4>High-Quality Sharpening Stone</h4>
                                       </div>
                               <p>A high-quality sharpening stone has been designed so that you can use the same process that has been used to sharpen blades for centuries. The sharpening stone is four-sided so that when needed, you can rotate the stone to a fresh side, extending the life of the sharpener.</p>

                                   </div>
                               </div>
                           </div>
                          <div class="col_half col_last nobottommargin">
                               <div class="feature-box center media-box fbox-bg">
                                   <div class="fbox-media">
                                      <img src="{!! asset('/frontend/images/product-overviews/linear_sharpener/safe.png') !!}" alt="Plugs in. Sharpener doesn't use batteries">
                                   </div>
                                   <div class="fbox-desc">
                                       <div class="heading-block nobottomborder nobottommargin">
                                           <h4>Easy And Safe To Use</h4>
                                       </div>
                                       <p>You don't even have to remove the blade from the cutter to use the Linear Sharpener! Just pass the cutter back and forth through the sharpener, using the same kind of motion you use when cutting fabric.
</p>
                                   </div>
                               </div>
                           </div>
                       </div>

                        <div class="row clearfix topmargin-sm">

                           <div class="col_half  nobottommargin">
                               <div class="feature-box center media-box fbox-bg">
                                   <div class="fbox-media">
                                     <img src="{!! asset('/frontend/images/product-overviews/linear_sharpener/full_line.png') !!}" alt="sharpens both side of rotary blade at the the same time">
                                   </div>
                                   <div class="fbox-desc">
                                       <div class="heading-block nobottomborder nobottommargin">
                                           <h4>Any Brand Or Size Of Blade From 28mm To 60mm</h4>
                                       </div>
                               <p>Do you have more than one cutter at home? More than 10? Any rotary cutter will work with the TrueCut Linear Sharpener, thanks to its unique design. You can also use it with any size of rotary blade from 28mm to 60mm!</p>

                                   </div>
                               </div>
                           </div>
                          <div class="col_half col_last nobottommargin">
                               <div class="feature-box center media-box fbox-bg">
                                   <div class="fbox-media">
                                      <img src="{!! asset('/frontend/images/product-overviews/linear_sharpener/sticky_feet.png') !!}" alt="Plugs in. Sharpener doesn't use batteries">
                                   </div>
                                   <div class="fbox-desc">
                                       <div class="heading-block nobottomborder nobottommargin">
                                           <h4>Non-Slip Bottom Feet</h4>
                                       </div>
                                       <p>The sharpening process is made easier and safer by the non-slip bottom surface of the TrueCut Linear Sharpener. The non-slip feet keep the sharpener from moving while in use, so sharpening is a hands-free process.</p>
                                   </div>
                               </div>
                           </div>
                       </div>

                </div>


                 <!-- compared
====================================-->

                        <div class="row bottommargin-sm" style="border-top:2px solid #b14949;">
                            <div class="heading-block center topmargin nobottomborder">
                                <h2>TrueCut Rotary Blade Sharpeners</h2>
                            </div>
                        </div>
                        <div class="container topmargin-sm clearfix center">



                                <div class="row center col-md-6 col-sm-6 bottommargin-lg">
                                  <h4 class="nobottommargin">TrueSharp Power Sharpener</h4>
                                  <img src="{!! asset('/frontend/images/product-overviews/linear_sharpener/truesharp_blades.png') !!}" alt="Linear Sharpener" />

                                  <div class="row center topmargin">
                                    <a href=" " class="button button-rounded button-small button-secondary">Learn More</a>
                                    <a href=" " class="button button-rounded button-small">Buy Now</a>
                                  </div>
                                </div>



                                <div class="row center col-md-6 col-sm-6 bottommargin-lg">
                                    <h4 class="nobottommargin">Linear Rotary Blade Sharpener</h4>
                                    <img src="{!! asset('/frontend//images/product-overviews/linear_sharpener/linear-blue.png') !!}" alt="Z44 Hand Quilting Frame King Size" />

                                    <div class="row center topmargin">
                                      <a href="/machine-quilting/gq-frame.html" class="button button-rounded button-small">Buy Now</a>
                                    </div>
                                </div>



                        </div>




            </div><!--.content-wrap end-->

        </section><!-- #content end -->
@endsection


@section('footer_scripts')@endsection
@section('pp_footer_scripts')@endsection
@section('inlinejs')@endsection