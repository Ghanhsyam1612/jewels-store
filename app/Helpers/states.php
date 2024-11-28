<?php

namespace App\Helpers;

use App\Models\State;

class states
{
    public function readStateCsv(string $filePath)
    {
        $handle =fopen($filePath ,'r');
        fgetcsv($handle ,100000 ,",");

        while (! feof($handle)){
            $row =fgetcsv($handle ,100000 ,",");
            if($row != null)
            {
                $stateDetail = [
                    'id' => $row[0],
                    'name' => $row[1],
                    'country_id' => $row[2]
                ];

                State::firstOrCreate($stateDetail);
            }
        }
    }
}
