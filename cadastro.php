<?php

 include_once("conexao.php");
 
 $vcodcli = $_POST['codigo'];
 $vnome = $_POST['nome'];
 $vcel = $_POST['cel'];
 $vema = $_POST['email'];
 $vcep = $_POST['cep'];
 $vbair = $_POST['bairro'];
 $vest = $_POST['estado'];
 $vcid = $_POST['cidade'];
 $vend = $_POST['endereco'];
 $vnum = $_POST['numero'];



 $sql = "INSERT INTO clientes (codigo,nome,email,cel,cep,endereco,estado,cidade,bairro,numero) values ('$vcodcli','$vnome', '$vcel', '$vema', '$vcep', '$vbair', '$vest', '$vcid', '$vend', '$vnum')";
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