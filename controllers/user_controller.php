<?php
include_once '../services/user_service.php';
class UserController {
    private $user_service;

    public function __construct(UserService $user_service) {
        $this->user_service = $user_service;
    }

    public function createUser(User $user) {
        $new_user_id = $this->user_service->createUser($user);

        if ($new_user_id) {
            return $new_user_id;
            return false;
            echo "Novo usuário criado com o ID: " . $new_user_id;
        } else {
            echo "Erro ao criar o usuário.";
        }
    }

    public function authenticateUser($email, $password) {
        $id = $this->user_service->authenticateUser($email, $password);

        if($id)
        return $id;
        return false;
    }

    public function getUserByAccId($accountId, $role) {
        $id = $this->user_service->getUserByAccId($accountId, $role);
        
        if($id)
        echo $id;
        else 
        echo "hell";
        return $id;
        return false;
    }
}