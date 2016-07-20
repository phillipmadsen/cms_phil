@extends('frontend/layout/leftside')

@section('htmlschema')
itemscope itemtype="http://schema.org/Blog"
@endsection

@section('seo')
@include('frontend.article.partials.meta')

@endsection

@section('jsonschema')

    <script type="application/ld+json">
    {
       "@context":"http:\/\/schema.org\/",
       "name":"{{{ isset($article->meta_title) ? $article->meta_title : $article->title }}}",
       "@type":"Article",
       "author":"The Grace Company",
       "ArticleSection":"{!! $article->category[0]->title !!}",
       "datePublished":"{!! $article->created_at !!}",
       "Publisher":"The Grace Company",
       "url":"{!! url() !!}{!! $uri = Request::path() !!}"
    }
    </script>

@endsection

@section('title')
{{{ isset($article->meta_title) ? $article->meta_title : $article->title }}}
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

<script type="text/javascript" src="{!! asset('assets/js/moment-with-langs.min.js') !!}"></script>

<script type="text/javascript">
    moment().format();
    moment.lang('en');

    jQuery(document).ready(function ($) {
    var now = moment();
    $('.time').each(function (i, e) {

    var time = moment($(e).attr('datetime'));
    $(e).html('<i class="icon-calendar"> ' + time.from(now) + '</i>');

});
});
</script>

@endsection

@section('submenu')
@include('frontend.layout.partials.menu.submenu-items', ['items'=> $menu_blog->roots()])
@endsection

@section('page-title')
<!-- Page Title
============================================= -->
<section id="page-title">

    <div class="container clearfix">
        <h1>Blog Article</h1>
        <span>Our Latest News</span>
        @yield('partial/breadcrumbs', Breadcrumbs::render('blog.post.show', $article))
    </div>

</section>
@endsection



@section('content')

<!-- Content
============================================= -->
<section id="content" style="margin-bottom: 0px;">

            <div class="content-wrap">

                <div class="container clearfix">

                    <!-- Post Content
                    ============================================= -->
                    <div class="postcontent nobottommargin col_last clearfix">

                        <div class="single-post nobottommargin">

                            <!-- Single Post
                            ============================================= -->
                            <div class="entry clearfix">

                                <!-- Entry Title
                                ============================================= -->
                                <div class="entry-title">
                                    <h2  itemprop="headline">{!! $article->title !!}</h2>
                                </div><!-- .entry-title end -->

                                <!-- Entry Meta
                                ============================================= -->
                                <ul class="entry-meta clearfix">
                                    <li><i class="icon-calendar3"></i> <span datetime="{!! date('F d, Y', strtotime($article->created_at)) !!}" class="time"></span> </li>
                                    <li><a href="#"><i class="icon-user"></i> admin</a></li>
                                    <li><i class="icon-folder-open"></i> {!! $article->category[0]->title !!}</li>
                                    {{-- <li><a href="#"><i class="icon-comments"></i> 43 Comments</a></li> --}}
                                    {{-- <li><a href="#"><i class="icon-camera-retro"></i></a></li> --}}
                                    <meta itemprop="datePublished" content="{!! $article->created_at !!}"/>
                                </ul><!-- .entry-meta end -->

                                <!-- Entry Image
                                ============================================= -->
                                <div class="entry-image">
                                     @if($article->path)
                                        <img itemprop="image" class="img-responsive img-blog" src="{!! url($article->path . $article->file_name) !!}" width="100%" style="border: 1px solid #bdc3c7;" alt="" />
                                    @else
                                        <img itemprop="image" class="img-responsive img-blog" src="{!! url('assets/images/blog_default.png') !!}" width="100%" style="border: 1px solid #bdc3c7; height: 290px;" alt=""/>
                                    @endif
                                </div><!-- .entry-image end -->

                                <!-- Entry Content
                                ============================================= -->
                                <div class="entry-content notopmargin" itemprop="articleBody">


                                    {!! $article->content !!}
                                    <!-- Post Single - Content End -->

                                    <!-- Tag Cloud
                                    ============================================= -->
                                    <div class="tagcloud clearfix bottommargin">
                            @foreach($article->tags as $tag)
                            <a href="{!! URL::route('dashboard.tag', array('tag'=>$tag->slug)) !!}"><i class="icon-tags"></i> {!! $tag->name !!}</a>
                            @endforeach

                                    </div><!-- .tagcloud end -->

                                    <div class="clear"></div>

                                    <!-- Post Single - Share
                                    ============================================= -->
                                    <div class="si-share noborder clearfix">
                                        <span>Share this Post:</span>
                                        <div>
                                            <a href="http://www.facebook.com/sharer.php?u={!! $url = Request::url(); !!}" target="_blank" class="social-icon si-borderless si-facebook">
                                                <i class="icon-facebook"></i>
                                                <i class="icon-facebook"></i>
                                            </a>
                                            <a href="https://twitter.com/intent/tweet?url={!! $url = Request::url(); !!}" class="social-icon si-borderless si-twitter" target="_blank">
                                                <i class="icon-twitter"></i>
                                                <i class="icon-twitter"></i>
                                            </a>
                                            <a href="javascript:void((function()%7Bvar%20e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','http://assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)%7D)());" class="social-icon si-borderless si-pinterest" target="_blank">
                                                <i class="icon-pinterest"></i>
                                                <i class="icon-pinterest"></i>
                                            </a>

                                            <a href="https://plus.google.com/share?url={!! $url = Request::url(); !!}" class="social-icon si-borderless si-gplus" target="_blank">
                                                <i class="icon-gplus"></i>
                                                <i class="icon-gplus"></i>
                                            </a>
                              {{--               <a href="#" class="social-icon si-borderless si-rss" target="_blank">
                                                <i class="icon-rss"></i>
                                                <i class="icon-rss"></i>
                                            </a> --}}
                                      {{--       <a href="#" class="social-icon si-borderless si-email3" target="_blank">
                                                <i class="icon-email3"></i>
                                                <i class="icon-email3"></i>
                                            </a> --}}
                                        </div>
                                    </div><!-- Post Single - Share End -->

                                </div>
                            </div><!-- .entry end -->

                            <!-- Post Navigation
                            ============================================= -->
              {{--               <div class="post-navigation clearfix">

                                <div class="col_half nobottommargin">
                                    <a href="#">⇐ This is a Standard post with a Slider Gallery</a>
                                </div>

                                <div class="col_half col_last tright nobottommargin">
                                    <a href="#">This is an Embedded Audio Post ⇒</a>
                                </div>

                            </div><!-- .post-navigation end -->

                            <div class="line"></div> --}}

                            <!-- Post Author Info
                            ============================================= -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Posted by <span><a href="#">The Grace Company</a></span></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="author-image">
                                        <img src="{!! asset('/frontend/images/grace-logo.png') !!}" alt="" class="img-circle">
                                    </div>
                                 For over 25 years the Grace Company has been the leading manufacturer of high quality quilting frames and quilting accessories
                                </div>
                            </div><!-- Post Single - Author End -->

                            <div class="line"></div>
{{--
                            <h4>Related Posts:</h4>

                          <div class="related-posts clearfix">

                            <div class="col_half nobottommargin">
                                @foreach($articles->slice(0, round($categories->count()/4)) as $article)
                                    <div class="mpost clearfix">
                                        @if($article->path)
                                        <div class="entry-image">
                                            <a href="{!! URL::route('dashboard.article.show', array('slug'=>$article->slug)) !!}">
                                            <img src="{!! url($article->path . $article->file_name) !!}" alt="Blog - {!! $article->title !!}"></a>
                                        </div>
                                        @else
                                        <div class="entry-image">
                                            <a href="{!! URL::route('dashboard.article.show', array('slug'=>$article->slug)) !!}">
                                            <img src="{!! url('frontendimages/blog/small/20.jpg') !!}" alt="Blog - {!! $article->title !!}"></a>
                                        </div>
                                        @endif
                                        <div class="entry-c">
                                            <div class="entry-title">
                                                <h4><a href="{!! URL::route('dashboard.article.show', array('slug'=>$article->slug)) !!}">
                                                {!! $article->title !!}</a></h4>
                                            </div>
                                            <ul class="entry-meta clearfix">
                                                <li><i class="icon-calendar3"></i>{!! $article->created_at !!}</li>
                                             <li><a href="#"><i class="icon-comments"></i> 12</a></li>
                                            </ul>
                                            <div class="entry-content">
                                                {!! $article->summary !!}
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                            </div>
                        </div> --}}

                            <!-- Comments
                            ============================================= -->
                            <div id="comments" class="clearfix">


                            </div><!-- #comments end -->

                        </div>

                        <!-- Pagination
                        ============================================= -->
                     {{--    <ul class="pager nomargin">
                            <li class="previous"><a href="#">&larr; Older</a></li>
                            <li class="next"><a href="#">Newer &rarr;</a></li>
                        </ul> --}}
                        <!-- .pager end -->

                    </div><!-- .postcontent end -->

                    <!-- Sidebar
                    ============================================= -->
                    <div class="sidebar nobottommargin clearfix">
                    @include('frontend/article/sidebar', array($tags, $categories))
                    </div><!-- .sidebar end -->

                </div>

            </div>

        </section>
@endsection







@section('footer_scripts')


@endsection

@section('pp_footer_scripts')

@endsection

@section('inlinejs')

@endsection