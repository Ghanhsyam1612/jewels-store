<?php

namespace App\Console\Commands;

use App\Helpers\states;
use Illuminate\Console\Command;

class StateCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:state-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Seed states from csv file';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->seedStates();
    }

    public function seedStates()
    {
        $stateHelper = new states();
        $filePath = realpath(app_path() . '/../sqltable/states.csv');
        $stateHelper->readStateCsv($filePath);
    }
}
