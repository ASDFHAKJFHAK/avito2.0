@extends('layouts.base')
@section('title', 'Мои объявления')
@section('main')
<h2 class="text-center">Добро пожаловать, {{ Auth::user()->name }}!</h2>

@if (count($posts) > 0)
<table class="table table-striped">
    <thead>
        <tr>
            <th>Товар</th>
            <th>Описание</th>
            <th>Цена, руб.</th>
            <th colspan="2">&nbsp;</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($posts as $bb)
        <tr style="background-color: rgba(55, 150, 201, 1.0);">
            <td><h3>{{ $bb->title }}</h3></td>
            <td>{{ $bb->content }}</td>

            <td>{{ $bb->price }}</td>
            <td>
                <a class="btn btn-secondary" href="{{ route('post.edit', ['post' => $bb->id]) }}">Изменить</a>
            </td>
            <td>
                <a class="btn btn-danger" href="{{ route('post.delete', ['post' => $bb->id]) }}">Удалить</a>
            </td>
        </tr>
    @endforeach
        
    </tbody>
</table> 
@endif 
<p class="btn" style="background-color: rgba(30, 231, 13, 1.0);"><a class="add-txt" href="{{ route('post.add') }}">Добавить объявление</a></p>
@endsection
