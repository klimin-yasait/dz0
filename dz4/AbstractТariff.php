<?php

abstract class AbstractТariff
{

    protected $ageVerification;

    public function isAge($age)
    {
        if ($age != 0) {
            if ($age < 18 || $age > 65) {
                echo "$age <br>";
                $this->ageVerification = "<div class='allert-red'>Водитель не подходит по возрасту!</div>";
            } elseif ($age >= 18 || $age <= 65) {
                echo "$age <br>";
                $this->ageVerification = "<div class='allert-green'>Возрастной ценз пройден</div>";
            }
        } else {
            return $this->ageVerification = "<div class='allert-gray'>Возраст не был введен</div>";
            echo "введи возраст";
        }
    }

    public function getData()
    {
        return $this->data;
    }

}