<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index ()
    {
        $roles = Role::all();
        $user = Auth::user();
        return view("ViewAdmin.users.Register",compact("roles","user"));
    }

    public function store (Request $request)
    {
        $request->validate([
            'nom'=> 'required',
            'email'=> 'required|email|unique:users',
            'role'=> 'required',
            'password'=> 'required|min:8'
        ]);

        $user = User::create([
            "name"=>$request->nom,
            "email"=>$request->email,
            "role_id"=>$request->role,
            "password"=>Hash::make($request->password)
        ]);

        Auth::login($user);
        return redirect()->back()->with("success","Utilisateur inscrit !");
    }

}
