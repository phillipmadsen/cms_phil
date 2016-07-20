<div class="row">
    <div class="col-md-12">

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

    </div>
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
