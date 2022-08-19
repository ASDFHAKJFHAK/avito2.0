
	<!-- ОТ КОГО НАСЛЕДЫВАТЬ ОСНОВНОЙ КОД СТРАНИЦЫ -->
	@extends('layouts.base')

	@section('title', 'Главная')

<!-- ЭТОТ БЛОК КОДА БУДЕТ ПЕРЕНЕСЕН НА ГЛАВНЫЙ СЛОЙ С ИМЕНЕМ MAIN СТИЛИ ПОДКЛЮЧАЮТЬСЯ ИМЕННО ТАМ НЕ ЗАБУДЬ ЗАКРЫТЬ СЕКЦИЮ -->
@section('main')

	<!-- цикл анологичный php  -->
@foreach ($posts as $item)
	<h1><a href="{{ route('detail', ['posts' => $item->id]) }}">{{ $item->title}}</a></h1>
	<br>
		<!-- в таких скобках можно использовать данные масива переданого через контролер -->
	<h1>{{ $item->content}}</h1>
	<img src="{{ asset( '/storage/' . $item->img0)}}">
	<br>
    @if (null !== ($item->img1))
    <img src="{{ asset( '/storage/' . $bb->img1)}}">
    <br>
    @endif
    @if (null !== ($item->img2))
    <img src="{{ asset( '/storage/' . $bb->img2)}}">
    <br>
    @endif
    @if (null !== ($item->img3))
    <img src="{{ asset( '/storage/' . $bb->img3)}}">
    <br>
    @endif
    @if (null !== ($item->img4))
    <img src="{{ asset( '/storage/' . $bb->img4)}}">
    <br>
    @endif
	<h1>{{ $item->price}}</h1>
	<br>
	<!-- ССЫЛКА ИСПОЛЬЗУЕТ НЕ URN A МАРШИРУТИЗАТОР С ЗАДАННЫМ ИМЕНЕМ -->
	<hr>
@endforeach
@endsection('main')
