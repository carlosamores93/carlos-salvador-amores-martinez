<?php

namespace App\Console\Commands;

use App\Console\Commands\Closure\UserLogicTest;
use App\Work;
use Illuminate\Console\Command;

class TestCarlosAmores extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Test para porbar varias cosillas';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info('******* SCOPE ********');

        // scope: ActiveWork()
        // https://laravel.com/docs/5.8/eloquent#query-scopes
        $worksActives = Work::ActiveWork()->limit(3)->get();
        foreach ($worksActives as $key => $value) {
            print_r($value->toArray());
        }

        $this->info('******* CLOSURE ********');

        // https://anexsoft.com/implementacion-de-closures-en-php
        UserLogicTest::TryToLogin('user', '123456', function ($res) {
            var_dump($res);
        });

        UserLogicTest::TryToLogin('user', '654321', function ($res2) {
            var_dump($res2);
        });


        $name = 'Carlos Amores';
        // Closure: funciones anónimas
        $greet = function () use ($name) {
            $carlos = "Amores";
            echo 'Hi ' . $name . ' ' ;
            return ', bienvenido';
        };
        var_dump($greet);
        //dd($greet);
        //dd($greet());




        $input = array(1, 2, 3, 4, 5, 6);
        // Creates a new anonymous function and assigns it to a variable
        $filter_even = function ($item) {
            return ($item % 2) == 0;
        };
        // Built-in array_filter accepts both the data and the function
        $output = array_filter($input, $filter_even);
        // The function doesn't need to be assigned to a variable. This is valid too:
        /*$output = array_filter($input, function($item) {
            return ($item % 2) == 0;
        });*/
        print_r($output);
        //dd($filter_even());
        //dd($filter_even);
        //
        //
        //
        //
    }
}
