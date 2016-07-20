@extends('frontend/layout/layout')

@section('htmlschema')
itemscope itemtype="http://schema.org/Article"
@endsection

@section('seo')
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author"content="The Grace Company"/>
@endsection

@section('jsonschema')@endsection

@section('title')

@endsection

@section('bodyschema')@endsection

@section('bodytag')
rows
@endsection

@section('header_styles')@endsection
@section('scripts')@endsection
@section('ppscripts')@endsection

@section('submenu')
@include('frontend.layout.partials.menu.submenu-items', ['items'=> $menu_hand->roots()])
@endsection
@section('slider')@endsection
@section('intro')@endsection
@section('page-title')@endsection

@section('sidebar')
    @parent

{{--  This is appended to the parent dsidebar.  --}}
@endsection

@section('content')
<section id="content">
	<div class="content-wrap" style="padding:0px;">
		<!--Page Intro ===================================-->
		<div class="container clearfix">
			<div class="heading-block center topmargin bottommargin-sm">
				<h1 class="accent">Grace Company LapHoops</h1>
				<p class="before-heading"></p>
			</div>
			<div class="row bottommargin-lg">
				<div class="col-md-6" >
				<img src="{!! asset('/frontend/images/product-overviews/laphoops/laphoop-green.jpg') !!}" data-animate="fadeInLeft" alt="Wood Swiveling Lap Hoop">
				</div>
				<div class="col-md-6">
					<p class="lead">
						The Grace Company LapHoops provide easy and comfortable options for traditional hand quilting. These 14” diameter hoops are perfect for up close and personal quilting. Use the hoops for small or large projects, right from the comfort of your favorite chair.
					</p>
					<div class="col-xs-6">
					<img src="{!! asset('/frontend/images/product-overviews/laphoops/poly-hoop-887.jpg') !!}" alt="Plastic Swiveling Lap Hoop" />
					</div>
					<div class="col-xs-6">
					<img src="{!! asset('/frontend/images/product-overviews/laphoops/didi-hoop-reflection.jpg') !!}" alt="Didi Lap Hoop" />
					</div>
				</div>
			</div>
		</div>
		<!-- square-hoop parallax =================================================== -->
		<div class="section parallax nomargin clearfix" style="border-top:2px solid #B14949; border-bottom:2px solid #B14949; background-image: url('{!! asset('/frontend/images/backgrounds/paven-light-blue.png') !!}'); padding:0px; background-repeat:repeat;" data-stellar-background-ratio="0.2">
			<div class="heading-block topmargin center nobottomborder bottommargin-sm">
				<h2 class="nomargin">Square Quilting Hoops</h2>
				<p class="before-heading">Square fabric belongs in a square hoop</p>
			</div>
			<div class="row visible-lg">
				<div class="col-md-8">
				<img src="{!! asset('/frontend/images/product-overviews/hoop2/hoop-close.jpg') !!}">
				</div>
				<div class="col-md-4">
					<p style="color: black; padding:0px 20px;">Every Grace Company quilting hoop is based on a simple yet profound truth, square hoops are more ideal for holding fabric than a round one. The square weave in fabric lends itself naturally to square hoop quilting. Square hoops provide easier control of fabric and an even tension all the way to the edges. All Grace hoops also come with ege-tools, giving you perfect tension even along the eges of your quilt.</p>
					<p class="center"><img src="{!! asset('/frontend/images/product-overviews/hoop2/all-hoops.jpg') !!}" / alt="square Grace quilting hoops"></p>
				</div>
			</div>
			<div class="container hidden-lg">
				<p style="color: black;">Every Grace Company quilting hoop is based on a simple yet profound truth, square hoops are more ideal for holding fabric than a round one. The square weave in fabric lends itself naturally to square hoop quilting. Square hoops provide easier control of fabric and an even tension all the way to the edges. All Grace hoops also come with ege-tools, giving you perfect tension even along the eges of your quilt.</p>
				<div class="col-sm-8">
				<img src="{!! asset('/frontend/images/product-overviews/hoop2/hoop-close.jpg') !!}">
				</div>
				<div class="col-sm-4">
					<img src="{!! asset('/frontend/images/product-overviews/hoop2/all-hoops.jpg') !!}" / alt="square Grace quilting hoops"></p>
				</div>
			</div>
		</div>
	</div>
	<!--Swivels ================================-->
	<section style=" border-bottom:2px solid #B14949;">
		<div class="container clearfix">
			<div class="heading-block center topmargin bottommargin-sm">
				<h2>Fully adjustable for your comfort</h2>
				<p class="before-heading">See your projects in a new angle</p>
			</div>
			<div class="row bottommargin-lg visible-md visible-lg">
				<div class="col-md-8" >
				<img src="{!! asset('/frontend/images/product-overviews/laphoops/wood-hoop-spin.jpg') !!}" data-animate="fadeInLeft" alt="Wood Swiveling Lap Hoop">
				</div>
				<div class="col-md-4">
					<p> The Grace Company Swivel LapHoops (both wood and Poly Plastic) can be rotaated and tilted to any angle. Reduce stress on shoulders, neck, and arm as you quilt, by adjusting the swivel hoop to the most comfortable position, and resting it in your lap. Once you tilt or rotate the hoop the way you want it, you can easily lock it in place with the lock-knob, and release it when you need to adjust it again.
					</p>
					<img src="{!! asset('/frontend/images/product-overviews/laphoops/laphoop_knob.jpg') !!}" />
				</div>
			</div>
			<div class="row bottommargin hidden-md hidden-lg">
				<p> The Grace Company Swivel LapHoops (both wood and Poly Plastic) can be rotaated and tilted to any angle. Reduce stress on shoulders, neck, and arm as you quilt, by adjusting the swivel hoop to the most comfortable position, and resting it in your lap. Once you tilt or rotate the hoop the way you want it, you can easily lock it in place with the lock-knob, and release it when you need to adjust it again.
				</p>
				<div class="col-xs-6" >
				<img src="{!! asset('/frontend/images/product-overviews/laphoops/wood-hoop-spin.jpg') !!}" data-animate="fadeInLeft" alt="Wood Swiveling Lap Hoop">
				</div>
				<div class="col-xs-6 col-xs-6">
				<img src="{!! asset('/frontend/images/product-overviews/laphoops/laphoop_knob.jpg') !!}" alt="swivel lap hoop locking knob" data-animate="fadeInRight"/>
				</div>
			</div>
		</div>
	</section>
	<!--Other Features ================================-->
	<div class="container clearfix topmargin bottommargin">
		<div class="heading-block center">
			<h3>Extra Hoop<sup>2</sup> Features</h3>
		</div>
		<div class="row clearfix">
			<div class="col_half ">
				<div class="feature-box media-box fbox-bg">
					<div class="fbox-media">
					<img src="{!! asset('/frontend/images/product-overviews/laphoops/laphoop-edge-tools.jpg') !!}" alt="quilting hoop edge tools">
					</div>
					<div class="fbox-desc">
						<div class="heading-block" style="margin-bottom: 15px;">
							<h4>Edge Tools Included</h4>
						</div>
						<p>The Edge tools cab be used with a pare piece of fabric for maximum side tension, even when working on a corner or edge. These are included with all Grace Hoops</p>
					</div>
				</div>
			</div>
			<div class="col_half col_last">
				<div class="feature-box media-box fbox-bg">
					<div class="fbox-media">
					<img src="{!! asset('/frontend/images/product-overviews/laphoops/laphoop-adjust.jpg') !!}" alt="easy to adjust quilting lap hoop">
					</div>
					<div class="fbox-desc">
						<div class="heading-block" style="margin-bottom: 15px;">
							<h4>Easily Adjustable Outer Hoop</h4>
						</div>
						<p>All Grace Hoops can be used with various fabric thicknesses. The outer hoop is easily made tighter or looser by adjusting the hoop tensioner.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--hoops ======================-->
	<div class="heading-block center nobottomborder nobottommargin" style="border-top:2px solid #b14949;">
		<h2 class="topmargin"> Grace Laphoops</h2>
	</div>
	<div class="container topmargin-sm clearfix center bottommargin-lg">
		<div class="row center">
			<div class="col-sm-4 bottommargin-sm">
				<h4 class="nobottommargin">Grace Wood LapHoop</h4>
				<p style="font-style: italic;">Swiveling Wood Hoop</p>
				<img src="{!! asset('/frontend/images/product-overviews/laphoops/wood-swivel-hoop-887.jpg') !!}" alt="Grace Wood Swivel LapHoop" />
				<a href="/machine-quilting/gq-frame.html" class="button button-rounded button-small">Buy Now</a>
			</div>
			<div class="col-sm-4 bottommargin-sm">
				<h4 class="nobottommargin">Grace Poly Laphoop</h4>
				<p style="font-style: italic;">Swiveling Plastic Hoop</p>
				<img src="{!! asset('/frontend/images/product-overviews/laphoops/poly-hoop-887.jpg') !!}" alt="Poly Swivel LapHoop" />
				<a href="/machine-quilting/gq-frame.html" class="button button-rounded button-small">Buy Now</a>
			</div>
			<div class="col-sm-4 bottommargin-sm">
				<h4 class="nobottommargin">Didi LapHoop </h4>
				<p style="font-style: italic;">Non-swiveling Plastic Hoop</p>
				<img src="{!! asset('/frontend/images/product-overviews/laphoops/didi-hoop-reflection.jpg') !!}" alt="EZ3 Hand Quilting Frame" />
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