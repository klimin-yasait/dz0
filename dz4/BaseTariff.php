<?php

class BaseTariff extends AbstractТariff
{
    use TraitGps;

    protected $result;
    protected $kmCost = 10;
    protected $timeCost = 3;

    public function baseCalculate($km,$time){
        $km = (int)$km;
        $time = (int)$time;
        $this->result = ((($km * $this->kmCost) + ($time * $this->timeCost )) * $this->increaser) * $this->subZero + $this->gpsSumm;
    }

    public function getBaseCalculate()
    {
        return $this->result;
    }
}