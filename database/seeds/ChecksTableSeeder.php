<?php

use Illuminate\Database\Seeder;
use App\Check;

class ChecksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Check::class, 100)->create();
    }
}
