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
Machine Frame Accessories For Sewing and Quilting | The Grace Company
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


@section('page-title')

<section id="page-title">
    <div class="container clearfix">
        <h1 itemprop="headline">Accessories </h1>
        <span>Frame Comparison</span>
         <ol class="breadcrumb" itemscope itemtype="//data-vocabulary.org/Breadcrumb">
        <li class="breadcrumb-lead"><a title="Go Home." href="{!! url(getLang() .'/') !!}" itemprop="url"><span itemprop="title">Home</span></a></li>
          <li itemprop="child" itemscope itemtype="//data-vocabulary.org/Breadcrumb">
          <a title="Go to Machine Quilting." href="{!! url('/machine-frames/') !!}" itemprop="url"><span itemprop="title">Machine Quilting </span></a></li>

          <li class="active" itemprop="child" itemscope itemtype="//data-vocabulary.org/Breadcrumb"><span itemprop="title">Accessories </span></li>
        </ol>
    </div>
</section>
<br style="clear:both" />

@endsection

@section('content')

<section id="content">
    <div class="content-wrap" style="padding:0px;">
        <!-- /Intro ===================================-->
        <div class="heading-block center topmargin-sm dark nobottomborder nobottommargin">
            <h1 class="clearfix toppadding-sm bottompadding-sm center bgcolor-second nobottommargin">Machine Quilting Accessories</h1>
        </div>
        <!-- /SureStitch =================================================== -->
        <div class="section clearfix bottommargin">
            <div class="container" style="border-bottom:1px solid #B14949;">
                <div class="heading-block center nobottomborder nobottommargin clearfix">
                    <h2 class="accent">SureStitch Stitch Regulator</h2>
                    <p class="before-heading nobottommargin">For beautiful, consistent stitches</p>
                </div>
                <div class="col-md-8 col-sm-7" >
                    <img src="{!! asset('/frontend/images/product-overviews/accessories/surestitch-main.jpg') !!}" data-animate="fadeInLeft">
                    <p>The Grace SureStitch is both a stitch regulator and constant stitch speed control. In Stitch Regulation mode, it takes advantage of your machine&#39;s full range of speeds. As you speed up and slow down, so will your machine, keeping all of your stitches the same length. When used as a speed control, the SureStitch lets you adjust the speed of your sewing machine with the push of a simple button.</p>
                </div>
                <div class="col-md-4 col-sm-5 col-last hidden-xs">
                    <img src="{!! asset('/frontend/images/product-overviews/accessories/surestitch-pattern.jpg') !!}" data-animate="fadeInRight">
                </div>
            </div>
        </div>

        <div class="section-top-ribon" style="background-color:black; height: 31px;"></div>


        <!-- /SureStitch Controls =================================================== -->
        <div class="row clearfix topmargin-sm">
            <div class="container">
                <div class="col-sm-7 center" >
                    <div class="heading-block center nobottomborder nobottommargin clearfix">
                        <h4>Putting the Controls at your Fingertips</h4>
                    </div>
                    <p style="text-align: left;">Start and stop your sewing machine with the push of a button. The SureSttich display mounts directly to your handles. Adjust your stitch length or stitching speed right from your handles with the included display mount.</p>
                    <p class="nobottommargin">Check to see if your sewing machine is compatible with the SureStitch:</p>
                    <a href="#ss-comp-list" data-lightbox="inline" class="button button-rounded button-secondary">Machine Compatibility List</a>
                    <div class="modal1 mfp-hide" id="ss-comp-list">
                        <div class="block divcenter" style="background-color: #FFF; max-width: 500px;">
                            <div style="padding: 50px;">
                                <h3 class="center">SureStitch Machine Compatibility List</h3>
                                <ul>
                                    <li><strong>Baby Lock:</strong> Jane, Quilter&#39;s Choice Pro</li>
                                    <li><strong>Brother:</strong> 1500S</li>
                                    <li><strong>Elna:</strong> 7100, 7200, 7300</li>
                                    <li><strong>Janome:</strong> 1600 (all versions), 6500.6600</li>
                                    <li><strong>Juki:</strong> 98Q and QE, 2000Qi, and 2010Q</li>
                                    <li><strong>Pfaff:</strong> Grand Quilter</li>
                                    <li><strong>Viking:</strong> Mega Quilter</li>
                                </ul>
                            </div>
                            <div class="section center nomargin" style="padding: 30px;">
                                <a href="#" class="button" onClick="$.magnificPopup.close();return false;">Close</a>
                            </div>
                        </div>
                    </div>
                    <p class="nobottommargin topmargin-sm">Learn more or get the SureStitch now!</p>
                    <a href="shop/somewhere" class="button button-rounded">Buy Now</a>
                </div>
                <div class="col-sm-5 col-last">
                    <img src="{!! asset('/frontend/images/product-overviews/accessories/surestitch-push.jpg') !!}" data-animate="fadeInRight">
                </div>
            </div>
        </div>


<div class="section-top-ribon" style="background-color:black; height: 31px;"></div>

        <!-- /Luminess Intro =================================================== -->
        <div class="section parallax nomargin clearfix" style=" border-top:2px solid #B14949; background-image: url('{!! asset('/frontend/images/backgrounds/square_bg.png') !!}'); padding:0px; background-repeat:repeat;" data-stellar-background-ratio="0.4">
            <div class="row topmargin">
                <div class="heading-block center nobottomborder bottommargin-sm clearfix">
                    <h2 class="accent">Luminess Light Station</h2>
                    <p class="before-heading">Illuminate your projects</p>
                </div>
                <div class="container" style="border-bottom:1px solid #B14949;">
                    <div class="col-md-1"></div>
                    <div class="col-sm-6">
                        <img src="{!! asset('/frontend/images/product-overviews/accessories/luminess-main.png') !!}">
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <p class="nobottommargin">The Luminess is the perfect lighting solution for any project! It is made to fit perfectly over any quilting frame, sewing table, or work area! The TRUE-COLOR light-balanced bubs enhance the details of your projects. The Luminess is adjustable in height and width, and is available in two sizes.
                        </p>
                        <span class="center"><img src="{!! asset('/frontend/images/product-overviews/accessories/luminess-logo.png') !!}"></span>
                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>
            <!--TrueColor ==================================-->
            <div class="row clearfix">
                <div class="container" style="border-bottom:1px solid #B14949; padding-bottom:25px;">
                    <div class="heading-block center nobottomborder nobottommargin toppadding bottompadding-sm clearfix">
                        <h4>TrueColor Balanced Light</h4>
                    </div>
                    <p>The Luminess features a special True Color balanced lighting system that is perfect for artists and crafters. When you use a Luminess Light Station, you can rest assured that the colors you see are accurate, with no tinting or false-color casts. The True Color lights also reduce glare and soften shadows, while enhancing details and textures.</p>
                    <div class="col_half nobottommargin">
                        <div class="feature-box center media-box fbox-bg" data-animate="fadeInLeft">
                            <div class="fbox-media">
                                <h3>Without <em>True-Color Balanced Light</em>&#8482;</h3>
                                <img  src="{!! asset('/frontend/images/product-overviews/accessories/hard-shadow.jpg') !!}" alt="Without Balanced Light">
                            </div>
                            <div class="fbox-desc">
                                <p>Dull and incorrect colors with harsh shadows.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col_half col_last nobottommargin">
                        <div class="feature-box center media-box fbox-bg" data-animate="fadeInRight">
                            <div class="fbox-media">
                                <h3>With <em>True-Color Balanced Light</em>&#8482;</h3>
                                <img src="{!! asset('/frontend/images/product-overviews/accessories/soft-shadow.jpg') !!}" alt="With True-Color Balanced Light">
                            </div>
                            <div class="fbox-desc">
                                <p>Accurate color viewing with reduced glare and soften shadows, all while enhancing details and textures.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /slider  ==============================================-->
        <div class="section parallax nomargin clearfix" style="background-image: url('{!! asset('/frontend/images/backgrounds/square_bg.png') !!}'); padding:0px; background-repeat:repeat;" data-stellar-background-ratio="0.4">
            <div class="heading-block center nobottomborder nobottommargin toppadding bottompadding-sm clearfix">
                <h4>Perfect lighting for any situation</h4>
            </div>
            <div class="container" style="border-bottom:1px solid #B14949; padding-bottom: 25px;">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="fslider" data-easing="easeInQuad" slideshow="false">
                        <div class="flexslider">
                            <div class="slider-wrap">
                                <div class="slide">
                                    <img src="{!! asset('/frontend/images/product-overviews/accessories/luminess-sr2.jpg') !!}" alt="Luminess Light over Quiltinlg Frame">
                                    <div class="flex-caption slider-caption-bg slider-caption-bottom-right"><strong>Perfect for any quilting frame</strong>
                                    </div>
                                </div>
                                <div class="slide">
                                    <img src="{!! asset('/frontend/images/product-overviews/accessories/luminess-sitd-own.jpg') !!}" alt="Luminess Light for sit-down quilting machine">
                                    <div class="flex-caption slider-caption-bg slider-caption-bottom-left"><strong>Great for sewing</strong>
                                    </div>
                                </div>
                                <div class="slide">
                                    <img src="{!! asset('/frontend/images/product-overviews/accessories/luminess-cutting-table.jpg') !!}" alt="Luminess Light for cutting tables">
                                    <div class="flex-caption slider-caption-bg  slider-caption-top-left"><strong>Lighting for any craft room</strong>
                                    </div>
                                </div>
                                <div class="slide">
                                    <img src="{!! asset('/frontend/images/product-overviews/accessories/luminess-craft-room.jpg') !!}" alt="Luminess Light for any work area">
                                    <div class="flex-caption slider-caption-bg slider-caption-bg-light slider-caption-top-left"><strong>Perfect for any work area</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
        <!-- /features and sizes ============================-->
        <div class="section parallax nomargin clearfix" style="background-image: url('{!! asset('/frontend/images/backgrounds/square_bg.png') !!}'); padding:0px; background-repeat:repeat; border-bottom: 2px solid #B14949;" data-stellar-background-ratio="0.4">
            <div class="container" style="border-bottom:1px solid #B14949; padding-bottom: 25px;">
                <div class="heading-block center nobottomborder nobottommargin toppadding bottompadding-sm clearfix">
                    <h4>Other Luminess Features</h4>
                </div>
                <div class="col_half  nobottommargin">
                    <div class="feature-box center media-box fbox-bg">
                        <div class="fbox-media">
                            <img src="{!! asset('/frontend/images/product-overviews/accessories/luminess-adjust.png') !!}" alt="Adjusting Luminess Light Station">
                        </div>
                        <div class="fbox-desc">
                            <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                                <h4>Designed To Fit Your Needs</h4>
                            </div>
                            <p>The overall height of the Luminess can be adjusted, and the width can be resized to fit most any quilting frame, cutting table, or work area.</p>
                        </div>
                    </div>
                </div>
                <div class="col_half col_last nobottommargin">
                    <div class="feature-box center media-box fbox-bg">
                        <div class="fbox-media">
                            <img src="{!! asset('/frontend/images/product-overviews/accessories/luminess-lamp.png') !!}" alt="Luminess color-balanced light">
                        </div>
                        <div class="fbox-desc">
                            <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                                <h4>Enhanced Efficiency Lighting</h4>
                            </div>
                            <p>The low-wattage bulbs produce more light while consuming less power, and putting off less heat than standard lighting systems.</p>
                        </div>
                    </div>
                </div>
                <div class="center clearfix bottommargin">
                    <h4 class="topmargin nobottommargin">Learn more or get the Luminess Light Station now!</h4>
                    <a href="shop/somewhere" class="button button-rounded">Buy Now</a>
                </div>
            </div>
            <div class="container hidden-xs" >
                <div class="heading-block center nobottomborder nobottommargin toppadding bottompadding-sm clearfix">
                    <h4>Designed to fit your needs</h4>
                </div>
                <img src="{!! asset('/frontend/images/product-overviews/accessories/Light-Bar-sizes-flat.png') !!}" alt="Luminess Light bar sizes">
            </div>
        </div>


        <div class="section-top-ribon" style="background-color:black; height: 31px;"></div>


        <!-- /Quilt Clips Intro ================================-->
        <div class="section parallax nomargin clearfix" style="background-image: url('{!! asset('/frontend/images/backgrounds/paven-light-blue.png') !!}'); padding:0px; background-repeat:repeat;" data-stellar-background-ratio="0.4">
            <div class="container clearfix topmargin bottommargin">
                <div class="heading-block center nobottomborder">
                    <h2 class="accent">Start-Right&#8482; Quilt Clips</h2>
                    <p class="before-heading">Quick and easy fabric tension and control</p>
                </div>
                <img  data-animate="fadeIn" src="{!! asset('/frontend/images/product-overviews/accessories/quilt-clips-main.png') !!}" alt="Quilt Clips fabric control for quilting frames">
                <p class="topmargin-sm">Start-Right&#8482; Quilt Clips are the easiest and fastest way to control and adjust the layers of fabric on your quilting frame! They're also a great help when "floating" your quilt on the frame, making loading your fabric easier with less pinning!</p>
                <div class="heading-block center nobottomborder nobottommargin center topmargin">
                    <h4>Start-Right&#8482; Quilt Clips Features</h4>
                </div>
                <div class="row clearfix bottommargin topmargin-sm">
                    <div class="col_half  nobottommargin">
                        <div class="feature-box center media-box fbox-bg">
                            <div class="fbox-media">
                                <img src="{!! asset('/frontend/images/product-overviews/accessories/clips-managing.png') !!}" alt="Quilt Cl">
                            </div>
                            <div class="fbox-desc">
                                <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                                    <h4>Easy Fabric Adjustment</h4>
                                </div>
                                <p>It’s simple to make quick adjustments, so your fabric will always be nice and straight. Just adjust your fabric as needed, and clip the Quilt Clips over the fabric to the rail!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col_half col_last nobottommargin">
                        <div class="feature-box center media-box fbox-bg">
                            <div class="fbox-media">
                                <img src="{!! asset('/frontend/images/product-overviews/accessories/clips-finishing.png') !!}" alt="Finishing a quilt on frame with Quilt Clips">
                            </div>
                            <div class="fbox-desc">
                                <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                                    <h4>Finish The End Of Your Quilts Easier</h4>
                                </div>
                                <p>Keep tension for quilting, even when you have to unpin the end of your quilt. Quilt Clips keep the tension at the end of the project without any cloth leaders.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix bottommargin">
                    <div class="col_half  nobottommargin">
                        <div class="feature-box center media-box fbox-bg">
                            <div class="fbox-media">
                                <img src="{!! asset('/frontend/images/product-overviews/accessories/clips-float.png') !!}" alt="Quilt Clips floaitng your quilti">
                            </div>
                            <div class="fbox-desc">
                                <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                                    <h4>An Easy Way To Float Your Fabric Layers</h4>
                                </div>
                                <p>Attaching fabric to your frame with Quit Clips is faster and easier with less pinning.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col_half col_last nobottommargin">
                        <div class="feature-box center media-box fbox-bg">
                            <div class="fbox-media">
                                <img src="{!! asset('/frontend/images/product-overviews/accessories/clips-expand.png') !!}" alt="Quilt clips for different fabric thicknesses">
                            </div>
                            <div class="fbox-desc">
                                <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                                    <h4>Works With Various Fabric Thicknesses</h4>
                                </div>
                                <p>The Quilt Clips slide over your fabric and frame rail, keeping the quilt layers together. They expand to adjust to thickly rolled fabric.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="center clearfix bottommargin">
                    <h4 class="nobottommargin">Available in two sizes for frames with 1&frac12; or 2 inch rails.</h4>
                    <img src="{!! asset('/frontend/images/product-overviews/accessories/quilt-clips-sizes.png') !!}">
                    <h4 class="nobottommargin topmargin">Learn more or get Quilt Clips now!</h4>
                    <br />
                    <a href="shop/somewhere" class="button button-rounded">Buy Now</a>
                </div>
            </div>
        </div>

        <div class="section-top-ribon" style="background-color:black; height: 31px;"></div>


        <!-- /Plastic Pattern Perfect  ======================-->
        <div class="section parallax nomargin" style="background-image: url('{!! asset('/frontend/images/backgrounds/light_wool.png') !!}'); background-repeat:repeat; padding-top:0px; border-top: 2px solid #B14949;" data-stellar-background-ratio="0.4">
            <div class="heading-block center nobottomborder topmargin">
                <h2 class="accent">Plastic Pattern Perfect</h2>
                <p class="before-heading">Quick and easy fabric tension and control</p>
            </div>
            <div class="row" style="padding-right: 0px;">
                <div class="col-md-8">
                    <img src="{!! asset('/frontend/images/product-overviews/accessories/ppp-long.png') !!}" alt="Plastic Pattern Perfect">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-9">
                        <p class="topmargin-sm">For perfect patterns every time, use the Plastic Pattern Perfect! The stylus attaches right to your carriage and then guides your machine through the pattern templates as you move the carriage. Each basic set template is double-sided and has eight patterns. The Basic Plastic Pattern Perfect Set comes with the stylus and all hardware needed to use the Basic Set or Additional templates.</p>
                    </div>
                </div>
                <div class="col-md-4 hidden-xs hiddein-sm cpl-last">
                    <img src="{!! asset('/frontend/images/product-overviews/accessories/ppp-sally.png') !!}" alt="Plastic Pattern Perfect Pantographs on quilting frame">
                </div>
            </div>
            <!--plastic pattern perfect features  ================-->
            <div class="container" style="border-top: 1px solid #B14949;">
                <div class="heading-block center nobottomborder topmargin">
                    <h4>Plastic Pattern Perfect Features</h4>
                </div>
                <div class="row clearfix bottommargin-sm">
                    <div class="col_half  nobottommargin">
                        <div class="feature-box center media-box fbox-bg">
                            <div class="fbox-media">
                                <img src="{!! asset('/frontend/images/product-overviews/accessories/ppp-stylus.png') !!}" alt="Plastic Pattern Perfect for quilting frames">
                            </div>
                            <div class="fbox-desc">
                                <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                                    <h4>Basic Set Comes With All Needed Hardware</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col_half col_last nobottommargin">
                        <div class="feature-box center media-box fbox-bg">
                            <div class="fbox-media">
                                <img src="{!! asset('/frontend/images/product-overviews/accessories/ppp-additional.png') !!}" alt="more plastic pattern perfect templates">
                            </div>
                            <div class="fbox-desc">
                                <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                                    <h4>Additional Patterns Available</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="center clearfix bottommargin">
                    <h4 class="nobottommargin topmargin">Learn more or get the Plastic Pattern Perfect set now!</h4>
                    <a href="shop/somewhere" class="button button-rounded">Buy Now</a>
                </div>
            </div>
        </div> <!--end ppp section-->


        <div class="section-top-ribon" style="background-color:black; height: 31px;"></div>


        <!-- /frames compared  ====================================-->
        <div class="section nobottommargin" style=" border-top:2px solid #B14949; padding:0px; background-repeat:repeat;">
            <div class="row center bottommargin" style="padding:20px;">
                <div class="heading-block center topmargin nobottomborder">
                    <h2>Other Machine Quilting Accessories</h2>
                </div>
                <a href="{!! url(getLang(). '/shop') !!}" class="button button-large button-rounded">See All Machine Quilting Accessories</a>
            </div>
        </div>
    </div>
</section>



@endsection

@section('footer_scripts')
@endsection

@section('pp_footer_scripts')
@endsection