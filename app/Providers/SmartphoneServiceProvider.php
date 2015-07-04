<?php

namespace app\Providers;

use app\Lib\Smartphone\Smartphone;
use Illuminate\Support\ServiceProvider;

class SmartphoneServiceProvider extends ServiceProvider {
    public function register()
    {       
    	$this->app->bind('Smartphone', function($app) {
            return new Smartphone(
                'Sony Xperia',
                new Processor('Qualcomm 5555', 4),
                new Camera(2),
                new Display(480x320),
                new Battery(1234)
            );
		
    }
}