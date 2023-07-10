<?php
// Include necessary files and dependencies
require_once '../controllers/ManagerController.php';
require_once '../Repositories/ManagerRepository/managerRepository.php';
require_once '../dbconfig/dbconfig.php';

// Instantiate ManagerController
$managerRepository = new ManagerRepository($DB_con);
$managerService = new ManagerService($managerRepository);
$managerController = new ManagerController($managerService);

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $fullName = $_POST['full_name'];
    $email = $_POST['email'];
    // Get other form fields

    // Call the appropriate method in the controller to add the manager
    $manager = new Manager();
    $manager->setFullName($fullName);
    $manager->setEmail($email);

        
    $managerController->createManager($manager);
}