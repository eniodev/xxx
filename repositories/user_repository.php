<?php 

include_once "../models/user.php";

class UserRepository {
    private $connection;

    public function __construct(PDO $connection) {
        $this->connection = $connection;
    }

    public function createUser(User $user) {
        $query = "INSERT INTO user (email, password, role)
                  VALUES (:email, :password, :role)";

        $stmt = $this->connection->prepare($query);
        $stmt->bindValue(':email', $user->getEmail());
        $stmt->bindValue(':password', $user->getPassword());
        $stmt->bindValue(':role', $user->getRole());

        if ($stmt->execute()) {
            return $this->connection->lastInsertId();
        } else {
            // Lidar com falha na execução da consulta SQL, se necessário
            echo "Erro ao inserir usuário";
            return false;
        }
    }

    public function authenticateUser($email, $password) {
        $query = "SELECT * FROM user WHERE email = :email AND password = :password";
        $stmt = $this->connection->prepare($query);
        $stmt->bindValue(':email', $email);
        $stmt->bindValue(':password', $password);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
        return $user;
        return false;  
    }
}

    public function getUserByAccId($accountId) {
        $query = "SELECT * FROM client WHERE user_id = :accountId";
        $stmt =  $this->connection->prepare($query);
        $stmt->bindValue(':accountId', $accountId);
        $stmt->execute();

        $user =  $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) 
        return $user;
        return false;
    }


}
