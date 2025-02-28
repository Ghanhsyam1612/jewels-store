<?php

namespace App\Helpers;

use App\Models\ColorDiamond;


class colordiamonds
{
    public function readColorDiamondCsv(string $filePath)
    {
            $handle =fopen($filePath ,'r');
            fgetcsv($handle ,100000 ,",");

            while (! feof($handle)){
                    $row =fgetcsv($handle ,100000 ,",");

                    if($row != null)
                    {
                        $colorDiamondDetail = [
                            'id' => $row[0],
                            'name' => $row[1] ?? null,
                            'shape' => $row[2] ?? null,
                            'carat' => $row[3] ?? null,
                            'color' => $row[4] ?? null,
                            'intensity' => $row[5] ?? null,
                            'clarity' => $row[6] ?? null,
                            'cut' => empty($row[7]) ? null : $row[7],
                            'size' => $row[8] ?? null,
                            'original_price' => $row[9] ?? null,
                            'growth_type' => $row[10] ?? null,
                            'depth' => $row[11] ?? null,
                            'table' => $row[12] ?? null,
                            'certificate_number' => $row[13] ?? null,
                            'certificate_link' => $row[14] ?? null,
                            'video_url' => $row[15] ?? null,
                            'image_link' => empty($row[16]) ? null : $row[16],
                            'lab' => $row[17] ?? null,
                            'sku' => $row[18] ?? null,

                        ];

                        ColorDiamond::firstOrCreate($colorDiamondDetail);
                    }
            }
    }
}
