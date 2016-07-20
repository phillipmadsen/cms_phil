 @extends('backend/layout/clip')

@section('topscripts')

@endsection


@section('pagetitle')
    <div class="row">
        <div class="col-sm-12">

            <!-- start: PAGE TITLE & BREADCRUMB -->
            <ol class="breadcrumb">
            <li><a href="{!! url(getLang() . '/admin') !!}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                        <li><a href="{!! url(getLang(). '/admin/user') !!}"><i class="fa fa-user"></i> User</a></li>
                        <li class="active">Show User</li>
            </ol>
            <div class="page-header">
             <h1> User <small> | Show User</small> </h1>
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
                    @include('flash::message')



<div class="space12">
    <div class="btn-group btn-group-lg">
        <a class="btn btn-default active" href="{!! langRoute('admin.user') !!}"> Articles </a>
        <a class="btn btn-default hidden-xs" href="javascript:void(0)"> <i class="fa fa-plus"></i> Add User </a>
        <a class="btn btn-default" href="{!! langRoute('admin.role.create') !!}"> <i class="fa fa-plus"></i> Add Role </a>
    </div>
</div>

<div class="container">
    <div class="col-lg-10">
        <div class="pull-left">
            <div class="btn-toolbar">
                <a href="{!! langRoute('admin.user.index') !!}"
                   class="btn btn-primary"> <span class="glyphicon glyphicon-arrow-left"></span>&nbsp;Back </a>
            </div>
        </div>

            <table class="table table-striped">
                <tbody>
                <tr>
                    <td><strong>Avatar</strong></td>
                    <td><img src="{!! gravatarUrl($user->email) !!}" alt="{!! $user->email !!}"/></td>
                </tr>
                <tr>
                    <td><strong>First Name</strong></td>
                    <td>{!! $user->first_name !!}</td>
                </tr>
                <tr>
                    <td><strong>Last Name</strong></td>
                    <td>{!! $user->last_name !!}</td>
                </tr>
                <tr>
                    <td><strong>Email</strong></td>
                    <td>{!! $user->email !!}</td>
                </tr>
                <tr>
                    <td><strong>Date Created</strong></td>
                    <td>{!! $user->created_at !!}</td>
                </tr>
                <tr>
                    <td><strong>Last Login</strong></td>
                    <td>{!! $user->last_login !!}</td>
                </tr>
                </tbody>
            </table>
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

@endsection
