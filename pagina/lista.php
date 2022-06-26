<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                <h1>Lista de Carros</h1>
                <?php require("../dados/select.php")?>
            </div>            
        </div>
    </div>
</body>
</html>