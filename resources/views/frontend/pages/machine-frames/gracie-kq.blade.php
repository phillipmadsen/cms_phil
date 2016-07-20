@extends('frontend/layout/layout')

@section('htmlschema')
itemscope itemtype="http://schema.org/Article"
@endsection

@section('bodyschema')@endsection

@section('seo')
    <meta name="description" content="">
    <meta name="keywords" content="gracie king quilting frame, gracie queen quilting frame, gracie queen frame, gracie king frame">
    <meta name="author"content="The Grace Company"/>
@endsection

@section('jsonschema')@endsection

@section('bodytag')
rows
@endsection

@section('title')
Gracie King & Queen Frames | The Grace Company
@endsection

@section('subtitle')
Sewing and Quilting
@endsection

@section('header_styles')@endsection
@section('scripts')@endsection
@section('ppscripts')@endsection

@section('submenu')
@include('frontend.layout.partials.menu.submenu-items', ['items'=> $menu_machine->roots()])
@endsection


@section('page-titled')

<section id="page-title">
    <div class="container clearfix">
        <h1 itemprop="headline">Gracie King & Queen Frames </h1>
        <span>For Sewing and Quilting</span>
         <ol class="breadcrumb" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
        <li class="breadcrumb-lead"><a title="Go Home." href="{!! url(getLang().'/') !!}/" itemprop="url"><span itemprop="title">Home</span></a></li>
          <li itemprop="child" itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a title="Go to Machine Quilting" href="{!! url(getLang(). '/') !!}/machine-frames/" itemprop="url"><span itemprop="title">Machine Quilting </span></a></li>
          <li class="active" itemprop="child" itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><span itemprop="title">Gracie King / Queen </span></li>
        </ol>
    </div>
</section>
<br style="clear:both" />

@endsection

@section('content')

<!-- Content ============================================= -->
<section id="content">

    <div class="content-wrap">

        <div class="container clearfix">
            <div class="row clearfix">
                 <div class="heading-block topmargin center">
                        <h3>The Gracie King&#47Queen</h3>
                     <span class="before-heading">Machine Quilting Frames</span>
                    </div>

                <div class="col-lg-5">
                    <p class="lead">
                The Gracie King &amp; Queen are for quilters who desire stability without sacrificing the traditional beauty of a wood-crafted frame. The King is our largest frame yet and can be set up in three sizes, while the Queen can be set in two. They both have height-adjustable legs allowing you work at your most comfortable level, and even a flip-up rail so you can easily examine and adjust the batting under your top quilt layer. The King also features a fourth rail to keep your batting off the floor, and with the extension kit, the Queen can do the same.
                    </p>

                </div>

                <div class="col-lg-7">
                        <img src="{!! asset('/frontend/images/product-overviews/gracie-kq/king-queen.jpg') !!}" data-animate="fadeInRight" alt="Gracie King-Queen machine quilting frames">
                </div>

            </div>


        </div>

            <!--carriage ========================================-->

        <div class="section parallax nobottommargin" style="background-image: url('{!! asset('/frontend/images/product-overviews/gracie-kq/gracie_angled.jpg') !!}');" data-stellar-background-ratio="0.4">

            <div class="container">
                <div class="col-sm-4 fright transparent-block-light" data-animate="fadeInUp">

                        <div class="block-img" style="-webkit-box-shadow: 3px 3px 5px 2px rgba(0,0,0,0.33); -moz-box-shadow: 3px 3px 5px 2px rgba(0,0,0,0.33); box-shadow: 3px 3px 5px 2px rgba(0,0,0,0.33);"> <img src="{!! asset('/frontend/images/product-overviews/gracie-kq/rails.jpg') !!}" alt="No Baste" >
                        </div>
                        <h3 class="nobottommargin topmargin-sm">No Baste, No Fuss System</h3>
                        <span class="before-heading">Lose the pins!</span>
                        <p> The sturdy aluminum rails and precision ratchets make it easy to handle your fabric and get proper tension without basting!</p>


                </div>
            </div>


        </div>

            <!-- wood construction ===================================-->
        <div class="container clearfix bottommargin">
            <div class="row clearfix topmargin">

                <div class="col-lg-4">
                    <div class="heading-block center">
                        <h3>Beautiful Wood Construction</h3>
                        <span class="before-heading">Would you prefer a more traditional frame, beautifully crafted from Baltic Birch wood?</span>
                    </div>
                    <p class="lead">
                The traditional beauty of the Gracie King and Gracie Queen comes from this European wood and also gives the frame improved strength &amp; durability over many other types of wood. If the frame should ever get wet, you have little to worry, because Baltic Birch resists mold. Its thick, strong core veneer layers are cross-banded and laminated with exterior adhesive. This chemical formula creates a wood free of voids that holds screws better, has cleaner joints, and overall will last a very, very, very long time. We can even stain it for you!
                    </p>

                </div>

                 <div class="col-lg-8">
                        <img src="{!! asset('/frontend/images/product-overviews/gracie-kq/woodframe.jpg') !!}" data-animate="fadeInRight" alt="wood crafted quilting frame">
                </div>


            </div>


        </div>


            <!--other features-->
        <h2 class="toppadding-sm bottompadding-sm center bgcolor-second dark nobottommargin">Other Gracie Frame Features</h2>
        <div class="section nomargin" style="background-color:white;">
            <div class="container clear-bottommargin clearfix">


            <div class="row clearfix">
                 
                <div class="col_half  bottommargin">
                    <div class="feature-box center media-box fbox-bg">
                        <div class="fbox-media">                                 
                         <img src="{!! asset('/frontend/images/product-overviews/gracie-kq/feet.png') !!}" alt="Adjustable Feet">
                        </div>
                        <div class="fbox-desc">
                            <div class="heading-block" style="margin-bottom: 15px;">
                                <h4>Leveling Feet</h4>
                            </div>
                    <p>No matter what floor your frame is on, these feet are an easy way to make sure it's level and balanced.</p>

                        </div>
                    </div>
                </div>
               <div class="col_half col_last bottommargin">
                    <div class="feature-box center media-box fbox-bg">
                        <div class="fbox-media">                                 
                          <img src="{!! asset('/frontend/images/product-overviews/gracie-kq/legs.png') !!}" alt="Adjustable Legs">
                        </div>
                        <div class="fbox-desc">
                            <div class="heading-block" style="margin-bottom: 15px;">
                                <h4>Height-Adjustable Legs</h4>
                            </div>
                            <p>Height adjustable legs are standard on both the Gracie King and the Gracie Queen, letting you work at the level that is most comfortable to you.</p>
                        </div>
                    </div>
                </div>
            </div>



            <div class="row clearfix">
                 
                <div class="col_half  bottommargin">
                    <div class="feature-box center media-box fbox-bg">
                        <div class="fbox-media">                                 
                        <img src="{!! asset('/frontend/images/product-overviews/gracie-kq/fliprail.png') !!}" alt="Flip Rail">
                        </div>
                        <div class="fbox-desc">
                            <div class="heading-block" style="margin-bottom: 15px;">
                                <h4>Flip-Up Rail</h4>
                            </div>
                    <p>Flip up the bottom rail to quickly see and adjust your batting and backing layers.</p>

                        </div>
                    </div>
                </div>
               <div class="col_half col_last bottommargin">
                    <div class="feature-box center media-box fbox-bg">
                        <div class="fbox-media">                                 
                           <img src="{!! asset('/frontend/images/product-overviews/gracie-kq/rails-close.png') !!}" alt="Aluminum Rails">
                        </div>
                        <div class="fbox-desc">
                            <div class="heading-block" style="margin-bottom: 15px;">
                                <h4>Aluminum Rails</h4>
                            </div>
                            <p>The 2&quot; diameter aluminum rails are lightweight yet sturdy.</p>
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

                    <div data-animate="fadeInUp" class="col-md-4 bottommargin">
                        <img style="padding-bottom:15px;" src="{!! asset('/frontend/images/product-overviews/gracie-kq/clamps_lg.jpg') !!}" alt="quilting bungee clamps" />
                        <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                            <h4>Bungee Clamps</h4>
                            <span class="before-heading">For Perfect Side Tension</span>

                        </div>
                        <p>The Bungee Clamps provide excellent and even side tension at the edges of your quilt. These new and improved Grace Company Bungee Clamps have been designed with a sleek new profile to make attaching and removing them even easier!</p>
                    </div>

                    <div data-animate="fadeInUp" data-delay="200" class="col-md-4 bottommargin">
                       <img style="padding-bottom:15px;" src="{!! asset('/frontend//images/product-overviews/general-quilting/fabri-fast-400.png') !!}" alt="Fabri-fast rails in use" />
                        <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                            <h4>Fabri-Fast Tube and Tool</h4>
                            <span class="before-heading">Easy Fabric Loading</span>
                        </div>
                        <p>The unique Grace Company Fabri-Fast rails make attaching fabric to your rails a breeze. Use the included Fabri-Fast tool to push your fabric and the provided Fabri-Fast tube into the rail slot.</p>
                    </div>

                    <div data-animate="fadeInUp" data-delay="400" class="col-md-4 bottommargin">
                        <img style="padding-bottom:15px;" src="{!! asset('/frontend//images/product-overviews/accessories/speed-control-700.jpg') !!}" alt="Quilting Machine Speed Control" />
                        <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                            <h4>Speed Control</h4>
                            <span class="before-heading">Quilting power at your fingertips</span>
                        </div>
                        <p>The Grace Speed Control is a universal foot pedal replacement. Use the dial to set the speed of your sewing machine as you quilt. It works with many sewing machines on the market. Check the <a href="{!! url(getLang(). '/') !!}">compatibility list</a> to see if it will work with your quilting or sewing machine!</p>
                    </div>

                </div>

            </div>
        </div>


            <!--image parallax-->


        <div class="section parallax nomargin center" style="background-image: url('{!! asset('/frontend/images/product-overviews/gracie-kq/gracie_king_queen-flat.jpg') !!}'); height:600px;" data-stellar-background-ratio="0.4">
            <!--buy button, awkard here-->
            <!--
            <div style="background-color:rgba(0,0,0,)">
                <a href="#" class="button button-rounded button-secondary button-large">Buy Now</a>
            </div>
            -->
        </div>



        <!--Additional Accessories-->
        <div class="section notopmargin nobottommargin">
            <div class="container clear-bottommargin clearfix">
                <div class="heading-block center">
                            <h2>Additional Accessories</h2>
                </div>

                <div class="row topmargin-sm clearfix">

                    <div data-animate="fadeInUp" class="col-md-6 bottommargin">
                        <img style="padding-bottom:15px;" src="{!! asset('/frontend/images/product-overviews/gracie-kq/extkit-lg.jpg') !!}" alt="Extension Kit" />
                        <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                            <h4>Extension Kit</h4>
                            <span class="before-heading">Convenient for machines with larger throats</span>

                        </div>
                        <p>Upgrade your Gracie Queen with a 4th rail and the longer size of the Gracie King at any time by purchasing the Gracie King Extension Kit.
                        </p>
                        <a href="#" class="button button-rounded">Buy Now</a>

                    </div>

                    <div data-animate="fadeInUp" data-delay="200" class="col-md-6 bottommargin">
                       <img style="padding-bottom:15px;" src="{!! asset('/frontend/images/product-overviews/gracie-kq/4thrail-lg.jpg') !!}" alt="4th Rail" />
                        <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                            <h4>Fourth Rail for Batting</h4>
                            <span class="before-heading">Extend the length of your frame</span>
                        </div>
                        <p>The Gracie King includes a fourth rail to manage your batting and keep it off of the floor.
                        </p>
                        <a href="#" class="button button-rounded">Buy Now</a>
                    </div>

                </div>

            </div>
        </div>

            <!--specs ==================================-->
        <h2 class="toppadding-sm bottompadding-sm center bgcolor-second dark nobottommargin">Gracie King&#47Queen Frame Specs</h2>
        <div class="section parallax nomargin" style="background-image: url('{!! asset('/frontend/images/backgrounds/square_bg.png') !!}'); background-repeat:repeat; padding-top:0px;" data-stellar-background-ratio="0.4">

            <div class="container clear-bottommargin">

                <div class="row topmargin-sm">


                    <div class="col-md-12">
                        <img data-animate="fadeInLeft" src="{!! asset('/frontend/images/product-overviews/gracie-kq/sizes_king.png') !!}" alt="GQ frame size" />
                        <img data-animate="fadeInLeft" src="{!! asset('/frontend/images/product-overviews/gracie-kq/sizes_queen.png') !!}" alt="GQ frame size" />
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
                            <div class="col-md-4">
                            <dt>King&#58;</dt>
                            <dd>120 inches</dd>
                            </div>
                            <div class="col-md-4">
                            <dt>Queen&#58;</dt>
                            <dd>84 inches</dd>
                            </div>
                            <div class="col-md-4">
                            <dt>Crib&#58;</dt>
                            <dd>48 inches</dd>
                            </div>
                        </dl>
                    </div>

                    <div data-animate="fadeInUp" data-delay="200" class="col-md-3 bottommargin">
                       <div class="feature-box fbox-center fbox-outline fbox-effect nobottomborder">
                            <div class="fbox-icon">
                                <i class="icon-resize-horizontal"></i>
                            </div>
                        </div>
                            <h3 class="nobottommargin">Maximum Machine Throat Size</h3>
                        <p>18 inches</p>
                    </div>

                    <div data-animate="fadeInUp" data-delay="400" class="col-md-3 bottommargin">
                       <div class="feature-box fbox-center fbox-outline fbox-effect nobottomborder">
                            <div class="fbox-icon">
                                <i class="icon-settings"></i>
                            </div>
                        </div>
                            <h3 class="nobottommargin">Rail Diameter</h3>
                        <p>2 inches</p>
                    </div>

                    <div data-animate="fadeInUp" data-delay="600" class="col-md-3 bottommargin">
                       <div class="feature-box fbox-center fbox-outline fbox-effect nobottomborder">
                            <div class="fbox-icon">
                                <i class="icon-road"></i>
                            </div>
                        </div>
                            <h3 class="nobottommargin">Track System</h3>
                        <p>Dual-wheel</p>
                    </div>


                </div>

            </div>
        </div>

            <!--frames ============================-->
        <a class="button button-full button-dark center tright bottommargin-sm" href="compare-machine-frames.html">
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
                        <img src="{!! asset('/frontend//images/product-overviews/gq-frame/gq--frame-438.png') !!}" alt="Grace GQ Machine Quilting Frame" />
                        <a href="{!! url(getLang(). '/shop') !!}" class="button button-rounded">Buy Now</a>

                    </div>

                    <div class="col_one_third">
                         <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                             <h5 class="center">Gracie King Or Queen</h5>
                        </div>
                        <img src="{!! asset('/frontend//images/product-overviews/general-quilting/gracie-king-queen-438.png') !!}" alt="Gracie King and Queen Machine Quilting Frame" />
                        <a href="{!! url(getLang(). '/machine-quilting/gracie-kq') !!}" class="button button-rounded button-secondary">Learn More</a>
                        Or
                        <a href="{!! url(getLang(). '/shop') !!}" class="button button-rounded">Buy Now</a>

                    </div>

                    <div class="col_one_third col_last">
                         <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                             <h5 class="center">SR-2 Frame</h5>
                        </div>
                        <img src="{!! asset('/frontend//images/product-overviews/sr-2-frame/sr-2-frame-438.png') !!}" alt="SR-2 Machine Quilting Frame" />
                        <a href="{!! url(getLang(). '/machine-quilting/sr-2-frame') !!}" class="button button-rounded button-secondary">Learn More</a>
                        Or
                        <a href="{!! url(getLang(). '/shop') !!}" class="button button-rounded">Buy Now</a>

                    </div>

                </div>

                <div class="row bottommargin-sm center">
                    <a href="{!! url(getLang(). '/machine-quilting/compare-machine-frames') !!}" class="button button-border button-rounded">Compare Frames</a>
                </div>

            </div>

    </div>

</section><!-- #content end -->

@endsection

@section('footer_scripts')
@endsection

@section('pp_footer_scripts')
@endsection