<?php 

//require_once '../IManagerService/IManagerService.php';
class ManagerService {
private $managerRepository;

public function __construct(ManagerRepository $managerRepository) {
$this->managerRepository = $managerRepository;
}

public function createManager(Manager $manager) {
// Realizar validações ou lógica de negócio, se necessário

return $this->managerRepository->createManager($manager);
}
}