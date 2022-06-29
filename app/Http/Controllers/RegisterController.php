<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'name' => 'required|max:30|min:4',
            'username' => 'required|max:30|min:4|unique:users,username',
            'email' => 'required|email|max:30|unique:users,email',
            'password' => 'required|min:6|max:255'
        ]);

        auth()->login(User::create($attributes));

        return redirect('/')->with('success', 'Conta criada com sucesso!');
    }
}
