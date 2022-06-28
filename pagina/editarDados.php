<?php
  require('../dados/conecta.php');
  session_start();
  extract($_POST);
  $sqlSelect = "SELECT * FROM tb_carro WHERE id_cr = $id_hidden";
  $resposta = mysqli_query($conexao, $sqlSelect);
  $dados = mysqli_fetch_assoc($resposta);
  mysqli_close($conexao);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto PW - Página de Cadastro</title>
</head>
<body>
    <nav>
        <div>
            <ul>
                <li>
                    <a href="../index.php">Página Inicial</a>
                </li>
                <li>
                    <a href="lista.php">Lista</a>
                </li>
                <li>
                    <?php if (isset($_SESSION['usuario'])) { ?>
                        <a href="cadastro.php">Cadastro</a>
                    <?php } else { ?>
                        <a href="cadastro.php">Cadastro</a><!--class="nav-link disabled"-->
                    <?php } ?>
                </li>
            </ul>
        </div>

        <div>
            <?php if(isset($_SESSION['usuario'])) { ?>
                <form action="../login/logout.php">
                    <input type="submit" value="<?php echo $_SESSION['usuario']; ?> - Sair" />
                </form>
            <?php } else { ?>
                <form action="../login/login.php">
                    <input type="submit" value="Entrar" />
                </form>
            <?php } ?>
        </div>
    </nav>

    <div>
        <div>
            <div>
                <h1>Página de Cadastro</h1>
                <form action="../dados/editar.php" method="post" enctype="multipart/form-data">                
                    <div>
                        <input type="hidden" name="id_hidden" value="<?php echo $dados['id_cr']?>"/>
                        <label for="txtNome">Nome:</label>
                        <input type="text" id="txtNome" name="txtNome" value="<?php echo $dados['nome_cr']?>"/>
                    </div>
                    <div>
                        <label for="txtAno">Ano:</label>
                        <input type="text" id="txtAno" name="txtAno" value="<?php echo $dados['ano_cr']?>"/>
                    </div>
                    <div>
                        <label for="txtAno">Preço:</label>
                        <input type="text" id="txtPreco" name="txtPreco" value="<?php echo $dados['preco_cr']?>"/>
                    </div>
                    <div>
                        <label for="txtDescricao">Descrição:</label>
                        <input type="text" id="txtDescricao" name="txtDescricao" value="<?php echo $dados['descricaoCarro_cr']?>"/>
                    </div>
                    <div>
                        <label for="fileFoto">Selecione a foto:</label>
                        <?php   
                            if(isset($_FILES['fileFoto'])){
                                $arquivo = $_FILES['fileFoto'];

                                if($arquivo['error'])
                                    die("Falha ao enviar o arquivo");                                    

                                if($arquivo['size'] <= 2097152)
                                    die("Arquivo muito grande!! Maximo 2MB");                                    
                        ?>
                            <input type="file" id="fileFoto" name="fileFoto" />
                        <?php } else { ?>
                            <input type="file" id="fileFoto" name="fileFoto" />
                        <?php } ?>
                    </div>                    
                    <div>
                        <button type="submit">Salvar</button>
                    </div>
                </form>
            </div>            
        </div>
    </div>
</body>
</html>