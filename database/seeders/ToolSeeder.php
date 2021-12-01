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
        $tools = ['Hydraulic Bender','PVC Heater(small)','1 inch EMT Bender','Electric Bandsaw','Vice'];
        for ($i=0; $i < count($tools); $i++) {
            $tool = new Tool();
            $tool -> name = $tools[$i];
            $tool->brand_id = \App\Models\Brand::all()->random()->get()[0]->id;
            $tool -> save();
        }
    }
}
