<?php

use Illuminate\Database\Seeder;
use App\CategoryUsersType;
class CategoryUsersTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name'=>'Ecole',
            ],
            [
                'name'=>'Entreprise',
            ]
        ];

        foreach($categories as $categorie):
            CategoryUsersType::create($categorie);
        endforeach;
    }
    
}
