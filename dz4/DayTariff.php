<?php

class DayTariff extends AbstractТariff
{

    use TraitGps;
    use TraitDriver;

    protected $result;
    protected $days;
    protected $dayPrice = 1000;
    protected $kmPrice = 1;

    public function dayCalculate($km, $time)
    {
        $km = (int)$km;
        $time = (int)$time;
        if ($time != 0) {
            if ($time > 1440) {
                if (($time % 1440) > 30) {
                    $this->days = ceil($time / 1440);
                } else {
                    $this->days = floor($time / 1440);
                }
            } else {
                $this->days = 1;
            }
            $this->result = (($this->days * $this->dayPrice + ($km * $this->kmPrice) * $this->increaser) * $this->subZero) + $this->gpsSumm + $this->addDriver; // (60 мин * 24 часа) + 30 мни
        } else {
            $this->result = 0;
        }
    }

    public function getDayCalculate()
    {
        return $this->result;
    }
}