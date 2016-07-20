<header id="header" class="transparent-header semi-transparent dark full-header">
    <div id="header-wrap">
        <div class="container clearfix">
            <div id="primary-menu-trigger"> <i class="icon-reorder"></i>
            </div>
            <!-- Logo ============================================= -->
            <div id="logo">
                <a href="{!! url(getLang() . '/') !!}" class="standard-logo" data-dark-logo="{!! asset('/frontend/images/grace-logo-light.png') !!}">
                    <img src="{!! asset('/frontend/images/grace-logo-light.png') !!}" alt="Grace Logo"></a>
                <a href="{!! url(getLang() . '/') !!}" class="retina-logo" data-dark-logo="{!! asset('/frontend/images/grace-logo-light.png') !!}">
                    <img src="{!! asset('/frontend/images/grace-logo-light.png') !!}" alt="GraceLogo"></a>
            </div>
            <!-- #logo end -->
            <!-- Primary Navigation ============================================= -->
            <nav id="primary-menu">
         @include('frontend.layout.menu-cart')
                @include('frontend.layout.menu')

            </nav>

            <!-- #primary-menu end --> </div>
    </div>
</header>
<!-- #header end -->