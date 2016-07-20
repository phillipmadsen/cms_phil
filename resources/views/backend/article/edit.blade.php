@extends('backend/layout/forms')

@section('topscripts')



<script type="text/javascript">
     $(document).ready(function () {
        $("#title").slug();
        if ($('#tag').length != 0) {
            var elt = $('#tag');
            elt.tagsinput();
        }
    });
</script>

@endsection

@section('pagetitle')
    <div class="row">
        <div class="col-sm-12">
            <!-- start: PAGE TITLE & BREADCRUMB -->
            <ol class="breadcrumb">
         <li><a href="{!! url(getLang() . '/admin/article') !!}"><i class="fa fa-book"></i> Article</a></li>
        <li class="active">Update Article</li>
            </ol>
            <div class="page-header">
                     <h1> Article <small> | Update Article</small> </h1>
            </div>
            <!-- end: PAGE TITLE & BREADCRUMB -->
        </div>
    </div>
@endsection

@section('content')
<div class="row">
        <div class="col-sm-12">
        <!-- start: PANLEL TABS -->
            <div class="panel panel-default">
                <div class="panel-heading">
                <i class="fa fa-reorder"></i>
                Panel Tabs
                </div>
                <div class="panel-body">
                {!! Form::model($article, ['route' => [getLang(). '.admin.article.update', $article->id], 'method' => 'PATCH', 'files'=>true]) !!}
                    @include('backend.article.fields')
                    {!! Form::submit('Update', array('class' => 'btn btn-success')) !!}
                {!! Form::close() !!}
                <!-- end: PANLEL TABS -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('bottomscripts')
        <!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->

        <!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
            <script>
        onload = function () {
            CKEDITOR.replace('content', {
                "filebrowserBrowseUrl": "{!! url('filemanager/show') !!}"
            });
        };
    </script>
@endsection

@section('clipinline')
{{-- TableData.init(); --}}
@endsection
