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

@section('jsonschema')@endsection

@section('bodytag')
rows
@endsection

@section('title')
GQ Machine Frame For Sewing and Quilting | The Grace Company
@endsection

@section('header_styles')@endsection
@section('scripts')@endsection
@section('ppscripts')@endsection


@section('submenu')
@include('frontend.layout.partials.menu.submenu-items', ['items'=> $menu_machine->roots()])
@endsection

@section('content')
<article>

    <!-- Content ============================================= -->
    <section id="content">

        <div class="content-wrap">

            <div class="container clearfix">
                <div class="row clearfix">
                 <div class="heading-block topmargin center">
                    <h3 itemprop="headline" >The GQ Machine Quilting Frame</h3>
                    <span class="before-heading" itemprop="description" >The top of the line quilting frame</span>
                </div>

                <div class="col-lg-5">
                    <p class="lead">
                       The GQ machine quilting frame is the top of the line, and designed to give you the optimal quilting experience. Using favorite features from past frames, the GQ frame also has innovative characteristics that are all its own. The carriage uses a fully dual-wheel system that enhances stitch qualit. The steel construction makes it extra durable and able to withstand years of heavy use.
                   </p>

               </div>

               <div class="col-lg-7">
                <img src="{!! url('frontend/images/product-overviews/gq-frame/gq-frame-king-large.png') !!}" data-animate="fadeInRight" alt="GQ machine quilting frame">
            </div>

        </div>


    </div>

    <!--carriage ========================================-->

    <div class="section parallax nobottommargin" style="background-image: url('{!! url('frontend/images/product-overviews/gq-frame/gq-angled.jpg') !!}');" data-stellar-background-ratio="0.4">

        <div class="col_half equalheight fright rightmargin">

            <div data-animate="fadeInUp" class="transparent-block-light col_half"equalheight  >
                <div class="block-img" style="-webkit-box-shadow: 3px 3px 5px 2px rgba(0,0,0,0.33);
                -moz-box-shadow: 3px 3px 5px 2px rgba(0,0,0,0.33);
                box-shadow: 3px 3px 5px 2px rgba(0,0,0,0.33);">
                <img src="{!! url('frontend/images/product-overviews/gq-frame/dual-track-square.jpg') !!}" alt="Qnique Quilter LCD Screen" >
            </div>
            <h3 class="nobottommargin topmargin-sm">SureTrack&trade; Dual-Wheel System</h3>
            <span class="before-heading">For enhanced stitching</span>
            <p> The <strong>SureTrack</strong> dual-wheel system provides the feel of a smooth gliding carriage as you quilt. The SureTrack enhances stitch quality, accuracy, and carriage motion.</p>

        </div>

    </div>


</div>

<!-- No-Baste Rails ===================================-->
<div class="container clearfix bottommargin">
    <div class="row clearfix topmargin">

        <div class="col-lg-8">
            <img src="{!! url('frontend/images/product-overviews/general-quilting/gq-ratched-ends.jpg') !!}" data-animate="fadeInLeft" alt="GQ machine quilting frame">
        </div>

        <div class="col-lg-4">
            <div class="heading-block center">
                <h3>No-Baste Quilting Rail System</h3>
            </div>
            <p class="lead">
               The GQ Quilting Frame saves you valuable time by eliminating the ordeal of basting.  All the quilt layers are attached to their own rails, and then come together and on to the take-up rail as you quilt. The GQ frame even features a fourth rail to help manage the batting layer
           </p>

       </div>


   </div>


</div>


<!--other features-->
<h2 class="toppadding-sm bottompadding-sm center bgcolor-second dark nobottommargin">Other GQ Frame Features</h2>
<div class="section nomargin" style="background-color:white;">
    <div class="container clear-bottommargin clearfix">


         <div class="row clearfix">

            <div class="col_half equalheight  bottommargin">
                <div class="feature-box center media-box fbox-bg">
                    <div class="fbox-media">
                       <img src="{!! url('frontend/images/product-overviews/gq-frame/gq-storage-shelf.jpg') !!}" alt="GQ frame storage shelf">
                    </div>
                    <div class="fbox-desc">
                        <div class="heading-block" style="margin-bottom: 15px;">
                            <h4>Under-Table Storage Shelf</h4>
                        </div>
                <p>All of the most important quilt functions and settings can be changed and are seen right on the display! So you'll always have quick access to stitching mode, stitch speed or stitch length, and needle position.</p>

                    </div>
                </div>
            </div>
           <div class="col_half equalheight col_last bottommargin">
                <div class="feature-box center media-box fbox-bg">
                    <div class="fbox-media">
                      <img src="{!! url('frontend/images/product-overviews/gq-frame/gq-fourth-rail.jpg') !!}" alt="Quilting Frame fourth rail">
                    </div>
                    <div class="fbox-desc">
                        <div class="heading-block" style="margin-bottom: 15px;">
                            <h4>Fourth Rail for Batting</h4>
                        </div>
                        <p>The GQ Quilting Frame includes a fourth rail to manage your batting and keep it off of the floor.</p>
                    </div>
                </div>
            </div>
        </div>




        <div class="row clearfix">

            <div class="col_half equalheight  bottommargin">
                <div class="feature-box center media-box fbox-bg">
                    <div class="fbox-media">
                     <img src="{!! url('frontend/images/product-overviews/gq-frame/leveling-feet.jpg') !!}" alt="Quilting Frame Leveling Feet">
                    </div>
                    <div class="fbox-desc">
                        <div class="heading-block" style="margin-bottom: 15px;">
                            <h4>Leveling Feet</h4>
                        </div>
                <p>No matter what floor your frame is on, these feet are an easy way to make sure it's level and balanced.</p>

                    </div>
                </div>
            </div>
           <div class="col_half equalheight col_last bottommargin">
                <div class="feature-box center media-box fbox-bg">
                    <div class="fbox-media">
                       <img src="{!! url('frontend/images/product-overviews/gq-frame/gq-construction.jpg') !!}" alt="GQ Frame">
                    </div>
                    <div class="fbox-desc">
                        <div class="heading-block" style="margin-bottom: 15px;">
                            <h4>Aluminum and Steel Construction</h4>
                        </div>
                        <p>Much of the body of the GQ frame is aluminum, making it sturdy, yet light-weight. The rails of the frame are made from steel for maximum rigidity.</p>
                    </div>
                </div>
            </div>
        </div>


        <div class="row clearfix">

            <div class="col_half equalheight  bottommargin">
                <div class="feature-box center media-box fbox-bg">
                    <div class="fbox-media">
                       <img src="{!! url('frontend/images/product-overviews/gq-frame/gq-height-legs.jpg') !!}" alt="GQ Frame Height adjustable legs">
                    </div>
                    <div class="fbox-desc">
                        <div class="heading-block" style="margin-bottom: 15px;">
                            <h4>Height-Adjustable Legs</h4>
                        </div>
                <p>Height-adjustable legs let you work at the level that is most comfortable to you.</p>

                    </div>
                </div>
            </div>
           <div class="col_half equalheight col_last bottommargin">
                <div class="feature-box center media-box fbox-bg">
                    <div class="fbox-media">
                      <img src="{!! url('frontend/images/product-overviews/gq-frame/gq-ratchet.jpg') !!}" alt="quilting frame rail ratchet">
                    </div>
                    <div class="fbox-desc">
                        <div class="heading-block" style="margin-bottom: 15px;">
                            <h4>Precision Locking Ratchets</h4>
                        </div>
                        <p>Handling fabric tension is easy with these locking/unlocking ratchets.</p>
                    </div>
                </div>
            </div>
        </div>

</div>
</div>




<!--included accessories Section ========================-->
<div class="section topmargin nobottommargin">
    <div class="container clear-bottommargin clearfix">
        <div class="heading-block center">
            <h2>Included Accessories</h2>
        </div>

        <div class="row topmargin-sm clearfix">

            <div data-animate="fadeInUp" class="col-md-4 equalheight bottommargin">
                <img style="padding-bottom:15px;" src="{!! url('frontend/images/product-overviews/gq-frame/gq-bungees-700.jpg') !!}" alt="quilting bungee clamps" />
                <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                    <h4>Bungee Clamps</h4>
                    <span class="before-heading">For Perfect Side Tension</span>

                </div>
                <p>The Bungee Clamps provide excellent and even side tension at the edges of your quilt. These new and improved Grace Company Bungee Clamps have been designed with a sleek new profile to make attaching and removing them even easier!</p>
            </div>

            <div data-animate="fadeInUp" data-delay="200" class="col-md-4 equalheight bottommargin">
               <img style="padding-bottom:15px;" src="{!! url('frontend/images/product-overviews/general-quilting/fabri-fast-400.png') !!}" alt="Fabri-fast rails in use" />
               <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                <h4>Fabri-Fast Tube and Tool</h4>
                <span class="before-heading">Easy Fabric Loading</span>
            </div>
            <p>The unique Grace Company Fabri-Fast rails make attaching fabric to your rails a breeze. Use the included Fabri-Fast tool to push your fabric and the provided Fabri-Fast tube into the rail slot.</p>
        </div>

        <div data-animate="fadeInUp" data-delay="400" class="col-md-4 equalheight bottommargin">
            <img style="padding-bottom:15px;" src="{!! url('frontend/images/product-overviews/accessories/speed-control-700.jpg') !!}" alt="Quilting Machine Speed Control" />
            <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                <h4>Speed Control</h4>
                <span class="before-heading">Quilting power at your fingertips</span>
            </div>
            <p>The Grace Speed Control is a universal foot pedal replacement. Use the dial to set the speed of your sewing machine as you quilt. It works with many sewing machines on the market. Check the <a href="#">compatibility list</a> to see if it will work with your quilting or sewing machine!</p>
        </div>

    </div>

</div>
</div>


<!--image parallax-->


<div class="section parallax nomargin center" style="background-image: url('{!! url('frontend/images/product-overviews/gq-frame/gq-angled-left.jpg') !!}'); height:600px;" data-stellar-background-ratio="0.4">
    <!--buy button, awkard here-->
                    <!--
                    <div style="background-color:rgba(0,0,0,)">
                        <a href="#" class="button button-rounded button-secondary button-large">Buy Now</a>
                    </div>
                -->
            </div>



            <!--Addittional Accessories-->
            <div class="section notopmargin nobottommargin">
                <div class="container clear-bottommargin clearfix">
                    <div class="heading-block center">
                        <h2>Additional Accessories</h2>
                    </div>

                    <div class="row topmargin-sm clearfix">

                        <div data-animate="fadeInUp" class="col-md-6 bottommargin">
                            <img style="padding-bottom:15px;" src="{!! url('frontend/images/product-overviews/gq-frame/gq-bungees-700.jpg') !!}" alt="quilting bungee clamps" />
                            <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                                <h4>Optional Idler Rail</h4>
                                <span class="before-heading">Convenient for machines with larger throats</span>

                            </div>
                            <p>You usually have to continually raise the take-up rail as the quilt gets rolled up onto it. Not so with this optional idler rail! The idler rail keeps tension on all the quilt layers and allows the take-up rail to remain at a fixed height. This item is only available for quilting machines with larger throat spaces.
                            </p>
                            <a href="#" class="button button-rounded">Buy Now</a>

                        </div>

                        <div data-animate="fadeInUp" data-delay="200" class="col-md-6 bottommargin">
                           <img style="padding-bottom:15px;" src="{!! url('frontend/images/product-overviews/gq-frame/extension.png') !!}" alt="Fabri-fast rails in use" />
                           <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                            <h4>2 Foot Extension</h4>
                            <span class="before-heading">Extend the length of your frame</span>
                        </div>
                        <p>Add the 2 foot extension to your GQ Quilting Frame for the largest available quilting space!
                        </p>
                        <a href="#" class="button button-rounded">Buy Now</a>
                    </div>

                </div>

            </div>
        </div>

        <!--specs ==================================-->
        <h2 class="toppadding-sm bottompadding-sm center bgcolor-second dark nobottommargin">GQ Frame Specs</h2>
        <div class="section parallax nomargin" style="background-image: url('{!! url('frontend/images/backgrounds/square_bg.png') !!}'); background-repeat:repeat; padding-top:0px;" data-stellar-background-ratio="0.4">

            <div class="container clear-bottommargin">

                <div class="row topmargin-sm">


                    <div class="col-md-12">
                        <img data-animate="fadeInLeft" src="{!! url('frontend/images/product-overviews/gq-frame/gq-size.png') !!}" alt="GQ frame size" />
                    </div>
                </div>

                <div class="row topmargin-sm center">
                    <div data-animate="fadeInUp" class="col-md-3 bottommargin">
                       <div class="feature-box fbox-center fbox-outline fbox-effect nobottomborder">
                        <div class="fbox-icon">
                            <i class="icon-th-large"></i>
                        </div>
                    </div>
                    <h3 class="nobottommargin">Maximum Quilt Area</h3>
                    <dl>
                        <dt>King:</dt>
                        <dd>108"</dd>
                        <dt>Crib:</dt>
                        <dd>48"</dd>
                    </dl>
                </div>

                <div data-animate="fadeInUp" data-delay="200" class="col-md-3 bottommargin">
                   <div class="feature-box fbox-center fbox-outline fbox-effect nobottomborder">
                    <div class="fbox-icon">
                        <i class="icon-resize-horizontal"></i>
                    </div>
                </div>
                <h3 class="nobottommargin">Maximum Machine Throat Size</h3>
                <p>20 inches</p>
            </div>

            <div data-animate="fadeInUp" data-delay="400" class="col-md-3 bottommargin">
               <div class="feature-box fbox-center fbox-outline fbox-effect nobottomborder">
                <div class="fbox-icon">
                    <i class="icon-settings"></i>
                </div>
            </div>
            <h3 class="nobottommargin">Rail Diameter</h3>
            <p>1&frac12; inches</p>
        </div>

        <div data-animate="fadeInUp" data-delay="600" class="col-md-3 bottommargin">
           <div class="feature-box fbox-center fbox-outline fbox-effect nobottomborder">
            <div class="fbox-icon">
                <i class="icon-road"></i>
            </div>
        </div>
        <h3 class="nobottommargin">Track System</h3>
        <p>Dual-wheel track</p>
    </div>


</div>

</div>
</div>

<!--frames ============================-->
<a class="button button-full button-dark center tright bottommargin-sm" href="{!! url('/') !!}/machine-frames/compare-machine-frames/">
    <div class="container clearfix">
        Compare this frame to other machine quilting frames <i class="icon-caret-right" style="top:4px;"></i>
    </div>
</a>

<div class="container clearfix">

    <div class="row bottommargin-sm">
        <div class="heading-block center nomargin">
            <h1>Grace Machine Quilting Frames</h1>
        </div>
    </div>
    <div class="row topmargin-sm clearfix">
        <div class="col_one_third">
         <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
             <h5 class="center">GQ Frame</h5>
         </div>
         <img src="{!! url('frontend/images/product-overviews/gq-frame/gq--frame-438.png') !!}" alt="Grace GQ Machine Quilting Frame" />
         <a href="{!! url('/') !!}/machine-frames/gq-frame/" class="button button-rounded">Buy Now</a>

     </div>

     <div class="col_one_third">
         <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
             <h5 class="center">Gracie King Or Queen</h5>
         </div>
         <img src="{!! url('frontend/images/product-overviews/general-quilting/gracie-king-queen-438.png') !!}" alt="Gracie King and Queen Machine Quilting Frame" />
         <a href="{!! url('/') !!}/machine-frames/gracie-king/" class="button button-rounded button-secondary">Learn More</a>
         Or
         <a href="{!! url('/') !!}/machine-frames/gq-frame/" class="button button-rounded">Buy Now</a>

     </div>

     <div class="col_one_third col_last">
         <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
             <h5 class="center">SR-2 Frame</h5>
         </div>
         <img src="{!! url('frontend/images/product-overviews/sr-2-frame/sr-2-frame-438.png') !!}" alt="SR-2 Machine Quilting Frame" />
         <a href="{!! url('/') !!}/machine-frames/sr-2-frame/" class="button button-rounded button-secondary">Learn More</a>
         Or
         <a href="{!! url('/') !!}/machine-frames/gq-frame/" class="button button-rounded">Buy Now</a>

     </div>

 </div>

 <div class="row bottommargin-sm center">
    <a href="{!! url('/') !!}/machine-frames/compare-machine-frames/" class="button button-border button-rounded">Compare Frames</a>
</div>

</div>

</div>

</section><!-- #content end -->
</article>
@endsection


@section('footer_scripts')@endsection
@section('pp_footer_scripts')@endsection
