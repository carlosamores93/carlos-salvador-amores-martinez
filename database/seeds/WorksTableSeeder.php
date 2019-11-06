<?php

use App\Work;
use Illuminate\Database\Seeder;

class WorksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Crear Seeder
    	// php artisan make:seeder WorksTableSeeder

    	// Ejecutar
    	//php artisan db:seed --class=WorksTableSeeder
    	//
    	
    	/*DB::table('works')->insert([
	        'company' => 'iAhorro',
			'slug' => 'iahorro',
			'job' => 'Programador Backend',
			'status' => 1,
			'description' => self::getDescription(),
			'created_at' => now(),
			'updated_at' => now(),
			'start_date' => '2018-03-01 00:00:0'
        ]);*/
        

    	Work::create([
	        'company' => 'iAhorro',
			'slug' => 'iahorro',
			'job' => 'Programador Backend',
			'status' => 1,
			'description' => self::getDescription(),
			'start_date' => '2018-03-01 00:00:0'
        ]);
    }

    private function getDescription()
    {
    	return '<ul>
					<li style="text-align:justify">Integración de&nbsp;APIs externas para su consumo&nbsp;en nuestro proyecto y desarrollo nuevas funcionalidades de nuestra API.</li>
					<li style="text-align:justify">Toma de requisitos, diseño y desarrollo de componentes de aplicación web y gestor de contenidos (CRUDs).</li>
					<li style="text-align:justify">Mantenimiento, evolución y nuevos desarrollos de herramientas para adaptar a las necesidades del departamento de marketing digital, comercio o hipotecas.</li>
					<li style="text-align:justify">SEO: testeo del site para optimizar las carga en dispositivos móviles, revisión del titulos y contenidos de las páginas para ontener mejores posiciones en los motores de búsqueda, creación de datos estructuras etc etc</li>
				</ul>';
    }
}
