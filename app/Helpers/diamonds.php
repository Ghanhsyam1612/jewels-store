<?php

namespace App\Helpers;


use App\Models\Diamond;

class diamonds
{
    public function readDiamondCsv(string $filePath)
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
                            'original_price' => $row[3] ?? null,
                            'mrp' => $row[4] ?? null,
                            'carat' => $row[5] ?? null,
                            'cut' => empty($row[6]) ? null : $row[6],
                            'color' => $row[7] ?? null,
                            'clarity' => $row[8] ?? null,
                            'image_link' => $row[9] ?? null,
                            'size' => $row[10] ?? null,
                            'l_w_ratio' => $row[11] ?? null,
                            'table' => $row[12] ?? null,
                            'sku' => $row[13] ?? null,
                            'lab' => $row[14] ?? null,
                            'certificate_number' => $row[15] ?? null,
                            'video_url' => $row[16] ?? null,
                            'certificate_link' => $row[17] ?? null,
                            'growth_type' => $row[18] ?? null,
                        ];

                        Diamond::firstOrCreate($diamondDetail);
                    }
            }
    }
}
