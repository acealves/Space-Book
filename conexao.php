
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "biblioteca";

// Cria a conexão
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verifica a conexão
if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
}
?>