<?php

namespace App\Console\Commands;

use App\Helpers\colordiamonds;
use Illuminate\Console\Command;

class ColorDiamondCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:color-diamond-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Seed Color Diamond from csv file';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->seedColorDiamond();
    }

    public function seedColorDiamond()
    {
        $colorDiamondHelper = new colordiamonds();
        $filePath = realpath(app_path() . '/../sqltable/color_diamond.csv');
        $colorDiamondHelper->readColorDiamondCsv($filePath);
    }
}
