<?php

namespace App\Helpers;

use App\Models\AntiqueCutDiamond;
use App\Models\NaturalDiamond;

class AntiqueCutDiamonds
{
    public function readAntiqueCutDiamondCsv(string $filePath)
    {
            $handle =fopen($filePath ,'r');
            fgetcsv($handle ,100000 ,",");

            while (! feof($handle)){
                    $row =fgetcsv($handle ,100000 ,",");

                    if($row != null)
                    {
                        $diamondDetail = [
                            'id' => $row[0],
                            'name' => $row[1] ?? null,
                            'shape' => $row[2] ?? null,
                            'carat' => $row[3] ?? null,
                            'color' =>  $row[4] ?? null,
                            'clarity' => $row[5] ?? null,
                            'cut' => empty($row[6])  ? null : $row[6],
                            'lab' => $row[7] ?? null,
                            'certificate_number' => $row[8] ?? null,
                            'original_price' => $row[9] ?? null,
                            'size' => $row[10] ?? null,
                            'growth_type' => $row[11] ?? null,
                            'depth' => $row[12] ?? null,
                            'table' => $row[13] ?? null,
                            'video_url' => empty($row[14]) ? null : $row[14],
                            'certificate_link' => empty($row[15]) ? null : $row[15],
                            'image_link' => empty($row[16]) ? null : $row[16],
                        ];

                        AntiqueCutDiamond::firstOrCreate($diamondDetail);
                    }
            }
    }
}
