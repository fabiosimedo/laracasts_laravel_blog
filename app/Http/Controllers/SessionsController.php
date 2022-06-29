<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success', 'Até logo!');
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if(! Auth::attempt($attributes)) {
            return back()->withInput()
            ->withErrors(['email' => 'Suas credenciais estão incorretas']);
        }

        session()->regenerate();

        return redirect('/')->with('success', 'Bem vindo(a) de volta!');


    }

}
