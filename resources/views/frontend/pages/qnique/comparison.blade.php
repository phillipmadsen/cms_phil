@extends('frontend/layout/layout')

@section('htmlschema')
itemscope itemtype="http://schema.org/Article"
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
Qnique Comparison | Qnique Section | The Grace Company

@endsection



@section('header_styles')
@endsection



@section('jsonschema')@endsection


@section('schematag')@endsection
@section('scripts')@endsection
@section('ppscripts')@endsection
@section('bodyschema')@endsection
@section('bodytag')stretched rows @endsection

@section('submenu')
@include('frontend.layouts.partials.menu.submenu-items', ['items'=> $menu_qnique->roots()])
@endsection

@section('slider')@endsection
@section('page-title')@endsection


@section('content')

@endsection

@section('footer_scripts')
@endsection

@section('inlinejs')@endsection


@section('pp_footer_scripts')
@endsection