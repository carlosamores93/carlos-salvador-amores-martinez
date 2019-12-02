<?php

use App\Models\Contact;
use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// Crear Seeder
    	// php artisan make:seeder ContactsTableSeeder

    	// Ejecutar
    	//php artisan db:seed --class=ContactsTableSeeder
        factory(Contact::class, 30)->create();
    }
}
