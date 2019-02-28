<?php

abstract class AbstractТariff
{
    protected $setKm;
    protected $setTime;
    protected $setAge;

    public function setVariable($km,$time,$age)
    {
        $this->setKm = $km;
        $this->setTime = $time;
        $this->setAge = $age;
    }

    public function getData()
    {
        return $this->data;
    }

}