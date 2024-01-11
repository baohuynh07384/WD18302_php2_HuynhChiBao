<?php

require_once "vendor/autoload.php";
use App\Model\BaseModel;
use App\Core\Route;
use App\Controller\BaseController;


new BaseModel();
new Route();
$y = new BaseController();
$y->get();