<?php
include_once '../services/manager_service.php';
class ManagerController {
    private $manager_service;

    public function __construct(ManagerService $manager_service) {
        $this->manager_service = $manager_service;
    }

    public function createManager(Manager $manager) {
        $new_manager_id = $this->manager_service->createManager($manager);

        if ($new_manager_id) {
            return $new_manager_id;
        } else {
            echo "Erro ao editar perfil.";
        }
    }

    public function getManagers() {
        $managers = $this->manager_service->getManagers();

        if ($managers) {
            return $managers;
        } else {
            echo "Erro ao pegar os gestores.";
        }
    }
}