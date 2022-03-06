<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubscriberList extends Model
{
    protected $guarded = [];

    public function subscriber()
    {
        return $this->hasMany(Subscriber::class);
    }
}
