<?php

namespace App\Helpers;

use App\Models\City;

class cities
{
    public function readCityCsv(string $filePath)
    {
        $handle =fopen($filePath ,'r');
        fgetcsv($handle ,100000 ,",");

        while (! feof($handle)){
            $row =fgetcsv($handle ,100000 ,",");
            if($row != null)
            {
                $cityDetail = [
                    'id' => $row[0],
                    'name' => $row[1],
                    'state_id' => $row[2]
                ];

                City::firstOrCreate($cityDetail);
            }
        }
    }

}
