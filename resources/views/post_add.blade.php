@extends('layouts.base')
@section('title', 'Добавление объявления :: Мои объявления')
@section('main')
<form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
   @csrf
   <div class="form-group">
       <label for="txtTitle">Товар</label>
       <input name="title" id="txtTitle" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}">
       @error('title')
       <span class="invalid-feedback">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>
<div class="form-group">
    <label for="txtContent">Описание</label>
    <textarea name="content" id="txtContent" class="form-control @error('content') is-invalid @enderror" row="3">{{ old('content') }}</textarea>
    @error('content')
    <span class="invalid-feedback">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>
@php $score = 0; @endphp
@while($score < 5)
<div class="form-group">
   <label for="txtImg">Товар</label>
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
   <label for="txtPrice">Цена</label>
   <input name="price" id="txtPrice" class="form-control @error('damage') is-invalid @enderror" value="{{ old('price') }}">
   @error('price')
   <span class="invalid-feedback">
    <strong>{{ $message }}</strong>
</span>
@enderror
</div>
<input type="submit" class="btn btn-primary" value="Добавить">
</form>
@endsection 