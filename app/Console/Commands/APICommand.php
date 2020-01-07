<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Artisan;
class APICommand extends Command
{
   /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:api {api}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'make api';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        Artisan::call('make:controller Dashboard/'.$this->argument('api').'Controller' );
        Artisan::call('make:model Models/'.$this->argument('api').' -m' );
        
    }
}
