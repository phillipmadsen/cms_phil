@extends('backend/layout/clip')

@section('topscripts')
 <script type="text/javascript">
        $(document).ready(function () {


        });
    </script>
@endsection

@section('pagetitle')
    <div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-10">
            <!-- start: PAGE TITLE & BREADCRUMB -->
            <ol class="breadcrumb">
            <li><a href="{!! url(getLang() . '/admin') !!}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Products</li>
            </ol>
            <div class="page-header">
                     <h1 class="pull-left">Edit Product</h1>
            </div>
            <!-- end: PAGE TITLE & BREADCRUMB -->
        </div>
    </div>
@endsection


@section('content')
<div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-10">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="clip-stats"></i>
                <div class="panel-tools">
                    <a class="btn btn-xs btn-link panel-collapse collapses" href="#"> </a>
                    <a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal"> <i class="fa fa-wrench"></i> </a>
                    <a class="btn btn-xs btn-link panel-refresh" href="#"> <i class="fa fa-refresh"></i> </a>
                    <a class="btn btn-xs btn-link panel-close" href="#"> <i class="fa fa-times"></i> </a>
                </div>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
            @include('core-templates::common.errors')



           {!! Form::model($product, ['langRoute' => ['admin.products.update', $product->id], 'method' => 'patch']) !!}

        <div class="col-lg-12">
  <div class="tabbable">
    <ul id="myTab4" class="nav nav-tabs tab-padding tab-space-3 tab-blue">
        <li class="active"> <a data-toggle="tab" href="#panel_tab_overview"> Overview </a> </li>
        <li class=""> <a data-toggle="tab" href="#panel_tab_image"> Images & Files </a> </li>
        <li class=""> <a data-toggle="tab" href="#panel_tab_pricing"> Pricing / Tax / Shipping </a> </li>
        <li class=""> <a data-toggle="tab" href="#panel_tab_meta"> Meta SEO </a> </li>
        <li class=""> <a data-toggle="tab" href="#panel_tab_developer"> Developer </a> </li>
    </ul>
    <div class="tab-content">
        <div id="panel_tab_overview" class="tab-pane active">
        @include('backend.products.create-sections.overview-fields')
        <br style="clear:both" />
        </div>
        <div id="panel_tab_image" class="tab-pane">
        @include('backend.products.create-sections.image-fields')
         <br style="clear:both" />
        </div>
        <div id="panel_tab_pricing" class="tab-pane">
        @include('backend.products.create-sections.pricing-fields')
         <br style="clear:both" />
        </div>
        <div id="panel_tab_meta" class="tab-pane">
        @include('backend.products.create-sections.meta-fields')
         <br style="clear:both" />
        </div>
        <div id="panel_tab_developer" class="tab-pane">
        @include('backend.products.create-sections.developer-fields')
         <br style="clear:both" />
        </div>
        <!-- Submit Field -->
        <div class="form-group col-sm-12">
            {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
            <a href="{!! url(getLang().'.admin.products.index') !!}" class="btn btn-default">Cancel</a>
        </div>

         <br style="clear:both" />
    </div>
  </div>
</div>

            {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('bottomscripts')
        <!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->

        <!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
@endsection

@section('clipinline')

@endsection