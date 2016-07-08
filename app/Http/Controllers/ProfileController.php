<?php
namespace App\Http\Controllers;

use App\Models\User;

class ProfileController extends Controller{


    public function updateProfile(){
        //TODO include code to update the profile
    }

    public function getProfile($indexNumber){
        $user = User::where('admNum', $indexNumber)->first();

        if(!$user){
            abort(404);
        }

        return view('profile.index')
            ->with('user', $user)
            ->with('grades', $user->getReport()->getGrades());
    }

}