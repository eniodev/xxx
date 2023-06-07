<?php 

require_once '../model/Manager.php';
//require_once '../IManagerRepository/IManagerRepository.php';

class ManagerRepository {
    private $connection;

    public function __construct(PDO $connection) {
        $this->connection = $connection;
    }

    public function createManager(Manager $manager) {
        $query = "INSERT INTO manager (full_name, email)
                  VALUES (:full_name, :email)";

        $stmt = $this->connection->prepare($query);
        $stmt->bindValue(':full_name', $manager->getFullName());
        $stmt->bindValue(':email', $manager->getEmail());
        /*$stmt->bindValue(':province_id', $manager->getComuneId());
        $stmt->bindValue(':address', $manager->getAddress());
        $stmt->bindValue(':phone', $manager->getPhone());
        $stmt->bindValue(':username', $manager->getUsername());
        $stmt->bindValue(':password', $manager->getPassword());
        $stmt->bindValue(':is_admin', $manager->getIsAdmin());*/

        if ($stmt->execute()) {
            return $this->connection->lastInsertId();
        } else {
            // Lidar com falha na execução da consulta SQL, se necessário
            echo "Erro ao inserir gestor";
            return false;
        }
    }
}

/**
 * 
 *         $query = "INSERT INTO manager (full_name, email, province_id, address, phone, username, password, is_admin)
                  VALUES (:full_name, :email, :comune_id, :address, :phone, :username, :password, :is_admin)";

 * 
 * 
 */