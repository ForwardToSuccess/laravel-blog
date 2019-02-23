@extends('layouts.app')

@section('content')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/#">Главная</a></li>
    <li class="breadcrumb-item active" aria-current="page">Блог</li>
  </ol>
</nav>

<div class="container">
	<h1>Блог</h1>
    <div class="row">
    @foreach ($posts as $post)
        <div class="col-sm-6">    
            <h3><a href="/blog/{{ $post->id }}.html">{{ $post->title }}</a></h3>
            <p>{{ $post->description }}</p>
            <p><a href="/blog/{{ $post->id }}.html" class="btn btn-primary">Подробнее</a></p>
        </div>
    @endforeach
    </div>
	{{ $posts->links() }}
</div>
@endsection