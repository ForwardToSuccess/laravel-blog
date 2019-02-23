@extends('layouts.app')

@section('content')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/#">Главная</a></li>
    <li class="breadcrumb-item"><a href="/blog">Блог</a></li>
    <li class="breadcrumb-item active" aria-current="page">{{ $posts->title }}</li>
  </ol>
</nav>
<div class="container">
	<h1>{{ $posts->title }}</h1>
	<div>{{ $posts->content }}</div>
</div>

@endsection