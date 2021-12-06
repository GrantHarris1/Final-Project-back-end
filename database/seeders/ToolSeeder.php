<?php

namespace Database\Seeders;

use App\Models\Tool;
use Illuminate\Database\Seeder;

class ToolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tools = ['Hydraulic Bender','PVC Heater(small)','1 inch EMT Bender','Electric Bandsaw',
        'Vice', '8 ft. Ladder','10 ft Ladder', 'PVC heater (large)', 'SDS Hammer Drill', '(Macho) Hammer Drill',
        'Impact Driver', 'Battery Drill', 'Power Pony'];
        for ($i=0; $i < count($tools); $i++) {
            $tool = new Tool();
            $tool -> name = $tools[$i];
            $tool->brand_id = \App\Models\Brand::inRandomOrder()->limit(1)->get()[0]->id;
            $tool -> save();
        }
    }
}
