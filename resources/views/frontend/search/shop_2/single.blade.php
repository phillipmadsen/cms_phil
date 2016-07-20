@extends('frontend/layouts/shop')

@section('goodrelations')

@endsection

@section('seo')
<meta name="Description" content="" />









@if($product->primary_image)<meta property="og:image" content="{!! $product->primary_image !!}" />@endif
@if($product->second_image)<meta property="og:image" content="{!! $product->second_image !!}" />@endif
@if($product->third_image)<meta property="og:image" content="{!! $product->third_image !!}" />@endif
@if($product->fourth_image)<meta property="og:image" content="{!! $product->fourth_image !!}" />@endif
@if($product->fifth_image)<meta property="og:image" content="{!! $product->fifth_image !!}" />@endif
@if($product->banner_image)<meta property="og:image" content="{!! $product->banner_image !!}" />@endif
@if($product->admin_image)<meta property="og:image" content="{!! $product->admin_image !!}" />@endif
@if($product->thumb_image)<meta property="og:image" content="{!! $product->thumb_image !!}" />@endif






@endsection
@section('jsonschema')@endsection

@section('title')
{!! $product->name !!} | Grace Product
@endsection

@section('bodyschema')@endsection

@section('page-title')

        <section id="page-title">

            <div class="container clearfix">
                <h1>{!! $product->name !!}</h1>
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="">Shop</a></li>
                    <li class="active">Product</li>
                </ol>
            </div>

        </section><!-- #page-title end -->

@endsection

@section('content')

<section id="content" style="margin-bottom: 0px;">

<div class="content-wrap">

<div class="container clearfix">

    <div class="single-product">

        <div class="product">

            <div class="col_two_fifth">

                <!-- Product Single - Gallery
                ============================================= -->
                <div class="product-image">
                    <div class="fslider" data-pagi="false" data-arrows="false" data-thumbs="true">
                        <div class="flexslider">
                            <div class="slider-wrap" data-lightbox="gallery">
                                @if($product->primary_image)
                                <div class="slide" data-thumb="{!! $product->primary_image !!}">
                                    <a href="{!! $product->primary_image !!}" title="{!! $product->primary_image_label !!}" data-lightbox="gallery-item">
                                        <img src="{!! $product->primary_image !!}" alt="{!! $product->primary_image_label !!}">
                                    </a>
                                </div>
                                @else
                                    <div class="slide" data-thumb="http://placehold.it/720x960/4EA5FF/000000?text=thumb+1">
                                        <a href="http://placehold.it/720x960/E8117F/ffffff?text=Product+Image+1+lightbox" title="Pink Printed Dress - Front View" data-lightbox="gallery-item">
                                            <img src="http://placehold.it/720x960/E8117F/ffffff?text=Product+Image+1" alt="Pink Printed Dress">
                                        </a>
                                    </div>
                                @endif
                                @if($product->second_image)
                                <div class="slide" data-thumb="{!! $product->second_image !!}">
                                    <a href="{!! $product->second_image !!}" title="{!! $product->second_image_label !!}" data-lightbox="gallery-item">
                                        <img src="{!! $product->second_image !!}" alt="{!! $product->second_image_label !!}">
                                    </a>
                                </div>
                                @else
                                <div class="slide" data-thumb="http://placehold.it/720x960/4EA5FF/000000?text=thumb+2">
                                    <a href="http://placehold.it/720x960/E8117F/ffffff?text=Product+Image+2+lightbox" title="Pink Printed Dress - Side View" data-lightbox="gallery-item">
                                        <img src="http://placehold.it/720x960/E8117F/ffffff?text=Product+Image+2" alt="Pink Printed Dress">
                                    </a>
                                </div>
                                @endif
                                @if($product->third_image)
                                <div class="slide" data-thumb="{!! $product->third_image !!}">
                                    <a href="{!! $product->third_image !!}" title="{!! $product->third_image_label !!}" data-lightbox="gallery-item">
                                        <img src="{!! $product->third_image !!}" alt="{!! $product->third_image_label !!}">
                                    </a>
                                </div>
                                @else
                                <div class="slide" data-thumb="http://placehold.it/720x960/4EA5FF/000000?text=thumb+3">
                                    <a href="http://placehold.it/720x960/E8117F/ffffff?text=Product+Image+3+lightbox" title="Pink Printed Dress - Back View" data-lightbox="gallery-item">
                                        <img src="http://placehold.it/720x960/E8117F/ffffff?text=Product+Image+3" alt="Pink Printed Dress">
                                    </a>
                                </div>
                                @endif
                                @if($product->fourth_image)
                                <div class="slide" data-thumb="{!! $product->fourth_image !!}">
                                    <a href="{!! $product->fourth_image !!}" title="{!! $product->fourth_image_label !!}" data-lightbox="gallery-item">
                                        <img src="{!! $product->fourth_image !!}" alt="{!! $product->fourth_image_label !!}">
                                    </a>
                                </div>
                                @else
                                <div class="slide" data-thumb="http://placehold.it/720x960/4EA5FF/000000?text=thumb+3">
                                    <a href="http://placehold.it/720x960/E8117F/ffffff?text=Product+Image+3+lightbox" title="Pink Printed Dress - Back View" data-lightbox="gallery-item">
                                        <img src="http://placehold.it/720x960/E8117F/ffffff?text=Product+Image+3" alt="Pink Printed Dress">
                                    </a>
                                </div>
                                @endif
                                @if($product->fifth_image)
                                <div class="slide" data-thumb="{!! $product->fifth_image !!}">
                                    <a href="{!! $product->fifth_image !!}" title="{!! $product->fifth_image_label !!}" data-lightbox="gallery-item">
                                        <img src="{!! $product->fifth_image !!}" alt="{!! $product->fifth_image_label !!}">
                                    </a>
                                </div>
                                @else
                                <div class="slide" data-thumb="http://placehold.it/720x960/4EA5FF/000000?text=thumb+3">
                                    <a href="http://placehold.it/720x960/E8117F/ffffff?text=Product+Image+3+lightbox" title="Pink Printed Dress - Back View" data-lightbox="gallery-item">
                                        <img src="http://placehold.it/720x960/E8117F/ffffff?text=Product+Image+3" alt="Pink Printed Dress">
                                    </a>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="sale-flash">Sale!</div>
                </div><!-- Product Single - Gallery End -->

            </div>

            <div class="col_two_fifth product-desc">

                <!-- Product Single - Price ============================================= -->
                <div class="product-price"><del>${!! $product->price !!}</del> <ins>${!! $product->sale_price !!}</ins></div>
                <!-- Product Single - Price End -->

                <!-- Product Single - Rating ============================================= -->
                <div class="product-rating">
                    <i class="icon-star3"></i>
                    <i class="icon-star3"></i>
                    <i class="icon-star3"></i>
                    <i class="icon-star-half-full"></i>
                    <i class="icon-star-empty"></i>
                </div>
                <!-- Product Single - Rating End -->

                <div class="clear"></div>
                <div class="line"></div>

                <!-- Product Single - Quantity & Cart Button
                ============================================= -->
                <form class="cart nobottommargin clearfix" method="post" enctype='multipart/form-data'>
                    <div class="quantity clearfix">
                        <input type="button" value="-" class="minus">
                        <input type="text" step="1" min="1"  name="quantity" value="1" title="Qty" class="qty" size="4" />
                        <input type="button" value="+" class="plus">
                    </div>
                    <button type="submit" class="add-to-cart button nomargin">Add to cart</button>
                </form><!-- Product Single - Quantity & Cart Button End -->

                <div class="clear"></div>
                <div class="line"></div>

                <!-- Product Single - Short Description ============================================= -->

@if($product->product_short_description)
<div class="short-desc">
{!! $product->product_short_description !!}

</div>

<br style="clear:both" />
@endif

                <ul class="iconlist">
                    @if($product->list_item_1)<li><i class="icon-caret-right"></i> {!! $product->list_item_1 !!}</li>@endif
                    @if($product->list_item_2)<li><i class="icon-caret-right"></i> {!! $product->list_item_2 !!}</li>@endif
                    @if($product->list_item_3)<li><i class="icon-caret-right"></i> {!! $product->list_item_3 !!}</li>@endif
                    @if($product->list_item_4)<li><i class="icon-caret-right"></i> {!! $product->list_item_4 !!}</li>@endif
                    @if($product->list_item_5)<li><i class="icon-caret-right"></i> {!! $product->list_item_5 !!}</li>@endif
                </ul><!-- Product Single - Short Description End -->

                <!-- Product Single - Meta
                ============================================= -->
                <div class="panel panel-default product-meta">
                    <div class="panel-body">
                        <span itemprop="productID" class="sku_wrapper">SKU: <span class="sku">{!! $product->sku !!}</span></span>
                        <span class="posted_in">Category: <a href="#" rel="tag">{!! $product->category !!}</a>.</span>
                        <span class="tagged_as">Tags: <a href="#" rel="tag">Pink</a>, <a href="#" rel="tag">Short</a>, <a href="#" rel="tag">Dress</a>, <a href="#" rel="tag">Printed</a>.</span>
                    </div>
                </div><!-- Product Single - Meta End -->

                <!-- Product Single - Share ============================================= -->
                <div class="si-share noborder clearfix">
                    <span>Share:</span>
                    <div>
                        <a href="#" class="social-icon si-borderless si-facebook"> <i class="icon-facebook"></i> <i class="icon-facebook"></i> </a>
                        <a href="#" class="social-icon si-borderless si-twitter"> <i class="icon-twitter"></i> <i class="icon-twitter"></i> </a>
                        <a href="#" class="social-icon si-borderless si-pinterest"> <i class="icon-pinterest"></i> <i class="icon-pinterest"></i> </a>
                        <a href="#" class="social-icon si-borderless si-gplus"> <i class="icon-gplus"></i> <i class="icon-gplus"></i> </a>
                        <a href="#" class="social-icon si-borderless si-rss"> <i class="icon-rss"></i> <i class="icon-rss"></i> </a>
                        <a href="#" class="social-icon si-borderless si-email3"> <i class="icon-email3"></i> <i class="icon-email3"></i> </a>
                    </div>
                </div><!-- Product Single - Share End -->

            </div>

            <div class="col_one_fifth col_last">

                <a href="#" title="Brand Logo" class="hidden-xs">
                @if($product->brand_image)
                <img class="image_fade" src="{{ $product->brand_image }}" alt="Brand Logo">
                @else
                <img class="image_fade" src="http://placehold.it/192x56/000000/ffffff?text=BRAND+IMAGE" alt="Brand Logo">
                @endif
                </a>

                <div class="divider divider-center"><i class="icon-circle-blank"></i></div>

                <div class="feature-box fbox-plain fbox-dark fbox-small">
                    <div class="fbox-icon">
                        <i class="icon-thumbs-up2"></i>
                    </div>
                    <h3>100% Grace</h3>
                    <p class="notopmargin">We guarantee you the sale of Original Grace products.</p>
                </div>

                <div class="feature-box fbox-plain fbox-dark fbox-small">
                    <div class="fbox-icon">
                        <i class="icon-credit-cards"></i>
                    </div>
                    <h3>Payment Options</h3>
                    <p class="notopmargin">We accept Visa, MasterCard and American Express.</p>
                </div>

                <div class="feature-box fbox-plain fbox-dark fbox-small">
                    <div class="fbox-icon">
                        <i class="icon-truck2"></i>
                    </div>
                    <h3>Free Shipping</h3>
                    <p class="notopmargin">Free Delivery to US Locations on orders above $4000.</p>
                </div>

                <div class="feature-box fbox-plain fbox-dark fbox-small">
                    <div class="fbox-icon">
                        <i class="icon-undo"></i>
                    </div>
                    <h3>30-Days Returns</h3>
                    <p class="notopmargin">Return or exchange items purchased within 30 days.</p>
                </div>

            </div>

            <div class="col_full nobottommargin">

                <div class="tabs clearfix nobottommargin" id="tab-1">

                    <ul class="tab-nav clearfix">
                        <li><a href="#tabs-1"><i class="icon-align-justify2"></i><span class="hidden-xs"> Description</span></a></li>
                        <li><a href="#tabs-2"><i class="icon-info-sign"></i><span class="hidden-xs"> Additional Information</span></a></li>
                        <li><a href="#tabs-3"><i class="icon-star3"></i><span class="hidden-xs"> Reviews (2)</span></a></li>
                    </ul>

                    <div class="tab-container">

                        <div class="tab-content clearfix" id="tabs-1">
                           {!! nl2br(e($product->description)) !!}
                        </div>
                        <div class="tab-content clearfix" id="tabs-2">

                            <table class="table table-striped table-bordered">
                                <tbody>
                                    <tr>
                                        <td>Size</td>
                                        <td>Small, Medium &amp; Large</td>
                                    </tr>
                                    <tr>
                                        <td>Color</td>
                                        <td>Pink &amp; White</td>
                                    </tr>
                                    <tr>
                                        <td>Waist</td>
                                        <td>26 cm</td>
                                    </tr>
                                    <tr>
                                        <td>Length</td>
                                        <td>40 cm</td>
                                    </tr>
                                    <tr>
                                        <td>Chest</td>
                                        <td>33 inches</td>
                                    </tr>
                                    <tr>
                                        <td>Fabric</td>
                                        <td>Cotton, Silk &amp; Synthetic</td>
                                    </tr>
                                    <tr>
                                        <td>Warranty</td>
                                        <td>3 Months</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                        <div class="tab-content clearfix" id="tabs-3">

                            <div id="reviews" class="clearfix">

                                <ol class="commentlist clearfix">

                                    <li class="comment even thread-even depth-1" id="li-comment-1">
                                        <div id="comment-1" class="comment-wrap clearfix">

                                            <div class="comment-meta">
                                                <div class="comment-author vcard">
                                                    <span class="comment-avatar clearfix">
                                                    <img alt='' src='http://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=60' height='60' width='60' /></span>
                                                </div>
                                            </div>

                                            <div class="comment-content clearfix">
                                                <div class="comment-author">John Doe<span><a href="#" title="Permalink to this comment">April 24, 2014 at 10:46AM</a></span></div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo perferendis aliquid tenetur. Aliquid, tempora, sit aliquam officiis nihil autem eum at repellendus facilis quaerat consequatur commodi laborum saepe non nemo nam maxime quis error tempore possimus est quasi reprehenderit fuga!</p>
                                                <div class="review-comment-ratings">
                                                    <i class="icon-star3"></i>
                                                    <i class="icon-star3"></i>
                                                    <i class="icon-star3"></i>
                                                    <i class="icon-star3"></i>
                                                    <i class="icon-star-half-full"></i>
                                                </div>
                                            </div>

                                            <div class="clear"></div>

                                        </div>
                                    </li>

                                    <li class="comment even thread-even depth-1" id="li-comment-1">
                                        <div id="comment-1" class="comment-wrap clearfix">

                                            <div class="comment-meta">
                                                <div class="comment-author vcard">
                                                    <span class="comment-avatar clearfix">
                                                    <img alt='' src='http://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=60' height='60' width='60' /></span>
                                                </div>
                                            </div>

                                            <div class="comment-content clearfix">
                                                <div class="comment-author">Mary Jane<span><a href="#" title="Permalink to this comment">June 16, 2014 at 6:00PM</a></span></div>
                                                <p>Quasi, blanditiis, neque ipsum numquam odit asperiores hic dolor necessitatibus libero sequi amet voluptatibus ipsam velit qui harum temporibus cum nemo iste aperiam explicabo fuga odio ratione sint fugiat consequuntur vitae adipisci delectus eum incidunt possimus tenetur excepturi at accusantium quod doloremque reprehenderit aut expedita labore error atque?</p>
                                                <div class="review-comment-ratings">
                                                    <i class="icon-star3"></i>
                                                    <i class="icon-star3"></i>
                                                    <i class="icon-star3"></i>
                                                    <i class="icon-star-empty"></i>
                                                    <i class="icon-star-empty"></i>
                                                </div>
                                            </div>

                                            <div class="clear"></div>

                                        </div>
                                    </li>

                                </ol>

                                <!-- Modal Reviews
                                ============================================= -->
                                <a href="#" data-toggle="modal" data-target="#reviewFormModal" class="button button-3d nomargin fright">Add a Review</a>

                                <div class="modal fade" id="reviewFormModal" tabindex="-1" role="dialog" aria-labelledby="reviewFormModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title" id="reviewFormModalLabel">Submit a Review</h4>
                                            </div>
                                            <div class="modal-body">
                                                <form class="nobottommargin" id="template-reviewform" name="template-reviewform" action="#" method="post">

                                                    <div class="col_half">
                                                        <label for="template-reviewform-name">Name <small>*</small></label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="icon-user"></i></span>
                                                            <input type="text" id="template-reviewform-name" name="template-reviewform-name" value="" class="form-control required" />
                                                        </div>
                                                    </div>

                                                    <div class="col_half col_last">
                                                        <label for="template-reviewform-email">Email <small>*</small></label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon">@</span>
                                                            <input type="email" id="template-reviewform-email" name="template-reviewform-email" value="" class="required email form-control" />
                                                        </div>
                                                    </div>

                                                    <div class="clear"></div>

                                                    <div class="col_full col_last">
                                                        <label for="template-reviewform-rating">Rating</label>
                                                        <select id="template-reviewform-rating" name="template-reviewform-rating" class="form-control">
                                                            <option value="">-- Select One --</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                    </div>

                                                    <div class="clear"></div>

                                                    <div class="col_full">
                                                        <label for="template-reviewform-comment">Comment <small>*</small></label>
                                                        <textarea class="required form-control" id="template-reviewform-comment" name="template-reviewform-comment" rows="6" cols="30"></textarea>
                                                    </div>

                                                    <div class="col_full nobottommargin">
                                                        <button class="button button-3d nomargin" type="submit" id="template-reviewform-submit" name="template-reviewform-submit" value="submit">Submit Review</button>
                                                    </div>

                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->
                                <!-- Modal Reviews End -->

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>







    <div class="clear"></div><div class="line"></div>

{{-- related products here --}}

</div>

</div>
</section>

@endsection
