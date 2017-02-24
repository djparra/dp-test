<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> @yield('title', 'Sistema SIC')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href=" {{ asset('bootstrap/css/bootstrap.min.css')}} ">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('bootstrap/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('bootstrap/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.min.css')}}">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->
  <link rel="stylesheet" href="{{ asset('dist/css/skins/skin-blue.min.css')}}">
  <!-- Estilos propios de la aplicacion -->
  <link rel="stylesheet" href="{{ asset('css/sic.css')}}">

  <link rel="icon" href="{{ asset('dist/img/favicon.ico')}}" type="image/x-icon">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

  @yield('link_css')

</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    @include('template.nav')

    @include('template.left')

    <div class="content-wrapper">
        @yield('contenido')
    </div>

    <!-- Main Footer -->
    <footer class="main-footer">
      @include('template.bottom')
    </footer>
  </div>
  <!-- Control Sidebar -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<script src="{{ asset('plugins/jQuery/jquery-2.2.3.min.js') }} "></script>
<script src="{{ asset('dist/js/jquery-ui.min.js') }} "></script>

<!-- Bootstrap 3.3.6 -->
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }} "></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/app.js') }} "></script>

<script src="{{ asset('dist/js/demo.js') }} "></script>
<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->

 <script src=" {{ asset('plugins/daterangepicker/moment.js') }} "></script>
 <script src=" {{ asset('plugins/fullcalendar/fullcalendar.min.js') }} "></script>


      @yield('scripts')

</body>
</html>
