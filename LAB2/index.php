<?php

require_once "vendor/autoload.php";
use App\Model\Category;
use App\Model\Product;
use App\Core\Route;
use App\Controller\BaseController;
use App\Model\BaseModel;

$BaseController = new BaseController();

echo $BaseController->function() . $BaseController->mess; 

$Route = new Route();

$Route->function();

$Category = new Category();

echo $Category->get();

$Product = new Product();


echo $Product->Notification();