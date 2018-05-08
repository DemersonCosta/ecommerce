<?php 

require_once("vendor/autoload.php");

use \Slim\Slim;

$app = new Slim();

$app->config('debug', true);

//Rotas para o site principal
require_once("site.php");

//Rotas para o site da administracao
require_once("admin.php");



$app->run();

 ?>