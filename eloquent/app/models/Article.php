<?php

namespace Models;
use \Illuminate\Database\Eloquent\Model;

class Article extends Model {
    protected $table = "articles";
    protected $fillable = array("title","user_id");
}