<?php

class BaseTariff extends AbstractТariff
{

    protected $result;

    public function claculate($setKm,$setTime){
        $result = $setKm * $setTime;
        return $result;
    }

    public function calculate()
    {
        // TODO: Implement calculate() method.
    }
}