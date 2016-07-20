<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="The Grace Company" />

    <!-- Stylesheets
    ============================================= -->

{!! HTML::style('http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800') !!}
{!! HTML::style('http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic') !!}
{!! HTML::style('http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic') !!}
{!! HTML::style('frontend/css/bootstrap.css') !!}
{!! HTML::style('frontend/style.css') !!}

   <!-- phillips Demo Specific Stylesheet -->
   {!! HTML::style('frontend/demos/construction/construction.css') !!}
    <!-- / -->

{!! HTML::style('frontend/css/dark.css') !!}
{!! HTML::style('frontend/css/font-icons.css') !!}
{!! HTML::style('frontend/css/animate.css') !!}
{!! HTML::style('frontend/css/magnific-popup.css') !!}

{!! HTML::style('frontend/custom-css/block.css') !!}
{!! HTML::style('frontend/custom-css/custom.css') !!}
{!! HTML::style('frontend/custom-css/header.css') !!}
 

{!! HTML::style('frontend/demos/construction/css/fonts.css') !!}

{!! HTML::style('frontend/css/responsive.css') !!}


    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!--[if lt IE 9]>

{!! HTML::script('http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js') !!}
    <![endif]-->


{!! HTML::style('frontend/demos/construction/css/colors.css') !!}

    <!-- External JavaScripts
    ============================================= -->
{!! HTML::script('frontend/js/jquery.js') !!}
{!! HTML::script('frontend/js/plugins.js') !!}

    <!-- Document Title
    ============================================= -->
     

    <link rel="shortcut icon" href="{!! url('favicon.ico') !!}">
     <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', '{!! $settings['ga_code']  or 'UA-64291412-1' !!}', 'auto');
      ga('send', 'pageview');

    </script>
<style>
#primary-menu ul li a {
  line-height: normal;
  padding-top: 0px!important;
  text-align: center;
}
li.menu-item a {
    text-decoration: none!important;
}


</style>
</head>