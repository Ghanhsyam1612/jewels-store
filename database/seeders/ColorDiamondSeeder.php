<?php

namespace Database\Seeders;

use App\Console\Commands\ColorDiamondCommand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ColorDiamondSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $colorDiamondCommand = new ColorDiamondCommand();
        $colorDiamondCommand->seedColorDiamond();
    }
}
