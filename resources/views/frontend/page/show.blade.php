@extends('frontend/layout/right-sidebar')


@section('htmlschema')
itemscope itemtype="http://schema.org/"
@endsection

@section('seo')

@endsection

@section('jsonschema')

@endsection

@section('title')
{!! $page->title !!}
@endsection

@section('bodyschema')
@endsection

@section('bodytag')
rows page
@endsection

@section('header_styles')
@endsection

@section('scripts')
@endsection

@section('ppscripts')@endsection




@section('submenu')
@include('frontend.layout.partials.menu.submenu-items', ['items'=> $menu_pagedisclusures->roots()])
@endsection

@section('page-title')
<!-- Page Title
    ============================================= -->
    <section id="page-title">

        <div class="container clearfix">
            <h1>{!! $page->title !!}</h1>
            <span>{!! $page->subtitle  !!}</span>
            @yield('partial/breadcrumbs', Breadcrumbs::render('page.show', $page))
        </div>

    </section>


@endsection


@section('content')
<!-- Content
============================================= -->
<section id="content">

    <div class="content-wrap">

        <div class="container clearfix">

            <!-- Post Content
            ============================================= -->
            <div class="postcontent nobottommargin clearfix">
            {!! $page->content !!}
            </div><!-- .postcontent end -->
            <!-- Sidebar
            ============================================= -->
            <div class="sidebar nobottommargin col_last clearfix">
                <div class="sidebar-widgets-wrap">
                <h4>Pages</h4>
                <div class="widget widget_links clearfix">
                {!! $menu_disclosures->asUl() !!}
                </div>
          {{--       <div id="toc-content"></div>
                    <h4>Contents</h4>
                    <ul>
                        <li><a href="#"><div>About Us</div></a></li>
                        <li><a href="#"><div>About Us - Layout 2</div></a></li>
                        <li><a href="#"><div>About Me</div></a></li>
                        <li><a href="#"><div>Team Members</div></a></li>
                    </ul>
                    <div class="widget clearfix">
                        <h4>Embed Videos</h4>
                        <iframe src="//player.vimeo.com/video/103927232" width="500" height="250" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div> --}}
                </div>
            </div><!-- .sidebar end -->

        </div>

    </div>

</section><!-- #content end -->
@endsection

@section('footer_scripts')@endsection

@section('pp_footer_scripts-off')
<script>
var ToC =
  "<nav role='navigation' class='table-of-contents'>" +
    "<h2>On this page:</h2>" +
    "<ul>";

var newLine, el, title, link;

$(".postcontent h2, .postcontent h3").each(function() {

  el = $(this);
  title = el.text();
  link = "#" + el.attr("id");

  newLine =
    "<li>" +
      "<a href='" + link + "'>" +
        title +
      "</a>" +
    "</li>";

  ToC += newLine;

});

ToC +=
   "</ul>" +
  "</nav>";

$("#toc-content").prepend(ToC);
</script>
@endsection

@section('inlinejs')@endsection