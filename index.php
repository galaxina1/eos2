<?php
session_start();
if(isset($_GET['logOut'])){
    session_destroy();
    header('Location:accueil');
}
require ('src/controller/HomeController.php');
require ('src/controller/HotelController.php');
require ('src/controller/RestaurantController.php');
require ('src/controller/BrasserieController.php');
require ('src/controller/BarController.php');
require ('src/controller/SnackController.php');
require ('src/controller/NewsController.php');
require ('src/controller/ContactController.php');
require ('src/controller/MyAccountController.php');
require('src/controller/InscriptionController.php');
require('src/controller/AdminController.php');
require('src/controller/LearnMoreController.php');
require('src/controller/LegalNoticesController.php');
require('src/controller/FeesController.php');
require('src/controller/ConfidentialityController.php');
require('src/controller/CookiesController.php');
require ('src/model/Model.php');

$page = filter_input(INPUT_GET,"page");
$route = [
    "accueil" => HomeController::class,
    "hotel" => HotelController::class,
    "restaurant" => RestaurantController::class,
    "brasserie" => BrasserieController::class,
    "bar" => BarController::class,
    "snack" => SnackController::class,
    "actualites" => NewsController::class,
    "contact" => ContactController::class,
    "moncompte" => MyAccountController::class,
    "inscription" => InscriptionController::class,
    "admin" => AdminController::class,
    "ensavoirplus" => LearnMoreController::class,
    "mentionslegales" => LegalNoticesController::class,
    "honoraires" => FeesController::class,
    "confidentialite" => ConfidentialityController::class,
    "cookies" => CookiesController::class,
    
];
foreach ($route as $routeValue => $className) {
    if ($page === $routeValue) {
        $controller = new $className;
        $controller->manage();
        break;
    }
}
if(!isset($controller)) {
    $controller = new HomeController ();
    $controller->manage();
}
