<?php

class StudentTariff extends AbstractТariff
{

    use TraitGps;

    protected $result;
    protected $kmPrice = 4;
    protected $timePrice = 1;

    public function studentCalculate($km, $time, $age)
    {
        $km = (int)$km;
        $time = (int)$time;
        $age = (int)$age;

        if ($age <= 25){
            $this->result = (($this->kmPrice * $km) + ($this->timePrice * $time) * $this->increaser) * $this->subZero + $this->gpsSumm;
        } else {
            $this->result = 0;
        }
    }

    public function getStudentCalculate()
    {
        return $this->result;
    }
}