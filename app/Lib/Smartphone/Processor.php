<?php

namespace app\Lib\Smartphone;


class Processor {
    private $vendor;
    private $cores;

    public function __construct($vendor, $cores){
		$this->vendor = $vendor;
        $this->cores =  $cores;	
    }
    public function __tostring(){
        return $this->"processor vendor (" . $this->vendor . "), cores(" . $this->cores . ")";
    }
}