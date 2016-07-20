@extends('frontend/layout/layout')

@section('htmlschema')
itemscope itemtype="http://schema.org/Article"
@endsection

@section('bodyschema')@endsection

@section('seo')
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author"content="The Grace Company"/>
@endsection

@section('jsonschema')
  {{-- @include('frontend/pages/qct/partials/microjson') --}}
@endsection

@section('bodytag')
rows
@endsection


@section('header_styles')@endsection
@section('scripts')@endsection
@section('ppscripts')@endsection

@section('submenu')
@include('frontend/layout/partials/menu/submenu-items', ['items'=> $menu_machine->roots()])
@endsection

@section('sub')
<div id="page-menu">
    <div id="page-menu-wrap">
        <div class="container clearfix ">
            <nav class="one-page-menu">
                <ul>
                    <li><a href="{!! url('/') !!}/machine-frames/">Machine Quilting</a></li>
                    <li><a class="current" href="{!! URL::full(); !!}"><div>GQ Frame</div></a></li>
                    <li><a href="{!! url('/') !!}/machine-frames/gracie-king/"><div>Gracie King &amp; Queen</div></a></li>
                    <li><a href="{!! url('/') !!}/machine-frames/sr-2-frame"><div>SR-2 Frame</div></a></li>
                    <li><a href="{!! url('/') !!}/machine-frames/accessories/"><div>Accessories</div></a></li>
                    <li><a href="{!! url('/') !!}/machine-frames/compare-machine-frames/"><div>Compare Frames</div></a></li>
                </ul>
            </nav>
            <div id="page-submenu-trigger"><i class="icon-reorder"></i></div>
        </div>
    </div>
</div>
@endsection

@section('content')
<article>
  <!-- Content ============================================= -->
  <section id="content">
    <div class="content-wrap">
      <div class="container clearfix">
        <div class="row topmargin-lg bottommargin-sm">
          <div class="heading-block center nomargin">
            <h1>Machine Quilting Frame Comparison</h1>
          </div>
        </div>
        <div class="row topmargin-sm clearfix">
          <div class="col_one_fourth compare">
            <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
              <h5>GQ Frame</h5>
            </div>
            <img src="{!! url('frontend/images/product-overviews/gq-frame/gq--frame-438.png') !!}" alt="Grace GQ Machine Quilting Frame" />
            <dl>
              <dt>Sets up in sizes:</dt>
              <dd>King, Crib</dd>
              <dt>Maximum Length:</dt>
              <dd>124 Inches</dd>
              <dt>Maximum Quilting Area</dt>
              <dd>109</dd>
              <dt>Maximum Machine Throat Length:</dt>
              <dd>18 inches</dd>
              <dt>Included 4th Rail for Batting:</dt>
              <dd>Yes</dd>
              <dt>Track System</dt>
              <dd>Dual-Wheel SureTrack</dd>
              <dt>Height Adjustable Legs:</dt>
              <dd>Yes</dd>
              <dt>Build Material</dt>
              <dd>Steel</dd>
              <dt>Rail Material:</dt>
              <dd>Steel</dd>
              <dt>Special Feature</dt>
              <dd>Optional idler rail available</dd>
            </dl>
            <a href="{!! url('/') !!}/machine-frames/gq-frame/" class="button button-rounded button-secondary">Learn More</a>
          </div>
          <div class="col_one_fourth compare">
            <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
              <h5>Gracie King</h5>
            </div>
            <img src="{!! url('frontend/images/product-overviews/gracie-king/gracie-king-438.png') !!}" alt="Gracie King Machine Quilting Frame" />
            <dl>
              <dt>Sets up in sizes:</dt>
              <dl>King, Queen, Crib</dl>
              <dt>Maximum Length:</dt>
              <dl>136 Inches</dl>
              <dt>Maximum Quilting Area</dt>
              <dd>121</dd>
              <dt>Maximum Machine Throat Length:</dt>
              <dd>18 inches</dd>
              <dt>Included 4th Rail for Batting:</dt>
              <dd>Yes</dd>
              <dt>Track System</dt>
              <dd>Single-wheel system</dd>
              <dt>Height Adjustable Legs:</dt>
              <dd>Yes</dd>
              <dt>Build Material</dt>
              <dd>Wood</dd>
              <dt>Rail Material:</dt>
              <dd>Aluminum</dd>
              <dt>Special Feature</dt>
              <dd>Flip-up rail to quickly inspect underside stitching</dd>
            </dl>
            <a href="{!! url('/') !!}/machine-frames/gracie-king/" class="button button-rounded button-secondary">Learn More</a>
          </div>
          <div class="col_one_fourth compare">
            <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
              <h5>Gracie Queen</h5>
            </div>
            <img src="{!! url('frontend/images/product-overviews/gracie-queen/gracie-queen-438.png') !!}" alt="Gracie Queen Machine Quilting Frame" />
            <dl>
              <dt>Sets up in sizes:</dt>
              <dl>Queen, Crib</dl>
              <dt>Maximum Length:</dt>
              <dl>100 Inches</dl>
              <dt>Maximum Machine Throat Length:</dt>
              <dt>Maximum Quilting Area</dt>
              <dd>85</dd>
              <dd>18 inches</dd>
              <dt>Included 4th Rail for Batting:</dt>
              <dd>No</dd>
              <dt>Track System</dt>
              <dd>Single-wheel system</dd>
              <dt>Height Adjustable Legs:</dt>
              <dd>Yes</dd>
              <dt>Build Material</dt>
              <dd>Wood</dd>
              <dt>Rail Material:</dt>
              <dd>Aluminum</dd>
              <dt>Special Feature</dt>
              <dd>Flip-up rail to quickly inspect underside stitching</dd>
            </dl>
            <a href="{!! url('/') !!}/machine-frames/gracie-queen/" class="button button-rounded button-secondary">Learn More</a>
          </div>
          <div class="col_one_fourth compare col_last">
            <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
              <h5>SR-2 Frame</h5>
            </div>
            <img src="{!! url('frontend/images/product-overviews/sr-2-frame/sr-2-frame-438.png') !!}" alt="SR-2 Machine Quilting Frame" />
            <dl>
              <dt>Sets up in sizes:</dt>
              <dl>Queen, Crib</dl>
              <dt>Maximum Length:</dt>
              <dl>103 Inches</dl>
              <dt>Maximum Quilting Area</dt>
              <dd>88</dd>
              <dt>Maximum Machine Throat Length:</dt>
              <dd>13 inches</dd>
              <dt>Included 4th Rail for Batting:</dt>
              <dd>No</dd>
              <dt>Track System</dt>
              <dd>Single-wheel system</dd>
              <dt>Height Adjustable Legs:</dt>
              <dd>No</dd>
              <dt>Build Material</dt>
              <dd>Steel</dd>
              <dt>Rail Material:</dt>
              <dd>Steel</dd>
              <dt>Special Feature</dt>
              <dd>2-rail system and <strong>"Quilt-Clips"</strong> for easiest fabric loading ever</dd>
            </dl>
            <a href="{!! url('/') !!}/machine-frames/sr-2-frame/" class="button button-rounded button-secondary">Learn More</a>
          </div>
        </div>
      </div>
    </div>
  </section><!-- #content end -->
</article>

@section('footer_scripts')@endsection
@section('pp_footer_scripts')@endsection
@section('inlinejs')@endsection