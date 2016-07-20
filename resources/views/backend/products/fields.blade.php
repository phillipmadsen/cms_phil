<!-- Slug Field -->
<div class="form-group col-sm-3">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, ['class' => 'form-control']) !!}
</div>

<!-- Category Field -->
<div class="form-group col-sm-3">
    {!! Form::label('category', 'Category:') !!}
    {!! Form::select('category', $categories, null, ['class' => 'form-control', 'value'=>Input::old('category')]) !!}
</div>

<!-- Ispromo Field -->
<div class="form-group col-sm-2">
    {!! Form::label('ispromo', 'Ispromo:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('ispromo', false) !!}
        {!! Form::checkbox('ispromo', true, null) !!} true
    </label>
</div>

<!-- Is Published Field -->
<div class="form-group col-sm-2">
    {!! Form::label('is_published', 'Is Published:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('is_published', false) !!}
        {!! Form::checkbox('is_published', true, null) !!} true
    </label>
</div>

<!-- Availability Field -->
<div class="form-group col-sm-3">
    {!! Form::label('availability', 'Availability:') !!}
    {!! Form::select('availability', ['Discontinued' => 'Discontinued', 'In Stock' => 'In Stock', 'On Backorder' => 'On Backorder', 'Pre - Orders' => 'Pre - Orders', 'Promo Active' => 'Promo Active', 'Deleted' => 'Deleted'], null, ['class' => 'form-control']) !!}
</div>

<!-- Manufacturer Field -->
<div class="form-group col-sm-3">
    {!! Form::label('manufacturer', 'Manufacturer:') !!}
    {!! Form::select('manufacturer', ['The Grace Company' => 'The Grace Company'], null, ['class' => 'form-control']) !!}
</div>

<!-- Product Line Field -->
<div class="form-group col-sm-3">
    {!! Form::label('product_line', 'Product Line:') !!}
    {!! Form::select('product_line', ['Qnuque' => 'Qnuque', 'Hand Quilting' => 'Hand Quilting', 'Machine Quilting' => 'Machine Quilting', 'TrueCut' => 'TrueCut', 'Accessories' => 'Accessories', 'Frames' => 'Frames', 'Hoops' => 'Hoops', 'Automation Software' => 'Automation Software'], null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-3">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::select('status', ['InStock' => 'InStock', 'Available' => 'Available', 'OnHold' => 'OnHold', 'OnBackorder' => 'OnBackorder', 'PreOrders' => 'PreOrders', 'PromoActive' => 'PromoActive', 'SoldOut' => 'SoldOut', 'Discontinued' => 'Discontinued'], null, ['class' => 'form-control']) !!}
</div>

<!-- Office Status Field -->
<div class="form-group col-sm-3">
    {!! Form::label('office_status', 'Office Status:') !!}
    {!! Form::select('office_status', ['Draft' => 'Draft', 'Review' => 'Review', 'inDesign' => 'inDesign', 'inProof' => 'inProof', 'inProcess' => 'inProcess', 'Hidden' => 'Hidden', 'Deleted' => 'Deleted', 'Online' => 'Online', 'Offline' => 'Offline', 'Removed' => 'Removed', 'Archived' => 'Archived'], null, ['class' => 'form-control']) !!}
</div>

<!-- Guid Field -->
<div class="form-group col-sm-2">
    {!! Form::label('guid', 'Guid:') !!}
    {!! Form::number('guid', null, ['class' => 'form-control']) !!}
</div>

<!-- Asin Field -->
<div class="form-group col-sm-2">
    {!! Form::label('asin', 'Asin:') !!}
    {!! Form::number('asin', null, ['class' => 'form-control']) !!}
</div>

<!-- Model Field -->
<div class="form-group col-sm-2">
    {!! Form::label('model', 'Model:') !!}
    {!! Form::text('model', null, ['class' => 'form-control']) !!}
</div>

<!-- Sku Field -->
<div class="form-group col-sm-2">
    {!! Form::label('sku', 'Sku:') !!}
    {!! Form::text('sku', null, ['class' => 'form-control']) !!}
</div>

<!-- Upc Field -->
<div class="form-group col-sm-2">
    {!! Form::label('upc', 'Upc:') !!}
    {!! Form::text('upc', null, ['class' => 'form-control']) !!}
</div>

<!-- Mpn Field -->
<div class="form-group col-sm-2">
    {!! Form::label('mpn', 'Mpn:') !!}
    {!! Form::text('mpn', null, ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Subtitle Field -->
<div class="form-group col-sm-6">
    {!! Form::label('subtitle', 'Subtitle:') !!}
    {!! Form::text('subtitle', null, ['class' => 'form-control']) !!}
</div>

<!-- Short Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('short_description', 'Short Description:') !!}
    {!! Form::textarea('short_description', null, ['class' => 'form-control', 'rows' => '5']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control', 'rows' => '5']) !!}
</div>



<!-- Meta Title Field -->
<div class="form-group col-sm-8">
    {!! Form::label('meta_title', 'Meta Title:') !!}
    {!! Form::text('meta_title', null, ['class' => 'form-control']) !!}
</div>

<!-- Meta Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('meta_description', 'Meta Description:') !!}
    {!! Form::textarea('meta_description', null, ['class' => 'form-control']) !!}
</div>

<!-- Facebook Title Field -->
<div class="form-group col-sm-8">
    {!! Form::label('facebook_title', 'Facebook Title:') !!}
    {!! Form::text('facebook_title', null, ['class' => 'form-control']) !!}
</div>

<!-- Google Plus Title Field -->
<div class="form-group col-sm-8">
    {!! Form::label('google_plus_title', 'Google Plus Title:') !!}
    {!! Form::text('google_plus_title', null, ['class' => 'form-control']) !!}
</div>

<!-- Twitter Title Field -->
<div class="form-group col-sm-8">
    {!! Form::label('twitter_title', 'Twitter Title:') !!}
    {!! Form::text('twitter_title', null, ['class' => 'form-control']) !!}
</div>

<!-- Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('price', 'Price:') !!}
    {!! Form::number('price', null, ['class' => 'form-control']) !!}
</div>

<!-- Promo Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('promo_price', 'Promo Price:') !!}
    {!! Form::number('promo_price', null, ['class' => 'form-control']) !!}
</div>

<!-- Msrp Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('msrp_price', 'Msrp Price:') !!}
    {!! Form::number('msrp_price', null, ['class' => 'form-control']) !!}
</div>

<!-- Dealer Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dealer_price', 'Dealer Price:') !!}
    {!! Form::number('dealer_price', null, ['class' => 'form-control']) !!}
</div>

<!-- Employee Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('employee_price', 'Employee Price:') !!}
    {!! Form::number('employee_price', null, ['class' => 'form-control']) !!}
</div>

<!-- Sale Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sale_price', 'Sale Price:') !!}
    {!! Form::number('sale_price', null, ['class' => 'form-control']) !!}
</div>

<!-- Sale Price Coupon Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sale_price_coupon_code', 'Sale Price Coupon Code:') !!}
    {!! Form::text('sale_price_coupon_code', null, ['class' => 'form-control']) !!}
</div>

<!-- Sale Price Start Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sale_price_start_date', 'Sale Price Start Date:') !!}
    {!! Form::date('sale_price_start_date', null, ['class' => 'form-control']) !!}
</div>

<!-- Sale Price End Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sale_price_end_date', 'Sale Price End Date:') !!}
    {!! Form::date('sale_price_end_date', null, ['class' => 'form-control']) !!}
</div>

<!-- Quantity Field -->
<div class="form-group col-sm-6">
    {!! Form::label('quantity', 'Quantity:') !!}
    {!! Form::number('quantity', null, ['class' => 'form-control']) !!}
</div>

<!-- Tax Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tax_id', 'Tax Id:') !!}
    {!! Form::number('tax_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Tax Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tax_status', 'Tax Status:') !!}
    {!! Form::text('tax_status', null, ['class' => 'form-control']) !!}
</div>

<!-- Tax Class Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tax_class', 'Tax Class:') !!}
    {!! Form::text('tax_class', null, ['class' => 'form-control']) !!}
</div>

<!-- Video Url Field -->
<div class="form-group col-sm-6">
    {!! Form::label('video_url', 'Video Url:') !!}
    {!! Form::text('video_url', null, ['class' => 'form-control']) !!}
</div>

<!-- List Item 1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('list_item_1', 'List Item 1:') !!}
    {!! Form::text('list_item_1', null, ['class' => 'form-control']) !!}
</div>

<!-- List Item 2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('list_item_2', 'List Item 2:') !!}
    {!! Form::text('list_item_2', null, ['class' => 'form-control']) !!}
</div>

<!-- List Item 3 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('list_item_3', 'List Item 3:') !!}
    {!! Form::text('list_item_3', null, ['class' => 'form-control']) !!}
</div>

<!-- List Item 4 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('list_item_4', 'List Item 4:') !!}
    {!! Form::text('list_item_4', null, ['class' => 'form-control']) !!}
</div>

<!-- List Item 5 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('list_item_5', 'List Item 5:') !!}
    {!! Form::text('list_item_5', null, ['class' => 'form-control']) !!}
</div>

<!-- List Item 6 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('list_item_6', 'List Item 6:') !!}
    {!! Form::text('list_item_6', null, ['class' => 'form-control']) !!}
</div>

<!-- Path Field -->
<div class="form-group col-sm-6">
    {!! Form::label('path', 'Path:') !!}
    {!! Form::text('path', null, ['class' => 'form-control']) !!}
</div>

<!-- File Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('file_name', 'File Name:') !!}
    {!! Form::file('file_name') !!}
</div>
<div class="clearfix"></div>

<!-- File Size Field -->
<div class="form-group col-sm-6">
    {!! Form::label('file_size', 'File Size:') !!}
    {!! Form::number('file_size', null, ['class' => 'form-control']) !!}
</div>

<!-- Image Alt Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image_alt', 'Image Alt:') !!}
    {!! Form::text('image_alt', null, ['class' => 'form-control']) !!}
</div>

<!-- Primary Image Label Field -->
<div class="form-group col-sm-6">
    {!! Form::label('primary_image_label', 'Primary Image Label:') !!}
    {!! Form::text('primary_image_label', null, ['class' => 'form-control']) !!}
</div>

<!-- Primary Image File Size Field -->
<div class="form-group col-sm-6">
    {!! Form::label('primary_image_file_size', 'Primary Image File Size:') !!}
    {!! Form::number('primary_image_file_size', null, ['class' => 'form-control']) !!}
</div>

<!-- Primary Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('primary_image', 'Primary Image:') !!}
    {!! Form::file('primary_image') !!}
</div>
<div class="clearfix"></div>

<!-- Second Image Label Field -->
<div class="form-group col-sm-6">
    {!! Form::label('second_image_label', 'Second Image Label:') !!}
    {!! Form::text('second_image_label', null, ['class' => 'form-control']) !!}
</div>

<!-- Second Image File Size Field -->
<div class="form-group col-sm-6">
    {!! Form::label('second_image_file_size', 'Second Image File Size:') !!}
    {!! Form::number('second_image_file_size', null, ['class' => 'form-control']) !!}
</div>

<!-- Second Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('second_image', 'Second Image:') !!}
    {!! Form::file('second_image') !!}
</div>
<div class="clearfix"></div>

<!-- Third Image Label Field -->
<div class="form-group col-sm-6">
    {!! Form::label('third_image_label', 'Third Image Label:') !!}
    {!! Form::text('third_image_label', null, ['class' => 'form-control']) !!}
</div>

<!-- Third Image File Size Field -->
<div class="form-group col-sm-6">
    {!! Form::label('third_image_file_size', 'Third Image File Size:') !!}
    {!! Form::number('third_image_file_size', null, ['class' => 'form-control']) !!}
</div>

<!-- Third Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('third_image', 'Third Image:') !!}
    {!! Form::file('third_image') !!}
</div>
<div class="clearfix"></div>

<!-- Fourth Image Label Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fourth_image_label', 'Fourth Image Label:') !!}
    {!! Form::text('fourth_image_label', null, ['class' => 'form-control']) !!}
</div>

<!-- Fourth Image File Size Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fourth_image_file_size', 'Fourth Image File Size:') !!}
    {!! Form::number('fourth_image_file_size', null, ['class' => 'form-control']) !!}
</div>

<!-- Fourth Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fourth_image', 'Fourth Image:') !!}
    {!! Form::file('fourth_image') !!}
</div>
<div class="clearfix"></div>

<!-- Fifth Image Label Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fifth_image_label', 'Fifth Image Label:') !!}
    {!! Form::text('fifth_image_label', null, ['class' => 'form-control']) !!}
</div>

<!-- Fifth Image File Size Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fifth_image_file_size', 'Fifth Image File Size:') !!}
    {!! Form::number('fifth_image_file_size', null, ['class' => 'form-control']) !!}
</div>

<!-- Fifth Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fifth_image', 'Fifth Image:') !!}
    {!! Form::file('fifth_image') !!}
</div>
<div class="clearfix"></div>

<!-- Product Doc Field -->
<div class="form-group col-sm-6">
    {!! Form::label('product_doc', 'Product Doc:') !!}
    {!! Form::text('product_doc', null, ['class' => 'form-control']) !!}
</div>

<!-- Product Doc Label Field -->
<div class="form-group col-sm-6">
    {!! Form::label('product_doc_label', 'Product Doc Label:') !!}
    {!! Form::text('product_doc_label', null, ['class' => 'form-control']) !!}
</div>

<!-- Product Doc File Size Field -->
<div class="form-group col-sm-6">
    {!! Form::label('product_doc_file_size', 'Product Doc File Size:') !!}
    {!! Form::number('product_doc_file_size', null, ['class' => 'form-control']) !!}
</div>

<!-- Tracking Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tracking', 'Tracking:') !!}
    {!! Form::text('tracking', null, ['class' => 'form-control']) !!}
</div>

<!-- Datalayer Field -->
<div class="form-group col-sm-6">
    {!! Form::label('datalayer', 'Datalayer:') !!}
    {!! Form::text('datalayer', null, ['class' => 'form-control']) !!}
</div>

<!-- Pubished At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pubished_at', 'Pubished At:') !!}
    {!! Form::date('pubished_at', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! langRoute('admin.products.index') !!}" class="btn btn-default">Cancel</a>
</div>
