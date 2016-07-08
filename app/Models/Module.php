<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Module extends Model{

    private static $gradeTypes = ['A+', 'A', 'A-', 'B+', 'B', 'B-', 'C+', 'C', 'C-', 'D', 'I-we', 'I-ca', 'F'];

    private $statistics = null;

    protected $table='moduletest';

    protected $fillable = [
      'moduleCode' , 'credits', 'moduleName'
    ];

    public function getModuleCode(){
        return $this->moduleCode;
    }

    public function getModuleName(){
        return $this->moduleName;
    }

    public function getModuleCredits(){
        return $this->credits;
    }

    // TODO needs to be revised
    public function getResultStatistics(){
        /*if($this->statistics==null){
            foreach( Module::$gradeTypes as $gradeType){
                $this->statistics[$gradeType] = Grade::where('moduleCode', $this->getModuleCode())
                    ->where('grade', $gradeType)->count();
            }
        }
        return $this->statistics;*/

        if($this->statistics== null){
            foreach( Module::$gradeTypes as $gradeType){
                $this->statistics[$gradeType] = Report::where('moduleCode', $gradeType)->count();
            }
        }
        return $this->statistics;
    }
}