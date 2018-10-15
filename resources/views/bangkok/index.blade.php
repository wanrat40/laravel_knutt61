@extends('layouts.principal')

@section('page_title', 'Hello Page')

@section('content')
    <h1>{{ $title }}</h1>
    <p>{{ $subtitle }}</p>
    {{$htmlsyntax}}
    {!!$htmlsyntax!!}
    <p>
    {{'<em>This text is under the emphasized HTML syntax</em>'}}
    </p>
    <p>
    {!!'<em>This text is under the emphasized HTML syntax</em>'!!}
    </p>
    @{{ Test }}
    {{-- Text Comment --}}
@stop
