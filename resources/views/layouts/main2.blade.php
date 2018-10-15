<!Doctype html>
<html>
<head>
    <title>From Layout Laravel 8999 – @yield('page_title')
    </title>
    {{--{!! Html::style('bootstrap/css/bootstrap.min.css') !!}--}}

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('bootstrap/css/bootstrap.min.css') }}">
</head>
<body>
    <div class='container'>
        <h1>From Layout 12345</h1>
        @yield('content')
    </div>
    {{--{!! Html::script('https://code.jquery.com/jquery-3.3.1.slim.min.js') !!}--}}
    {{--{!! Html::script('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js') !!}--}}
    {{--{!! Html::script('bootstrap/js/bootstrap.min.js') !!}--}}

    <script type="text/javascript" src="{{ secure_asset('https://code.jquery.com/jquery-3.3.1.slim.min.js') }}"></script>
    <script type="text/javascript" src="{{ secure_asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>
