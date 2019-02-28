<?php
/**
 * Created by PhpStorm.
 * User: Artem
 * Date: 27.02.2019
 * Time: 19:44
 */

abstract class abstractButtonClass implements interfaceButton
{
    protected $color;

    public function printButton()
    {
        echo $this->color . PHP_EOL;
    }
}