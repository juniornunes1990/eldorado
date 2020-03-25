<?php 
session_start();
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

	User::verifyLogin();

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


$app->get('/admin/logout', function() {
	
	User::logout();

	header("Location: /admin/login");
	exit;

});

$app->get('/admin/users', function() {

	User::verifyLogin();

	$users = User::listAll();

	$page = new PageAdmin();
	
	$page->setTpl("users", array(
		"users"=>$users
	));

});

$app->get('/admin/users/create', function() {

	User::verifyLogin();

	$page = new PageAdmin();
	
	$page->setTpl("users-create");

});


$app->get("/admin/users/:id/delete", function($id){

	User::verifyLogin();

	$user = new User();

	$user->get((int)$id);

	$user->delete();

	header("Location: /admin/users");
	exit;

});

$app->get('/admin/users/:id', function($id) {

	User::verifyLogin();	

	$page = new PageAdmin();

	$user = new User();

	$user->get((int)$id);
	
	$page->setTpl("users-update", array(
		"user"=>$user->getValues()
	));

});

$app->post("/admin/users/create", function(){

	User::verifyLogin();

	$user = new User();

	$_POST["nivel"] = (isset($_POST["nivel"]))?1:0;

	$user->setData($_POST);

	$user->save();

	header("Location: /admin/users");	
	exit;

});

$app->post("/admin/users/:id", function($id){

	User::verifyLogin();

	$user = new User();

	$_POST["nivel"] = (isset($_POST["nivel"]))?1:0;

	$user->get((int)$id);

	$user->setData($_POST);

	$user->update();

	header("Location: /admin/users");
	exit;

});

$app->run();

 ?>