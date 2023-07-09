<?php
include_once "../dbconfig/dbconfig.php";

$pdo = $DB_con;

// Consulta SQL para obter as provincias
$query = "SELECT id, name FROM province";
$stmt = $pdo->query($query);

// Obter os resultados como um array
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Retornar os resultados como JSON
echo json_encode($results);
?>