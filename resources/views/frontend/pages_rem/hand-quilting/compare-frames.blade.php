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
Hand Quilting Frame Comparison Table
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

            <div class="content-wrap">
                 <div class="container clearfix">
                        <div class="fancy-title title-dotted-border title-center"> <h3 itemprop="hasPart about">Machine Quilting Frame Comparison Table</h3>
                        </div>
                         <div class="row topmargin-sm clearfix">
                           <div class="table-responsive">
                               <table class="table table-hover table-comparison nobottommargin">
                                 <thead>
                                   <tr>

                                     <th>&nbsp;</th>
                                     <th>Z44 Frame</th>
                                     <th>Start-Right EZ3</th>
                                     <th>GracieBee</th>
                                   </tr>
                                 </thead>
                                 <tbody>
                                   <tr class="hidden-xs">
                                     <td>&nbsp;</td>
                                     <td><img src="http://dev.grace/frontend/images/product-overviews/z44/z44-450px.jpg" alt="Grace Z44 Hand Quilting Frame"></td>
                                     <td><img src="http://dev.grace/frontend/images/product-overviews/ez3/EZ3-450px.jpg" alt="Start-Right EZ3 Hand Quilting Frame"></td>
                                     <td><img src="http://dev.grace/frontend/images/product-overviews/graciebee/graciebee-450px.jpg" alt="Graciebee traditional Quilting Frame"></td>
                                   </tr>
                                   <tr>
                                     <td class="info">Sets up in sizes:</td>
                                     <td>King, Queen, Twin, Crib</td>
                                     <td>Queen, Crib, Craft</td>
                                     <td>Many variations, from Craft to King</td>
                                   </tr>
                                   <tr>
                                     <td class="info">Maximum Length:</td>
                                     <td>116 Inches</td>
                                     <td>99 Inches</td>
                                     <td>144 Inches</td>
                                   </tr>
                                   <tr>
                                     <td class="info">Maximum Quilting Area</td>
                                     <td>104</td>
                                     <td>87</td>
                                     <td>144</td>
                                   </tr>

                                   <tr>
                                     <td class="info">No-Baste Rail System:</td>
                                     <td><i class="icon-ok" style="color: green;"></i></td>
                                     <td><i class="icon-ok" style="color: green;"></i></td>
                                     <td><i class="icon-remove" style="color: red;"></i></td>
                                   </tr>

                                   <tr>
                                     <td class="info">Height Adjustable Legs:</td>
                                     <td><i class="icon-ok" style="color: green;"></i></td>
                                     <td><i class="icon-remove" style="color: red;"></i></td>
                                     <td><i class="icon-remove" style="color: red;"></i></td>
                                   </tr>


                                   <tr rowspan="3">
                                     <td class="info">Special Feature</td>
                                     <td>Most adjustable and sturdy hand frame on the market</td>
                                     <td>Affordalbe No-baste rail-system frame</td>
                                     <td>Can be set up in many different size configurations</td>
                                   </tr>

                                   <tr>
                                     <td class="">&nbsp;</td>
                                     <td><a href="http://dev.grace/en/machine-frames/z44/" class="button button-rounded button-reveal button-medium button-red tright">Learn More</a></td>
                                     <td><a href="http://dev.grace/en/machine-frames/ez3/" class="button button-rounded button-secondary">Learn More</a></td>
                                     <td><a href="http://dev.grace/en/machine-frames/graciebee/" class="button button-rounded button-secondary">Learn More</a></td>
                                   </tr>
                                 </tbody>
                               </table>
                           </div>
                         </div>
                       </div>

            </div>

        </section><!-- #content end -->
@endsection

@section('footer_scripts')@endsection
@section('pp_footer_scripts')@endsection
@section('inlinejs')@endsection