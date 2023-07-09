<?php
include_once "../dbconfig/dbconfig.php";

$pdo = $DB_con;

// Verificar se o parâmetro provinceId foi enviado
if (isset($_GET['provinceId'])) {
  $provinceId = $_GET['provinceId'];

  // Consulta SQL para obter os municípios da província selecionada
  $query = "SELECT id, name FROM municipality WHERE province_id = :provinceId";
  $stmt = $pdo->prepare($query);
  $stmt->bindParam(':provinceId', $provinceId, PDO::PARAM_INT);
  $stmt->execute();
  
  // Obter os resultados como um array
  $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
  
  // Retornar os resultados como JSON
  echo json_encode($results);
}

?>