<!DOCTYPE html>
<html lang="en">
<head>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Magang Asik | {{ $title }}</title>

    <!-- Bootstrap -->
    <link href="{{ asset('assets/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('assets/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ asset('assets/vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">
    
    <!-- bootstrap-progressbar -->
    <link href="{{ asset('assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{ asset('assets/vendors/jqvmap/dist/jqvmap.min.css') }}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('assets/vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('assets/css/custom.min.css') }}" rel="stylesheet">
  </head>
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
  <div class="container">
    @yield('content')
  </div>

  <!-- jQuery -->
  <script src="{{ asset('assets/vendors/jquery/dist/jquery.min.js') }}"></script>
  <!-- Bootstrap -->
  <script src="{{ asset('assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <!-- FastClick -->
  <script src="{{ asset('assets/vendors/fastclick/lib/fastclick.js') }}"></script>
  <!-- NProgress -->
  <script src="{{ asset('assets/vendors/nprogress/nprogress.js') }}"></script>
  <!-- Chart.js -->
  <script src="{{ asset('assets/vendors/Chart.js/dist/Chart.min.js') }}"></script>
  <!-- gauge.js -->
  <script src="{{ asset('assets/vendors/gauge.js/dist/gauge.min.js') }}"></script>
  <!-- bootstrap-progressbar -->
  <script src="{{ asset('assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
  <!-- iCheck -->
  <script src="{{ asset('assets/vendors/iCheck/icheck.min.js') }}"></script>
  <!-- Skycons -->
  <script src="{{ asset('assets/vendors/skycons/skycons.js') }}"></script>
  <!-- Flot -->
  <script src="{{ asset('assets/vendors/Flot/jquery.flot.js') }}"></script>
  <script src="{{ asset('assets/vendors/Flot/jquery.flot.pie.js') }}"></script>
  <script src="{{ asset('assets/vendors/Flot/jquery.flot.time.js') }}"></script>
  <script src="{{ asset('assets/vendors/Flot/jquery.flot.stack.js') }}"></script>
  <script src="{{ asset('assets/vendors/Flot/jquery.flot.resize.js') }}"></script>
  <!-- Flot plugins -->
  <script src="{{ ('assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js') }}"></script>
  <script src="{{ ('assets/vendors/flot-spline/js/jquery.flot.spline.min.js') }}"></script>
  <script src="{{ ('assets/vendors/flot.curvedlines/curvedLines.js') }}"></script>
  <!-- DateJS -->
  <script src="{{ ('assets/vendors/DateJS/build/date.js') }}"></script>
  <!-- JQVMap -->
  <script src="{{ ('assets/vendors/jqvmap/dist/jquery.vmap.js') }}"></script>
  <script src="{{ ('assets/vendors/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
  <script src="{{ ('assets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') }}"></script>
  <!-- bootstrap-daterangepicker -->
  <script src="{{ ('assets/vendors/moment/min/moment.min.js') }}"></script>
  <script src="{{ ('assets/vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>

  <!-- Custom Theme Scripts -->
  <script src="{{ ('assets/js/custom.min.js') }}"></script>
</body>
</html>