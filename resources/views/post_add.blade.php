@extends('layouts.base')
@section('title', 'Добавление объявления :: Мои объявления')
@section('main')
<h1 class="text-center">Добавить объявление</h1>
<form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
   @csrf
   <center>
   <div class="form-group">
       <label for="txtTitle" class="mt-3 mb-1">Товар</label>
       <input name="title" id="txtTitle" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}">
       @error('title')
       <span class="invalid-feedback">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>
<div class="form-group">
    <label for="txtContent" class=" mt-3 mb-1" >Описание</label>
    <textarea name="content" id="txtContent" class="form-control @error('content') is-invalid @enderror" row="3" style="width:315px; max-width:80vw; height:150px">{{ old('content') }}</textarea>
    @error('content')
    <span class="invalid-feedback">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>
@php $score = 0; @endphp
@while($score < 5)
<div class="form-group">
   <label for="txtImg" class=" mt-3 mb-1">Изображение</label>
   <input type="file" name="img{{ $score }}" id="txtImg" class="form-control @error('title') is-invalid @enderror" value="{{ old('img $score') }}">
   @error('img')
   <span class="invalid-feedback">
    <strong>{{ $message }}</strong>
</span>
@enderror
</div>
@php $score++ @endphp
@endwhile
<div class="form-group">
   <label for="txtPrice" class=" mt-3 mb-1">Цена</label>
   <input name="price" id="txtPrice" class="form-control @error('damage') is-invalid @enderror" value="{{ old('price') }}">
   @error('price')
   <span class="invalid-feedback">
    <strong>{{ $message }}</strong>
</span>
@enderror
</div>
<input type="submit" style="background-color: rgba(30, 231, 13, 1.0); border-style: none; color: black;" class="btn btn-primary mt-2 mb-5" value="Добавить">
</form>
</center>
@endsection 