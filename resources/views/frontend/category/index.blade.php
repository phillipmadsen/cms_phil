@extends('frontend/layout/layout')


@section('seo')@endsection
@section('jsonschema')@endsection
@section('title')@endsection
@section('bodyschema')@endsection

@section('header_styles')@endsection

@section('scripts')@endsection

@section('ppscripts')

@endsection

@section('submenu')
@include('frontend.layout.partials.menu.submenu-items', ['items'=> $menu_category->roots()])
@endsection


@section('page-title')
<!-- Page Title ============================================= -->
        <section id="page-title">
            <div class="container clearfix">
                <h1 itemprop="headline" >Category</h1>
                <span>Browse by Categoy</span>
                <ol class="breadcrumb">
                    <li><a href="{!! url('/') !!}">Home</a></li>
                    <li class="active">Category</li>
                </ol>
            </div>
        </section><!-- #page-title end -->
@endsection



@section('content')
    <section id="content">

            <div class="content-wrap">

            <div class="container clearfix">

                    <div class="heading-block center">
                        <h1>Recent Articles </h1>
                        <span>We almost blog regularly about this &amp; that.</span>
                    </div>


    <div class="row">
    {{-- @include('frontend/article/sidebar', array($tags, $categories)) --}}
        <div class="col-sm-12">
            <div class="blog">
                @foreach($articles as $article)
                <div class="blog-item">
                    <img class="img-responsive img-blog" src="{!! url($article->path . $article->file_name) !!}" width="100%" alt=""/>
<br>
                    <div class="blog-content">
                        <a href="{!! URL::route('dashboard.article.show', array('slug'=>$article->slug)) !!}"><h3>{!! $article->title !!}</h3></a>

                        <div class="entry-meta">
                            {{-- <span><i class="icon-user"></i> <a href="#">Sefa</a></span> --}}
                            <span datetime="{!! $article->created_at !!}" class="time"></span>
                        </div>
                        <p>{!! $article->content !!}</p>
                        <a class="btn btn-default" href="{!! URL::route('dashboard.article.show', array('slug'=>$article->slug)) !!}">Read More <i class="icon-angle-right"></i></a>
                    </div>
                </div>
                <!--/.blog-item-->
                @endforeach

                <ul class="pagination pagination-lg">
                    {!! $articles->render() !!}
                </ul>

                <!--/.pagination-->
            </div>
        </div>
        <!--/.col-md-8-->
    </div>
    <!--/.row-->
        </div>
            </div>
</section><!--/#blog-->
@endsection