<?php 

include_once "../models/outdoor.php";

class OutdoorRepository {
    private $connection;

    public function __construct(PDO $connection) {
        $this->connection = $connection;
    }

    public function createOutdoor(Outdoor $outdoor) {
        $query = "INSERT INTO outdoor (type, status, price, commune_id, image_path)
                  VALUES (:type, :status, :price, :commune_id, :image_path)";

        $stmt = $this->connection->prepare($query);
        $stmt->bindValue(':type', $outdoor->getType());
        $stmt->bindValue(':status', $outdoor->getStatus());
        $stmt->bindValue(':price', $outdoor->getPrice());
        $stmt->bindValue(':commune_id', $outdoor->getCommuneId());
        $stmt->bindValue(':image_path', $outdoor->getImagePath());

        if ($stmt->execute()) {
            return $this->connection->lastInsertId();
        } else {
            // Lidar com falha na execução da consulta SQL, se necessário
            echo "Erro ao inserir outdoor";
            return false;
        }
    }

    public function getOutdoors() {
        $query = 'SELECT * FROM outdoor';
        $stmt =  $this->connection->prepare($query);
        $stmt->execute();
        $outdoors = $stmt->fetch(PDO::FETCH_ASSOC);
        return $outdoors;
    }


}