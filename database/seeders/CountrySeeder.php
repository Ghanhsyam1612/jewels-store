<?php

namespace Database\Seeders;

use App\Console\Commands\CountryCommand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countryCommand = new CountryCommand();
        $countryCommand->seedCountries();
    }
}
