<?php

namespace app\Lib\Smartphone;


class Display {
    private $resolution = '';

    public function __construct($resolution){
        $this->resolution = $resolution;
    }

    public function __tostring(){       
		return "display resolution (" . $this->resolution . ")";
    }
}