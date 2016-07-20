@extends('frontend/layout/shop')



@section('goodrelations')

@endsection

@section('seo')@endsection
@section('jsonschema')@endsection
@section('title')@endsection
@section('bodyschema')@endsection

@section('header_styles')
<!-- SLIDER REVOLUTION 5.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="{!! asset('/frontend/include/rs-plugin/css/settings.css') !!}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{!! asset('/frontend/include/rs-plugin/css/layers.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('/frontend/include/rs-plugin/css/navigation.css') !!}">

    <style>
.revo-slider-emphasis-text{font-size:58px;font-weight:700;letter-spacing:1px;font-family:'Raleway',sans-serif;padding:15px 20px;border-top:2px solid #FFF;border-bottom:2px solid #FFF;}
.revo-slider-desc-text{font-size:20px;font-family:'Lato',sans-serif;width:650px;text-align:center;line-height:1.5;}
.revo-slider-caps-text{font-size:16px;font-weight:400;letter-spacing:3px;font-family:'Raleway',sans-serif;}
.tp-video-play-button{display:none!important;}
.tp-caption{white-space:nowrap;}
    </style>

@endsection

@section('scripts')@endsection

@section('ppscripts')

@endsection

@section('submenu')

@endsection

@section('slider')
	@include('frontend.shop.partials.layout.slider')
@endsection


@section('intro')@endsection



@section('page-title-off')
<!-- Page Title ============================================= -->
		<section id="page-title">
			<div class="container clearfix">
				<h1>Shop</h1>
				<span>Start Buying your Favourite Theme</span>
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li class="active">Shop</li>
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
<div class="container clearfix">

<div class="container clearfix">

    <div class="col_two_third bottommargin-lg">

        <div class="fslider" data-arrows="false">
            <div class="flexslider">

            <div class="flex-viewport" style="overflow: hidden; position: relative; height: 488px;"><div class="slider-wrap" style="width: 1200%; transition-duration: 0s; transform: translate3d(-745px, 0px, 0px);"><div class="slide clone" aria-hidden="true" style="width: 745px; margin-right: 0px; float: left; display: block;">
                        <a href="#">
                            <img src="images/shop/slider/4.jpg" alt="Shop Image" draggable="false">
                        </a>
                    </div>
                    <div class="slide flex-active-slide" data-thumb-alt="" style="width: 745px; margin-right: 0px; float: left; display: block;">
                        <a href="#">
                            <img src="images/shop/slider/1.jpg" alt="Shop Image" draggable="false">
                        </a>
                    </div>
                    <div class="slide" data-thumb-alt="" style="width: 745px; margin-right: 0px; float: left; display: block;">
                        <a href="#">
                            <img src="images/shop/slider/2.jpg" alt="Shop Image" draggable="false">
                        </a>
                    </div>
                    <div class="slide" data-thumb-alt="" style="width: 745px; margin-right: 0px; float: left; display: block;">
                        <a href="#">
                            <img src="images/shop/slider/3.jpg" alt="Shop Image" draggable="false">
                        </a>
                    </div>
                    <div class="slide" data-thumb-alt="" style="width: 745px; margin-right: 0px; float: left; display: block;">
                        <a href="#">
                            <img src="images/shop/slider/4.jpg" alt="Shop Image" draggable="false">
                        </a>
                    </div>
                <div class="slide clone" aria-hidden="true" style="width: 745px; margin-right: 0px; float: left; display: block;">
                        <a href="#">
                            <img src="images/shop/slider/1.jpg" alt="Shop Image" draggable="false">
                        </a>
                    </div></div></div><ol class="flex-control-nav flex-control-paging"><li data-animate="zoomIn" data-delay="0" class="zoomIn animated"><a href="#" class="flex-active">1</a></li><li data-animate="zoomIn" data-delay="200" class="zoomIn animated"><a href="#" class="">2</a></li><li data-animate="zoomIn" data-delay="400" class="zoomIn animated"><a href="#" class="">3</a></li><li data-animate="zoomIn" data-delay="600" class="zoomIn animated"><a href="#" class="">4</a></li></ol></div>
        </div>

    </div>

    <div class="col_one_third bottommargin-lg col_last">

        <div class="col_full bottommargin-sm">
            <a href="#"><img src="images/shop/banners/7.jpg" alt="Image"></a>
        </div>

        <div class="col_full nobottommargin">
            <a href="#"><img src="images/shop/banners/3.jpg" alt="Image"></a>
        </div>

    </div>

    <div class="clear"></div>

</div>

<div class="promo parallax promo-full bottommargin-lg" style="background-image: url(&quot;images/parallax/3.jpg&quot;); background-position: 50% 12px;" data-stellar-background-ratio="0.4">
                    <div class="container clearfix">
                        <h3>Get <span>30%</span> off on orders of $29 or more. Use Coupon: <span>SHOP30</span></h3>
                        <span>Sale available on selected Designer Brands that include Apparels, Footwear, Fashion Accessories &amp; Watches.</span>
                        <a href="#" class="button button-xlarge button-rounded">Start Shopping</a>
                    </div>
                </div>

                <div class="container clearfix">

                    <div class="col-md-8 nopadding">

                        <div class="col-md-6 noleftpadding bottommargin-sm">
                            <a href="#"><img src="images/shop/banners/2.jpg" alt="Image"></a>
                        </div>

                        <div class="col-md-6 noleftpadding bottommargin-sm">
                            <a href="#"><img src="images/shop/banners/8.jpg" alt="Image"></a>
                        </div>

                        <div class="clear"></div>

                        <div class="col-md-12 noleftpadding">
                            <a href="#"><img src="images/shop/banners/4.jpg" alt="Image"></a>
                        </div>

                    </div>

                    <div class="col-md-4 nopadding">
                        <a href="#"><img src="images/shop/banners/9.jpg" alt="Image"></a>
                    </div>

                    <div class="clear"></div>

                    <div class="tabs topmargin-lg clearfix" id="tab-3">

                        <ul class="tab-nav clearfix">
                            <li><a href="#tabs-9">New Arrivals</a></li>
                            <li><a href="#tabs-10">Best sellers</a></li>
                            <li><a href="#tabs-11">You may like</a></li>
                        </ul>

                        <div class="tab-container">

                            <div class="tab-content clearfix" id="tabs-9">

                                <div id="shop" class="shop clearfix">

                                    <div class="product clearfix">
                                        <div class="product-image">
                                            <a href="#"><img src="images/shop/dress/1.jpg" alt="Checked Short Dress"></a>
                                            <a href="#"><img src="images/shop/dress/1-1.jpg" alt="Checked Short Dress"></a>
                                            <div class="sale-flash">50% Off*</div>
                                            <div class="product-overlay">
                                                <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                                <a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                                            </div>
                                        </div>
                                        <div class="product-desc">
                                            <div class="product-title"><h3><a href="#">Checked Short Dress</a></h3></div>
                                            <div class="product-price"><del>$24.99</del> <ins>$12.49</ins></div>
                                            <div class="product-rating">
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star-half-full"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product clearfix">
                                        <div class="product-image">
                                            <a href="#"><img src="images/shop/pants/1-1.jpg" alt="Slim Fit Chinos"></a>
                                            <a href="#"><img src="images/shop/pants/1.jpg" alt="Slim Fit Chinos"></a>
                                            <div class="product-overlay">
                                                <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                                <a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                                            </div>
                                        </div>
                                        <div class="product-desc">
                                            <div class="product-title"><h3><a href="#">Slim Fit Chinos</a></h3></div>
                                            <div class="product-price">$39.99</div>
                                            <div class="product-rating">
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star-half-full"></i>
                                                <i class="icon-star-empty"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product clearfix">
                                        <div class="product-image">
                                            <div class="fslider" data-arrows="false">
                                                <div class="flexslider">
                                                    <div class="slider-wrap">
                                                        <div class="slide"><a href="#"><img src="images/shop/shoes/1.jpg" alt="Dark Brown Boots"></a></div>
                                                        <div class="slide"><a href="#"><img src="images/shop/shoes/1-1.jpg" alt="Dark Brown Boots"></a></div>
                                                        <div class="slide"><a href="#"><img src="images/shop/shoes/1-2.jpg" alt="Dark Brown Boots"></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-overlay">
                                                <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                                <a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                                            </div>
                                        </div>
                                        <div class="product-desc">
                                            <div class="product-title"><h3><a href="#">Dark Brown Boots</a></h3></div>
                                            <div class="product-price">$49</div>
                                            <div class="product-rating">
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star-empty"></i>
                                                <i class="icon-star-empty"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product clearfix">
                                        <div class="product-image">
                                            <a href="#"><img src="images/shop/dress/2.jpg" alt="Light Blue Denim Dress"></a>
                                            <a href="#"><img src="images/shop/dress/2-2.jpg" alt="Light Blue Denim Dress"></a>
                                            <div class="product-overlay">
                                                <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                                <a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                                            </div>
                                        </div>
                                        <div class="product-desc">
                                            <div class="product-title"><h3><a href="#">Light Blue Denim Dress</a></h3></div>
                                            <div class="product-price">$19.95</div>
                                            <div class="product-rating">
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star-empty"></i>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="tab-content clearfix" id="tabs-10">

                                <div id="shop" class="shop clearfix">

                                    <div class="product clearfix">
                                        <div class="product-image">
                                            <a href="#"><img src="images/shop/sunglasses/1.jpg" alt="Unisex Sunglasses"></a>
                                            <a href="#"><img src="images/shop/sunglasses/1-1.jpg" alt="Unisex Sunglasses"></a>
                                            <div class="sale-flash">Sale!</div>
                                            <div class="product-overlay">
                                                <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                                <a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                                            </div>
                                        </div>
                                        <div class="product-desc">
                                            <div class="product-title"><h3><a href="#">Unisex Sunglasses</a></h3></div>
                                            <div class="product-price"><del>$19.99</del> <ins>$11.99</ins></div>
                                            <div class="product-rating">
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star-empty"></i>
                                                <i class="icon-star-empty"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product clearfix">
                                        <div class="product-image">
                                            <a href="#"><img src="images/shop/tshirts/1.jpg" alt="Blue Round-Neck Tshirt"></a>
                                            <a href="#"><img src="images/shop/tshirts/1-1.jpg" alt="Blue Round-Neck Tshirt"></a>
                                            <div class="product-overlay">
                                                <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                                <a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                                            </div>
                                        </div>
                                        <div class="product-desc">
                                            <div class="product-title"><h3><a href="#">Blue Round-Neck Tshirt</a></h3></div>
                                            <div class="product-price">$9.99</div>
                                            <div class="product-rating">
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star-half-full"></i>
                                                <i class="icon-star-empty"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product clearfix">
                                        <div class="product-image">
                                            <a href="#"><img src="images/shop/watches/1.jpg" alt="Silver Chrome Watch"></a>
                                            <a href="#"><img src="images/shop/watches/1-1.jpg" alt="Silver Chrome Watch"></a>
                                            <div class="product-overlay">
                                                <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                                <a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                                            </div>
                                        </div>
                                        <div class="product-desc">
                                            <div class="product-title"><h3><a href="#">Silver Chrome Watch</a></h3></div>
                                            <div class="product-price">$129.99</div>
                                            <div class="product-rating">
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star-half-full"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product clearfix">
                                        <div class="product-image">
                                            <a href="#"><img src="images/shop/shoes/2.jpg" alt="Men Grey Casual Shoes"></a>
                                            <a href="#"><img src="images/shop/shoes/2-1.jpg" alt="Men Grey Casual Shoes"></a>
                                            <div class="sale-flash">Sale!</div>
                                            <div class="product-overlay">
                                                <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                                <a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                                            </div>
                                        </div>
                                        <div class="product-desc">
                                            <div class="product-title"><h3><a href="#">Men Grey Casual Shoes</a></h3></div>
                                            <div class="product-price"><del>$45.99</del> <ins>$39.49</ins></div>
                                            <div class="product-rating">
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star-half-full"></i>
                                                <i class="icon-star-empty"></i>
                                                <i class="icon-star-empty"></i>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="tab-content clearfix" id="tabs-11">

                                <div id="shop" class="shop clearfix">

                                    <div class="product clearfix">
                                        <div class="product-image">
                                            <div class="fslider" data-arrows="false">
                                                <div class="flexslider">
                                                    <div class="slider-wrap">
                                                        <div class="slide"><a href="#"><img src="images/shop/dress/3.jpg" alt="Pink Printed Dress"></a></div>
                                                        <div class="slide"><a href="#"><img src="images/shop/dress/3-1.jpg" alt="Pink Printed Dress"></a></div>
                                                        <div class="slide"><a href="#"><img src="images/shop/dress/3-2.jpg" alt="Pink Printed Dress"></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-overlay">
                                                <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                                <a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                                            </div>
                                        </div>
                                        <div class="product-desc">
                                            <div class="product-title"><h3><a href="#">Pink Printed Dress</a></h3></div>
                                            <div class="product-price">$39.49</div>
                                            <div class="product-rating">
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star-empty"></i>
                                                <i class="icon-star-empty"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product clearfix">
                                        <div class="product-image">
                                            <a href="#"><img src="images/shop/pants/5.jpg" alt="Green Trousers"></a>
                                            <a href="#"><img src="images/shop/pants/5-1.jpg" alt="Green Trousers"></a>
                                            <div class="sale-flash">Sale!</div>
                                            <div class="product-overlay">
                                                <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                                <a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                                            </div>
                                        </div>
                                        <div class="product-desc">
                                            <div class="product-title"><h3><a href="#">Green Trousers</a></h3></div>
                                            <div class="product-price"><del>$24.99</del> <ins>$21.99</ins></div>
                                            <div class="product-rating">
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star-half-full"></i>
                                                <i class="icon-star-empty"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product clearfix">
                                        <div class="product-image">
                                            <a href="#"><img src="images/shop/sunglasses/2.jpg" alt="Men Aviator Sunglasses"></a>
                                            <a href="#"><img src="images/shop/sunglasses/2-1.jpg" alt="Men Aviator Sunglasses"></a>
                                            <div class="product-overlay">
                                                <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                                <a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                                            </div>
                                        </div>
                                        <div class="product-desc">
                                            <div class="product-title"><h3><a href="#">Men Aviator Sunglasses</a></h3></div>
                                            <div class="product-price">$13.49</div>
                                            <div class="product-rating">
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star-empty"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product clearfix">
                                        <div class="product-image">
                                            <a href="#"><img src="images/shop/tshirts/4.jpg" alt="Black Polo Tshirt"></a>
                                            <a href="#"><img src="images/shop/tshirts/4-1.jpg" alt="Black Polo Tshirt"></a>
                                            <div class="product-overlay">
                                                <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                                <a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                                            </div>
                                        </div>
                                        <div class="product-desc">
                                            <div class="product-title"><h3><a href="#">Black Polo Tshirt</a></h3></div>
                                            <div class="product-price">$11.49</div>
                                            <div class="product-rating">
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                                <i class="icon-star3"></i>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="clear bottommargin-sm"></div>

                    <div class="col_one_third">
                        <div class="fancy-title title-border">
                            <h4>About Us</h4>
                        </div>
                        <p>Jane Jacobs educate, leverage affiliate Martin Luther King Jr. agriculture conflict resolution dignity. Cooperation international progress non-partisan lasting change meaningful.</p>
                    </div>

                    <div class="col_one_third subscribe-widget">
                        <div class="fancy-title title-border">
                            <h4>Subscribe for Offers</h4>
                        </div>
                        <p>Subscribe to Our Newsletter to get Important News, Amazing Offers &amp; Inside Scoops:</p>
                        <div class="widget-subscribe-form-result"></div>
                        <form id="widget-subscribe-form2" action="include/subscribe.php" role="form" method="post" class="nobottommargin">
                            <div class="input-group divcenter">
                                <span class="input-group-addon"><i class="icon-email2"></i></span>
                                <input type="email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit">Subscribe</button>
                                </span>
                            </div>
                        </form>
                    </div>

                    <div class="col_one_third col_last">
                        <div class="fancy-title title-border">
                            <h4>Connect with Us</h4>
                        </div>

                        <a href="#" class="social-icon si-facebook" data-toggle="tooltip" data-placement="top" title="Facebook">
                            <i class="icon-facebook"></i>
                            <i class="icon-facebook"></i>
                        </a>

                        <a href="#" class="social-icon si-delicious" data-toggle="tooltip" data-placement="top" title="Delicious">
                            <i class="icon-delicious"></i>
                            <i class="icon-delicious"></i>
                        </a>

                        <a href="#" class="social-icon si-paypal" data-toggle="tooltip" data-placement="top" title="PayPal">
                            <i class="icon-paypal"></i>
                            <i class="icon-paypal"></i>
                        </a>

                        <a href="#" class="social-icon si-flattr" data-toggle="tooltip" data-placement="top" title="Flattr">
                            <i class="icon-flattr"></i>
                            <i class="icon-flattr"></i>
                        </a>

                        <a href="#" class="social-icon si-android" data-toggle="tooltip" data-placement="top" title="Android">
                            <i class="icon-android"></i>
                            <i class="icon-android"></i>
                        </a>

                        <a href="#" class="social-icon si-smashmag" data-toggle="tooltip" data-placement="top" title="Smashing Magazine">
                            <i class="icon-smashmag"></i>
                            <i class="icon-smashmag"></i>
                        </a>

                        <a href="#" class="social-icon si-gplus" data-toggle="tooltip" data-placement="top" title="Google+">
                            <i class="icon-gplus"></i>
                            <i class="icon-gplus"></i>
                        </a>

                        <a href="#" class="social-icon si-wikipedia" data-toggle="tooltip" data-placement="top" title="Wikipedia">
                            <i class="icon-wikipedia"></i>
                            <i class="icon-wikipedia"></i>
                        </a>

                        <a href="#" class="social-icon si-stumbleupon" data-toggle="tooltip" data-placement="top" title="StumbleUpon">
                            <i class="icon-stumbleupon"></i>
                            <i class="icon-stumbleupon"></i>
                        </a>

                        <a href="#" class="social-icon si-foursquare" data-toggle="tooltip" data-placement="top" title="FourSquare">
                            <i class="icon-foursquare"></i>
                            <i class="icon-foursquare"></i>
                        </a>

                        <a href="#" class="social-icon si-call" data-toggle="tooltip" data-placement="top" title="Call">
                            <i class="icon-call"></i>
                            <i class="icon-call"></i>
                        </a>

                        <a href="#" class="social-icon si-ninetyninedesigns" data-toggle="tooltip" data-placement="top" title="Ninety Nine Design">
                            <i class="icon-ninetyninedesigns"></i>
                            <i class="icon-ninetyninedesigns"></i>
                        </a>

                        <a href="#" class="social-icon si-forrst" data-toggle="tooltip" data-placement="top" title="Forrst">
                            <i class="icon-forrst"></i>
                            <i class="icon-forrst"></i>
                        </a>

                        <a href="#" class="social-icon si-digg" data-toggle="tooltip" data-placement="top" title="Digg">
                            <i class="icon-digg"></i>
                            <i class="icon-digg"></i>
                        </a>
                    </div>

                    <div class="clear"></div>

                    <div class="fancy-title title-border title-center topmargin-sm">
                        <h4>Popular Brands</h4>
                    </div>

                    <ul class="clients-grid grid-6 nobottommargin clearfix">
                        <li><a href="#"><img src="images/clients/logo/1.png" alt="Clients"></a></li>
                        <li><a href="#"><img src="images/clients/logo/2.png" alt="Clients"></a></li>
                        <li><a href="#"><img src="images/clients/logo/3.png" alt="Clients"></a></li>
                        <li><a href="#"><img src="images/clients/logo/4.png" alt="Clients"></a></li>
                        <li><a href="#"><img src="images/clients/logo/5.png" alt="Clients"></a></li>
                        <li><a href="#"><img src="images/clients/logo/6.png" alt="Clients"></a></li>
                        <li><a href="#"><img src="images/clients/logo/7.png" alt="Clients"></a></li>
                        <li><a href="#"><img src="images/clients/logo/8.png" alt="Clients"></a></li>
                        <li><a href="#"><img src="images/clients/logo/9.png" alt="Clients"></a></li>
                        <li><a href="#"><img src="images/clients/logo/10.png" alt="Clients"></a></li>
                        <li><a href="#"><img src="images/clients/logo/11.png" alt="Clients"></a></li>
                        <li><a href="#"><img src="images/clients/logo/12.png" alt="Clients"></a></li>
                        <li><a href="#"><img src="images/clients/logo/13.png" alt="Clients"></a></li>
                        <li><a href="#"><img src="images/clients/logo/14.png" alt="Clients"></a></li>
                        <li><a href="#"><img src="images/clients/logo/15.png" alt="Clients"></a></li>
                        <li><a href="#"><img src="images/clients/logo/16.png" alt="Clients"></a></li>
                        <li><a href="#"><img src="images/clients/logo/19.png" alt="Clients"></a></li>
                        <li><a href="#"><img src="images/clients/logo/18.png" alt="Clients"></a></li>
                    </ul>

                </div>


@include('frontend.shop.partials.layout.4colrow')

<div class="section notopborder nobottomborder nomargin nopadding nobg footer-stick">
    <div class="container clearfix">

        <div class="col_half nobottommargin topmargin">
            <img src="images/services/4.jpg" alt="Image" class="nobottommargin">
        </div>

        <div class="col_half subscribe-widget nobottommargin col_last">

            <div class="heading-block topmargin-lg">
                <h3><strong>GET 20% OFF*</strong></h3>
                <span>Our App scales beautifully to different Devices.</span>
            </div>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet cumque, perferendis accusamus porro illo exercitationem molestias.</p>

            <div class="widget-subscribe-form-result"></div>
            <form id="widget-subscribe-form3" action="include/subscribe.php" role="form" method="post" class="nobottommargin">
                <div class="input-group" style="max-width:400px;">
                    <span class="input-group-addon"><i class="icon-email2"></i></span>
                    <input type="email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
                    <span class="input-group-btn">
                        <button class="btn btn-danger" type="submit">Subscribe Now</button>
                    </span>
                </div>
            </form>

        </div>

    </div>
</div>












</div>
</div>
</div>



  <div class="container">
        <div class="row">
            <div class="col-md-12">
                @foreach ($products as $product)

                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail" >
                            <img src="{{$product->imageurl}}" class="img-responsive">
                            <div class="caption">
                                <div class="row">
                                    <div class="col-md-6 col-xs-6">
                                        <h3>{{$product->name}}</h3>
                                    </div>
                                    <div class="col-md-6 col-xs-6 price">
                                        <h3>
                                            <label>${{$product->price}}</label></h3>
                                    </div>
                                </div>
                                <p>{{$product->description}}</p>
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-3">
                                        <a href="/addProduct/{{$product->id}}" class="btn btn-success btn-product"><span class="fa fa-shopping-cart"></span> Buy</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>





{{-- @include('frontend.shop.partials.layout.full') --}}


@endsection

@section('footer_scripts')@endsection
@section('pp_footer_scripts')


@endsection