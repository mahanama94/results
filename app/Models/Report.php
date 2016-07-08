<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Grade;
use App\Models\Module;
use App\Models\Enrollment;
use App\Models\User;

class Report extends Model{

    protected $table = 'results';

    // include module codes here
    protected $fillable = [
        'CE1022','ME1032','CS1032',


    ];

    private $user;

    private $grades = null;


    /*public function __construct($indexNumber)
    {
        /*$enrollments = Enrollment::where('indexNumber', $indexNumber)->get();

        foreach ($enrollments as $enrollment){
            $this->grades[$enrollment->getModuleCode()] = Grade::where('indexNumber', $indexNumber)
                ->where('moduleCode', $enrollment->getModuleCode())->first();
        }

        foreach ($this->fillable as $module){
            if(!Report::where('indexNumber', $indexNumber)->get()->isEmpty()) {
                $this->grades[$module] = new Grade($module, Report::where('indexNumber', $indexNumber)->first()[$module]);
            }
        }
    }*/

    public function getGrades(){
        $indexNumber = $this->user->getIndexNumber();
        if($this->grades== null){
            foreach ($this->fillable as $module){
                if(!Report::where('admNum', $indexNumber)->get()->isEmpty()) {
                    $this->grades[$module] = new Grade($module, Report::where('admNum', $indexNumber)->first()[$module]);
                }
            }
        }
        return $this->grades;
    }

    public function addUser($user){
        $this->user = $user;
    }
}