 @extends('backend/layout/clip')

@section('topscripts')
{!! HTML::style('ckeditor/contents.css') !!}
@endsection


@section('pagetitle')
    <div class="row">
        <div class="col-sm-12">

            <!-- start: PAGE TITLE & BREADCRUMB -->
            <ol class="breadcrumb">
            <li><a href="{!! url(getLang() . '/admin') !!}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="{!! langRoute('admin.page.index') !!}"><i class="fa fa-bookmark"></i> Page</a></li>
            <li class="active">Show Page</li>
            </ol>
            <div class="page-header">
                       <h1> Page <small> | Show Page</small> </h1>
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
                <div class="space12">
                    <div class="btn-group btn-group-lg">
                        <a class="btn btn-default" href="{!! langRoute('admin.page.index') !!}"> <span class="fa fa-arrow-left"></span>&nbsp; Back </a>
                        <a class="btn btn-default active" href="javascript:void(0)"> <i class="fa fa-eye"></i>&nbsp; Show Page </a>
                        <a class="btn btn-default" href="{!! langRoute('admin.page.create') !!}"> <i class="fa fa-plus"></i>&nbsp; Add Page </a>
                    </div>
                </div>


                    <table class="table table-striped">
                        <tbody>
                        <tr>
                            <td><strong>Title</strong></td>
                            <td>{!! $page->title !!}</td>
                        </tr>
                        <tr>
                            <td><strong>Published</strong></td>
                            <td>{!! $page->is_published !!}</td>
                        </tr>
                        <tr>
                            <td><strong>Content</strong></td>
                            <td>{!! $page->content !!}</td>
                        </tr>
                        <tr>
                            <td><strong>Date Created</strong></td>
                            <td>{!! $page->created_at !!}</td>
                        </tr>
                        <tr>
                            <td><strong>Date Updated</strong></td>
                            <td>{!! $page->updated_at !!}</td>
                        </tr>
                        </tbody>
                    </table>
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