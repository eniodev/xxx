<?php 
//include_once "../interfaces/imanagerservice.php";
include_once "../repositories/manager_repository.php";

class ManagerService /*implements IUserService*/ {
private $manager_repository;

public function __construct(ManagerRepository $manager_repository) {
$this->manager_repository = $manager_repository;
}

public function createManager(Manager $manager) {
// Realizar validações ou lógica de negócio, se necessário

return $this->manager_repository->createManager($manager);
}

public function getManagers() {
    return $this->manager_repository->getManagers();
}
}