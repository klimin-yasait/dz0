<?php

abstract class AbstractТariff
{

    protected $ageVerification;
    protected $increaser;
    protected $subZero;

    public function isAge($age)
    {
        if ($age != 0) {
            if ($age < 18 || $age > 65) {
                $this->ageVerification = "<div class='allert-red'>Водитель не подходит по возрасту!</div>";
                $this->subZero = 0;
            } elseif ($age > 21 & $age <= 65) {
                $this->increaser = 1;
                $this->ageVerification = "<div class='allert-green'>Возрастной ценз пройден</div>";
                $this->subZero = 1;
            } elseif ($age >= 18 & $age <= 21) {
                $this->increaser = 1.1;
                $this->ageVerification = "<div class='allert-green'>Возрастной ценз пройден</div>";
                $this->subZero = 1;
            }
        } else {
            $this->ageVerification = "<div class='allert-orange'>Возраст не был введен</div>";
        }
        return $age;
    }

    public function getAge()
    {
        return $this->ageVerification;
    }

}