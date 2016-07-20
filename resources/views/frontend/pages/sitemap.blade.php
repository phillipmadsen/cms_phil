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

@section('title')
SiteMap | The Grace Company
@endsection

@section('header_styles')@endsection
@section('scripts')@endsection
@section('ppscripts')@endsection

@section('jsonschema')
  {{-- @include('frontend/pages/qct/partials/microjson') --}}
@endsection

@section('bodytag')
rows 
@endsection

 
@section('submenu')
 
@endsection

@section('slider') @endsection
@section('intro')@endsection

@section('page-title')
	<!-- Page Title
        ============================================= -->
        <section id="page-title" class="page-title-dark">

            <div class="container clearfix">
                <h1>SITEMAP</h1>
                <span>List of Our Site Pages</span>
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                 {{--    <li><a href="#">Shortcodes</a></li> --}}
                    <li class="active">Sitemap</li>
                </ol>
            </div>

        </section><!-- #page-title end -->
@endsection

@section('sidebar')@endsection

@section('content')
 
 



<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
        xmlns:image="http://www.google.com/schemas/sitemap-image/1.1"
        xmlns:video="http://www.google.com/schemas/sitemap-video/1.1">
    @foreach( Cache::get('sitemap') as $url => $params )
    <url>
        <loc>{{$url}}</loc>
        <lastmod>{{$params['lastmod']}}</lastmod>
        <changefreq>{{$params['changefreq']}}</changefreq>
        <priority>{{$params['priority']}}</priority>
    </url>
    @endforeach
</urlset>

 


 
@endsection


@section('footer_scripts')@endsection
@section('pp_footer_scripts')@endsection
@section('inlinejs')@endsection 