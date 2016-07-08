<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserData;

class SearchController  extends Controller{

    public function getResults(Request $request){

        $query = $request->input('query');

        if(!$query){
            return redirect()->route('home');
        }

        $usersName = UserData::where('name', 'LIKE', "%".$query."%")->get();
        $users = User::where('admNum', 'LIKE', '%'.$query.'%')->get();

        //$users = $usersName->merge($usersIndex);
        
        return view('search.results')->with('users', $users);
    }
}