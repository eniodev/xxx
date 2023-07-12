<?php
require_once '../controllers/manager_controller.php';
require_once '../repositories/manager_repository.php';
require_once '../services/manager_service.php';
require_once '../dbconfig/dbconfig.php';
session_start();
$manager_repository = new ManagerRepository($DB_con);
$manager_service = new ManagerService($manager_repository);
$manager_controller = new ManagerController($manager_service);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $commune_id = $_POST['commune'];
    $manager = new Manager($name, $address, $phone, $commune_id, $_SESSION['user']['id']); 
    $new_manager = $manager_controller->addManager($manager);
    if($new_manager) {
        $_SESSION['entity'] = $new_manager;
        header('Location: ../views/admin_dashboard.php');
    }
    
}

?>
