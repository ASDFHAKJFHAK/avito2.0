<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

// Это миграции сдесь создаються все поля для бд с их свойствами (длина, начальные значения, и т. п.) а также как ее откатить

        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title', 40)->nullable();
            $table->string('content', 100);
            $table->string('img0');
            $table->string('img1')->nullable(true);
            $table->string('img2')->nullable(true);
            $table->string('img3')->nullable(true);
            $table->string('img4')->nullable(true);
            $table->float('price')->nullable();
            // создание зависимого от другой таблицы поля где первое слово название таблицы а второе критерий связи последний метод для удаления записи при смерти ее родителя
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
