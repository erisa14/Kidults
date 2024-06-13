<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Interessi;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    


public function processForm(Request $request)
{
        if (Auth::check()) {
            return redirect('/page2');
        }
        $request->validate([
            'email' => 'required|email',
        ]);
        $user = User::where('email', $request->email)->first();
        if ($user) {
            Auth::login($user);
            return redirect('/page2');
        } else {
            return redirect('/dati')->with('alert', 'This email isn\'\t registered!');
        }
    }
}