<?php

abstract class AbstractТariff
{

    protected $ageVerification;
    protected $increaser;

    public function isAge($age)
    {
        if ($age != 0) {
            if ($age < 18 || $age > 65) {
                $this->ageVerification = "<div class='allert-red'>Водитель не подходит по возрасту! $this->increaser</div>";
                die;
            } elseif ($age > 21 & $age <= 65) {
                $this->increaser = 1;
                $this->ageVerification = "<div class='allert-green'>Возрастной ценз пройден $this->increaser</div>";
            } elseif ($age >= 18 & $age <= 21) {
                $this->increaser = 1.1;
                $this->ageVerification = "<div class='allert-green'>Возрастной ценз пройден $this->increaser</div>";

            }
        } else {
            $this->ageVerification = "<div class='allert-orange'>Возраст не был введен $this->increaser</div>";
        }
        return $age;
    }

    public function getAge()
    {
        return $this->ageVerification;
    }

}