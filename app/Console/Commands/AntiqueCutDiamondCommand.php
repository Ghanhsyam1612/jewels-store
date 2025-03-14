<?php

namespace App\Console\Commands;

use App\Helpers\AntiqueCutDiamonds;
use Illuminate\Console\Command;

class AntiqueCutDiamondCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:antique-cut-diamond-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Seed Antique Cut Diamond from csv file';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->seedAntiqueCutDiamonds();
    }

    public function seedAntiqueCutDiamonds()
    {
        $diamondHelper = new AntiqueCutDiamonds();
        $filePath = realpath(app_path() . '/../sqltable/antique_cut_diamonds.csv');
        $diamondHelper->readAntiqueCutDiamondCsv($filePath);
    }
}
