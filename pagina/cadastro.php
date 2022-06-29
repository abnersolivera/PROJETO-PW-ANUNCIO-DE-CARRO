<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto PW - Página de Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body style="background-color: #F0EBE3">
    <nav class="navbar navbar-expand-lg fixed-top bg-dark" >
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
                        <a class="nav-link text-white" href="lista.php">Anúncios</a>
                    </li>
                    <li class="nav-item">
                        <?php if (isset($_SESSION['usuario'])) { ?>
                            <a class="nav-link text-white" href="../index.php">Cadastro</a>
                        <?php } else { ?>
                            <a class="nav-link disabled text-white" href="../index.php">Cadastro</a>
                        <?php } ?>
                    </li>
                </ul>
                <div>
                    <?php if (isset($_SESSION['usuario'])) { ?>
                        <form action="../login/logout.php">
                            <button class="btn btn-danger" type="submit"><?php echo $_SESSION['usuario'];?> - Logout</button>
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

    <div style="margin-top: 70px; margin-left: 390px;">
        <div>
            <div class="container">
                <h3 style="margin-left: 130px">Cadastre o Veiculo</h3>
                <form action="../dados/salvar.php" method="post" enctype="multipart/form-data">
                    <div class="col-7">
                        <label class="form-label" for="txtNome">Nome</label>
                        <input class="form-control" type="text" id="txtNome" name="txtNome" placeholder="Nome" />
                    </div>
                    <div class="col-7">
                        <label class="form-label" for="txtAno">Ano</label>
                        <input class="form-control" type="text" id="txtAno" name="txtAno" placeholder="Ano" />
                    </div>
                    <div class="col-7">
                        <label class="form-label" for="txtAno">Preço</label>
                        <input class="form-control" type="text" id="txtPreco" name="txtPreco" placeholder="Preço" />
                    </div>
                    <div class="col-7">
                        <label class="form-label" for="txtDescricao">Descrição:</label>
                        <input class="form-control" type="text" id="txtDescricao" name="txtDescricao" placeholder="Descrição" />
                    </div>
                    <div class="col-7">
                        <label for="fileFoto">Selecione a foto:</label>
                        <?php
                        if (isset($_FILES['fileFoto'])) {
                            $arquivo = $_FILES['fileFoto'];

                            if ($arquivo['error'])
                                die("Falha ao enviar o arquivo");
                            exit;

                            if ($arquivo['size'] <= 2097152)
                                die("Arquivo muito grande!! Maximo 2MB");
                            exit;
                        ?>
                            <input class="form-control" type="file" id="fileFoto" name="fileFoto" />
                        <?php } else { ?>
                            <input class="form-control" type="file" id="fileFoto" name="fileFoto" />
                        <?php } ?>
                    </div>
                    <div style="margin-top: 10px;">
                        <button class="btn btn-success" type="submit">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>