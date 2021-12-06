<?php

namespace Database\Seeders;

use App\Models\MaterialSize;
use Illuminate\Database\Seeder;

class MaterialSizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $materialSize = ['1/4 inch','3/8 inch','1/2 inch','1/4 x 20','3/8 x 20'];
        for ($i=0; $i < count($materialSize); $i++) {
            $brand = new MaterialSize;
            $brand -> name = $materialSize[$i];
            $brand -> save();
        }
    }
}
