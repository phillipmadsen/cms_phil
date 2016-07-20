@extends('frontend/layout/layout')

@section('htmlschema')
itemscope itemtype="http://schema.org/Article"
@endsection


@section('title')
QCT Tutorials | Quilter&#39;s Creative Touch Support| The Grace Company
@endsection

@section('seo')
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author"content="The Grace Company"/>
@endsection

@section('header_styles')
    <!--page level css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/frontend/custom-css/qct.css') }}">
    <!--end of page level css-->
@endsection

@section('bodytag')
rows
@endsection



@section('submenu')
@include('frontend.layout.partials.menu.submenu-items', ['items'=> $menu_qct->roots()])
@endsection

@section('slider')@endsection
@section('intro')@endsection

@section('pagetitle')
<section id="page-title">
    <div class="container clearfix">
        <h1>Tutorials</h1>
        <span>Learn how to use QuiltMotion. </span>
         <ol class="breadcrumb" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
        <li class="breadcrumb-lead"><a title="Go Home." href="{!! url('/') !!}/" itemprop="url"><span itemprop="title">Home</span></a></li>
          <li itemprop="child" itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a title="Go to QuiltMotion." href="{!! url('/') !!}/automation/qct/" itemprop="url"><span itemprop="title">QuiltMotion</span></a></li>
          <li class="active" itemprop="child" itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><span itemprop="title">QuiltMotion Tutorials</span></li>
        </ol>
    </div>
</section>
@endsection
@section('content')
<section id="content" style="margin-bottom: 0px;">

            <div class="content-wrap">

                <div class="container clearfix">

                    <div class="heading-block title-center nobottomborder">
                        <h1>We Are Currently Building This Area</h1>
                        <span>Please Check Back Again In The Future We Are Pretty Close</span>
                    </div>

   {{--                  <div id="countdown-ex1" class="countdown countdown-large divcenter bottommargin is-countdown" style="max-width:700px;"><span class="countdown-row countdown-show3"><span class="countdown-section"><span class="countdown-amount">0</span><span class="countdown-period">Hours</span></span><span class="countdown-section"><span class="countdown-amount">0</span><span class="countdown-period">Minutes</span></span><span class="countdown-section"><span class="countdown-amount">0</span><span class="countdown-period">Seconds</span></span></span></div>

                    <div class="clear"></div>

                    <div class="progress progress-striped active topmargin divcenter" style="height: 10px; max-width:600px;">
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                            <span class="sr-only">80% Complete</span>
                        </div>
                    </div> --}}

                    <div class="divider divider-center divider-short divider-margin"><i class="icon-time"></i></div>
{{--
                    <div class="widget-subscribe-form-result"></div>
                    <form id="widget-subscribe-form" action="include/subscribe.php" role="form" method="post" class="nobottommargin">
                        <div class="input-group input-group-lg divcenter" style="max-width:600px;">
                            <span class="input-group-addon"><i class="icon-email2"></i></span>
                            <input type="email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">Subscribe Now</button>
                            </span>
                        </div>
                    </form> --}}

<br style="clear:both" />

                </div>

            </div>

        </section>
@endsection

@section('footer_scripts')@endsection
@section('inlinejs')@endsection
@section('pp_footer_scripts')@endsection
