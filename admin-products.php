<?php

use \Atlantic\PageAdmin;
use \Atlantic\Model\User;
use \Atlantic\Model\Product;

$app->get("/admin/products", function(){

    User::verifyLogin();

    $products = Product::listAll();

    $page = new PageAdmin();

    $page->setTpl("products", [
        'products'=>$products
    ]);

});

$app->get("/admin/products/crate", function(){

    User::verifyLogin();

    $page = new PageAdmin();

    $page->setTpl("products-create");

});

?>