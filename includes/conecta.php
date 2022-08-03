<?php
$servername = "br384.hostgator.com.br";
$database = "studi092_reserva";
$username = "studi092_root";
$password = "melina80";
// Cria conexão
$conn = mysqli_connect($servername, $username, $password, $database);
// Checka conexão
if (!$conn) {
    die("Erro: " . mysqli_connect_error());
}

?>