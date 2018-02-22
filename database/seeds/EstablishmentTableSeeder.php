<?php

use Illuminate\Database\Seeder;
use App\Establishment;

class EstablishmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $establishments = [
            [
                'name'=>'Papara',
                'establishment_type_id'=>'1'
            ],
            [
                'name'=>'4+4',
                'establishment_type_id'=>'1'
            ],
            [
                'name'=>'herepata',
                'establishment_type_id'=>'1'
            ],
            [
                'name'=>'Vodafone',
                'establishment_type_id'=>'2'
            ],
            [
                'name'=>'Vini',
                'establishment_type_id'=>'2'
            ],
            [
                'name'=>'IDT',
                'establishment_type_id'=>'2'
            ],
            [
                'name'=>'Pomare',
                'establishment_type_id'=>'1'
            ],
        ];
        foreach($establishments AS $establishment):
            Establishment::create($establishment);
        endforeach;
    }
}
