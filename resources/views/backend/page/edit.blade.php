@extends('backend/layout/clip')


@section('topscripts')
	<link rel="stylesheet" href="{!! asset('/clip/assets/bootstrap/css/bootstrap-tagsinput.css') !!}" type="text/css" />
	<link rel="stylesheet" href="{!! asset('/clip/jasny-bootstrap/css/jasny-bootstrap.min.css') !!}" type="text/css" />

	{!! HTML::script('ckeditor/ckeditor.js') !!}
	<script type="text/javascript">
	    $(document).ready(function () {
	        $("#title").slug();


	        $('#notification').show().delay(4000).fadeOut(700);

	        // publish settings
	       $(".publish").bind("click", function (e) {
	                var id = $(this).attr('id');
	                e.preventDefault();
	                $.ajax({
	                    type: "POST",
	                    url: "{!! url(getLang() . '/admin/page/" + id + "/toggle-publish/') !!}",
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

        <style>
    .tab-pane{min-height:800px;height:100%;}
    </style>
@endsection


@section('pagetitle')
    <div class="row">
        <div class="col-sm-12">

            <!-- start: PAGE TITLE & BREADCRUMB -->
            <ol class="breadcrumb">
            <li><a href="{!! url(getLang() . '/admin') !!}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="{!! url(getLang() . '/admin/page') !!}"><i class="fa fa-bookmark"></i> Page</a></li>
        <li class="active"> Update Page</li>
            </ol>
            <div class="page-header">
                <h1> Page <small> | Update Page</small> </h1>
            </div>
            <!-- end: PAGE TITLE & BREADCRUMB -->
        </div>
    </div>
@endsection


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
                @include('flash::message')
                <div class="space12">
                    <div class="btn-group btn-group-lg">
                        <a class="btn btn-default active" href="javascript:;">
                        Pages
                        </a>
                        <a class="btn btn-default hidden-xs" href="{!! langRoute('admin.page.create') !!}">
                        <i class="fa fa-plus"></i> Add Page
                        </a>
                    </div>
                </div>

                <div class="tabbable panel-tabs">

                {!! Form::model($page,  [ 'route' => [ getLang() . '.admin.page.update', $page->id], 'method' => 'PATCH', 'files'=>true]) !!}
                    <ul class="nav nav-tabs">
                        <li class="active"> <a data-toggle="tab" href="#panel_tab_content"> Article Content </a> </li>
                        <li> <a data-toggle="tab" href="#panel_tab_seo"> SEO < META > </a> </li>
                        <li> <a data-toggle="tab" href="#panel_tab_social"> SOCIAL </a> </li>
                        <li>{!! Form::submit('Update', ['class' => 'success']) !!}</li>
                        <li class="cancel"> <a href="{!! url(getLang(). '/admin/page') !!}" class=" ">Cancel</a></li>
                    </ul>
                    <div class="tab-content">
                        @include('backend.page.fields')
                    </div>
                {!! Form::close() !!}
                </div>

            </div>
        </div>
    </div>
</div>


@endsection

@section('bottomscripts')

    <!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
    <!-- Form actions -->

    <script>
        window.onload = function () {
            CKEDITOR.replace('content', {
                "filebrowserBrowseUrl": "{!! url('filemanager/show') !!}"
            });
        };
    </script>
    <!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
@endsection

@section('clipinline')


@endsection
