<?php
// Load the core application
require_once '../core/Database.php';
require_once '../app/controllers/BaseController.php';

// Instantiate the BaseController
$controller = new BaseController();

// Route the request
$controller->handleRequest();

?>
