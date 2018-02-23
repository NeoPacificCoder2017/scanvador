<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function saveUser($data)
    {
        $this->first_name = $data['first_name'];
        $this->last_name = $data['last_name'];
        $this->email = $data['email'];
        $this->phone_number = $data['phone_number'];
        $this->users_type_id = $data['users_type_id'];
        $this->password = bcrypt($data['password']);
        $this->class = $data['class'];
        $this->birth_date = $data['birth_date'];
        $this->official_picture = $data['official_picture'];
        $this->profil_picture = $data['profil_picture'];
        $this->token = $data['token'];
        $this->supervisor_name = $data['supervisor_name'];
        $this->supervisor_phone_number = $data['supervisor_phone_number'];
        $this->supervisor_mail = $data['supervisor_mail'];
        $this->establishment_id = $data['establishment_id'];
        $this->qr_code = $data['qr_code'];

        $this->save();
    }

    public function updateUser($data)
    {
        $user = $this->find($data['id']);
        $user->title = $data['title'];
        $user->description = $data['description'];
        $user->save();
        return 1;
    }
}
