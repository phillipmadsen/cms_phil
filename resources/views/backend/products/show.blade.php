@extends('backend.layout.layout')

@section('content')
<div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-10">
    @include('backend.products.show_fields')

    <div class="form-group">
           <a href="{!! route('admin.products.index') !!}" class="btn btn-default">Back</a>
    </div>
    </div>
    </div>
@endsection
