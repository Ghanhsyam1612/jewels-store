<?php

    namespace Database\Seeders;

    use Illuminate\Database\Console\Seeds\WithoutModelEvents;
    use Illuminate\Database\Seeder;
    use App\Models\Diamond;

    /*
    -- jewels_store_db.diamonds definition

    CREATE TABLE `diamonds` (
    `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
    `name` varchar(255) NOT NULL,
    `shape` enum('ROUND','PRINCESS','RADIANT','ASSCHER','CUSHION','OVAL','EMERALD','PEAR','MARQUISE','HEART','ROSE CUT','OLD EUROPEAN','HALF MOON','BAGUETTE TRAPEZOID','BAGUETTE','HEXAGON','KITE','OLD MINE','TRAPEZOID','TRIANGULAR') NOT NULL,
    `original_price` int(11) NOT NULL,
    `carat` varchar(255) NOT NULL,
    `cut` enum('GOOD','VERY GOOD','EXCELLENT','IDEAL') NOT NULL,
    `color` enum('M','L','K','J','I','H','G','F','E','D') NOT NULL,
    `clarity` enum('IF','VVS1','VVS2','VS1','VS2','SI1','SI2','I1','I2','I3') NOT NULL,
    `images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`images`)),
    `size` varchar(255) NOT NULL,
    `l_w_ratio` varchar(255) NOT NULL,
    `table` varchar(255) NOT NULL,
    `sku` varchar(255) NOT NULL,
    `video_url` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`video_url`)),
    `created_at` timestamp NULL DEFAULT NULL,
    `updated_at` timestamp NULL DEFAULT NULL,
    `mrp` decimal(10,2) DEFAULT NULL,
    `growth_type` varchar(255) DEFAULT NULL,
    PRIMARY KEY (`id`)
    ) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
    */

    class DiamondSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         */
        public function run(): void
        {
            $diamonds = [
                [
                    'id' => 8,
                    'name' => 'Round Diamond',
                    'shape' => 'ROUND',
                    'original_price' => 1000,
                    'carat' => '1.00',
                    'cut' => 'IDEAL',
                    'color' => 'D',
                    'clarity' => 'IF',
                    'images' => json_encode(["https://diamview360.s3.ap-south-1.amazonaws.com/polish/38533881.jpg"]),
                    'size' => '1.00',
                    'l_w_ratio' => '1.00',
                    'table' => '1.00',
                    'sku' => '1234567890',
                    'video_url' => json_encode(["https://diamview360.s3.ap-south-1.amazonaws.com/polish/38533881.mp4"]),
                    'mrp' => 1000,
                    'growth_type' => 'GIA',
                ],
                [
                    'id' => 9,
                    'name' => 'Princess Diamond',
                    'shape' => 'PRINCESS',
                    'original_price' => 1000,
                    'carat' => '1.00',
                    'cut' => 'IDEAL',
                    'color' => 'D',
                    'clarity' => 'IF',
                    'images' => json_encode(["https://diamview360.s3.ap-south-1.amazonaws.com/polish/38533881.jpg"]),
                    'size' => '1.00',
                    'l_w_ratio' => '1.00',
                    'table' => '1.00',
                    'sku' => '1234567890',
                    'video_url' => json_encode(["https://diamview360.s3.ap-south-1.amazonaws.com/polish/38533881.mp4"]),
                    'mrp' => 1000,
                    'growth_type' => 'GIA',
                ],  
            ];

            foreach ($diamonds as $diamond) {
                Diamond::updateOrCreate($diamond);
            }
        }
    }
