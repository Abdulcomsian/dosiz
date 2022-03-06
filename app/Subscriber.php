<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    protected $guarded = [];

    public function subscriber_list()
    {
        return $this->belongsTo(SubscriberList::class);
    }
}
