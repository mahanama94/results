<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Module;

class Grade{
    
    private $module;

   /*
   protected $table = 'module_grade';

    protected $fillable = [
        'moduleCode' , 'indexNumber' , 'grade'
    ];
    */

    private $grade;

    private static $conversion = array(
        'A+' => 4.2,
        'A'  => 4.0,
        'A-' => 3.7,
        'B+' => 3.3,
        'B'  => 3.0,
        'B-' => 2.7,
        'C+' => 2.3,
        'C'  => 2.0,
        'C-' => 1.7,
        'D'  => 1.5,
        'I-we' => 0,
        'I-ca' => 0,
        'F'  => 0
    );

    public function __construct($module , $grade)
    {
        $this->module = Module::where('moduleCode', $module)->first();
        $this->grade = $grade;
    }

    public function toString(){
        return $this->grade;
    }

    public function toGPA(){
        $conversion = Grade::conversion;
        return $conversion[$this->toString()];
    }

    public function getModuleCode(){
        return $this->getModule()->getModuleCode();
    }

    public function getModule()
    {
        return $this->module;
    }
}