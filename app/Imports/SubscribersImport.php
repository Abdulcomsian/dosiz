<?php

namespace App\Imports;

use App\Subscriber;
use Maatwebsite\Excel\Concerns\ToModel;

class SubscribersImport implements ToModel
{
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
            'type' => $row[3],
            'brand_profile_id' => $row[4],
        ]);
    }
}
