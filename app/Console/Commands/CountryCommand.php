<?php

namespace App\Console\Commands;

use App\Helpers\countries;
use Illuminate\Console\Command;

class CountryCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:country-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Seed countries from csv file';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->seedCountries();
    }

    public function seedCountries()
    {
        $countryHelper = new countries();
        $filePath = realpath(app_path(). '/../sqltable/countries.csv');
        $countryHelper->readCountryCsv($filePath);  
    }
}

