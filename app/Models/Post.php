<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Post extends Model
{
    // Это модель обеспечивает связь с бд и поля доступные для записи в бд
    // Теперь обращение к бд идет через название модели
    protected $fillable = ['title', 'content', 'damage', 'user_id'];
    public function user() {
        return $this->belongsTo(User::class);
        // создает связь с первичной таблицей НЕ ЗАБУДЬ ПОДКЛЮЧИТЬ ПУТЬ К ПЕРВИЧНОЙ МОДЕЛИ
        // ЗАВИСИМОСТЬ ТАБЛИЦ БД "ОДИН КО МНОГИМ"
    }
}
