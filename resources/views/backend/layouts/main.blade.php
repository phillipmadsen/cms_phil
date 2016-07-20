<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="Neon Admin Panel"/>
    <meta name="author" content=""/>
    <title>{{lang('Admin Panel')}} - @yield('title')</title>
    <link rel="stylesheet" href="{{url('panel/assets')}}/css/font-icons/entypo/css/entypo.css">
    <link rel="stylesheet" href="{{url('panel/assets')}}/js/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="{{url('panel/assets')}}/css/font-icons/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
    <link rel="stylesheet" href="{{url('panel/assets')}}/css/bootstrap.css">
    <link rel="stylesheet" href="{{url('panel/assets')}}/css/neon-core.css">
    <link rel="stylesheet" href="{{url('panel/assets')}}/css/neon-theme.css">
    <link rel="stylesheet" href="{{url('panel/assets')}}/css/neon-forms.css">
    <link rel="stylesheet" href="{{url('panel/assets')}}/css/custom.css">
    @if(option('panel_theme')!="")
    <link rel="stylesheet" href="{{url('panel/assets')}}/css/skins/{{option('panel_theme')}}.css">
    @endif
    <script src="{{url('panel/assets')}}/js/jquery-1.11.0.min.js"></script>
    @yield('css')
</head>
<body class="page-body  page-fade" data-url="http://neon.dev">
<div class="page-container">
    <div class="sidebar-menu">
        @include('parts.header')
        @include('parts.sidemenu')
    </div>
    <div class="main-content">
        <div class="row">
            <div class="col-md-6 col-sm-8 clearfix">
                <ul class="user-info pull-left pull-none-xsm">
                    <li class="profile-info dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="{{Auth::user()->getProfilePicture()}}" alt="" class="img-circle"
                                 width="44"/>
                            {{Auth::user()->username}}
                        </a>
                        <ul class="dropdown-menu">
                            <li class="caret"></li>
                            <li>
                                <a href="{{url('admin/profile')}}">
                                    <i class="entypo-user"></i>
                                    {{lang('Edit Profile')}}
                                </a>
                            </li>
                            <li>
                                <a href="{{url('admin/mytasks')}}">
                                    <i class="entypo-clipboard"></i>
                                    {{lang('My Tasks')}}
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="col-md-6 col-sm-4 clearfix hidden-xs">
                <ul class="list-inline links-list pull-right">
                    @if(\App\Models\Language::count()>1)
                        <?php
                        $lid = Session::has('language') ? Session::get('language') : option('language');
                        ?>
                        <li class="dropdown language-selector">
                            {{lang('Language')}}: &nbsp;
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-close-others="true">
                                {{\App\Models\Language::find($lid)->name}}
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li>
                                    <a href="#">
                                        <span>{{\App\Models\Language::find($lid)->name}}</span>
                                    </a>
                                </li>
                                @foreach(\App\Models\Language::where('id','<>',$lid)->get() as $lang)
                                    <li>
                                        <a href="{{url('lang/switch/'.$lang->id)}}">
                                            <span>{{$lang->name}}</span>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="sep"></li>
                    @endif
                    <li>
                        <a href="{{url('admin/logout')}}">
                            {{lang('Log Out')}} <i class="entypo-logout right"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <hr/>
        @if(\Session::has('success'))
            <div class="alert alert-success" style="padding: 5px;"><i
                        class="fa fa-check"></i> {{\Session::get('success')}}</div>
        @endif
        @if(\Session::has('error'))
            <div class="alert alert-danger" style="padding: 5px;"><i
                        class="fa fa-warning"></i> {{\Session::get('error')}}</div>
        @endif
        @if($errors->any())
            @foreach($errors->all() as $error)
                <div class="alert alert-danger" style="padding: 5px;"><i
                            class="fa fa-warning"></i> {{$error}}</div>
            @endforeach
        @endif
        @yield('content')
    </div>
    @yield('modals')
    <div class="modal fade" id="modal_snippets">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">{{lang('Add Row')}}</h4>
                </div>
                <div class="modal-body">
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{url('panel/assets/')}}/js/toastr.js"></script>
<script src="{{url('panel/assets')}}/js/jquery-ui/jquery-ui.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/TweenMax.min.js"></script>
<script src="{{url('panel/assets')}}/js/bootstrap.js"></script>
<script src="{{url('panel/assets')}}/js/joinable.js"></script>
<script src="{{url('panel/assets')}}/js/resizeable.js"></script>
@yield('js')
<script src="{{url('panel/assets')}}/js/neon-custom.js"></script>
</body>
</html>