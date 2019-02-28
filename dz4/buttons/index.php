<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once "interfaceButton.php";
require_once "HexColorTrait.php";
require_once "abstractButtonClass.php";
require_once "blueButton.php";
require_once "redButton.php";
require_once "greenButton.php";
require_once "blackButton.php";

$button = new blackButton();
echo $button->getHex();
echo $button->printButton();
echo $button->abc();

if ($button instanceof interfaceButton){
    $button->printButton();
}