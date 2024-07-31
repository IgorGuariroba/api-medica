<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Exception;

class TestDatabaseConnection extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:test-database-connection';  // Ajuste para o nome correto

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Test database connection';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('Testing database connection...');

        try {
            DB::connection()->getPdo();
            $this->info('Database connection is working.');
        } catch (Exception $e) {
            $this->error('Could not connect to the database. Error: ' . $e->getMessage());
        }

        return 0;
    }
}
