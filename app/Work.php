<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $fillable = [
        'company', 'slug', 'job', 'status', 'description', 'start_date', 'end_date',
    ];
}
