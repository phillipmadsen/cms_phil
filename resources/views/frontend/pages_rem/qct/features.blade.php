@extends('frontend/layout/layout')

@section('htmlschema')
itemscope itemtype="http://schema.org/Article"
@endsection

@section('seo')
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author"content="The Grace Company"/>
@endsection

@section('title')
Quilter&#39;s Creative Touch Features| The Grace Company
@endsection

@section('header_styles')
    <!--page level css starts-->
    <!--end of page level css-->
@endsection

@section('seo')@endsection
@section('jsonschema')@endsection
@section('schematag')@endsection
@section('scripts')@endsection
@section('bodyschema')@endsection

@section('submenu')
@include('frontend.layout.partials.menu.submenu-items', ['items'=> $menu_qct->roots()])
@endsection

@section('slider')@endsection
@section('intro')@endsection
@section('pagetitle')@endsection

@section('content')



  <!--intro
  ======================-->
                <div class="container clearfix">

                        <section id="topofpage">

                            <div class="heading-block topmargin">
                                <h1 class="center">Advanced Quilter&#39;s Creative Touch Features</h1>
                            </div>

                            <div class="row clearfix center bottommargin">
                                <div class="col-xs-4 col-sm-3">
                                    <a href="#library" data-scrollto="#library"><img src="{!! asset('/frontend/images/product-overviews/qct/features/ico-library.png') !!}" /><br />Extensive Pattern Library</a>
                                </div>

                                <div class="col-xs-4 col-sm-3">
                                    <a href="#place" data-scrollto="#place"><img src="{!! asset('/frontend/images/product-overviews/qct/features/ico-place.png') !!}" /><br />Precise Placements</a>
                                </div>

                                <div class="col-xs-4 col-sm-3">
                                    <a href="#panto" data-scrollto="#panto"><img src="{!! asset('/frontend/images/product-overviews/qct/features/ico-pantostacker.png') !!}" /><br />Easy Pantograph Rows</a>
                                </div>

                                <div class="col-xs-4 col-sm-3">
                                    <a href="#patterncad" data-scrollto="#patterncad"><img src="{!! asset('/frontend/images/product-overviews/qct/features/ico-patterncad.png') !!}" /><br />Pattern Design</a>
                                </div>

                                <div class="col-xs-4 col-sm-3">
                                    <a href="#quiltcad" data-scrollto="#quiltcad"><img src="{!! asset('/frontend/images/product-overviews/qct/features/ico-quiltcad.png') !!}" /><br />Quilt Layout</a>
                                </div>

                                <div class="col-xs-4 col-sm-3">
                                    <a href="#trace" data-scrollto="#trace"><img src="{!! asset('/frontend/images/product-overviews/qct/features/ico-trace.png') !!}" /><br />Trace Photographs</a>
                                </div>

                                <div class="col-xs-4 col-sm-3">
                                    <a href="#optimize" data-scrollto="#optimize"><img src="{!! asset('/frontend/images/product-overviews/qct/features/ico-optimize.png') !!}" /><br />Pattern Optimizer</a>
                                </div>

                                <div class="col-xs-4 col-sm-3">
                                    <a href="#print" data-scrollto="#print"><img src="{!! asset('/frontend/images/product-overviews/qct/features/ico-print.png') !!}" /><br />Print Patterns</a>
                                </div>

                                <div class="col-xs-4 col-sm-3">
                                    <a href="#record" data-scrollto="#record"><img src="{!! asset('/frontend/images/product-overviews/qct/features/ico-record.png') !!}" /><br />Record Free-motion</a>
                                </div>

                                <div class="col-xs-4 col-sm-3">
                                    <a href="#borders" data-scrollto="#borders"><img src="{!! asset('/frontend/images/product-overviews/qct/features/ico-borders.png') !!}" /><br />Easy Border Design</a>
                                </div>

                                <div class="col-xs-4 col-sm-3">
                                    <a href="#vl" data-scrollto="#vl"><img src="{!! asset('/frontend/images/product-overviews/qct/features/ico-vl.png') !!}" /><br />Extend Your Reach</a>
                                </div>

                                <div class="col-xs-4 col-sm-3">
                                    <a href="#fonts" data-scrollto="#fonts"><img src="{!! asset('/frontend/images/product-overviews/qct/features/ico-fonts.png') !!}" /><br />Design With Fonts</a>
                                </div>
                            </div>

                </div>

                    </section>


                    <!--features
                                       =============================-->
                                    <section class="clearfix"  style="background-image:URL({!! asset('/frontend/images/backgrounds/square_bg.png') !!}); background-repeat:repeat;">
                                        <div class="container topmargin" id="library" >


                                               <div class="heading-block center nomargin">
                                                   <img class="center qct-main-image1" src="{!! asset('/frontend/images/product-overviews/qct/features/library.png') !!}">
                                                   <h3>Extensive Pattern Library</h3>
                                                   <span class="before-heading">Creative power right at your fingertips</span>
                                               </div>
                                                <p class="lead">
                                                    The included pattern library contains over 200 patterns from which to choose. You can use these pre-defined patterns, or more advanced users can create their own or import patterns downloaded from other sources. Now you CAN replicate that dream pattern.
                                               </p>
                                            <div class="center bottommargin-sm"><a href="#topofpage" data-scrollto="#topofpage">Back to top</a></div>
                                       </div>
                                   </section>

                                       <section id="place" class="container clearfix topmargin">

                                               <div class="heading-block center nomargin">
                                                   <img class="qct-main-image2" src="{!! asset('/frontend/images/product-overviews/qct/features/place.jpg') !!}">
                                                   <h3>Precise Placement Methods</h3>
                                                   <span class="before-heading">Different placement methods for different pattern shapes</span>
                                               </div>
                                                <p class="lead">
                                                    The user-friendly screen allows you to precisely align your pattern in relation to your quilt directly on-screen using 7 different methods. You physically set the pattern with your machine and can preview the output based on your method. No square ruler or comlex math required.
                                               </p>
                                            <div class="center bottommargin-sm"><a href="#topofpage" data-scrollto="#topofpage">Back to top</a></div>
                                       </section>
<!-- Brien new stuff
================================-->
                                                    <section class="clearfix"  style="background-image:URL({!! asset('/frontend/images/backgrounds/square_bg.png') !!}); background-repeat:repeat;">
                                        <div class="container topmargin" id="panto">


                                               <div class="heading-block center nomargin">
                                                   <img class="center qct-main-image1" src="{!! asset('/frontend/images/product-overviews/qct/features/pantostacker.png') !!}">
                                                   <h3>Easy Pantograph Rows</h3>
                                                   <span class="before-heading">Simplified pattern alignment</span>
                                               </div>
                                                <p class="lead">
                                                    PantoStacker creates single rows or alternating, staggered double rows that can then be used to sew an entire quilt. Pick a mode, and, depending on your subscription level, you are given different levels of adjustment of the pantograph size, as well as the patterns inside the pantograph. Easily get perfect alignment without ever touching a yardstick!
                                               </p>
                                            <div class="center bottommargin-sm"><a href="#topofpage" data-scrollto="#topofpage">Back to top</a></div>
                                       </div>
                                   </section>

                                       <section id="patterncad" class="container clearfix topmargin">

                                               <div class="heading-block center nomargin">
                                                   <img class="qct-main-image1" src="{!! asset('/frontend/images/product-overviews/qct/features/patterncad.png') !!}">
                                                   <h3>Pattern Design</h3>
                                                   <span class="before-heading">Advanced pattern creation tools</span>
                                               </div>
                                                <p class="lead">
                                                    Need more flexibility than the pre-built designs? From simple lines to complex designs, there are numerous options to achieve the optimum results. You can modify pre-defined patterns or start completely from scratch. With PatternCAD, the only limit is your imagination.
                                               </p>
                                           <div class="center bottommargin-sm"><a href="#topofpage" data-scrollto="#topofpage">Back to top</a></div>
                                       </section>
                                                    <section class="clearfix"  style="background-image:URL({!! asset('/frontend/images/backgrounds/square_bg.png') !!}); background-repeat:repeat;">
                                        <div class="container topmargin" id="quiltcad">


                                               <div class="heading-block center nomargin">
                                                   <img class="center qct-main-image1" src="{!! asset('/frontend/images/product-overviews/qct/features/quiltcad.png') !!}">
                                                   <h3>Quilt Layout</h3>
                                                   <span class="before-heading">Quilt Block Layout</span>
                                               </div>
                                                <p class="lead">
                                                    If you want to design an entire quilt layout, there are some options that can only be covered in this section. If you want intricate layouts with different blocks throughout your quilt, look no further. Create beautiful masterpieces with QuiltCAD.
                                               </p>
                                            <div class="center bottommargin-sm"><a href="#topofpage" data-scrollto="#topofpage">Back to top</a></div>
                                       </div>
                                   </section>

                                       <section id="trace" class="container clearfix topmargin">

                                               <div class="heading-block center nomargin">
                                                   <img class="qct-main-image1" src="{!! asset('/frontend/images/product-overviews/qct/features/trace.png') !!}">
                                                   <h3>Trace Photographs</h3>
                                                   <span class="before-heading">Recreate your original photos or art</span>
                                               </div>
                                                <p class="lead">
                                                    Import any photo on your system into PatternCAD and you can trace it to reproduce on your quilt. Simply click as many points as you wish to outline your image and use the design just as any other pattern. Beautiful portraits and stunning images are as easy as point, click, sew.
                                               </p>
                                           <div class="center bottommargin-sm"><a href="#topofpage" data-scrollto="#topofpage">Back to top</a></div>
                                       </section>
                                                    <section class="clearfix"  style="background-image:URL({!! asset('/frontend/images/backgrounds/square_bg.png') !!}); background-repeat:repeat;">
                                        <div class="container topmargin" id="optimize">


                                               <div class="heading-block center nomargin">
                                                   <img class="center qct-main-image1" src="{!! asset('/frontend/images/product-overviews/qct/features/optimize.png') !!}">
                                                   <h3>Pattern Optimizer</h3>
                                                   <span class="before-heading">Easily fix and clean-up your work</span>
                                               </div>
                                                <p class="lead">
                                                    Fix breaks in your pattern, adjust start/stop points, optimize all aspects of your design. Even see how it will stitch beforehand with our animate feature. Know it&#39;s exactly right before you sew even a single thread.
                                               </p>
                                            <div class="center bottommargin-sm"><a href="#topofpage" data-scrollto="#topofpage">Back to top</a></div>
                                       </div>
                                   </section>

                                       <section id="print" class="container clearfix topmargin">

                                               <div class="heading-block center nomargin">
                                                   <img class="qct-main-image1" src="{!! asset('/frontend/images/product-overviews/qct/features/print.png') !!}">
                                                   <h3>Print Patterns</h3>
                                                   <span class="before-heading">See it on paper before you stitch</span>
                                               </div>
                                                <p class="lead">
                                                   You can choose to print a single pattern, the whole row, or the entire quilt from here. See how your quilt will look or even use it to trace directly onto your quilt for free-motion sewing. It&#39;s as simple as setting your pantograph to print across multiple pages.
                                               </p>
                                           <div class="center bottommargin-sm"><a href="#topofpage" data-scrollto="#topofpage">Back to top</a></div>
                                       </section>
                                                    <section class="clearfix"  style="background-image:URL({!! asset('/frontend/images/backgrounds/square_bg.png') !!}); background-repeat:repeat;">
                                        <div class="container topmargin" id="record">


                                               <div class="heading-block center nomargin">
                                                   <img class="center qct-main-image2" src="{!! asset('/frontend/images/product-overviews/qct/features/record.jpg') !!}">
                                                   <h3>Record Free-motion</h3>
                                                   <span class="before-heading">Complete control</span>
                                               </div>
                                                <p class="lead">
                                                   Trace a pattern or have the software record your motion to sew or save for a later time. Start, edit, stop, re-record. This is the ultimate in designing your original work.
                                               </p>
                                            <div class="center bottommargin-sm"><a href="#topofpage" data-scrollto="#topofpage">Back to top</a></div>
                                       </div>
                                   </section>

                                       <section id="borders" class="container clearfix topmargin">

                                               <div class="heading-block center nomargin">
                                                   <img class="qct-main-image1" src="{!! asset('/frontend/images/product-overviews/qct/features/borders.png') !!}">
                                                   <h3>Easy Border Design</h3>
                                                   <span class="before-heading">Simple layout of borders</span>
                                               </div>
                                                <p class="lead">
                                                   Use any pattern you have created to design a border for your quilt. As with other sections, there are different levels from simple border creation to advanced creation of sections and custom layout fitting. Complete your quilt by framing it like the work of art it is.
                                               </p>
                                           <div class="center bottommargin-sm"><a href="#topofpage" data-scrollto="#topofpage">Back to top</a></div>
                                       </section>
                                                    <section class="clearfix"  style="background-image:URL("{!! asset('/frontend/images/backgrounds/square_bg.png') !!}"); background-repeat:repeat;">
                                        <div class="container topmargin" id="vl">


                                               <div class="heading-block center nomargin">
                                                   <img class="center qct-main-image2" src="{!! asset('/frontend/images/product-overviews/qct/features/vl.jpg') !!}">
                                                   <h3>Extend your reach</h3>
                                                   <span class="before-heading">You don&#39;t need a bigger machine</span>
                                               </div>
                                                <p class="lead">
                                                    If you have a pattern that is bigger than your machine&#39;s throat, this is the section for you. Virtual Longarm will take your oversized pattern and break it up based on your individual throat size. You can create those large designs without having to calculate a grid. We do the hard work so you don't have to.
                                               </p>
                                            <div class="center bottommargin-sm"><a href="#topofpage" data-scrollto="#topofpage">Back to top</a></div>
                                       </div>
                                   </section>

                                       <section id="fonts" class="container clearfix topmargin">

                                               <div class="heading-block center nomargin">
                                                   <img class="qct-main-image1" src="{!! asset('/frontend/images/product-overviews/qct/features/fonts.png') !!}">
                                                   <h3>Design With Fonts</h3>
                                                   <span class="before-heading">Different placement methods for different pattern shapes</span>
                                               </div>
                                                <p class="lead">
                                                    You can also create pantographs in the format of any font installed on your system. Simply pick a font, type what you wish to say, and save the pattern for insertion in any placement method you desire. Beautiful type layouts are sew easy!
                                               </p>
                                           <div class="center bottommargin-sm"><a href="#topofpage" data-scrollto="#topofpage">Back to top</a></div>
                                       </section>

<!--get QCT Now!
===================================-->
<div class="section parallax nomargin" style="background-image:url('{!! asset('/frontend/images/backgrounds/light_wool.png') !!}'); background-repeat:repeat; border-top:8px solid #B14949; border-bottom:8px solid #B14949;"  data-stellar-background-ratio="0.1">
        <div class="container clearfix topmargin-lg bottommargin-lg">

                <div class="heading-block center nomargin nobottomborder">
                    <h2 style="color:#B14949;">Get Quilter&#39;s Creative Touch Now</h2>
                    <span class="before-heading" style="color:#48A0C4">Learn how you can get the ultimate quilting experience in your home!</span>
                    <a href="#" class="button button-rounded button-large button-secondary">See Purchase Options</a> or <a href="http://www.graceframe.com/site/automated-quilting/" class="button button-rounded button-large">Download Free Demo</a>
                </div>
        </div>

    </div>

@endsection

@section('footer_scripts')@endsection

@section('pp_footer_scripts')
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

@section('inlinejs')@endsection
