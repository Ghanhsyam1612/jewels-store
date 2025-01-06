<?php

namespace App\Console\Commands;

use App\Helpers\diamonds;
use Illuminate\Console\Command;

class DiamondCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:diamond-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Seed Diamond from csv file';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->seedDiamonds();
    }

    public function seedDiamonds()
    {
        $diamondHelper = new diamonds();
        $filePath = realpath(app_path() . '/../sqltable/diamonds.csv');
        $diamondHelper->readDiamondCsv($filePath);
    }
}
