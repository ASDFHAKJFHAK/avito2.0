<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameLobyController;
use App\Http\Controllers\HomeController;

// Это марширутизатор он считывает URL и отдает команды контролерам НЕ ЗАБУДЬ ПОДКЛЮЧИТЬ ПРОСТРАНСТВО ИМЕН КОНТРОЛЕРА
// Route::get('/{posts(это передасться в аргумент функции контролера)}', [название контролера::class, 'метод контролера']->name('название марширутизатора для ссылок'));
// если у марширута есть имя то ссылкам можно писать его а не полный URN

Route::get('/asd', [GameLobyController::class, 'index'])->name('index');

// наследует маршируты из атач библиотеки
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/home/add', [HomeController::class, 'showAddPostForm'])->name('post.add');
Route::post('/home', [HomeController::class, 'storePost'])->name('post.store');

//                         middleware метод конструктора он же посредник для политики. сан запускает указаную проверку доступа в политике
Route::get('/home/{post}/edit', [HomeController::class, 'showEditPostForm'])->name('post.edit')->middleware('can:update,post');
Route::patch('/home/{post}', [HomeController::class, 'updatePost'])->name('post.update')->middleware('can:update,post');
Route::get('/home/{post}/delete',[HomeController::class, 'showDeletePostForm'])->name('post.delete')->middleware('can:destroy,post');
Route::delete('/home/{post}', [HomeController::class, 'destroyPost'])->name('post.destroy')->middleware('can:destroy,post');

Route::get('/{posts}', 'App\Http\Controllers\GameLobyController@detail')->name('detail');
