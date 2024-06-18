<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Interessi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InteressiController extends Controller
{

    public function updateInterests(Request $request)
{
    $user = Auth::user();

    $existingInterestIds = $user->choices()->pluck('interessi_id')->toArray();
    $newlySelectedInterestIds = $request->input('interessi', []);

    $interestsToRemove = array_intersect($existingInterestIds, $newlySelectedInterestIds);
    if (!empty($interestsToRemove)) {
        $user->choices()->detach($interestsToRemove);
    }

    $interestsToAdd = array_diff($newlySelectedInterestIds, $existingInterestIds);
    if (!empty($interestsToAdd)) {
        $interestsToAdd = Interessi::whereIn('id', $interestsToAdd)->get();
        foreach ($interestsToAdd as $interest) {
            $user->choices()->attach($interest->id);
        }
    }

    return redirect('/no-card');
}

public function getUserInterests(){
    $user = Auth::user();
    $existingInterestIds = $user->choices()->pluck('interessi_id')->toArray();
    $interessi = Interessi::all();
    return response()->json($existingInterestIds);
}
 
    public function checkbox()
    {
        $interessi = Interessi::all();

        return view('components.layouts.checkbox', ['interessi'=> $interessi]);
    }

    public function checkbox_form()
    {
        $interessi = Interessi::all();
        return view('components.layouts.checkbox-form', ['interessi'=> $interessi]);
    }

    public function pg2Section()
    {
        $interessi = Interessi::all();
        return view('components.layouts.pg2-section', ['interessi' => $interessi]);
    }
    
    public function pg2()
    {
        $interessi = Interessi::all();
        return view('pg2', ['interessi' => $interessi]);
    }

    public function dati()
    {
        $interessi = Interessi::all();
        return view('dati', ['interessi' => $interessi]);
    }

    
    public function pg3_form()
    {
        $interessi = Interessi::all();
        return view('components.layouts.pg3-form', ['interessi' => $interessi]);
    }
}


