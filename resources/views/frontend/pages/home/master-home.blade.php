<!DOCTYPE html>
<html lang="en" @yield('schematag')>
<head>
    <meta charset="utf-8">
    <title>The Grace Company</title>
    @yield('seo')
    <meta name="description" content=" ">
    <meta name="keywords" content=" ">
    <meta name="author"content="The Grace Company"/>
        <script>document.createElement("article");</script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
@include('frontend/layout/head')



@yield('styles')
@yield('scripts')
</head><!--/head-->

<body class="stretched">
<!-- Document Wrapper ============================================= -->
    <div id="wrapper" class="clearfix">
    @yield('top')

       <!-- Header ============================================= -->
        <header id="header" class="transparent-header semi-transparent dark full-header">
            <div id="header-wrap">
                <div class="container clearfix">
                    <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>
                    <!-- Logo ============================================= -->
                    <div id="logo">
                        <a href="{!! url('/') !!}" class="standard-logo" data-dark-logo="{!! url('frontend/images/grace-logo-light.png') !!}"><img src="{!! url('frontend/images/grace-logo-light.png') !!}" alt="Grace Logo"></a>
                        <a href="{!! url('/') !!}" class="retina-logo" data-dark-logo="{!! url('frontend/images/grace-logo-light.png') !!}"><img src="{!! url('frontend/images/grace-logo-light.png') !!}" alt="Grace Logo"></a>
                    </div><!-- #logo end -->
                    <!-- Primary Navigation ============================================= -->
                    <nav id="primary-menu" role="navigation">
                                    @include('frontend/layout/menu')
                        <!-- Top Cart ============================================= -->
                        <div id="top-cart">
                            <a href="#" id="top-cart-trigger"><i class="icon-shopping-cart"></i><span>5</span></a>
                            <div class="top-cart-content">
                                <div class="top-cart-title">
                                    <h4>Shopping Cart</h4>
                                </div>
                                <div class="top-cart-items">
                                    <div class="top-cart-item clearfix">
                                        <div class="top-cart-item-image">
                                            <a href="#">
                                            {!! HTML::image('frontend/images/shop/small/1.jpg', 'ALT TEXT') !!}
                                            </a>
                                        </div>
                                        <div class="top-cart-item-desc">
                                            <a href="#">Blue Round-Neck Tshirt</a>
                                            <span class="top-cart-item-price">$19.99</span>
                                            <span class="top-cart-item-quantity">x 2</span>
                                        </div>
                                    </div>
                                    <div class="top-cart-item clearfix">
                                        <div class="top-cart-item-image">
                                            <a href="#">
                                           {!! HTML::image('frontend/images//shop/small/6.jpg', 'ALT TEXT') !!}
                                           </a>
                                        </div>
                                        <div class="top-cart-item-desc">
                                            <a href="#">Light Blue Denim Dress</a>
                                            <span class="top-cart-item-price">$24.99</span>
                                            <span class="top-cart-item-quantity">x 3</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="top-cart-action clearfix">
                                    <span class="fleft top-checkout-price">$114.95</span>
                                    <button class="button button-3d button-small nomargin fright">View Cart</button>
                                </div>
                                </div>
                        </div><!-- #top-cart end -->
                        <!-- Top Search ============================================= -->
                        <div id="top-search">
                            <a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
                            <form action="{!! url('tr/search') !!}" method="get" role="search">>
                                <input type="text" name="q" class="form-control" value="{!! $q or null !!}" placeholder="Type &amp; Hit Enter..">
                            </form>
                        </div><!-- #top-search end -->
                    </nav><!-- #primary-menu end -->
                </div>
            </div>
        </header><!-- #header end -->

@yield('submenu')
@yield('slider')
@yield('pagetitle')
@yield('content')
@include('frontend/layout/footer')
@yield('footer')

    </div><!-- #wrapper end -->

    <!-- Go To Top ============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>
@yield('footerscripts')
    <!-- Footer Scripts ============================================= -->
    {!! HTML::script('/frontend/js/functions.js') !!}
    {!! HTML::script('/backend/plugins/select2/select2.full.min.js') !!}
    {!! HTML::script("//cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js") !!}
{!! HTML::script('/backend/js/liveicons/minified/raphael-min.js') !!}
{!! HTML::script('/backend/js/liveicons/minified/livicons-1.4.min.js') !!}
</body>
</html>
