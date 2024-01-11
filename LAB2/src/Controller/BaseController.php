<?php

namespace App\Controller;

class BaseController{
    public $x = "BaseController";
    
    function get(){
        echo $this->x;
    }
}