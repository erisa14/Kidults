<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

class CardController extends Controller
{

    public function withoutCard()
    {   
        if (!Auth::check()) {
        return redirect('/');
    }
    else{
        return view('without-card');

    }
    }

    public function withCard()
    {   
        if (!Auth::check()) {
        return redirect('/');
    }
    else{
        return view('with-card');

    }
    }
}