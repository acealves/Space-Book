<?php
include("conexao.php");

$vnome = $_POST['pesquisa'];
$sql = "Select * from livros where nome like '%$vnome%'" ;
$query = mysqli_query($conn, $sql) or die ("Erro");

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styleEdli.css">
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

<?php while($linha = mysqli_fetch_assoc($query)){?> 

    <div class="container">
        <div class="form-image">
            <img src="img/spacecutiiman.png" alt="">
        </div>
        <div class="form">

            <form value="<?php echo $linha['nome']?>" name="altera" action="alterar.php">
              <div class="form-header">
                    <div class="title">
                        <h1>Altere Aqui :)</h1>
                    </div> 
                </div>

                <div class="input-group">

                      <div class="input-box">
                            <label>Código</label>
                            <input id="codcli" type="text" value="<?php echo $linha['codigo']?>" name="codcli" name="codcli" disabled>
                        </div>
                
                    
                    <div class="input-box">
                        <label>Nome</label>
                        <input id="nome" type="text" value="<?php echo $linha['nome']?>" name="nome" placeholder="Digite seu nome">
                    </div>

                    <div class="input-box">
                        <label>Autor</label>
                        <input id="autor" type="text" value="<?php echo $linha['autor']?>" name="autor" placeholder="Digite o nome do autor ">
                    </div>

                    <div class="input-box">
                        <label>Editora</label>
                        <input id="editora" type="text" value="<?php echo $linha['editora']?>" name="editora" placeholder="Digite o nome da editora">
                    </div>

                    <div class="input-box">
                        <label>Tombo</label>
                        <input id="tombo" type="text" value="<?php echo $linha['tombo']?>" name="tombo" placeholder="Digite o tombo">
                    </div>


                    <div class="input-box">
                        <label>Situação</label>
                        <input id="situacao" type="text" value="<?php echo $linha['situacao']?>" name="situacao" placeholder="Emprestado/Devolvido">
                    </div>


                    <div class="continue-button">
                        <button type="submit"><a>Alterar</a></button>
                    </div>

                    </form> 

                    <form action="excluirli.php" class="continue-button2" method="post">
                        <input type="hidden" class="texto" value="<?php echo $linha['nome']?>" name="exclui"><br>
                        <button type="submit"><a>Excluir<a></button>
                    </form>	

    
                </div>



                
    
        </div>
        <?php }?>
        
    </div>

    
  
</body>
</html>
