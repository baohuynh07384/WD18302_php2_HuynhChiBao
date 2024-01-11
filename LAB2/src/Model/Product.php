<?php

namespace App\Model;

class Product extends Category{
    
    public $text =" Có cả Product";
    public function Notification(){
        return $this->mess().$this->text;
    }

    
}