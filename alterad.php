<?PHP

include_once("conexao.php");

$vcod = $_POST['codigo'];
$vnome = $_POST['Nome'];
$vemail = $_POST['Email'];
$vcep = $_POST['CEP'];
$vendereco = $_POST['Endereco'];
$vnumero = $_POST['Num'];
$vbairro = $_POST['Bairro'];
$vcidade = $_POST['Cidade'];
$vestado = $_POST['Estado'];
$vtelefone = $_POST['Celular'];



 
$sql ="UPDATE clientes set nome='$vnome', email='$vemail', cel='$vtelefone', cep='$vcep', endereco='$vendereco', estado='$vestado', cidade='$vcidade', bairro='$vbairro', numero='$vnumero' WHERE codigo='$vcod'"; 
$query = mysqli_query($conn, $sql) or die ("Erro");
 
if (mysqli_affected_rows($conn)){
    echo " <script> window.alert('Dados do cliente alterado com sucesso') </script>";
    echo " <script> location.href='index.html' </script>";
}
else{
    echo " <script> window.alert('Erro ao alterar dados do cliente') </script>";
    echo " <script> location.href='index.html' </script>";
}
unlink($nomeFinal);
?>
