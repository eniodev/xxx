<?php 

require_once '../model/Province.php';
//require_once '../IManagerRepository/IManagerRepository.php';

class ProvinceRepository {
    private $connection;

    public function __construct(PDO $connection) {
        $this->connection = $connection;
    }

    public function createProvince(Province $province) {
        $query = "INSERT INTO provinces (province_name)
                  VALUES (:province_name)";

        $stmt = $this->connection->prepare($query);
        $stmt->bindValue(':province_name', $province->getProvinceName());

        if ($stmt->execute()) {
            return $this->connection->lastInsertId();
        } else {
            // Lidar com falha na execução da consulta SQL, se necessário
            echo "Erro ao inserir Provincia";
            return false;
        }
    }

    public function getAllProvinces() {
        $query = "SELECT * FROM provinces";
        $statement = $this->connection->query($query);
        $provinces = [];

        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $province = new Province($row['province_id'], $row['province_name']);
            $provinces[] = $province;
        }

        return $provinces;
    }
}