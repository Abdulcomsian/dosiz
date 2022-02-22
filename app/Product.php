<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
