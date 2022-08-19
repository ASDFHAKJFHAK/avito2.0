<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Подробнее</title>
</head>
<body>
	@extends('layouts.base')
	@section('title', $post->login)

	@section('main')
	<h1>{{ $post->title}}</h1>
	<br>
	<h1>{{ $post->content}}</h1>
	<br>
	<img src="{{ asset( '/storage/' . $post->img0)}}">
	<br>
    @if (null !== ($post->img1))
    <img src="{{ asset( '/storage/' . $bb->img1)}}">
    <br>
    @endif
    @if (null !== ($post->img2))
    <img src="{{ asset( '/storage/' . $bb->img2)}}">
    <br>
    @endif
    @if (null !== ($post->img3))
    <img src="{{ asset( '/storage/' . $bb->img3)}}">
    <br>
    @endif
    @if (null !== ($post->img4))
    <img src="{{ asset( '/storage/' . $bb->img4)}}">
    <br>
    @endif	
	<h1>{{ $post->price}}</h1>
	<br>
	<a href="{{ route('index') }}">На главную</a>
	@endsection('main')
</body>
</html>