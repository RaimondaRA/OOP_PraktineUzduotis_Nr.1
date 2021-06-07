<?php

namespace DemoApp;

class Motorbike{
    public $motorbikeType;

    public function setMotorbikeType($motorbikeType){
        $this->motorbikeType = $motorbikeType;
    }

    public function getMotorbikeType(){
        return $this->motorbikeType;
    }

}