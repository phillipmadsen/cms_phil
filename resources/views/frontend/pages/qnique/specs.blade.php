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
        <li class="breadcrumb-lead"><a title="Go Home." href="{!! url(getLang()./') !!}/" itemprop="url"><span itemprop="title">Home</span></a></li>
        	<li itemprop="child" itemscope itemtype="http://data-vocabulary.org/Breadcrumb"> <span itemprop="title">Sewing Machines</span> </li>
        	<li class="active" itemprop="child" itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><span itemprop="title">Qnique Quilter</span></li>
        </ol>
    </div>
</section>
@endsection

@section('sidebar')@endsection

@section('content')

        <!-- Content
        ============================================= -->
        <section id="content">

            <div class="content-wrap">

                <div class="container center clearfix">

                    <div class="heading-block center">
                        <h1>This is a Blank Page</h1>
                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, ratione?</span>
                    </div>

                    <p>Quod aut totam adipisci fugit dolor tempora quasi odit, qui aliquam fuga voluptatibus quas eos earum facilis corporis quibusdam eius! Molestiae dolorum nisi quod aperiam ullam libero qui autem alias laborum totam voluptatibus aliquam commodi nobis ipsum excepturi repellendus nihil labore est possimus magni aliquid, sed culpa ad explicabo! Esse, provident, autem.</p>

                    <a href="index.html" class="btn btn-default topmargin-sm">&lArr; Back to the Demo</a>

                </div>

            </div>

        </section><!-- #content end -->

@endsection

@section('footer_scripts')
    <!-- page level js starts-->
    <!--page level js ends-->
@endsection

@section('inlinejs')@endsection
@section('pp_footer_scripts')@endsection
