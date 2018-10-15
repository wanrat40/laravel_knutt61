@extends('layouts.main')

@section('page_title', 'Articles Page')

@section('content')

    @foreach($articles as $article)
        <div class="card mt-2 mb-1">
            <div class="card-header">
                    Article ID: {{ $article->id }}
            </div>



            <div class="card-body">
                <h5 class="card-title">
                    {{ $article->title }}

                </h5>
                <p class="card-text">{{ $article->body }} </p>
            </div>
            <div class="card-footer">
                <p>
                    {{ $article->published_at->diffForHumans() }}

                <div class=panel-footer>
                    By <strong>{{ $article->user->name }}</strong>:&nbsp;
                    {{ $article->published_at->diffForHumans() }}
                </div>

                    <span class="float-right">
                        <a href="{{ url('articles/'. $article->id) }}" class="btn btn-dark">
                            more
                        </a>
                    </span>
                </p>
            </div>
        </div>
    @endforeach
@stop
