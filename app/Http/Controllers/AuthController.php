<?php
/**
 * Created by PhpStorm.
 * User: Rajith Bhanuka
 * Date: 7/6/2016
 * Time: 15:14
 */

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;


use App\Models\User;

class AuthController extends Controller{

    public function getLogIn(){
        return view('auth.login');
    }

    public function postLogIn(Request $request){

        $this->validate($request, [
            "admNum" => 'required|exists:results',
        ]);

        $user = User::where('admNum', $request->input('admNum'))->first();

        Auth::login($user);

        return redirect()->route('home')->with('success', 'You have successfully logged in');
    }

    public function getLogout(){
        Auth::logout();
        return redirect()->route('auth.login')->with('warning', 'You have logged out');
    }
}