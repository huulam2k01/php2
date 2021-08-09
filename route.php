<?php
require_once "controller/CustomerController.php";
$controller = isset($_GET["controller"]) ? $_GET["controller"] : "";
$action = isset($_GET['action']) ? $_GET["action"] : "";

switch ($controller) {
    case 'customer':
        CustomerController::viewCustomer();
        break;
}
