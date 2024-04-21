<?php

use src\Controllers\HomeController;


$url = $_SERVER['REDIRECT_URL'];
$methode = $_SERVER['REQUEST_METHOD'];

$homeController = new HomeController();


switch ($url) {

    case HOME_URL:
        if ($methode == 'GET') {
            $homeController->homepage();
        } else if ($methode === 'POST') {
            $homeController->auth();
        } else {
            $homeController->homepage();
        }
        break;

    default:
        $homeController->pageNotFound();
        break;
}
