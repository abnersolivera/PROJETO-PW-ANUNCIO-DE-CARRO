<?php
  session_start()
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto PW - Login</title>
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
                <form action="logout.php">
                    <input type="submit" value="<?php echo $_SESSION['usuario']; ?> - Sair" />
                </form>
            <?php } else { ?>
                <form action="login.php">
                    <input type="submit" value="Entrar" />
                </form>
            <?php } ?>
        </div>
    </nav>

    <div>
        <div>
            <div>
                <h1>Login</h1>
                <form action="validar.php">
                    <div>
                        <label for="txtNome">Nome:</label>
                        <input type="text" id="txtNome" name="txtNome" placeholder="Nome" />
                    </div>
                    <div>
                        <label for="pswSenha">Senha:</label>
                        <input type="password" id="pswSenha" name="pswSenha" placeholder="Senha" />
                    </div>
                    <div>
                        <input type="submit" value="Login" placeholder="Senha" />
                    </div>
                </form>
            </div>            
        </div>
    </div>
</body>
</html>