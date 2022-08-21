@extends('layouts.base')
@section('title', 'Проверка объявления :: Мои объявления')
@section('main')
<center>
    <h1>Редактировать объявлине: "{{$post->title}}"</h1>
<form action="{{ route('post.update', ['post' => $post->id]) }}" method="POST" enctype="multipart/form-data">
     @csrf
     @method('PATCH')
     <div class="form-group">
         <label for="txtTitle" class="mt-3 mb-1">Товар</label>
             <input name="title" id="txtTitle" class="form-control border-dark @error('title') is-invalid @enderror" value="{{ old('title', $post->title) }}">
             @error('title')
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
     </div>
     <div class="form-group">
        <label for="txtContent" class="mt-3 mb-1">Описание</label>
            <textarea name="content" id="txtContent" class="form-control @error('content') is-invalid @enderror" row="3"style="height: 30vh;width: 80vw; max-width: 315px">"{{ old('content', $post->content) }}"</textarea>
             @error('content')
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
     </div>
@php $score = 0; @endphp
@while($score < 5)
<div class="form-group">
   <label for="txtImg" class="mt-3 mb-1">Изображение</label>
   <input type="file" name="img{{ $score }}" id="txtImg" class="form-control @error('title') is-invalid @enderror" value="{{$post->img0 }}">
   @error('img')
   <span class="invalid-feedback">
    <strong>{{ $message }}</strong>
</span>
@enderror
</div>
@php $score++ @endphp
@endwhile
     <div class="form-group">
         <label for="txtPrice" class="mt-3 mb-1">Цена</label>
         <input name="price" id="txtPrice" class="form-control @error('damage') is-invalid @enderror" value="{{ old('price', $post->price) }}">
          @error('price')
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
     </div>
     <input type="submit" class="btn btn-primary mt-3 mb-5" value="Сохранить">
</form>
</center>
@endsection 