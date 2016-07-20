@extends('backend/layout/clip')

@section('topscripts')
    <link rel="stylesheet" href="{!! asset('assets/bootstrap/css/bootstrap-tagsinput.css') !!}" type="text/css" />
    <link rel="stylesheet" href="{!! asset('jasny-bootstrap/css/jasny-bootstrap.min.css') !!}" type="text/css" />

    {!! HTML::script('ckeditor/ckeditor.js') !!}
    <script type="text/javascript">
        $(document).ready(function () {
            $("#title").slug();

        });
    </script>
@endsection

@section('pagetitle')
<div class="row">
    <div class="col-sm-12">
        <!-- start: PAGE TITLE & BREADCRUMB -->
        <ol class="breadcrumb">
            <li><a href="{!! url(getLang() . '/admin/page') !!}"><i class="fa fa-bookmark"></i> Page</a></li>
            <li class="active">Add Page</li>
        </ol>
        <div class="page-header">
            <h1> Page <small> | Add Page</small> </h1>
        </div>
        <!-- end: PAGE TITLE & BREADCRUMB -->
    </div>
</div>
@endsection

@section('content')
    <div class="col-sm-12">
        <!-- start: PANLEL TABS -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-reorder"></i>
                Panel Tabs
            </div>
            <div class="panel-body">

                <div class="tabbable panel-tabs">
                 {!! Form::open(['action' => '\Fully\Http\Controllers\Admin\PageController@store']) !!}
                    <ul class="nav nav-tabs">
                        <li class="active"> <a data-toggle="tab" href="#panel_tab_content"> Article Content </a> </li>
                        <li> <a data-toggle="tab" href="#panel_tab_seo"> SEO < META > </a> </li>
                        <li> <a data-toggle="tab" href="#panel_tab_social"> SOCIAL </a> </li>
                        <li>{!! Form::submit('Save', array('class' => 'success')) !!}</li>
                        <li class="cancel"> <a href="{!! url(getLang(). '/admin/page') !!}" class=" ">Cancel</a></li>
                    </ul>

                    <div class="tab-content">
                        @include('backend.page.fields')
                    </div>
                {!! Form::close() !!}
                </div>
            </div>

        </div>
        <!-- end: PANLEL TABS -->

    </div>
@endsection

@section('bottomscriptsss')
        <!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
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

    TableData.init();
@endsection