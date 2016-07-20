@extends('frontend/layouts/master')

@section('htmlschema')
itemscope itemtype="http://schema.org/Article"
@endsection
@section('bodyschema')@endsection
@section('seo')
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author"content="The Grace Company"/>
@endsection
@section('styles')
<style> .landing-form-overlay{bottom:106px!important;}</style>
@endsection
@section('scripts') @endsection
@section('top-scripts') @endsection
@section('top')
    @include('frontend.layouts.partials.header.top-bar')
@endsection
@section('submenu')
<div id="page-menu">
    <div id="page-menu-wrap">
        <div class="container clearfix ">
            <nav class="one-page-menu">
                <ul>
                    <li class="current"><a href="{!! url('/') !!}/">The Grace Company</a></li>
                    <li style="color:black;"><a href="{!! url('/') !!}/#">Community</a></li>
                    <li style="color:black;"><a href="{!! url('/') !!}/#">News</a></li>
                    <li><a href="{!! url('/') !!}/faq">FAQ's</a></li>
                    <li style="color:black;"><a href="{!! url('/') !!}/#">Tutorials</a></li>
                    <li style="color:black;"><a href="{!! url('/') !!}/#">Support</a></li>
                    <li><a class="button button-rounded button-border" href="{!! url('/') !!}/shop">Shop Now</a></li>
                </ul>
            </nav>
            <div id="page-submenu-trigger"><i class="icon-reorder"></i></div>
        </div>
    </div>
</div>
@endsection
@section('slider')
<section id="slider" style="background: url('{!! url('frontend/images/landing/landing2.jpg') !!}') center; overflow: visible;" data-height-lg="800" data-height-md="600" data-height-sm="600" data-height-xs="600" data-height-xxs="600">
    <div class="container clearfix">
        <form action="#" method="post" role="form" class="landing-wide-form landing-form-overlay dark nobottommargin clearfix">
            <div class="heading-block notopmargin nobottomborder">
                <h2>Signup for FREE</h2>
                <span>Get 30 Days Unlimited Access</span>
            </div>
            <div class="line" style="margin: 20px 0 30px;"></div>
            <div class="col_full">
                <input type="text" class="form-control input-lg not-dark" value="" placeholder="Your Name*">
            </div>
            <div class="col_full">
                <input type="email" class="form-control input-lg not-dark" value="" placeholder="Your Email*">
            </div>
            <div class="col_full">
                <input type="password" class="form-control input-lg not-dark" value="" placeholder="Choose Password*">
            </div>
            <div class="col_full">
                <input type="password" class="form-control input-lg not-dark" value="" placeholder="Confirm Password*">
            </div>
            <div class="col_full nobottommargin">
                <button class="btn btn-lg btn-danger btn-block nomargin" value="submit" type="submit" style="">START FREE TRIAL</button>
            </div>
        </form>
    </div>
</section>
@endsection
@section('intro') @endsection
@section('pagetitle')  @endsection
@section('content')
<!-- Content ============================================= -->
<section id="content" style="overflow:hidden;">
    <div class="content-wrap">
        <div class="promo promo-dark promo-full landing-promo header-stick">
            <div class="container clearfix">
                <h3>Beautiful Quilt designs are waiting for you inside <i class="icon-circle-arrow-right" style="position:relative;top:2px;"></i></h3>
                <span>You'll love our beautiful &amp; interactive Automated Quilter that makes your quilt process easier &amp; fun.</span>
            </div>
        </div>
        <div id="section-features" class="heading-block title-center page-section">
        </div>
        <div class="container clearfix">
            <div class="col_one_third nobottommargin">
                <div class="feature-box media-box">
                    <div class="fbox-media">
                        <img src="{!! url('frontend/images/services/1.jpg') !!}" alt="Why choose Us?">
                    </div>
                    <div class="fbox-desc">
                        <h3>Why choose Us.<span class="subtitle">Because we are Reliable.</span></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi rem, facilis nobis voluptatum est voluptatem accusamus molestiae eaque perspiciatis mollitia.</p>
                    </div>
                </div>
            </div>
            <div class="col_one_third nobottommargin">
                <div class="feature-box media-box">
                    <div class="fbox-media">
                        <img src="{!! url('frontend/images/services/2.jpg') !!}" alt="Why choose Us?">
                    </div>
                    <div class="fbox-desc">
                        <h3>Our Mission.<span class="subtitle">To Redefine your Brand.</span></h3>
                        <p>Quos, non, esse eligendi ab accusantium voluptatem. Maxime eligendi beatae, atque tempora ullam. Vitae delectus quia, consequuntur rerum molestias quo.</p>
                    </div>
                </div>
            </div>
            <div class="col_one_third nobottommargin col_last">
                <div class="feature-box media-box">
                    <div class="fbox-media">
                        <img src="{!! url('frontend/images/services/3.jpg') !!}" alt="Why choose Us?">
                    </div>
                    <div class="fbox-desc">
                        <h3>What we Do.<span class="subtitle">Make our Customers Happy.</span></h3>
                        <p>Porro repellat vero sapiente amet vitae quibusdam necessitatibus consectetur, labore totam. Accusamus perspiciatis asperiores labore esse ab accusantium ea modi ut.</p>
                    </div>
                </div>
            </div>
        </div>
        <a class="button button-full center tright topmargin footer-stick">
            <div class="container clearfix">
                Need help with your Account? <strong>Start here</strong> <i class="icon-caret-right" style="top:4px;"></i>
            </div>
        </a>
        <br style="clear:both" />
        <div class="content-wrap">
            <div class="container clearfix">
                <div id="shop" class="product-3 clearfix">
                    <div class="product clearfix">
                        <div class="product-image">
                            <a href="#"><img src="{!! url('frontend/images/hqf/ez3.jpg') !!}" alt="Checked Short Dress"></a>
                            <a href="#"><img src="{!! url('frontend/images/hqf/ez3-1.jpg') !!}" alt="Checked Short Dress"></a>
                            <div class="sale-flash">10% Off*</div>
                            <div class="product-overlay">
                                <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                <a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                            </div>
                        </div>
                        <div class="product-desc center">
                            <div class="product-title"><h3><a href="#">EZ3 Adjustable Hand Quilting Frames</a></h3></div>
                            <div class="product-price"><del>$425.95</del> <ins>$399.95</ins></div>
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
                            <a href="#"><img src="{!! url('frontend/images/hqf/z44.jpg') !!}" alt="Slim Fit Chinos"></a>
                            <a href="#"><img src="{!! url('frontend/images/hqf/z44-1.jpg') !!}" alt="Slim Fit Chinos"></a>
                            <div class="product-overlay">
                                <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                <a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                            </div>
                        </div>
                        <div class="product-desc center">
                            <div class="product-title"><h3><a href="#">The Z44 Quilting Frame</a></h3></div>
                            <div class="product-price">$699.95</div>
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
                                        <div class="slide"><a href="#"><img src="{!! url('frontend/images/grace/hoop2.jpg') !!}" alt="Dark Brown Boots"></a></div>
                                        <div class="slide"><a href="#"><img src="{!! url('frontend/images/grace/hoop2-person.jpg') !!}" alt="Dark Brown Boots"></a></div>
                                        <div class="slide"><a href="#"><img src="{!! url('frontend/images/grace/hoop2-w.jpg') !!}" alt="Dark Brown Boots"></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-overlay">
                                <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                <a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                            </div>
                        </div>
                        <div class="product-desc center">
                            <div class="product-title"><h3><a href="#">The Grace Hoop2</a></h3></div>
                            <div class="product-price">$299.95</div>
                            <div class="product-rating">
                                <i class="icon-star3"></i>
                                <i class="icon-star3"></i>
                                <i class="icon-star3"></i>
                                <i class="icon-star-empty"></i>
                                <i class="icon-star-empty"></i>
                            </div>
                        </div>
                    </div>

                </div><!-- #shop end -->
            </div>
        </div>
    </div>
</section>
@section('footer') @endsection
@section('footerscripts')
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
@endsection
