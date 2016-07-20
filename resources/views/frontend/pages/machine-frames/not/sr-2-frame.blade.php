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
The SR2 Quilting Frame | The Grace Company
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
        <h1 itemprop="headline">The SR2 Quilting Frame </h1>
        <span>For Sewing and Quilting</span>
         <ol class="breadcrumb" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
        <li class="breadcrumb-lead"><a title="Go Home." href="{!! url('/') !!}/" itemprop="url"><span itemprop="title">Home</span></a></li>
          <li itemprop="child" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
          <a title="Go to Machine Quilting." href="{!! url('/') !!}/machine-frames/" itemprop="url"><span itemprop="title">Machine Quilting </span></a></li>
          <li class="active" itemprop="child" itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><span itemprop="title">SR2 Quilting Frame </span></li>
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
               <h3>The SR2 Quilting Frame</h3>
               <span class="before-heading">High Quality, Low Price</span>
            </div>
            <div class="col-lg-5">
               <p class="lead">
                  The SR2 Machine Quilter offers a high-quality machine quilting frame at an affordable price. This is the first of our frames to feature 2 rails and the new Quilt-Clasps for easy fabric control. Just clip the Quilt Clips to the quilt and rail for even tension without having to roll the fabric.
               </p>
            </div>
            <div class="col-lg-7">
               <img src="{!! asset('/frontend/images/product-overviews/sr-2-frame/sr2-frame.jpg') !!}" data-animate="fadeInRight" alt="SR-2 quilting frame">
            </div>
         </div>
      </div>



      <!--carriage ========================================-->
      <div class="section parallax nobottommargin" style="background-image: url('{!! asset('/frontend/images/product-overviews/sr-2-frame/SR2-frame-RGBweb100ppi-angled.jpg') !!}');" data-stellar-background-ratio="0.4">
         <div class="container">
            <div data-animate="fadeInUp" class=" col-sm-4 fright  transparent-block-light" >
               <div class="block-img" style="-webkit-box-shadow: 3px 3px 5px 2px rgba(0,0,0,0.33); -moz-box-shadow: 3px 3px 5px 2px rgba(0,0,0,0.33); box-shadow: 3px 3px 5px 2px rgba(0,0,0,0.33);"> <img src="{!! asset('/frontend/images/product-overviews/sr-2-frame/sr-2-back-track.jpg') !!}" alt="Qnique Quilter LCD Screen" >
               </div>
               <h3 class="nobottommargin topmargin-sm">Smooth Professional Carriage</h3>
               <span class="before-heading">For enhanced stitching</span>
               <p> The smooth gliding professional series carriage provides ease of motion which aides in improved stich quality.</p>
            </div>
         </div>
      </div>

<div class="section-top-ribon" style="background-color:black; height: 31px;"></div>

      <!-- No-Baste Rails ===================================-->
      <div class="container clearfix bottommargin">
         <div class="row clearfix topmargin">
            <div class="col-lg-8">
               <img src="{!! asset('/frontend/images/product-overviews/sr-2-frame/sr2-clasps2.jpg') !!}" data-animate="fadeInLeft" alt="GQ machine quilting frame">
            </div>
            <div class="col-lg-4">
               <div class="heading-block center">
                  <h3>Included Quilt Clips</h3>
                  <p class="before-heading">For easiest ever fabric tension and control</p>
               </div>
               <p class="lead">
                  Start-Right&trade; Quilt Clips are the easiest and fastest way to control and adjust the layers of fabric on your quilting frame! They&#39;re also a great help when "floating" your quilt on the frame, making loading your fabric easier with less pinning!
               </p>
            </div>
         </div>
      </div>
      <!--other features-->
      <h2 class="toppadding-sm bottompadding-sm center bgcolor-second dark nobottommargin">Other SR2 Frame Features</h2>
      <div class="section nomargin" style="background-color:white;">
         <div class="container clear-bottommargin clearfix">
            <div class="row topmargin-sm clearfix">
               <div class="col-md-6">
                  <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                     <img src="{!! asset('/frontend/images/product-overviews/sr-2-frame/sr2-machine-Clamps-RGB.png') !!}" alt="SR2 frame clamps">
                     <h4>Sewing Machine Base Clamps</h4>
                  </div>
                  <p>If your machine moves while sewing, it could ruin much more than your time &amp; patience. We&#39;ve eliminated any concerns you may have because included are base clamps to keep your sewing machine in place and keep you working.</p>
               </div>
               <div class="col-md-6">
                  <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                     <img src="{!! asset('/frontend/images/product-overviews/sr-2-frame/sr2-table-insert-on-frame.png') !!}" alt="SR2 Frame">
                     <h4>Sturdy Steel Construction</h4>
                  </div>
                  <p>Much of the body of the SR2 frame is constructed of steel giving you long lasting durability. The rails of the frame are also made from steel for maximum rigidity.</p>
               </div>
            </div>
            <div class="row topmargin-sm clearfix">
               <div class="col-md-6 ">
                  <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                     <img src="{!! asset('/frontend/images/product-overviews/gq-frame/leveling-feet.jpg') !!}" alt="Quilting Frame Leveling Feet">
                     <h4>Leveling Feet</h4>
                  </div>
                  <p>No matter what floor your frame is on, these feet are an easy way to make sure it&#39;s level and balanced.</p>
               </div>
               <div class="col-md-6">
                  <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                     <img src="{!! asset('/frontend/images/product-overviews/sr-2-frame/fabri_fast-RGB.png') !!}" alt="Fabri-Fast">
                     <h4>Easy Fabric Attachment</h4>
                  </div>
                  <p>For attaching the fabric layers to the take-up rail, the Fabri-Fast&trade; slots and tubing make it easy, without the use of tacks, ties, or tape! Complete it with our time-saving cloth leaders to help you attach your fabric to your frame easily, and accurately.</p>
               </div>
            </div>
         </div>
      </div>

<div class="section-top-ribon" style="background-color:black; height: 31px;"></div>

      <!--included accessories Section  =======================-->
      <div class="section topmargin nobottommargin">
         <div class="container clear-bottommargin clearfix">
            <div class="heading-block center">
               <h2>Included Accessories</h2>
            </div>
            <div class="row topmargin-sm clearfix">
               <div data-animate="fadeInUp" class="col-md-4 bottommargin">
                  <img style="padding-bottom:15px;" src="{!! asset('/frontend/images/product-overviews/sr-2-frame/bungee-set-RGB.png') !!}" alt="quilting bungee clamps" />
                  <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                     <h4>Bungee Clamps</h4>
                     <span class="before-heading">For Perfect Side Tension</span>
                  </div>
                  <p>The Bungee Clamps provide excellent and even side tension at the edges of your quilt. These new and improved Grace Company Bungee Clamps have been designed with a sleek new profile to make attaching and removing them even easier!</p>
               </div>
               <div data-animate="fadeInUp" data-delay="200" class="col-md-4 bottommargin">
                  <img style="padding-bottom:15px;" src="{!! asset('/frontend/images/product-overviews/general-quilting/fabri-fast-400.png') !!}" alt="Fabri-fast rails in use" />
                  <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                     <h4>Fabri-Fast Tube and Tool</h4>
                     <span class="before-heading">Easy Fabric Loading</span>
                  </div>
                  <p>The unique Grace Company Fabri-Fast rails make attaching fabric to your rails a breeze. Use the included Fabri-Fast tool to push your fabric and the provided Fabri-Fast tube into the rail slot.</p>
               </div>
               <div data-animate="fadeInUp" data-delay="400" class="col-md-4 bottommargin">
                  <img style="padding-bottom:15px;" src="{!! asset('/frontend/images/product-overviews/accessories/speed-control-700.jpg') !!}" alt="Quilting Machine Speed Control" />
                  <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                     <h4>Speed Control</h4>
                     <span class="before-heading">Quilting power at your fingertips</span>
                  </div>
                  <p>The Grace Speed Control is a universal foot pedal replacement. Use the dial to set the speed of your sewing machine as you quilt. It works with many sewing machines on the market. Check the <a href="#">compatibility list</a> to see if it will work with your quilting or sewing machine!</p>
               </div>
            </div>
         </div>
      </div>

<div class="section-top-ribon" style="background-color:black; height: 31px;"></div>

      <!--Additional Accessories-->
      <div class="section notopmargin nobottommargin">
         <div class="container clear-bottommargin clearfix">
            <div class="heading-block center">
               <h2>Additional Accessories</h2>
            </div>
            <div class="row topmargin-sm clearfix">
               <div data-animate="fadeInUp" class="col-md-6 bottommargin">
                  <img style="padding-bottom:15px;" src="/images/product-overviews/sr-2-frame/sr2-table-insert700.jpg" alt="Table Inserts" />
                  <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                     <h4>SR2 Machine Frame Table Inserts</h4>
                     <span class="before-heading">Add a Convenient Workspace</span>
                  </div>
                  <p>Add a convenient work surface to your SR2 frame with these table inserts! Can be used for both queen and crib size SR2 frames. Eliminates the open frame area under the machine so tools don't fall underneath the frame and also gives you additional area to rest your tools.
                  </p>
                  <a href="#" class="button button-rounded">Buy Now</a>
               </div>
               <div data-animate="fadeInUp" data-delay="200" class="col-md-6 bottommargin">
                  <img style="padding-bottom:15px;" src="/images/product-overviews/sr-2-frame/ppp_original700.jpg" alt="PPP" />
                  <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                     <h4>Plastic Pattern Perfect</h4>
                     <span class="before-heading">Basic Set</span>
                  </div>
                  <p>For perfect patterns every time, use the Plastic Pattern Perfect! The stylus attaches right to your carriage and then guides your machine through the pattern templates as you move the carriage. Each basic set template is double-sided and has eight patterns. The Basic Plastic Pattern Perfect Set comes with the stylus and all hardware needed to use the Basic Set or Additional templates.
                  </p>
                  <a href="#" class="button button-rounded">Buy Now</a>
               </div>
            </div>
         </div>
      </div>
      <!--specs  ==================================-->
      <h2 class="toppadding-sm bottompadding-sm center bgcolor-second dark nobottommargin">SR2 Frame Specs</h2>
      <div class="section parallax nomargin" style="background-image: url('/images/backgrounds/square_bg.png'); background-repeat:repeat; padding-top:0px;" data-stellar-background-ratio="0.4">
         <div class="container clear-bottommargin">
            <div class="row topmargin-sm">
               <div class="col-md-12">
                  <img data-animate="fadeInLeft" src="/images/product-overviews/sr-2-frame/sr2-frame-sizes-RGBwebresized.png" alt="SR2 frame size" />
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
                     <div class="col-md-6">
                        <dt>Queen:</dt>
                        <dd>88"</dd>
                     </div>
                     <div class="col-md-6">
                        <dt>Crib:</dt>
                        <dd>33"</dd>
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
                  <p>13 inches</p>
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
      <a class="button button-full button-dark center tright bottommargin-sm" href="compare-machine-frames">
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
               <img src="{!! asset('/frontend/images/product-overviews/gq-frame/gq--frame-438.png') !!}" alt="Grace GQ Machine Quilting Frame" />
               <a href="{!! url(getLang(). '/machine-quilting/gq-frame') !!}" class="button button-rounded">Buy Now</a>
            </div>
            <div class="col_one_third">
               <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                  <h5 class="center">Gracie King Or Queen</h5>
               </div>
               <img src="{!! asset('/frontend/images/product-overviews/general-quilting/gracie-king-queen-438.png') !!}" alt="Gracie King and Queen Machine Quilting Frame" />
               <a href="/machine-quilting/gracie-king" class="button button-rounded button-secondary">Learn More</a>
               Or
               <a href="/machine-quilting/gq-frame" class="button button-rounded">Buy Now</a>
            </div>
            <div class="col_one_third col_last">
               <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                  <h5 class="center">SR-2 Frame</h5>
               </div>
               <img src="{!! asset('/frontend/images/product-overviews/sr-2-frame/sr-2-frame-438.png') !!}" alt="SR-2 Machine Quilting Frame" />
               <a href="/machine-quilting/sr-2-frame" class="button button-rounded button-secondary">Learn More</a>
               Or
               <a href="/machine-quilting/gq-frame" class="button button-rounded">Buy Now</a>
            </div>
         </div>
         <div class="row bottommargin-sm center">
            <a href="compare-machine-frames" class="button button-border button-rounded">Compare Frames</a>
         </div>
      </div>
   </div>
</section>
<!-- #content end -->

@endsection

@section('footer_scripts')
@endsection

@section('pp_footer_scripts')
@endsection