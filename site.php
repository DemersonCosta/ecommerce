<?php
namespace Hcode;

use Hcode\Page;

//Rotas para o site principal
$app->get('/', function() {
    
	$page = new Page();

	$page->setTpl("index");

});


?>