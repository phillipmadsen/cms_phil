@extends('backend/layout/clip')

@section('topscripts')
 

@endsection

@section('pagetitle')
    <div class="row">
        <div class="col-sm-12">
            <!-- start: PAGE TITLE & BREADCRUMB -->
            <ol class="breadcrumb">
        <li><a href="{!! url(getLang(). '/admin/role') !!}"><i class="fa fa-user"></i> Role</a></li>
        <li class="active">Update Role</li>
            </ol>
            <div class="page-header">
                      <h1> Role <small> | Update Role</small> </h1>
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
                Panel Data
                <div class="panel-tools">
                    <a class="btn btn-xs btn-link panel-collapse collapses" href="#"> </a>
                    <a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal"> <i class="fa fa-wrench"></i> </a>
                    <a class="btn btn-xs btn-link panel-refresh" href="#"> <i class="fa fa-refresh"></i> </a>
                    <a class="btn btn-xs btn-link panel-close" href="#"> <i class="fa fa-times"></i> </a>
                </div>
            </div>
            <div class="panel-body">
    {!! Form::open( array( 'route' => array(getLang(). '.admin.role.update', $role->id), 'method' => 'PATCH')) !!}
    <!-- Role Name -->
    <div class="control-group {!! $errors->has('name') ? 'has-error' : '' !!}">
        <label class="control-label" for="name">Name</label>

        <div class="controls">
            {!! Form::text('name', $role->name, array('class'=>'form-control', 'id' => 'name', 'placeholder'=>'Role Name', 'value'=>Input::old('name'))) !!}
            @if ($errors->first('name'))
            <span class="help-block">{!! $errors->first('name') !!}</span>
            @endif
        </div>
    </div>
    <br>
    <hr>
    <div class="checkbox">
        <input type="hidden" value="0" name="permissions[admin.dashboard]">
        <label>
            <input type="checkbox" value="1" @if(isset($role->permissions['admin.dashboard']) and $role->permissions['admin.dashboard'])checked="checked"@endif name="permissions[admin.dashboard]"> Dashboard
        </label>
    </div>
    <hr>
    <div class="checkbox">
        <input type="hidden" value="0" name="permissions[admin.settings.index]">
        <input type="hidden" value="0" name="permissions[admin.settings.save]">
        <label>
            <input type="checkbox" value="1" @if(isset($role->permissions['admin.settings']) and $role->permissions['admin.settings'])checked="checked"@endif name="permissions[admin.settings]"> Settings Index
            <input type="checkbox" value="1" @if(isset($role->permissions['admin.settings.save']) and $role->permissions['admin.settings.save'])checked="checked"@endif name="permissions[admin.settings.save]"> Settings Save
        </label>
    </div>
    <hr>
     <div class="checkbox">
            <input type="hidden" value="0" name="permissions[admin.log]">
            <label>
                <input type="checkbox" value="1" @if(isset($role->permissions['admin.log']) and $role->permissions['admin.log'])checked="checked"@endif name="permissions[admin.log]"> Log
            </label>
        </div>
        <hr>
        <div class="checkbox">
           <input type="hidden" value="0" name="permissions[admin.form-post.index]">
            <label>
                <input type="checkbox" value="1" @if(isset($role->permissions['admin.form-post.index']) and $role->permissions['admin.form-post.index'])checked="checked"@endif name="permissions[admin.form-post.index]"> Form Post
            </label>
        </div>
        <hr>
    <div class="table-responsive">
        <table class="table table-condensed table-permissions table-checkboxes">
            <thead>
            <tr>
                <th>Modules</th>
                <th>Index</th>
                <th>Show</th>
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
                    <input type="hidden" value="0" name="permissions[admin.{!! $module !!}.show]">
                    <input type="hidden" value="0" name="permissions[admin.{!! $module !!}.view]">
                    <input type="hidden" value="0" name="permissions[admin.{!! $module !!}.create]">
                    <input type="hidden" value="0" name="permissions[admin.{!! $module !!}.store]">
                    <input type="hidden" value="0" name="permissions[admin.{!! $module !!}.edit]">
                    <input type="hidden" value="0" name="permissions[admin.{!! $module !!}.update]">
                    <input type="hidden" value="0" name="permissions[admin.{!! $module !!}.destroy]">
                </td>
                <td>
                    <input type="checkbox" value="1" @if(isset($role->permissions['admin.'.$module.'.index']) and $role->permissions['admin.'.$module.'.index'])checked="checked"@endif name="permissions[admin.{!! $module !!}.index]">
                </td>
                <td>
                    <input type="checkbox" value="1" @if(isset($role->permissions['admin.'.$module.'.show']) and $role->permissions['admin.'.$module.'.show'])checked="checked"@endif name="permissions[admin.{!! $module !!}.show]">
                                </td>
                <td>
                    <input type="checkbox" value="1" @if(isset($role->permissions['admin.'.$module.'.view']) and $role->permissions['admin.'.$module.'.view'])checked="checked"@endif name="permissions[admin.{!! $module !!}.view]">
                </td>
                <td>
                    <input type="checkbox" value="1" @if(isset($role->permissions['admin.'.$module.'.create']) and $role->permissions['admin.'.$module.'.create'])checked="checked"@endif name="permissions[admin.{!! $module !!}.create]">
                </td>
                <td>
                    <input type="checkbox" value="1" @if(isset($role->permissions['admin.'.$module.'.store']) and $role->permissions['admin.'.$module.'.store'])checked="checked"@endif name="permissions[admin.{!! $module !!}.store]">
                </td>
                <td>
                    <input type="checkbox" value="1" @if(isset($role->permissions['admin.'.$module.'.edit']) and $role->permissions['admin.'.$module.'.edit'])checked="checked"@endif name="permissions[admin.{!! $module !!}.edit]">
                </td>
                <td>
                    <input type="checkbox" value="1" @if(isset($role->permissions['admin.'.$module.'.update']) and $role->permissions['admin.'.$module.'.update'])checked="checked"@endif name="permissions[admin.{!! $module !!}.update]">
                                </td>
                <td>
                    <input type="checkbox" value="1" @if(isset($role->permissions['admin.'.$module.'.destroy']) and $role->permissions['admin.'.$module.'.destroy'])checked="checked"@endif name="permissions[admin.{!! $module !!}.destroy]">
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <!-- Form actions -->
    {!! Form::submit('Save Changes', array('class' => 'btn btn-success')) !!}
    <a href="{!! langUrl('/admin/role') !!}"
       class="btn btn-default">
        &nbsp;Cancel
    </a>
    {!! Form::close() !!}
             </div>
        </div>
    </div>
</div>
@endsection

@section('bottomscripts')@endsection
@section('clipinline')@endsection
