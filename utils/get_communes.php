<?php
include_once "../dbconfig/dbconfig.php";

$pdo = $DB_con;

// Verificar se o parâmetro municipalityId foi enviado
if (isset($_GET['municipalityId'])) {
  $municipalityId = $_GET['municipalityId'];

  // Consulta SQL para obter as comunas do município selecionado
  $query = "SELECT id, name FROM commune WHERE municipality_id = :municipalityId";
  $stmt = $pdo->prepare($query);
  $stmt->bindParam(':municipalityId', $municipalityId, PDO::PARAM_INT);
  $stmt->execute();
  
  // Obter os resultados como um array
  $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
  
  // Retornar os resultados como JSON
  echo json_encode($results);
}

?>