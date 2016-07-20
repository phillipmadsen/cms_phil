@extends('frontend/layout/layout')

@section('htmlschema')
itemscope itemtype="http://schema.org/Article"
@endsection

@section('seo')
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author"content="The Grace Company"/>
@endsection

@section('jsonschema')@endsection

@section('title')

@endsection

@section('bodyschema')@endsection

@section('bodytag')
rows
@endsection

@section('header_styles')@endsection
@section('scripts')@endsection
@section('ppscripts')@endsection

@section('submenu')
@include('frontend.layout.partials.menu.submenu-items', ['items'=> $menu_hand->roots()])
@endsection

@section('slider')@endsection
@section('intro')@endsection
@section('page-title')@endsection

@section('sidebar')
    @parent

{{--  This is appended to the parent dsidebar.  --}}
@endsection

@section('content')


<!-- Content
   ============================================= -->
<section id="content">
   <div class="content-wrap" style="padding:0px;">
      <!-- intro
         =================================================== -->
      <div class="container nobottommargin">
         <div class="heading-block topmargin nobottommargin center">
            <h1>Gracie Bee</h1>
            <p class="before-heading">Traditional-style Quilting Frame</p>
         </div>
         <img data-animate="fadeInRight" src="{!! asset('/frontend/images/product-overviews/graciebee/graciebee.png') !!}" / alt="Gracie Bee">
         <p lass="lead">The GracieBee traditional-style quilting frame has many non-traditional innovations. Leg joints easily slide together for a snug, sturdy, and balanced fit. Each leg rests on two separate feet, eliminating wobble. All parts fit together without the need for any extra tools to create a uniquely functional group quilting frame. When not in use, all of the pieces come together compactly for convenient storage or travel.</p>
      </div>
      <!--Other Features
         ================================-->
      <div class="row bottommargin-sm" style="border-top:2px solid #b14949;">
         <div class="heading-block center topmargin nobottomborder">
            <h2>Features</h2>
         </div>
      </div>
      <div class="container clearfix topmargin bottommargin">
         <div class="row clearfix">
            <div class="col_half  nobottommargin">
               <div class="feature-box center media-box fbox-bg">
                  <div class="fbox-media">
                     <img src="{!! asset('/frontend/images/product-overviews/graciebee/carry.png') !!}" alt="Easily Transported">
                  </div>
                  <div class="fbox-desc">
                     <div class="heading-block nobottomborder nobottommargin">
                        <h4>Portable</h4>
                     </div>
                     <p>All parts store together compactly for easy portability</p>
                  </div>
               </div>
            </div>
            <div class="col_half col_last nobottommargin">
               <div class="feature-box center media-box fbox-bg">
                  <div class="fbox-media">
                     <img src="{!! asset('/frontend/images/product-overviews/graciebee/adjust.png') !!}" alt="Easily Adjusted">
                  </div>
                  <div class="fbox-desc">
                     <div class="heading-block nobottomborder nobottommargin">
                        <h4>Adjustable</h4>
                     </div>
                     <p>Can be set up in 19 different sizes&comma; ranging from 2&apos;x2&apos; to 8&apos;x12&apos;.</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="row clearfix">
            <div class="col_half  nobottommargin">
               <div class="feature-box center media-box fbox-bg">
                  <div class="fbox-media">
                     <img src="{!! asset('/frontend/images/product-overviews/graciebee/assemble.png') !!}" alt="Assembly">
                  </div>
                  <div class="fbox-desc">
                     <div class="heading-block nobottomborder nobottommargin">
                        <h4>Easy to Assemble</h4>
                     </div>
                     <p>All parts and tools included. 4 each of the following: 2&apos; rails&comma; 4&apos; rails&comma; 6&apos; rails&comma; and rail connectors.</p>
                  </div>
               </div>
            </div>
            <div class="col_half col_last nobottommargin">
               <div class="feature-box center media-box fbox-bg">
                  <div class="fbox-media">
                     <img src="{!! asset('/frontend/images/product-overviews/graciebee/tack.png') !!}" alt="Tools">
                  </div>
                  <div class="fbox-desc">
                     <div class="heading-block nobottomborder nobottommargin">
                        <h4>Tacks &amp; Tool included</h4>
                     </div>
                     <p> A FREE box of quilters thumb tacks and one tack tool is all you will need to assemble and disassemble the frame.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- compared
         ====================================-->
   </div>
   <!--.content-wrap end-->
</section>
<!-- #content end -->



@endsection

@section('footer_scripts')@endsection
@section('pp_footer_scripts')@endsection
@section('inlinejs')@endsection