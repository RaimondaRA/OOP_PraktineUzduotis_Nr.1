<?php

namespace DemoApp;

class Vehicle{
    public $brand;
    public $model;
    public $price;
    public $weight;
    public $engine;
    public $enginePower;
    public $maxSpeed;
    public $description;
    public $seats;

    public function __construct($model, $brand)
    {
        $this->model = $brand;
        $this->brand=$model;
    }

    public function setBrand($brand){ //seteris. Kvieciame tada, kada mums jo prireikia
        $this->brand = $brand;
    }

    public function setModel($model){
        $this->model = $model;
    }

    public function setPrice($price){
        $this->price = $price;
    }

    public function setWeight($weight){ 
        $this->weight = $weight;
    }

    public function setEngine($engine){ 
        $this->engine = $engine;
    }

    public function setEnginePower($enginePower){ 
        $this->enginePower = $enginePower;
    }
    public function setMaxSpeed($maxSpeed){ 
        $this->maxSpeed = $maxSpeed;
    }
    public function setDescription($description){ 
        $this->description = $description;
    }
    public function setNumberOfSeats($seats){ 
        $this->seats = $seats;
    }

    public function getAll(){ //geteris. grazina objekto savybes, kurias nurodome objekto kurimo metu
        return [
            $this->brand,
            $this->model
        ];
    }

    public function __toString() //konvertuojame klases Vehicle objekta i stringa
        {
            return $this->model;
            return $this->brand;
        }
}



    





