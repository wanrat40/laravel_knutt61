@extends('layouts.main')

@section('page_title', 'Article No '.$article->id)

@section('content')
    <div class="card mb-2">
        <div class="card-header">
            <h1>{{ $article->title }}</h1>
        </div>

        {{--<div class="card-header">--}}
            {{--{{ $article->title }}--}}
        {{--</div>--}}
        <div class="card-body">
            {{ $article->body }}
        </div>

        <div class="card-footer">
            {{--By <strong>{{ $article->user->name }}</strong>:&nbsp;--}}
            {{ $article->published_at->diffForHumans() }}


            @unless($article->tags->isEmpty())
                <div>
                    @foreach($article->tags as $tag)
                        <span class="label label-default"> {{ $tag->name }} </span> &nbsp
                    @endforeach
                </div>
            @endunless
        </div>
    </div>

    <div class="row">
        <div class="col-12 justify-content-end d-flex btn-toolbar">
            {{--<a class="btn btn-primary" href="{{ url("articles/{$article->id}/edit") }}">--}}
                {{--Edit--}}
            {{--</a>--}}
            {{--{!! Form::open(['method' => 'DELETE', 'url'=>'articles/'.$article->id]) !!}--}}
            {{--{!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}--}}
            {{--{!! Form::close() !!}--}}

            <div class="btn-group mr-1">
                <form action="{{action('ArticleController@edit', $article->id, "/edit")}}" method="get">
                    @csrf
                    {{--<input class="btn btn-primary" type="submit" value="Edit" />--}}
                    <button class="btn btn-primary" type="submit">
                        Edit
                    </button>
                </form>
            </div>
            <div class="btn-group">
                <form action="{{action('ArticleController@destroy', $article->id)}}" method="post">
                    @csrf
                    <input name="_method" type="hidden" value="DELETE">
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </div>
        </div>
    </div>

@stop
