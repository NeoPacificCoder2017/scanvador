<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'first_name' => 'Administrator',
                'last_name' => 'First',
                'birth_date' => '20/01/1995',
                'email' => 'administrator@hotmail.com',
                'qr_code' => 'https://upload.wikimedia.org/wikipedia/commons/7/78/Qrcode_wikipedia_fr_v2clean.png',
                'official_picture' => 'http://www.littlehearts.ind.in/wp-content/themes/lhs/Birthday/images/adm.png',
                'profil_picture' =>'http://www.littlehearts.ind.in/wp-content/themes/lhs/Birthday/images/adm.png',
                'phone_number' => '87272727',
                'users_type_id' => 1,
                'password' => bcrypt('administrator'),
                'class' => 'null',
                'token' => '1111111',
                'supervisor_name' => 'null',
                'supervisor_phone_number' => '87272727',
                'supervisor_mail' => 'supervisor@hotmail.com',
                'establishment_id' => 1,
            ],
            [
                'first_name' => 'Moderator',
                'last_name' => 'First',
                'birth_date' => '20/01/1995',
                'email' => 'moderator@hotmail.com',
                'qr_code' => 'https://upload.wikimedia.org/wikipedia/commons/7/78/Qrcode_wikipedia_fr_v2clean.png',
                'official_picture' => 'http://www.littlehearts.ind.in/wp-content/themes/lhs/Birthday/images/adm.png',
                'profil_picture' =>'http://www.littlehearts.ind.in/wp-content/themes/lhs/Birthday/images/adm.png',
                'phone_number' => '87272727',
                'users_type_id' => 1,
                'password' => bcrypt('moderator'),
                'class' => 'null',
                'token' => '222222',
                'supervisor_name' => 'null',
                'supervisor_phone_number' => '87272727',
                'supervisor_mail' => 'supervisor@hotmail.com',
                'establishment_id' => 1,
            ],
            [
                'first_name' => 'Public',
                'last_name' => 'First',
                'birth_date' => '20/01/1995',
                'email' => 'public@hotmail.com',
                'qr_code' => 'https://upload.wikimedia.org/wikipedia/commons/7/78/Qrcode_wikipedia_fr_v2clean.png',
                'official_picture' => 'http://www.littlehearts.ind.in/wp-content/themes/lhs/Birthday/images/adm.png',
                'profil_picture' =>'http://www.littlehearts.ind.in/wp-content/themes/lhs/Birthday/images/adm.png',
                'phone_number' => '87272727',
                'users_type_id' => 1,
                'password' => bcrypt('public'),
                'class' => 'null',
                'token' => '333333',
                'supervisor_name' => 'null',
                'supervisor_phone_number' => '87272727',
                'supervisor_mail' => 'supervisor@hotmail.com',
                'establishment_id' => 1,
            ],
            [
                'first_name' => 'vaiarii',
                'last_name' => 'vaiarii',
                'birth_date' => '10/09/1988',
                'email' => 'tepavaiarii@gmail.com',
                'qr_code' => 'https://upload.wikimedia.org/wikipedia/commons/7/78/Qrcode_wikipedia_fr_v2clean.png',
                'official_picture' => 'https://cdn.pixabay.com/photo/2017/02/23/13/05/profile-2092113_1280.png',
                'profil_picture' =>'https://cdn.pixabay.com/photo/2017/02/23/13/05/profile-2092113_1280.png',
                'phone_number' => '87878787',
                'users_type_id' => 1,
                'password' => bcrypt('vaiarii'),
                'class' => 'null',
                'token' => '444444',
                'supervisor_name' => 'null',
                'supervisor_phone_number' => 'null',
                'supervisor_mail' => 'null',
                'establishment_id' => 1,
            ],
        ];

        foreach($users as $user):
            User::create($user);
        endforeach;
    
    }
}
