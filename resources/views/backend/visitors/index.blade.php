@extends('layouts.main')

@section('title')
    {!! lang('Visitors') !!}
@stop


@section('css')
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.5/css/jquery.dataTables.min.css"/>
    <link rel="stylesheet"
          href="//cdn.datatables.net/plug-ins/f2c75b7247b/integration/bootstrap/3/dataTables.bootstrap.css"/>
@stop


@section('content')
    <h3><i class="fa fa-eye"></i> {{lang('Visitors')}}</h3>
    <a class="btn btn-danger" data-toggle="modal" href="#clear_stats"><i
                class="fa fa-trash-o"></i> {{lang('Clear data')}}</a>

    <hr/>
    <div class="row">
        <div class="col-sm-4">
            <div class="tile-stats tile-neon-red">
                <div class="icon"><i class="entypo-user"></i></div>
                <div class="num" data-start="0" data-end="{{$os_percent}}" data-postfix="%" data-duration="1400"
                     data-delay="0">{{$os_percent}}
                </div>
                <h3>{{$most_frequent_os}}</h3>

                <p>{{lang('Most used operating system')}}</p>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="tile-stats tile-neon-blue">
                <div class="icon"><i class="entypo-user"></i></div>
                <div class="num" data-start="0" data-end="{{$browser_percent}}" data-postfix="%" data-duration="1400"
                     data-delay="0">{{$browser_percent}}
                </div>
                <h3>{{$most_frequent_browser}}</h3>

                <p>{{lang('Most used web browser')}}</p>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="tile-stats tile-green">
                <div class="icon"><i class="entypo-user"></i></div>
                <div class="num" data-start="0" data-end="{{$returning_percent}}" data-postfix="%" data-duration="1400"
                     data-delay="0">{{$returning_percent}}
                </div>
                <h3>{{$returned}}/{{$all}} {{lang('have returned to the site')}}</h3>

                <p>{{lang('% of the visitors have returned')}}</p>
            </div>
        </div>
    </div>

    <div class="table-responsive" style="margin-top:30px;">
        <table id="table" class="table table-striped table-bordered">
            <thead>
            <tr>
                <th class="col-md-3">{{lang('Ip')}}</th>
                <th class="col-md-2">{{lang('Country')}}</th>
                <th class="col-md-2">{{lang('Operating System')}}</th>
                <th class="col-md-2">{{lang('Browser')}}</th>
                <th class="col-md-2">{{lang('Has Returned')}}</th>
                <th class="col-md-1">{{lang('Returns')}}</th>
            </tr>
            </thead>
            <tbody>
            @foreach($visitors as $visitor)
                <tr>
                    <td>{{$visitor->ip}}</td>
                    <td>{{$visitor->country}}</td>
                    <td>{{$visitor->os}}</td>
                    <td>{{$visitor->browser}}</td>
                    <td>{{$visitor->has_returned?lang('Yes'):lang('No')}}</td>
                    <td>{{$visitor->returns}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@stop

@section('modals')
    <div class="modal fade" id="clear_stats">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">{{lang("Are you sure")}}</h4>
                </div>
                <div class="modal-body">
                    {{lang('Are you sure you want to delete all existing visitors data')}}?
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-default" data-dismiss="modal">{{lang('No')}}</a>
                    <a href="{{url('admin/visitors/clear')}}" class="btn btn-danger">{{lang('Yes')}}</a>
                </div>
            </div>
        </div>
    </div>
@stop

@section('js')
    <script src="//cdn.datatables.net/1.10.5/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.datatables.net/plug-ins/f2c75b7247b/integration/bootstrap/3/dataTables.bootstrap.js"></script>
    <script>
        $('#table').dataTable({
            "columns": [
                null,
                null,
                null,
                null,
                null,
                null,

            ]
        });
    </script>
@stop