<?php

use Illuminate\Database\Seeder;

class PlaceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $places = [
            [
                'name'=>'A01',
                'establishment_id'=>1
            ],
            [
                'name'=>'A02',
                'establishment_id'=>1
            ],
            [
                'name'=>'A03',
                'establishment_id'=>1
            ],
            [
                'name'=>'A04',
                'establishment_id'=>1
            ]
        ];

        foreach($places as $place):
            Place::create($place);
        endforeach;
    }
}
