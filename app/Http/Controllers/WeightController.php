<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Weight;

class WeightController extends Controller
{
    public function index(Request $req, Weight $user){
        $user = $user::create([
           "name" => $req->name,
           "weight" => $req->weight
        ]);
        
        $user->save();

        return redirect('/weights')->with('success');
    }

    public function show(){
        $weights = Weight::all();
        return view('weightsview', compact('weights'));
    }
    
}
