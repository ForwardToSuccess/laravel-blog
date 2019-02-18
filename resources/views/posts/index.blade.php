@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    @foreach ($posts as $post)
        <div class="col-sm-6">    
            <a href="/article/{{ $post->id }}.html">{{ $post->title }}</a>
            <p>{{ $post->description }}</p>
            <a href="/article/{{ $post->id }}.html" class="btn btn-primary">Подробнее</a>
        </div>
    @endforeach
    </div>
</div>

@endsection