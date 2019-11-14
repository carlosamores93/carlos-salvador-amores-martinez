<?php

use App\Models\Article;
use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// Crear Seeder
    	// php artisan make:seeder ArticlesTableSeeder

    	// Ejecutar
    	//php artisan db:seed --class=ArticlesTableSeeder
    	
        factory(Article::class, 30)->create();
    }
}
