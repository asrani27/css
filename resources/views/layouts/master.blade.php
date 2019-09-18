<!DOCTYPE html>
<html>

@include('layouts.head')

<body class="hold-transition skin-purple layout-top-nav">

<div class="wrapper">

    @yield('title')

    <div class="content-wrapper">

        @yield('content')

    </div>

</div>
    {{-- @include('layouts.footer') --}}
  <!-- jQuery 3 -->
  <script src="{{url('LTE/bower_components/jquery/dist/jquery.min.js')}}"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="{{url('LTE/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  <!-- SlimScroll -->
  <script src="{{url('LTE/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
  <!-- FastClick -->
  <script src="{{url('LTE/bower_components/fastclick/lib/fastclick.js')}}"></script>
  <!-- AdminLTE App -->
  <script src="{{url('LTE/dist/js/adminlte.min.js')}}"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="{{url('LTE/dist/js/demo.js')}}"></script>

  @stack('add_js')

</body>

</html>
