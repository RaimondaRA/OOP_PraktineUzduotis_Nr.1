<?php

namespace DemoApp;

class Car{
    public $positionOfSteeringWheel;

    public function setPositionOfSteeringWheel($positionOfSteeringWheel){
        $this->positionOfSteeringWheel = $positionOfSteeringWheel;
    }

    public function getPositionOfSteeringWheel(){
        return $this->positionOfSteeringWheel;
    }

    // public function getAll(){ //geteris. grazina objekto savybes, kurias nurodome objekto kurimo metu
    //     return [
    //         $this->positionOfSteeringWheel
    //         ];
    // }

    // public function __toString() //konvertuojame klases Vehicle objekta i stringa
    //     {
    //         return $this->positionOfSteeringWheel;
         

}