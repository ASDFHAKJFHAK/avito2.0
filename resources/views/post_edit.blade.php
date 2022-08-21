@extends('layouts.base')
@section('title', 'Проверка объявления :: Мои объявления')
@section('main')
<center>
    <h1>Редактировать объявлине: "{{$post->title}}"</h1>
<form action="{{ route('post.update', ['post' => $post->id]) }}" method="POST" enctype="multipart/form-data">
     @csrf

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




<div class="form-group mt-3">
   <label for="txtImg" class="mt-3 mb-1">Изображение (1 из 5)</label>
   <br>

        <img id="img0" class="mb-3 border-5 border" width="170px" height="170px" src="{{ asset( '/storage/' . $post->img0 )}}"><br>
        <button id="btn0" class="btn bg-danger text-white">Удалить</button>

   <p id="p0" class="border border-dark" style="background-color: rgba(30, 231, 13, 1.0); width:250px;" >Картинка успешно загружена! :з</p>
   <p id="p5" class="border border-dark bg-danger" style="width:250px; color: white;">Заполните это поле! >:(</p>
   <input type="file" name="img0" id="txtImg0" class="form-control " value="">
   <input style="display: none;" id="cek0" type="text" name="cek0" value="0">


</div>




@php $score = 1; $num = 1; @endphp
@while($score < 5)
@php $img = "img" . $score; @endphp
@php $num++; @endphp

<div class="form-group mt-3">
   <label for="txtImg" class="mt-3 mb-1">Изображение ({{ $num}} из 5)</label>
   <br>

   @if (null !== $post->$img)

        <img id="img{{$score}}" class="mb-3 border-5 border" width="170px" height="170px" src="{{ asset( '/storage/' . $post->$img )}}"><br>
        <button id="btn{{$score}}" class="btn bg-danger text-white">Удалить</button>

   @endif


   <p id="p{{$score}}" class="border border-dark" style="background-color: rgba(30, 231, 13, 1.0); width:250px;" >Картинка успешно загружена! :)</p>
   <input type="file" name="img{{ $score }}" id="txtImg{{$score}}" class="form-control " value="">
   <input style="display: none;" id="cek{{$score}}" type="text" name="cek{{$score}}" value="0">


</div>
@php $score++ @endphp
@endwhile


     <div class="form-group">
         <label for="txtPrice" class="mt-3 mb-1">Цена</label>
         <input name="price" id="txtPrice" class="form-control @error('price-') is-invalid @enderror" value="{{ old('price', $post->price) }}">
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