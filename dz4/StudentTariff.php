<?php

class StudentTariff extends AbstractТariff
{
    protected $result;
    protected $kmPrice = 4;
    protected $timePrice = 1;

    public function studentCalculate($km, $time, $age)
    {
        $km = (int)$km;
        $time = (int)$time;
        $age = (int)$age;

        if ($age < 25){
            $this->result = ($this->kmPrice * $km) + ($this->timePrice * $time) * $this->increaser;
        } else {
            $this->result = 0;
        }
    }

    public function getStudentCalculate()
    {
        return "$this->result $this->increaser";
    }
}