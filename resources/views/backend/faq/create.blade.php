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
        <li><a href="{!! url(getLang(). '/admin/faq') !!}"><i class="fa fa-question"></i> Faq</a></li>
        <li class="active">Add Faq</li>
            </ol>
            <div class="page-header">
             <h1> Faq <small> | Add Faq</small> </h1>
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



                {!! Form::open(array('action' => '\Fully\Http\Controllers\Admin\FaqController@store')) !!}
                <!-- Question -->
                <div class="control-group {!! $errors->has('question') ? 'has-error' : '' !!}">
                    <label class="control-label" for="question">Question</label>

                    <div class="controls">
                        {!! Form::text('question', null, array('class'=>'form-control', 'id' => 'question', 'placeholder'=>'Question', 'value'=>Input::old('question'))) !!}
                        @if ($errors->first('question'))
                        <span class="help-block">{!! $errors->first('question') !!}</span>
                        @endif
                    </div>
                </div>
                <br>

                <!-- Answer -->
                <div class="control-group {!! $errors->has('answer') ? 'has-error' : '' !!}">
                    <label class="control-label" for="answer">Answer</label>

                    <div class="controls">
                        {!! Form::textarea('answer', null, array('class'=>'form-control', 'id' => 'answer', 'placeholder'=>'Answer', 'value'=>Input::old('answer'))) !!}
                        @if ($errors->first('answer'))
                        <span class="help-block">{!! $errors->first('answer') !!}</span>
                        @endif
                    </div>
                </div>
                <br>
                <!-- Form actions -->
                {!! Form::submit('Save Changes', array('class' => 'btn btn-success')) !!}
                <a href="{!! url(getLang(). '/admin/faq') !!}" class="btn btn-default">&nbsp;Cancel</a>
                {!! Form::close() !!}





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