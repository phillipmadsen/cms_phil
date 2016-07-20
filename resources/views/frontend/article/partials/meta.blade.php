    <meta name="title" content="{{{ isset($article->meta_title) ? $article->meta_title : $article->title }}}">
    <meta name="description" content="{!! $article->meta_description !!}">
    <meta name="keywords" content="{!! $article->meta_keywords !!}">
    <meta name="author"content="The Grace Company"/>
    <!-- Open Graph Protocol Meta -->
    <meta property='og:site_name' value='The Grace Company'/>
    <meta property='og:title' content='{!! $article->fb_title !!}' />
    <meta property='og:url' content='{!! url() !!}{!! $url = Request::url() !!}' />
    <meta property='og:image' content='{!! $article->file_name !!}' />
    <meta property='og:image:url' content='{!! url() !!}{!! $article->path !!}{!! $article->file_name !!}' />
    <meta property='og:image:width' content='1200' />
    <meta property='og:image:height' content='630' />
    <meta property='og:image:type' content='image/jpeg' />
    <meta property='og:description' content='{!! $article->meta_description !!} on FaceBook' />
    <!-- END Open Graph Protocol Meta -->
    <!-- Twitter Meta -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="{!! $article->gp_title !!}" />
    <meta name="twitter:description" content="{!! $article->meta_description !!} on Twitter" />
    <meta name="twitter:site" content="@TheGraceCompany" />
    <!-- END Twitter Protocol Meta -->
    <!-- Google Meta -->
    <!-- END Google Meta -->
