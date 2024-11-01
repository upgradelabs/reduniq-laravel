<?php

namespace Upgradelabs\ReduniqLaravel\Commands;

use Illuminate\Console\Command;

class ReduniqCommand extends Command
{
    public $signature = 'reduniq-laravel';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
