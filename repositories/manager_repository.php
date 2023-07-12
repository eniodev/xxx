<?php 

include_once "../models/manager.php";

class ManagerRepository {
    private $connection;

    public function __construct(PDO $connection) {
        $this->connection = $connection;
    }

    public function createManager(Manager $manager) {
        $query = "INSERT INTO manager (name, address, phone, commune_id, user_id)
                  VALUES (:name, :address, :phone, :commune_id, :user_id)";

        echo $manager->getCommuneId();
        $stmt = $this->connection->prepare($query);
        $stmt->bindValue(':name', $manager->getName());
        $stmt->bindValue(':address', $manager->getAddress());
        $stmt->bindValue(':phone', $manager->getPhone());
        $stmt->bindValue(':commune_id', $manager->getCommuneId());
        $stmt->bindValue(':user_id', $manager->getUserId());

        if ($stmt->execute()) {
            return $this->connection->lastInsertId();
        } else {
            // Lidar com falha na execução da consulta SQL, se necessário
            echo "Erro ao actualizar perfil";
            return false;
        }
    }

    public function getManagers() {
        $query = 'SELECT * FROM manager';
        $stmt =  $this->connection->prepare($query);
        $stmt->execute();
        $managers = $stmt->fetch(PDO::FETCH_ASSOC);
        return $managers;
    }


}