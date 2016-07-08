<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\User;

class UserData extends Model{

    protected $table = 'names';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

        'admNum' , 'index', 'name'

    ];

    /**
     *          RELATIONSHIPS
     */

    private function User(){
        return $this->belongsTo('App\Models\User', 'admNum', 'admNm');
    }

    /**
     *          GETTERS - RELATIONSHIP
     */

    public function getUser(){
        return $this->User()->first();
    }
    /**
     *          GETTERS
     */

    public function getIndexNumber(){
        return $this->index;
    }

    public function getName(){
        return $this->name;
    }

}