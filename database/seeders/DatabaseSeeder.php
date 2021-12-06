<?php

namespace Database\Seeders;

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

        $this->call(UserSeeder::class);
        $this->call(BrandSeeder::class);
        $this->call(ToolSeeder::class);
        $this->call(MaterialSizeSeeder::class);
        $this->call(MaterialSeeder::class);

    }
}
