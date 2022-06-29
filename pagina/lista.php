<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Projeto PW - Lista de Carros</title>
    <script src="../validar/confirmar.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body style="background-color: #F0EBE3">
    <nav class="navbar navbar-expand-lg fixed-top bg-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Anúncios</a>
                    </li>
                    <li class="nav-item">
                        <?php if (isset($_SESSION['usuario'])) { ?>
                            <a class="nav-link text-white" href="cadastro.php">Cadastro</a>
                        <?php } else { ?>
                            <a class="nav-link disabled text-white" href="cadastro.php">Cadastro</a>
                        <?php } ?>
                    </li>
                </ul>
                <div>
                    <?php if (isset($_SESSION['usuario'])) { ?>
                        <form action="../login/logout.php">
                            <button class="btn btn-danger" type="submit"><?php echo $_SESSION['usuario']; ?> - Logout</button>
                        </form>
                    <?php } else { ?>
                        <form action="../login/login.php">
                            <button class="btn btn-success" type="submit">Login</button>
                        </form>
                    <?php } ?>
                </div>
            </div>
        </div>
    </nav>

    <div style="margin-top: 70px">
        <div>
            <div>
                <h1>Lista de Carros</h1>
                <?php require("../dados/select.php") ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>