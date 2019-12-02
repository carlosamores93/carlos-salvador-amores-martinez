<?php

namespace App\Repositories;

use App\Work;

class Works
{
    public function getWorks()
    {
        return Work::orderBy('start_date', 'DESC')->get();
    }
}
