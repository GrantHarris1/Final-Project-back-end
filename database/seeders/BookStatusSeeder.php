<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BookStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\BookStatus::factory(3)->create();
    }
}
