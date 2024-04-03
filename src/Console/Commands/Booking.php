<?php

namespace Webkul\BookingProduct\Console\Commands;

use Illuminate\Console\Command;

class Booking extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'booking-product:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Booking Product installer.';

    /**
     * Install and configure bagisto.
     */
    public function handle()
    {
        $this->info('Step: Dumping autoload files...');
        $this->info(shell_exec('composer dump-autoload'));

        $this->info('Step: Running database migrations...');
        $this->call('migrate');

        $this->info('Step: Clearing cached optimization files...');
        $this->call('optimize:clear');
    }
}