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
                    <h1> Products <small> | Control Panel</small> </h1>
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
                        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('admin.products.create') !!}">Add New</a>
                <div class="row">
                    <div class="col-md-12">
                          <div class="clearfix"></div>

                            @include('flash::message')

                            <div class="clearfix"></div>

                            @include('backend.products.table')


{{-- {!! $dataTable->table(['width' => '100%']) !!} --}}

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('bottomscripts')
        <!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.0.3/css/buttons.dataTables.min.css">
    <script src="https://cdn.datatables.net/buttons/1.0.3/js/dataTables.buttons.min.js"></script>
    {{-- <script src="vendor/datatables/buttons.server-side.js"></script> --}}

        <!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
@endsection

@section('clipinline')

@endsection