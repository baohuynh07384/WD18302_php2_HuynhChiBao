<?php

require_once "vendor\autoload.php";

define ("ROOT_URL", "127.0.0.1:5000");

include "App/Views/layouts/assets/includes/stylesheet.php";

use App\Core\Route;

new Route;

include "App/Views/layouts/assets/includes/jquery.php";