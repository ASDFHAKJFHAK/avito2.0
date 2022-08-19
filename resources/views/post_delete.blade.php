
	@extends('layouts.base')
	@section('title', $post->login)

	@section('main')
	<h1>{{ $post->title}}</h1>
	<br>
	<h1>{{ $post->content}}</h1>
	<br>
	<img src="{{ asset( '/storage/' . $post->img0)}}">
	<br>
	<img src="{{ asset( '/storage/' . $post->img1)}}">
	<br>
	<img src="{{ asset( '/storage/' . $post->img2)}}">
	<br>
	<img src="{{ asset( '/storage/' . $post->img3)}}">
	<br>
	<img src="{{ asset( '/storage/' . $post->img4)}}">
	<br>
	<h1>{{ $post->price}}</h1>
	<br>
	<a href="{{ route('index') }}">На главную</a>
	<form action="{{ route('post.destroy', ['post' => $post->id]) }}" method="POST">
 		@csrf
 		@method('DELETE')
 		<input type="submit" class="btn btn-danger" value="Удалить">
	</form>
	@endsection('main')
