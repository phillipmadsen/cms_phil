  <!-- Header
        ============================================= -->
        <header id="header" class="sticky-style-2">

            <div class="container clearfix">

                <!-- Logo
                ============================================= -->
                <div id="logo">
                    <a href="/" class="standard-logo"><img src="{!! asset('frontend/images/logo.png') !!}" alt="Canvas Logo"></a>
                    <a href="/" class="retina-logo"><img src="{!! asset('frontend/images/logo@2x.png') !!}" alt="Canvas Logo"></a>
                </div><!-- #logo end -->

                <ul class="header-extras">
                    <li>
                        <i class="i-plain icon-call nomargin"></i>
                        <div class="he-text">
                            Call Us
                            <span>+1(800) 264 0644</span>
                        </div>
                    </li>
                    <li>
                        <i class="i-plain icon-line2-envelope nomargin"></i>
                        <div class="he-text">
                            Email Us
                            <span>info@grace.com</span>
                        </div>
                    </li>
                    <li>
                        <i class="i-plain icon-line-clock nomargin"></i>
                        <div class="he-text">
                            We'are Open
                            <span>Mon - Sat, 8AM to 5PM</span>
                        </div>
                    </li>
                </ul>

            </div>

            <div id="header-wrap">

                <!-- Primary Navigation
                ============================================= -->
                <nav id="primary-menu" class="style-2 center">

                    <div class="container clearfix">

                        <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>


                        @include('frontend/layout/menu')



                        <script>
                            jQuery(document).ready(function($){
                                $( '#primary-menu ul li:has(ul) > a > div' ).append( ' <i class="icon-angle-down norightmargin"></i>' );
                            });
                        </script>

                        <!-- Top Search ============================================= -->
                        <div id="top-search">
                            <a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
                            <form action="search.html" method="get">
                                <input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
                            </form>
                        </div><!-- #top-search end -->

                    </div>

                </nav><!-- #primary-menu end -->

            </div>

        </header><!-- #header end -->
