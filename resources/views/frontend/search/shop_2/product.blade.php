@extends('frontend/layouts/master')

@section('htmlschema')
itemscope itemtype="http://schema.org/Product"
@endsection

@section('seo')@endsection
@section('jsonschema')@endsection
@section('title')@endsection
@section('bodyschema')@endsection
@section('bodytag')@endsection
@section('header_styles')@endsection
@section('scripts')@endsection
@section('ppscripts')@endsection
@section('submenu')@endsection
@section('slider')@endsection
@section('intro')@endsection
@section('page-title')@endsection
@section('sidebar')@endsection
@section('content')


<div class="container clearfix">
    <div class="postcontent nobottommargin clearfix col_last">
        <div class="single-product">
            <div class="product">
                <div class="col_half">
                    <!-- Product Single - Gallery ============================================= -->
                    <div class="product-image">
                        <div class="fslider" data-pagi="false" data-arrows="false" data-thumbs="true">
                            <div class="flexslider">
                            <div class="flex-viewport" style="overflow: hidden; position: relative;">
                            <div class="slider-wrap" data-lightbox="gallery" style="width: 1000%; transition-duration: 0.6s; transform: translate3d(-1239px, 0px, 0px);">

                                <div class="slide clone" data-thumb="images/shop/thumbs/dress/3-2.jpg" aria-hidden="true" style="width: 413px; float: left; display: block;">
                                    <a href="{!! asset('/frontend/images/shop/dress/3-2.jpg') !!}" title="Pink Printed Dress - Back View" data-lightbox="">
                                        <img src="{!! asset('/frontend/images/shop/dress/3-2.jpg') !!}" alt="Pink Printed Dress" draggable="false">
                                    </a>
                                </div>

                                    <div class="slide" data-thumb="images/shop/thumbs/dress/3.jpg" style="width: 413px; float: left; display: block;">
                                        <a href="{!! asset('/frontend/images/shop/dress/3.jpg') !!}" title="Pink Printed Dress - Front View" data-lightbox="gallery-item">
                                            <img src="{!! asset('/frontend/images/shop/dress/3.jpg') !!}" alt="Pink Printed Dress" draggable="false">
                                        </a>
                                    </div>

                                    <div class="slide" data-thumb="images/shop/thumbs/dress/3-1.jpg" style="width: 413px; float: left; display: block;">
                                        <a href="{!! asset('/frontend/images/shop/dress/3-1.jpg') !!}" title="Pink Printed Dress - Side View" data-lightbox="gallery-item">
                                            <img src="{!! asset('/frontend/images/shop/dress/3-1.jpg') !!}" alt="Pink Printed Dress" draggable="false">
                                        </a>
                                    </div>

                                    <div class="slide flex-active-slide" data-thumb="images/shop/thumbs/dress/3-2.jpg" style="width: 413px; float: left; display: block;">
                                        <a href="{!! asset('/frontend/images/shop/dress/3-2.jpg') !!}" title="Pink Printed Dress - Back View" data-lightbox="gallery-item">
                                            <img src="{!! asset('/frontend/images/shop/dress/3-2.jpg') !!}" alt="Pink Printed Dress" draggable="false">
                                        </a>
                                    </div>

                                <div class="slide clone" data-thumb="images/shop/thumbs/dress/3.jpg" aria-hidden="true" style="width: 413px; float: left; display: block;">
                                <a href="images/shop/dress/3.jpg" title="Pink Printed Dress - Front View" data-lightbox="">
                                <img src="{!! asset('/frontend/images/shop/dress/3.jpg') !!}" alt="Pink Printed Dress" draggable="false">
                                </a>
                                </div>
                                </div>
                                </div>
                                <ol class="flex-control-nav flex-control-thumbs">
                                <li data-animate="zoomIn" data-delay="0" class="zoomIn animated">
                                <img src="{!! asset('/frontend/images/shop/thumbs/dress/3.jpg') !!}" class="" draggable="false">
                                </li>
                                <li data-animate="zoomIn" data-delay="200" class="zoomIn animated">
                                <img src="{!! asset('/frontend/images/shop/thumbs/dress/3-1.jpg') !!}" draggable="false" class="">
                                </li>
                                <li data-animate="zoomIn" data-delay="400" class="zoomIn animated">
                                <img src="{!! asset('/frontend/images/shop/thumbs/dress/3-2.jpg') !!}" draggable="false" class="flex-active">
                                </li>
                                </ol>
                                </div>
                        </div>

                        {{-- @if($product->onsale) --}}
                        <div class="sale-flash">Sale!</div>
                        {{-- @elseif($product->ispromo) --}}
                        <div class="sale-flash">New Promo!</div>
                        {{-- @endif --}}

                    </div><!-- Product Single - Gallery End -->
                </div>
                <div class="col_half col_last product-desc">
                    <!-- Product Single - Price ============================================= -->
                    @if($product->onsale)
                    <div class="product-price" itemprop="price"><del>$39.99</del> <ins>$24.99</ins></div>
                    @elseif($product->ispromo)
                    <!-- Product Single - Price End -->
                    <div class="product-price">Promo: <del>$39.99</del> <ins>$24.99</ins></div>
                    @endif
                    <!-- Product Single - Rating ============================================= -->
                    <div class="product-rating">
                        <i class="icon-star3"></i>
                        <i class="icon-star3"></i>
                        <i class="icon-star3"></i>
                        <i class="icon-star-half-full"></i>
                        <i class="icon-star-empty"></i>
                    </div><!-- Product Single - Rating End -->
                    <div class="clear"></div>
                    <div class="line"></div>
                    <!-- Product Single - Quantity & Cart Button ============================================= -->
                    <form class="cart nobottommargin clearfix" method="post" enctype="multipart/form-data">
                        <div class="quantity clearfix">
                            <input type="button" value="-" class="minus">
                            <input type="text" step="1" min="1" name="quantity" value="1" title="Qty" class="qty" size="4">
                            <input type="button" value="+" class="plus">
                        </div>
                        <button type="submit" class="add-to-cart button nomargin">Add to cart</button>
                    </form><!-- Product Single - Quantity & Cart Button End -->
                    <div class="clear"></div>
                    <div class="line"></div>
                    @if ($product->product_short_description)
                        <!-- Product Single - Short Description ============================================= -->
                        {!! $product->product_short_description !!}
                        <ul class="iconlist">
                            <li><i class="icon-caret-right"></i> Dynamic Color Options</li>
                            <li><i class="icon-caret-right"></i> Lots of Size Options</li>
                            <li><i class="icon-caret-right"></i> 30-Day Return Policy</li>
                        </ul><!-- Product Single - Short Description End -->
                    @endif
                    <!-- Product Single - Meta ============================================= -->
                    <div class="panel panel-default product-meta">
                        <div class="panel-body"  itemprop="brand" itemscope itemtype="http://schema.org/Organization">
                            <span itemprop="name">Grace</span></div>
                            <div itemprop="manufacturer" itemscope itemtype="http://schema.org/Organization">
                                Manufactured by: <span itemprop="name">{!! $product->manufacturer !!}</span></div>
                            <div>Model: <span itemprop="model">{!! $product->model !!}</span></div>
                            <div>Product ID: <span itemprop="productID">{!! $product->id !!}</span></div>
                            <div>Condition: <link itemprop="itemCondition" href="http://schema.org/NewCondition" /> New</div>

                            <span itemprop="productID" class="sku_wrapper">SKU: <span class="sku">{!! $product->upc !!}</span></span>
                            <span class="posted_in">Category: <a href="#" rel="tag">{!! $product->product_category !!}</a>.</span>
                            <span class="tagged_as">Tags:
                            <a href="#" rel="tag">Pink</a>,
                            <a href="#" rel="tag">Short</a>,
                            <a href="#" rel="tag">Dress</a>,
                            <a href="#" rel="tag">Printed</a>.
                            </span>

                            <div itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
                        <span itemprop="ratingValue">rating</span> based on <span itemprop="reviewCount">reviewcount</span> reviews</div>
                        <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                        <span itemprop="price">price</span><link itemprop="itemCondition" href="http://schema.org/NewCondition" /> New
                        </div>
                        </div>
                        </div>
                    </div><!-- Product Single - Meta End -->

                    @include('frontend.shop.partials.layout.product.social-share')
                </div>
                <div class="col_full nobottommargin">
                    <div class="tabs clearfix nobottommargin ui-tabs ui-widget ui-widget-content ui-corner-all" id="tab-1">
                        <ul class="tab-nav clearfix ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all" role="tablist">
                            <li class="ui-state-default ui-corner-top ui-tabs-active ui-state-active" role="tab" tabindex="0" aria-controls="tabs-1" aria-labelledby="ui-id-1" aria-selected="true"><a href="#tabs-1" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-1"><i class="icon-align-justify2"></i><span class="hidden-xs"> Description</span></a></li>
                            <li class="ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="tabs-2" aria-labelledby="ui-id-2" aria-selected="false"><a href="#tabs-2" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-2"><i class="icon-info-sign"></i><span class="hidden-xs"> Additional Information</span></a></li>
                            <li class="ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="tabs-3" aria-labelledby="ui-id-3" aria-selected="false"><a href="#tabs-3" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-3"><i class="icon-star3"></i><span class="hidden-xs"> Reviews (2)</span></a></li>
                        </ul>
                        <div class="tab-container">
                            <div class="tab-content clearfix ui-tabs-panel ui-widget-content ui-corner-bottom" id="tabs-1" aria-labelledby="ui-id-1" role="tabpanel" aria-expanded="true" aria-hidden="false">
                                @include('frontend.shop.partials.layout.product.description')
                            </div>
                            <div class="tab-content clearfix ui-tabs-panel ui-widget-content ui-corner-bottom" id="tabs-2" aria-labelledby="ui-id-2" role="tabpanel" aria-expanded="false" aria-hidden="true" style="display: none;">
                                @include('frontend.shop.partials.layout.product.additional-info')
                            </div>
                            <div class="tab-content clearfix ui-tabs-panel ui-widget-content ui-corner-bottom" id="tabs-3" aria-labelledby="ui-id-3" role="tabpanel" aria-expanded="false" aria-hidden="true" style="display: none;">
                                @include('frontend.shop.partials.layout.product.reviews')
                            </div>
                        </div>
                    </div>
                    <div class="line"></div>
                    @include('frontend.shop.partials.layout.product.brandinfo')
                </div>
            </div>
        </div>
        <div class="clear"></div><div class="line"></div>
        @include('frontend.shop.partials.layout.product.related-products')
    </div>
    @include('frontend.shop.partials.layout.product.sidebar')
</div>




@endsection

@section('footer_scripts')


@endsection

@section('pp_footer_scripts')
@endsection

@section('inlinejs')

@endsection