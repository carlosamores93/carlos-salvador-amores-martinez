<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Skill extends Model
{

    use SoftDeletes;

    protected $fillable = [
        'title', 'slug', 'description', 'status'
    ];
}
