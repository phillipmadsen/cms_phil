 <div class="widget clearfix">
@include('frontend/elements/search')
    </div>

    <div class="widget categories widget_links clearfix" itemscope itemtype="http://schema.org/ItemList">
        <h3 itemprop="name">Blog Categories</h3>

        <div class="row">
            <div class=" ">
                <dl class=" ">
                <link itemprop="itemListOrder" href="http://schema.org/ItemListOrderDescending" />
                    @foreach($categories->slice(0, round($categories->count()/2)) as $category)
                    <dt itemprop="itemListElement">
                        <a href="{!! URL::route('dashboard.category', array('category'=>$category->slug)) !!}" itemprop="url" ><span itemprop="name" >{!! $category->title !!}</span></a>
                    </dt>
                    @endforeach
                </dl>
            </div>
          {{--   <div class="col_half col_last">
                <dl class="arrow">
                <link itemprop="itemListOrder" href="http://schema.org/ItemListOrderDescending" />
                    @foreach($categories->slice(round($categories->count()/2), ($categories->count())) as $category)
                    <dt itemprop="itemListElement">
                        <a href="{!! URL::route('dashboard.category', array('category'=>$category->slug)) !!}">{!! $category->title !!}</a>
                    </dt>
                    @endforeach
                </dl>
            </div> --}}

          {{--   <div class="">
                <ul class=" ">
                <link itemprop="itemListOrder" href="http://schema.org/ItemListOrderDescending" />
                    @foreach($categories->slice(round($categories->count()/2), ($categories->count())) as $category)
                    <li itemprop="itemListElement">
                        <a href="{!! URL::route('dashboard.category', array('category'=>$category->slug)) !!}">{!! $category->title !!}</a>
                    </li>
                    @endforeach
                </ul>
            </div> --}}

        </div>
    </div>
    <!--/.categories-->
    <div class="widget clearfix">
        <h4>Tag Cloud</h4>
        <div class="tagcloud">
            @foreach($tags as $tag)
                <a href="{!! URL::route('dashboard.tag', array('tag'=>$tag->slug)) !!}" itemprop="url" ><span itemprop="name" >{!! $tag->name !!}</span></a>
            @endforeach
        </div>
    </div>
    <!--/.tags-->

                <div class="widget clearfix">

               {{--                  <div class="tabs nobottommargin clearfix" id="sidebar-tabs">

                                    <ul class="tab-nav clearfix">
                                        <li><a href="#tabs-1">Popular</a></li>
                                        <li><a href="#tabs-2">Recent</a></li>
                                        <li><a href="#tabs-3"><i class="icon-comments-alt norightmargin"></i></a></li>
                                    </ul>

                                    <div class="tab-container">

                                        <div class="tab-content clearfix" id="tabs-1">
                                            <div id="popular-post-list-sidebar">

                                                <div class="spost clearfix">
                                                    <div class="entry-image">
                                                        <a href="#" class="nobg"><img class="img-circle" src="images/magazine/small/3.jpg" alt=""></a>
                                                    </div>
                                                    <div class="entry-c">
                                                        <div class="entry-title">
                                                            <h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
                                                        </div>
                                                        <ul class="entry-meta">
                                                            <li><i class="icon-comments-alt"></i> 35 Comments</li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="spost clearfix">
                                                    <div class="entry-image">
                                                        <a href="#" class="nobg"><img class="img-circle" src="images/magazine/small/2.jpg" alt=""></a>
                                                    </div>
                                                    <div class="entry-c">
                                                        <div class="entry-title">
                                                            <h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
                                                        </div>
                                                        <ul class="entry-meta">
                                                            <li><i class="icon-comments-alt"></i> 24 Comments</li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="spost clearfix">
                                                    <div class="entry-image">
                                                        <a href="#" class="nobg"><img class="img-circle" src="images/magazine/small/1.jpg" alt=""></a>
                                                    </div>
                                                    <div class="entry-c">
                                                        <div class="entry-title">
                                                            <h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
                                                        </div>
                                                        <ul class="entry-meta">
                                                            <li><i class="icon-comments-alt"></i> 19 Comments</li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="tab-content clearfix" id="tabs-2">
                                            <div id="recent-post-list-sidebar">

                                                <div class="spost clearfix">
                                                    <div class="entry-image">
                                                        <a href="#" class="nobg"><img class="img-circle" src="images/magazine/small/1.jpg" alt=""></a>
                                                    </div>
                                                    <div class="entry-c">
                                                        <div class="entry-title">
                                                            <h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
                                                        </div>
                                                        <ul class="entry-meta">
                                                            <li>10th July 2014</li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="spost clearfix">
                                                    <div class="entry-image">
                                                        <a href="#" class="nobg"><img class="img-circle" src="images/magazine/small/2.jpg" alt=""></a>
                                                    </div>
                                                    <div class="entry-c">
                                                        <div class="entry-title">
                                                            <h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
                                                        </div>
                                                        <ul class="entry-meta">
                                                            <li>10th July 2014</li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="spost clearfix">
                                                    <div class="entry-image">
                                                        <a href="#" class="nobg"><img class="img-circle" src="images/magazine/small/3.jpg" alt=""></a>
                                                    </div>
                                                    <div class="entry-c">
                                                        <div class="entry-title">
                                                            <h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
                                                        </div>
                                                        <ul class="entry-meta">
                                                            <li>10th July 2014</li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="tab-content clearfix" id="tabs-3">
                                            <div id="recent-post-list-sidebar">

                                                <div class="spost clearfix">
                                                    <div class="entry-image">
                                                        <a href="#" class="nobg"><img class="img-circle" src="images/icons/avatar.jpg" alt=""></a>
                                                    </div>
                                                    <div class="entry-c">
                                                        <strong>John Doe:</strong> Veritatis recusandae sunt repellat distinctio...
                                                    </div>
                                                </div>

                                                <div class="spost clearfix">
                                                    <div class="entry-image">
                                                        <a href="#" class="nobg"><img class="img-circle" src="images/icons/avatar.jpg" alt=""></a>
                                                    </div>
                                                    <div class="entry-c">
                                                        <strong>Mary Jane:</strong> Possimus libero, earum officia architecto maiores....
                                                    </div>
                                                </div>

                                                <div class="spost clearfix">
                                                    <div class="entry-image">
                                                        <a href="#" class="nobg"><img class="img-circle" src="images/icons/avatar.jpg" alt=""></a>
                                                    </div>
                                                    <div class="entry-c">
                                                        <strong>Site Admin:</strong> Deleniti magni labore laboriosam odio...
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>

                                </div> --}}

                            </div>







                        </div>

                    </div><!-- .sidebar end -->
</aside>