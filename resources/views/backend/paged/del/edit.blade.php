@extends('backend/layout/clip')

@section('topscripts')

@endsection


@section('pagetitle')
    <div class="row">
        <div class="col-sm-12">

            <!-- start: PAGE TITLE & BREADCRUMB -->
            <ol class="breadcrumb">
            <li><a href="{!! url(getLang() . '/admin') !!}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="{!! url(getLang() . '/admin/page') !!}"><i class="fa fa-bookmark"></i> Page</a></li>
            <li class="active">Update Page</li>
            </ol>
            <div class="page-header">
              <h1> Page <small> | Update Page</small> </h1>
            </div>
            <!-- end: PAGE TITLE & BREADCRUMB -->
        </div>
    </div>
@endsection



{{--
<div class="space12">
    <div class="btn-group btn-group-lg">
        <a class="btn btn-default active" href="javascript:;"> Articles </a>
        <a class="btn btn-default hidden-xs" href="{!! langRoute('admin.article.create') !!}"> <i class="fa fa-plus"></i> Add Article </a>
        <a class="btn btn-default" href="{!! langRoute('admin.category.create') !!}"> <i class="fa fa-plus"></i> Add Category </a>
    </div>
</div>
 --}}
@section('content')


<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="clip-stats"></i>
                Data
                <div class="panel-tools">
                    <a class="btn btn-xs btn-link panel-collapse collapses" href="#"> </a>
                    <a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal"> <i class="fa fa-wrench"></i> </a>
                    <a class="btn btn-xs btn-link panel-refresh" href="#"> <i class="fa fa-refresh"></i> </a>
                    <a class="btn btn-xs btn-link panel-close" href="#"> <i class="fa fa-times"></i> </a>
                </div>
            </div>
            <div class="panel-body">

  {!! Form::open( array( 'route' => array( getLang() . '.admin.page.update', $page->id), 'method' => 'PATCH', 'files'=>true)) !!}
    <!-- Title -->
    <div class="control-group {!! $errors->has('title') ? 'has-error' : '' !!}">
        <label class="control-label" for="title">Title</label>

        <div class="controls">
            {!! Form::text('title', $page->title, array('class'=>'form-control', 'id' => 'title', 'placeholder'=>'Title', 'value'=>Input::old('title'))) !!}
            @if ($errors->first('title'))
            <span class="help-block">{!! $errors->first('title') !!}</span>
            @endif
        </div>
    </div>
    <br>
    <!-- Content -->
    <div class="control-group {!! $errors->has('content') ? 'has-error' : '' !!}">
        <label class="control-label" for="title">Content</label>

        <div class="controls">
            {!! Form::textarea('content', $page->content, array('class'=>'form-control', 'id' => 'content', 'placeholder'=>'Content', 'value'=>Input::old('content'))) !!}
            @if ($errors->first('content'))
            <span class="help-block">{!! $errors->first('content') !!}</span>
            @endif
        </div>
    </div>
    <br>
    <!-- Published -->
    <div class="control-group {!! $errors->has('is_published') ? 'has-error' : '' !!}">

        <div class="controls">
            <label class="">{!! Form::checkbox('is_published', 'is_published',$page->is_published) !!} Publish ?</label>
            @if ($errors->first('is_published'))
            <span class="help-block">{!! $errors->first('is_published') !!}</span>
            @endif
        </div>
    </div>
    <br>
    <!-- Form actions -->
    {!! Form::submit('Update', array('class' => 'btn btn-success')) !!}
    {!! Form::close() !!}




            </div>
        </div>
    </div>
</div>

@endsection


@section('bottomscripts')

    <!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->

    <!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
        <script>
        window.onload = function () {
            CKEDITOR.replace('content', {
                "filebrowserBrowseUrl": "{!! url('filemanager/show') !!}"
            });
        };
    </script>

@endsection

@section('clipinline')

TableData.init();
@endsection