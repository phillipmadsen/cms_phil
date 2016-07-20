@extends('frontend/layout/layout')

@section('title')
Compare Versions | The Grace Company
@endsection

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


@section('header_styles')
    <!--page level css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/frontend/custom-css/qct.css') }}">
    <!--end of page level css-->
@endsection

@section('scripts')@endsection


@section('submenu')
@include('frontend.layout.partials.menu.submenu-items', ['items'=> $menu_qct->roots()])
@endsection

@section('slider')@endsection

@section('intro')
        <!--Purchase Intro Section
        ==============================-->
        <div class="section parallax nomargin clearfix" style="background-image: url('{!! asset('/frontend/images/product-overviews/qct/wave-background.jpg') !!}'); background-size:cover; padding-bottom:0px;" data-stellar-background-ratio="0.2">

            <div class="container center">

                    <div class="heading-block center nomargin dark nobottomborder">
                        <h1 style="font=size:42px;">Quilter&#39;s Creative Touch 4.0</h1>
                        <span class="before-heading" style="color:white;">New and Improved</span>
                    </div>

                        <p class="nobottommargin lead dark" style="background-color:rgba(45,76,94,0.65); padding:15px 15px 50px 15px;">The new version of Quilter&#39;s Creative Toucn (4.0) has been carefully crafted to offer more user-freindly control. The interface has been redesigned to make the whole quilting process more easy and straight forward than ever before. Also, new additional advanced features were added to offer powerful creation and layout tools.</p>


            </div>


        </div>
@endsection

@section('page-title-off')
<!-- Page Title ============================================= -->
<section id="page-title" class="page-title-dark">
    <div class="container clearfix">
        <h1>Quilter&#39;s Creative Touch Support</h1>
        <span>how can we help</span>
        <ol class="breadcrumb" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
            <li class="breadcrumb-lead"><a title="Go Home." href="{!! url('/') !!}/" itemprop="url">Home</a></li>
            <li itemprop="child" itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a title="Go to QuiltMotion." href="{!! url(getLang() .'/automation/qct/') !!}" itemprop="url">QuiltMotion</a></li>
            <li class="active" itemprop="child" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">QuiltMotion Support</li>
        </ol>
    </div>
</section><!-- #page-title end -->
@endsection

@section('sidebar')@endsection

@section('content')
 <!-- Content
   ============================================= -->
<section id="content">
   <div class="content-wrap">
      <!--questions to ask
         ========================================-->
      <div class="container bottommargin">
         <div class="heading-block nomargin nobottomborder center">
            <h3>Included </h3>
            <span class="before-heading">Questions we&#39;ll ask when you call to order</span>
         </div>
         <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading">Panel heading</div>
            <div class="panel-body">
               <p>Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            </div>
            <!-- Table -->
            <table class="table center big-table">
               <thead>
                  <tr style="text-align:center;">
                     <th class="center featurecell">FEATURE:</th>
                     <th class="center">QCT Beginnings</th>
                     <th class="center coolcell">QCT Silver</th>
                     <th class="center">Quilter&#39; Creative Touch</th>
                     <th class="center coolcell">QCT Gold</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td class="featurecell">PantoStacker</td>
                     <td><i class="icon icon-minus-sign"></i><br>Limited</td>
                     <td class="coolcell"><i class="icon icon-minus-sign"></i><br>Limited</td>
                     <td><i class="icon icon-circle"></i></td>
                     <td class="coolcell"><i class="icon icon-plus-sign"></i><br>Advanced</td>
                  </tr>
                  <tr>
                     <td class="featurecell">Standard Placements</td>
                     <td><i class="icon icon-circle"></i></td>
                     <td class="coolcell"><i class="icon icon-circle"></i></td>
                     <td><i class="icon icon-circle"></i></td>
                     <td class="coolcell"><i class="icon icon-circle"></i></td>
                  </tr>
                  <tr>
                     <td class="featurecell">Advanced Placements</td>
                     <td></td>
                     <td class="coolcell"><i class="icon icon-circle"></i></td>
                     <td><i class="icon icon-circle"></i></td>
                     <td class="coolcell"><i class="icon icon-circle"></i></td>
                  </tr>
                  <tr>
                     <td class="featurecell">Print</td>
                     <td></td>
                     <td class="coolcell"><i class="icon icon-circle"></i></td>
                     <td><i class="icon icon-circle"></i></td>
                     <td class="coolcell"><i class="icon icon-circle"></i></td>
                  </tr>
                  <tr>
                     <td class="featurecell">Pattern CAD</td>
                     <td></td>
                     <td class="coolcell"></td>
                     <td><i class="icon icon-circle"></i></td>
                     <td class="coolcell"><i class="icon icon-circle"></i></td>
                  </tr>
                  <tr>
                     <td class="featurecell">QuiltCAD</td>
                     <td></td>
                     <td class="coolcell"></td>
                     <td><i class="icon icon-circle"></i></td>
                     <td class="coolcell"><i class="icon icon-circle"></i></td>
                  </tr>
                  <tr>
                     <td class="featurecell">Record</td>
                     <td></td>
                     <td class="coolcell"></td>
                     <td><i class="icon icon-circle"></i></td>
                     <td class="coolcell"><i class="icon icon-circle"></i></td>
                  </tr>
                  <tr>
                     <td class="featurecell">Batch Import</td>
                     <td></td>
                     <td class="coolcell"><i class="icon icon-circle"></i></td>
                     <td></td>
                     <td class="coolcell"><i class="icon icon-circle"></i></td>
                  </tr>
                  <tr>
                     <td class="featurecell">Export</td>
                     <td></td>
                     <td class="coolcell"><i class="icon icon-circle"></i></td>
                     <td></td>
                     <td class="coolcell"><i class="icon icon-circle"></i></td>
                  </tr>
                  <tr>
                     <td class="featurecell">Borders</td>
                     <td></td>
                     <td class="coolcell"></td>
                     <td></td>
                     <td class="coolcell"><i class="icon icon-circle"></i></td>
                  </tr>
                  <tr>
                     <td class="featurecell">Virtual Longarm</td>
                     <td></td>
                     <td class="coolcell"></i></td>
                     <td></td>
                     <td class="coolcell"><i class="icon icon-circle"></i></td>
                  </tr>
                  <tr>
                     <td class="featurecell">Font Stitcher</td>
                     <td></td>
                     <td class="coolcell"></td>
                     <td></td>
                     <td class="coolcell"><i class="icon icon-circle"></i></td>
                  </tr>
                  <tr>
                     <td class="featurecell">Drawing Tool</td>
                     <td></td>
                     <td class="coolcell"></td>
                     <td></td>
                     <td class="coolcell"><i class="icon icon-circle"></i></td>
                  </tr>
                  <tr>
                     <td class="featurecell">SUBSCRIBER BENIFITS</td>
                     <td></td>
                     <td class="coolcell"><i class="icon icon-circle"></i></td>
                     <td></td>
                     <td class="coolcell"><i class="icon icon-circle"></i></td>
                  </tr>
               </tbody>
            </table>
         </div>
      </div>
      <!--Versions!
         ===================================-->
      <div class="container clearfix">
         <div class="heading-block center nomargin nobottomborder">
            <h3 style="color:#B14949;">Subscriber Benefits</h3>
            <span class="before-heading">Take your quilting to the next level!</span>
         </div>
         <p></p>
      </div>
      <!--upgrading
         ===================================-->
      <div class="container clearfix bottommargin">
         <div class="heading-block center topmargin-sm nobottomborder bottommargin-sm">
            <span class="before-heading" style="color:black;">Allready have an older version of <strong>QuiltMotion?</strong></span>
            <h4 style="color:#B14949;">Upgrade at a discounted price!</h4>
         </div>
         <p class="center">If you already own an older version of QuiltMotion or Quilter&#39;s Creative Touch, you can upgrade to the latest, more powerful, more user-freindly Quilter&#39;s Creatitve Touch at a discounted rate! Call now to find out what your discounted rate will be!<br /><span style="font-size:24px;"><i class="i-plain divcenter icon-phone3"></i> <strong><em>1-800-264-0644.</em></strong></span></p>
      </div>
      <!--Included Items
         ===============-->
      <div class="section parallax nomargin" style="background-image:url('{!! asset('/frontend/images/backgrounds/light_wool.png') !!}'); background-repeat:repeat; border-top:4px solid #B14949; border-bottom:4px solid #B14949;"  data-stellar-background-ratio="0.1">
         <div class="container clearfix">
            <div class="heading-block center margin-sm">
               <h3>What&#39;s Included</h3>
               <p class="lead">The following items are included with every purchase of either <em>Quilter&#39;s Creative Touch</em> or <em>Quilter&#39;s Creative Touch Beginnings</em>.</p>
            </div>
            <div class="row">
               <div class="col-sm-4">
                  <h4 class="center">Motor Plate</h4>
                  <div class="block-img" style="-webkit-box-shadow: 1px 1px 7px 1px rgba(0,0,0,0.25);
                     -moz-box-shadow:  1px 1px 7px 1px rgba(0,0,0,0.25);
                     box-shadow:  1px 1px 7px 1px rgba(0,0,0,0.25);">
                     <img src="{!! asset('/frontend/images/product-overviews/qct/motor-plate.jpg') !!}" alt="QCT Motor Plate">
                  </div>
               </div>
               <div class="col-sm-4">
                  <h4 class="center">QCT Software</h4>
                  <div class="block-img" style="-webkit-box-shadow: 1px 1px 7px 1px rgba(0,0,0,0.25);
                     -moz-box-shadow:  1px 1px 7px 1px rgba(0,0,0,0.25));
                     box-shadow:  1px 1px 7px 1px rgba(0,0,0,0.25);">
                     <img src="{!! asset('/frontend/images/product-overviews/qct/usb.jpg') !!}" alt="QCT Motor Plate">
                  </div>
               </div>
               <div class="col-sm-4">
                  <h4 class="center">Tablet Stand</h4>
                  <div class="block-img" style="-webkit-box-shadow: 1px 1px 7px 1px rgba(0,0,0,0.25);
                     -moz-box-shadow:  1px 1px 7px 1px rgba(0,0,0,0.25);
                     box-shadow:  1px 1px 7px 1px rgba(0,0,0,0.25);">
                     <img src="{!! asset('/frontend/images/product-overviews/qct/tablet-mount.jpg') !!}" alt="QCT Motor Plate">
                  </div>
               </div>
            </div>
            <div class="row topmargin-sm">
               <div class="col-sm-4">
                  <p>This Motor Plate moves your sewing machine and is what allows it to quilt out your patterns by itself!</p>
               </div>
               <div class="col-sm-4">
                  <p>This Quilter&#39;s Creative Touch software comes on a convenient flash drive, and can be installed on any windows 7 or 8 tablet.</p>
               </div>
               <div class="col-sm-4">
                  <p>Put the power of Quilter&#39;s Creative Touch right at your fingertips by mounting your windows tablet right to the sewing machine!</p>
               </div>
            </div>
            <div class="heading-block center nobottomborder nobottommargin">
               <h3>Using Your Own Windows Tablet</h3>
            </div>
            <p>Quilter&#39;s Creative Touch does not include any tablet. We&#39;ve given you the freedom to use any tablet running a full version of Windows 7, 8, or later. <em>(QCT Software will <strong>not</strong> work with Windows RT tablets.)</em> With QCT installed on your tablet, you can use it anywhere to design patterns and create layouts, and then bring it back to your sewing machine to quilt!</p>
         </div>
      </div>
      <!--get QCT Now!
         ===================================-->
      <div class="section parallax nomargin" style="background-image:url('{!! asset('/frontend/images/backgrounds/light_wool.png') !!}'); background-repeat:repeat; border-top:4px solid #B14949; border-bottom:4px solid #B14949;"  data-stellar-background-ratio="0.1">
         <div class="container clearfix topmargin-lg bottommargin-lg">
            <div class="heading-block center nomargin nobottomborder">
               <h2 style="color:#B14949;">Get Quilter&#39;s Creative Touch Now</h2>
               <span class="before-heading" style="color:#48A0C4">Learn how you can get the ultimate quilting experience in your home!</span>
               <a href="#" class="button button-rounded button-large button-secondary">See Purchase Options</a> or <a href="#" class="button button-rounded button-large">Download Free Demo</a>
            </div>
         </div>
      </div>

   </div>
</section>
@endsection


@section('footer_scripts')@endsection

@section('inlinejs')@endsection

@section('pp_footer_scripts')
 <script type="text/javascript">
         jQuery(window).load(function(){

             var $container = $('#portfolio');

             $container.isotope({
                 transitionDuration: '0.65s',
                 masonry: {
                     columnWidth: $container.find('.portfolio-item:not(.wide)')[0]
                 }
             });

             $('#page-menu a').click(function(){
                 $('#page-menu li').removeClass('current');
                 $(this).parent('li').addClass('current');
                 var selector = $(this).attr('data-filter');
                 $container.isotope({ filter: selector });
                 return false;
             });

             $(window).resize(function() {
                 $container.isotope('layout');
             });

         });

      </script>
@endsection
