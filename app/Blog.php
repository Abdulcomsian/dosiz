<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'name', 'image','images','phone','description','status','category_id','sub_category_id ',
    ];

    protected $casts = [
        'images' => 'array',
    ];

    public function sub_category()
    {
        return $this->belongsTo(SubCategory::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
