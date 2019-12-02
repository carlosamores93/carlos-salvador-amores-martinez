<?php

namespace App\Console\Commands\Closure;

use App\Console\Commands\Closure\UserTest;

class UserLogicTest
{
    public static function TryToLogin($user, $pass, $closure)
    {
        if ($user === 'user' && $pass === '123456') {
            $user = new UserTest();
            $user->id = 1;
            $user->Name = 'Carlos Amores';
            $user->UserName = 'carlosamores93';

            $closure($user);
        } else {
            $closure(null);
        }
    }
}
