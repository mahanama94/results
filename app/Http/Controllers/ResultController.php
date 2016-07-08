<?php

namespace App\Http\Controllers;

use App\Models\User;

class ResultController extends Controller{

    public function index($type){
        if($type == 'all') {
            $users = User::orderBy('gpa', 'desc')->get();
            return view('result.list')->with('users', $users);
        }
        else{
            return redirect()->route('home');
        }
    }

}