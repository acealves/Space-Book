<?php
include_once("conexao.php");

$cod = $_POST['exclui'];

$sql = "Delete from clientes where nome = '$cod' ";
$query = mysqli_query($conn, $sql) or die ("Erro");

if (mysqli_affected_rows($conn)){
    echo " <script> window.alert('Cliente excluido com sucesso') </script>";
    echo " <script> location.href='clientes.html' </script>";
}
else{
    echo " <script> window.alert('Erro ao excluir cliente') </script>";
    echo " <script> location.href='clientes.html' </script>";
}


?>