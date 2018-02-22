<?php

use Illuminate\Database\Seeder;
use App\Status;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::create(['name' => 'présent']);

        Status::create(['name' => 'retard']);
        
        Status::create(['name' => 'absent']);
    }
}
