<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Contracts\Filesystem\Factory;
use Illuminate\Support\Facades\Storage;

class MakeTestDb extends Command {

    protected $signature = 'testdb:make';

    protected $description = 'Make test db';

    public function __construct() {
        parent::__construct();
    }

    public function handle() {

        $database = Storage::disk('database');
        $database->makeDirectory('abc');
        $database->put('testing.sqlite', '');
        $this->call('migrate', [ '--database' => 'sqlite_testing']);
    }
}
