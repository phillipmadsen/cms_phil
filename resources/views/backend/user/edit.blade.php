
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
            <li class="active">Update User</li>
            </ol>
            <div class="page-header">
                <h1> User <small> | Update User</small> </h1>
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
                        <a class="btn btn-default " href="{!! url(getLang() .'/admin/user') !!}"> List Users </a>
                        <a class="btn btn-default active" href="javascript:void(0)"> <i class="fa fa-plus"></i> Update User </a>
                        {{-- <a class="btn btn-default" href="{!! url(getLang() .'/admin/role/create') !!}"> <i class="fa fa-plus"></i> Add Role </a> --}}
                    </div>
                </div>


                <div class="col-md-10">
                        {!! Form::open( array( 'route' => array(getLang(). '.admin.user.update', $user->id), 'method' => 'PATCH')) !!}
                        <!-- First Name -->
                        <div class="control-group {!! $errors->has('first-name') ? 'has-error' : '' !!}">
                            <label class="control-label" for="first-name">First Name</label>

                            <div class="controls">
                                {!! Form::text('first_name', $user->first_name, array('class'=>'form-control', 'id' => 'first_name', 'placeholder'=>'First Name', 'value'=>Input::old('first_name'))) !!}
                                @if ($errors->first('first-name'))
                                <span class="help-block">{!! $errors->first('first-name') !!}</span>
                                @endif
                            </div>
                        </div>
                        <br>
                        <!-- Last Name -->
                        <div class="control-group {!! $errors->has('last-name') ? 'has-error' : '' !!}">
                            <label class="control-label" for="last-name">Last Name</label>

                            <div class="controls">
                                {!! Form::text('last_name', $user->last_name, array('class'=>'form-control', 'id' => 'last_name', 'placeholder'=>'Last Name', 'value'=>Input::old('last_name'))) !!}
                                @if ($errors->first('last-name'))
                                <span class="help-block">{!! $errors->first('last-name') !!}</span>
                                @endif
                            </div>
                        </div>
                        <br>
                        <!-- Email -->
                        <div class="control-group {!! $errors->has('email') ? 'has-error' : '' !!}">
                            <label class="control-label" for="email">Email</label>

                            <div class="controls">
                                {!! Form::text('email', $user->email, array('class'=>'form-control', 'id' => 'email', 'placeholder'=>'Email', 'value'=>Input::old('email'))) !!}
                                @if ($errors->first('email'))
                                <span class="help-block">{!! $errors->first('email') !!}</span>
                                @endif
                            </div>
                        </div>
                        <br>

                        <!-- Role -->
                        <div class="control-group {!! $errors->has('is_published') ? 'has-error' : '' !!}">
                            <label class="control-label" for="groups">Roles</label>
                            <div class="controls">

                                @foreach($roles as $id=>$role)
                                <label><input {!! ((in_array($role, $userRoles)) ? 'checked' : '') !!} type="checkbox" value="{!! $id !!}" name="groups[{!! $role !!}]">  {!! $role !!}</label>
                                @endforeach

                            </div>
                        </div>
                        <br>

                        <!-- Form actions -->
                        {!! Form::submit('Save Changes', array('class' => 'btn btn-success')) !!}
                        <a href="{!! url(getLang() . '/admin/user') !!}"
                           class="btn btn-default">
                            &nbsp;Cancel
                        </a>
                        {!! Form::close() !!}
                    </div>

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
