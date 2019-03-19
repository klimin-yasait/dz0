<?php
require_once "config.php";
require_once "vendor/autoload.php";

use Models\Database;
use Controllers\Users;
use Controllers\Articles;

new Database();

//$user = Users::create_user("Steeve");
//$article = Articles::create_article("Good news!",1);

//var_dump($user);
//var_dump($article);

$users = Users::show_users();
foreach ($users as $user){
    echo $user->name . '<br>';
    foreach ($user->articles as $article){
        echo $article->title . '<br>';
    }
}
//var_dump ($users);