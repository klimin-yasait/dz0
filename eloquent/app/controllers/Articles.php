<?php

namespace Controllers;
use Models\Article;

class Articles{
    public static function create_article ($title, $user_id) {
        $arr = array(
            "title" => $title,
            "user_id" => $user_id
        );
        $article = Article::create($arr);
        return $article;
    }
}