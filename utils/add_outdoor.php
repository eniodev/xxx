<?php
require_once '../controllers/outdoor_controller.php';
require_once '../repositories/outdoor_repository.php';
require_once '../services/outdoor_service.php';
require_once '../dbconfig/dbconfig.php';
session_start();
$outdoor_repository = new OutdoorRepository($DB_con);
$outdoor_service = new OutdoorService($outdoor_repository);
$outdoor_controller = new OutdoorController($outdoor_service);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $type = $_POST['type']; 
    $price = $_POST['price']; 
    $commune_id = $_POST['commune'];
    $image_path = $_POST['image'];

    $outdoor = new Outdoor($type, "D", $price, $commune_id, $image_path); 
    $new_outdoor = $outdoor_controller->createOutdoor($outdoor);
    
    if($new_outdoor) {
        header('Location: ../views/admin_dashboard.php');
    }
    
}

?>