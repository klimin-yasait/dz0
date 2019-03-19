<?php

namespace Models;
use \Illuminate\Database\Eloquent\Model;

class User extends Model {
    protected $table = "users";
    protected $fillable = array("name");

    public function articles(){
        return $this->hasMany('Models\Article');
    }
}