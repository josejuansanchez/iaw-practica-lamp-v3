<?php
/*
$controller = $_GET['controller'];
$action = $_GET['action'];
$id = $_GET['id'];
print_r($_GET);
*/

include("config/config.php");
include("controllers/productController.php");

if (isset($_GET['controller'])) {
    //$controllerClassName = $_GET['controller'];
    $controllerClassName = ucfirst($_GET['controller']) . "Controller";

} else {
    $controllerClassName = "ProductController";
}

if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = "showAll";
}

$controller = new $controllerClassName();
$controller->$action();
?>