@extends('layouts.base')
@section('title', 'Проверка объявления :: Мои объявления')
@section('main')
<form action="{{ route('post.update', ['post' => $post->id]) }}" method="POST" enctype="multipart/form-data">
     @csrf
     @method('PATCH')
     <div class="form-group">
         <label for="txtTitle">Товар</label>
             <input name="title" id="txtTitle" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $post->title) }}">
             @error('title')
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
     </div>
     <div class="form-group">
        <label for="txtContent">Описание</label>
            <textarea name="content" id="txtContent" class="form-control @error('content') is-invalid @enderror" row="3">"{{ old('content', $post->content) }}"</textarea>
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
   <input type="file" name="img{{ $score }}" id="txtImg" class="form-control @error('title') is-invalid @enderror" value="">
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
         <input name="price" id="txtPrice" class="form-control @error('damage') is-invalid @enderror" value="{{ old('price', $post->price) }}">
          @error('price')
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
     </div>
     <input type="submit" class="btn btn-primary" value="Сохранить">
</form>
@endsection 