@extends('backend/layout/clip')

@section('topscripts')
<script type="text/javascript">
    $(document).ready(function () {
        $('#notification').show().delay(4000).fadeOut(700);
    });
</script>
@endsection


@section('pagetitle')
    <div class="row">
        <div class="col-sm-12">

            <!-- start: PAGE TITLE & BREADCRUMB -->
            <ol class="breadcrumb">
            <li><a href="{!! url(getLang() . '/admin') !!}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active"><a href="{!! url(getLang(). '/admin/user') !!}">User</a></li>
            </ol>
            <div class="page-header">
                    <h1> User <small> | Control Panel</small> </h1>
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
                        <a class="btn btn-default active" href="javascript:;"> Articles </a>
                        <a class="btn btn-default hidden-xs" href="{!! langRoute('admin.user.create') !!}"> <i class="fa fa-plus"></i> Add User </a>

                    </div>
                </div>


        @if($users->count())
        <div class="">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Joined</th>
                    <th>Last Login</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach( $users as $user )
                <tr>
                    <td> {!! link_to_route(getLang(). '.admin.user.edit', $user->first_name . " " . $user->last_name, $user->id, array( 'class' => 'btn btn-link btn-xs' )) !!} </td>
                    <td>{!! $user->email !!}</td>
                    <td>{!! $user->created_at !!}</td>
                    <td>{!! $user->last_login !!}</td>

                        <td>
                            <div class="visible-md visible-lg hidden-sm hidden-xs">
                                <a href="{!! langRoute('admin.user.edit', array($user->id)) !!}" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Edit">
                                <i class="fa fa-edit"></i>
                                </a>


                                <a target="_blank" href="{!! langRoute('admin.user.show', array($user->id)) !!}" class="btn btn-xs btn-red tooltips"  data-placement="top" data-original-title="Preview on Site">
                                <i class="fa fa-eye"></i>
                                </a>

                                <a href="{!! URL::route('admin.user.delete', array($user->id)) !!}" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Remove">
                                <i class="fa fa-times fa fa-white"></i>
                                </a>
                            </div>
                        </td>


                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        @else
        <div class="alert alert-danger">No results found</div>
        @endif
    </div>
    <div class="pull-left">
        <ul class="pagination">
            {!! $users->render() !!}
        </ul>
    </div>
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