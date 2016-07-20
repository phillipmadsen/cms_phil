 @extends('backend/layout/clip')

@section('topscripts')
{!! HTML::script('highcharts/highcharts.js') !!}
{!! HTML::script('highcharts/exporting.js') !!}
@endsection


@section('pagetitle')
    <div class="row">
        <div class="col-sm-12">

            <!-- start: PAGE TITLE & BREADCRUMB -->
            <ol class="breadcrumb">
            <li><a href="{!! url(getLang() . '/admin') !!}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Dashboard</li>
            </ol>
            <div class="page-header">
                   <h1> Dashboard <small>Version 1.0</small> </h1>
            </div>
            <!-- end: PAGE TITLE & BREADCRUMB -->
        </div>
    </div>
@endsection



{{-- <div class="space12">
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
                    @include('flash::message')

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
Index.init();
TableData.init();
@endsection

 <td class="center">
                        <div class="visible-md visible-lg hidden-sm hidden-xs">

                            <a href="{!! langRoute('admin.faq.edit', array($faq->id)) !!}" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i> </a>
                            <a target="_blank" href="" class="btn btn-xs btn-green tooltips" data-placement="top" data-original-title="Preview"><i class="fa fa-share"></i> </a>
                            {{-- <a target="_blank" href="{!! URL::route(' admin.faq.show', array($faq->id), ['slug' => $faq->slug]) !!}" class="btn btn-xs btn-red tooltips"  data-placement="top" data-original-title="Preview on Site"> <i class="fa fa-eye"></i> </a> --}}
                            <a href="{!! URL::route('admin.faq.delete', array($faq->id)) !!}" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Remove"><i class="fa fa-times fa fa-white"></i> </a>

                        </div>
                    </td>