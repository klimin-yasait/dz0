<?php

trait TraitGps {

    protected $addGps;
    protected $hours;
    protected $gpsSumm;

    public function setGps($gps, $time){

        $this->addGps = (int)$gps;
        $this->hours = ceil((int)$time / 60);
        $this->gpsSumm = $this->addGps * $this->hours;
        return $this->gpsSumm;
    }
}