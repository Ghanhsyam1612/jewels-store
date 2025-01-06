<?php

namespace Database\Seeders;

use App\Console\Commands\DiamondCommand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Diamond;

class DiamondSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $diamondCommand = new DiamondCommand();
        $diamondCommand->seedDiamonds();
    }
}
