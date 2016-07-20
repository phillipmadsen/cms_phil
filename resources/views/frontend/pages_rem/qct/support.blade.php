@extends('frontend/layout/layout')

@section('htmlschema')
itemscope itemtype="http://schema.org/Article"
@endsection


@section('title')
QCT Support | Quilter&#39;s Creative Touch Support| The Grace Company

@endsection

@section('seo')
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author"content="The Grace Company"/>
@endsection

@section('header_styles')
    <!--page level css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/frontend/custom-css/qct.css') }}">
    <!--end of page level css-->
@endsection

@section('bodytag')
rows
@endsection



@section('submenu')
@include('frontend.layout.partials.menu.submenu-items', ['items'=> $menu_qct->roots()])
@endsection


@section('slider')@endsection

@section('intro')
<!--Purchase Intro Section ==============================-->
<div class="section parallax nomargin clearfix" style="background-image: url('{!! asset('frontend/images/product-overviews/qct/quilt-bg-light.jpg') !!}'); border-bottom:4px solid #B14949;" data-stellar-background-ratio="0.2">
	<div class="container center">
		<div class="heading-block center nomargin">
			<h1>Quilter&#39;s Creative Touch Purchasing Options</h1>
			<span class="before-heading" style="color:#B14949;">Helpful tips to help you get support fast.</span>
		</div>
		<img src="{!! asset('frontend/images/product-overviews/qct/qctouch-logo-blue.png') !!}" alt="Quilter&#39;s Creative Touch Logo">
		<p class="nobottommargin" style="font-size:48px; color:#B14949; font-weight:bold"><i class="i-plain i-xlarge divcenter icon-phone3" style="color:#B14949;"></i>1-800-264-0644</p>
	</div>
</div>
@endsection

@section('page-titled')
<!-- Page Title ============================================= -->
<section id="page-title" class="page-title-dark">
	<div class="container clearfix">
		<h1>Quilter&#39;s Creative Touch Support</h1>
		<span>how can we help</span>
		<ol class="breadcrumb" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
			<li class="breadcrumb-lead"><a title="Go Home." href="{!! url('/') !!}/" itemprop="url">Home</a></li>
			<li itemprop="child" itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a title="Go to QuiltMotion." href="{!! url('/') !!}/automation/qct/" itemprop="url">QuiltMotion</a></li>
			<li class="active" itemprop="child" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">QuiltMotion Support</li>
		</ol>
	</div>
</section><!-- #page-title end -->
@endsection


@section('content')
<!-- Content ============================================= -->
 <div class="section parallax nomargin clearfix" style="background-image: url('{!! asset('/frontend/images/product-overviews/qct/wave-background.jpg') !!}'); background-size:cover; padding-bottom:0px;" data-stellar-background-ratio="0.2">
   <div class="container center">
      <div class="heading-block center dark nobottomborder">
         <h1 style="font=size:42px;">QCT Support and Help Files</h1>
      </div>
   </div>
</div>
<!-- Content-->
<section id="content">
   <div class="content-wrap" style="padding-top:0px;">
      <!--========help files==========-->
      <section>
         <div class="container topmargin-sm">
            <p class="lead nobottommargin center">Over the years the Grace Company has prided itself on the high quality of the offered customer service.<br>If you have a problem or questions that you can&#39;t find the answers to, you can always call in to speak to a <em/>real live person</em><br>(not an automated anwering machine.)</p>
            <p class=" lead center accent" style="font-weight:bold;"><i class="icon icon-call"></i> 1-800-264-0644</span></p>
            <div class="heading-block center topmargin">
               <h2>QCT Sopport Ffiles</h2>
            </div>
            <div class="row">
               <div class="col_one_fourth center" data-animate="fadeInUp">
                  <a href="{!! asset('/uploads/files/qct/quiltmotion_help_file.pdf') !!}" target="_blank">
                  <img src="{!! asset('/frontend/images/pdf_icon.jpg') !!}" /><br>
                  QuiltMotion Help
                  </a>
               </div>
               <div class="col_one_fourth center" data-animate="fadeInUp" data-delay="200">
                  <a href="{!! asset('/uploads/files/qct/quiltcad_help_file.pdf') !!}" target="_blank">
                  <img src="{!! asset('/frontend/images/pdf_icon.jpg') !!}" /><br>
                  QuiltCAD Help
                  </a>
               </div>
               <div class="col_one_fourth center" data-animate="fadeInUp" data-delay="400">
                  <a href="{!! asset('/uploads/files/qct/patterncad_help_file.pdf') !!}" target="_blank">
                  <img src="{!! asset('/frontend/images/pdf_icon.jpg') !!}" /><br>
                  PatternCAD Help
                  </a>
               </div>
               <div class="col_one_fourth col_last center" data-animate="fadeInUp" data-delay="600">
                  <a href="{!! asset('/uploads/files/qct/driver-update.pdf') !!}" target="_blank">
                  <img src="{!! asset('/frontend/images/pdf_icon.jpg') !!}" /><br>
                  Updating Drivers/ Driver Problems
                  </a>
               </div>
            </div>
         </div>
      </section>
      <!--=====requirements=====-->
      <div class="section topmargin-sm nobottommargin">
         <div class="container">
            <div class="heading-block">
               <h2>Live Technical Support</h2>
            </div>
            <p>Have a highly trained technician help you with any issue! First, call the Grace Company (1-800-264-0644). Then ask to speak to the technical support team and explain your problem. They&#39;ll direct you to this link for the <a class="button button rounded button-small" href="https://secure.logmeinrescue.com/Customer/Code.aspx">Log Me In page</a>, where you will enter a 6-digit code they give you. Then they'll be able to help you out while looking at your system setup!</p>
         </div>
      </div>
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
   </div>
</section>
<!-- #content end -->
@endsection

@section('footer_scripts')@endsection
@section('inlinejs')@endsection
@section('pp_footer_scripts')@endsection
