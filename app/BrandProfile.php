<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BrandProfile extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];
    // protected $fillable = [
    //     'brand_name', 'city','brand_category','brand_logo','color',
    // ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
