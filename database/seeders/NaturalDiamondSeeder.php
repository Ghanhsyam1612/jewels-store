<?php

namespace Database\Seeders;

use App\Console\Commands\NaturalDiamondCommand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NaturalDiamondSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $naturalDiamondCommand = new NaturalDiamondCommand();
        $naturalDiamondCommand->seedNaturalDiamonds();
    }
}
