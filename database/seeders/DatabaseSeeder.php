<?php

namespace Database\Seeders;

use Database\Seeders\CategorySeeder;
use Database\Seeders\StatusSeeder;
use Database\Seeders\UserSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            StatusSeeder::class
        ]);
    }
}
