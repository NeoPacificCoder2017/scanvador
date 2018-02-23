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

        //----------------------- seed the schedules table ----------//
        $this->call(SchedulesTableSeeder::class);
        $this->command->info('schedules table seeded');

    }
}
