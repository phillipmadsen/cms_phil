@extends('frontend/layout/layout')

@section('htmlschema')
itemscope itemtype="http://schema.org/Article"
@endsection



@section('seo')
    <meta name="description" content="Compare machine quilting frames at The Grace Company">
    <meta name="keywords" content="machine quilting frame, machine frame, sewing machine frame, grace machine frame">
    <meta name="author"content="The Grace Company"/>
@endsection

@section('jsonschema')
@endsection

@section('title')
Compare Machine Frames For Sewing and Quilting | The Grace Company
@endsection

@section('bodyschema')
@endsection

@section('bodytag')
rows
@endsection

@section('header_styles')
@endsection

@section('scripts')
@endsection

@section('ppscripts')
@endsection

@section('submenu')
@include('frontend.layout.partials.menu.submenu-items', ['items'=> $menu_machine->roots()])
@endsection


@section('page-title')

<section id="page-title">
    <div class="container clearfix">
        <h1 itemprop="headline">Machine Quilting </h1>
        <span>Frame Comparison</span>
         <ol class="breadcrumb" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
        <li class="breadcrumb-lead"><a title="Go Home." href="{!! url('/') !!}/" itemprop="url"><span itemprop="title">Home</span></a></li>
          <li itemprop="child" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
          <a title="Go to Machine Quilting." href="{!! url('/') !!}/machine-frames/" itemprop="url"><span itemprop="title">Machine Quilting </span></a></li>

          <li class="active" itemprop="child" itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><span itemprop="title">Frame Comparison </span></li>
        </ol>
    </div>
</section>
<br style="clear:both" />

@endsection

@section('content')
<article>
  <!-- Content ============================================= -->
  <section id="content">
    <div class="content-wrap">
      <div class="container clearfix">
        {{-- <div class="row topmargin-lg bottommargin-sm">
          <div class="heading-block center nomargin">
            <h1>Machine Quilting Frame Comparison</h1>
          </div></div> --}}
          <div class="fancy-title title-dotted-border title-center"> <h3 itemprop="hasPart about">Machine Quilting Frame Comparison Table</h3> </div>
        <div class="row topmargin-sm clearfix">
          <div class="table-responsive">
              <table class="table table-hover table-comparison nobottommargin">
                <thead>
                  <tr>

                    <th>&nbsp;</th>
                    <th>GQ Frame</th>
                    <th>Gracie King</th>
                    <th>Gracie Queen</th>
                    <th>SR-2 Frame</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="hidden-xs">
                    <td>&nbsp;</td>
                    <td><img src="{!! url('frontend/images/product-overviews/gq-frame/gq--frame-438.png') !!}" alt="Grace GQ Machine Quilting Frame" /></td>
                    <td><img src="{!! url('frontend/images/product-overviews/gracie-king/gracie-king-438.png') !!}" alt="Gracie King Machine Quilting Frame" /></td>
                    <td><img src="{!! url('frontend/images/product-overviews/gracie-queen/gracie-queen-438.png') !!}" alt="Gracie Queen Machine Quilting Frame" /></td>
                    <td><img src="{!! url('frontend/images/product-overviews/sr-2-frame/sr-2-frame-438.png') !!}" alt="SR-2 Machine Quilting Frame" /></td>
                  </tr>
                  <tr>
                    <td class="info">Sets up in sizes:</td>
                    <td>King, Crib</td>
                    <td>King, Queen, Crib</td>
                    <td>Queen, Crib</td>
                    <td>Queen, Crib</td>
                  </tr>
                  <tr>
                    <td class="info">Maximum Length:</td>
                    <td>124 Inches</td>
                    <td>136 Inches</td>
                    <td>100 Inches</td>
                    <td>103 Inches</td>
                  </tr>
                  <tr>
                    <td class="info">Maximum Quilting Area</td>
                    <td>109</td>
                    <td>121</td>
                    <td>85</td>
                    <td>88</td>
                  </tr>
                  <tr>
                    <td class="info">Maximum Machine Throat Length:</td>
                    <td>18 Inches</td>
                    <td>18 inches</td>
                    <td>18 inches</td>
                    <td>13 inches</td>
                  </tr>
                  <tr>
                    <td class="info">Included 4th Rail for Batting:</td>
                    <td><i class="icon-ok"></i></td>
                    <td><i class="icon-ok"></i> </td>
                    <td><i class="icon-remove"></i></td>
                    <td><i class="icon-remove"></i></td>
                  </tr>
                  <tr>
                    <td class="info">Track System</td>
                    <td>Dual-Wheel SureTrack</td>
                    <td>Single-wheel system</td>
                    <td>Single-wheel system</td>
                    <td>Single-wheel system</td>
                  </tr>
                  <tr>
                    <td class="info">Height Adjustable Legs:</td>
                    <td><i class="icon-ok"></i></td>
                    <td><i class="icon-ok"></i></td>
                    <td><i class="icon-ok"></i></td>
                    <td><i class="icon-remove"></i></td>
                  </tr>
                  <tr>
                    <td class="info">Build Material</td>
                    <td>Steel</td>
                    <td>Wood</td>
                    <td>Wood</td>
                    <td>Steel</td>
                  </tr>
                  <tr>
                    <td class="info">Rail Material:</td>
                    <td>Steel</td>
                    <td>Aluminum</td>
                    <td>Aluminum</td>
                    <td>Steel</td>
                  </tr>
                  <tr rowspan="3">
                    <td class="info">Special Feature</td>
                    <td>Optional idler rail available</td>
                    <td>Flip-up rail to quickly inspect underside stitching</td>
                    <td>Flip-up rail to quickly inspect underside stitching</td>
                    <td>2-rail system and "Quilt-Clips" for easiest fabric loading ever</td>
                  </tr>

                  <tr>
                    <td class="">&nbsp;</td>
                    <td><a href="{!! url('/') !!}/machine-frames/gq-frame/" class="button button-rounded button-reveal button-medium button-red tright">Learn More</a></td>
                    <td><a href="{!! url('/') !!}/machine-frames/gracie-king/" class="button button-rounded button-secondary">Learn More</a></td>
                    <td><a href="{!! url('/') !!}/machine-frames/gracie-queen/" class="button button-rounded button-secondary">Learn More</a></td>
                    <td><a href="{!! url('/') !!}/machine-frames/sr-2-frame/" class="button button-rounded button-secondary">Learn More</a></td>
                  </tr>
                </tbody>
              </table>
          </div>
        </div>
      </div>
    </div>
  </section><!-- #content end -->
</article>
@endsection



@section('footer_scripts')
@endsection

@section('pp_footer_scripts')
@endsection

@section('inlinejs')
@endsection
