<?php

namespace DemoApp;

class Bicycle{
    public $fork;

    public function setFork($fork){
        $this->fork = $fork;
    }

    public function getFork(){
        return $this->fork;
    }

}