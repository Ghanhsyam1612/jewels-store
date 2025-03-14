<?php

namespace App\Console\Commands;

use App\Helpers\diamonds;
use App\Helpers\naturaldiamonds;
use Illuminate\Console\Command;

class NaturalDiamondCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:natural-diamond-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Seed Natural Diamond from csv file';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->seedNaturalDiamonds();
    }

    public function seedNaturalDiamonds()
    {
        $diamondHelper = new naturaldiamonds();
        $filePath = realpath(app_path() . '/../sqltable/natural_diamond.csv');
        $diamondHelper->readNaturalDiamondCsv($filePath);
    }
}
