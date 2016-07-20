@extends('frontend/layout/layout')

@section('htmlschema')
itemscope itemtype="http://schema.org/Article"
@endsection

@section('bodyschema')@endsection

@section('title')
Quilter&#39;s Creative Touch Specs | The Grace Company
@endsection

@section('seo')
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author"content="The Grace Company"/>
@endsection

@section('jsonschema')

@endsection

@section('bodytag')
rows
@endsection

@section('header_styles')
    <!--page level css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/frontend/custom-css/qct.css') }}">
    <!--end of page level css-->
@endsection

@section('submenu')
@include('frontend.layout.partials.menu.submenu-items', ['items'=> $menu_qct->roots()])
@endsection

@section('slider')@endsection
@section('intro')@endsection

@section('page-title')

@endsection
@section('content')
<!-- Content-->
<section id="content">
  <div class="content-wrap">
    <!--machine list-->
    <div class="container clearfix">
      <div class="heading-block center nobottomborder">
        <img src="{!! asset('frontend/images/product-overviews/qct/machine.png') !!}" alt="quilting machine" />
        <h1 itemprop="headline title">Quilting Machine Compatibility List</h1>
          <h2 itemprop="hasPart about">
            <div class="text-rotater" data-separator="|" data-rotate="bounceIn" data-speed="2500">Simply Click On Your Brand
              <span class="t-rotate color">APQS | Baby Lock | Bernina | Block RockiT | Brother | Elna | Janome | Juki | Nolting | Pfaff | Q&#39;nique | Viking</span>
            </div>
          </h2>
            <span itemprop="text">And check the list to see if it is compatible.</span>
      </div>
    </div>



    <div class="container clearfix ">

      <div class="col_half nobottommargin">
        <div class="toggle toggle-bg ">
          <div class="togglet"><i class="toggle-closed icon-circle-arrow-right"></i><i class="toggle-open icon-circle-arrow-down"></i>APQS</div>
          <div class="togglec ">
            {{-- <i class="livicon"data-name="tag"data-size="16" data-color="green" data-hovercolor="#000" data-animate="true" data-loop="false"data-iteration="3"data-duration="0"data-eventtype="hover"data-onparent="false"></i> --}}
            <table class="table table-striped">
              <thead>
              <tr><th>MODEL</th> <th>Quilt Motion Compatible</th> </tr>
              </thead>
              <tbody>
              <tr><td>Freedom</td> <td><i class="livicon " data-animate="false" data-hovercolor="green" data-size="20" data-name="check-circle-alt" data-color="green"></i> YES</td></tr>
              <tr><td>Lenni</td> <td><i class="livicon " data-animate="false" data-hovercolor="green" data-size="20" data-name="check-circle-alt" data-color="green"></i> YES</td></tr>
              <tr><td>Lucy</td> <td><i class="livicon " data-animate="false" data-hovercolor="green" data-size="20" data-name="check-circle-alt" data-color="green"></i> YES</td></tr>
              <tr><td>Millennium</td> <td><i class="livicon " data-animate="false" data-hovercolor="green" data-size="20" data-name="check-circle-alt" data-color="green"></i> YES</td></tr>
              </tbody>
            </table>

          </div>
        </div>
      </div>

      <div class="col_half col_last nobottommargin">
        <div class="toggle toggle-bg">
          <div class="togglet"><i class="toggle-closed icon-circle-arrow-right"></i><i class="toggle-open icon-circle-arrow-down"></i>Baby Lock</div>
          <div class="togglec">
            <table class="table table-striped">
                <thead>
                <tr><th>MODEL</th> <th>Quilt Motion Compatible</th> </tr>
                </thead>
                <tbody>
                <tr><td>Quilter&#39;s Choice Pro (BLQP)</td> <td><i class="livicon " data-animate="false" data-hovercolor="green" data-size="20" data-name="check-circle-alt" data-color="green"></i> YES</td></tr>
                <tr><td>Jewel</td> <td><i class="livicon " data-animate="false" data-hovercolor="green" data-size="20" data-name="check-circle-alt" data-color="green"></i> YES</td></tr>
                <tr><td>Crown Jewel</td> <td><i class="livicon " data-animate="false" data-hovercolor="green" data-size="20" data-name="check-circle-alt" data-color="green"></i> YES</td></tr>
                <tr><td>Crown Jewel II</td> <td><i class="livicon " data-animate="false" data-hovercolor="green" data-size="20" data-name="check-circle-alt" data-color="green"></i> YES</td></tr>
                </tbody>
            </table>
          </div>
        </div>
      </div>

      <div class="col_half nobottommargin">
        <div class="toggle toggle-bg">
          <div class="togglet"><i class="toggle-closed icon-circle-arrow-right"></i><i class="toggle-open icon-circle-arrow-down"></i>Bernina</div>
          <div class="togglec">
          <table class="table table-striped">
                <thead>
                <tr><th>MODEL</th> <th>Quilt Motion Compatible</th> </tr>
                </thead>
                <tbody>
                <tr><td>Aurora Series</td> <td><i class="livicon " data-animate="false" data-hovercolor="green" data-size="20" data-name="check-circle-alt" data-color="green"></i> YES</td></tr>
                <tr><td>Artista 6/7 Series</td> <td><i class="livicon " data-animate="false" data-hovercolor="green" data-size="20" data-name="check-circle-alt" data-color="green"></i> YES</td></tr>
                <tr><td>Bernina 820</td> <td><i class="livicon " data-animate="false" data-hovercolor="green" data-size="20" data-name="check-circle-alt" data-color="green"></i> YES</td></tr>
                <tr><td>Bernina 830</td> <td><i class="livicon " data-animate="false" data-hovercolor="green" data-size="20" data-name="check-circle-alt" data-color="green"></i> YES</td></tr>
                </tbody>
            </table>
          </div>
        </div>
      </div>

      <div class="col_half col_last nobottommargin">
        <div class="toggle toggle-bg">
          <div class="togglet"><i class="toggle-closed icon-circle-arrow-right"></i><i class="toggle-open icon-circle-arrow-down"></i>Block RockiT</div>
          <div class="togglec">
            <table class="table table-striped">
                <thead>
                <tr><th>MODEL</th> <th>Quilt Motion Compatible</th> </tr>
                </thead>
                <tbody>
                <tr><td>Block RockiT 14+</td> <td><i class="livicon " data-animate="false" data-hovercolor="green" data-size="20" data-name="check-circle-alt" data-color="green"></i> YES</td></tr>
                </tbody>
            </table>
          </div>
        </div>
      </div>

      <div class="col_half nobottommargin">
        <div class="toggle toggle-bg">
          <div class="togglet"><i class="toggle-closed icon-circle-arrow-right"></i><i class="toggle-open icon-circle-arrow-down"></i>Brother</div>
          <div class="togglec">
            <table class="table table-striped">
              <thead>
                <tr><th>MODEL</th> <th>Quilt Motion Compatible</th> </tr>
              </thead>
              <tbody>
                  <tr><td>1500 S</td> <td><i class="livicon " data-animate="false" data-hovercolor="green" data-size="20" data-name="check-circle-alt" data-color="green"></i> YES</td></tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <div class="col_half col_last nobottommargin">
        <div class="toggle toggle-bg">
          <div class="togglet"><i class="toggle-closed icon-circle-arrow-right"></i><i class="toggle-open icon-circle-arrow-down"></i>Elna</div>
          <div class="togglec">
            <table class="table table-striped">
                  <thead>
                  <tr><th>MODEL</th> <th>Quilt Motion Compatible</th> </tr>
                  </thead>
                  <tbody>
                  <tr><td>7100</td> <td><i class="livicon " data-animate="false" data-hovercolor="green" data-size="20" data-name="check-circle-alt" data-color="green"></i> YES</td></tr>
                  <tr><td>7200</td> <td><i class="livicon " data-animate="false" data-hovercolor="green" data-size="20" data-name="check-circle-alt" data-color="green"></i> YES</td></tr>
                  <tr><td>7300</td> <td><i class="livicon " data-animate="false" data-hovercolor="green" data-size="20" data-name="check-circle-alt" data-color="green"></i> YES</td></tr>
                  </tbody>
              </table>
          </div>
        </div>
      </div>

      <div class="col_half nobottommargin">
        <div class="toggle toggle-bg">
          <div class="togglet"><i class="toggle-closed icon-circle-arrow-right"></i><i class="toggle-open icon-circle-arrow-down"></i>Janome</div>
          <div class="togglec">
            <table class="table table-striped">
                  <thead>
                  <tr><th>MODEL</th> <th>Quilt Motion Compatible</th> </tr>
                  </thead>
                  <tbody>
                  <tr><td>1600 (all versions </td> <td><i class="livicon " data-animate="false" data-hovercolor="green" data-size="20" data-name="check-circle-alt" data-color="green"></i> YES</td></tr>
                  <tr><td>6600</td> <td><i class="livicon " data-animate="false" data-hovercolor="green" data-size="20" data-name="check-circle-alt" data-color="green"></i> YES</td></tr>
                  <tr><td>Artistic Quilter 18</td> <td><i class="livicon " data-animate="false" data-hovercolor="green" data-size="20" data-name="check-circle-alt" data-color="green"></i> YES</td></tr>
                  <tr><td>Artistic Quilter 18-8DX</td> <td><i class="livicon " data-animate="false" data-hovercolor="green" data-size="20" data-name="check-circle-alt" data-color="green"></i> YES</td></tr>
                  <tr><td>Artistic Quilter 26</td> <td><i class="livicon " data-animate="false" data-hovercolor="green" data-size="20" data-name="check-circle-alt" data-color="green"></i> YES</td></tr>
                  <tr><td>Artistic Quilter 26DX</td> <td><i class="livicon " data-animate="false" data-hovercolor="green" data-size="20" data-name="check-circle-alt" data-color="green"></i> YES</td></tr>
                  </tbody>
              </table>
          </div>
        </div>
      </div>

      <div class="col_half col_last nobottommargin">
        <div class="toggle toggle-bg">
          <div class="togglet"><i class="toggle-closed icon-circle-arrow-right"></i><i class="toggle-open icon-circle-arrow-down"></i>Juki</div>
          <div class="togglec">
            <table class="table table-striped">
                  <thead>
                  <tr><th>MODEL</th> <th>Quilt Motion Compatible</th> </tr>
                  </thead>
                  <tbody>
                  <tr><td>98Q</td> <td><i class="livicon " data-animate="false" data-hovercolor="green" data-size="20" data-name="check-circle-alt" data-color="green"></i> YES</td></tr>
                  <tr><td>98QE</td> <td><i class="livicon " data-animate="false" data-hovercolor="green" data-size="20" data-name="check-circle-alt" data-color="green"></i> YES</td></tr>
                  <tr><td>2000 Q</td> <td><i class="livicon " data-animate="false" data-hovercolor="green" data-size="20" data-name="check-circle-alt" data-color="green"></i> YES</td></tr>
                  <tr><td>2000 Qi</td> <td><i class="livicon " data-animate="false" data-hovercolor="green" data-size="20" data-name="check-circle-alt" data-color="green"></i> YES</td></tr>
                  <tr><td>2200</td> <td><i class="livicon " data-animate="false" data-hovercolor="green" data-size="20" data-name="check-circle-alt" data-color="green"></i> YES</td></tr>
                  </tbody>
              </table>
          </div>
        </div>
      </div>

      <div class="col_half nobottommargin">
        <div class="toggle toggle-bg">
          <div class="togglet"><i class="toggle-closed icon-circle-arrow-right"></i><i class="toggle-open icon-circle-arrow-down"></i>Nolting</div>
          <div class="togglec">
            <table class="table table-striped">
                  <thead>
                  <tr><th>MODEL</th> <th>Quilt Motion Compatible</th> </tr>
                  </thead>
                  <tbody>
                  <tr><td>Fun Quilter 14</td> <td><i class="livicon " data-animate="false" data-hovercolor="green" data-size="20" data-name="check-circle-alt" data-color="green"></i> YES</td></tr>
                  <tr><td>Fun Quilter 17</td> <td><i class="livicon " data-animate="false" data-hovercolor="green" data-size="20" data-name="check-circle-alt" data-color="green"></i> YES</td></tr>
                  <tr><td>Fun Quilter 20</td> <td><i class="livicon " data-animate="false" data-hovercolor="green" data-size="20" data-name="check-circle-alt" data-color="green"></i> YES</td></tr>
                  <tr><td>Fun Quilter 23</td> <td><i class="livicon " data-animate="false" data-hovercolor="green" data-size="20" data-name="check-circle-alt" data-color="green"></i> YES</td></tr>
                  <tr><td>Pro Series 20</td> <td><i class="livicon " data-animate="false" data-hovercolor="green" data-size="20" data-name="check-circle-alt" data-color="green"></i> YES</td></tr>
                  <tr><td>Pro Series 24</td> <td><i class="livicon " data-animate="false" data-hovercolor="green" data-size="20" data-name="check-circle-alt" data-color="green"></i> YES</td></tr>
                  <tr><td>Pro Series 30</td> <td><i class="livicon " data-animate="false" data-hovercolor="green" data-size="20" data-name="check-circle-alt" data-color="green"></i> YES</td></tr>
                  </tbody>
              </table>
          </div>
        </div>
      </div>

      <div class="col_half col_last nobottommargin">
        <div class="toggle toggle-bg">
          <div class="togglet"><i class="toggle-closed icon-circle-arrow-right"></i><i class="toggle-open icon-circle-arrow-down"></i>Pfaff</div>
          <div class="togglec">
            <table class="table table-striped">
                  <thead>
                  <tr><th>MODEL</th> <th>Quilt Motion Compatible</th> </tr>
                  </thead>
                  <tbody>
                  <tr><td>Grand Quilter</td> <td><i class="livicon " data-animate="false" data-hovercolor="green" data-size="20" data-name="check-circle-alt" data-color="green"></i> YES</td></tr>
                  <tr><td>Grand Quilter 18-8</td> <td><i class="livicon " data-animate="false" data-hovercolor="green" data-size="20" data-name="check-circle-alt" data-color="green"></i> YES</td></tr>
                  </tbody>
              </table>
          </div>
        </div>
      </div>

      <div class="col_half nobottommargin">
        <div class="toggle toggle-bg">
          <div class="togglet"><i class="toggle-closed icon-circle-arrow-right"></i><i class="toggle-open icon-circle-arrow-down"></i>Q&#39;nique</div>
          <div class="togglec">
            <table class="table table-striped">
                  <thead>
                  <tr><th>MODEL</th> <th>Quilt Motion Compatible</th> </tr>
                  </thead>
                  <tbody>
                  <tr><td>Q&#39;nique 14+</td> <td><i class="livicon " data-animate="false" data-hovercolor="green" data-size="20" data-name="check-circle-alt" data-color="green"></i> YES</td></tr>
                  </tbody>
              </table>
          </div>
        </div>
      </div>

      <div class="col_half col_last nobottommargin">
        <div class="toggle toggle-bg">
          <div class="togglet"><i class="toggle-closed icon-circle-arrow-right"></i><i class="toggle-open icon-circle-arrow-down"></i>Viking</div>
          <div class="togglec">
            <table class="table table-striped">
                  <thead>
                  <tr><th>MODEL</th> <th>Quilt Motion Compatible</th> </tr>
                  </thead>
                  <tbody>
                  <tr><td>Mega Quilter</td> <td><i class="livicon " data-animate="false" data-hovercolor="green" data-size="20" data-name="check-circle-alt" data-color="green"></i> YES</td></tr>
                  <tr><td>Mega Quilter 18-8</td> <td><i class="livicon " data-animate="false" data-hovercolor="green" data-size="20" data-name="check-circle-alt" data-color="green"></i> YES</td></tr>
                  </tbody>
              </table>
          </div>
        </div>
      </div>



    </div>


    <div class="line margintop-sm marginbottom-sm"></div>
    <!--frame list-->
    <div class="container clearfix">
      <div class="heading-block center nobottomborder">
        <img src="{!! asset('frontend/images/product-overviews/qct/frame.png') !!}" alt="quilting frame" />
        <h2>Quilting Frame Compatibility List</h2>
      </div>
      <div class="toggle toggle-bg">
        <div class="togglet"><i class="toggle-closed icon-circle-arrow-right"></i><i class="toggle-open icon-circle-arrow-down"></i>Grace Frames</div>
        <div class="togglec">

          <table class="table table-striped">
              <thead>
              <tr><th>MODEL</th> <th>View Frame</th><th>Quilt Motion Compatible</th> </tr>
              </thead>
              <tbody>
              <tr><td>GQ Frame</td><td><button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#gq">View Frame</button></td><td><i class="livicon " data-animate="false" data-hovercolor="green" data-size="20" data-name="check-circle-alt" data-color="green"></i> YES</td></tr>
              <tr><td>Qnique Frame</td><td><button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#qniqueframe">View Frame</button></td><td><i class="livicon " data-animate="false" data-hovercolor="green" data-size="20" data-name="check-circle-alt" data-color="green"></i> YES</td></tr>
              <tr><td>Gracie King</td><td><button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#gracieking">View Frame</button></td><td><i class="livicon " data-animate="false" data-hovercolor="green" data-size="20" data-name="check-circle-alt" data-color="green"></i> YES</td></tr>
              <tr><td>Gracie Queen</td><td><button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#graciequeen">View Frame</button></td><td><i class="livicon " data-animate="false" data-hovercolor="green" data-size="20" data-name="check-circle-alt" data-color="green"></i> YES</td></tr>
              <tr><td>SR-2 Frame</td><td><button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#sr2frame">View Frame</button></td><td><i class="livicon " data-animate="false" data-hovercolor="green" data-size="20" data-name="check-circle-alt" data-color="green"></i> YES</td></tr>
              <tr><td>Majestic</td><td><button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#majesticframe">View Frame</button></td><td><i class="livicon " data-animate="false" data-hovercolor="green" data-size="20" data-name="check-circle-alt" data-color="green"></i> YES</td></tr>
              <tr><td>Pinnacle</td><td><button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#pinnacleframe">View Frame</button></td><td><i class="livicon " data-animate="false" data-hovercolor="green" data-size="20" data-name="check-circle-alt" data-color="green"></i> YES</td></tr>
              <tr><td>GMQ-Pro&ast;</td><td><button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#gmq-proframe">View Frame</button></td><td><i class="livicon " data-animate="false" data-hovercolor="green" data-size="20" data-name="check-circle-alt" data-color="green"></i> YES</td></tr>
              <tr><td>Little Gracie II&ast;</td><td><button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#littlegracieframe">View Frame</button></td><td><i class="livicon " data-animate="false" data-hovercolor="green" data-size="20" data-name="check-circle-alt" data-color="green"></i> YES</td></tr>
              <tr><td>Star-Right Frame???</td><td><button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#star-right-frame">View Frame</button></td><td><i class="livicon " data-animate="false" data-hovercolor="green" data-size="20" data-name="check-circle-alt" data-color="green"></i> YES</td></tr>

              </tbody>
            </table>
                <div class="modal fade" id="gq" tabindex="-1" role="dialog" aria-labelledby="gqLabel" aria-hidden="true">
                  <div class="modal-dialog">
                  <div class="modal-body">
                  <div class="modal-content">
                  <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title" id="gqLabel">GQ Frame</h4>
                  </div>
                  {!! HTML::image('frontend/images/product-overviews/gq-frame/gq--frame-438.png', 'GQ Frame', array('class' => 'image mfp-img', 'itemprop' => 'image')) !!}
                  </div>
                  </div>
                  </div>
                </div>

                <div class="modal fade" id="qniqueframe" tabindex="-1" role="dialog" aria-labelledby="qniqueframeLabel" aria-hidden="true">
                  <div class="modal-dialog">
                  <div class="modal-body">
                  <div class="modal-content">
                  <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title" id="qniqueframeLabel">Qnique Frame</h4>
                  </div>
                  {!! HTML::image('frontend/images/product-overviews/qnique/qnique-frame-700.png', 'qnique frame', array('class' => 'image mfp-img', 'itemprop' => 'image')) !!}
                  </div>
                  </div>
                  </div>
                </div>


                <div class="modal fade" id="gracieking" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                  <div class="modal-body">
                  <div class="modal-content">
                  <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title" id="myModalLabel">Gracie King Frame</h4>
                  </div>
                  {!! HTML::image('frontend/images/product-overviews/gracie-king/gracie-king-438.png', 'gracie-king', array('class' => 'image mfp-img', 'itemprop' => 'image')) !!}
                  </div>
                  </div>
                  </div>
                </div>

                <div class="modal fade" id="graciequeen" tabindex="-1" role="dialog" aria-labelledby="graciequeenLabel" aria-hidden="true">
                  <div class="modal-dialog">
                  <div class="modal-body">
                  <div class="modal-content">
                  <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title" id="graciequeenLabel">Gracie Queen</h4>
                  </div>
                  {!! HTML::image('frontend/images/product-overviews/gracie-queen/gracie-queen-438.png', 'Gracie Queen', array('class' => 'image mfp-img', 'itemprop' => 'image')) !!}
                  </div>
                  </div>
                  </div>
                </div>

                <div class="modal fade" id="sr2frame" tabindex="-1" role="dialog" aria-labelledby="sr2frameLabel" aria-hidden="true">
                  <div class="modal-dialog">
                  <div class="modal-body">
                  <div class="modal-content">
                  <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title" id="sr2frameLabel">SR-2 Frame</h4>
                  </div>
                  {!! HTML::image('frontend/images/product-overviews/sr-2-frame/sr-2-frame-438.png', 'sr-2-frame', array('class' => 'image mfp-img', 'itemprop' => 'image')) !!}
                  </div>
                  </div>
                  </div>
                </div>

                <div class="modal fade" id="majesticframe" tabindex="-1" role="dialog" aria-labelledby="majesticLabel" aria-hidden="true">
                  <div class="modal-dialog">
                  <div class="modal-body">
                  <div class="modal-content">
                  <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title" id="majesticLabel">Majestic Frame</h4>
                  </div>
                  {!! HTML::image('frontend/images/product-overviews/majestic/majestic_frame-700.png', 'Majestic', array('class' => 'image mfp-img', 'itemprop' => 'image')) !!}
                  </div>
                  </div>
                  </div>
                </div>

                <div class="modal fade" id="pinnacleframe" tabindex="-1" role="dialog" aria-labelledby="pinnacleLabel" aria-hidden="true">
                  <div class="modal-dialog">
                  <div class="modal-body">
                  <div class="modal-content">
                  <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title" id="pinnacleLabel">Pinnacle Frame</h4>
                  </div>
                  {!! HTML::image('frontend/images/product-overviews/pinnacle/pinnacle_queen_quilt05.png', 'Pinnacle', array('class' => 'image mfp-img', 'itemprop' => 'image')) !!}
                  </div>
                  </div>
                  </div>
                </div>

                <div class="modal fade" id="gmq-proframe" tabindex="-1" role="dialog" aria-labelledby="gmq-proLabel" aria-hidden="true">
                  <div class="modal-dialog">
                  <div class="modal-body">
                  <div class="modal-content">
                  <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title" id="gmq-proLabel">GMQ-Pro Frame</h4>
                  </div>
                  {!! HTML::image('frontend/images/product-overviews/gmq-pro/gmq-pro700.png', 'GMQ-Pro', array('class' => 'image mfp-img', 'itemprop' => 'image')) !!}
                  </div>
                  </div>
                  </div>
                </div>

                <div class="modal fade" id="littlegracieframe" tabindex="-1" role="dialog" aria-labelledby="littlegracieframeLabel" aria-hidden="true">
                  <div class="modal-dialog">
                  <div class="modal-body">
                  <div class="modal-content">
                  <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title" id="littlegracieframeLabel">Little Gracie II</h4>
                  </div>
                  {!! HTML::image('frontend/images/product-overviews/little-gracie/lgII-700.png', 'Little Gracie II', array('class' => 'image mfp-img', 'itemprop' => 'image')) !!}
                  </div>
                  </div>
                  </div>
                </div>

          <div class="modal fade" id="star-right-frame" tabindex="-1" role="dialog" aria-labelledby="star-right-frameLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-body">
            <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="star-right-frameLabel">Star-Right Frame</h4>
            </div>
            {!! HTML::image('frontend/images/product-overviews/star-right-frame/', 'Star-Right Frame', array('class' => 'image mfp-img', 'itemprop' => 'image')) !!}
            </div>
            </div>
            </div>
          </div>






        </div>
      </div>
















      <div class="toggle toggle-bg">
        <div class="togglet"><i class="toggle-closed icon-circle-arrow-right"></i><i class="toggle-open icon-circle-arrow-down"></i>Other Frames / <span class="color">Manufactured by The Grace Company</span></div>
        <div class="togglec">
           <table class="table table-striped">
              <thead>
              <tr><th>MODEL</th> <th>Quilt Motion Compatible</th> </tr>
              </thead>
              <tbody>
              <tr><td>Bernina Frame</td> <td><i class="livicon " data-animate="false" data-hovercolor="green" data-size="20" data-name="check-circle-alt" data-color="green"></i> YES</td></tr>
              <tr><td>Pfaff iQuilt</td> <td><i class="livicon " data-animate="false" data-hovercolor="green" data-size="20" data-name="check-circle-alt" data-color="green"></i> YES</td></tr>
              <tr><td>Tin Lizzie Phoenix Frame</td> <td><i class="livicon " data-animate="false" data-hovercolor="green" data-size="20" data-name="check-circle-alt" data-color="green"></i> YES</td></tr>
              <tr><td>Janome Artistic Frame</td> <td><i class="livicon " data-animate="false" data-hovercolor="green" data-size="20" data-name="check-circle-alt" data-color="green"></i> YES</td></tr>
              <tr><td>Juki Frame</td> <td><i class="livicon " data-animate="false" data-hovercolor="green" data-size="20" data-name="check-circle-alt" data-color="green"></i> YES</td></tr>
              <tr><td>Momentum Frame / Baby Lock</td> <td><i class="livicon " data-animate="false" data-hovercolor="green" data-size="20" data-name="check-circle-alt" data-color="green"></i> YES</td></tr>
              </tbody>
            </table>
        </div>

      </div>
    </div>
    <div class="line margintop-sm marginbottom-sm"></div>
    <!--========Tablets==========-->
    <section id="tablets">
      <div class="section parallax dark nomargin" style=" background-image:url('{!! url('frontend/images/product-overviews/qct/tablet-bg.jpg') !!}'); padding:150px 0px;" data-stellar-background-ratio="0.3">
        <div class="video-overlay" style="background-color: rgba(0,0,0,0.35);">
          <div class="heading-block center nobottomborder nobottommargin" style="padding:150px 0px">
            <h2>Using Your Own Windows Tablet</h2>
          </div>
        </div>
      </div>
      <div class="container topmargin-sm">
        <p class="lead">Quilter&#39;s Creative Touch is best on Windows tablets. The software will also work with any Windows home PC or laptop that meets the system requirements, but it has been designed to be used with touch-screen tablets, offering the freedom to use it wherever you go, and have all of the functionality right at the sewing machine where you need it most. When deciding if your Windows tablet will work with Quilter&#39;s Creative Touch, here are some other suggestions to keep in mind.</p>
        <ul class="list-group">
          <li class="list-group-item">QCT will work on any Windows 7, 8, or 10 tablet. It will <em>not work with Windows RT.</em></li>
          <li class="list-group-item">Your tablet should have a free USB to plug into QCT, even when your table is charging.</li>
          <li class="list-group-item">The included QCT tablet mount will hold any tablet with up to a 13 inch screen.</li>
        </ul>
        <p class="center">For more details or to answer any questions please see the list of minimal system requirements below, or call the Grace Company at<br><span class="accent" style="font-weight:bold;"><i class="icon icon-call"></i> 1-800-264-0644</span></p>
      </div>
    </section>
    <!--=====requirements=====-->
    <section class="section topmargin-sm nobottommargin">
      <div class="container">
        <div class="heading-block">
          <h2>Minimum System Requirements</h2>
        </div>
        <div class="panel-heading dark" style="background-color:gray;">To assure that QCT will run properly, the Windows tablet, PC, or laptop must meet the following minimum system requirements.
        </div>
        <ul class="list-group">
          <li class="list-group-item"><em>Windows 7, 8, or higher</em></li>
          <li class="list-group-item">1.2 GHz or higher processor</li>
          <li class="list-group-item">1 GB RAM</li>
          <li class="list-group-item">500 MB of available storage drive space</li>
          <li class="list-group-item">Screen resolution of 1024 x 768 or higher.</li>
        </ul>
      </div>
    </section>

  </div>
</section><!-- #content end -->
@endsection

@section('footer_scripts')
    <!-- page level js starts-->
    <!--page level js ends-->
@endsection

@section('inlinejs')@endsection

@section('pp_footer_scripts')@endsection