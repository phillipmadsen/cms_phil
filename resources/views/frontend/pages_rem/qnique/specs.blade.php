@extends('frontend/layout/layout')

@section('htmlschema')

@endsection


@section('title')
Qnique Specifications | The Grace Company
@endsection

@section('header_styles')
    <!--page level css starts-->
    <!--end of page level css-->
@endsection

@section('seo')@endsection
@section('jsonschema')@endsection
@section('schematag')@endsection
@section('scripts')@endsection
@section('ppscripts')@endsection
@section('bodyschema')@endsection

@section('submenu')
@include('frontend.layout.partials.menu.submenu-items', ['items'=> $menu_qnique->roots()])
@endsection

@section('slider')@endsection
@section('intro')@endsection

@section('page-title')
<section id="page-title">
    <div class="container clearfix">
        <h1>Temp Title</h1>
        <span>The Native title;  </span>
         <ol class="breadcrumb" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
        <li class="breadcrumb-lead"><a title="Go Home." href="{!! url('/') !!}/" itemprop="url"><span itemprop="title">Home</span></a></li>
        	<li itemprop="child" itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a title="Go to QuiltMotion." href="{!! url('/') !!}/automation/qct/" itemprop="url">
        	<span itemprop="title">QuiltMotion</span></a></li>
        	<li class="active" itemprop="child" itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><span itemprop="title">QuiltMotion Support</span></li>
        </ol>
    </div>
</section>
@endsection

@section('sidebar')@endsection

@section('content')

<h1>This is our new homepage </h1>

@endsection

@section('footer_scripts')
    <!-- page level js starts-->
    <!--page level js ends-->
@endsection

@section('inlinejs')@endsection
@section('pp_footer_scripts')@endsection
