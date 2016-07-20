@extends('frontend/layout/product')

@section('htmlschema')
itemscope itemtype="http://schema.org/Product"
@endsection

@section('seo')@endsection

@section('jsonschema')@endsection

@section('title')
{!! $product->name !!} | Manufactured By The Grace Company
@endsection

@section('bodyschema')@endsection
@section('bodytag')@endsection
@section('header_styles')@endsection
@section('scripts')@endsection
@section('ppscripts')@endsection
@section('submenu')@endsection
@section('slider')@endsection
@section('intro')@endsection


@section('page-title')
<section id="page-title">

    <div class="container clearfix">
        <h1>{!! $product->name !!}</h1>
        <span
        >{!! $product->subtitle !!}</span>
        <ol class="breadcrumb">
            <li><a href="{{ url(getLang().'/') }}">Home</a></li>
            <li><a href="{{ url(getLang().'/shop') }}">Shop</a></li>
            <li class="active">Product</li>
        </ol>
    </div>

</section>
@endsection

@section('content')

        <section id="content">

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
                                                @if($product->path)
                                           {{--     @if($product->file_name) --}}
                                                    <div class="slide" data-thumb="{!! url($product->path . $product->file_name) !!}" style="width: 413px; float: left; display: block;">
                                                        <a href="{!! url($product->path . $product->file_name) !!}" title="{!! $product->name !!} - Front View" data-lightbox="gallery-item">
                                                            <img src="{!! url($product->path . $product->file_name) !!}" alt="{!! $product->name !!} image" draggable="false">
                                                        </a>
                                                    </div>
                                                @else
                                                    <div class="slide" data-thumb="http://placehold.it/413" aria-hidden="true" style="width: 413px; float: left; display: block;">
                                                        <a href="http://placehold.it/720x960?text=image+one" title="{!! $product->name !!}" data-lightbox="">
                                                            <img src="http://placehold.it/720x960?text=image+two" alt="{!! $product->name !!} image" draggable="false">
                                                        </a>
                                                    </div>
                                                     <div class="slide" data-thumb="http://placehold.it/413" aria-hidden="true" style="width: 413px; float: left; display: block;">
                                                        <a href="http://placehold.it/720x960?text=image+three" title="{!! $product->name !!}" data-lightbox="">
                                                            <img src="http://placehold.it/720x960?text=image+four" alt="{!! $product->name !!} image" draggable="false">
                                                        </a>
                                                    </div>
                                                    <div class="slide" data-thumb="http://placehold.it/413" aria-hidden="true" style="width: 413px; float: left; display: block;">
                                                        <a href="http://placehold.it/720x960?text=image+five" title="{!! $product->name !!}" data-lightbox="">
                                                            <img src="http://placehold.it/720x960?text=image+six" alt="{!! $product->name !!} image" draggable="false">
                                                        </a>
                                                    </div>
                                                @endif
                                            {{--       <div class="slide" data-thumb="images/shop/thumbs/dress/3.jpg"><a href="images/shop/dress/3.jpg" title="Pink Printed Dress - Front View" data-lightbox="gallery-item"><img src="images/shop/dress/3.jpg" alt="Pink Printed Dress"></a></div>
                                                <div class="slide" data-thumb="images/shop/thumbs/dress/3-1.jpg"><a href="images/shop/dress/3-1.jpg" title="Pink Printed Dress - Side View" data-lightbox="gallery-item"><img src="images/shop/dress/3-1.jpg" alt="Pink Printed Dress"></a></div>
                                                <div class="slide" data-thumb="images/shop/thumbs/dress/3-2.jpg"><a href="images/shop/dress/3-2.jpg" title="Pink Printed Dress - Back View" data-lightbox="gallery-item"><img src="images/shop/dress/3-2.jpg" alt="Pink Printed Dress"></a></div> --}}
                                            </div>
                                        </div>
                                    </div>
                                    @if($product->sale_price)
                                    <div class="sale-flash">Sale!</div>
                                    @endif
                                </div><!-- Product Single - Gallery End -->

                            </div>

                            <div class="col_two_fifth product-desc">

                                <!-- Product Single - Price
                                ============================================= -->
                                <!-- Product Single - Price ============================================= -->
                                @if($product->sale_price)
                                <div class="product-price" itemprop="price"><del>$39.99</del> <ins>$24.99</ins></div>
                                @elseif($product->ispromo)
                                <!-- Product Single - Price End -->
                                <div class="product-price" itemprop="price">Promo: <del>$39.99</del> <ins>$24.99</ins></div>
                                @else
                                <!-- Product Single - Price End -->
                                <div class="product-price" itemprop="price"> <ins>${!! $product->price !!}</ins></div>
                                @endif

                                <!-- Product Single - Rating
                                ============================================= -->
                                <div class="product-rating">
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star3"></i>
                                    <i class="icon-star-half-full"></i>
                                    <i class="icon-star-empty"></i>
                                </div><!-- Product Single - Rating End -->

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

                                <!-- Product Single - Short Description
                                ============================================= -->
                               @if ($product->short_description)
                                <!-- Product Single - Short Description ============================================= -->
                                {!! $product->short_description !!}
                                <br />
                                <br />
                                <ul class="iconlist">
                                @if($product->bullet_1)
                                        @if($product->bullet_1)
                                        <li><i class="icon-caret-right"></i>{!! $product->bullet_1 !!}</li>
                                        @endif
                                        @if($product->bullet_2)
                                        <li><i class="icon-caret-right"></i>{!! $product->bullet_2 !!}</li>
                                        @endif
                                        @if($product->bullet_3)
                                        <li><i class="icon-caret-right"></i>{!! $product->bullet_3 !!}</li>
                                        @endif
                                        @if($product->bullet_4)
                                        <li><i class="icon-caret-right"></i>{!! $product->bullet_4 !!}</li>
                                        @endif
                                        @if($product->bullet_5)
                                        <li><i class="icon-caret-right"></i>{!! $product->bullet_5 !!}</li>
                                        @endif
                                        @if($product->bullet_6)
                                        <li><i class="icon-caret-right"></i>{!! $product->bullet_6 !!}</li>
                                        @endif
                                    @else
           
                                    @endif
                                    </ul><!-- Product Single - Short Description End -->
                                @endif

                                <!-- Product Single - Meta
                                ============================================= -->
                                <div class="panel panel-default product-meta">
                                    <div class="panel-body" itemprop="brand" itemscope itemtype="http://schema.org/Organization">
                                    <span itemprop="name">Brand: <strong>Grace </strong></span>
                   
                                        <div itemprop="manufacturer" itemscope itemtype="http://schema.org/Organization">
                                          @if($product->manufacturer)  
                                          Manufactured by: <span itemprop="name"><strong>{!! $product->manufacturer !!}</strong></span>
                                          @else
                                          Manufactured by: <strong>The Grace Company</strong>
                                          @endif
                                        </div>  

                        
                                        <div>Model: <span itemprop="model">{!! $product->mpn !!}</span></div>  
                                        <div>Product ID: <span itemprop="productID">{!! $product->id !!}</span></div>  
                                        <div>Condition: <link itemprop="itemCondition" href="http://schema.org/NewCondition" /> New</div>  

                                        <span itemprop="productID" class="sku_wrapper">SKU: <span class="sku"><strong>{!! $product->sku !!}</strong></span></span>
                                        <span itemprop="productUPC" class="sku_wrapper">UPC: <span class="upc"><strong>{!! $product->upc !!}</strong></span></span>
                                        {{--  <span class="posted_in">Category: <a href="#" rel="tag">{!! $product->category !!}</a>.</span>  --}}
                                        {{--  <span class="tagged_as">Tags:
                                            <a href="#" rel="tag">Pink</a>,
                                            <a href="#" rel="tag">Short</a>,
                                            <a href="#" rel="tag">Dress</a>,
                                            <a href="#" rel="tag">Printed</a>.
                                        </span> --}}
                                        @if($product->rating)
                                        <div itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
                                            <span itemprop="ratingValue">rating</span> based on <span itemprop="reviewCount">reviewcount</span> reviews</div>
                                            <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                             <link itemprop="itemCondition" href="http://schema.org/NewCondition" /> New
                                            </div>
                                        </div>
                                        @endif
                                    </div>
                                </div><!-- Product Single - Meta End -->

                                <!-- Product Single - Share
                                ============================================= -->
                                <div class="si-share noborder clearfix">
                                    <span>Share:</span>
                                    <div>
                                        <a href="#" class="social-icon si-borderless si-facebook">
                                            <i class="icon-facebook"></i>
                                            <i class="icon-facebook"></i>
                                        </a>
                                        <a href="#" class="social-icon si-borderless si-twitter">
                                            <i class="icon-twitter"></i>
                                            <i class="icon-twitter"></i>
                                        </a>
                                        <a href="#" class="social-icon si-borderless si-pinterest">
                                            <i class="icon-pinterest"></i>
                                            <i class="icon-pinterest"></i>
                                        </a>
                                        <a href="#" class="social-icon si-borderless si-gplus">
                                            <i class="icon-gplus"></i>
                                            <i class="icon-gplus"></i>
                                        </a>
                                        <a href="#" class="social-icon si-borderless si-rss">
                                            <i class="icon-rss"></i>
                                            <i class="icon-rss"></i>
                                        </a>
                                        <a href="#" class="social-icon si-borderless si-email3">
                                            <i class="icon-email3"></i>
                                            <i class="icon-email3"></i>
                                        </a>
                                    </div>
                                </div><!-- Product Single - Share End -->

                            </div>

                            <div class="col_one_fifth col_last">

                                <img class="image_fade" src="{!! asset('frontend/images/grace-brand.jpg') !!}" alt="Brand Logo">

                                <div class="divider divider-center"><i class="icon-circle-blank"></i></div>

                                <div class="feature-box fbox-plain fbox-dark fbox-small">
                                    <div class="fbox-icon">
                                        <i class="icon-thumbs-up2"></i>
                                    </div>
                                    <h3>100% Original</h3>
                                    <p class="notopmargin">We guarantee you the sale of Original products.</p>
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
                                    <p class="notopmargin">We Deliver to 100+ Locations around the world.</p>
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
                                        @if($product->reviews)
                                        <li><a href="#tabs-3"><i class="icon-star3"></i><span class="hidden-xs"> Reviews (2)</span></a></li>
                                        @endif
                                    </ul>

                                    <div class="tab-container">

                                        <div class="tab-content clearfix" id="tabs-1">
                              {!! $product->description !!}
                                        </div>
                                        <div class="tab-content clearfix" id="tabs-2">

                                          <!--   <table class="table table-striped table-bordered">
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
 -->
                                        </div>
                                        @if($product->reviews)
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
                                        @endif
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="clear"></div><div class="line"></div>

                    <div class="col_full nobottommargin">

                        <h4>Related Products</h4>

                        <div id="oc-product" class="owl-carousel product-carousel carousel-widget" data-margin="30" data-pagi="false" data-autoplay="5000" data-items-xxs="1" data-items-sm="2" data-items-md="3" data-items-lg="4">

                            <div class="oc-item">
                                <div class="product iproduct clearfix">
                                    <div class="product-image">
                                        <a href="#"><img src="images/shop/dress/1.jpg" alt="Checked Short Dress"></a>
                                        <a href="#"><img src="images/shop/dress/1-1.jpg" alt="Checked Short Dress"></a>
                                        <div class="sale-flash">50% Off*</div>
                                        <div class="product-overlay">
                                            <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                            <a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                                        </div>
                                    </div>
                                    <div class="product-desc center">
                                        <div class="product-title"><h3><a href="#">Checked Short Dress</a></h3></div>
                                        <div class="product-price"><del>$24.99</del> <ins>$12.49</ins></div>
                                        <div class="product-rating">
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star-half-full"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="oc-item">
                                <div class="product iproduct clearfix">
                                    <div class="product-image">
                                        <a href="#"><img src="images/shop/pants/1-1.jpg" alt="Slim Fit Chinos"></a>
                                        <a href="#"><img src="images/shop/pants/1.jpg" alt="Slim Fit Chinos"></a>
                                        <div class="product-overlay">
                                            <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                            <a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                                        </div>
                                    </div>
                                    <div class="product-desc center">
                                        <div class="product-title"><h3><a href="#">Slim Fit Chinos</a></h3></div>
                                        <div class="product-price">$39.99</div>
                                        <div class="product-rating">
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star-half-full"></i>
                                            <i class="icon-star-empty"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="oc-item">
                                <div class="product iproduct clearfix">
                                    <div class="product-image">
                                        <a href="#"><img src="images/shop/shoes/1-1.jpg" alt="Dark Brown Boots"></a>
                                        <a href="#"><img src="images/shop/shoes/1.jpg" alt="Dark Brown Boots"></a>
                                        <div class="product-overlay">
                                            <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                            <a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                                        </div>
                                    </div>
                                    <div class="product-desc center">
                                        <div class="product-title"><h3><a href="#">Dark Brown Boots</a></h3></div>
                                        <div class="product-price">$49</div>
                                        <div class="product-rating">
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star-empty"></i>
                                            <i class="icon-star-empty"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="oc-item">
                                <div class="product iproduct clearfix">
                                    <div class="product-image">
                                        <a href="#"><img src="images/shop/dress/2.jpg" alt="Light Blue Denim Dress"></a>
                                        <a href="#"><img src="images/shop/dress/2-2.jpg" alt="Light Blue Denim Dress"></a>
                                        <div class="product-overlay">
                                            <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                            <a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                                        </div>
                                    </div>
                                    <div class="product-desc center">
                                        <div class="product-title"><h3><a href="#">Light Blue Denim Dress</a></h3></div>
                                        <div class="product-price">$19.95</div>
                                        <div class="product-rating">
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star-empty"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="oc-item">
                                <div class="product iproduct clearfix">
                                    <div class="product-image">
                                        <a href="#"><img src="images/shop/sunglasses/1.jpg" alt="Unisex Sunglasses"></a>
                                        <a href="#"><img src="images/shop/sunglasses/1-1.jpg" alt="Unisex Sunglasses"></a>
                                        <div class="sale-flash">Sale!</div>
                                        <div class="product-overlay">
                                            <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                            <a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                                        </div>
                                    </div>
                                    <div class="product-desc center">
                                        <div class="product-title"><h3><a href="#">Unisex Sunglasses</a></h3></div>
                                        <div class="product-price"><del>$19.99</del> <ins>$11.99</ins></div>
                                        <div class="product-rating">
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star-empty"></i>
                                            <i class="icon-star-empty"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section><!-- #content end -->

@endsection


@section('content-off')
{!! date('F d, Y', strtotime($product->created_at)) !!}

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
                                        @if(!$product->path)
                                   {{--     @if($product->file_name) --}}
                                            <div class="slide" data-thumb="{!! url($product->path . $product->file_name) !!}" style="width: 413px; float: left; display: block;">
                                                <a href="{!! url($product->path . $product->file_name) !!}" title=" - Front View" data-lightbox="gallery-item">
                                                    <img src="{!! url($product->path . $product->file_name) !!}" alt="" draggable="false">
                                                </a>
                                            </div>
                                        @else
                                            <div class="slide clone" data-thumb="http://placehold.it/413" aria-hidden="true" style="width: 413px; float: left; display: block;">
                                                <a href="http://placehold.it/720x960?text=image" title="{!! $product->name !!}" data-lightbox="">
                                                    <img src="http://placehold.it/720x960?text=image" alt="{!! $product->name !!} image" draggable="false">
                                                </a>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                

                                <ol class="flex-control-nav flex-control-thumbs">
                                <li data-animate="zoomIn" data-delay="0" class="zoomIn animated">
                                <img src="{!! asset('/frontend/images/shop/thumbs/dress/3.jpg') !!}" class="" draggable="false"> 
                                </li>
                                <li data-animate="zoomIn" data-delay="200" class="zoomIn animated">
                                {{-- <img src="{!! asset('/frontend/images/shop/thumbs/dress/3-1.jpg') !!}" draggable="false" class=""> --}}
                                </li>
                                <li data-animate="zoomIn" data-delay="400" class="zoomIn animated">
                                {{-- <img src="{!! asset('/frontend/images/shop/thumbs/dress/3-2.jpg') !!}" draggable="false" class="flex-active"> --}}
                                </li>
                                </ol>
                                </div>
                        </div>
                        {{--
   <li><i class="icon-calendar3"></i> <span datetime="{!! date('F d, Y', strtotime($article->created_at)) !!}" class="time"></span> </li>
           {!! $product->name !!}

{!! $product->meta_title !!}

{!! $product->sku !!}
{!! $product->upc !!}
{!! $product->mpn !!}
{!! $product->status !!}
{!! $product->feature_1 !!}
{!! $product->bullet_1 !!}
{!! $product->bullet_6 !!}

--}}

                    </div><!-- Product Single - Gallery End -->
                </div>
                <div class="col_half col_last product-desc">
                    <!-- Product Single - Price ============================================= -->
                    @if($product->sale_price)
                    <div class="product-price" itemprop="price"><del>$39.99</del> <ins>$24.99</ins></div>
                    @elseif($product->ispromo)
                    <!-- Product Single - Price End -->
                    <div class="product-price" itemprop="price">Promo: <del>$39.99</del> <ins>$24.99</ins></div>
                    @else
                    <!-- Product Single - Price End -->
                    <div class="product-price" itemprop="price"> <ins>${!! $product->price !!}</ins></div>
                    @endif
                  
                    <!-- Product Single - Rating ============================================= -->
                @if($product->rating)
                    <div class="product-rating">
                        <i class="icon-star3"></i>
                        <i class="icon-star3"></i>
                        <i class="icon-star3"></i>
                        <i class="icon-star-half-full"></i>
                        <i class="icon-star-empty"></i>
                    </div><!-- Product Single - Rating End -->
                @endif
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
                    @if ($product->short_description)
                        <!-- Product Single - Short Description ============================================= -->
                        {!! $product->short_description !!}
                        <br />
                        <br />
                        <ul class="iconlist">
                        @if($product->bullet_1)
                            @if($product->bullet_1)
                            <li><i class="icon-caret-right"></i>{!! $product->bullet_1 !!}</li>
                            @endif
                            @if($product->bullet_2)
                            <li><i class="icon-caret-right"></i>{!! $product->bullet_2 !!}</li>
                            @endif
                            @if($product->bullet_3)
                            <li><i class="icon-caret-right"></i>{!! $product->bullet_3 !!}</li>
                            @endif
                            @if($product->bullet_4)
                            <li><i class="icon-caret-right"></i>{!! $product->bullet_4 !!}</li>
                            @endif
                            @if($product->bullet_5)
                            <li><i class="icon-caret-right"></i>{!! $product->bullet_5 !!}</li>
                            @endif
                            @if($product->bullet_6)
                            <li><i class="icon-caret-right"></i>{!! $product->bullet_6 !!}</li>
                            @endif
                        @else
                            <li><i class="icon-caret-right"></i> Dynamic Color Options</li>
                            <li><i class="icon-caret-right"></i> Lots of Size Options</li>
                            <li><i class="icon-caret-right"></i> 30-Day Return Policy</li>
                        @endif
                        </ul><!-- Product Single - Short Description End -->
                    @endif
                    <!-- Product Single - Meta ============================================= -->
                    <div class="panel panel-default product-meta">
                        <div class="panel-body"  itemprop="brand" itemscope itemtype="http://schema.org/Organization">
                        <span itemprop="name"><strong>The Grace Company</strong></span>
                   
                            <div itemprop="manufacturer" itemscope itemtype="http://schema.org/Organization">
                              @if($product->manufacturer)  
                              Manufactured by: <span itemprop="name"><strong>{!! $product->manufacturer !!}</strong></span>
                              @else
                              Manufactured by: <strong>The Grace Company</strong>
                              @endif
                            </div>  

                            <div>Model: <span itemprop="model">{!! $product->mpn !!}</span></div>  
                            <div>Product ID: <span itemprop="productID">{!! $product->id !!}</span></div>  
                            <div>Condition: <link itemprop="itemCondition" href="http://schema.org/NewCondition" /> New</div>  

                            <span itemprop="productID" class="sku_wrapper">SKU: <span class="sku"><strong>{!! $product->sku !!}</strong></span></span>
                            <span itemprop="productUPC" class="sku_wrapper">UPC: <span class="upc"><strong>{!! $product->upc !!}</strong></span></span>
                            {{--  <span class="posted_in">Category: <a href="#" rel="tag">{!! $product->category !!}</a>.</span>  --}}
                            {{--  <span class="tagged_as">Tags:
                                <a href="#" rel="tag">Pink</a>,
                                <a href="#" rel="tag">Short</a>,
                                <a href="#" rel="tag">Dress</a>,
                                <a href="#" rel="tag">Printed</a>.
                            </span> --}}
                            @if($product->rating)
                            <div itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
                                <span itemprop="ratingValue">rating</span> based on <span itemprop="reviewCount">reviewcount</span> reviews</div>
                                <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                 <link itemprop="itemCondition" href="http://schema.org/NewCondition" /> New
                                </div>
                            </div>
                            @endif
                            </div>
                        </div>
                    </div><!-- Product Single - Meta End -->

             {{--       @include('frontend.shop.partials.layout.product.social-share')  --}}
                </div>
                <div class="col_full nobottommargin">
                    <div class="tabs clearfix nobottommargin ui-tabs ui-widget ui-widget-content ui-corner-all" id="tab-1">
                        <ul class="tab-nav clearfix ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all" role="tablist">
                            <li class="ui-state-default ui-corner-top ui-tabs-active ui-state-active" role="tab" tabindex="0" aria-controls="tabs-1" aria-labelledby="ui-id-1" aria-selected="true"><a href="#tabs-1" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-1"><i class="icon-align-justify2"></i><span class="hidden-xs"> Description</span></a></li>
                            <li class="ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="tabs-2" aria-labelledby="ui-id-2" aria-selected="false"><a href="#tabs-2" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-2"><i class="icon-info-sign"></i><span class="hidden-xs"> Additional Information</span></a></li>
                          @if($product->rating)
                          <li class="ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="tabs-3" aria-labelledby="ui-id-3" aria-selected="false"><a href="#tabs-3" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-3"><i class="icon-star3"></i><span class="hidden-xs"> Reviews (2)</span></a></li>
                          @endif
                        </ul>
                        <div class="tab-container">
                            <div class="tab-content clearfix ui-tabs-panel ui-widget-content ui-corner-bottom" id="tabs-1" aria-labelledby="ui-id-1" role="tabpanel" aria-expanded="true" aria-hidden="false">
           {{--                     @include('frontend.shop.partials.layout.product.description') --}}
           {!! $product->description !!}
                            </div>
                            <div class="tab-content clearfix ui-tabs-panel ui-widget-content ui-corner-bottom" id="tabs-2" aria-labelledby="ui-id-2" role="tabpanel" aria-expanded="false" aria-hidden="true" style="display: none;">
            {{--                    @include('frontend.shop.partials.layout.product.additional-info') --}}
                            </div>
                            @if($product->rating)
                            <div class="tab-content clearfix ui-tabs-panel ui-widget-content ui-corner-bottom" id="tabs-3" aria-labelledby="ui-id-3" role="tabpanel" aria-expanded="false" aria-hidden="true" style="display: none;">
            {{--                    @include('frontend.shop.partials.layout.product.reviews') --}}
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="line"></div>
         {{--           @include('frontend.shop.partials.layout.product.brandinfo') --}}
                </div>
            </div>
        </div>
        <div class="clear"></div><div class="line"></div>
    {{--    @include('frontend.shop.partials.layout.product.related-products') --}}
    </div>
    {{-- @include('frontend.shop.partials.layout.product.sidebar') --}}
</div>




@endsection

@section('footer_scripts')



@endsection

@section('pp_footer_scripts')
@endsection

@section('inlinejs')

@endsection