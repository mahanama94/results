<?php

namespace App\Http\Controllers;

use App\Models\User;

class ResultController extends Controller{

    public function index(){
        $users = User::orderBy('gpa', 'desc')->get();
        return view('result.list')->with('users', $users);
    }

}