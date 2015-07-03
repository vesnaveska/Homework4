<?php

namespace app\Lib\Smartphone;


class Battery {
    private $capacity = '';

    public function __construct($capacity=null){
        $this->capacity = $capacity;
    }
    public function __tostring(){
        return "battery capacity (" . $this->_capacity . " mAh)";
    }
}
