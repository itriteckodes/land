<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::create([
            'title' => 'Electricity',
            'description'=> 'services refer to basic services that residents of a city expect the city government to provide in exchange for the taxes which citizens pay.',
            'price'=> '10000'
        ]);
        
        Service::create([
            'title' => 'Security',
            'description'=> 'services refer to basic services that residents of a city expect the city government to provide in exchange for the taxes which citizens pay.',
            'price'=> '5000'
        ]);
        
        Service::create([
            'title' => 'Gas',
            'description'=> 'services refer to basic services that residents of a city expect the city government to provide in exchange for the taxes which citizens pay.',
            'price'=> '7000'
        ]);
        
        Service::create([
            'title' => 'Water Supply',
            'description'=> 'services refer to basic services that residents of a city expect the city government to provide in exchange for the taxes which citizens pay.',
            'price'=> '4000'
        ]);
        
     
    }
}
