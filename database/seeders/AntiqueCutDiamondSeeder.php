<?php

namespace Database\Seeders;

use App\Console\Commands\AntiqueCutDiamondCommand;
use Illuminate\Database\Seeder;

class AntiqueCutDiamondSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $antiqueCutDiamondCommand = new AntiqueCutDiamondCommand();
        $antiqueCutDiamondCommand->seedAntiqueCutDiamonds();
    }
}
