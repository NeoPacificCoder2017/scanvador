<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.users', ['users'=>$users]);
    }

    public function show($id)
    {
        $user = User::find($id);
        return view('users.user', ['user'=>$user]);
    }

    public function create()
    {
        return view('users.create-form');
    }

    public function store(Request $request)
    {

        $product = $this->validate(request(), [
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'supplier_id' => 'required|numeric',
            'product_category_id' => 'required|numeric',
            'quantity' => 'required|numeric',
            'price' => 'required|numeric'
          ]);
            Product::create($request->all());

        return back()->with('success', 'Product has been added');
    }

}
