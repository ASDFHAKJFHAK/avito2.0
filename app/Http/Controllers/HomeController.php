<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    private const POST_VALIDATOR = [
        'title' => 'required|max:50', //Задает ограничение для написанных столбцов в массиве
        'content' => 'required',
        'damage' => 'required|numeric'
    ];
     private const POST_ERROR_MESSAGES = [
        'damage.required' => 'Раздавать товары бесплатно нельзя', //Вывод ошибки при вводе неверных данных
        'required' => 'Заполните это поле',
        'max' => 'Значение не должно быть длиннее :max символов',
        'numeric' => 'Введите число'
    ];
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // это посредник
        // у марширутов есть этот метод который заставляет проходить проверку политики доступа
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        // показать страницу хоум с данными из бд user модель которой имеет прямую связь с бд post и получает ее посты
        return view('home', ['posts' => Auth::user()->post()->latest()->get()]);
    }

    public function showAddPostForm() {
        return view('post_add');
    }

    public function storePost(Request $request) {
        $validated = $request->validate(self::POST_VALIDATOR, self::POST_ERROR_MESSAGES);//Создается переменная которая задает валидцаию и применяет ее к столбцам validate() объекта запроса, в котором и содержатся подлежащие валидации данные 
        Auth::user()->post()->create(
            ['title' =>  $validated['title'],
            'content' => $validated['content'],
            'damage' => $validated['damage']]);
        return redirect()->route('home');
    }

    public function showEditPostForm(Post $post) {
        return view('post_edit', ['post' => $post]);
    }

    public function updatePost(Request $request, Post $post) {
        $validated = $request->validate(self::POST_VALIDATOR, self::POST_ERROR_MESSAGES);
        $post->fill(['title' => $validated['title'],     
        'content' => $validated['content'], 
        'damage' => $validated['damage']]);
        $post->save();
        return redirect()->route('home');
    }

    public function showDeletePostForm(Post $post) {
        return view('post_delete', ['post' => $post]);
    }

    public function destroyPost(Post $post) {
        $post->delete();
        return redirect()->route('home');
    }
}
