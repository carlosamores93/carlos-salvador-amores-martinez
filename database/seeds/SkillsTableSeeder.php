<?php

use App\Skill;
use Illuminate\Database\Seeder;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Crear Seeder
    	// php artisan make:seeder SkillsTableSeeder

    	// Ejecutar
    	//php artisan db:seed --class=SkillsTableSeeder
    	//
       
        factory(Skill::class, 30)->create();
    	
    	/*DB::table('skills')->insert([
	        'title' => 'SEO',
			'slug' => 'seo2',
			'description' => 'SEO',
	        'status' => 1,
	        'created_at' => now(),
	        'updated_at' => now()
        ]);
        */

    	/*Skill::create([
	        'title' => 'SEO',
			'slug' => 'seo',
			'description' => 'SEO',
	        'status' => 1
        ]);*/
    }
}
