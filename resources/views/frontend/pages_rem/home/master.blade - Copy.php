<!DOCTYPE html>
<html dir="ltr" lang="en-US">

@include('frontend/pages/home/demo-head')

<body class="stretched">

    <!-- Document Wrapper ============================================= -->
    <div id="wrapper" class="clearfix">

@include('frontend/pages/home/demo-topbar')

@include('frontend/pages/home/demo-header')

{{-- @include('frontend/pages/home/slider') --}}


@yield('content')

        <!-- Footer ============================================= -->
@include('frontend/pages/home/demo-footer')

    </div><!-- #wrapper end -->

    <!-- Go To Top ============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>

    <!-- Footer Scripts ============================================= -->
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


{!! HTML::script('frontend/js/functions.js') !!}


</body>
</html>
