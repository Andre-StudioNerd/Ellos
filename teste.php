<?php
$servername = "br384.hostgator.com.br";
$database = "studi092_reserva";
$username = "studi092_root";
$password = "melina80";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
?>