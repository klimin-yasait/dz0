<?php

trait TraitDriver {

    protected $addDriver;

    public function setDriver($driver){

        $this->addDriver = (int)$driver;
        return $this->addDriver;
    }
}