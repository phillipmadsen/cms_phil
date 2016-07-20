@extends('frontend/layout/qq')

@section('htmlschema')
itemscope itemtype="http://schema.org/Article"
@endsection


@section('goodrelations-OFF')
<div xmlns="http://www.w3.org/1999/xhtml"
  xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
  xmlns:rdfs="http://www.w3.org/2000/01/rdf-schema#"
  xmlns:xsd="http://www.w3.org/2001/XMLSchema#"
  xmlns:gr="http://purl.org/goodrelations/v1#"
  xmlns:foaf="http://xmlns.com/foaf/0.1/">

  <div typeof="gr:Offering" about="#offering">
    <div rev="gr:offers" resource="http://www.graceframe.com#company"></div>
    <div property="gr:name" content="Qnique Quilter" xml:lang="en"></div>
    <div property="gr:description" content="The Qnique Quilter 14+ / SKU:QQ14 quilting machine is a bold new breakthrough into the mid-arm category. Brought to you by the Grace Company, an industry leader in frames and accessories, the Qnique Quilter combines the features of a long-arm machine with the size and affordability of a mid-arm." xml:lang="en"></div>
    <div property="gr:hasEAN_UCC-13" content="636343172403" datatype="xsd:string"></div>
    <div property="gr:validFrom" content="2014-10-01T00:00:00Z" datatype="xsd:dateTime"></div>
    <div property="gr:validThrough" content="2016-11-30T00:00:00Z" datatype="xsd:dateTime"></div>
    <div property="gr:eligibleRegions" content="AT" datatype="xsd:string"></div>
    <div property="gr:eligibleRegions" content="DE" datatype="xsd:string"></div>
    <div property="gr:eligibleRegions" content="CH" datatype="xsd:string"></div>
    <div rel="foaf:depiction" resource="http://www.qniquequilter.com/wp-content/uploads/2014/08/qnique-full.png"></div>
    <div rel="gr:hasPriceSpecification">
      <div typeof="gr:UnitPriceSpecification">
        <div property="gr:hasCurrency" content="USD" datatype="xsd:string"></div>
        <div property="gr:hasCurrencyValue" content="3995.95" datatype="xsd:float"></div>
        <div property="gr:hasUnitOfMeasurement" content="C62" datatype="xsd:string"></div>
      </div>
    </div>
    <div rel="gr:hasBusinessFunction" resource="http://purl.org/goodrelations/v1#Sell"></div>
    <div rel="gr:acceptedPaymentMethods" resource="http://purl.org/goodrelations/v1#PayPal"></div>
    <div rel="gr:acceptedPaymentMethods" resource="http://purl.org/goodrelations/v1#AmericanExpress"></div>
    <div rel="gr:acceptedPaymentMethods" resource="http://purl.org/goodrelations/v1#Discover"></div>
    <div rel="gr:acceptedPaymentMethods" resource="http://purl.org/goodrelations/v1#MasterCard"></div>
    <div rel="gr:acceptedPaymentMethods" resource="http://purl.org/goodrelations/v1#VISA"></div>
    <div rel="gr:availableDeliveryMethods" resource="http://purl.org/goodrelations/v1#UPS"></div>
    <div rel="foaf:page" resource="http://www.qniquequilter.com/product/qnique-quilter-14/"></div>
    <div rel="gr:includes">
      <div typeof="gr:Individual" about="#product">
        <div property="gr:category" content="Long Arm Quilting Machine" xml:lang="en"></div>
        <div property="gr:name" content="Qnique Quilter" xml:lang="en"></div>
        <div property="gr:description" content="The Qnique Quilter 14+ / SKU:QQ14 quilting machine is a bold new breakthrough into the mid-arm category. Brought to you by the Grace Company, an industry leader in frames and accessories, the Qnique Quilter combines the features of a long-arm machine with the size and affordability of a mid-arm." xml:lang="en"></div>
        <div property="gr:hasEAN_UCC-13" content="636343172403" datatype="xsd:string"></div>
        <div rel="foaf:depiction" resource="http://www.qniquequilter.com/wp-content/uploads/2014/08/qnique-full.png"></div>
        <div rel="foaf:page" resource="http://www.qniquequilter.com/product/qnique-quilter-14/"></div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('seo')
	<meta name="title" content="Qnique Quilter &#8211; Quilting Machine by The Grace Company">
    <meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author"content="The Grace Company"/>
    <a itemprop="sameAs" href="//www.facebook.com/QniqueQuilter"></a>
    <a itemprop="sameAs" href="//twitter.com/QniqueQuilter"></a>
    <a itemprop="sameAs" href="//www.pinterest.com/qniquequilter/"></a>
    <a itemprop="sameAs" href="//plus.google.com/+QniqueQuilter14"></a>
    <a itemprop="sameAs" href="//www.google.com/+QniqueQuilterContact"></a>
    <a itemprop="sameAs" href="//www.youtube.com/playlist?list=PLCmfLRhaBv-e5i6T0aPw1rjBWFLZYX5cl"></a>

    <link rel="author" href="https://plus.google.com/106294285037149940748/" />
    <link rel="canonical" href="" />
@endsection

@section('title')
Qnique Quilter | Quilting Sewing Machine | The Grace Company
@endsection



@section('header_styles')

@endsection



@section('jsonschema')@endsection


@section('schematag')
stretched rows
@endsection

@section('scripts')@endsection
@section('ppscripts')@endsection
@section('bodyschema')@endsection
@section('bodytag')stretched rows @endsection

@section('submenu')
@include('frontend.layout.partials.menu.submenu-items', ['items'=> $menu_qnique->roots()])
@endsection

@section('slider')@endsection
@section('page-title')@endsection


@section('content')
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix scrollable-section" data-section-title="Qnique" data-short-description=" Qnique Quilting Machine">
            <div class="row clearfix">
                <div class="col-lg-5">
                    <div class="heading-block topmargin">
                        <h3>The Qnique Quilting Machine</h3>
                    </div>
                    <p class="lead">
                        We set out to make the perfect mid-arm quilting machine for the quilting enthusiast. We carefully crafted all of the high-end long-arm features you love into a truly affordable quilting machine.
                    </p>
                </div>
                <div class="col-lg-7">
                    <div style="position: relative;" class="ohidden" data-height-lg="426" data-height-md="567" data-height-sm="470" data-height-xs="287" data-height-xxs="183">
                        <img src="{!! asset('/frontend/images/product-overviews/qnique/qnique-angled.png') !!}" style="position: absolute; top: 0; left: 0;" data-animate="fadeInUp" alt="Qnique Quilting Machine">
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12">
                    <p class="lead">
                        For over 25 years the Grace Company has been the leading manufacturer of high quality quilting frames and quilting accessories. Now we are pleased to announce a revolutionary new quilting machine, designed to take your quilting experience to a whole new level!
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- expand your reach parallax
    =================================================== -->
    <div class="section parallax dark nobottommargin scrollable-section" data-section-title="Expand Your Reach!" data-short-description=""  style="background-image: url('{!! asset('/frontend/images/dark-background.jpg') !!}');padding:0px 0px 0px 100px;" data-stellar-background-ratio="0.4">
        <div class="col_one_third nomargin">
            <div class="heading-block topmargin nobottommargin">
                <h3>Expand Your Reach!</h3>
            </div>
            <p>The extended length and height of the work area on the Qnique gives you the freedom to quilt larger patterns or blocks. The Qnique features a 15 inch throat space from the needle to the back of the work area.</p>
            <img data-animate="fadeInUp" src="{!! asset('/frontend/images/product-overviews/qnique/qnique-block.png') !!}" alt="Qnique larger quilting blocks">
        </div>
        <div class="col_two_third col_last nobottommargin">
            <img data-animate="fadeInRight" src="{!! asset('/frontend/images/product-overviews/qnique/qnique-side-frame.png') !!}" alt="Qnique extended throat space">
        </div>
    </div>
    <div class="section-top-ribon notopmargin nobottommargin" style="background-color:black; height: 30px;"></div>
    <!-- Superior Stitching Section
    ========================================-->
    <div id="superior-stitching-section" class="section parallax notopmargin nobottommargin dark scrollable-section " data-section-title="Superior Stitching" data-short-description="Superior Stitching Section" style="background-image: url('{!! asset('/frontend/images/product-overviews/qnique/needle-blue.jpg') !!}');" data-stellar-background-ratio="0.4">
        <div class="col_half fright rightmargin">
            <div data-animate="fadeIn" class="transparent-block-dark col_half">
                <div class="block-img">
                    <img src="{!! asset('/frontend/images/product-overviews/qnique/screen-square.jpg') !!}" alt="Qnique Quilter LCD Screen">
                </div>
                <h3>The Perfect Stitch</h3>
                <p> Built-in stitch regulation keeps your stitch length consistent, even as you speed up and slow down.  The Qnique quilting machine features four different sewing modes, all conveniently displayed on the easy to navigate menu in the OLED screen.</p>
            </div>
        </div>
    </div>
    <!-- Features Section
    ======================== -->
    <h2 class="toppadding-sm bottompadding-sm center bgcolor-second dark nobottommargin scrollable-section" data-section-title="Features" data-short-description="Qnique Professional Quiltng Features">Professional Quiltng Features</h2>
    <div class="section parallax nomargin dark" style="background-image: url('{!! asset('/frontend/images/product-overviews/qnique/lights-frame.jpg') !!}');" data-stellar-background-ratio="0.4">
        <div class="col_half fright rightmargin">
            <div data-animate="fadeIn" class="transparent-block-dark col_half">
                <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                    <h4>LED Sewing Lights</h4>
                    <span class="before-heading">Bring your projects to light</span>
                    <p>The Qnique features high powered, daylight color-balanced LED work lights to illuminate your projects while quilting. You can even control the light brightness.</p>
                </div>
                <div class="block-img">
                    <img src="{!! asset('/frontend/images/product-overviews/qnique/lights-square.jpg') !!}" alt="Qnique Quilter LED Sewing Lights">
                </div>
            </div>
        </div>
    </div>
    <div class="section nomargin scrollable-section" data-section-title="Special Features" data-short-description="Qnique Settings and Addon Highlights" style="background-color:white;">
        <div class="container clear-bottommargin clearfix">
            <div class="fancy-title title-dotted-border">
                <h3>Special Features</h3>
            </div>
            <div class="col_half nobottommargin">
                <div class="feature-box center media-box fbox-bg">
                    <div class="fbox-media">
                        <a itemprop="url" href="#"><img class="image_fade" src="{!! asset('/frontend/images/product-overviews/qnique/screen.jpg') !!}" alt="Featured Box Image" style="opacity: 1;" itemprop="image"></a>
                    </div>
                    <div class="fbox-desc">
                        <h3 itemprop="hasPart about" >Full Color OLED Screen <span class="subtitle before-heading">Simplified view of all sewing settings</span> </h3>
                        <p itemprop="description">All of the most important quilt functions and settings can be changed and are seen right on the display! So you will always have quick access to stitching mode, stitch speed or stitch length, and needle position.</p>
                    </div>
                </div>
            </div>
            <div class="col_half col_last nobottommargin">
                <div class="feature-box center media-box fbox-bg">
                    <div class="fbox-media">
                        <a itemprop="url" href="#"><img class="image_fade" src="{!! asset('/frontend/images/product-overviews/qnique/bobbin-winder.jpg') !!}" alt="Featured Box Image" style="opacity: 1;" itemprop="image"></a>
                    </div>
                    <div class="fbox-desc">
                        <h3 itemprop="hasPart about" >Built-in Bobbin Winder <span class="subtitle before-heading">Quick and easy bobbin refills</span> </h3>
                        <p itemprop="description">The included bobbin winder on the Qnique Quilter runs its own seperate built-in motor, so you can refill bobbins without having to run the sewing machine.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container clear-bottommargin clearfix">
            <div class="col_half nobottommargin">
                <div class="feature-box center media-box fbox-bg">
                    <div class="fbox-media">
                        <a itemprop="url" href="#"><img class="image_fade" src="{!! asset('/frontend/images/product-overviews/qnique/bobbin-replace.jpg') !!}" alt="Featured Box Image" style="opacity: 1;" itemprop="image"></a>
                    </div>
                    <div class="fbox-desc">
                        <h3 itemprop="hasPart about" >Easy-Access Bobbin <span class="subtitle before-heading">Bobbin changing does not get any easier than this</span> </h3>
                        <p itemprop="description">The bobbin of the Qnique quilting machine has been designed for easy and quick access. Changing or checking on your bobbin is now more user-freindly than ever.</p>
                    </div>
                </div>
            </div>
            <div class="col_half col_last nobottommargin">
                <div class="feature-box center media-box fbox-bg">
                    <div class="fbox-media">
                        <a itemprop="url" href="#"><img class="image_fade" src="{!! asset('/frontend/images/product-overviews/qnique/m-class-bobbin.jpg') !!}" alt="Featured Box Image" style="opacity: 1;" itemprop="image"></a>
                    </div>
                    <div class="fbox-desc">
                        <h3 itemprop="hasPart about">Large M-Class Bobbin <span class="subtitle before-heading">So you can keep on quilting, and quilting, and quilting...</span> </h3>
                        <p itemprop="description">The Qnique Quilter comes standard with a large class M Bobbin. This lets you quilter for longer periods of time before needing to change or refill your bobbin</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container clear-bottommargin clearfix">
            <div class="col_half nobottommargin">
                <div class="feature-box center media-box fbox-bg">
                    <div class="fbox-media">
                        <a itemprop="url" href="#"><img class="image_fade" src="{!! asset('/frontend/images/product-overviews/qnique/buttons.jpg') !!}" alt="Featured Box Image" style="opacity: 1;" itemprop="image"></a>
                    </div>
                    <div class="fbox-desc">
                        <h3 itemprop="hasPart about" >Quick-Acess Controls <span class="subtitle before-heading">All the sewing power, right at your fingertips</span> </h3>
                        <p itemprop="description">We designed the control of the quilting machine to be as quilter-friendly as possible. All major functions and settings can be controlled right from the handles and seen on the full-color display.</p>
                    </div>
                </div>
            </div>
            <div class="col_half col_last nobottommargin">
                <div class="feature-box center media-box fbox-bg">
                    <div class="fbox-media">
                        <a itemprop="url" href="#"><img class="image_fade" src="{!! asset('/frontend/images/product-overviews/qnique/accessory-ports.jpg') !!}" alt="Featured Box Image" style="opacity: 1;" itemprop="image"></a>
                    </div>
                    <div class="fbox-desc">
                        <h3 itemprop="hasPart about">Additional Accessory Ports <span class="subtitle before-heading">More accessories, more power</span> </h3>
                        <p itemprop="description">Multiple accessory ports let you attach convenient sewing machine add-ons. Each port provides power to the accessory you plug in.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="section-top-ribon notopmargin nobottommargin" style="background-color:black; height: 30px;"></div>
    <!-- Frame section
    ========================================-->

    <div class="section nomargin scrollable-section" data-section-title="Quilting Frame" data-short-description="Frame Combo Packages">
        <div class="container clearfix">
            <div class="row topmargin-lg bottommargin-sm">
                <div class="heading-block center nomargin">
                    <h2>Perfectly Paired With a Quilting Frame</h2>
                </div>
                <img data-animate="fadeInRight" src="{!! asset('/frontend/images/product-overviews/qnique/qnique-frame-large.png') !!}" />
            </div>
            <div class="row topmargin-sm clearfix">
                <div class="col-md-6">
                    <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                    </div>
                    <div class="col-md-6">
                        <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Frame Packages
            ========================================-->
            <div class="container clearfix scrollable-section" data-section-title="Complete Packages" data-short-description="Qnique Complete Quilting System Packages">
                <div class="row topmargin-lg bottommargin-sm">
                    <div class="heading-block center nomargin">
                        <h2>Complete Quilting System Packages</h2>
                    </div>
                </div>
                <div class="row topmargin-sm clearfix">
                    <div class="col_one_fourth rightmargin-sm">
                        <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                            <h5>Qnique Frame Package</h5>
                        </div>
                        <img src="{!! asset('/frontend/images/product-overviews/qnique/qnique-frame-700.png') !!}" alt="Qnique Quilting Frame Package" />
                        <dl>
                            <dt>Sets up in sizes:</dt>
                            <dl>King, Crib</dl>
                            <dt>Maximum Length:</dt>
                            <dl>122 Inches</dl>
                            <dt>Special Feature</dt>
                            <dd>Made specifically for the Qnique Machine, optional 4th rail available</dd>
                        </dl>
                        <a href="#" class="button button-rounded button-secondary">Shop Now</a>
                    </div>
                    <div class="col_one_fourth rightmargin-sm">
                        <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                            <h5>Gracie King Package</h5>
                        </div>
                        <img src="{!! asset('/frontend/images/product-overviews/qnique/gracie-king-combo.png') !!}" alt="Qnique Quilting Frame Package" />
                        <dl>
                            <dt>Sets up in sizes:</dt>
                            <dl>King, Queen, Crib</dl>
                            <dt>Maximum Length:</dt>
                            <dl>136 Inches</dl>
                            <dt>Special Feature</dt>
                            <dd>Flip-up rail to quickly inspect underside stitching</dd>
                        </dl>
                        <a href="#" class="button button-rounded button-secondary">Shop Now</a>
                    </div>
                    <div class="col_one_fourth rightmargin-sm">
                        <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                            <h5>Gracie Queen Package</h5>
                        </div>
                        <img src="{!! asset('/frontend/images/product-overviews/qnique/gracie-queen-combo.png') !!}" alt="Qnique Quilting Frame Package" />
                        <dl>
                            <dt>Sets up in sizes:</dt>
                            <dl>Queen, Crib</dl>
                            <dt>Maximum Length:</dt>
                            <dl>136 Inches</dl>
                            <dt>Special Feature</dt>
                            <dd>Flip-up rail to quickly inspect underside stitching</dd>
                        </dl>
                        <a href="#" class="button button-rounded button-secondary">Shop Now</a>
                    </div>
                    <div class="col_one_fourth rightmargin-sm">
                        <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                            <h5>SR-2 Frame Package</h5>
                        </div>
                        <img src="{!! asset('/frontend/images/product-overviews/qnique/SR2-frame-rockit-combo.png') !!}" alt="Qnique Quilting Frame Package" />
                        <dl>
                            <dt>Sets up in sizes:</dt>
                            <dl>Queen, Crib</dl>
                            <dt>Maximum Length:</dt>
                            <dl>136 Inches</dl>
                            <dt>Special Feature</dt>
                            <dd>2-rail system and <strong>"Quilt-Clips"</strong> for easiest fabric loading ever</dd>
                        </dl>
                        <a href="#" class="button button-rounded button-secondary">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- #content end -->

@endsection

@section('plugins')
<script type="text/javascript" src="{!! asset('/frontend/js/plugins.js') !!}"></script>
@endsection

@section('footer_scripts-off')
 <script type="text/javascript" src="{!! asset('frontend/js/plugins/jquery.important.js') !!}"></script>
 <script type="text/javascript" src="{!! asset('frontend/js/plugins/jquery.pagetransition.js') !!}"></script>
@endsection

@section('inlinejs')@endsection


@section('pp_footer_scripts')



@endsection