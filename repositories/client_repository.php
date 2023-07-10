<?php 
include_once "../models/client.php";

class ClientRepository {
    private $connection;

    public function __construct(PDO $connection) {
        $this->connection = $connection;
    }

    public function createClient(Client $client) {
        $query = "INSERT INTO client (name, type, activity, commune_id, country_id, address, phone, is_active, user_id)
                  VALUES (:name, :type, :activity, :commune_id, :country_id, :address, :phone, :is_active, :user_id)";

        $stmt = $this->connection->prepare($query);
        $stmt->bindValue(':name', $client->getName());
        $stmt->bindValue(':type', $client->getType());
        $stmt->bindValue(':activity', $client->getActivity());
        $stmt->bindValue(':commune_id', $client->getCommuneId());
        $stmt->bindValue(':country_id', $client->getCountryId());
        $stmt->bindValue(':address', $client->getAddress());
        $stmt->bindValue(':phone', $client->getPhone());
        $stmt->bindValue(':is_active', $client->getIsActive());
        $stmt->bindValue(':user_id', $client->getUserId());

        if ($stmt->execute()) {
            return $this->connection->lastInsertId();
        } else {
            // Lidar com falha na execução da consulta SQL, se necessário
            echo "Erro ao inserir cliente";
            return false;
        }
        
    }
}