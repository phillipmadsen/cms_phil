@extends('frontend/layout/shop')


@section('seo')
    <meta name="description" content="Login or Register for a Grace Company Account">
    <meta name="keywords" content="Login, Register, create account">
    <meta name="author"content="The Grace Company"/>
@endsection

@section('jsonschema')@endsection

@section('title')
Login or Register | The Grace Company
@endsection

@section('bodyschema')@endsection

@section('header_styles')
<style type="text/css">
.icheckbox_square,.iradio_square{display:block;margin:0;padding:0;width:30px;height:22px;background:url(square.png) no-repeat;border:none;cursor:pointer;}
[class^="icheckbox_"],[class*="icheckbox_"],[class^="iradio_"],[class*="iradio_"]{float:left;margin:0 5px 0 -20px;}
</style>
@endsection

@section('scripts')@endsection

@section('ppscripts')

@endsection

@section('submenu')

@endsection




@section('page-title-off')
<!-- Page Title
============================================= -->
<section id="page-title">
    <div class="container clearfix">
        <h1>My Account</h1>
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">Login</li>
        </ol>
    </div>
</section><!-- #page-title end -->
@endsection


@section('content')
<!-- Content
============================================= -->
        <section id="content">
            <div class="content-wrap">
                <div class="container clearfix">
                    <div class="col_one_third nobottommargin">
                        <div class="well well-lg nobottommargin">
                        {!! Form::open(['route' => 'signin', 'method' => 'post', 'id' => 'login-form',  'name' => 'login-form', 'class' => 'nobottommargin']) !!}
                                <h3>Login to your Account</h3>
                                <div class="col_full {{ $errors->first('email', 'has-error') }}">
                                    <label for="login-form-username">Email:</label>
                                    <input type="text" id="login-form-email" name="email" value="{!! Input::old('email') !!}" class="form-control" />
                                    <span class="help-block">{{ $errors->first('email', ':message') }}</span>
                                </div>
                                <div class="col_full {{ $errors->first('password', 'has-error') }}">
                                    <label for="login-form-password">Password:</label>
                                    <input type="password" id="login-form-password" name="password" value="" class="form-control" />
                                    <span class="help-block">{{ $errors->first('password', ':message') }}</span>
                                </div>
                                <div class="col_full nobottommargin">
                                    <button class="button button-3d nomargin" id="login-form-submit" name="login-form-submit" value="login">Login</button>
                                    {{-- <a href="{{ route('forgot-password') }}" class="fright">Forgot Password?</a> --}}
                                </div>
                        {!! Form::close() !!}
                        </div>
                    </div>
                    <div class="col_two_third col_last nobottommargin">

                        <h3>Don't have an Account? Register Now.</h3>
                        <p>Create your account today. Recieve updates on new promotions when they happen and more.</p>
                    {!! Form::open(['route' => 'signup',  'id' => 'register-form',  'name' => 'register-form', 'class' => 'nobottommargin',  'method' => 'post']) !!}
                            <div class="col_half">
                                <label for="register-form-name">First Name:</label>
                                <input type="text" id="first_name" name="first_name" value="{!! Input::old('first_name') !!}" class="form-control" />
                            </div>
                            <div class="col_half col_last">
                                <label for="register-form-name">Last Name:</label>
                                <input type="text" id="last_name" name="last_name" value="{!! Input::old('last_name') !!}" class="form-control" />
                            </div>
                            <div class="clear"></div>
                            <div class="col_half">
                                <label for="register-form-username">Choose a Username:</label>
                                <input type="text" id="register-form-username" name="register-form-username" value="" class="form-control" />
                            </div>
                            <div class="col_half col_last">
                                <label for="register-form-phone">Display Name:</label>
                                <input type="text" id="display_name" name="display_name" value="" class="form-control" />
                            </div>
                            <div class="clear"></div>
                            <div class="col_half">
                                <label for="register-form-email">Email Address:</label>
                                {!! Form::email('email', NULL, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
                            </div>
                                <div class="col_half col_last">
                                <label for="register-form-email">Re -Enter Email Address:</label>
                                <input type="text" id="email_confirm" name="email_confirm" value="" class="form-control" placeholder="confirm email" />
                            </div>
                            <div class="col_half col_last">
                                <label for="register-form-phone">Phone:</label>
                                <input type="text" id="phone" name="phone" value="" class="form-control input-mask-phone" />
                            </div>
                            <div class="clear"></div>
                            <div class="col_half">
                                <label for="register-form-password">Choose Password:</label>
                                    {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) !!}
                            </div>
                            <div class="col_half col_last">
                                <label for="register-form-repassword">Re-enter Password:</label>
                                <input type="password" id="password_confirm" name="password_confirm" value="" class="form-control" placeholder="Re-enter Password" />
                            </div>
                            <div class="clear"></div>
                            <label class="control-label"> Gender <span class="symbol required"></span> </label>
                            <div class="checkbox">
                            <label class="checkbox-inline"> <input type="checkbox" class="square-grey" value="" name="female">Female </label>
                            <label class="checkbox-inline"> <input type="checkbox" class="square-grey" value="" name="male">Male </label>
                            </div>
                            <div class="clear"></div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" class="square-grey"  checked name="subscribed" >  I accept <a href="#"> Terms and Conditions</a>
                                </label>
                            </div>
                            <div class="clear"></div>
                            <div class="col_full nobottommargin">
                            <br style="clear:both" />
                                <button class="button button-3d button-black nomargin" id="register-form-submit" name="register-form-submit" value="register">Register Now</button>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </section><!-- #content end -->
@endsection

@section('footer_scripts')@endsection
@section('pp_footer_scripts')@endsection
@section('inlinejs')@endsection