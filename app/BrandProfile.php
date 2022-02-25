<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BrandProfile extends Model
{

    protected $guarded = [];
    

    protected $casts = [
        'color' => 'array',
        'font' => 'array',
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
