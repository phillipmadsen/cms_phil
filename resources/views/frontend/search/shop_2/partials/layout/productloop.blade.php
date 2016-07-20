

<div id="shop" class="clearfix">
@foreach($products as $product)
<div class="product clearfix">
	<div class="product-image">
		<a href="#"><img src="{!! $product->product_image !!}" alt="Checked Short Dress"></a>
		<a href="#"><img src="{!! $product->product_image !!}" alt="Checked Short Dress"></a>
		<div class="sale-flash">50% Off*</div>
		<div class="product-overlay">
			<a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
			<a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
		</div>
	</div>
	<div class="product-desc">
		<div class="product-title"><h3><a href="#">{!! $product->product_name !!}</a></h3></div>
		<div class="product-price"><del>${!! $product->list_price !!}</del> <ins>${!! $product->grace_price !!}</ins></div>
		<div class="product-rating">
			<i class="icon-star3"></i>
			<i class="icon-star3"></i>
			<i class="icon-star3"></i>
			<i class="icon-star3"></i>
			<i class="icon-star-half-full"></i>
		</div>
	</div>
</div>
@endforeach
</div>