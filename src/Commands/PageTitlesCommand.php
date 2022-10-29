<?php

namespace Aon2003\PageTitles\Commands;

use Illuminate\Console\Command;

class PageTitlesCommand extends Command
{
    public $signature = 'laravel-page-titles';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
