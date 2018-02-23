<?php

use Illuminate\Database\Seeder;
use App\Establishment_type;
class EstablishmentTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $establishments_types = [
            [
                'name' => 'lycée',
            ],
            [
                'name' => 'université',
            ],
            [
                'name' => 'collège'
            ],
            [
                'name' => 'S.A.S'
            ],
            [
                'name' => 'Grande Entreprise'
            ],
        ];

        foreach($establishments_types AS $establishment_type):
            Establishment_type::create($establishment_type);
        endforeach;
    }
}
