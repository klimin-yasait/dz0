<?php

class HourTariff extends AbstractТariff
{
    protected $result;
    protected $hourPrice = 200;

    public function hourCalculate($time){
        $time = (int)$time;
        $this->result = (ceil($time / 60) * $this->hourPrice) * $this->increaser;
    }

    public function getHourCalculate()
    {
        return $this->result;
    }
}