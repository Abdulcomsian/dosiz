<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $guarded = [];

    public function Product()
    {
        return $this->hasOne(Product::class);
    }
}
