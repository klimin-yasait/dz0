<?php

class BaseTariff extends AbstractТariff
{

    protected $result;

    public function claculate($setTariff,$setKm,$setTime,$setAge){
        $result = $setKm * $setTime;
        return $result;
        echo "$setTariff,$setKm,$setTime,$setAg";
    }

    public function calculate()
    {
        // TODO: Implement calculate() method.
    }
}