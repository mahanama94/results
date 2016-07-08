<?php
/**
 * Created by PhpStorm.
 * User: Rajith Bhanuka
 * Date: 7/6/2016
 * Time: 15:09
 */

Namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

use App\Models\Report;
use App\Models\UserData;

class User extends Model implements AuthenticatableContract
{
    use Authenticatable;

    protected $primaryKey = 'admNum';
    
    private $report = null;

    private $userData = null;

    protected $table = 'results';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

        'admNum' , 'gpa'

    ];

    protected $hidden = [
        'remember_token'
    ];


    /**
     *          RELATIONSHIPS
     */

    private function UserData(){
        return $this->hasOne('App\Models\UserData', 'admNum', 'admNum');
    }


    /**
     *          GETTERS RELATIONSHIP
     */

    private function getUserData(){
        if($this->userData == null){
            $this->userData = $this->UserData()->first();
        }
        return $this->userData;
    }

    /**
     *          GETTERS
     */

    /*public function getId(){
        return $this->id;
    }
    */
    public function getIndexNumber(){
        return $this->getUserData()->getIndexNumber();
    }

    public function getName(){
        /**if($this->name){
            return $this->getEmail();
        }
        return $this->name;
         */
        return $this->getUserData()->getName();
    }

    public function getEmail(){

        return $this->getIndexNumber()."@uom.lk";

    }
    
    public function getAvatar()
    {
        return "http://www.gravatar.com/avatar/" . md5(strtolower(trim($this->getEmail()))) . "?d=mm&s=50";
    }

    public function getReport()
    {
        if ($this->report == null) {
            $this->report = new Report();
            $this->report->addUser($this);
        }
        return $this->report;
    }

    public function getRank(){
        //User::where('gpa','>', 3.5)->count();
        return User::where('gpa', '>',$this->getGPA())->where('admNum', '<', 150730)->count() + 1;
    }

    public function getGPA(){
        return $this->gpa;
    }

}