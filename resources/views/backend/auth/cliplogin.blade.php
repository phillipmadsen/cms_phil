<!DOCTYPE html>
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
    <!--<![endif]-->
    <!-- start: HEAD -->
    <head>
        <title>Grace Management Login</title>
        <!-- start: META -->
        <meta charset="utf-8" />
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta content="" name="description" />
        <meta content="Phillip Madsen" name="author" />
        <!-- end: META -->
        <!-- start: MAIN CSS -->
        <link rel="stylesheet" href="{!! asset('/clip/assets/plugins/bootstrap/css/bootstrap.min.css') !!}">
        <link rel="stylesheet" href="{!! asset('/clip/assets/plugins/font-awesome/css/font-awesome.min.css') !!}">
        <link rel="stylesheet" href="{!! asset('/clip/assets/fonts/style.css') !!}">
        <link rel="stylesheet" href="{!! asset('/clip/assets/css/main.css') !!}">
        <link rel="stylesheet" href="{!! asset('/clip/assets/css/main-responsive.css') !!}">
        <link rel="stylesheet" href="{!! asset('/clip/assets/plugins/iCheck/skins/all.css') !!}">
        <link rel="stylesheet" href="{!! asset('/clip/assets/plugins/bootstrap-colorpalette/css/bootstrap-colorpalette.css') !!}">
        <link rel="stylesheet" href="{!! asset('/clip/assets/plugins/perfect-scrollbar/src/perfect-scrollbar.css') !!}">
        {{-- <link rel="stylesheet" href="{!! asset('/clip/assets/css/theme_light.css') !!}" type="text/css" id="skin_color"> --}}
        <link rel="stylesheet" href="{!! asset('/clip/assets/css/theme_dark.css') !!}" type="text/css" id="skin_color">
        <link rel="stylesheet" href="{!! asset('/clip/assets/css/print.css') !!}" type="text/css" media="print"/>
        <!--[if IE 7]>
        <link rel="stylesheet" href="{!! asset('/clip/assets/plugins/font-awesome/css/font-awesome-ie7.min.css') !!}">
        <![endif]-->
        <!-- end: MAIN CSS -->
        <!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
        <!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
    </head>
    <body class="login example1">
        <div class="main-login col-sm-4 col-sm-offset-4">
            <div class="logo">GRACE<i class="clip-clip"></i>ADMIN</div>
            <!-- start: LOGIN BOX -->
            <div class="box-login">
@yield('login-content')

            </div>
            <!-- end: LOGIN BOX -->
            <!-- start: FORGOT BOX -->
            <div class="box-forgot">
@yield('forgot-content')
            </div>
            <!-- end: FORGOT BOX -->
            <!-- start: REGISTER BOX -->
            <div class="box-register">

@yield('register-content')
            </div>
            <!-- end: REGISTER BOX -->
            <!-- start: COPYRIGHT -->
            <div class="copyright">
                2016 &copy; GraceAdmin by Phillip Madsen.
            </div>
            <!-- end: COPYRIGHT -->
        </div>
        <!-- start: MAIN JAVASCRIPTS -->
        <!--[if lt IE 9]>
        <script src="{!! asset('/clip/assets/plugins/respond.min.js') !!}"></script>
        <script src="{!! asset('/clip/assets/plugins/excanvas.min.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('/clip/assets/plugins/jQuery-lib/1.10.2/jquery.min.js') !!}"></script>
        <![endif]-->
        <!--[if gte IE 9]><!-->
        <script src="{!! asset('/clip/assets/plugins/jQuery-lib/2.0.3/jquery.min.js') !!}"></script>
        <!--<![endif]-->
<script src="{!! asset('/clip/assets/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js') !!}"></script>
<script src="{!! asset('/clip/assets/plugins/bootstrap/js/bootstrap.min.js') !!}"></script>
<script src="{!! asset('/clip/assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') !!}"></script>
<script src="{!! asset('/clip/assets/plugins/blockUI/jquery.blockUI.js') !!}"></script>
<script src="{!! asset('/clip/assets/plugins/iCheck/jquery.icheck.min.js') !!}"></script>
<script src="{!! asset('/clip/assets/plugins/perfect-scrollbar/src/jquery.mousewheel.js') !!}"></script>
<script src="{!! asset('/clip/assets/plugins/perfect-scrollbar/src/perfect-scrollbar.js') !!}"></script>
<script src="{!! asset('/clip/assets/plugins/less/less-1.5.0.min.js') !!}"></script>
<script src="{!! asset('/clip/assets/plugins/jquery-cookie/jquery.cookie.js') !!}"></script>
<script src="{!! asset('/clip/assets/plugins/bootstrap-colorpalette/js/bootstrap-colorpalette.js') !!}"></script>
<script src="{!! asset('/clip/assets/js/main.js') !!}"></script>
        <!-- end: MAIN JAVASCRIPTS -->
        <!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script src="{!! asset('/clip/assets/plugins/jquery-validation/dist/jquery.validate.min.js') !!}"></script>
<script src="{!! asset('/clip/assets/js/login.js') !!}"></script>
        <!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
        <script>
            jQuery(document).ready(function() {
                Main.init();
                @yield('inline')
                Login.init();
            });

            $(function () {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%' // optional
                });
            });

             $(function () {
                 $('input[name="name"]').attr('readonly', 'readonly');
                 $('input[name="name"]').css('textTransform', 'capitalize');
                 $('#display_name,#first_name,#last_name').blur(function () {
                     $('input[name="display_name"]').val(
                         $('#first_name').val() + " " + $('#last_name').val()); });
                 });
            </script>

        </script>
    </body>
    <!-- end: BODY -->
</html>