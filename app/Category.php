<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    protected $fillable = [
        'name', 'category_slug',
    ];

    public function Product()
    {
        return $this->hasMany(Product::class);
    }

    public function SubCategory()
    {
        return $this->hasMany(SubCategory::class);
    }

    public function blog()
    {
        return $this->hasMany(Blog::class);
    }

    public function BrandProfile()
    {
        return $this->hasOne(BrandProfile::class);
    }

}
