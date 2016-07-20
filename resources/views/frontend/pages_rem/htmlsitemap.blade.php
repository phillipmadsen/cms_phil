@extends('frontend/layout/layout')

@section('htmlschema')
itemscope itemtype="http://schema.org/Sitemap"
@endsection

@section('bodyschema')
@endsection

@section('seo')
    <meta name="description" content="welcome to the Hand Quilting section of the new Grace Company Website">
    <meta name="keywords" content="the grace company, hand quilting frame, grace frames, grace hand frames, grace and sewing frames, sewing hoops, lap hoops">
    <meta name="author" content="The Grace Company"/>
@endsection

@section('jsonschema')
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


@section('submenu-off')
@include('frontend.layout.partials.menu.submenu-items', ['items'=> $menu_hand->roots()])
@endsection






@section('slider')

@endsection

@section('page-title')
    <section id="page-title">
        <div class="container clearfix">
            <h1 itemprop="headline">SiteMap</h1>
            <span>Grace Company Sections and Areas</span>
            <ol class="breadcrumb" itemscope itemtype="//data-vocabulary.org/Breadcrumb">
                <li class="breadcrumb-lead"><a title="Go Home." href="{!! url(getLang() .'/') !!}" itemprop="url"><span itemprop="title">Home</span></a></li>
                <li class="active" itemprop="child" itemscope itemtype="//data-vocabulary.org/Breadcrumb"><span itemprop="title">SiteMap </span></li>
            </ol>
        </div>
    </section>
@endsection

@section('content')
    <section id="content">
        <div class="content-wrap" style="margin-bottom: 0px;">

<div class="container clearfix">
<div class="fancy-title title-dotted-border title-center">
    <h1>Main <span>Website </span> Areas</h1>
</div>
    <div class="col_one_third nobottommargin">
    <h3>Account</h3>
    {!! $menu_account->asUl() !!}
    </div>
    <div class="col_one_third nobottommargin">
    {!! $menu_account->asUl() !!}
    </div>
    <div class="col_one_third nobottommargin col_last">
    <h3>Blog Articles</h3>
        @foreach($articles as $article)
                    <div class="media">

                        <div class="media-body">
                            <span class="media-heading"><a href="{!! URL::route('dashboard.article.show', array('slug'=>$article->slug)) !!}">{!! $article->title !!}</a></span>
                            <small class="muted">{!! $article->created_at !!}</small>
                        </div>
                    </div>
        @endforeach

    </div>
</div>
<div class="line"></div>




<div class="container clearfix">
<div class="fancy-title title-dotted-border title-center">
    <h1>Secured <span>Website </span> Areas</h1>
</div>
    <div class="col_one_third nobottommargin">
    <h3>Main</h3>
    {!! $menu_primary->asUl() !!}
    </div>
    <div class="col_one_third nobottommargin">
    <h3>Account</h3>
    {!! $menu_account->asUl() !!}
    </div>
    <div class="col_one_third nobottommargin col_last">
    <h3>Products</h3>
<ul class="iconlist nobottommargin">
                            <li><i class="icon-shopping-cart"></i><a href="#">Blue Round-Neck Tshirt</a></li>
                            <li><i class="icon-shopping-cart"></i><a href="#">Checked Short Dress</a></li>
                            <li><i class="icon-shopping-cart"></i><a href="#">Light Blue Denim Dress</a></li>
                            <li><i class="icon-shopping-cart"></i><a href="#">Slim Fit Chinos</a></li>
                            <li><i class="icon-shopping-cart"></i><a href="#">Round-Neck Tshirt</a></li>
                            <li><i class="icon-shopping-cart"></i><a href="#">Green Trousers</a></li>
                            <li><i class="icon-shopping-cart"></i><a href="#">Silver Chrome Watch</a></li>
                            <li><i class="icon-shopping-cart"></i><a href="#">Black Polo Tshirt</a></li>
                            <li><i class="icon-shopping-cart"></i><a href="#">Pink Printed Dress</a></li>
                            <li><i class="icon-shopping-cart"></i><a href="#">Blue Round-Neck Tshirt</a></li>
                            <li><i class="icon-shopping-cart"></i><a href="#">Men Aviator Sunglasses</a></li>
                            <li><i class="icon-shopping-cart"></i><a href="#">Unisex Sunglasses</a></li>
                        </ul>
    </div>
</div>

        </div>
    </section>
@endsection


@section('footer_scripts')@endsection
@section('pp_footer_scripts')@endsection
@section('inlinejs')@endsection