<?php

namespace App\Http\Controllers;

use App\Models\Post;

use Illuminate\Http\Request;

class GameLobyController extends Controller
{

// Это контролер НЕ ЗАБУДЬ ПОДКЛЮЧИТЬ ПРОСТРАНСТВО ИМЕН МОДЕЛИ 
// сдесь идет работа с бд модели и отправка её данных во views данные отпровляються в виде асациативного масива или колекции
// публичные функции доступны к вызову в марширутизаторе 
// create занести данные в бд
// delit удалить данные из бд
// view запустить рендеринг
// first вернет только один элемент из бд
// get вернет все элементы из бд
// orderBy("по чему сортировать") сортировка
// where('критерий', 'тип сравнения(<,>,= и т. д.)', 'значение')
// latest сортирует в хронологическом порядке

    public function index() {
        return view("main" , ['posts' => Post::orderBy('title')->get()]);
    }

    // Post тип данных (здесь это одна запись из бд)
    public function detail(Post $posts) {
        return view('detail', ['post' => $posts]);
    }
}
