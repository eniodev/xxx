<?php
//Dados de conexão
$DB_host = "localhost";
$DB_user = "root";
$DB_pass = "";
$DB_name = "db_outdoors";

try {
    $pdo = new PDO("mysql:host={$DB_host};dbname={$DB_name}", $DB_user, $DB_pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e->getMessage();
}

// Consulta SQL para obter as provincias
$query = "SELECT id, name FROM province";
$stmt = $pdo->query($query);

// Obter os resultados como um array
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Retornar os resultados como JSON
echo json_encode($results);
?>