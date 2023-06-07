<?php
require_once '../Services/ManagerService/managerService.php';
class ManagerController {
    private $managerService;

    public function __construct(ManagerService $managerService) {
        $this->managerService = $managerService;
    }

    public function createManager(Manager $manager) {
        $newManagerId = $this->managerService->createManager($manager);

        if ($newManagerId) {
            echo "Novo gerente criado com o ID: " . $newManagerId;
        } else {
            echo "Erro ao criar o gerente.";
        }
    }
}