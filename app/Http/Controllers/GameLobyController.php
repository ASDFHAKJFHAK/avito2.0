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

    public function index(Request $request) {



        $posts = Post::orderBy('title')->paginate(8);

        if($request->ajax()){
            $query = Post::query();

            $data = $request;

            if(isset($data['categori_id'])){
                $query->where('categori_id', $data['categori_id']);
            }
            if(isset($data['price_start'])){
                $query->where('price', '>=', $data['price_start']);
            }
            if(isset($data['price_end'])){
                $query->where('price', '<=', $data['price_end']);
            }
            if(isset($data['title'])){
                $query->where('title', 'like', "%{$data['title']}%");
            }

            $posts = $query->get();
            return $posts;
        }
        return view("main" , compact('posts'));
    }

    // Post тип данных (здесь это одна запись из бд)
    public function detail(Post $posts) {
        return view('detail', ['post' => $posts]);
    }
}
