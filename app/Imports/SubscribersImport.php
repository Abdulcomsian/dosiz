<?php

namespace App\Imports;

use App\Subscriber;
use Maatwebsite\Excel\Concerns\ToModel;

class SubscribersImport implements ToModel
{

    public $subscriber_list_id;
    public function __construct($subscriber_list_id)
    {
        $this->subscriber_list_id = $subscriber_list_id;
 
    }
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Subscriber([
            'name'     => $row[0],
            'email'    => $row[1], 
            'phone' => $row[2],
            'subscriber_list_id' => $this->subscriber_list_id,  
            'brand_profile_id' => $row[3],
        ]);
    }
}
