@extends('frontend/layout/layout')

@section('htmlschema')
itemscope itemtype="http://schema.org/Article"
@endsection

@section('bodyschema')@endsection

@section('title')
Purchase Quilter&#39;s Creative Touch | The Grace Company
@endsection

@section('seo')
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author"content="The Grace Company"/>
@endsection

@section('jsonschema')
	<script type="application/ld+json">
		{
		  "@context": {
		    "gr": "http://purl.org/goodrelations/v1#",
		    "pto": "http://www.productontology.org/id/",
		    "foaf": "http://xmlns.com/foaf/0.1/",
		    "xsd": "http://www.w3.org/2001/XMLSchema#",
		    "foaf:page": {
		      "@type": "@id"
		    },
		    "gr:acceptedPaymentMethods": {
		      "@type": "@id"
		    },
		    "gr:hasBusinessFunction": {
		      "@type": "@id"
		    },
		    "gr:hasCurrencyValue": {
		      "@type": "xsd:float"
		    }
		  },
		  "@id": "http://example.org/cars/for-sale#qct",
		  "@type": "gr:Offering",
		  "gr:name": "Quilter&#39;s Creative Touch",
		  "gr:description": "Quilting automation software by The Grace Company",
		  "gr:hasBusinessFunction": "gr:Sell",
		  "gr:acceptedPaymentMethods": "gr:Cash",
		  "gr:hasPriceSpecification": {
		    "gr:hasCurrencyValue": "5000",
		    "gr:hasCurrency": "USD"
		  },
		  "gr:includes": {
		    "@type": [
		      "gr:Individual",
		      "pto:Software"
		    ],
		    "gr:name": "Quilter&#39;s Creative Touch",
		    "foaf:page": "{!! url('/') !!}/automation/qct/"
		  }
		}
	</script>
@endsection

@section('styles')
  <link rel="stylesheet" href="{!! asset('/frontend/custom-css/qct.css') !!}">

@endsection
@section('scripts')@endsection


@section('submenu')
@include('frontend.layout.partials.menu.submenu-items', ['items'=> $menu_qct->roots()])
@endsection


@section('slider')@endsection

@section('intro')
<!--Purchase Intro Section ==============================-->
<div class="section parallax nomargin clearfix" style="background-image: url('{!! asset('frontend/images/product-overviews/qct/quilt-bg-light.jpg') !!}'); border-bottom:4px solid #B14949;" data-stellar-background-ratio="0.2">
	<div class="container center">
		<div class="heading-block center nomargin">
			<h1 itemprop="headline title">Quilter&#39;s Creative Touch Purchasing Options</h1>
			<span class="before-heading" style="color:#B14949;">Call now to order</span>
		</div>
		<img src="{!! asset('frontend/images/product-overviews/qct/qctouch-logo-blue.png') !!}" alt="Quilter&#39;s Creative Touch Logo">
		<p class="nobottommargin" style="font-size:48px; color:#B14949; font-weight:bold"><i class="i-plain i-xlarge divcenter icon-phone3" style="color:#B14949;"></i>1-800-264-0644</p>
	</div>
</div>
@endsection
@section('pagetitle')@endsection

@section('content')
<!-- Content ============================================= -->
<section id="content" itemscope="" itemtype="http://schema.org/CreativeWork">
	<div class="content-wrap">
		{{-- <div class="container clearfix"> --}}
		<!-- Questions to ask ========================================-->
		<div class="container bottommargin">
			<div class="heading-block nomargin nobottomborder center">
				<h3 class="entry-title" itemprop="name hasPart about">Important Things To Know</h3>
				<span class="before-heading">Questions we&#39;ll ask when you call to order</span>
			</div>
			<div class="row">
				<div class="col-sm-4 center">
				<img src="{!! asset('frontend/images/product-overviews/qct/machine.png') !!}" />
					<h4 class="nomargin" itemprop="hasPart about">What Sewing Machine Will You Use?</h4>
					<a href="#" class="secondary"><i class="icon-line-paper"></i> See a list of compatible machines</a>
				</div>
				<div class="col-sm-4 center">
				<img src="{!! asset('frontend/images/product-overviews/qct/frame.png') !!}" />
					<h4 class="nomargin" itemprop="hasPart about">What Quilting Frame Will You Use?</h4>
					<a href="#" class="secondary"><i class="icon-line-paper"></i> See a list of compatible machines</a>
				</div>
				<div class="col-sm-4">
				<img src="{!! asset('frontend/images/product-overviews/qct/qct-version.png') !!}" />
					<div class="toggle toggle-bg nomargin" data-state="closed">
						<div class="togglet"><i class="toggle-closed icon-line-circle-plus" style="line-height:150%;"></i><i class="toggle-open icon-line-circle-minus" style="line-height:150%;"></i>
							<h4 class="center nomargin">What Version Would You Like?</h4></div>
							<div class="togglec">
								<ul class="nomargin" style="line-height:150%;" itemtype="http://schema.org/ItemList http://schema.org/CreativeWork">
									<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">QCT Gold (Subscription)</li>
									<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">Quilter&#39;s Creative Touch <strong><em>$6000</em></strong></li>
									<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">QCT Silver (Subscription)</li>
									<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">QCT Beginnings <strong><em>$4000</em></strong></li>
								</ul>
							</div>
						</div>
						<p class="center">See below for more information</p>
					</div>
				</div>
			</div>
			<!--Versions! ===================================-->
			<div class="section parallax nomargin" style="background-image:url('{!! asset('frontend/images/backgrounds/light_wool.png') !!}'); background-repeat:repeat; border-top:4px solid #B14949; border-bottom:4px solid #B14949;"  data-stellar-background-ratio="0.1">
				<div class="container clearfix">
					<div class="heading-block center nomargin">
						<h2 itemprop="name" style="color:#B14949;">Quilter&#39;s Creative Touch Versions</h2>
					</div>
				</div>
				<div class="row topmargin-sm" style="padding:50px;">



					<div class="col-md-6 center">
					<img class="divcenter" src="{!! asset('frontend/images/product-overviews/qct/logo-beginnings.png') !!}" alt="QCT Beginnings Logo" />
						<p>Quilter’s Creative Touch puts precision quilting at your fingertips. Choose from the vast library of included patterns and pantographs, or design your own! This full version of Quilter&#39;s Creative Touch has more advanced creation and pattern placement options than QCT Beginnings.</p>
					</div>
					<div class="col-md-6 center col-last">
					<img src="{!! asset('frontend/images/product-overviews/qct/logo-qct.png') !!}" alt="QCT Logo" />
						<p>Quilter’s Creative Touch puts precision quilting at your fingertips. Choose from the vast library of included patterns and pantographs, or design your own! This full version of Quilter&#39;s Creative Touch has more advanced creation and pattern placement options than QCT Beginnings.</p>
					</div>
				</div>
				<div class="row" style="padding:50px;">
					<div class="col-md-6 center">
					<img src="{!! asset('frontend/images/product-overviews/qct/logo-qct-silver.png') !!}" alt="QCT Silver Logo" />
						<p>Quilter’s Creative Touch puts precision quilting at your fingertips. Choose from the vast library of included patterns and pantographs, or design your own! This full version of Quilter&#39;s Creative Touch has more advanced creation and pattern placement options than QCT Beginnings.</p>
					</div>
					<div class="col-md-6 center col-last">
					<img src="{!! asset('frontend/images/product-overviews/qct/logo-qct-gold.png') !!}" alt="QCT Gold Logo" />
						<p>Quilter’s Creative Touch puts precision quilting at your fingertips. Choose from the vast library of included patterns and pantographs, or design your own! This full version of Quilter&#39;s Creative Touch has more advanced creation and pattern placement options than QCT Beginnings.</p>
					</div>
				</div>
			</div>
			<!--upgrading ===================================-->
			<div class="container clearfix bottommargin">
				<div class="heading-block center topmargin-sm nobottomborder bottommargin-sm">
					<span class="before-heading" style="color:black;">Allready have an older version of <strong>QuiltMotion?</strong></span>
					<h4 style="color:#B14949;">Upgrade at a discounted price!</h4>
				</div>
				<p class="center">If you already own an older version of QuiltMotion or Quilter&#39;s Creative Touch, you can upgrade to the latest, more powerful, more user-freindly Quilter&#39;s Creatitve Touch at a discounted rate! Call now to find out what your discounted rate will be!<br /><span style="font-size:24px;"><i class="i-plain divcenter icon-phone3"></i> <strong><em>1-800-264-0644.</em></strong></span></p>
			</div>
			<!--Included Items ===============-->
			<div class="section parallax nomargin" style="background-image:url('{!! asset('frontend/images/backgrounds/light_wool.png') !!}'); background-repeat:repeat; border-top:4px solid #B14949; border-bottom:4px solid #B14949;"  data-stellar-background-ratio="0.1">
				<div class="container clearfix">
					<div class="heading-block center margin-sm">
						<h3>What&#39;s Included</h3>
						<p class="lead">The following items are included with every purchase of either <em>Quilter&#39;s Creative Touch</em> or <em>Quilter&#39;s Creative Touch Beginnings</em>.</p>
					</div>
					<div class="row">
						<div class="col-sm-4">
							<h4 class="center" itemprop="hasPart about">Motor Plate</h4>
							<div class="block-img" style="-webkit-box-shadow: 1px 1px 7px 1px rgba(0,0,0,0.25);
							-moz-box-shadow:  1px 1px 7px 1px rgba(0,0,0,0.25);
							box-shadow:  1px 1px 7px 1px rgba(0,0,0,0.25);">
							<img src="{!! asset('frontend/images/product-overviews/qct/motor-plate.jpg') !!}" alt="QCT Motor Plate">
						</div>
					</div>
					<div class="col-sm-4">
						<h4 class="center" itemprop="hasPart about">QCT Software</h4>
						<div class="block-img" style="-webkit-box-shadow: 1px 1px 7px 1px rgba(0,0,0,0.25);
						-moz-box-shadow:  1px 1px 7px 1px rgba(0,0,0,0.25));
						box-shadow:  1px 1px 7px 1px rgba(0,0,0,0.25);">
						<img src="{!! asset('frontend/images/product-overviews/qct/usb.jpg') !!}" alt="QCT Motor Plate">
					</div>
				</div>
				<div class="col-sm-4">
					<h4 class="center" itemprop="hasPart about">Tablet Stand</h4>
					<div class="block-img" style="-webkit-box-shadow: 1px 1px 7px 1px rgba(0,0,0,0.25);
					-moz-box-shadow:  1px 1px 7px 1px rgba(0,0,0,0.25);
					box-shadow:  1px 1px 7px 1px rgba(0,0,0,0.25);">
					<img src="{!! asset('frontend/images/product-overviews/qct/tablet-mount.jpg') !!}" alt="QCT Motor Plate">
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
			<h3 itemprop="hasPart about">Using Your Own Windows Tablet</h3>
		</div>
		<p>Quilter&#39;s Creative Touch does not include any tablet. We've given you the freedom to use any tablet running a full version of Windows 7, 8, or later. <em>(QCT Software will <strong>not</strong> work with Windows RT tablets.)</em> With QCT installed on your tablet, you can use it anywhere to design patterns and create layouts, and then bring it back to your sewing machine to quilt!</p>
	</div>
	{{-- </div> --}}
</div>
<!--get QCT Now! ===================================-->
<div class="section parallax nomargin" style="background-image:url('{!! asset('frontend/images/backgrounds/light_wool.png') !!}'); background-repeat:repeat; border-top:4px solid #B14949; border-bottom:4px solid #B14949;"  data-stellar-background-ratio="0.1">
	<div class="container clearfix topmargin-lg bottommargin-lg">
		<div class="heading-block center nomargin nobottomborder">
			<h2 itemprop="hasPart about" style="color:#B14949;">Get Quilter&#39;s Creative Touch Now</h2>
			<span class="before-heading" style="color:#48A0C4">Learn how you can get the ultimate quilting experience in your home!</span>
			<a href="#" class="button button-rounded button-large button-secondary">See Purchase Options</a> or <a href="#" class="button button-rounded button-large" itemprop="url"><span itemprop="name">Download Free Demo</span></a>
		</div>
	</div>
</div>
</div>
</section><!-- #content end -->
@endsection


@section('footer_scripts')@endsection
@section('pp_footer_scripts')@endsection
@section('inlinejs')@endsection
