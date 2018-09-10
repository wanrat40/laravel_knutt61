<!Doctype html>
<html>
<head>
  <title>From Layout Laravel 5 – @yield('page_title')
  </title>
  {!! Html::style('bootstrap/css/bootstrap.min.css') !!}
</head>
<body>
  <div class='container'>
    <h1>From Layout</h1>
    @yield('content')
  </div>
      {!! Html::script('https://code.jquery.com/jquery-3.3.1.slim.min.js') !!}
      {!! Html::script('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js') !!}
      {!! Html::style('bootstrap/css/bootstrap.min.js') !!}
</body>
</html>
