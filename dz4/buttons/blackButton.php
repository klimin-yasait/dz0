<?php
/**
 * Created by PhpStorm.
 * User: Artem
 * Date: 27.02.2019
 * Time: 20:04
 */

class blackButton implements interfaceButton
{
    use HexColorTrait;

    public function abc(){
        echo 'BBB';
    }

    public function printButton()
    {
        return 'asd';
    }

}