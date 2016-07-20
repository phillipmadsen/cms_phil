@extends('backend/layout/clip')

@section('topscripts')
 <script type="text/javascript">
        $(document).ready(function () {

            $('#notification').show().delay(4000).fadeOut(700);

            // publish settings
            $(".publish").bind("click", function (e) {
                var id = $(this).attr('id');
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: "{!! url(getLang() . '/admin/product/" + id + "/toggle-publish/') !!}",
                    headers: {
                        'X-CSRF-Token': $('meta[name="_token"]').attr('content')
                    },
                    success: function (response) {
                        if (response['result'] == 'success') {
                            var imagePath = (response['changed'] == 1) ? "{!!url('/')!!}/assets/images/publish.png" : "{!!url('/')!!}/assets/images/not_publish.png";
                            $("#publish-image-" + id).attr('src', imagePath);
                        }
                    },
                    error: function () {
                        alert("error");
                    }
                })
            });
        });
    </script>
@endsection

@section('pagetitle')
    <div class="row">
        <div class="col-sm-12">

            <!-- start: PAGE TITLE & BREADCRUMB -->
            <ol class="breadcrumb">
            <li><a href="{!! url(getLang() . '/admin') !!}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Products</li>
            </ol>
            <div class="page-header">
                    <h1>Products <small> | Control Panel</small> </h1>
            </div> <!-- end: PAGE TITLE & BREADCRUMB -->
        </div>
    </div>
    <div class="clearfix"></div>
@endsection
{{-- https://laraveltips.wordpress.com/category/image-management-in-laravel-5-1/ --}}

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="clip-stats"></i>
                Panel Data
                <div class="panel-tools">

                    <a class="btn btn-xs btn-link panel-collapse collapses" href="#"> </a>
                    <a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal"> <i class="fa fa-wrench"></i> </a>
                    <a class="btn btn-xs btn-link panel-refresh" href="#"> <i class="fa fa-refresh"></i> </a>
                    <a class="btn btn-xs btn-link panel-close" href="#"> <i class="fa fa-times"></i> </a>
                </div>
            </div>
            <div class="panel-body">

                    <div class="space12">
                        <div class="btn-group btn-group-lg">
                            <a class="btn btn-default active" href="javascript:;">
                                Products
                            </a>
                            <a target="_blank" class="btn btn-default hidden-xs" href="{!! langRoute('admin.products.create') !!}">
                             <i class="fa fa-plus"></i>   Add Product
                            </a>
                      {{--       <a class="btn btn-default" href="{!! langRoute('products.create') !!}">
                                Add misc
                            </a> --}}
                        </div>
                    </div>
                <div class="clearfix"></div>
                @include('flash::message')
                <div class="clearfix"></div>
                @include('backend.products.table')

                @include('core-templates::common.paginate', ['records' => $products])


            </div>
        </div>
    </div>
</div>

@endsection


@section('bottomscripts')

        <!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
        <script type="text/javascript" src="{!! asset('/backend/assets/plugins/bootbox/bootbox.min.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('/backend/assets/plugins/jquery-mockjax/jquery.mockjax.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('/backend/assets/plugins/select2/select2.min.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('/backend/assets/plugins/DataTables/media/js/jquery.dataTables.min.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('/backend/assets/plugins/DataTables/media/js/DT_bootstrap.js') !!}"></script>
        <script src="{!! asset('/backend/assets/js/table-data.js') !!}"></script>
        <!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
@endsection

@section('clipinline')
TableData.init();
@endsection