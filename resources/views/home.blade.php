@extends('layouts.base')
@section('title', 'Вход')
@section('main')
<h2>Добро пожаловать, {{ Auth::user()->name }}!</h2>
<p class="text-right"><a href="{{ route('post.add') }}">Добавить объявление</a></p>
@if (count($posts) > 0)
<table class="table table-striped">
    <thead>
        <tr>
            <th>Товар</th>
            Глава 2. Доска объявлений 2.0: разграничение доступа, добавление, правка и удаление объявлений 65
            <th>Цена, руб.</th>
            <th colspan="2">&nbsp;</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($posts as $bb)
        <tr>
            <td><h3>{{ $bb->title }}</h3></td>
            <td>{{ $bb->content }}</td>
            <td>{{ $bb->damage }}</td>
            <td>
                <a href="{{ route('post.edit', ['post' => $bb->id]) }}">Изменить</a>
            </td>
            <td>
                <a href="{{ route('post.delete', ['post' => $bb->id]) }}">Удалить</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table> 
@endif 

@endsection
