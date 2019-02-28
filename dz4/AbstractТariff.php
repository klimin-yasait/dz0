<?php

abstract class AbstractТariff
{
    protected $setTariff;
    protected $setKm;
    protected $setTime;
    protected $setAge;
    protected $ageVerification;

    public function setVariable($tariff,$km,$time,$age)
    {
        $this->setTariff = $tariff;
        $this->setKm = $km;
        $this->setTime = $time;
        $this->setAge = $age;

        if ($age) {
            if ($age < 18 || $age > 65) {
                return $this->ageVerification = "<div class='allert-red'>Водитель не подходит по возрасту!</div>";
            } elseif ($age >= 18 || $age <= 65) {
                return $this->ageVerification = "<div class='allert-green'>Возрастной ценз пройден</div>";
            }
        } else {
            return $this->ageVerification = "<div class='allert-gray'>Возраст не был введен</div>";
        }
    }

    public function getData()
    {
        return $this->data;
    }

}