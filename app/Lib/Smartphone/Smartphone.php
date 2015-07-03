<?php

namespace app\Lib\Smartphone;


class Smartphone {
	
    protected $name;	
    protected $processor;	
    protected $display;
    protected $camera;	
    protected $battery;

    public function __construct(Name $name, Processor $processor, Display $display, Camera $camera, Battery $battery){
        $this->name = $name;
        $this->processor = $processor;
        $this->display = $display;
        $this->camera = $camera;
        $this->battery = $battery;
    }

    public function __tostring(){
        return $this->"Smartphone: " . name . ", " . $this->processor . ", " . $this->display . ", " . $this->camera . ", " . $this->battery;
    }				

}