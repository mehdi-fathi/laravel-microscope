<?php

namespace Imanghafoori\LaravelMicroscope\Commands;

use Illuminate\Console\Command;

class CheckGate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'check:gate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Checks the validity of gate definitions';

    public function handle()
    {
        //
    }
}
