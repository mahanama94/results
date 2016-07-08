<?php
/**
 * Created by PhpStorm.
 * User: Rajith Bhanuka
 * Date: 7/6/2016
 * Time: 15:21
 */

namespace App\Http\Controllers;

use Auth;

class HomeController extends Controller{

    public function index()
    {
        if (Auth::check()) {

            return view('home')
                ->with('grades', Auth::User()->getReport()->getGrades())
                ->with('user', Auth::User());
        }
        return redirect()->route('auth.login');
    }
}