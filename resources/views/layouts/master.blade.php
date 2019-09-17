<!DOCTYPE html>
<html>

@include('layouts.head')

<body class="hold-transition skin-purple layout-top-nav">

<div class="wrapper">

    @yield('title')

    <div class="content-wrapper">

        @yield('content')

    </div>

    {{-- @include('layouts.footer') --}}

</div>

</body>

</html>
