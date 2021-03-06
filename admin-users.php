<?php

use \Atlantic\PageAdmin;
use \Atlantic\Model\User;

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


$app->get("/admin/users/:iduser/delete", function($iduser){

	User::verifyLogin();

	$user = new User();

	$user->get((int)$iduser);

	$user->delete();

	header("Location: /admin/users");
	exit;

});

$app->get("/admin/users/:iduser", function($iduser) {

	User::verifyLogin();	

	$page = new PageAdmin();

	$user = new User();

	$user->get((int)$iduser);
	
	$page->setTpl("users-update", array(
		"user"=>$user->getValues()
	));

});

$app->post("/admin/users/create", function(){

	User::verifyLogin();

	$user = new User();

	$_POST["nivel"] = (isset($_POST["nivel"]))?1:0;

	$_POST['password'] = User::getPasswordHash($_POST['password']);

	$user->setData($_POST);

	$user->save();

	header("Location: /admin/users");	
	exit;

});

$app->post("/admin/users/:iduser", function($iduser){

	User::verifyLogin();

	$user = new User();

	$_POST["nivel"] = (isset($_POST["nivel"]))?1:0;

	$user->get((int)$iduser);

	$user->setData($_POST);

	$user->update();

	header("Location: /admin/users");
	exit;

});
?>