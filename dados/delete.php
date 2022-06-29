<?php
    require("conecta.php");

    if(isset($_POST['id_hidden']))
        $id = $_POST['id_hidden'];
        $sqlDelete = "DELETE FROM tb_carro WHERE id_cr = $id";

        $resposta = mysqli_query($conexao,$sqlDelete);
        header("Location: ../pagina/lista.php");