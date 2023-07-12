<?php 
include_once "../interfaces/iuser_service.php";
include_once "../repositories/user_repository.php";

class UserService /*implements IUserService*/ {
private $user_repository;

public function __construct(UserRepository $user_repository) {
$this->user_repository = $user_repository;
}

public function createUser(User $user) {
// Realizar validações ou lógica de negócio, se necessário

    return $this->user_repository->createUser($user);
}

public function authenticateUser($email, $password) {
    return $this->user_repository->authenticateUser($email, $password);
}

public function getUserByAccId($accoundId, $role) {
    return $this->user_repository->getUserByAccId($accoundId, $role);
}


public function getManagers() {
    return $this->user_repository->getUserByAccId();
}
}
