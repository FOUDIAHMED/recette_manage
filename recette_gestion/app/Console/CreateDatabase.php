<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class CreateDatabase extends Command
{
    protected $signature = 'db:create {database}';
    protected $description = 'Create a new database';

    public function handle()
    {
        $databaseName = $this->argument('database');

        // Use raw SQL to create the database
        DB::statement("CREATE DATABASE IF NOT EXISTS $databaseName");

        $this->info("Database $databaseName created successfully!");
    }
}
