<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    protected $guarded = [];

    public function BrandProfile()
    {
        return $this->hasMany(BrandProfile::class);
    }
}
