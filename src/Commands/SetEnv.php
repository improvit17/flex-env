<?php

namespace Sven\FlexEnv\Commands;

use Sven\FlexEnv\FlexEnv;
use Symfony\Component\Console\Input\InputArgument;

class SetEnv extends FlexEnv
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'env:set {key} {value}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Set an environment key to the given value.';

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
     * @return void
     */
    public function handle()
    {
        //
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return [
            ['key', InputArgument::REQUIRED, 'The key to set in your .env file.'],
            ['value', InputArgument::REQUIRED, 'The value to set it to.'],
        ];
    }
}