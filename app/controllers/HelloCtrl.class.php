<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;

/**
 * HelloWorld built in Amelia - sample controller
 *
 * @author Przemysław Kudłacik
 */
class HelloCtrl {
    
    public function action_hello() {
		      
        App::getSmarty()->display("home.tpl");
        
    }
     public function action_about() {
		      
        App::getSmarty()->display("about.tpl");
        
    }
}
