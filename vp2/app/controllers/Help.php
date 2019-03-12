<?php

class Help extends MainController
{
    public function __construct($params){
        $this->params = $params;

        foreach ($params as $param){
            if (method_exists($this,$param)){
                $this->$param();
            }
        }

        return $this->params;

    }
    public function eee(){
        echo "<br> Что-нибудь";
    }
    public function ddd(){
        echo "<br> А это уже ddd!";
    }
}