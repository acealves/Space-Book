<?php
include_once("conexao.php");

$vnome = $_POST['pesquisa'];
$sql = "Select * from clientes where nome like '%$vnome%'" ;
$query = mysqli_query($conn, $sql) or die ("Erro");

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styleEd.css">
    
    <title>Formulário</title>
</head>

<body>
<header>
        <nav class="nav-bar">
            <div class="logo">
                <h1>Space Book</h1>
                
            </div>
    
             <div class="nav-list">
                <ul>
                    <li class="nav-item"><a href="#" class="nav-link">HOME</a></li>
                    <li class="nav-item"><a href="index.html" class="nav-link">clientes</a></li>
                    <li class="nav-item"><a href="#" class="nav-link"> Gift</a></li>
                
                </ul>
</div>
        </nav>

</header>



    <div class="container">
        <div class="form-image">
            <img src="img/astronomy.png" alt="">
        </div>
        <div class="form">
            <form action="alterad.php" method="post" enctype="multipart/form-data">
            <?php while($linha = mysqli_fetch_assoc($query)){?> 
                
              <div class="form-header">
                    <div class="title">
                        <h1>Altere Aqui</h1>
                    </div> 
                </div>

                <div class="input-group">

                      <div class="input-box">
                            <label>Código</label>
                            <input id="codigo" type="text" value="<?php echo $linha['codigo']?>" name="codigo">
                        </div>
                
                    
                    <div class="input-box">
                        <label>Nome</label>
                        <input id="nome" type="text" value="<?php echo $linha['nome']?>" name="Nome" placeholder="Digite seu nome">
                    </div>

                    <div class="input-box">
                        <label>Celular</label>
                        <input id="cel" type="text" value="<?php echo $linha['cel']?>" name="Celular" placeholder="(xx) xxxx-xxxx">
                        
                    </div>

                    <div class="input-box">
                        <label>E-mail</label>
                        <input id="email" type="text" value="<?php echo $linha['email']?>" name="Email" placeholder="Digite seu e-mail">
                    </div>

                    <div class="input-box">
                        <label> CEP</label>
                        <input id="cep" type="text" value="<?php echo $linha['cep']?>" name="CEP" placeholder="Digite seu CEP">
                    </div>

                    <div class="input-box">
                        <label> Endereço</label>
                        <input id="endereco" type="text" value="<?php echo $linha['endereco']?>" name="Endereco" placeholder="Digite seu endereço">
                    </div>


                    <div class="input-box">
                        <label>Estado</label>
                        <input id="estado" type="text" value="<?php echo $linha['estado']?>" name="Estado" placeholder="Digite seu estado">
                    </div>

                    <div class="input-box">
                        <label>Cidade</label>
                        <input id="cidade" type="text" value="<?php echo $linha['cidade']?>" name="Cidade" placeholder="Digite sua cidade">
                    </div>

                    <div class="input-box">
                        <label>Bairro</label>
                        <input id="bairro" type="text" value="<?php echo $linha['bairro']?>" name="Bairro" placeholder="Digite seu bairro">
                    </div>

                    <div class="input-box">
                        <label>Número</label>
                        <input id="numero" type="text" value="<?php echo $linha['numero']?>" name="Num" placeholder="Digite seu número">
                    </div>

                    <div class="continue-button">
                        <button><a>Alterar</a></button>
                    </div>

                    </form> 

                    <form action="excluir.php" class="continue-button2" method="post">
                        <input type="hidden" class="texto" value="<?php echo $linha['nome']?>" name="exclui"><br>
                        <button type="submit"><a>Excluir<a></button>
                    </form>	

    
                </div>



                
    
        </div>
        </div>
    
        
    </div>

    <?php }?>
  
</body>
</html>
