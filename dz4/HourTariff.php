<?php

class HourTariff extends AbstractТariff
{
    use TraitGps;
    use TraitDriver;

    protected $result;
    protected $hourPrice = 200;

    public function hourCalculate($time){
        $time = (int)$time;
        $this->result = (ceil($time / 60) * ($this->hourPrice)) * $this->increaser * $this->subZero + $this->gpsSumm + $this->addDriver;
    }

    public function getHourCalculate()
    {
        return $this->result;
    }
}