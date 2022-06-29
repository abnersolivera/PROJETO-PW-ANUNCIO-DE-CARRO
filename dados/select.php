<?php
    require("conecta.php");    

    $sqlSelect = "SELECT * FROM tb_carro";
    $respostas = mysqli_query($conexao, $sqlSelect);
?>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <div class="row" style="margin-left: 65px">
        <?php while ($linha = mysqli_fetch_assoc($respostas)) { ?>
            <div class="card" style="width: 14rem; cursor: pointer; margin-left: 10px; margin-top: 9px">
                <img style="height: 120px;" src="<?php echo $linha['caminhoFoto_cr'] ?>" class="card-img-top" alt="<?php echo $linha['caminhoFoto_cr'] ?>">
                <div>
                    <h5 class="card-title text-secondary"><?php echo $linha['nome_cr'] ?></h5>
                    <p class="card-text text-secondary"><?php echo $linha['descricaoCarro_cr'] ?></p>
                </div>
                <div style="margin-top: 4px">
                    <h5 class="card-title text-secondary">R$<?php echo "". $linha['preco_cr'] ?></h5>
                    <p class="card-text text-secondary"><?php echo $linha['ano_cr'] ?></p>
                </div>
                <div>
                    <div style="width: 100%; display: flex; Justify-content: space-between">
                        <div>
                            <form action="../pagina/editarDados.php" method="post">
                                <input type="hidden" name="id_hidden" value="<?php echo $linha['id_cr'] ?>" />
                                <?php if (isset($_SESSION['usuario'])) { ?>
                                    <button type="submit" class="btn btn-outline-success text-dark">
                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                    </button>
                                <?php } else { ?>
                                    <button type="submit" class="btn btn-outline-success text-dark disabled">
                                        <i class="fa fa-pencil disabled" aria-hidden="true"></i>
                                    </button>
                                <?php } ?>
                            </form>
                        </div>

                        <div>
                            <form action="../dados/delete.php" method="post" id="excluir">
                                <input type="hidden" name="id_hidden" value="<?php echo $linha['id_cr'] ?>" />
                                <?php if (isset($_SESSION['usuario'])) { ?>
                                    <button type="submit" class="btn btn-outline-danger text-dark">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </button>
                                <?php } else { ?>
                                    <button type="submit" class="btn btn-outline-danger text-dark disabled">
                                        <i class="fa fa-trash disabled" aria-hidden="true"></i>
                                    </button>
                                <?php } ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>