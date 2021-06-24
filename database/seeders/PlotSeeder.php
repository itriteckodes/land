<?php

namespace Database\Seeders;

use App\Models\Plot;
use Illuminate\Database\Seeder;

class PlotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Plot::create([
            'title' => 'Plot 1',
            'agent_id'=>'1',
            'area'=> '75',
            'description'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
            'address'=>'Lorem ipsum dolor sit',
            'block'=>'Hasseeb Block',
            'lat'=>'66',
            'long'=>'46',
            'price'=>'150000',
            'marla'=>'20'
        ]);
        
        Plot::create([
            'title' => 'Plot 2',
            'agent_id'=>'1',
            'area'=> '85',
            'description'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
            'address'=>'Lorem ipsum dolor sit',
            'block'=>'Abibakar Block',
            'lat'=>'56',
            'long'=>'36',
            'price'=>'100000',
            'marla'=>'10'
        ]);
        
        Plot::create([
            'title' => 'Plot 3',
            'agent_id'=>'1',
            'area'=> '85',
            'description'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
            'address'=>'Lorem ipsum dolor sit',
            'block'=>'Usman Block',
            'lat'=>'76',
            'long'=>'56',
            'price'=>'200000',
            'marla'=>'20'
        ]);
    }
}
