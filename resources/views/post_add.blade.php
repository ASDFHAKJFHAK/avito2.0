@extends('layouts.base')
@section('title', 'Добавление объявления :: Мои объявления')
@section('main')
<form action="{{ route('post.store') }}" method="POST">
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
     <div class="form-group">
         <label for="txtPrice">Цена</label>
         <input name="damage" id="txtPrice" class="form-control @error('damage') is-invalid @enderror" value="{{ old('content') }}">
         @error('damage')
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
     </div>
     <input type="submit" class="btn btn-primary" value="Добавить">
</form>
@endsection 