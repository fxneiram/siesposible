<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{env('APP_NAME')}}</title>
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('public/assets/img/favicon.png') }}">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href='http://fonts.googleapis.com/css?family=Ruda&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <!-- Bootstrap 3.3.2 -->
    <link href="{{ asset('public/assets/css/dataTables.bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <!-- Bootstrap 3.3.2 -->
    <link href="{{ asset('public/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <!-- Font Awesome Icons -->
    <link href="{{ asset('public/assets/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css"/>
    <!-- Select2 -->
    <link href="{{ asset('public/css/select2.min.css') }}" rel="stylesheet" type="text/css"/>
    <!-- Theme style -->
    <link href="{{ asset('public/assets/css/theme.min.css') }}" rel="stylesheet" type="text/css"/>
    <!-- AdminLTE Skins. Choose a skin from the css/skins-->
    <link href="{{ asset('public/assets/css/theme-skin.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('public/assets/css/pace.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('public/assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('public/assets/plugins/pikaday/pikaday.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('public/assets/plugins/chosen/chosen.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('public/assets/plugins/animsition/css/animsition.min.css') }}" rel="stylesheet"
          type="text/css">
    <link href="{{ asset('public/assets/plugins/amaranjs//css/amaran.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('public/assets/css/style.css') }}" rel="stylesheet" type="text/css"/>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body class="skin-blue sidebar-mini">
<div class="wrapper animsition">
    <header class="main-header">
        <a href="{{url('/')}}" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>C</b>I 2</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><img src="{{ asset('public/assets/img/logo.png') }}" alt="logo"/></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-fixed-top navbar-default" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">

                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">

                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="{{ url('profile') }}"
                                       class="btn btn-primary btn-sm btn-flat">{{trans('application.edit_profile')}}</a>
                                </div>
                                <div class="pull-right">
                                    <a href="{{ route('logout') }}"
                                       class="btn btn-danger btn-sm btn-flat">{{trans('application.logout')}}</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">

            </div>
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">

                <li class="header">Menú</li>
                @include('nav')
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @yield('content')
    </div><!-- /.content-wrapper -->
    <div id="ajax-modal" class="modal fade" role="dialog" data-backdrop="static"></div>
</div><!-- ./wrapper -->
<!-- jQuery 2.1.3 -->
<script src="{{ asset('public/assets/js/jquery-2.1.3.min.js') }}"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="{{ asset('public/assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
<!-- Bootstrap Dialog -->
<script src="{{ asset('public/assets/js/bootstrap-dialog.js') }}"></script>
<!-- Select2 -->
<script src="{{ asset('public/js/select2.min.js') }}"></script>
<!-- Jquery Datatables -->
<script src="{{ asset('public/assets/js/jquery.dataTables.js') }}"></script>
<!-- Datatables -->
<script src="{{ asset('public/assets/js/datatables.js') }}"></script>
<!-- Pace.js -->
<script src="{{ asset('public/assets/js/pace.min.js') }}"></script>
<!-- summernote.js javascript -->
<script src="{{ asset('public/assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
<!-- datepicker.js javascript-->
<script src="{{ asset('public/assets/plugins/pikaday/moment.js') }}"></script>
<script src="{{ asset('public/assets/plugins/pikaday/pikaday.js') }}"></script>
<script src="{{ asset('public/assets/plugins/pikaday/pikaday.jquery.js') }}"></script>
<!-- chosen.js javascript-->
<script src="{{ asset('public/assets/plugins/chosen/chosen.jquery.js') }}"></script>
<script src="{{ asset('public/assets/plugins/animsition/js/jquery.animsition.min.js') }}"
        type="text/javascript"></script>
<!-- validator.js javascript-->
<script src="{{ asset('public/assets/js/validator.min.js') }}"></script>
<!-- toastr.js javascript-->
<script src="{{ asset('public/assets/plugins/amaranjs/js/jquery.amaran.min.js') }}"></script>
<!-- custom.js -->
<script src="{{ asset('public/assets/js/app.js') }}"></script>
<script src="{{ asset('public/assets/js/custom.js') }}"></script>
<script type="text/javascript">
    function getPosition() {
        if ("geolocation" in navigator) { //check geolocation available
            console.log("Intentando obtener localizacion");

            navigator.geolocation.getCurrentPosition(function (position) {
                $("#result").html("Found your location <br />Lat : " + position.coords.latitude + " </br>Lang :" + position.coords.longitude);
                $("#gps").val(position.coords.latitude + ',' + position.coords.longitude);
                console.log(position);
                alert("posicion obtenida... lat: " + position.coords.latitude + " lon: " + position.coords.longitude);
            }, function (errorObj) {
                alert(errorObj.code + ": " + errorObj.message);

                alert("something wrong take this lat " + 26.0546106);
                alert("something wrong take this lng " + -98.3939791);

            }, {enableHighAccuracy: true, maximumAge: 10000});

        } else {
            alert("Funcion no soportada");
        }
    }
</script>
@yield('scripts')
@include('common.common_js')
@if (Session::has('flash_notification.level'))
    <?php $message_type = Session::get('flash_notification.level'); ?>
    @if($message_type == 'success')
        <script>
            $.amaran({
                'theme': 'awesome ok',
                'content': {
                    title: 'Success !',
                    message: '{{ Session::get('flash_notification.message') }}!',
                    info: '',
                    icon: 'fa fa-check-square-o'
                },
                'position': 'bottom right',
                'outEffect': 'slideBottom'
            });
        </script>
    @elseif($message_type == 'danger')
        <script>
            $.amaran({
                'theme': 'awesome error',
                'content': {
                    title: 'Error !',
                    message: '{{ Session::get('flash_notification.message') }}!',
                    info: '',
                    icon: 'fa fa-times-circle-o'
                },
                'position': 'bottom right',
                'outEffect': 'slideBottom'
            });
        </script>
    @endif
@endif

@yield('lasted_scripts')
</body>
</html>