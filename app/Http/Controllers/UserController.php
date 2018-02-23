<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function index()
    {
        $admin = auth::user()->users_type_id == 1;
        if($admin):
                $users = User::all();
                return view('users.users', ['users'=>$users]);
        else:
                return redirect('/home')->with('error', 'Vous n\'avez pas le droit d\'acceder à cette page');
        endif; 
    }

    public function show($id)
    {
        $admin = auth::user()->users_type_id == 1;
        if($admin):
            $user = User::find($id);
            return view('users.user', ['user'=>$user]);
        else:
            return redirect('/home')->with('error', 'Vous n\'avez pas le droit d\'acceder à cette page');
        endif;
    }

    public function create()
    {
        return view('users.create-form');
    }

    public function store(Request $request)
    {
        $user = new User();
        $data = $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'users_type_id' => 'required',
            'password' => 'required',
            'class' => 'required',
            'birth_date' => 'required',
            'official_picture' => 'required',
            'profil_picture' => 'required',
            'token' => 'required',
            'supervisor_name' => 'required',
            'supervisor_phone_number' => 'required',
            'supervisor_mail' => 'required',
            'establishment_id' => 'required',
            'qr_code' => 'required'
        ]);
        $user->saveUser($data);
        return redirect('/home/users')->with('success', 'L\'utilisateur à bien été ajouté');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('users.edit-form', ['user'=>$user]);
    }

    public function update($id)
    {
        $user = new User();
        $data = $this->validate($request, [
            'description'=>'required',
            'title'=> 'required'
        ]);
        $ticket->updateTicket($data);

        return redirect('/home')->with('success', 'New support ticket has been updated!!');
    }
    
}
