<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// Crear Seeder
    	// php artisan make:seeder UsersTableSeeder

    	// Ejecutar
    	//php artisan db:seed --class=UsersTableSeeder
    	
        //'email' => Str::random(10).'@gmail.com',
        DB::table('users')->insert([
            'name' => 'Carlos Salvador',
            'lastname' => 'Amores Martinez',
            'email' => 'amorescarlos@hotmail.com',
			'email_verified_at' => now(),
            'password' => bcrypt('Carlos.12345'),
			'remember_token' => Str::random(10),
			'phone' => 628606093,
			'description' => self::getDescription(),
			'career' => 'Grado Ing Computadores',
			'profession' => 'Programador Backend',
			'university' => 'UCM',
			'faculty' => 'FDI',
			'address' => '28030, Madrid, España',
			'github' => 'https://github.com/carlosamores93',
			'gitlab' => 'https://gitlab.com/carlosamores93',
			'linkedin' => 'https://www.linkedin.com/in/carlosamores93/',
			'website' => 'http://carlosamores.hol.es',
			'created_at' => now(),
	        'updated_at' => now()
        ]);
    }

    private function getDescription()
    {
		return '<p>Mi progreso académico&nbsp;es el siguiente:</p>

		<ul>
		<li><strong>Primaria</strong>: de 3º a 6º en el Colegio Dulce Nombre de Jesús,&nbsp;Salamanca, Madrid.</li>
		<li><strong>Educación Secundaria Obligatoria</strong>: IES Carlos Mª Rodriguez de Valcárcel,&nbsp;Moratalaz, Madrid.</li>
		<li><strong>Bachillerato:</strong> IES Felipe II,&nbsp;Moratalaz, Madrid(2009 - 2011).</li>
		<li><a href="https://informatica.ucm.es/estudios/2019-20/grado-ingenieriadecomputadores?utm_source=carlosamores.hol.es" target="_blank"><strong>Grado Ing Computadores</strong></a>:&nbsp;Facultad de Informática, Universidad Complutense de Madrid (<strong>Septiembre 2011 - Junio 2017</strong>).<!--</p>

		<p>Conocimientos C, C++(punteros, memoria dinámica, algoritmos ordenación y búsqueda, manejo listas, vectores, árboles, colas, grafo, costes …) desarrollado con Visual Studio.&nbsp;<br />
		•&nbsp;&nbsp; &nbsp;Conocimientos de Java(clases, objetos, herencia, polimorfismo, vinculación dinámica, excepciones, awt, swing, colecciones) desarrollado con Eclipse.<br />
		•&nbsp;&nbsp; &nbsp;Conocimientos de ingeniería del software (desarrollo, planificación y gestión de proyectos, analizar y especificar requisitos, diseño, implementación, validación y mantenimiento).<br />
		•&nbsp;&nbsp; &nbsp;Conocimientos en leguajes de páginas web como HTML, PHP, CSS, jQuery(js), MySQL.<br />
		•&nbsp;&nbsp; &nbsp;Conocimientos de los tipos de redes, protocolos, seguridad.<br />
		•&nbsp;&nbsp; &nbsp;Conocimientos en electrónica y sistemas embebidos.<br />
		•&nbsp;&nbsp; &nbsp;Conocimientos Linux, sistemas de ficheros, gestión de fichero, gestión de procesos y memoria, comunicación entre procesos y núcleo SO (kernel).</p>

		<p>--></li>
		</ul>

		<p>De manera personal,&nbsp;realizo algunos cursos o leo artículos&nbsp;de nuevas tecnologias&nbsp;que me ayudan en el hábito laboral y personal. Como por ejemplo:</p>

		<ul>
		<li>Backend: PHP, Laravel, APIs con Laravel,&nbsp;Python, PSR2, LAMP</li>
		<li>Fronted: Bootstrap, Angular, Vue</li>
		<li>Database: MySQL, MariaDB, SQLite, Redis</li>
		<li>Otros: SCRUM, Attlassian(Jira Confluence, Bitbucket), Git,&nbsp; AWS</li>
		</ul>';
    }
}
