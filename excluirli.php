<?php
include_once("conexao.php");

$codli = $_POST['exclui'];

$sql = "Delete from livros where nome = '$codli' ";
$query = mysqli_query($conn, $sql) or die ("Erro");

if (mysqli_affected_rows($conn)){
    echo " <script> window.alert('Livro excluido com sucesso') </script>";
    echo " <script> location.href='clientes.html' </script>";
}
else{
    echo " <script> window.alert('Erro ao excluir o livro') </script>";
    echo " <script> location.href='clientes.html' </script>";
}


?>