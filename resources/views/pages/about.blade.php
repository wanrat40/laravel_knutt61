@extends('layouts.main')
@section('site_title', 'About Me')

@section('content')
	<div class="panel-header">
		<h1>About Me: {{ $first }} {{ $last }}</h1> 
	</div>

	<p>I am a programmer who love in PHP and going to be a laravel geek.</p>
    <h4>Favorite Quote</h4>
    <blockquote>
        <p>Life is like marathon. To keep your balance, you must keep running.</p>
        <footer>Kim Lee</footer>
    </blockquote>

	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">My Skills</h3>
		</div>
		<div class="panel-heading">
			<ul class="list-group">
				@foreach($skills as $skill)
            		<li class="list-group-item">{{ $skill }}</li>
      			@endforeach
			</ul>
		</div>
	</div>

	<div class="row">
        <div class="col-md-3 col-sm-4 col-xs-6 well well-lg">
            <i class="glyphicon glyphicon-film"></i>
            One Piece
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6 well well-lg">
            <i class="glyphicon glyphicon-music"></i>
			Versace on the floor
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6 well well-lg">
            <i class="glyphicon glyphicon-heart"></i>
            Laravel 5_5
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6 well well-lg">
            <i class="glyphicon glyphicon-plane"></i>
            Glasgow, Scotland
        </div>
    </div>

	{{--<a href="{{ action('PageController@contact') }}"> --}}
		{{--Contact--}}
	{{--</a>--}}

	{{--<br />--}}
	{{--<a href="{{ action('ArticlesController@show', [1]) }}">--}}
   		{{--Article 1--}}
   	{{--</a>--}}

   	{{--<br />--}}
   	{{--<a href="{{ url('pages/contact') }}">Contact</a>--}}

   	{{--<br />--}}
   	{{--<a href="{{ url('articles', [1, 'edit']) }}"> --}}
   		{{--Edit Article 1--}}
	{{--</a>--}}

	<br />
	{{--{!! Html::link("pages/contact", "Contact", ["class" => "btn"]) !!}--}}
	{{--<a href="{{ action('PageController@contact') }}">Contact</a>--}}

	<br />
	{{--{!! Html::image("images/laravel.png", "alt", ["class" => "img"]) !!}--}}
	<img src="{{ URL::asset('images/laravel.png') }}" alt="Laravel logo" width="150" height="110">

@stop
