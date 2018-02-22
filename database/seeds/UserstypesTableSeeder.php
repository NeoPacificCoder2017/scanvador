<?php

use Illuminate\Database\Seeder;
use App\Userstype;
class UserstypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userstypes = [
            [
                'name'=>'Admin',
                'category_user_id'=> 1,
            ],
            [
                'name'=>'Moderator',
                'category_user_id'=> 1,
            ],
            [
                'name'=>'Public',
                'category_user_id'=> 1,
            ],
            [
                'name'=>'Supervisor',
                'category_user_id'=> 1,
            ],
        ];

        foreach($userstypes as $usertype):
            Userstype::create($usertype);
        endforeach;
    }
}
