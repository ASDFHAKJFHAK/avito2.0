<?php

namespace App\Http\Controllers;
use Storage;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    private const POST_VALIDATOR = [
        'title' => 'required|max:40', //Задает ограничение для написанных столбцов в массиве
        'content' => 'required|max:100',
        'price' => 'required|numeric',
        'img0' => 'required'
    ];
    private const POST_VALIDATOR_Of_IMG = [
        'title' => 'required|max:40', //Задает ограничение для написанных столбцов в массиве
        'content' => 'required|max:100',
        'price' => 'required|numeric'
    ];
     private const POST_ERROR_MESSAGES = [
        'price.required' => 'Раздавать товары бесплатно нельзя', //Вывод ошибки при вводе неверных данных
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
        // !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! до пагинатора было гет()
        return view('home', ['posts' => Auth::user()->post()->latest()->get()]);
    }

    public function showAddPostForm() {
        return view('post_add');
    }

    public function storePost(Request $request) {
        $validated = $request->validate(self::POST_VALIDATOR, self::POST_ERROR_MESSAGES);//Создается переменная которая задает валидцаию и применяет ее к столбцам validate() объекта запроса, в котором и содержатся подлежащие валидации данные 
        $img1 = null;
        $img2 = null;
        $img3 = null;
        $img4 = null;

        if(null !== ($request->file('img1'))){
            $img1 = $request->file('img1')->store('uploads', 'public');
        }

        if(null !== ($request->file('img2'))){
            $img2 = $request->file('img2')->store('uploads', 'public');
        }

        if(null !== ($request->file('img3'))){
            $img3 = $request->file('img3')->store('uploads', 'public');
        }

        if(null !== ($request->file('img4'))){
            $img4 = $request->file('img4')->store('uploads', 'public');
        }





        Auth::user()->post()->create(
            ['title' =>  $validated['title'],
            'content' => $validated['content'],
            'price' => $validated['price'],
            'img0' => $request->file('img0')->store('uploads', 'public'),
            'img1' => $img1,
            'img2' => $img2,
            'img3' => $img3,
            'img4' => $img4

        ]);
        return redirect()->route('home');
    }

    public function showEditPostForm(Post $post) {
        return view('post_edit', ['post' => $post]);
    }

    public function updatePost(Request $request, Post $post) {
        $validated = $request->validate(self::POST_VALIDATOR_Of_IMG, self::POST_ERROR_MESSAGES);


        $img0 = $post->img0;

        if($request->cek0 == "1"){
            unlink('../storage/app/public/' . $post->img0);
            $img0 = $request->file('img0')->store('uploads', 'public');
        }
        if($request->cek1 == "1"){
            unlink('../storage/app/public/' . $post->img1);
        }        
        if($request->cek2 == "1"){
            unlink('../storage/app/public/' . $post->img2);
        }
        if($request->cek3 == "1"){
            unlink('../storage/app/public/' . $post->img3);
        }
        if($request->cek4 == "1"){
            unlink('../storage/app/public/' . $post->img4);
        }

        $img1 = null;
        $img2 = null;
        $img3 = null;
        $img4 = null;

        if(null !== ($request->file('img1'))){
            $img1 = $request->file('img1')->store('uploads', 'public');
        }

        if(null !== ($request->file('img2'))){
            $img2 = $request->file('img2')->store('uploads', 'public');
        }

        if(null !== ($request->file('img3'))){
            $img3 = $request->file('img3')->store('uploads', 'public');
        }

        if(null !== ($request->file('img4'))){
             $img4 = $request->file('img4')->store('uploads', 'public');
        }

       
        $post->fill(['title' => $validated['title'],     
        'content' => $validated['content'], 
        'price' => $validated['price'],
        'img0' => $img0,
        'img1' => $img1,
        'img2' => $img2,
        'img3' => $img3,
        'img4' => $img4
    ]);
        $post->save();
        return redirect()->route('home');
    }

    public function showDeletePostForm(Post $post) {
        return view('post_delete', ['post' => $post]);
    }

    public function destroyPost(Post $post) {

        unlink('../storage/app/public/' . $post->img0);

        if(null !== $post->img1){
            unlink('../storage/app/public/' . $post->img1);
        }

        if(null !== $post->img2){
            unlink('../storage/app/public/' . $post->img2);
        }

        if(null !== $post->img3){
            unlink('../storage/app/public/' . $post->img3);
        }

        if(null !== $post->img4){
            unlink('../storage/app/public/' . $post->img4); 
        }
  
        $post->delete();
        return redirect()->route('home');
    }
}
