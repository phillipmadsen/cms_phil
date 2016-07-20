@extends('backend/layout/clip')

@section('topscripts')

@endsection


@section('pagetitle')
    <div class="row">
        <div class="col-sm-12">

            <!-- start: PAGE TITLE & BREADCRUMB -->
            <ol class="breadcrumb">
            <li><a href="{!! url(getLang() . '/admin') !!}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="{!! url(getLang(). '/admin/role') !!}"><i class="fa fa-user"></i> Role</a></li>
            <li class="active">Add Role</li>
            </ol>
            <div class="page-header">
                <h1> Role <small> | Add Role</small> </h1>
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
                Data
                <div class="panel-tools">
                    <a class="btn btn-xs btn-link panel-collapse collapses" href="#"> </a>
                    <a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal"> <i class="fa fa-wrench"></i> </a>
                    <a class="btn btn-xs btn-link panel-refresh" href="#"> <i class="fa fa-refresh"></i> </a>
                    <a class="btn btn-xs btn-link panel-close" href="#"> <i class="fa fa-times"></i> </a>
                </div>
            </div>
            <div class="panel-body">
     {!! Form::open(array('action' => '\Fully\Http\Controllers\Admin\RoleController@store')) !!}
        <div class="space12">
            <div class="btn-group btn-group-lg">
                <a class="btn btn-default active" href="javascript:;">Roles </a>
                {!! Form::submit('Save Role', array('class' => 'btn btn-default hidden-xs')) !!}
                <a href="{!! url(getLang() . '/admin/role') !!}" class="btn btn-default hidden-xs"> &nbsp;Cancel </a>

            </div>
        </div>
 
 



                    <!-- Role Name -->
                    <div class="control-group {!! $errors->has('name') ? 'has-error' : '' !!}">
                        <label class="control-label" for="name">Name</label>

                        <div class="controls">
                            {!! Form::text('name', null, array('class'=>'form-control', 'id' => 'name', 'placeholder'=>'Role Name', 'value'=>Input::old('name'))) !!}
                            @if ($errors->first('name'))
                            <span class="help-block">{!! $errors->first('name') !!}</span>
                            @endif
                        </div>
                    </div>
                    <br>
                    <hr>
                <div class="checkbox">
                    <div id="role-attributes" class="form-group col-sm-10">

                        <input type="hidden" value="0" name="permissions[admin.dashboard]">
                        <input type="hidden" value="0" name="permissions[admin.settings]">
                        <input type="hidden" value="0" name="permissions[admin.settings.save]">
                        <input type="hidden" value="0" name="permissions[admin.log]">
                        <input type="hidden" value="0" name="permissions[admin.form-post.index]">
                        <div class="col-md-2">
                            <label> View / Edit Dashboard </label>
                            <label> <input type="checkbox" value="1" name="permissions[admin.dashboard]"  data-toggle="toggle"data-on="Allowed"data-off="Not Allowed"data-onstyle="success"data-offstyle="danger"> </label>
                        </div>

                        <div class="col-md-2">
                        <label class="control-label"> Settings Index </label>
                        <label><input type="checkbox" value="1" name="permissions[admin.settings]" data-toggle="toggle"data-on="Allowed"data-off="Not Allowed"data-onstyle="success"data-offstyle="danger"> </label>
                        </div>

                        <div class="col-md-2">
                        <label class="control-label"> Save Settings </label>
                        <label> <input type="checkbox" value="1" name="permissions[admin.settings.save]" data-toggle="toggle"data-on="Allowed"data-off="Not Allowed"data-onstyle="success"data-offstyle="danger">  </label>
                        </div>

                        <div class="col-md-2">
                        <label class="control-label"> View / Edit Logs </label>
                        <label> <input type="checkbox" value="1" name="permissions[admin.log]" data-toggle="toggle"data-on="Allowed"data-off="Not Allowed"data-onstyle="success"data-offstyle="danger"></label>
                        </div>
                        <div class="col-md-2">
                        <label class="control-label"> Form Post / Send Email </label>
                        <label> <input type="checkbox" value="1" name="permissions[admin.form-post.index]"data-toggle="toggle"data-on="Allowed"data-off="Not Allowed"data-onstyle="success"data-offstyle="danger">  </label>
                        </div>
                    </div>
                </div>

                    <hr>

                    <div class="table-responsive col-md-10">
                        <table id="permissions-table" class="table table-condensed table-permissions table-checkboxes">
                            <thead>
                            <tr>
                                <th>Modules</th>
                                <th>Index</th>
                                <th>View</th>
                                <th>Create</th>
                                <th>Store</th>
                                <th>Edit</th>
                                <th>Update</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach (Config::get('fully.modules') as $module=>$value)
                            <tr>
                                <td>{!! ucwords(str_replace('_', ' ', $module)) !!}
                                    <input type="hidden" value="0" name="permissions[admin.{!! $module !!}.index]">
                                    <input type="hidden" value="0" name="permissions[admin.{!! $module !!}.view]">
                                    <input type="hidden" value="0" name="permissions[admin.{!! $module !!}.create]">
                                    <input type="hidden" value="0" name="permissions[admin.{!! $module !!}.store]">
                                    <input type="hidden" value="0" name="permissions[admin.{!! $module !!}.edit]">
                                    <input type="hidden" value="0" name="permissions[admin.{!! $module !!}.update]">
                                    <input type="hidden" value="0" name="permissions[admin.{!! $module !!}.destroy]">
                                </td>
                                <td><input class="icheckbox_square-grey checked" type="checkbox" value="1" checked name="permissions[admin.{!! $module !!}.index]"></td>
                                <td><input class="icheckbox_square-grey checked" type="checkbox" value="1" checked name="permissions[admin.{!! $module !!}.view]"></td>
                                <td><input class="icheckbox_square-grey checked" type="checkbox" value="1" checked name="permissions[admin.{!! $module !!}.create]"></td>
                                <td><input type="checkbox" value="1"  name="permissions[admin.{!! $module !!}.store]"  class="icheckbox_square-grey checked"></td>
                                <td><input type="checkbox" value="1" name="permissions[admin.{!! $module !!}.edit]"  class="icheckbox_square-grey checked"></td>
                                <td><input type="checkbox" value="1" name="permissions[admin.{!! $module !!}.update]"  class="icheckbox_square-grey checked"></td>
                                <td><input type="checkbox" value="1" name="permissionsadmin.[{!! $module !!}.destroy]"  class="icheckbox_square-grey"></td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>


                    </div>


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
  $(function() {
    $('#permissions-table input[type=checkbox]').bootstrapToggle({
      on: 'Allowed',
      off: 'Not Allowed'
    });


  })
</script>
@endsection

@section('clipinline')

@endsection

