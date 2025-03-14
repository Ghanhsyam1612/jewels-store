<?php

namespace App\Helpers;
use App\Models\NaturalDiamond;

class naturaldiamonds
{
    public function readNaturalDiamondCsv(string $filePath)
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
                            'lab' => $row[2] ?? null,
                            'shape' => $row[3] ?? null,
                            'carat' => $row[4] ?? null,
                            'color' =>  empty($row[5]) ? null : $row[5],
                            'clarity' => $row[6] ?? null,
                            'cut' => empty($row[7]) ? null : $row[7],
                            'mrp' => $row[8] ?? null,
                            'original_price' => $row[9] ?? null,
                            'table' => $row[10] ?? null,
                            'depth' => $row[11] ?? null,
                            'length' => $row[12] ?? null,
                            'width' => $row[13] ?? null,
                            'height' => $row[14] ?? null,
                            'ratio' => $row[15] ?? null,
                            'inscription' => $row[16] ?? null,
                            'certificate_link' => empty($row[17]) ? null : $row[17],
                            'image_link' => empty($row[18]) ? null : $row[18],
                            'video_url' => empty($row[19]) ? null : $row[19],
                        ];

                        NaturalDiamond::firstOrCreate($diamondDetail);
                    }
            }
    }
}
