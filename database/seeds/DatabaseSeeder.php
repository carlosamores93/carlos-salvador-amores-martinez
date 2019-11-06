<?php

use App\MiniSkill;
use App\Skill;
use App\User;
use App\Work;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Volver migraciones atras y rellenar tablas
        // php artisan migrate:refresh  --seed
        
        // Rellenar poco a poco
        // php artisan db:seed
        
        // $this->call(UsersTableSeeder::class);
        
        factory(User::class, 1000)->create();
        factory(Skill::class, 30)->create();
        factory(MiniSkill::class, 30)->create();
        factory(Work::class, 15)->create();
    }
}
