@extends('layout')

@section('content')
 <img src="img/blog.png" width="60%">

@foreach($articles as $article)
        <h3><a href="/articles/{{ $article->id }}">{{ $article->title }}</a></h3>
@endforeach
@endsection
