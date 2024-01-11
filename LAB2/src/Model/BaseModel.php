<?php

namespace App\Model;

class BaseModel{
   
    private $mess = " BaseModel là cha của Category, Product";

    function get(){
        return $this->mess;
    }

}