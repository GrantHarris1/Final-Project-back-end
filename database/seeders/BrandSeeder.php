<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brands = ['Dewalt','Milwaukee','Bosch','Greenlee','Klein'];
        for ($i=0; $i < count($brands); $i++) {
            $brand = new Brand();
            $brand -> name = $brands[$i];
            $brand -> save();
        }
    }
}
