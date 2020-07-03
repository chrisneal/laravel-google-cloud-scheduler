<?php

namespace Tests\Support;

use Illuminate\Console\Command;

class TestCommand extends Command
{
    protected $signature = 'test:command';
    protected $description = 'Do some testy stuff';

    public function handle()
    {
        logger('did something testy');
    }
}
