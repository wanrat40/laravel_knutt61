@extends('layouts.main')

@section('page_title', 'Create Article')

@section('content')
    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['url'=>'articles', 'method' => 'POST']) !!}

        @include('articles._form', ['submitButtonText' => 'Add Article'])

    {!! Form::close() !!}


    {{--<form action="{{ url('/articles') }}" method="POST">--}}
        {{--{{ csrf_field() }}--}}
        {{--<div class="form-group">--}}
            {{--<label>Title: </label>--}}
            {{--<input type="text" class="form-control" name="title">--}}
        {{--</div>--}}
        {{--<div class="form-group">--}}
            {{--<label>Body: </label>--}}
            {{--<textarea class="form-control" name="body" cols="50" rows="10"></textarea> </div>--}}
        {{--<div class="form-group">--}}
            {{--<input type="date" class="form-control" name="published_at" value={{\Carbon\Carbon::now()->format('Y-m-d') }}>--}}
        {{--</div>--}}
        {{--<div class="form-group">--}}
            {{--<input type="submit" class="btn btn-primary form-control" value="Add Article">--}}
        {{--</div>--}}
    {{--</form>--}}

@stop
