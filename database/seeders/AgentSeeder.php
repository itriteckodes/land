<?php

namespace Database\Seeders;

use App\Models\Agent;
use Illuminate\Database\Seeder;

class AgentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Agent::create([
           'name' => 'agent',
           'email' => 'agent@mail.com',
           'password' => 1234
       ]);
    
       Agent::create([
           'name' => 'huzaifa',
           'email' => 'ihuzaifaaslam@gmail.com',
           'password' => 1234
       ]);
    }
}
