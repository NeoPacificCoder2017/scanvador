<?php

use Illuminate\Database\Seeder;
use App\Constant;

class ConstantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $constants = [];

        for($i = 0; $i < 15; $i++):
            // $minutes = rand(1, 11);
            $constants[] = [
                'name' => 'T'.$i,
                'value' => ($i+1)*5,
            ];
        endfor;

        foreach($constants AS $constant):
            Constant::create($constant);
        endforeach;
    }
}
