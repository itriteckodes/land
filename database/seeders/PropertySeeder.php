<?php

namespace Database\Seeders;

use App\Models\Property;
use Illuminate\Database\Seeder;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Property::create([
            'title' => 'Property 1',
            'agent_id'=>'1',
            'area'=> '75',
            'bedrooms'=> '5',
            'bathrooms'=> '3',
            'garage'=> '1',
            'type'=> 'Rent',
            'description'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
            'address'=>'Lorem ipsum dolor sit',
            'block'=>'Hasseeb Block',
            'price'=>'15000',
            'marla'=>'20'
        ]);
        
        Property::create([
            'title' => 'Property 2',
            'agent_id'=>'1',
            'area'=> '73',
            'bedrooms'=> '3',
            'bathrooms'=> '1',
            'garage'=> '0',
            'type'=> 'Sale',
            'description'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
            'address'=>'Lorem ipsum dolor sit',
            'block'=>'Usman Block',
            'price'=>'150000',
            'marla'=>'20'
        ]);
        
        Property::create([
            'title' => 'Property 3',
            'agent_id'=>'1',
            'area'=> '75',
            'bedrooms'=> '7',
            'bathrooms'=> '2',
            'garage'=> '2',
            'type'=> 'Rent',
            'description'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
            'address'=>'Lorem ipsum dolor sit',
            'block'=>'Hasseeb Block',
            'price'=>'25000',
            'marla'=>'20'
        ]);

    }
}
