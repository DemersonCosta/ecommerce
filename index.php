<?php 

require_once("vendor/autoload.php");

use \Slim\Slim;
use \Hcode\Page;
use \Hcode\PageAdmin;


$app = new Slim();

$app->config('debug', true);

//Rotas para o site principal
$app->get('/', function() {
    
	$page = new Page();

	$page->setTpl("index");

});

//Rotas para o site da administracao
$app->get('/admin/', function() {
    
	$page = new PageAdmin();

	$page->setTpl("index");

});

$app->run();

 ?>