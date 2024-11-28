<?php

namespace App\Helpers;

use App\Models\Country;


class countries
{
    public function readCountryCsv(string $filePath)
    {
            $handle =fopen($filePath ,'r');
            fgetcsv($handle ,100000 ,",");

            while (! feof($handle)){
                    $row =fgetcsv($handle ,100000 ,",");

                    if($row != null)
                    {
                        $countryDetail = [
                            'id' => $row[0],
                            'name' => $row[1],
                        ];

                        Country::firstOrCreate($countryDetail);
                    }
            }
    }
}
