<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(1)->create();
        $this->call(AuthorSeeder::class);
        $this->call(BookSeeder::class);
        $this->call(BookStatusSeeder::class);
        $this->call(BookAuthorSeeder::class);
    }
}
