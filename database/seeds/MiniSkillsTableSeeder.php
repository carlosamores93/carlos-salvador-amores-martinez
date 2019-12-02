<?php

use App\MiniSkill;
use Illuminate\Database\Seeder;

class MiniSkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// Crear Seeder
    	// php artisan make:seeder MiniSkillsTableSeeder

    	// Ejecutar
    	//php artisan db:seed --class=MiniSkillsTableSeeder
    	//
    	/*
    	DB::table('mini_skills')->insert([
	        'title' => 'SEO',
	        'progress' => 100, 
	        'status' => 1,
	        'created_at' => now(),
	        'updated_at' => now()
        ]);
        */
       
       

    	MiniSkill::create([
	        'title' => 'SEO',
	        'progress' => 100, 
	        'status' => 1
        ]);
    }
}
