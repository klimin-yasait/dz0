<?php

class BaseTariff extends AbstractТariff
{
    protected $result;

    public function claculate($tariff,$km,$time,$age){
        $result = $km * $time;
        return $result;
        echo "$tariff,$km,$time,$ag <br>";
        echo "$result";
    }

    public function calculate()
    {
        // TODO: Implement calculate() method.
    }
}