<?php

 include_once("conexao.php");
 
 $vcodli = $_POST['codigo'];
 $vnome = $_POST['nome'];
 $vedi = $_POST['editora'];
 $vaut = $_POST['autor'];
 $vtom = $_POST['tombo'];
 $vsit = $_POST['situacao'];




 $sql = "INSERT INTO livros (codigo,nome,editora,autor,tombo,situacao) values ('$vcodli','$vnome', '$vedi', '$vaut', '$vtom', '$vsit')";
 $query = mysqli_query($conn, $sql) or die ("Erro");
 
 if (mysqli_affected_rows($conn)){
    echo " <script> window.alert('Cadastrado com sucesso') </script>";
	echo " <script> location.href='index.html' </script>";
}
else{
    echo " <script> window.alert('Erro ao cadastrar') </script>";
	echo " <script> location.href='index.html' </script>";
}
 
 ?>