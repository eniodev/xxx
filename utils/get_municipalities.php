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