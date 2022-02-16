@extends('layout')

@section('content')
    <img src="/img/blog.png" width="60%">
    <h3>{{ $article->title }}</h3>
{{ $article->body }}
@endsection
