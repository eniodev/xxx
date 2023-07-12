<?php 
session_start();
if(!is_array($_SESSION['entity'])) {
    echo json_encode("N");
} else echo json_encode("Y");

?>

