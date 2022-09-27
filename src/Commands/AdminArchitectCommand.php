<?php

namespace Webplusmultimedia\AdminArchitect\Commands;

use Illuminate\Console\Command;

class AdminArchitectCommand extends Command
{
    public $signature = 'admin-architect';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
