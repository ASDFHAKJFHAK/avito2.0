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
	<h1>{{ $post->damage}}</h1>
	<br>
	<a href="{{ route('index') }}">На главную</a>
	@endsection('main')
</body>
</html>