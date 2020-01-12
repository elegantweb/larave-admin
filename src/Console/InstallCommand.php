<?php

namespace Elegant\Admin\Console;

use Illuminate\Console\Command;

class InstallCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $signature = 'admin:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install the admin package';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $this->call('notifications:table');

        $this->call('vendor:publish', ['--tag' => 'laravel-admin-public', '--force' => true]);
    }
}
