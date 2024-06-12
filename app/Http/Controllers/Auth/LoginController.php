<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Interessi;

use Illuminate\Http\Request;
class LoginController extends Controller
{
    public function processForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);
        $user = User::where('email', $request->email)->first();
        if ($user) {
            return redirect('page2');
        } else {
            return redirect('dati');
        }
    }
    public function showCardToysCenter()
    {
        $interessi = Interessi::all();
        return view('pg2', ['interessi' => $interessi]);
    }
    public function showDati()
    {
        $interessi = Interessi::all();
        return view('dati', ['interessi' => $interessi]);
    }
}