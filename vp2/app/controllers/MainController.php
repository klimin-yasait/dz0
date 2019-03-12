<?php
/**
 * Created by PhpStorm.
 * User: Artem
 * Date: 10.03.2019
 * Time: 15:31
 */

abstract class MainController
{
    protected $params;

    public function params($params)
    {
        $this->params = $params;
        return $this->params;
    }
}
