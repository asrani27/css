<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
</head>
<body>
    <div id="app">
        <p> Ini Adalah event Listener</p>
    </div>
    <script src="{{url('LTE/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <script src="../../js/app.js" charset="utf-8"></script>
<script type="text/javascript">
    $(document).ready(function() {
        Echo.channel('channelDemoEvent')
            .listen('eventTrigger', (e) => {
                console.log('realtime jalan bro test');
                //alert('Even realtime berjalan');
            });
        });
    </script>
</body>
</html>