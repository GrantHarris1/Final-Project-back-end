<?php

namespace Database\Seeders;
use App\Models\Material;

use Illuminate\Database\Seeder;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $materials = ['Hex Head Bolts','Hex Nuts','Fender Washers','One Hole Straps',
        'Mini Straps', '3/4 RMC','1 inch RMC', '1.25 inch RMC', '1.5 inch RMC', '2 inch RMC',
        '3/4 EMT', '1 inch EMT', '1.25 inch EMT',];
        for ($i=0; $i < count($materials); $i++) {
            $material = new Material;
            $material -> name = $materials[$i];
            $material -> type = "Type";
            $material->size = \App\Models\MaterialSize::inRandomOrder()->limit(1)->get()[0]->id;
            $material -> save();
        }
    }
}
