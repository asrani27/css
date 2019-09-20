<!DOCTYPE html>
<html>

@stack('add_css')

<body class="hold-transition skin-purple layout-top-nav">

<div class="wrapper">

    @yield('title')

    <div class="content-wrapper">

        @yield('content')

    </div>

</div>

@stack('add_js')

</body>

</html>
