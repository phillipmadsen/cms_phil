@extends('live.layouts/live')
@section('htmlschema')@endsection
@section('bodyschema')@endsection
@section('seo')@endsection
@section('jsonschema')@endsection
@section('schematag')@endsection
{{-- Page title --}}
@section('title')
Home | The Grace Company
@parent
@endsection
{{-- page level styles --}}
@section('header_styles')
    <!--page level css starts-->

    <!--end of page level css-->
@endsection

@section('bodytag')@endsection
@section('scripts')@endsection
@yield('pp_footer_scripts')@endsection
@section('submenu')@endsection
@section('slider')@endsection
@section('intro')@endsection
@section('page-title')@endsection
@section('sidebar')@endsection
@section('content')

<h1>This is our new homepage </h1>

@endsection
{{-- footer scripts --}}
@section('footer_scripts')
    <!-- page level js starts-->

    <!--page level js ends-->
@endsection
@yield('pp_footer_scripts')@endsection