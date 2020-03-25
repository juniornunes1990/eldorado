<?php 

require_once("vendor/autoload.php");

use \Slim\Slim;
use \Atlantic\Page;
use \Atlantic\PageAdmin;
use \Atlantic\Model\User;

$app = new Slim();

$app->config('debug', true);

$app->get('/', function() {

	$page = new Page();
	
	$page->setTpl("index");

});

$app->get('/admin', function() {

	$page = new PageAdmin();
	
	$page->setTpl("index");

});

$app->get('/admin/login', function() {

	$page = new PageAdmin([
		"header"=>false,
		"footer"=>false
	]);
	
	$page->setTpl("login");

});

$app->post('/admin/login', function() {

	User::login($_POST["username"],$_POST["password"]);

	header("Location: /admin");
	exit;

});

$app->run();

 ?>