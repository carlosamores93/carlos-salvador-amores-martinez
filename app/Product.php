<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    const PRODUCTO_DISPONIBLE = 1;
    const PRODUCTO_NO_DISPONIBLE = 0;

    protected $fillable = [
        'name',
        'description',
        'quantity',
        'status',
        'image',
        'seller_id',
    ];

    public function statusProduct()
    {
        return (bool) $this->status;
    }

    public function isAvailable()
    {
        return (bool) $this->status === self::PRODUCTO_DISPONIBLE;
    }

    public function isNotAvaible()
    {
        return (bool) $this->status === self::PRODUCTO_NO_DISPONIBLE;
    }
}
