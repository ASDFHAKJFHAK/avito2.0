<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str; 

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   
        $this->call([PostSeeder::class]); 


        for ($i = 0; $i < 10; $i++){
            User::create(['name' => Str::random(10), 'email' => Str::random(10) . '@bboard.ru', 'password' => Hash::make(Str::random(8))]); 
        }
    }
}
