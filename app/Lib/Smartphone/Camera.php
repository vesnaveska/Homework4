<?php

namespace app\Lib\Smartphone;


class Camera {

    public function __construct($mpixels){
        $this->mpixels = $mpixels;
    }
    public function __tostring(){
        return "camera mpixels (" . $this->mpixels . ") camera";
	}
}