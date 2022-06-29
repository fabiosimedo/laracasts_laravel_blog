<?php

namespace App\Http\Controllers;

use App\Services\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function __invoke()
    {
        request()->validate([ 'email' => 'required|email' ]);

        try{
            (new Newsletter())->subscribe(request('email'));

        }catch(\Exception $e) {
            return redirect('/')->with('error', 'Erro ao se increver, tente novamente... ');

        }

        return redirect('/')->with('success', 'Você está inscrito na nossa newsletter!');
    }
}
