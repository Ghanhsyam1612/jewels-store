<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Helpers\cities;
class CityCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:city-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Seed cities from csv file';

    /**
     * Execute the console command.
     */
    public function handle()
    {
            $this->seedCities();
    }

    public function seedCities()
    {
        $cityHelper = new cities();
        $filePath = realpath(app_path() . '/../sqltable/cities.csv');
        $cityHelper->readCityCsv($filePath);    
    }
}
