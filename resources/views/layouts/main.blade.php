<!Doctype html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Breaking News - @yield('site_title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />

	{{--{!! Html::style('bootstrap/css/bootstrap.min.css') !!}--}}
	{{--<link rel="stylesheet" type="text/css" href="{{ URL::asset('bootstrap/css/bootstrap.min.css') }}">--}}
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('fontawesome-free-5.3.1-web/css/all.css') }}">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light" role="navigation">
		<div class="container-fluid">
            <a class="navbar-brand" href="#">My Story</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('articles') }}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('pages/about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('pages/contact') }}">Contact</a>
                    </li>

                    {{--<li class="nav-item">--}}
                        {{--<a class="nav-link disabled" href="#">Disabled</a>--}}
                    {{--</li>--}}
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('articles/create') }}"><i class="fas fa-plus"></i></span> New Article</a>
                    </li>

                    <li class="nav-item">
                        @if(session()->has('locale'))
                            <a class="nav-link" href="{{ url('lang/' . ((session()->get('locale')=='en')?'th':'en')) }}" class="btn"> {{ Str::upper((session()->get('locale')=='en')?'th':'en') }} </a>
                        @else
                            <a class="nav-link" href="{{ url('lang/th') }}" class="btn"> TH </a>
                        @endif

                    </li>



                    <!-- Authentication Links -->
                    {{--@if(Auth::check())--}}
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/login') }}"><i class="fas fa-sign-in-alt"></i>  Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}"><i class="fas fa-user-plus"></i> Register</a>
                        </li>

                    @else
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link  dropdown-toggle" id="navbarDropdown" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                <i class="fas fa-user"></i>
                                {{ Auth::user()->name }}
                                {{--({{Auth::user()->role->name}}) --}}
                                {{--Teerapong--}}
                                <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{route('logout')}} "
                                   onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt"></i> Logout
                                </a>

                                <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">
                                    {{ csrf_field() }}

                                </form>
                            </div>
                        </li>
                    @endguest
                    {{--@endif--}}

                    {{--<li class="nav-item dropdown">--}}
                        {{--<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                            {{--Account--}}
                        {{--</a>--}}
                        {{--<div class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
                            {{--<a class="dropdown-item" href="{{ url('pages/about') }}">About</a>--}}
                            {{--<a class="dropdown-item" href="{{ url('pages/contact') }}">Contact</a>--}}
                            {{--<div class="dropdown-divider"></div>--}}
                            {{--<a class="dropdown-item" href="www.it.kmitl.ac.th">IT KMITL</a>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                </ul>
                {{--<form class="form-inline my-2 my-lg-0">--}}
                    {{--<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">--}}
                    {{--<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>--}}
                {{--</form>--}}
            </div><!--/.nav-collapse -->
        </div>
    </nav>


			{{--<div class="navbar-collapse collapse">--}}
				{{--<ul class="nav navbar-nav">--}}
					{{--<li>--}}
					{{--<li class="active">--}}
						{{--<a href="{{ url('pages/about') }}">About</a>--}}
					{{--</li>--}}
					{{--<li>--}}
						{{--<a href="{{ url('pages/contact') }}">Contact</a>--}}
					{{--</li>--}}
					{{--@can('view-unpublished-articles', Auth::user())--}}
						{{--<li>--}}
							{{--<a href="{{ url('articles/unpublished') }}">Unpublished</a>--}}
						{{--</li>--}}
					{{--@endcan()--}}
				{{--</ul>--}}
				{{--<ul class="nav navbar-nav mr-auto">--}}
					{{--<li>--}}
						{{--<a href="{{ url('articles/create') }}"><span class="glyphicon glyphicon-plus"></span> New Article</a>--}}
					{{--</li>--}}

					{{--<li>--}}
						{{--@if(session()->has('locale'))--}}
							{{--<a href="{{ url('lang/' . ((session()->get('locale')=='en')?'th':'en')) }}" class="btn"> {{ Str::upper((session()->get('locale')=='en')?'th':'en') }} </a>--}}
						{{--@else--}}
							 {{--<a href="{{ url('lang/th') }}" class="btn"> TH </a>--}}
						{{--@endif--}}

                    {{--</li>--}}

					{{--<!-- Authentication Links -->--}}
					{{--@if(Auth::check())--}}
					{{--@guest--}}
						{{--<li><a href="{{ url('/login') }}"><i class="glyphicon glyphicon-log-in"></i>  Login</a></li>--}}
						{{--<li><a href="{{ route('register') }}"><i class="fas fa-user-plus"></i> Register</a></li>--}}

					{{--@else--}}
						{{--<li class="dropdown">--}}
							{{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">--}}
								{{--<i class="glyphicon glyphicon-user"></i>--}}
								{{--<i class="fas fa-user"></i>--}}
								{{--{{ Auth::user()->name }} ({{Auth::user()->role->name}}) <span class="caret"></span>--}}
							{{--</a>--}}

							{{--<ul class="dropdown-menu">--}}
								{{--<li>--}}
									{{--<a href="{{ route('logout') }}"--}}
									   {{--onclick="event.preventDefault();--}}
                                                     {{--document.getElementById('logout-form').submit();">--}}
										{{--<i class="glyphicon glyphicon-log-in"></i> Logout--}}
									{{--</a>--}}

									{{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
										{{--{{ csrf_field() }}--}}
									{{--</form>--}}
								{{--</li>--}}
							{{--</ul>--}}
						{{--</li>--}}
					{{--@endguest--}}
					{{--@endif--}}

				{{--</ul>--}}
			{{--</div><!--/.nav-collapse -->--}}


	<div class="container">
		@yield('content')
	</div>
	<div class="footer container-fluid">
		Copyright &copy; 2018-2019
	</div>

    <script type="text/javascript" src="{{ secure_asset('https://code.jquery.com/jquery-3.3.1.slim.min.js') }}"></script>
    <script type="text/javascript" src="{{ secure_asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('bootstrap/js/bootstrap.min.js') }}"></script>


</body>
</html>
