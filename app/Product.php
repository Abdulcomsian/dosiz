<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    protected $casts = [
        'images' => 'array',
    ];

    public function product_category()
    {
        return $this->belongsTo(ProductCategory::class);
    }

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function sub_category()
    {
        return $this->belongsTo(SubCategory::class);
    }
}
