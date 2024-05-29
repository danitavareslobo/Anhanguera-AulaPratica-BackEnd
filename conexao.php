<?php
$servername = "localhost";
$username = "root";
$password = "Dd022031#";
$database = "dbcaduser";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
}
?>
