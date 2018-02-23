<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(UserstypesTableSeeder::class);
        $this->call(CategoryUsersTypesTableSeeder::class);
        $this->call(CategoryUsersTypesTableSeeder::class);
        $this->call(EstablishmentTableSeeder::class);
        $this->call(EstablishmentTypeTableSeeder::class);
    }
}
