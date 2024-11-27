<?php
require_once 'src/config/db.php';
require_once 'src/helpers/funciones.php';

$conn = db_connect();

// Realizar la consulta para obtener los datos de la frutería
$sql = "SELECT fruta, stock, precio FROM fruteria";
$result = $conn->query($sql);

require_once 'src/views/fruteria.php';

ini_set('display_errors', 1);
error_reporting(E_ALL);
?>
