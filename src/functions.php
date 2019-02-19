<?php

function task1($myArray,$myBool)
{
    foreach ($myArray as &$myArrayString){
        if ($myBool == TRUE) {
            echo $myArrayString;
        }else{
            echo '<p>' . $myArrayString . '</p>';
        }
    }
};