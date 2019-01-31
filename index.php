<?php 

require 'inc/config.inc.php';
require 'inc/autoload.inc.php';

use controller\Router;
$router = new Router();
$router->routeTheRequest();

